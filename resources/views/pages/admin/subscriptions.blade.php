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
        <h1 class="h3 mb-2 text-gray-800 d-flex justify-content-between"> <span>Subscriptionsß</span> <span>
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
                    Subscriptionsß
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




    <!-- View Booking Modal -->
    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">\
            <!-- Form -->
            <form id="edit" method="POST">
                @csrf

                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Update Transaction</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>


                    <div class="modal-body">

                        <div class="form-group">
                            <label for="inputTitle">Payment Status</label>
                            <select name="status" class="form-control" id="status">
                                <option value="{{ App\Enums\TransactionStatus::$SUCCESS }}">SUCCESS</option>
                                <option value="{{ App\Enums\TransactionStatus::$PENDING }}">PENDING</option>
                                <option value="{{ App\Enums\TransactionStatus::$FAILED }}">
                                    {{ App\Enums\TransactionStatus::$FAILED }}</option>


                            </select>
                        </div>
                        <div class="form-group px-2" id="image_container" style="display: none">
                            <img src="" id="image" alt="" style="height: 200px">
                        </div>
                    </div>

                    <div class="modal-footer">

                        <button type="submit" class="btn btn-primary" id="saveChangesBtn">Update </button>

                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            // Edit button click handler
            $('.editBtn').click(function() {
                // Retrieve data from table row and populate form fields
                var title = $(this).closest('tr').find('.title').text();
                var author = $(this).closest('tr').find('.author').text();
                var publishedDate = $(this).closest('tr').find('.publishedDate').text();
                var description = $(this).closest('tr').find('.description').text();
                $('#inputTitle').val(title);
                $('#inputAuthor').val(author);
                $('#inputPublishedDate').val(publishedDate);
                $('#inputDescription').val(description);
                // Show modal
                $('#exampleModal').modal('show');
            });

            // $.validator.addMethod("integer", function(value, element) {
            //     return value != 0;
            // }, "Please select a table of content.");

            $('#edit').validate({
                rules: {
                    status: {
                        required: true,
                        maxlength: 191,


                    },



                },
                errorElement: "span",
                errorPlacement: function(error, element) {
                    error.addClass("error_text ");
                    element.closest(".form-group").append(error);
                    element.addClass("border-danger")
                },
                highlight: function(element, errorClass, validClass) {
                    $('.please-wait').click();
                    $(element).addClass("text-danger ");
                },
                unhighlight: function(element, errorClass, validClass) {
                    $(element).removeClass("text-danger ");
                },
                submitHandler: function(form, event) {
                    event.preventDefault();
                    let formData = new FormData(form);

                    $.ajax({
                        type: 'post',
                        url: form.action,
                        data: formData,
                        dataType: 'json',
                        contentType: false,
                        processData: false,

                        success: function(response) {
                            if (response.status == 200) {

                                Swal.fire({
                                    title: 'Success',
                                    text: response.message,
                                    icon: 'success',

                                }).then((result) => {


                                    var url = $('#redirect_url').val();
                                    if (url !== undefined || url != null) {
                                        window.location = url;
                                    } else {
                                        location.reload(true);
                                    }
                                })

                                return false;
                            }

                            if (response.status == 201) {
                                Swal.fire(
                                    'Error',
                                    response.message,
                                    'error'
                                );

                                return false;
                            }
                        },
                        error: function(data) {
                            if (data.status == 422) {
                                var form = $("#signin_form");
                                let li_htm = '';
                                $.each(data.responseJSON.errors, function(k, v) {
                                    const $input = form.find(
                                        `input[name=${k}],select[name=${k}],textarea[name=${k}]`
                                    );
                                    if ($input.next('small').length) {
                                        $input.next('small').html(v);
                                        if (k == 'trnsaction' || k ==
                                            'membership') {
                                            $('#myselect').next('small').html(v);
                                        }
                                    } else {
                                        $input.after(
                                            `<small class='text-danger'>${v}</small>`
                                        );
                                        if (k == 'trnsaction' || k ==
                                            'membership') {
                                            $('#myselect').after(
                                                `<small class='text-danger'>${v[0]}</small>`
                                            );
                                        }
                                    }
                                    li_htm += `<li>${v}</li>`;
                                });

                                return false;
                            } else {
                                Swal.fire(
                                    'Error',
                                    data.statusText,
                                    'error'
                                );
                            }
                            return false;

                        }
                    });
                }
            })
        });


        function openEditModal(ele) {


            $("#edit").attr("action", ele.getAttribute("data-url"));

            $("#amount").val(ele.getAttribute("data-amount"));
            $("#transit").val(ele.getAttribute("data-transit"));
            if (ele.getAttribute("data-type") == "Deposit") {
                $("#image_container").show();
                $("#image").attr("src", ele.getAttribute("data-proof"));

            }

            $("#status").val(ele.getAttribute("data-status"));
            $("#editModal").modal("show");

        }

        function deleteFlyer(ele) {
            if (ele.getAttribute("type") == 'button') {
                Swal.fire({
                    title: 'Are you sure ?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'OK',
                    cancelButtonText: 'Cancel'
                }).then((result) => {
                    if (result.isConfirmed) {
                        // User clicked OK, do something
                        ele.setAttribute("type", "submit");
                        $(ele).click();
                    } else {
                        // User clicked Cancel or outside the modal, do something else

                    }
                });
            }
        }
    </script>
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
