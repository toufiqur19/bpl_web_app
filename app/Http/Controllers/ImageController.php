<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Validation\Rules\Exists;

class ImageController extends Controller
{
   public function image()
   {
    $images = Image::all();
    return view('admin.image.image', compact('images'));
   }
   public function create()
   {
    return view('admin.image.create_image');
   }

   public function store(Request $request)
   {
        $request->validate([
            'name' => 'required',
            'image' => 'nullable|mimes:jpeg,png,jpg,gif,svg',
        ]);

        if($request->has('image'))
        {
            $file = $request->file('image');

            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $path = 'uploads/schedule/';
            $file->move($path, $filename);
        }

        Image::create([
         'name' => $request->name,
         'image' => $path.$filename,
        ]);

        return redirect('admin/image')->with('message','image create successfuly');
   }

   public function imgedit($id)
   {
        $imgedit = Image::find($id);
        return view('admin.image.edit_image',compact('imgedit'));
   }

   public function update(Request $request,$id)
   {
        $request->validate([
            'name' => 'required',
            'image' => 'nullable|mimes:jpeg,png,jpg,gif,svg',
        ]);
        $updateImg = Image::findOrFail($id);
        if($request->has('image'))
        {
            $file = $request->file('image');

            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $path = 'uploads/schedule/';
            $file->move($path, $filename);

            if(File::exists(($updateImg->image)))
            {
                File::delete(($updateImg->image));
            }
        }

        $updateImg->update([
        'name' => $request->name,
        'image' => $path.$filename,
        ]);

        return redirect('admin/image')->with('message','update successfuly');
   }

   public function destroy($id)
   {
    $destroy = Image::where('id',$id)->first();

    $destroy->delete();
    return back()->with('message','image delete successfuly');
   }
}
