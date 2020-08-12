@extends('master')

@section('title', 'BeWe | Dashboard')

@section('content')
     <!-- Content Header (Page header) -->
     <section class="content-header">
        <h1>
          Dashboard
          <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
          <li class="active">Dashboard</li>
        </ol>
      </section>
  
      <!-- Main content -->
      <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-aqua">
              <div class="inner">
                <h3>1</h3>
  
                <p>Today Users</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-green">
              <div class="inner">
                <h3>1<sup style="font-size: 20px"></sup></h3>
  
                <p>Total Users</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-yellow">
              <div class="inner">
                <h3>0<sup style="font-size: 20px"></h3>
  
                <p>Total Transactions</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->

          <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-yellow">
              <div class="inner">
                <h3>0<sup style="font-size: 20px"></h3>
  
                <p>Today's Transactions</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
       
          <div class="col-md-12">
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
      </section>

@endsection