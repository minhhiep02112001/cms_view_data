<?php

namespace App\Service;

use Illuminate\Support\Str;

class UploadFileImage
{
    public static function upload($file , $folder)
    {
        $fileName =  $file->getClientOriginalName();
        while(file_exists($folder.$fileName)){
            $fileName = Str::random(5).'_'.$fileName;
        }
        $file->move($folder , $fileName);
        return $folder.$fileName;
    }
}
