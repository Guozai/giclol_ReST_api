<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Announcement;

class AnnouncementAPIController extends Controller
{
    public function fetch() {
        $announcement = Announcement::find('1')->get();
        return response()->json($announcement);
    }

    public function update(Request $request) {
        try {
            $announcement = Announcement::find('1');
            if ($request->isJson()) {
                $announcement = $request->all();
            }
            $saved = $announcement->save();

            if(!$saved){
                return array("status" => "ERROR");
            }
        }
        catch(Exception $e) {
            return array("status" => "ERROR");
        }

        return array("status" => "SUCCESS");
    }
}
