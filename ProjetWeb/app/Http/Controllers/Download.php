<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\ProductType;
class Download extends Controller
{
    public function DownloadAll(){
        $headers = array(
            'Content-Type'=>'image/jpg',
          );
         // $images = ProductType::select('product_image')->get();
          //$image = $images->get(2)->product_image;
        return response()->download(storage_path("app\public\products\\therock.jpg"), 'paslebonnom', $headers);
        //return Storage::download(storage_path($image), 'image',$headers );
        //return Storage::allFiles("events");


    }
}
