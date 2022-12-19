@extends('admin.layouts.master')

@section('title')
Policies
@endsection
@section('content')
<div class="main_content_iner ">
    <div class="col-lg-12">
        <div class="white_card card_height_100 mb_30">
        <div class="white_card_header">
        <div class="box_header m-0">
        <div class="main-title">
        <h3 class="m-0">Policies Edit</h3>
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
        <form method="POST" enctype="multipart/form-data" action="{{ route('policies.update',$policie->id) }}">
        @csrf
        @method("PUT")
        <div class="row mb-3">
            <div class="col-md-6 ">
                <a  
                href="{{ route('policies.download',$policie->id) }}"
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
            <div class="col-md-6">
               <div class="form-group">
                   <label for="">Type</label>
                   <select name="type" class="form-control">
                    <option {{ $policie->type===1 ? 'selected' : 'null' }} value="1">Regulations / General University Policies</option>
                    <option {{ $policie->type===2 ? 'selected' : 'null' }}  value="2">Regulations /Student Accounts and Financial Aid</option>
                    <option {{ $policie->type===3 ? 'selected' : 'null' }}  value="3">Academic Policies</option>
                   </select>
               </div>
             </div>
                
                <div class="col-md-6">
                    <label class="form-group" for="Inputdate">Date</label>
                    <div class="mb-3">
                        <input value="{{ $policie->date }}" name="date" class="form-control" type="date" id="Inputdate">
                    </div>
                </div>
           </div>
        <div class="row mb-3">
         <div class="col-md-12">
            <div class="form-group translate">
                <label for="">Name</label>
                <input type="hidden" name="name" value='{{ $policie->name }}'>
                <input value="{{ $policie->translate('name') }}" class="form-control">
            </div>
           
         </div>
        </div>

        


        <a href="{{ route('policies.index') }}" class="btn btn-success">Back</a>
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
