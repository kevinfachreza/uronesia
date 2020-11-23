<?php

namespace App\Http\Controllers\Functions;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;
use File;
use Image;

class ImageUploader extends Controller
{
    public function upload($file,$name)
    {
        $ext_document = ['pdf','csv','xml','xls','xlsx'];
        $ext_image = ["jpg", "png", "jpeg", "bmp", "svg", "webp"];
        $ext_video = ["mp4", "webm", "3gp"];
        $ext = $file->extension();

        $slug = Carbon::now()->format('dmy').$this->generateRandomString(5);
        $uploaded_file = $file->store('/uploads');
        $name = $name.'-'.$slug.'.'.$ext;
        Storage::setVisibility($uploaded_file, 'public');
        File::move(storage_path('app').'/'.$uploaded_file, public_path().'/uploads/'.$name);

        $path = 'uploads/'.$name;

        return $path;

    }

    function generateRandomString($length = 10) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
}
