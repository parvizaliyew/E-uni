<?php

namespace App\Http\Controllers\Admin;

use App\Models\Library;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class LibraryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $libraries=Library::orderBy('id','DESC')->get();
        return view('admin.pages.library.index',compact('libraries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.library.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $library=new Library;
        $data = $request->all();
        $validator = Validator::make($data, [
            'name'   => 'required',
            'author'    => 'required',
            'img'   => 'required|mimes:png,jpg,svg,webp',
        ],
        [
            'name.required'=>'Please enter the name',
            'author.required'=>'Please enter the author',
            'img.required'=>'Please enter the img',
            'img.mimes'=>'The image should be in png ,jpg,svg,webp format',
        ]
    );
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }

        if($request->has('img'))
        {
            $ext=$request->img->extension();
            $fileName=rand(1,100).time().'.'.$ext;
            $fileNameWithUpload='image/library/'.$fileName;
            $request->img->move('image/library/',$fileName);
            $data['img']=$fileNameWithUpload;
        }

        Library::create($data);

        toastr()->success('added library information.');
        return redirect()->route('library.index');
    }

    public function aktiv(Request $request)
    {
        $id=$request->id;

        $library=Library::findOrFail($id);

        if($library->aktiv===1)
        {
            $library->aktiv=0;
            $library->save();    
        }
        else
        {
            $library->aktiv=1;
            $library->save(); 
        }
        return response()->json([
            'result' => 1,
        ]);

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
        $library=Library::findOrFail($id);
        return view('admin.pages.library.edit',compact('library'));
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
        $library=Library::findOrFail($id);
        $data = $request->all();
        if($request->has('img'))
        {
            if(File::exists($library->img))
            {
                File::delete($library->img);
            }
            $ext=$request->img->extension();
            $fileName=rand(1,100).time().'.'.$ext;
            $fileNameWithUpload='image/library/'.$fileName;
            $request->img->move('image/library/',$fileName);
            $data['img']=$fileNameWithUpload;
        }
        $library->update($data);      
        toastr()->success('updated Library information.');
        return redirect()->route('library.index');  
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
            $library=Library::findOrFail($id);
            if(File::exists($library->img))
            {
                File::delete($library->img);
            }
        $library->delete();
        return response()->json([
            'message' => 'Your Library have been successfully deleted',
            'code' => 204,
        ]);
        } catch (\Throwable $th) {
            return response()->json([
                'message' => 'Something went wrong',
                'code' => 500,
            ]);}
    }
}
