<?php

namespace App\Http\Controllers\Admin;

use App\Models\Donation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class DonationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $donations=Donation::get();
        return view('admin.pages.donation.index',compact('donations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.donation.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $donation=new Donation;
        $data = $request->all();
        $validator = Validator::make($data, [
            'date'   => 'required',
            'img'   => 'required|mimes:png,jpg,svg,webp',
        ],
        [
            'date.required'=>'Please enter the date',
            'img.required'=>'Please enter the img',
            'img.mimes'=>' The image should be in png ,jpg,svg,webp format',

        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }

        if($request->has('img'))
        {
            $ext=$request->img->extension();
            $fileName=rand(1,100).time().'.'.$ext;
            $fileNameWithUpload='image/donations/'.$fileName;
            $request->img->move('image/donations/',$fileName);
            $data['img']=$fileNameWithUpload;
        }
        

        Donation::create($data);

        toastr()->success('added donation information.');
        return redirect()->route('donations.index');
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
        $donation=Donation::findOrFail($id);
        return view('admin.pages.donation.edit',compact('donation'));

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
        $donation=Donation::findOrFail($id);
        $data=$request->all();
        $validator = Validator::make($data, [
            'img'   => 'mimes:png,jpg,svg,webp',
        ],
        [
            'img.mimes'=>' The image should be in png ,jpg,svg,webp format',
        ]);

        if($validator->fails())
        {
             return redirect()->back()->withErrors($validator);
        }

        if($request->has('img'))
        {
            if(File::exists($donation->img))
            {
                File::delete($donation->img);
            }
            $ext=$request->img->extension();
            $fileName=rand(0,100).time().'.'.$ext;
            $fileNameWithUpload='image/donations/'.$fileName;
            $request->img->move('image/donations/',$fileName);
            $data['img']=$fileNameWithUpload;
        }

        
        $donation->update($data);
        toastr()->success('updated donation information.');
        return redirect()->route('donations.index');
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
            $donation=Donation::findOrFail($id);
            if(File::exists($donation->img))
            {
                File::delete($donation->img);
            }
        $donation->delete();
        return response()->json([
            'message' => 'Your donation have been successfully deleted',
            'code' => 204,
        ]);
        } catch (\Throwable $th) {
            return response()->json([
                'message' => 'Something went wrong',
                'code' => 500,
            ]);}
    }
}
