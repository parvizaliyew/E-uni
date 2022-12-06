@extends('admin.layouts.master')

@section('title')
Donation's
@endsection
@section('content')
<div class="main_content_iner ">
    <div class="col-lg-12">
        <div class="white_card card_height_100 mb_30">
        <div class="white_card_header">
        <div class="box_header m-0">
        <div class="main-title">
        <h3 class="m-0">Donation Add</h3>
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
        <form method="POST" enctype="multipart/form-data" action="{{ route('donations.store') }}">
        @csrf
        <div class="row mb-3">
                <div class="col-md-6">
                    <label class="form-group" for="">Image</label>
                    <div class="mb-3">
                        <input name="img" class="form-control" type="file" id="formFile">
                    </div>
                    @error('img')
                    <span class="text-danger mt-2">{{ $message }}</span> 
                    @enderror
                </div>

                <div class="col-md-6">
                    <label class="form-group" for="Inputdate">Date</label>
                    <div class="mb-3">
                        <input name="date" class="form-control" type="date" id="Inputdate">
                    </div>
                    @error('date')
                    <span class="text-danger mt-2">{{ $message }}</span> 
                    @enderror
                </div>
           </div>
        <div class="row mb-3">
         <div class="col-md-12">
            <div class="form-group translate">
                <label for="">Name</label>
                <input type="hidden" name="name" value='{"az":"","en":"","de":""}'>
                <input  class="form-control">
            </div>
            @error('name')
            <span class="text-danger mt-2">{{ $message }}</span> <br>
            @enderror
         </div>
        </div>


        <div class="row mb-3">
            <div class="col-md-12">
               <div class="form-group translate">
                   <label for="">Donations</label>
                   <input type="hidden" name="donation_name" value='{"az":"","en":"","de":""}'>
                   <textarea  class="form-control"></textarea>
                </div>
               @error('donation_name')
               <span class="text-danger mt-2">{{ $message }}</span> <br>
               @enderror
            </div>
        </div>

        <a href="{{ route('donations.index') }}" class="btn btn-success">Back</a>
        <button type="submit" class="btn btn-primary">Add</button>
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
