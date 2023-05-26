<?php

namespace App\Http\Controllers;

use App\Models\Karir;
use Illuminate\Http\Request;

class KarirController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $karirs = Karir::all();

        return view('admin.karir.index' , compact('karirs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.karir.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'job_title' => 'required',
            'description' => 'required',
            'requirements' => 'required',
            'responsibilities' => 'required',
            'job_image' => 'required|image'
        ]);

        $input = $request->all();

        if ($image = $request->file('job_image')) {
            $imageName = $image->getClientOriginalName();
            $image->move(public_path('image'), $imageName);
            $input['job_image'] = $imageName;
        }

        Karir::create($input);

        return redirect('admin/karir')->with('message', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Karir $karir)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Karir $karir)
    {
        return view('admin.karir.edit', compact('karir'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Karir $karir)
    {
        $request->validate([
            'job_title' => 'required',
            'description' => 'required',
            'requirements' => 'required',
            'responsibilities' => 'required',
            'job_image' => 'required|image'
        ]);

        $input = $request->all();

        if($request->job_image != ''){        
            $path = public_path('image/');
  
            //code for remove old file
            if($karir->job_image != ''  && $karir->job_image != null){
                 $file_old = $path.$karir->job_image;
                 unlink($file_old);
            }
  
            //upload new file
            $file = $request->job_image;
            $filename = $file->getClientOriginalName();
            $file->move($path, $filename);
            $input['job_image'] = $filename;
  
            //for update in table
            $karir->update($input);
       }

        return redirect('admin/karir')->with('message', 'Data berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Karir $karir)
    {
        $file = $karir->job_image;
        $path = public_path('image/') .$file;

        if(file_exists($path)){
            unlink($path);
        }else{
            dd('file tidak ada');
        }
        
        $karir->delete();

        return redirect('admin/karir')->with('message', 'Data berhasil dihapus');
    }
}
