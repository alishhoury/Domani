<?php

namespace App\Services\Capsule;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use App\Models\Capsule;


class CreateCapsuleService
{

        public static function create(Request $request){
        $validator = Validator::make($request->all(), [
            'mood' => 'required|in:happy,sad,nervous,excited',
            'private_mode' => 'required|in:0,1',
            'surprize_mode' => 'required|in:0,1',
            'message' => 'required|string|max:1000',
            'media' => 'nullable|string',
            'media_type' => 'nullable|in:image,audio',
            'reveal_at' => 'required|date'
        ]);

        if ($validator->fails()) {
            return $this->responseJson("validator error", 401);
         

        }

        $mediaPath = null;
        
        if ($request->has('media') && $request->media) {
            $mediaPath = self::saveBase64Media(
                $request->media, 
                $request->media_type
            );
        }


        $capsule = new Capsule;
        $capsule->mood = $request->mood;
        $capsule->private_mode = (bool) $request->private_mode;
        $capsule->surprize_mode = (bool) $request->surprize_mode;
        $capsule->message = $request->message;
        $capsule->media_path = $mediaPath;
        $capsule->media_type = $request->media_type;
        $capsule->reveal_at = $request->reveal_at;
        $capsule->user_id = auth()->id();
        $capsule->save();

        return $capsule;
    }

        private static function saveBase64Media(string $base64Data, string $type){

        $extension = $type === 'image' ? 'jpg' : 'mp3';
        $fileName = uniqid() . '.' . $extension;
        $filePath = $type . 's/' . $fileName;
        
        Storage::disk('public')->put($filePath, base64_decode($base64Data));
        
        return $filePath;
    }
}