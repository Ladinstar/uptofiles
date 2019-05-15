<?php

namespace App\Http\Controllers;

use App\File;
use App\Http\Requests\FileRequest;
use App\Extension;
use MercurySeries\Flashy\Flashy;
use Redirect;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    public function index()
    {
        $files = File::all();
        return view('index',compact('files'));
    }

    public function show($id)
    {
        $file = File::findOrFail($id);
        return view('show',compact('file'));
    }

    public function create()
    {
        $file = New File();
        return view('create',compact('file'));
    }

    public function store(FileRequest $request)
    {
        $extension = Extension::where('name',$request->file->extension())->first();
        if ($request->file('file')->isValid()) {
            $name = uniqid('uptofiles_').'.'.$request->file->extension();
            $path = $request->file->storeAs('files/upload', $name, 'public');
            $length = $request->file->getSize();
        }
        $file = File::create(
            [
                'extension_id' =>  $extension->id,
                'name' => $request->name,
                'description' => $request->description,
                'link' => $path,
                'length' => $length
            ]
        );
        // return redirect()->route('show', compact('file'));
        Flashy::success("The file has been uploaded with success");
        return Redirect::route('home');
    }
    public function download($id){

        $file = File::findOrFail($id);
        Storage::download(storage_path('app/public/'.$file->link), $file->name);
        dd('rien');
    }
}
