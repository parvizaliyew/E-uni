@extends('admin.layouts.master')

@section('title')
Contact
@endsection
@section('content')
<div class="main_content_iner ">
    <div class="col-lg-12">
        <div class="white_card card_height_100 mb_30">
        <div class="white_card_header">
        <div class="box_header m-0">
        <div class="main-title">
        <h3 class="m-0">Contact</h3>
        </div>
        <div class="page-header">
            <nav aria-label="breadcrumb">
                <div class="lang">
                    <a href="az" class="btn btn-success active">Az</a>
                    <a href="en" class="btn btn-success">En</a>
                    <a href="de" class="btn btn-success">De</a>
                </div>
            </nav>
        </div>
        </div>
        </div>
        </div>
        <div class="white_card_body">
        <div class="card-body">
        <form method="POST" enctype="multipart/form-data" action="{{ route('setting.update',$setting->id) }}">
        @csrf
 
        <div class="row mb-3">
            <div class="col-md-6">
               <div class="form-group translate">
                   <label for="">Phone 1</label>
                   <input type="text" name="phone_1" class="form-control" value='{{ $setting->phone_1 }}'>
               </div>
               @error('phone_1')
               <span class="text-danger mt-2">{{ $message }}</span> <br>
               @enderror
            </div>
            <div class="col-md-6">
                <div class="form-group translate">
                    <label for="">Phone 2</label>
                    <input type="text" name="phone_2" class="form-control" value='{{ $setting->phone_2 }}'>
                </div>
                @error('phone_2')
                <span class="text-danger mt-2">{{ $message }}</span> <br>
                @enderror
             </div>
           </div>

        <div class="row mb-3">
            <div class="col-md-12">
               <div class="form-group translate">
                   <label for="">Adress</label>
                   <input type="hidden" name="adress" value='{{ $setting->adress }}'>
                   <input value="{{ $setting->translate('adress') }}"  class="form-control">
               </div>
               @error('adress')
               <span class="text-danger mt-2">{{ $message }}</span> <br>
               @enderror
            </div>
           </div>

        <div class="row mb-3">
         <div class="col-md-12">
            <div class="form-group translate">
                <label for="">Email</label>
                <input type="text" name="email" class="form-control" value='{{ $setting->email }}'>
            </div>
            @error('name')
            <span class="text-danger mt-2">{{ $message }}</span> <br>
            @enderror
         </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-4">
               <div class="form-group translate">
                   <label for="">Facebook</label>
                   <input type="text" name="fb" class="form-control" value='{{ $setting->fb }}'>
               </div>
               @error('fb')
               <span class="text-danger mt-2">{{ $message }}</span> <br>
               @enderror
            </div>
            <div class="col-md-4">
                <div class="form-group translate">
                    <label for="">Instagram</label>
                    <input type="text" name="ins" class="form-control" value='{{ $setting->ins }}'>
                </div>
                @error('ins')
                <span class="text-danger mt-2">{{ $message }}</span> <br>
                @enderror
             </div>
             <div class="col-md-4">
                <div class="form-group translate">
                    <label for="">Twitter</label>
                    <input type="text" name="tw" class="form-control" value='{{ $setting->tw }}'>
                </div>
                @error('ins')
                <span class="text-danger mt-2">{{ $message }}</span> <br>
                @enderror
             </div>
           </div>
       
        
        <button type="submit" class="btn btn-primary">Update</button>
        </form>
        </div>
        </div>
        </div>
        </div>
</div>
</div>

@endsection 
@push('js')
<script src="{{ asset('manager/js/translate.js') }}"></script>
<script src="{{ asset('manager/vendors/ckeditor/ckeditor.js') }}"></script>
<script src="{{ asset('manager/js/cketditor.js') }}"></script>
@endpush
