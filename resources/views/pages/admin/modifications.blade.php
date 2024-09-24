@extends('layouts.app')
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
@endpush
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800 d-flex justify-content-between"> <span>Modification Types</span> <span> <button
                    class="btn btn-primary" data-toggle="modal" data-target="#createModal">Create</button>
            </span>
        </h1>


        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">
                    Modification Types
                </h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Created Date</th>


                                <th>Action</th>

                            </tr>
                        </thead>

                        <tbody>

                            @forelse ($modifications as $i => $item)
                                <tr>
                                    <td>{{ $i + 1 }}</td>

                                    <td>{{ $item->name }}</td>

                                    <td>{{ date('Y/m/d', strtotime($item->created_at)) }}</td>

                                    <td> <button class="btn btn-primary mx-2"
                                            data-url="{{ route('modification-types.update', $item->id) }}"
                                            data-name="{{ $item->name }}" data-status="{{ $item->status }}"
                                            onclick="openEditModal(this)"> <i class="fa fa-pencil"></i>


                                            <form action="{{ route('modification-types.destroy', $item) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger" onclick="deleteFlyer(this)" type="button">
                                                    <i class="fa fa-trash ms-2"></i></button>


                                            </form>

                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" align="center">No records found</td>
                                </tr>
                            @endforelse



                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- Create Modification Type Modal -->
    <div class="modal fade" id="createModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <!-- Form -->
            <form id="create" action="{{ route('modification-types.store') }}" method="POST">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Create Modification Type</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <div class="form-group">
                            <label for="inputTitle">Name</label>
                            <input type="text" class="form-control" name="name" id="inputTitle"
                                placeholder="Enter name">
                        </div>

                        <!-- Add more form fields as needed -->
                        <div class="form-group">
                            <label for="inputStatus">Status</label>
                            <select class="form-control" id="inputStatus" name="status">
                                <option value="Active">Active</option>
                                <option value="Inactive">Inactive</option>
                            </select>
                        </div>

                    </div>
                    <div class="modal-footer">

                        <button type="submit" class="btn btn-primary" id="saveChangesBtn">Save </button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- Update Modification Type Modal -->
    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">\
            <!-- Form -->
            <form id="edit" method="POST">
                @csrf
                @method('PUT')
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Modification Type</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <div class="form-group">
                            <label for="title">Name</label>
                            <input type="text" class="form-control border" id="name" name="name"
                                placeholder="Enter name">
                        </div>

                        <div class="form-group">
                            <label for="status">Status</label>
                            <select class="form-control" id="status" name="status">
                                <option value="Active">Active</option>
                                <option value="Inactive">Inactive</option>
                            </select>
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


            $('#create').validate({
                rules: {
                    title: {
                        required: true,
                        maxlength: 191,
                        minlength: 3,

                    },
                    author: {
                        required: true,


                    },
                    description: {
                        required: true,


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
                                    title: 'Successs',
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
                                        if (k == 'services' || k == 'membership') {
                                            $('#myselect').next('small').html(v);
                                        }
                                    } else {
                                        $input.after(
                                            `<small class='text-danger'>${v}</small>`
                                        );
                                        if (k == 'services' || k == 'membership') {
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
            $('#edit').validate({
                rules: {
                    title: {
                        required: true,
                        maxlength: 191,
                        minlength: 3,

                    },
                    author: {
                        required: true,


                    },
                    description: {
                        required: true,


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
                                    title: 'Successs',
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
                                        if (k == 'services' || k == 'membership') {
                                            $('#myselect').next('small').html(v);
                                        }
                                    } else {
                                        $input.after(
                                            `<small class='text-danger'>${v}</small>`
                                        );
                                        if (k == 'services' || k == 'membership') {
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
            $("#name").val(ele.getAttribute("data-name"));

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
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>
@endpush
