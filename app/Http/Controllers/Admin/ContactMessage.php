<?php

namespace App\Http\Controllers\Admin;

use App\Models\Message;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactMessage extends Controller
{
    public function index()
    {
        $messages=Message::orderBy('id','DESC')->get();
        return view('admin.pages.contactmail.index',compact('messages'));
    }

    public function show($id)
    {
        $message=Message::findOrFail($id);
        return view('admin.pages.contactmail.show',compact('message'));
    }

    public function delete($id)
    {
        try {
        $message=Message::findOrFail($id);
        $message->delete();
        return response()->json([
            'message' => 'Your Message have been successfully deleted',
            'code' => 204,
        ]);
        } catch (\Throwable $th) {
            return response()->json([
                'message' => 'Something went wrong',
                'code' => 500,
            ]);}        
    }
}
