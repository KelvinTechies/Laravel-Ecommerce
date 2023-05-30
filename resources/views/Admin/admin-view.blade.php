@extends('AdminDashboard.layout')

@section('dashboard')
<div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h5 class="mt-0">View Ordered Products</h5>
                    <p class="sub-header">
                    <div class="table-responsive">
                        <table class="table table-centered mb-0" id="btn-editable">
                            <thead>
                                <tr>
                                    
                                    <th> Name</th>
                                    <th>Quantity</th>
                                    <th>Price</th>
                                    <th>Image </th>
                                </tr>
                            </thead>
                        
                            <tbody>
                                @foreach($order->OrderProductModel as $item)
                                <tr>
                                <td>{{$item->ProductsModel->DogName}}</td>
                                <td>{{$item->Quantity}}Qty</td>
                                <td>${{$item->ProductsModel->Price}}.00</td>
                                <td><img width='90' src='{{asset("cover/".$item->ProductsModel->Image)}}'></td>
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