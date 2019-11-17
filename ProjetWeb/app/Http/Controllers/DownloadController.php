<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProductType;
class DownloadController extends Controller
{
    public function downloadAll(){

        /*$test = ProductType::select('product_image')->get();
        $image =$test->get(6)->product_image;
        $path = public_path(). '\storage\products\\'. $image;
        $marche = response()->download($path, 'marchee.jpeg', ['Content-Type' => 'image/jpeg']);

        return $marche;*/
        $zip_file = 'ImageSite.zip';
        $zip = new \ZipArchive();
        $zip->open($zip_file, \ZipArchive::CREATE | \ZipArchive::OVERWRITE);
        try
        {
            
$path = public_path('\storage\image'); 
$files = new \RecursiveIteratorIterator(new \RecursiveDirectoryIterator($path));
foreach ($files as $name => $file)
{
    // We're skipping all subfolders
    if (!$file->isDir()) {
        $filePath     = $file->getRealPath();

        // extracting filename with substr/strlen
        $relativePath = '' . substr($filePath, strlen($path) + 1);

        $zip->addFile($filePath, $relativePath);
    }
}
$zip->close();
return response()->download($zip_file);
}
catch (\Exception $e)
{
    dd($e->getMessage());
}
    }

    public function downloadpdf(){
        
        $file= resource_path(). "\\views\participants\index.blade.php";
        $headers = array(
            'Content-Type: application/pdf',
          );
        return response()->download($file, 'test.pdf', $headers);
    }
}
