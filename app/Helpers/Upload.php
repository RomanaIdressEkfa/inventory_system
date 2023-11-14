<?php

namespace App\Helpers;



class Upload
{
    //image upload
    public static function uploadImage($image, $destinationPath)
    {
        $imageName = '';

        if ($image && $image->isValid()) {
            $imageName = time() . '-' . uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move($destinationPath, $imageName);
        }

        return $imageName;
    }
}
