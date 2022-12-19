@extends('admin.layouts.master')

@section('title')
Degree Files
@endsection
@section('content')
<div class="main_content_iner ">
    <div class="col-lg-12">
        <div class="white_card card_height_100 mb_30">
        <div class="white_card_header">
        <div class="box_header m-0">
        <div class="main-title">
        <h3 class="m-0">Degree Files Update</h3>
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
        <form method="POST" enctype="multipart/form-data" action="{{ route('degre-files.update',$d_file->id) }}">
        @csrf
        @method("PUT")
        <div class="row mb-3">
            <div class="col-md-6 ">
                <a  
                href="{{ route('degre-files.download',$d_file->id) }}"
                class="cv-download">
                <img src="{{ asset('front/') }}/./img/down.svg" alt="">
                Download CV
                </a>
                <br>
                <br>
                <label class="form-group" for="">File</label>
                <input class="form-control" type="file" name="file">
                @error('file')
                    <span class="text-danger mt-2">{{ $message }}</span> <br>
                @enderror
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-12">
               <div class="form-group translate">
                   <label for="">Name</label>
                   <input type="hidden" name="name" value='{{ $d_file->name }}'>
                   <input value="{{ $d_file->translate('name') }}" class="form-control">
               </div>
              
            </div>
           </div>
        <div class="row mb-3">
                <div class="col-md-6">
                    <div class="form-group">
                        <label  for="">Type</label>
                        <select name="type" class="form-control">
                         <option {{ $d_file->type===1 ? 'selected' : '' }} value="1">Bachelor Programs</option>
                         <option {{ $d_file->type===2 ? 'selected' : '' }} value="2">Master degree</option>
                         <option {{ $d_file->type===3 ? 'selected' : '' }} value="3">PhD</option>
                        </select>
                    </div>
                    
                  </div>
        </div>     
        <a href="{{ route('degre-files.index') }}" class="btn btn-success">Back</a>
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
