@extends('AdminDashboard.layout')

@section('dashboard')
<div class="row">
        <div class="col-lg-6">

            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Basic Form</h4>
                    <p class="text-muted font-14">
                        Parsley is a javascript form validation library. It helps you provide your users with feedback on their form submission before sending it to your server.
                    </p>

                    <form action="/edit/{id}" method='post' class="parsley-examples">
                        @csrf
                        @method('PUT')
                            <div class="mb-3">
                                    <label for="pass1" class="form-label">Full Name<span class="text-danger">*</span></label>
                                    <input id="pass1" type="text" placeholder="Password" value='{{$userData->FullName}}'  required class="form-control" />
                                </div>
                        <div class="mb-3">
                            <label for="userName" class="form-label">User Name<span class="text-danger">*</span></label>
                        <input type="text" name="nick" parsley-trigger="change" required placeholder="Enter user name" value='{{$userData->UserName}}' class="form-control" id="userName" />
                        </div>
                        <div class="mb-3">
                            <label for="emailAddress" class="form-label">Email address<span class="text-danger">*</span></label>
                            <input type="email" name="email" parsley-trigger="change" value='{{$userData->Email}}'  required placeholder="Enter email" class="form-control" id="emailAddress" />
                        </div>

                        <div class="mb-3">
                                <label for="pass1" class="form-label">Profile Image<span class="text-danger">*</span></label>
                                <input id="pass1" type="file" placeholder="Password"  required class="form-control" />
                            </div>
                        <div class="text-end">
                            <button class="btn btn-primary waves-effect waves-light" type="submit">Submit</button>
                            <button type="reset" class="btn btn-secondary waves-effect">Cancel</button>
                        </div>
                    </form>
                </div>
            </div> <!-- end card -->
        </div>
        <!-- end col -->



@endsection