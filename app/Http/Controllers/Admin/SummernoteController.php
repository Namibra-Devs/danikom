<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SummernoteController extends Controller
{
    public function upload(Request $request) {
        $img = $request->file('image');
        $filename = uniqid() . '.' . $img->getClientOriginalExtension();
        $img->move('assets/frontend/images/summernote/', $filename);

        return url('/') . "/assets/frontend/images/summernote/" . $filename;
    }
    public function uploadFileManager(Request $request) {
        $items = $request->items;
        // return $items;
        $allowedExts = array('jpg', 'png', 'jpeg', 'svg');
        foreach ($items as $key => $item) {
            $ext = pathinfo($item, PATHINFO_EXTENSION);
            if (!in_array($ext, $allowedExts)) {
                return response()->json(['status' => 'error', 'message' => "Only png, jpg, jpeg, svg images are allowed"]);
            }
        }

        $urls = [];
        foreach ($items as $key => $item) {
            $ext = pathinfo($item, PATHINFO_EXTENSION);
            $filename = uniqid() . '.' . $ext;
            @copy($item, 'assets/frontend/images/summernote/' . $filename);
            $urls[] = url('assets/frontend/images/summernote/' . $filename);
        }

        return response()->json(['status' => 'success', 'urls' => $urls]);
    }



    public function fileManager() {
        return view('admin.basic.file-manager');
    }
}
