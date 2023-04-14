<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\StoreAttachmentRequest;
use App\Http\trait\Imageable;
use App\Models\Attachment;
use Illuminate\Http\Request;

class AttachmentController extends Controller
{
    use Imageable;
    public function store(StoreAttachmentRequest $request, $followId)
    {
        $newFile = $this->insertImage($request->desc, $request->file, 'Attachment/');

        Attachment::create([
            'description' => $request->desc,
            'name' => $newFile,
            'follower_id' => $followId
        ]);
        
        return redirect()->route('follow.details', $followId);
    }
}
