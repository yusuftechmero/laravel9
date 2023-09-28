<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\File;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    function getAudio() {
        
        $url =  'https://media.plivo.com/v1/Account/MAOTHLZMY5YWQ3ODGXYM/Recording/deaa812a-ec00-4d2f-ad9d-03c2ea8eab4c.mp3';

        $dir = public_path('audio/');
        $ch = curl_init($url);
        

        if(!File::exists($dir)) {
            File::makeDirectory($dir);
        }

        $fileName = basename($url);
        $saveFileLoc = $dir . $fileName;
        $fp = fopen($saveFileLoc, 'wb');
        
        // It set an option for a cURL transfer
        curl_setopt($ch, CURLOPT_FILE, $fp);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        
        curl_exec($ch);
        curl_close($ch);
        
        fclose($fp);

    }

    function getUser() {
        return view('user.view');
    }
}
