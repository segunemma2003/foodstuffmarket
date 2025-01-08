<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Moniz;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class MonizController extends Controller {
    public function update(Request $request) {
        $moniz = Moniz::first();
        // dd($request->all());
        $moniz = tap($moniz)->update([
            $request->key => $request->value,
        ]);

        return $request->all();
    }

    public function uploadImage(Request $request) {
        $path = saveFile($request->filepond, 'moniz', '', 'temp');

        return storage_path('app/temp/').$path;
    }

    public function submitImage(Request $request) {
        $moniz = Moniz::first();
        // dd($request->all());
        $keys = explode('->', $request->key);
        $oldPath = $moniz;
        foreach ($keys as $key) {
            $oldPath = $oldPath?->{$key} ?? null;
        }
        $array = explode('/', $request->filepond);
        $name = array_pop($array);
        $newPath = public_path("frontend/moniz/uploads/{$name}");
        File::move($request->filepond, $newPath);

        if (! Str::contains($oldPath, 'moniz/assets/images')) {
            File::delete(public_path($oldPath));
        }

        $moniz->update([
            $request->key => "frontend/moniz/uploads/{$name}",
        ]);

        return back();
    }
}
