<?php

namespace App\Traits;

use Illuminate\Http\UploadedFile;

trait ImageUploadAble
{
    public function upload(UploadedFile $file, string $path, string $prefix = 'upload__'): string
    {
        $file_name = $this->generateImageName($file->getClientOriginalExtension(), $prefix);
        $file->storeAs($path, $file_name, 'upload');

        return $file_name;
    }

    protected function generateImageName($extension, $prefix = 'upload__')
    {
        return uniqid($prefix, true) . date('ymd') . '.' . $extension;
    }

    public function deleteOldFile($path, $disk = null)
    {
        if (!\Storage::disk('upload')->delete($path)) {
            return false;
        }

        return true;
    }
}
