<?php
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;

Route::post('/new', function (Request $request) {
    $path = public_path('images/filler-image-' . $request->id . '.png');

    if (!file_exists($path)) {
        abort(404);
    }

    $fileType = mime_content_type($path);
    $fileContent = file_get_contents($path);

    return response($fileContent)
        ->header('Content-Type', $fileType);
});