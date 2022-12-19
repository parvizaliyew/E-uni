@extends('admin.layouts.master')

@section('title')
Contact Message
@endsection
@section('content')
<div class="main_content_iner ">
    <div class="col-lg-12">
        <div class="white_card card_height_100 mb_30">
        <div class="white_card_header">
        <div class="box_header m-0">
        <div class="main-title">
        <h3 class="m-0">Contact Message</h3>
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

        <div class="row mb-3">
         <div class="col-md-12">
            <div class="form-group translate">
                <label for="">Name</label>
                <input type="text" class="form-control" value='{{ $message->name }}'>
            </div>
         </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-12">
               <div class="form-group translate">
                   <label for="">Email</label>
                   <input type="text" class="form-control" value='{{ $message->email }}'>
               </div>
            </div>
           </div>

           <div class="row mb-3">
            <div class="col-md-12">
               <div class="form-group translate">
                   <label for="">Subject</label>
                   <input type="text" class="form-control" value='{{ $message->subject }}'>
               </div>
            </div>
           </div>
           <div class="row mb-3">
            <div class="col-md-12">
               <div class="form-group translate">
                   <label for="">Message</label>
                   <textarea type="text" class="form-control">{{ $message->msj }}</textarea>
               </div>
            </div>
           </div>
        
        <a href="{{ route('contact.index') }}" class="btn btn-success">Back</a>
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
