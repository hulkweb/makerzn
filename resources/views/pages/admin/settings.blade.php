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
@endpush
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800 d-flex justify-content-between"> <span>Settings</span>
            <button class="btn btn-primary" data-toggle="modal" data-target="#createModal">Create</button>
        </h1>

        <div class="row my-2">
            <div class="col-md-6">
                <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
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

        <!-- DataTable Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">
                    Settings
                </h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Type</th>
                                <th>Value</th>
                                <th>Created Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($settings as $i => $item)
                                <tr>
                                    <td>{{ $i + 1 }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->type }}</td>
                                    <td>{{ $item->value }}</td>
                                    <td>{{ date('Y/m/d', strtotime($item->created_at)) }}</td>
                                    <td>
                                        <button class="btn btn-primary mx-2"
                                            data-url="{{ route('admin.settings.update', $item->id) }}"
                                            data-name="{{ $item->name }}" data-type="{{ $item->type }}"
                                            data-value="{{ $item->value }}" data-status="{{ $item->status }}"
                                            onclick="openEditModal(this)">
                                            <i class="fa fa-pencil"></i>
                                        </button>

                                        <form action="{{ route('admin.settings.destroy', $item->id) }}" method="POST"
                                            style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger" type="submit">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6" align="center">No records found</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Create Blog Modal -->
    <div class="modal fade" id="createModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <!-- Form -->
            <form id="create" action="{{ route('admin.settings.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Create Settings</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="inputTitle">Name</label>
                            <input type="text" class="form-control" name="name" id="inputTitle"
                                placeholder="Enter name" required>
                        </div>
                        <div class="form-group">
                            <label for="type">Type</label>
                            <select name="type" id="type" class="form-control">
                                <option value="text">Text</option>
                                <option value="image">Image</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="inputValue">Value</label>
                            <input type="file" class="form-control" name="value" id="inputValue"
                                placeholder="Enter value" required>
                        </div>
                        <div class="form-group">
                            <label for="inputDescription">Body</label>
                            <textarea class="form-control" id="summernote" name="body" rows="3" required placeholder="Enter description"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" id="saveChangesBtn">Save</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

<script>
    function openEditModal(button) {
        const url = button.getAttribute('data-url');
        const name = button.getAttribute('data-name');
        const type = button.getAttribute('data-type');
        const value = button.getAttribute('data-value');

        const modal = document.getElementById(
            'createModal'); // assuming you're reusing this modal for both create and edit
        const inputContainer = document.getElementById('input_container');
        const inputTitle = document.getElementById('inputTitle');
        const typeSelect = document.getElementById('type');

        // Set the name and type values
        inputTitle.value = name;
        typeSelect.value = type;

        // Clear existing input in container
        inputContainer.innerHTML = '';

        if (type === 'text') {
            // Render a text input and set its value
            const textInput = document.createElement('input');
            textInput.setAttribute('type', 'text');
            textInput.setAttribute('name', 'value');
            textInput.setAttribute('class', 'form-control');
            textInput.setAttribute('required', true);
            textInput.value = value;
            inputContainer.appendChild(textInput);
        } else if (type === 'image') {
            // Render file input and show the current image
            const fileInput = document.createElement('input');
            fileInput.setAttribute('type', 'file');
            fileInput.setAttribute('name', 'value');
            fileInput.setAttribute('class', 'form-control');

            // Create an image element to show the existing image
            const imgPreview = document.createElement('img');
            imgPreview.setAttribute('src', `/path/to/images/${value}`); // Adjust the path accordingly
            imgPreview.setAttribute('class', 'img-fluid my-2'); // Add any desired styles for the preview
            imgPreview.setAttribute('alt', 'Current Image');
            imgPreview.setAttribute('width', '150px'); // Adjust size as per your need

            inputContainer.appendChild(imgPreview);
            inputContainer.appendChild(fileInput);
        }

        // Set the form action URL
        document.getElementById('create').action = url;

        // Show the modal
        $('#createModal').modal('show');
    }

    document.addEventListener('DOMContentLoaded', function() {
        const typeSelect = document.getElementById('type');
        const inputContainer = document.getElementById('input_container');

        typeSelect.addEventListener('change', function() {
            const selectedType = this.value;

            // Clear the current input field
            inputContainer.innerHTML = '';

            if (selectedType === 'text') {
                // Render a text input
                const textInput = document.createElement('input');
                textInput.setAttribute('type', 'text');
                textInput.setAttribute('name', 'value');
                textInput.setAttribute('class', 'form-control');
                textInput.setAttribute('placeholder', 'Enter value');
                textInput.setAttribute('required', true);
                inputContainer.appendChild(textInput);
            } else if (selectedType === 'image') {
                // Render a file input
                const fileInput = document.createElement('input');
                fileInput.setAttribute('type', 'file');
                fileInput.setAttribute('name', 'value');
                fileInput.setAttribute('class', 'form-control');
                fileInput.setAttribute('required', true);
                inputContainer.appendChild(fileInput);
            }
        });

        // Trigger change event on page load to set the initial input
        typeSelect.dispatchEvent(new Event('change'));
    });

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
        $("#title").val(ele.getAttribute("data-title"));
        $("#subtitle").val(ele.getAttribute("data-subtitle"));
        $('#summernote_edit').summernote('code', ele.getAttribute("data-body"));


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
</script>
@endpush
