<?php


namespace App\Services;


use App\Model\Media;
use Illuminate\Http\Request;

class MediaService
{

    public function show($id)
    {
        $media = Media::find($id);

        return $media;

    }


    public function update(Request $request, $id)
    {
        $media = Media::where('id', '=', $id)->first();


        if($request->hasFile('mediaFile'))
        {
            $fileName = $request->mediaFile->getClientOriginalName('');
            $fileName = time().'_'.$fileName;
            $request->mediaFile->storeAs('public/media', $fileName);
        }
        else
        {
            $fileName = 'NoFile';
        }

        $media->file = $fileName;

        $media->save();

        return "Media has been Saved!";

    }

}