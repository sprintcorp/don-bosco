<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function fileUpload($file,$path)
    {
        $profileImage = $file;
        $profileImageSaveAsName = time()  . "file." . $profileImage->getClientOriginalExtension();
        $upload_path = $path.'/';
        $profile_image_url = $profileImageSaveAsName;
        $success = $profileImage->move($upload_path, $profileImageSaveAsName);
        return $profile_image_url;
    }
}