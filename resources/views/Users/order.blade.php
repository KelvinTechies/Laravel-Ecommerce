@extends('UserDashboard.layout')

@section('userdashboard')

<div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h5 class="mt-0">Inline edit with Button</h5>
                    <p class="sub-header">Inline edit like a spreadsheet, toolbar column with edit button only and without focus on first input.</p>
                    <div class="table-responsive">
                        <table class="table table-centered mb-0" id="btn-editable">
                            <thead>
                                <tr>
                                    
                                    <th>Tracking Id</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                        
                            <tbody>
                                @foreach($order as $item)
                                <tr>
                                <td>{{$item->Tracking_id}}</td>
                                <td>{{$item->Status}}</td>
                                <td><a class='btn btn-primary' href='/view-order/{{$item->id}}'>View</a></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div> <!-- end .table-responsive-->
                </div> <!-- end card-body -->
            </div> <!-- end card -->
        </div> <!-- end col -->
    </div> <!-- end row -->


@endsection