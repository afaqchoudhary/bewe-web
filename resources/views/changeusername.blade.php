@extends('master')

@section('title', 'User | Change Username')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Change Username
        <small>Preview</small>
    </h1>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Change Data</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form method="POST" action="#" enctype="multipart/form-data">
                    <div class="box-body">
                        @csrf
                        @if (session('error'))
                        <div class="alert alert-danger">{{ session('error') }}</div>
                        @endif
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3">
                                <div class="form-group">
                                    <label>User Name</label>
                                    <input type="text" class="form-control" name="user_name"
                                        value="{{ old('user_name') }}" placeholder="enter user name">
                                    @if ($errors->has('user_name'))
                                    <div class="danger">{{ $errors->first('user_name') }}</div>
                                    @endif
                                </div>
                            </div>
                        </div>

                        

   

                        <div class="box-footer text-center">
                            <button type="button" class="btn btn-primary">
                               Update
                            </button>
                        </div>
                </form>
            </div>
            <!-- /.box -->

        </div>
        <!--/.col (left) -->
        <!-- right column -->

        <!--/.col (right) -->
    </div>
    <!-- /.row -->
</section>
<!-- /.content -->

@endsection