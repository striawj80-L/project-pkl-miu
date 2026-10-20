<?php

namespace App\Http\Controllers;

use Symfony\Component\HttpFoundation\BinaryFileResponse;

class ProductVideoController extends Controller
{
    public function __invoke(): BinaryFileResponse
    {
        return response()->file(public_path('Video/Sistem MIU.mp4'), [
            'Content-Type' => 'video/mp4',
            'Cache-Control' => 'public, max-age=3600',
        ]);
    }
}
