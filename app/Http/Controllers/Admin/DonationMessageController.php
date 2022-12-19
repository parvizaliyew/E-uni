<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Models\DonationMessage;
use App\Http\Controllers\Controller;

class DonationMessageController extends Controller
{
    public function index()
    {
        $messages=DonationMessage::orderBy('id','DESC')->get();
        return view('admin.pages.donationmail.index',compact('messages'));
    }

    public function show($id)
    {
        $message=DonationMessage::findOrFail($id);
        return view('admin.pages.donationmail.show',compact('message'));
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
