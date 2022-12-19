<?php

namespace App\Http\Controllers\Admin;

use App\Models\DegreeFile;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class DegreeFileController extends Controller
{
    public function download($id)
    {
        $download=DegreeFile::findOrFail($id);
        return response()->download($download->file);
    }

    public function index()
    {
        $files=DegreeFile::get();
        return view('admin.pages.degreefiles.index',compact('files'));
    }

    public function create()
    {
        return view('admin.pages.degreefiles.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $d_file=new DegreeFile;
        $data = $request->all();
        
        $validator = Validator::make($data, [
            'file'   => 'required|mimes:docx,pdf',
            'type'=>'required'

        ],
        [
            'file.required'=>'Please enter the file',
            'type.required'=>'Please enter the type',
            'file.mimes'=>'The file should be in docx , pdf webp format', 


        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }

        if($request->has('file'))
        {
            $ext=$request->file->extension();
            $fileName=rand(1,100).time().'.'.$ext;
            $fileNameWithUpload='files/degree-files/'.$fileName;
            $request->file->move('files/degree-files/',$fileName);
            $file=$fileNameWithUpload;
        }

        $d_file->file =$file;
        $d_file->type=$request->type;
        $d_file->name=$request->name;
        $d_file->save();    

        toastr()->success('added degree files information.');
        return redirect()->route('degre-files.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $d_file=DegreeFile::findOrFail($id);
        return view('admin.pages.degreefiles.edit',compact('d_file'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $file=DegreeFile::findOrFail($id);
        $data = $request->all();
        
        $validator = Validator::make($data, [
            'file'   => 'mimes:docx,pdf',
        ],
        [
            'file.mimes'=>'The file should be in docx,pdf format', 
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }
      
        if($request->has('file'))
        {
            if(File::exists($file->file))
            {
                File::delete($file->file);
            }
            $ext=$request->file->extension();
            $fileName=rand(1,100).time().'.'.$ext;
            $fileNameWithUpload='files/degree-files/'.$fileName;
            $request->file->move('files/degree-files/',$fileName);
            $data['file']=$fileNameWithUpload;

        }

        $file->update($data);

        toastr()->success('updated =degree files information.');
        return redirect()->route('degre-files.index');  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        try {
            $file=DegreeFile::findOrFail($id);
            if(File::exists($file->file))
            {
                File::delete($file->file);
            }
        $file->delete();
        return response()->json([
            'message' => 'Your Degree files have been successfully deleted',
            'code' => 204,
        ]);
        } catch (\Throwable $th) {
            return response()->json([
                'message' => 'Something went wrong',
                'code' => 500,
            ]);}
    }
}
