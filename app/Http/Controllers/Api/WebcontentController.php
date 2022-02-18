<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Sectiontitle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Response;

class WebcontentController extends Controller
{
    protected $section;
    public function __construct(Sectiontitle $section)
    {
        $this->section = $section;
    }


    public function getContent(){
        try {

            $data = $this->section->first();
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
}
