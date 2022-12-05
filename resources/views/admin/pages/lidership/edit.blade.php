@extends('admin.layouts.master')

@section('title')
LeaderShip
@endsection
@section('content')
<div class="main_content_iner ">
    <div class="col-lg-12">
        <div class="white_card card_height_100 mb_30">
        <div class="white_card_header">
        <div class="box_header m-0">
        <div class="main-title">
        <h3 class="m-0">LeaderShip Update</h3>
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
        <form method="POST" enctype="multipart/form-data" action="{{ route('leadership.update',$lider->id) }}">
        @csrf
        @method("PUT")
        <div class="row mb-3">
                <div class="col-md-12">
                    <div class="form-group translate">
                        <label for="">Book Name</label>
                        <input type="hidden" name="book_name" value='{{ $lider->book_name }}'>
                        <input  class="form-control" value="{{ $lider->translate('book_name') }}">
                    </div>
                    @error('name')
                    <span class="text-danger mt-2">{{ $message }}</span> <br>
                    @enderror
                 </div>
           </div>
        <div class="row mb-3">
         <div class="col-md-12">
            <div class="form-group translate">
                <label for="">Name</label>
                <input type="hidden" name="name" value='{{ $lider->name }}'>
                <input  class="form-control" value="{{ $lider->translate('name') }}">
            </div>
            @error('name')
            <span class="text-danger mt-2">{{ $message }}</span> <br>
            @enderror
         </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-12">
               <div class="form-group translate">
                   <label for="">Position</label>
                   <input type="hidden" name="position" value='{{ $lider->position }}'>
                   <input  class="form-control" value="{{ $lider->translate('position') }}">
               </div>
               @error('position')
               <span class="text-danger mt-2">{{ $message }}</span> <br>
               @enderror
            </div>
           </div>


        <div class="row mb-3">
            <div class="col-md-12">
               <div class="form-group translate">
                   <label for="">Description</label>
                   <input type="hidden" name="desc" value='{{ $lider->desc }}'>
                   <textarea  class="form-control">{{ $lider->translate('desc') }}</textarea>
                </div>
               @error('desc')
               <span class="text-danger mt-2">{{ $message }}</span> <br>
               @enderror
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-12">
               <div class="form-group translate">
                   <label for="">Short Description</label>
                   <input type="hidden" name="short_desc" value='{{ $lider->short_desc }}'>
                   <textarea  class="form-control">{{ $lider->translate('short_desc') }}</textarea>
                </div>
               @error('short_desc')
               <span class="text-danger mt-2">{{ $message }}</span> <br>
               @enderror
            </div>
        </div>

        <div class="row mb-3">
        <div class="col-md-6">
            <label class="form-group" for="">Image</label> <br>
            <img width="400px" height="300px" src="{{ asset($lider->img) }}" alt=""> 
            <div class="mb-3">
                <input name="img" class="form-control" type="file" id="formFile">
            </div>
            @error('img')
            <span class="text-danger mt-2">{{ $message }}</span> 
            @enderror
        </div>
        </div>

        <a href="{{ route('leadership.index') }}" class="btn btn-success">Back</a>
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
