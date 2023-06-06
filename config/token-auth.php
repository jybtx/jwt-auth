<?php


return [

    'secret' => env('JWT_SECRET_KEY', ''),


    'ttl' => env('JWT_ACCESS_TTL', 60 * 24 * 2),


    'refresh_ttl' => env('JWT_REFRESH_TTL', 60 * 24 * 15),



];






