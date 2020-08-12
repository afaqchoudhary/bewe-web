@extends('master')

@section('title', 'User | Index')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        User Index
        <small>Preview</small>
    </h1>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
            {{-- <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Search</h3>
                </div>
                <!-- /.box-header -->
                <form method="GET" action="">

                    <div class="col-md-4 ">
                        <div class="form-group">
                            <label>User Name</label>

                            <input type="text" class="form-control" id="exampleInputEmail1"
                                        name="restaurant_name" placeholder="enter user name">
                            @if ($errors->has('user_type'))
                            <div class="danger">{{ $errors->first('user_type') }}</div>
                            @endif
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label>block</label>

                            <select class="form-control select2" name="user_block" style="width: 100%;"
                                placeholder="select is blocked">
                                <option value="user_id"></option>
                                <option value="user_id"></option>


                            </select>
                            @if ($errors->has('user_block'))
                            <div class="danger">{{ $errors->first('user_block') }}</div>
                            @endif
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label>User Contact</label>

                            <input type="text" class="form-control" id="exampleInputEmail1"
                                        name="restaurant_name" placeholder="enter contact name">
                            @if ($errors->has('user_profile'))
                            <div class="danger">{{ $errors->first('user_profile') }}</div>
                            @endif
                        </div>
                    </div>

                    <div class="box-footer text-center">
                <button type="submit" class="btn btn-primary">Search</button>
            </div>
            </form>
            </div> --}}
            <!-- /.box-body -->

          


            <div class="row">
                <div class="col-xs-12">
                    <div class="box box-primary">
                        <div class="box-header">
                            <h3 class="box-title">User List</h3>

                        </div>
                        <!-- /.box-header -->
                        <div class="container-fluid">
                            @if ($users->count() > 0)
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th class="text-center">Name</th>
                                        <th class="text-center">Contact Number</th>
                                        <th class="text-center">Email</th>
                                        <th class="text-center">Country</th>
                                        <th class="text-center">Signup Type</th>
                                        <th class="text-center">Device Type</th>
                                        {{-- <th class="text-center">Status</th> --}}
                                        <th class="text-center">Created At</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                    <tr>
                                        <td class="text-center">{{ $user->name }}</td>
                                        <td class="text-center">{{ $user->contact_no }}</td>
                                        <td class="text-center">{{ $user->email }}</td>
                                        <td class="text-center">{{ $user->country_name }}</td>
                                        {{-- <td class="text-center">
                                            <label class="switch">
                                                <input data-id="restaurant_id" class="is-user-blocked" type="checkbox"
                                                    data-onstyle="success" data-offstyle="danger" data-toggle="toggle"
                                                    data-on="Active" data-off="InActive">
                                                <span class="slider round"></span>
                                                </br>
                                            </label></td> --}}
                                            <td class="text-center">{{ $user->signup_type }}</td>
                                            <td class="text-center">{{ $user->device_type }}</td>
                                            <td class="text-center">{{ $user->created_at }}</td>

                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            @else
                            <div class="text-center">
                                <h2>No user found</h2>
                            </div>
                            @endif
                            
                        </div>


                    </div>
                    <!-- /.box-body -->

                </div>
                <!-- /.box -->
            </div>
        </div>



    </div>
    <!--/.col (left) -->
    <!-- right column -->

    <!--/.col (right) -->

    <!-- /.row -->
</section>
<!-- /.content -->

@endsection