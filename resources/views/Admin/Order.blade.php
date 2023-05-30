@extends('AdminDashboard.layout')

@section('dashboard')
<div class="">
    <div class="">

        <!-- Start Content-->
        <div class="container-fluid">
            
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Ordered</a></li>
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Table</a></li>
                               
                            </ol>
                        </div>
                    </div>
                </div>
            </div>     
            <!-- end page title --> 

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="responsive-table-plugin">
                                <div class="table-rep-plugin">
                                    <div class="table-responsive" data-pattern="priority-columns">
                                        <table id="tech-companies-1" class="table table-striped">
                                            <thead>
                                <tr>
                                    
                                    <th>Tracking Id</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                            </thead>
                                            <tbody>
                                                    @foreach($orders as $item)
                                                    <tr>
                                                    <td>{{$item->Tracking_id}}</td>
                                                    <td>{{$item->Status}}</td>
                                                    <td><a class='btn btn-primary' href='admin-view/{{$item->id}}'>View</a></td>
                                                    </tr>
                                                    @endforeach
                                          
                                            </tbody>
                                        </table>
                                    </div> <!-- end .table-responsive -->

                                </div> <!-- end .table-rep-plugin-->
                            </div> <!-- end .responsive-table-plugin-->
                        </div>
                    </div> <!-- end card -->
                </div> <!-- end col -->
            </div>
            <!-- end row -->
            
        </div> <!-- container -->

    </div> <!-- content -->

@endsection