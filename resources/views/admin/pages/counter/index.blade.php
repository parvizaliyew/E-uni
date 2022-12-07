@extends('admin.layouts.master')

@section('title')
Counter
@endsection
@section('content')
<div class="main_content_iner ">
    <div class="col-lg-12">
        <div class="white_card card_height_100 mb_30">
        <div class="white_card_header">
        <div class="box_header m-0">
        <div class="main-title">
        <h3 class="m-0">Counter</h3>
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
        <form method="POST" enctype="multipart/form-data" action="{{ route('counter.update',$counter->id) }}">
        @csrf
        <div class="row mb-3">
            <div class="col-md-6">
               <div class="form-group translate">
                   <label for="">Student</label>
                   <input type="text" name="student" class="form-control" value='{{ $counter->student }}'>
               </div>
               @error('student')
               <span class="text-danger mt-2">{{ $message }}</span> <br>
               @enderror
            </div>
            <div class="col-md-6">
                <div class="form-group translate">
                    <label for="">Faculty</label>
                    <input type="text" name="faculty" class="form-control" value='{{ $counter->faculty }}'>
                </div>
                @error('faculty')
                <span class="text-danger mt-2">{{ $message }}</span> <br>
                @enderror
             </div>
           </div>

           <div class="row mb-3">
            <div class="col-md-6">
               <div class="form-group translate">
                   <label for="">Country</label>
                   <input type="text" name="country" class="form-control" value='{{ $counter->country }}'>
               </div>
               @error('country')
               <span class="text-danger mt-2">{{ $message }}</span> <br>
               @enderror
            </div>
            <div class="col-md-6">
                <div class="form-group translate">
                    <label for="">Alumni Employet</label>
                    <input type="text" name="alumni_employet" class="form-control" value='{{ $counter->alumni_employet }}'>
                </div>
                @error('alumni_employet')
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
