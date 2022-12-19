<?php

namespace App\Http\Controllers\Admin;

use App\Models\Policie;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class PoliciesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $policies=Policie::orderBy('id','DESC')->get();
        return view('admin.pages.policies.index',compact('policies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.policies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $validator = Validator::make($data, [
            'name'   => 'required',
            'type'    => 'required',
            'date' => 'required',
            'file'   => 'required|mimes:docx,pdf',
        ],
        [
            'date.required'=>'Please enter the date',
            'type.required'=>'Please enter the type',
            'file.required'=>'Please enter the file',
            'img.mimes'=>'The image should be in docx ,pdf format',
        ]
    );
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }

        if($request->has('file'))
        {
            $ext=$request->file->extension();
            $fileName=rand(1,100).time().'.'.$ext;
            $fileNameWithUpload='files/policies/'.$fileName;
            $request->file->move('files/policies/',$fileName);
            $data['file']=$fileNameWithUpload;
        }

        Policie::create($data);

        toastr()->success('added policies information.');
        return redirect()->route('policies.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function download($id)
    {
        $download=Policie::findOrFail($id);
        return response()->download($download->file);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $policie=Policie::findOrFail($id);
        return view('admin.pages.policies.edit',compact('policie'));
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
        $policie=Policie::findOrFail($id);
        $data = $request->all();
        if($request->has('file'))
        {
            if(File::exists($policie->file))
            {
                File::delete($policie->file);
            }
            $ext=$request->file->extension();
            $fileName=rand(1,100).time().'.'.$ext;
            $fileNameWithUpload='files/policies/'.$fileName;
            $request->file->move('files/policies/',$fileName);
            $data['file']=$fileNameWithUpload;

        }

        $policie->update($data);      
        toastr()->success('updated policies information.');
        return redirect()->route('policies.index');    
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
            $policie=Policie::findOrFail($id);
            if(File::exists($policie->file))
            {
                File::delete($policie->file);
            }
          
        $policie->delete();
        return response()->json([
            'message' => 'Your policie have been successfully deleted',
            'code' => 204,
        ]);
        } catch (\Throwable $th) {
            return response()->json([
                'message' => 'Something went wrong',
                'code' => 500,
            ]);}
    }
}
