@extends('layouts.master')

@section('breadcrumbs')
<section class="content-header">
    <h1>
      Students
    </h1>
    <ol class="breadcrumb">
      <li><a href="{{route('students.index')}}"><i class="fa fa-users"></i> Students</a></li>
    </ol>
</section>
@endsection

@section('content')
@if ($message = Session::get('success'))
    <div class="col-md-12">
        <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h4><i class="icon fa fa-check"></i> Success!</h4>
            {{ $message }}
        </div>
    </div>
@endif

<div class="col-md-12">
    <!-- general form elements -->
    <div class="box box-primary">

        <div class="box-header with-border">
            <h3 class="box-title">Data Siswa</h3>
        </div>
        <!-- /.box-header -->

        <div class="box-body">

            <a href="{{route('students.create')}}" class="btn btn-success">Tambah Data Siswa</a>
            <br><br>

            <div class="box-body table-responsive no-padding">
                <table class="table table-hover">
                    <tbody>
                        <tr>
                            <th>No.</th>
                            <th>Nama</th>
                            <th>No. Handphone</th>
                            <th>Alamat</th>
                            <th>User manage by</th>
                            <th>Aksi</th>
                        </tr>
                        @php
                            $no = 1;
                        @endphp
                        @foreach ($students as $row)
                        <tr>
                            <td width="5%">{{$no++}}</td>
                            <td width="20%">{{$row->name}}</td>
                            <td width="15%">{{$row->phone_number}}</td>
                            <td>{{$row->address}}</td>
                            <td width="20%">{{$row->user_name}}</td>
                            <td width="15%">
                                <a href="{{route('students.edit', $row->id)}}" class="btn btn-warning">Edit</a>&nbsp;
                                <form action="{{route('students.destroy', $row->id)}}" method="POST">
                                    @csrf
                                    {{method_field('DELETE')}}
                                    <input type="submit" class="btn btn-danger btn-delete" value="Hapus">
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

                {{$students->links()}}
              </div>
        </div>

    </div>
</div>
@endsection

@push('scripts')
<script>
$(function(){

    $('.btn-delete').click(function(e){
        e.preventDefault();

        Swal.fire({
            title: 'Anda yakin ingin menghapus data ini?',
            text: "Data akan dihapus permanen!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya',
            cancelButtonText: 'Tidak'
            }).then((result) => {
            if (result.value) {
                $(e.target).closest('form').submit()
            }
        })
    })

})
</script>
@endpush
