<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Str;
use App\Models\ProgramDegre;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class ProgramDegreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $programs=ProgramDegre::get();
        return view('admin.pages.program_degre.index',compact('programs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.program_degre.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $program=new ProgramDegre;
        $data = $request->all();
        $validator = Validator::make($data, [
            'type'    => 'required',
            'logo'   => 'required|max:256|mimes:png,jpg,svg,webp',
            'img'   => 'required|mimes:png,jpg,svg,webp',

        ],
        [
           'type.required'=>'Please enter Type ' ,
           'logo.required'=>'Please enter the Logo ' ,
           'logo.mimes'=>'The logo should be in png ,jpg,svg,webp format',
           'img.required'=>'Please enter the img',
           'img.mimes'=>'The image should be in png ,jpg,svg,webp format',

        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }

        if($request->has('logo'))
        {
            $ext=$request->logo->extension();
            $fileName=rand(1,100).time().'.'.$ext;
            $fileNameWithUpload='image/program-degree/'.$fileName;
            $request->logo->move('image/program-degree/',$fileName);
            $data['logo']=$fileNameWithUpload;
        }

        if($request->has('img'))
        {
            $ext=$request->img->extension();
            $fileName=rand(1,100).time().'.'.$ext;
            $fileNameWithUpload='image/program-degree/'.$fileName;
            $request->img->move('image/program-degree/',$fileName);
            $data['img']=$fileNameWithUpload;
        }
        
        $data['slug'] = [];
        foreach (json_decode($request->title) as $key => $title) {
            $data['slug'][$key] = Str::slug($title);
        }

        ProgramDegre::create($data);

        toastr()->success('added program-degree information.');
        return redirect()->route('programs-degree.index');
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
        $program=ProgramDegre::findOrFail($id);
        return view('admin.pages.program_degre.edit',compact('program'));

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
        $program=ProgramDegre::findOrFail($id);
        $data = $request->all();
      
        if($request->has('img'))
        {
            if(File::exists($program->img))
            {
                File::delete($program->img);
            }
            $ext=$request->img->extension();
            $fileName=rand(1,100).time().'.'.$ext;
            $fileNameWithUpload='image/program-degree/'.$fileName;
            $request->img->move('image/program-degree/',$fileName);
            $data['img']=$fileNameWithUpload;

        }

        if($request->has('logo'))
        {
            if(File::exists($program->logo))
            {
                File::delete($program->logo);
            }
            $ext=$request->logo->extension();
            $fileName=rand(1,100).time().'.'.$ext;
            $fileNameWithUpload='image/program-degree/'.$fileName;
            $request->logo->move('image/program-degree/',$fileName);
            $data['logo']=$fileNameWithUpload;

        }


        $data['slug'] = $program->slug;
        foreach (json_decode($request->name) as $key => $name) 
        {
            $data['slug'][$key] = Str::slug($name);
        }

        $program->update($data);

        toastr()->success('updated Programs Degree information.');
        return redirect()->route('programs-degree.index');    
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
            $program=ProgramDegre::findOrFail($id);
            if(File::exists($program->img))
            {
                File::delete($program->img);
            }
            if(File::exists($program->logo))
            {
                File::delete($program->logo);
            }
        $program->delete();
        return response()->json([
            'message' => 'Your Programs degree have been successfully deleted',
            'code' => 204,
        ]);
        } catch (\Throwable $th) {
            return response()->json([
                'message' => 'Something went wrong',
                'code' => 500,
            ]);}
    }
}
