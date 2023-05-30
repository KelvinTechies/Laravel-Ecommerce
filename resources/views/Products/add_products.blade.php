@extends('AdminDashboard.layout')

@section('dashboard')

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title">Add Products</h4>
                <p class="sub-header"> </p>
                <form action='add_products' method='post' enctype='multipart/form-data'>
                    @csrf
                        <div class="row">
                                <div class="col-lg-6">
                                    <h4 class="header-title mb-3">Name of Dog</h4>
            
                                    <div class="form-floating mb-3">
                                        <input type="" class="form-control" name='dogName' id="floatingInput" placeholder="Name of Dog">
                                        <label for="floatingInput">Name of Dog</label>
                                    </div>
                                    <div>
                                            @error('dogName')
                                            <p class="text-danger">{{$message}}</p>
                                            @endError
                                     </div>
                                    <h4 class="header-title mb-3">Breed of Dog</h4>
                                    
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" name='dogBreed' id="floatingPassword" placeholder="text">
                                        <label for="floatingPassword">Breed</label>
                                    </div>
                                    <div>
                                            @error('dogBreed')
                                            <p class="text-danger">{{$message}}</p>
                                            @endError
                                     </div>
                                    
                                    <div class="form-floating">
                                    <h4 class="header-title mb-3">Description</h4>
                                        
                                        <textarea class="form-control" name='dogDescription' placeholder="Leave a comment here" id="floatingTextarea2"
                                            style="height: 100px"></textarea>
                                        {{-- <label for="floatingTextarea2">Description</label> --}}
                                    </div>
                                    <div>
                                            @error('dogDescription')
                                            <p class="text-danger">{{$message}}</p>
                                            @endError
                                     </div>
                                </div>
            
                                <div class="col-lg-6">
                                    <h4 class="header-title mt-lg-0 my-3">Color</h4>
            
                                    <div class="form-floating mb-3">
                                        <select class="form-select" id="floatingSelect" name='dogColor' aria-label="Floating label select example">
                                            <option disabled>---Select The Type Of Colour---</option>
                                            <option value="White">White</option>
                                            <option value="Black">Black</option>
                                            <option value="Pink">Pink</option>
                                            <option value="Indigo">Indigo</option>
                                            <option value="Ash">Ash</option>
                                            <option value="Brown">Brown</option>
                                            <option value="Grey">Grey</option>
                                            <option value="white and Ash">white and Ash</option>
                                            <option value="Light-Grey">Light-Grey</option>
                                            <option value="Black and Brown">Black and Brown</option>
                                        </select>
                                        {{-- <label for="floatingSelect">Works with selects</label> --}}
                                    </div>
                                    <div>
                                            @error('dogColor')
                                            <p class="text-danger">{{$message}}</p>
                                            @endError
                                     </div>
                                    <div class="row g-2">
                                    <h4 class="header-title mt-lg-0 my-3">Type OF Product</h4>
                                        
                                        <div class="col-md">
                                            <div class="form-floating">
                                                <input type="text" class="form-control" name ='dogType' id="floatingInputGrid" placeholder="Type OF Product" >
                                                <label for="floatingInputGrid">Type OF Product</label>
                                            </div>
                                        </div>
                                        <div>
                                                @error('dogType')
                                                <p class="text-danger">{{$message}}</p>
                                                @endError
                                         </div>

                                        <div class="col-md">
                                    {{-- <h4 class="header-title mt-lg-0 my-3">Quantity</h4>                                 --}}
                                            <div class="form-floating">
                                                        <input type="number" name='dogQuantity' class="form-control" id="floatingPassword" placeholder="">
                                                        <label for="floatingPassword">Quantity</label>
                                                    </div>
                                            </div>
                                        </div>
                                        <div>
                                                @error('dogQuantity')
                                                <p class="text-danger">{{$message}}</p>
                                                @endError
                                         </div>
                                        <div class="mb-3">
                                               
                                                    <div class="col-xl-6">
                                                        <div class="">
                                                            <label for="formFileMultiple" class="form-label">Cover Image</label>
                                                            <input class="form-control" type="file" id="formFileMultiple" name='coverimage'>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6">
                                                        <div class="">
                                                            <label for="formFileMultiple" class="form-label"> Image</label>
                                                            <input class="form-control" type="file" id="formFileMultiple" name='images[]' multiple>
                                                        </div>
                                                    </div>
                                                    <div>
                                                            @error('image')
                                                            <p class="text-danger">{{$message}}</p>
                                                            @endError
                                                     </div>
                                                    {{-- <div class="form-floating">
                                                            <input type="number" name='dogPrice' class="form-control" id="floatingPassword" placeholder="">
                                                            <label for="floatingPassword">Price</label>
                                                        </div>
                                                        <div>
                                                                @error('dogPrice')
                                                                <p class="text-danger">{{$message}}</p>
                                                                @endError
                                                         </div> --}}
                                                </div>
                                                <div class="form-floating mb-3">
                                                        <input type="number" name='dogPrice' class="form-control" id="floatingPassword" placeholder="">
                                                        <label for="floatingPassword">Price</label>
                                                    </div>
                                                </div>
                                            </div>
            <button class=' btn btn-success w-100'>Add Products</button>
                                            
                                    </div>
                                </div>
                            </div>
                </form>

            </div>
        </div>
    </div>
</div>

@endSection