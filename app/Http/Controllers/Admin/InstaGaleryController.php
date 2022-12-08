<?php

namespace App\Http\Controllers\Admin;

use App\Models\InstaGalery;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class InstaGaleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galeries=InstaGalery::get();
        return view('admin.pages.instagalery.index',compact('galeries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.instagalery.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $galery=new InstaGalery;
        $data = $request->all();
        
        $validator = Validator::make($data, [
            'img'   => 'required|mimes:png,jpg,svg,webp',

        ],
        [
            'img.required'=>'Please enter the img',
            'img.mimes'=>'The image should be in png ,jpg,svg,webp format', 


        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }

        if($request->has('img'))
        {
            $ext=$request->img->extension();
            $fileName=rand(1,100).time().'.'.$ext;
            $fileNameWithUpload='image/instagalery/'.$fileName;
            $request->img->move('image/instagalery/',$fileName);
            $image=$fileNameWithUpload;
        }

        $galery->img=$image;
        $galery->save();    

        toastr()->success('added instagram galery information.');
        return redirect()->route('instagalery.index');
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
        $galery=InstaGalery::findOrFail($id);
        return view('admin.pages.instagalery.edit',compact('galery'));
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
        $galery=InstaGalery::findOrFail($id);
        $data = $request->all();
        
        $validator = Validator::make($data, [
            'img'   => 'mimes:png,jpg,svg,webp',
        ],
        [
            'img.mimes'=>'The image should be in png ,jpg,svg,webp format', 
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }
      
        if($request->has('img'))
        {
            if(File::exists($galery->img))
            {
                File::delete($galery->img);
            }
            $ext=$request->img->extension();
            $fileName=rand(1,100).time().'.'.$ext;
            $fileNameWithUpload='image/instagalery/'.$fileName;
            $request->img->move('image/instagalery/',$fileName);
            $data['img']=$fileNameWithUpload;

        }

        $galery->update($data);

        toastr()->success('updated Instagram galery information.');
        return redirect()->route('instagalery.index');  
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
            $galery=InstaGalery::findOrFail($id);
            if(File::exists($galery->img))
            {
                File::delete($galery->img);
            }
        $galery->delete();
        return response()->json([
            'message' => 'Your Instagram Galery have been successfully deleted',
            'code' => 204,
        ]);
        } catch (\Throwable $th) {
            return response()->json([
                'message' => 'Something went wrong',
                'code' => 500,
            ]);}
    }
}
