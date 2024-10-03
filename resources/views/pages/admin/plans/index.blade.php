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
    {{-- <script src="https://cdn.ckeditor.com/ckeditor5/41.3.1/classic/ckeditor.js"></script> --}}
@endpush
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800 d-flex justify-content-between"> <span>Locations</span> <span>
            </span>
            <button class="btn btn-primary" data-toggle="modal" data-target="#createModal">Create</button>
        </h1>

        <div class="row my-2">
            <div class="col-md-6">
                <form class="d-none  d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                    <div class="input-group bg-white">
                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                            aria-label="Search" name="search" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="button">
                                <i class="fas fa-search fa-sm"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>


        </div>


        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">
                    Locations
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

                            @forelse ($locations as $i => $item)
                                <tr>
                                    <td>{{ $i + 1 }}</td>

                                    <td>{{ $item->title }}</td>


                                    <td>{{ date('Y/m/d', strtotime($item->created_at)) }}</td>

                                    <td> <button class="btn btn-primary mx-2"
                                            data-url="{{ route('locations.update', $item->id) }}"
                                            data-subtitle="{{ $item->subtitle }}" data-title="{{ $item->title }}"
                                            data-body="{{ $item->body }}" data-part_1="{{ $item->part_1 }}"
                                            data-part_2="{{ $item->part_2 }}" data-part_3="{{ $item->part_3 }}"
                                            data-part_4="{{ $item->part_4 }}" data-status="{{ $item->status }}"
                                            onclick="openEditModal(this)"> <i class="fa fa-pencil"></i>


                                            <form action="{{ route('locations.destroy', $item) }}" method="POST">
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
    <!-- Create Service Modal -->
    <div class="modal fade" id="createModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <!-- Form -->
            <form id="create" action="{{ route('locations.store') }}" method="POST">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Create Service</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <div class="form-group">
                            <label for="inputTitle">Title</label>
                            <input type="text" class="form-control" name="title" id="inputTitle"
                                placeholder="Enter title" required>
                        </div>
                        <div class="form-group">
                            <label for="inputTitle">SubTitle</label>
                            <textarea name="subtitle" class="form-control" cols="30" rows="3" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="inputAuthor">Image</label>
                            <input type="file" class="form-control" name="image" i placeholder="" required>
                        </div>
                        {{-- 
                        <div class="form-group">
                            <label for="inputDescription">Body</label>
                            <textarea class="form-control" id="summernote" name="body" rows="3" required placeholder="Enter description"></textarea>
                        </div> --}}
                        <div class="form-group">
                            <label for="inputDescription">Part 1</label>
                            <textarea class="form-control" id="summernote1_edit" name="part_1" rows="3" required
                                placeholder="Enter description"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="inputDescription">Part 2</label>
                            <textarea class="form-control" id="summernote2_edit" name="part_2" rows="3" required
                                placeholder="Enter description"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="inputDescription">Part 3</label>
                            <textarea class="form-control" id="summernote3_edit" name="part_3" rows="3" required
                                placeholder="Enter description"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="inputAuthor">Part 3 Image</label>
                            <input type="file" class="form-control" name="part_3_image" placeholder="" required>
                        </div>

                        <div class="form-group">
                            <label for="inputDescription">Part 4</label>
                            <textarea class="form-control" id="summernote4_edit" name="part_4" rows="3" required
                                placeholder="Enter description"></textarea>
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

    <!-- Update Service Modal -->
    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">\
            <!-- Form -->
            <form id="edit" method="POST">
                @csrf
                @method('PUT')
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Service</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>


                    <div class="modal-body">

                        <div class="form-group">
                            <label for="inputTitle">Title</label>
                            <input type="text" class="form-control" name="title" id="title"
                                placeholder="Enter title">
                        </div>
                        <div class="form-group">
                            <label for="inputTitle">SubTitle</label>
                            <textarea name="subtitle" id="subtitle" class="form-control" cols="30" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="inputAuthor">Image</label>
                            <input type="file" class="form-control" name="image" i placeholder="">
                        </div>

                        <div class="form-group">
                            <label for="inputDescription">Part 1</label>
                            <textarea class="form-control" id="summernote1" name="part_1" rows="3" required
                                placeholder="Enter description"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="inputDescription">Part 2</label>
                            <textarea class="form-control" id="summernote2" name="part_2" rows="3" required
                                placeholder="Enter description"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="inputDescription">Part 3</label>
                            <textarea class="form-control" id="summernote3" name="part_3" rows="3" required
                                placeholder="Enter description"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="inputAuthor">Part 3 Image</label>
                            <input type="file" class="form-control" name="part_3_image" placeholder="">
                        </div>

                        <div class="form-group">
                            <label for="inputDescription">Part 4</label>
                            <textarea class="form-control" id="summernote4" name="part_4" rows="3" required
                                placeholder="Enter description"></textarea>
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
            $('#create').validate({
                rules: {
                    title: {
                        required: true,
                        maxlength: 191,
                        minlength: 3,

                    },

                    body: {
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
                                        if (k == 'locations' || k == 'membership') {
                                            $('#myselect').next('small').html(v);
                                        }
                                    } else {
                                        $input.after(
                                            `<small class='text-danger'>${v}</small>`
                                        );
                                        if (k == 'locations' || k == 'membership') {
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
                    body: {
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
                                        if (k == 'locations' || k == 'membership') {
                                            $('#myselect').next('small').html(v);
                                        }
                                    } else {
                                        $input.after(
                                            `<small class='text-danger'>${v}</small>`
                                        );
                                        if (k == 'locations' || k == 'membership') {
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
            $("#title").val(ele.getAttribute("data-title"));
            $("#subtitle").val(ele.getAttribute("data-subtitle"));
            // $('#summernote_edit').summernote('code', ele.getAttribute("data-body"));
            $('#summernote1').summernote('code', ele.getAttribute("data-part_1"));
            $('#summernote2').summernote('code', ele.getAttribute("data-part_2"));
            $('#summernote3').summernote('code', ele.getAttribute("data-part_3"));
            $('#summernote4').summernote('code', ele.getAttribute("data-part_4"));


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
            $('#summernote1').summernote();
            $('#summernote2').summernote();
            $('#summernote3').summernote();
            $('#summernote4').summernote();
        });
        $(document).ready(function() {
            $('#summernote_edit').summernote();
            $('#summernote1_edit').summernote();
            $('#summernote2_edit').summernote();
            $('#summernote3_edit').summernote();
            $('#summernote4_edit').summernote();
        });
    </script>
@endpush
