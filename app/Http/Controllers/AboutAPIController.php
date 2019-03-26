<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\About;

class AboutAPIController extends Controller
{
    public function fetch() {
        $about = About::find('1')->get();
        return response()->json($about);
    }

    public function update(Request $request) {
        try {
            $about = About::find('1');
            if ($request->isJson()) {
                $about = $request->all();
            }
            $saved = $about->save();

            if(!$saved){
                return array("status" => "ERROR");
            }
        }
        catch(Exception $e) {
            return array("status" => "ERROR");
        }

        return array("status" => "SUCCESS");;
    }
}
