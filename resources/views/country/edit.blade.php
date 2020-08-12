@extends('master')

@section('title', 'Country | Edit Country')

@section('content')

<section class="content-header">
    <h1>
        Edit Category
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
                    <h3 class="box-title">Edit Data</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form method="GET" action="{{URL('country/index')}}" enctype="multipart/form-data">

                    <div class="box-body">
                        @csrf
                        @if (session('error'))
                        <div class="alert alert-danger">{{ session('error') }}</div>
                        @endif

                        <div class="col-md-4 col-md-offset-4">
                            <div class="form-group">
                                <label>Country Name</label>
                                <input type="text" class="form-control" name="country_name"
                                    value="{{ old('country_name') }}" placeholder="enter country name">
                                @if ($errors->has('country_name'))
                                <div class="danger">{{ $errors->first('country_name') }}</div>
                                @endif

                            </div>
                        </div>

                        <div class="col-md-4 col-md-offset-4">
                            <div class="form-group">
                                <label>Country Code</label>
                                <input type="text" class="form-control" name="country_code"
                                    value="{{ old('country_code') }}" placeholder="enter country code">
                                @if ($errors->has('country_code'))
                                <div class="danger">{{ $errors->first('country_code') }}</div>
                                @endif

                            </div>
                        </div>

                         <!-- /.modal -->
          
                    </div>
                    <div class="box-footer text-center">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>

            
            <!-- /.box-body -->

            <div class="modal fade" id="modal-default">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title">Update Country</h4>
                        </div>
                        <div class="modal-body">
                            <p>Do you want to save the changes?</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
           
            </form>
        </div>
        <!-- /.box -->

    </div>
    <!--/.col (left) -->
    <!-- right column -->

   
</section>
<!-- /.content -->

@endsection