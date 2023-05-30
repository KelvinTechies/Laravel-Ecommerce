@extends('AdminDashboard.layout')

@section('dashboard')

<div class="card-body">
    <h4 class="header-title">Filtering</h4>
    <p class="sub-header">
        include filtering in your FooTable.
    </p>
    @if(Session::get('success'))
        
    <div class="alert alert-success">
        {{ Session::get('success') }}
    </div>
    @endIf
    <div class="mb-2">
        <div class="row row-cols-sm-auto g-2 align-items-center">
            <div class="col-12 text-sm-center">
                <select id="demo-foo-filter-status" class="form-select form-select-sm">
                    <option value="">Show all</option>
                    <option value="active">Active</option>
                    <option value="disabled">Disabled</option>
                    <option value="suspended">Suspended</option>
                </select>
            </div>
            <div class="col-12">
                <input id="demo-foo-search" type="text" placeholder="Search" class="form-control form-control-sm" autocomplete="on">
            </div>
        </div>
    </div>
    
    <div class="table-responsive">
        <table id="demo-foo-filtering" class="table table-bordered toggle-circle mb-0 footable-loaded footable tablet breakpoint" data-page-size="7">
            <thead>
            <tr>
                <th data-toggle="true" class="footable-visible footable-sortable footable-first-column">Dog Name<span class=""></span></th>
                <th class="footable-visible footable-sortable">Breed<span class=""></span></th>
                <th data-hide="phone" class="footable-visible footable-sortable footable-last-column">Color<span class=""></span></th>
                <th data-hide="phone" class="footable-visible footable-sortable footable-last-column">Dog Type<span class=""></span></th>
                <th data-hide="phone" class="footable-visible footable-sortable footable-last-column">Quantity<span class=""></span></th>
                <th data-hide="phone" class="footable-visible footable-sortable footable-last-column">Price<span class=""></span></th>
                <th data-hide="phone" class="footable-visible footable-sortable footable-last-column">Image<span class=""></span></th>
                <th data-hide="phone" class="footable-visible footable-sortable footable-last-column">Description<span class=""></span></th>
                <th data-hide="phone, tablet" class="footable-sortable" >Action<span class=""></span></th>
                {{-- <th data-hide="phone, tablet" class="footable-sortable" style="display: none;">Status<span class=""></span></th> --}}
            </tr>
            </thead>
            <tbody>
                    @forEach($Products as $Product)
                
            <tr class="footable-even" style="">
            <td class="footable-visible footable-first-column"><span class="footable-toggle"></span>{{$Product->DogName}}</td>
                {{-- <td class="footable-visible">{{$Product->DogName}}</td> --}}
                <td class="footable-visible footable-last-column">{{$Product->Breed}}</td>
                <td class="footable-visible footable-last-column">{{$Product->Color}}</td>                
                <td class="footable-visible footable-last-column">{{$Product->DogType}}</td>
                <td class="footable-visible footable-last-column">{{$Product->Quantity}}</td>
                <td class="footable-visible footable-last-column">{{$Product->Price}}</td>
                <td class="footable-visible footable-last-column" ><img width="40" height="40" src="{{asset('cover/'.$Product->Image)}}"></td>
                <td class="footable-visible footable-last-column">{{$Product->Description}}</td>
                <td class="" style=""><span class="btn  btn-outline-success "><a style='text-decoration:none; color:green;'  href="edit_product/{{ $Product->id }}">Edit</a></span>
                    <form action='/delete/{{$Product->id}}' method='post'>
                        @csrf
                        @method('DELETE') 
                        <button class="badge label-table btn btn-outline-danger text-danger" onclick=" return confirm('Are you Sure?');" type="submit"> Delete</button></form></td>
                {{-- <td class="" style=""><span class="badge label-table bg-danger">Delete</span></td> --}}
            </tr>
            @endForeach

            </tbody>
            <tfoot>
            <tr class="active">
                <td colspan="5" class="footable-visible">
                    <div class="text-end">
                        <ul class="pagination pagination-rounded justify-content-end footable-pagination mb-0"><li class="footable-page-arrow disabled"><a data-page="first" href="#first">«</a></li><li class="footable-page-arrow disabled"><a data-page="prev" href="#prev">‹</a></li><li class="footable-page active"><a data-page="0" href="#">1</a></li><li class="footable-page"><a data-page="1" href="#">2</a></li><li class="footable-page"><a data-page="2" href="#">3</a></li><li class="footable-page"><a data-page="3" href="#">4</a></li><li class="footable-page"><a data-page="4" href="#">5</a></li><li class="footable-page-arrow"><a data-page="next" href="#next">›</a></li><li class="footable-page-arrow"><a data-page="last" href="#last">»</a></li></ul>
                    </div>
                </td>
            </tr>
            </tfoot>
        </table>
    </div> <!-- end .table-responsive-->
</div>


@endsection