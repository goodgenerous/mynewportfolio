<?php

namespace App\Models;

class Porto
{
    private static $porto_item = [
        [
            "slug" => "autoshare",
            "type" => 1,
            "name-project" => "AutoShare App",
            "desc-project" => "Rent Car & Motorcycle App",
            "image-project" => "img/AutoShare.png"
        ],
        [
            "slug" => "akar-studio",
            "type" => 1,
            "name-project" => "AKAR Studio Website",
            "desc-project" => "Architecture Studio Website",
            "image-project" => "img/AkarStudio.png"
        ],
        [
            "slug" => "dexter-studio",
            "type" => 1,
            "name-project" => "Dexter Studio Website",
            "desc-project" => "Creative Agency Website",
            "image-project" => "img/DexterStudio.png"
        ],
        [
            "slug" => "inside-umkm",
            "type" => 2,
            "name-project" => "Inside UMKM Website",
            "desc-project" => "Enterpreunership Website",
            "image-project" => "img/InsideUMKMPortfolio.png"
        ],
        [
            "slug" => "pertamina",
            "type" => 2,
            "name-project" => "Pertamina MOR V Website",
            "desc-project" => "Company Profile Website",
            "image-project" => "img/PertaminaPortfolio.png"
        ],
        [
            "slug" => "akar-studio-website",
            "type" => 2,
            "name-project" => "AKAR Studio Website",
            "desc-project" => "Architecture Studio Website",
            "image-project" => "img/AkarStudio.png"
        ]  
        ];

        public static function all()
        {
            return collect(self::$porto_item);
        }

        public static function find($slug)
        {
            $porto = static::all();
    
            return $porto->firstWhere('slug', $slug);
        }
}