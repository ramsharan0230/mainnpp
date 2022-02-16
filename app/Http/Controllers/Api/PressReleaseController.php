<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Repo\PressReleaseInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Storage;

class PressReleaseController extends Controller
{
    protected $pressRelease;
    public function __construct(PressReleaseInterface $pressRelease)
    {
        $this->pressRelease = $pressRelease;
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
                Log::error("Press Release List Display", [
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
            // dd($request->except('search'));
            $parameter = $request->all();
            $parameter["sort_by"] = $sortBy;
            $parameter["sort_field"] = $sortField;
            $parameter["limit"] = $limit;
            $path = '/news-events';

            $data = $this->pressRelease->getAllWithParam($parameter, $path);
            
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
            Log::error("Press Release List Display", [
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

    public function getSpacificPressReleaseBySlug($slug)
    {
        try {
            $data = $this->pressRelease->getSpacificPressReleaseBySlug($slug);
            return response()->json([
                "status" => "200",
                "payload" => $data
            ], 200);

        } catch (ModelNotFoundException $ex) {
            Log::info("Press Release Display", [
                "status" => "404",
                "message" => "No Record Found",
                "slug" => $slug
            ]);
            return response()->json([
                "status" => "404",
                "message" => "No record found"
            ], 404);
        } catch (\Exception $ex) {
            Log::error("Press Release Display", [
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
