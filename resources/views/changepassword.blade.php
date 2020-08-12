@extends('master')

@section('title', 'User | Change Password')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Change Password
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
                                    <label>Old Password</label>
                                    <input type="text" class="form-control" name="old_password"
                                        value="{{ old('old_password') }}" placeholder="enter old password">
                                    @if ($errors->has('old_password'))
                                    <div class="danger">{{ $errors->first('old_password') }}</div>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 col-md-offset-3">
                                <div class="form-group">
                                    <label>New Password</label>
                                    <input type="text" class="form-control" name="new_password"
                                        value="{{ old('new_password') }}" placeholder="enter new password">
                                    @if ($errors->has('new_password'))
                                    <div class="danger">{{ $errors->first('new_password') }}</div>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 col-md-offset-3">
                                <div class="form-group">
                                    <label>Confirm Password</label>
                                    <input type="text" class="form-control" name="confirm_password"
                                        value="{{ old('confirm_password') }}" placeholder="enter confirm password">
                                    @if ($errors->has('confirm_password'))
                                    <div class="danger">{{ $errors->first('confirm_password') }}</div>
                                    @endif
                                </div>
                            </div>
                        </div>

   

                        <div class="box-footer text-center">
                            <button type="button" class="btn btn-primary">
                               Save
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