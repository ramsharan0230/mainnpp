<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Repo\HistoryInterface;
use App\Repo\HistoryImageInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Response;

class HistoryController extends Controller
{
    protected $history;
    public function __construct(HistoryInterface $history, HistoryImageInterface $historyImage)
    {
        $this->history = $history;
        $this->historyImage = $historyImage;
    }


    public function getHistory(){
        try {

            $data = $this->history->getHistory();

            if ($data == null) {
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
            Log::error("History Display", [
                'status' => "500",
                'message' => serialize($ex->getMessage())
            ]);
            return response()->json([
                "status" => "500",
                "message" => "Something went wrong"
            ], 500);
        }
    }


    public function historyImage(Request $request){
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
                Log::error("History Image List Display", [
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
            $path = '/galleries';

            $data = $this->historyImage->getAllWithParam($parameter, $path);
            
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
            Log::error("History Image List Display", [
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

    public function getSpacificHistoryImageBySlug($slug)
    {
        try {
            $gallery = $this->gallery->getHistoryImageBySlug($slug);
            
            if($gallery)
                $media = Media::where(['gallery_id'=>$gallery->id, 'publish'=>1])->orderBy('created_at', 'DESC')->get();
            else
                $media = [];
                
            return response()->json([
                "status" => "200",
                "payload" => $media
            ], 200);

        } catch (ModelNotFoundException $ex) {
            Log::info("Gallery Display", [
                "status" => "404",
                "message" => "No Record Found",
                "slug" => $slug
            ]);
            return response()->json([
                "status" => "404",
                "message" => "No record found"
            ], 404);
        } catch (\Exception $ex) {
            Log::error("Gallery Display", [
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
