<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\Image;

class ImageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function create(){
        return view ('image.create');
    }

    public function save(Request $request){

        //Validacion 
        $validate = $this->validate($request,[
            'description' => ['required'],
            'image_path' => ['required','mimes:jpg,jpeg,png,gif']
        ]);

        //Recoger datos 
        $image_path = $request->file('image_path');
        $description = $request->input('description');

        // Asignar valores nuevo objeto
		$user = \Auth::user();
        $image = new Image();
		$image->user_id = $user->id;
        $image->description = $description;
		
		// Subir fichero
        if($image_path){
			$image_full = time().$image_path->getClientOriginalName();
			Storage::disk('images')->put($image_full, File::get($image_path));
			$image->image_path = $image_full;
		}
		
		$image->save();
		
		return redirect()->route('home')->with([
			'message' => 'La foto ha sido subida correctamente!!'
		]);

    }

    public function getImage($filename){
        $file = Storage::disk('images')->get($filename);
        return new Response($file, 200);
    }
}
