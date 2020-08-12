@extends('master')

@section('title', 'Country | Index')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Country Index
        <small>Preview</small>
    </h1>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          
        </div>


        <div class="row">
            <div class="col-xs-12">
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Country List</h3>

                        <a href="{{URL('country/add')}}" class="btn btn-primary pull-right">
                            <i class="fa fa-plus"> Add Country</i>
                        </a>
                    </div>
                    <!-- /.box-header -->
                    <div class="container-fluid">
                        
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th class="text-center">Country Name</th>
                                    <th class="text-center">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                                <tr>
                                    <td class="text-center"></td>
                                

                                    <td class="text-center">
                                        <a href="{{URL('country/edit')}}" class="btn btn-primary">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <a class="btn btn-primary" data-toggle="modal" data-target="#modal-default">
                                            <i class="fa fa-trash" aria-hidden="true"></i>
                                        </a>
                                    </td>
                                    <div class="modal fade" id="modal-default">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;
                                                        </span>
                                                    </button>
                                                    <h4 class="modal-title">Delete Country
                                                    </h4>
                                                </div>
                                                <div class="modal-body">
                                                    <p>Do you want to delete this country?</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default pull-left"
                                                        data-dismiss="modal">No</button>
                                                    <a href="#" type="submit" class="btn btn-primary">
                                                        Yes</a>
                                                </div>
                                            </div>
                                            <!-- /.modal-content -->
                                        </div>
                                        <!-- /.modal-dialog -->
                                    </div>
                                    <!-- /.modal -->
                                </tr>
                                
                            </tbody>


                        </table>
                        
                    </div>


                </div>
                <!-- /.box-body -->

            </div>
            <!-- /.box -->
        </div>
    </div>



   
</section>
<!-- /.content -->

@endsection