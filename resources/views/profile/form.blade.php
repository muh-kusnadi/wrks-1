@extends('layouts.master')

@section('breadcrumbs')
<section class="content-header">
    <h1>
      Profile
    </h1>
    <ol class="breadcrumb">
      <li><a href="{{route('profile')}}"><i class="fa fa-user"></i> Profile</a></li>
    </ol>
</section>
@endsection

@section('content')
<div class="col-md-12">
    @if ($message = Session::get('success'))
        <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h4><i class="icon fa fa-check"></i> Success!</h4>
            {{ $message }}
        </div>
    @endif
</div>

<div class="col-md-12">
    <!-- general form elements -->
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Form Profile</h3>
        </div>
        <!-- /.box-header -->

        <!-- form start -->
        <form method="post" action="{{route('profile.update')}}" enctype="multipart/form-data">
            @csrf
            <div class="box-body">
                <div class="form-group @error('name') has-error @enderror">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter name" value="{{Auth::user()->name}}">
                    @error('name')
                        <span class="help-block">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group @error('email') has-error @enderror">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" value="{{Auth::user()->email}}">
                    @error('email')
                        <span class="help-block">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="password">Password</label> <label style="color: #ff0400;">(Kosongkan jika tidak ingin diubah)</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                </div>
                <div class="form-group @error('email') has-error @enderror">
                    <label for="photo" name="photo">Photo</label>
                    <input type="file" id="photo" name="photo">
                </div>
                @error('email')
                    <span class="help-block">{{ $message }}</span>
                @enderror
            </div>
            <!-- /.box-body -->

            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
    <!-- /.box -->


  </div>
@endsection
