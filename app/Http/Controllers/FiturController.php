<?php

namespace App\Http\Controllers;

use App\Models\Fitur;
use Illuminate\Http\Request;

class FiturController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $fiturs = Fitur::all();

        return view('admin.fitur.index' , compact('fiturs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.fitur.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'fitur' => 'required',
            'fitur_image' => 'required|image'
        ]);

        $input = $request->all();

        if ($image = $request->file('fitur_image')) {
            $imageName = $image->getClientOriginalName();
            $image->move(public_path('image'), $imageName);
            $input['fitur_image'] = $imageName;
        }

        Fitur::create($input);

        return redirect('admin/fitur')->with('message', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Fitur $fitur)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Fitur $fitur)
    {
        return view('admin.fitur.edit', compact('fitur'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Fitur $fitur)
    {
        $request->validate([
            'fitur' => 'required', 'fitur_image' => 'required|image',
        ]);

        $input = $request->all();

        if($request->fitur_image != ''){        
            $path = public_path('image/');
  
            //code for remove old file
            if($fitur->fitur_image != ''  && $fitur->fitur_image != null){
                 $file_old = $path.$fitur->fitur_image;
                 unlink($file_old);
            }
  
            //upload new file
            $file = $request->fitur_image;
            $filename = $file->getClientOriginalName();
            $file->move($path, $filename);
            $input['fitur_image'] = $filename;
  
            //for update in table
            $fitur->update($input);
       }

        return redirect('admin/fitur')->with('message', 'Data berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Fitur $fitur)
    {
        $file = $fitur->fitur_image;
        $path = public_path('image/') .$file;

        if(file_exists($path)){
            unlink($path);
        }else{
            dd('file tidak ada');
        }
        
        $fitur->delete();

        return redirect('admin/fitur')->with('message', 'Data berhasil dihapus');
    }
}
