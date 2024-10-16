@extends('layouts.admin')
@push('css')
    <link href="{{ asset('admin/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
    <style>
        .error_text {
            color: red;
        }

        input,
        textarea {
            color: black !important;
        }
    </style>
    {{-- <script src="https://cdn.ckeditor.com/ckeditor5/41.3.1/classic/ckeditor.js"></script> --}}
@endpush
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800 d-flex justify-content-between"> <span>Subscriptions</span> <span>
            </span>
            {{-- <button class="btn btn-primary" data-toggle="modal" data-target="#createModal">Create</button> --}}
        </h1>

        <div class="row my-2">
            <div class="col-md-3">
                <form class="d-none  d-sm-inline-block form-inline mr-auto ml-md-3 mt-4 my-md-0 mw-100 navbar-search">
                    <div class="input-group bg-white" style="margin-top:25px">
                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                            @if (request()->has('search')) value="{{ request('search') }}" @endif aria-label="Search"
                            name="search" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="button">
                                <i class="fas fa-search fa-sm"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-1 d-flex">

                <div class="px-3 pt-3  mt-2">
                    <a href="{{ route('admin.transactions.index') }}" class="btn btn-primary">
                        <i class="fas fa-rotate-right"></i>
                    </a>
                </div>
            </div>

        </div>


        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">
                    Subscriptions
                </h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>#TRID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>total</th>
                                <th>Qauntity</th>
                                <th>Plan</th>
                                <th>Status</th>
                                <th>Created Date</th>
                                {{-- <th>Action</th> --}}

                            </tr>
                        </thead>

                        <tbody>

                            @forelse ($subscriptions as $i => $item)
                                <tr>
                                    <td>{{ $item->id }}</td>

                                    <td>{{ $item->user->name }}</td>
                                    <td>{{ $item->user->email }}</td>


                                    <td>${{ $item->total }}</td>
                                    <td>{{ $item->qty }}</td>

                                    <td>{{ $item->plan->name }}</td>
                                    <td>{{ $item->status }}</td>

  
                                    <td>{{ date('Y/m/d', strtotime($item->created_at)) }}</td>

                                    {{-- <td> <button class="btn btn-primary mx-2"
                                            data-url="{{ route('admin.transactions.update', $item->id) }}"
                                            data-amount="{{ $item->amount }}" data-type="{{ $item->type }}"
                                            data-type="{{ $item->type }}"
                                            data-proof="{{ asset("uploads/proofs/$item->proof") }}"
                                            data-status="{{ $item->status }}" onclick="openEditModal(this)"> <i
                                                class="fa fa-eye"></i>


                                            <form action="{{ route('trnsaction.destroy', $item) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger" onclick="deleteFlyer(this)" type="button">
                                                    <i class="fa fa-view ms-2"></i></button>


                                            </form>

                                    </td> --}}
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="10" align="center">No records found</td>
                                </tr>
                            @endforelse


                        </tbody>
                    </table>
                </div>
                {{ $subscriptions->links() }}
            </div>
        </div>
    </div>
@endsection

@push('js')
    <!-- Page level plugins -->
    <script src="{{ asset('admin/vendor/datatables/jquery.dataTables.min.js') }}"></script>


    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
    <!-- Page level custom scripts -->

    <script>
        $(document).ready(function() {
            $('#summernote').summernote();
        });
        $(document).ready(function() {
            $('#summernote_edit').summernote();
        });


        function TransactionType(val) {
            var selectedValue = val;
            var currentUrl = new URL(window.location.href);

            // Add or update the 'run_id' parameter
            currentUrl.searchParams.set('type', selectedValue);
            if (selectedValue == 0) {
                currentUrl.searchParams.delete("type");

            }
            // Reload the page with the new URL
            window.location.href = currentUrl.toString();
        }

        function TransactionStatus(val) {
            var selectedValue = val;
            var currentUrl = new URL(window.location.href);

            // Add or update the 'run_id' parameter
            currentUrl.searchParams.set('status', selectedValue);
            if (selectedValue == 0) {
                currentUrl.searchParams.delete("status");

            }
            // Reload the page with the new URL
            window.location.href = currentUrl.toString();
        }
    </script>
@endpush
