@extends('layouts.master')

@section('breadcrumbs')
<section class="content-header">
    <h1>
      Students <small>Edit</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="{{route('students.index')}}"><i class="fa fa-users"></i> Students</a></li>
      <li>Edit</li>
    </ol>
</section>
@endsection

@section('content')

<div class="col-md-6">
    <!-- general form elements -->
    <div class="box box-primary">

        <div class="box-header with-border">
            <h3 class="box-title">Ubah Data Siswa</h3>
        </div>
        <!-- /.box-header -->

        <form action="{{route('students.update', $students->id)}}" method="post">
            {{method_field('PUT')}}
            <div class="box-body">
                @csrf

                @include('student.form')
            </div>

            <div class="box-footer">
                <button type="submit" class="btn btn-warning">Ubah</button> &nbsp;
                <a href="{{route('students.index')}}" class="btn btn-default">Kembali</a>
            </div>
        </form>

    </div>
</div>
@endsection
