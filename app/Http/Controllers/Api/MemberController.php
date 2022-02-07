<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Repo\MemberInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Storage;

class MemberController extends Controller
{
    protected $member;
    public function __construct(MemberInterface $member)
    {
        $this->member = $member;
    }

    public function index(Request $request){
        try {
            $sortBy = $request->get("sort_by", "desc");
            $sortField = $request->get("sort_field");
            $limit = $request->get("limit", 10);
            try {
                $this->validate($request, [
                    "filter_field" => "sometimes|string",
                    "filter_value" => "required_with:filter_field|string",
                    "q" => "sometimes",
                ]);
            } catch (\Exception $ex) {
                Log::error("Category List Display", [
                    "status" => "422",
                    "message" => serialize($ex->response->original),
                    "request" => $request->all()
                ]);
                return response()->json([
                    "status" => "422",
                    "errors" => $ex->response->original
                ], 422);
            }

            try {
                $this->validate($request, [
                    "limit" => "required|integer|min:1"
                ]);
            } catch (\Exception $ex) {
                $limit = 10;
            }
            
            $parameter = $request->all();
            $parameter["sort_by"] = $sortBy;
            $parameter["sort_field"] = $sortField;
            $parameter["limit"] = $limit;
            $path = '/members';

            $data = $this->member->getAllWithParam($parameter, $path);
            
            if (count($data) == 0) {

                return response()->json([
                    "status" => "404",
                    "message" => "No record found"
                ], 404);
            }

            return response()->json([
                "status" => "200",
                "payload" => $data
            ], 200);

        } catch (\Exception $ex) {
            Log::error("NewsEvent List Display", [
                'status' => "500",
                'message' => serialize($ex->getMessage()),
                'request' => $request->all()
            ]);
            return response()->json([
                "status" => "500",
                "message" => "Something went wrong"
            ], 500);
        }
    }

    public function store(Request $request){
        try{
            $this->validate($request, [
                "name" => "required|string|max:199",
                "phone" => 'required|string|max:199',
                "email" => "sometimes|string|unique:members",
                "gender" => "required|string",
                "disabled" => "required|integer|min:0|max:1",
                "birth_year" => "required|integer",
                "birth_month" => "required|integer",
                "birth_date" => "required|integer",
                "identity_card" => "required|string",
                "id_number" => "required|string|max:50",
                "form_reason" => "required|string|max:199",
                "current_country" => "required|string",
    
                "tem_address" => "required|min:0|max:1",
                "temp_province" => "sometimes",
                "temp_district" => "sometimes",
                "temp_municipality" => "sometimes",
                "temp_tole" => "sometimes",
                "temp_ward" => "sometimes",
    
                "perm_province" => "required|integer",
                "perm_district" => "required|integer",
                "perm_municipality" => "required|integer",
                "perm_tole" => "required|string|max:199",
                "perm_ward" => "required|integer",
    
                "occupation" => "required|string|max:199",
                "specialist" => "required|string|max:199",
                "party_level" => "required|string|max:199",
                "time_duration" => "required|string|max:199",
                'picture' => 'required|mimes:jpeg,jpg,png|max:20000',
                'language'=>'required|in:en,np'
            ]);

        }catch (\Exception $ex) {
            return response()->json([
                "status" => "422",
                "errors" => $ex->response->original
            ], 422);
        }

        try {
            $data = $request->all();
            if($request->hasFile('picture')){
                if($file=$request->file('picture')){
                    $imageName = time() ."-". str_replace(' ', '-', $file->getClientOriginalName());
                    $file->storeAs('public/backend/assets/images/news/', $imageName);
                    $data['picture']='storage/backend/assets/images/news/'.$imageName;
                }
            }
            $data['samabesi'] = ' ';

            $member = $this->member->create($data);

            return response()->json([
                "status" => "200",
                "message" => "Membership Created Successfully",
            ], 200);

        } catch (\Exception $ex) {
            dd($ex->getMessage());
            Log::error("Membership Create", [
                'status' => "500",
                'message' => serialize($ex->getMessage()),
                'request' => serialize($request->all())
            ]);

            return response()->json([
                "status" => "500",
                "message" => "Something went wrong"
            ], 500);
        }
    }

    public function getSpacificNewsEventBySlug($slug)
    {
        try {
            $data = $this->member->getNewsEventBySlug($slug);
            return response()->json([
                "status" => "200",
                "payload" => $data
            ], 200);

        } catch (ModelNotFoundException $ex) {
            Log::info("NewsEvent Display", [
                "status" => "404",
                "message" => "No Record Found",
                "slug" => $slug
            ]);
            return response()->json([
                "status" => "404",
                "message" => "No record found"
            ], 404);
        } catch (\Exception $ex) {
            Log::error("NewsEvent Display", [
                'status' => " 500",
                'message' =>serialize($ex->getMessage()),
                "slug" => $slug
            ]);


            return response()->json([
                "status" => "500",
                "message" => "Something went wrong"
            ], 500);
        }
    }
}
