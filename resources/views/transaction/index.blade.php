@extends('master')

@section('title', 'Transaction | Index')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Transaction Index
        <small>Preview</small>
    </h1>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Search</h3>
                </div>
                <!-- /.box-header -->
                <form method="GET" action="">

                    <div class="col-md-4 ">
                        <div class="form-group">
                            <label>Transaction ID</label>

                             <input type="text" class="form-control" id="exampleInputEmail1"
                                        name="transaction_id" placeholder="enter transaction id">
                            @if ($errors->has('transaction_id'))
                            <div class="danger">{{ $errors->first('transaction_id') }}</div>
                            @endif
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Paid Via</label>

                            <input type="text" class="form-control" id="exampleInputEmail1"
                                        name="payment_method" placeholder="enter payment method">
                            @if ($errors->has('payment_method'))
                            <div class="danger">{{ $errors->first('payment_method') }}</div>
                            @endif
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Sender's Name</label>

                            <input type="text" class="form-control" id="exampleInputEmail1"
                                        name="sender_name" placeholder="enter sender's name">
                            @if ($errors->has('sender_name'))
                            <div class="danger">{{ $errors->first('sender_name') }}</div>
                            @endif
                        </div>
                    </div>

                    <div class="box-footer text-center">
                <button type="submit" class="btn btn-primary">Search</button>
            </div>
            </form>
            </div>
            <!-- /.box-body -->

          


            <div class="row">
                <div class="col-xs-12">
                    <div class="box box-primary">
                        <div class="box-header">
                            <h3 class="box-title">Transaction List</h3>

                        </div>
                        <!-- /.box-header -->
                        <div class="container-fluid">
                            <div class="text-center">
                                <h2>No transaction found</h2>
                            </div>
                            {{-- <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th class="text-center">Transaction ID</th>
                                        <th class="text-center">Sender Name</th>
                                        <th class="text-center">Reciever Name</th>
                                        <th class="text-center">Amount</th>
                                        <th class="text-center">Paid Via</th>
                                        <th class="text-center">Created At</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>

                                    
                                    <tr>
                                        <td class="text-center"> </td>
                                        <td class="text-center"></td>
                                        <td class="text-center"></td>
                                        <td class="text-center"></td>
                                        <td class="text-center"></td>
                                        <td class="text-center"></td>

                                    </tr>

                                </tbody>


                            </table> --}}
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