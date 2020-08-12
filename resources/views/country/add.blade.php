@extends('master')

@section('title', 'Country | Add Country')

@section('content')

<section class="content-header">
    <h1>
        Add Country
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
                    <h3 class="box-title">Add Data</h3>
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

                    </div>

                    <div class="box-footer text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            </div>
            <!-- /.box-body -->

            
           
            </form>
        </div>
        <!-- /.box -->

    </div>
    <!--/.col (left) -->
    <!-- right column -->

    
</section>
<!-- /.content -->

@endsection