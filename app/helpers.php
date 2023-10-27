<?php

use Carbon\Carbon;
use Illuminate\Http\UploadedFile;

if (!function_exists('change_date_format')) {

    function change_date_format($date)
    {
        return Carbon::createFromFormat('m/d/Y', $date)->format('Y-m-d');
    }
}

if (!function_exists('store_in_public')) {

    function store_in_public(string $destination, UploadedFile $image)
    {
        $image_name = time() . '.' . $image->extension();

        $image->move(public_path($destination), $image_name);

        return $image_name;
    }
}
