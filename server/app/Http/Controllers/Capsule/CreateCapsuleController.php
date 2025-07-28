<?php

namespace App\Http\Controllers\Capsule;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use App\Models\Capsule;
use App\Http\Controllers\Controller;

class CreateCapsuleController extends Controller
{
    public function create(Request $request){
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
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()
            ], 422);
        }

        $mediaPath = null;
        
        if ($request->has('media') && $request->media) {
            $mediaPath = $this->saveBase64Media(
                $request->media, 
                $request->media_type
            );
        }

        $post = Capsule::create([
            'mood' => $request->mood,
            'private_mode' => (bool) $request->private_mode,
            'surprize_mode' => (bool) $request->surprize_mode,
            'message' => $request->message,
            'media_path' => $mediaPath,
            'media_type' => $request->media_type,
            'reveal_at' => $request->reveal_at,
            'user_id' => auth()->id()
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Post created successfully',
            'data' => $post
        ], 201);


        
    }

    function saveBase64Media(string $base64Data, string $type){

        $extension = $type === 'image' ? 'jpg' : 'mp3';
        $fileName = uniqid() . '.' . $extension;
        $filePath = $type . 's/' . $fileName;
        
        Storage::disk('public')->put($filePath, base64_decode($base64Data));
        
        return $filePath;
    }
}
