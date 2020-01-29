@extends('layouts.master')

@section('breadcrumbs')
<section class="content-header">
    <h1>
      Home
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    </ol>
</section>
@endsection

@section('content')
<div class="col-md-6 col-sm-12 col-xs-12">
    <div class="info-box">
      <span class="info-box-icon bg-aqua"><i class="fa fa-users"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">Data User</span>
        <span class="info-box-number">{{$users}}</span>
      </div>
      <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
</div>

<div class="col-md-6 col-sm-12 col-xs-12">
    <div class="info-box">
      <span class="info-box-icon bg-green"><i class="fa fa-graduation-cap"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">Data Siswa</span>
        <span class="info-box-number">{{$students}}</span>
      </div>
      <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
</div>
@endsection
