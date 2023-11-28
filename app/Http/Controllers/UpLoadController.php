<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HinhAnh;
class UpLoadController extends Controller
{
    public function upLoad(){
        return view('upload');
    }
    public function upLoadHandler(Request $rq){
        $files=$rq->hinh_anh;
        $paths=[];
        $message="Thành công";
        foreach($files as $file){
            $paths[]=$file->store('images');
        }
        $data=[
            'message'=>$message,
            'paths'=>$paths
        ];
        return view('uploaded',$data);
    }
}
