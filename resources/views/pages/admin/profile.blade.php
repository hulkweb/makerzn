@extends('layouts.admin')

@push('css')
    <style>

    </style>
@endpush

@section('content')
    <div class="main-panel">
        <div class="content-wrapper">

            @php
                $fullname = auth()->user()->name;
                $spacePos = strpos($fullname, ' ');
                if ($spacePos !== false) {
                    $profile = substr($fullname, 0, $spacePos);
                    $lastName = substr($fullname, $spacePos + 1);
                } else {
                    $firstName = $fullname;
                    $lastName = '';
                }
            @endphp

            <div class="row">

                <div class="container-fluid">

                    <div class="row">
                        <div class="col-sm-6 mx-auto bg-white">


                            <div class="form mt-4">
                                <form action="{{ route('admin.profile.post') }}" method="POST" enctype="multipart/form-data">

                                    @csrf
                                    <div class="row">
                                        <div class="col-12 py-4">
                                            <label for="firstName"> Name</label>
                                            <input type="text" name="name" class="form-control"
                                                placeholder="Enter First Name" value="{{ auth()->user()->name }}">

                                        </div>
                                        <div class="col-12 py-4">
                                            <label for="email">Email Id</label>
                                            <input type="email" name="email" class="form-control"
                                                placeholder="Enter Email Id" value="{{ auth()->user()->email }}">
                                            @error('firstName')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-12 py-4">
                                            <label for="phone">Update Password.</label>
                                            <input type="text" name="password" class="form-control"
                                                placeholder="Enter Password." x>

                                        </div>
                                    </div>




                                    <button class="btn btn-primary my-2">Save</button>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
                <span class="text-muted text-center text-sm-left d-block d-sm-inline-block"></span>
                <span class="float-none float-sm-end d-block mt-1 mt-sm-0 text-center">Copyright © 2023. All rights
                    reserved.</span>
            </div>
        </footer>
        <!-- partial -->
    </div>
@endsection
