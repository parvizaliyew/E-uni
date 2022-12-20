@extends('admin.layouts.master')

@section('title')
Library
@endsection

@section('content')

<div class="main_content_iner ">
    <div class="main_content_iner ">
        <div class="container-fluid p-0">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="white_card card_height_100 mb_30">
                        <div class="white_card_header">
                            <div class="box_header m-0">
                                <div class="main-title">
                                    <h3 class="m-0">Library
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="white_card_body">
                            <div class="QA_section">
                                <div class="white_box_tittle list_header">
                                    <h4>Table</h4>

                                    <div class="add_button ms-2">
                                        <a href="{{ route('library.create') }}" class="btn_1">ADD</a>
                                    </div>
                                </div>
                            </div>
                            <div class="QA_table mb_30">

                                <table class="table lms_table_active ">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Image</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Aktiv</th>
                                            <th scope="col">Prosesler</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                       
                                        @foreach ($libraries as $item)
                                        <tr>
                                            <td>{{ $loop->index+1 }}</td>
                                            <td><img width="70px" height="70px" src="{{ asset($item->img) }}" alt=""></td>
                                            <td>{{ Str::limit($item->name,20,'...') }}</td>
                                            <td><label class="switc">
                                                <input type="checkbox" {{ $item->aktiv===1 ? 'checked' : '' }} id="aktiv"  onclick="aktivButton({{ $item->id }})" >
                                                <span class="slider round"></span>
                                            </label>
                                        </td>
                                            <td class="d-flex" style="font-size: 20px;">
                                                <a class="btn btn-primary" href="{{ route('library.edit',$item->id) }}"><i class="ti-pencil"></i></a>
                                                <a class="btn btn-danger delete" href="{{ route('library.delete',$item->id) }}"><i class="ti-trash"></i></a>                                               
                                            </td>
                                        </tr>
                                        @endforeach
                                    
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
            </div>
        </div>
    </div>
</div>
</div>

@push('js')
<script>
    $('.delete').on('click', function(e) {
        e.preventDefault();
        let url = $(this).attr('href');
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                fetch(url)
                    .then(resp => resp.json())
                    .then(data => {
                        if (data.code == 204) {
                            Swal.fire(
                                'Deleted!',
                                data.message,
                                'success'
                            );

                            setInterval(() => {
                                window.location.reload();
                            }, 2500);
                        }
                    })
            } else {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: data.message,
                    footer: '<a href="">Why do I have this issue?</a>'
                })
            }
        })
    });

</script>


<script>
function aktivButton(id)
{
    var id =id;
    
    $.ajax({
        url:"library/aktiv",
        type:"post",
        data:{
            id:id,
            _token: '{{csrf_token()}}',
        },
        succes:function(result)
        {
            if(result===1)
            {
                // console.log('aktiv deyil')
            }
            else
            {
                console.log('aktiv deyil')

            }
        }

    })
    }

</script>
@endpush

@endsection
