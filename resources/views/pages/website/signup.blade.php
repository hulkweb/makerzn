@extends('layouts.app')
@push('css')
    <style>
        .text-danger {
            color: red;
            font-size: 12px;
        }
    </style>
@endpush
@section('content')
    <script>
        const menu = "";
        if (document.getElementById(menu)) {
            document.getElementById(menu).classList.add("current");
        }
    </script>
    <section class="page-title mb-3">
        <div class="page-title-icon"
            style="
            background-image: url(asset/img/icons/page-title_icon-1.png);
        "></div>
        <div class="page-title-icon-two"
            style="
            background-image: url(asset/img/icons/page-title_icon-2.png);
        "></div>
        <div class="page-title-shadow"
            style="
            background-image: url(asset/img/background/page-title-1.png);
        "></div>
        <div class="page-title-shadow_two"
            style="
            background-image: url(asset/img/background/page-title-2.png);
        "></div>
        <div class="auto-container">
            <h2>Sign Up</h2>
            <ul class="bread-crumb clearfix">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li>Sign Up</li>
            </ul>
        </div>
    </section>

    <section class="register-one">
        <div class="auto-container">
            <div class="inner-container">
                <h3>Registration</h3>
                <div class="text">
                    Your email address will not be published.
                </div>

                <div class="register-form">
                    <form action="{{ route('signup.post') }}" method="post" id="form">
                        @csrf
                        <div class="form-group">
                            <label>Username*</label>
                            <input type="text" name="username" value="{{ old('username') }}" class="input_field"
                                required />
                        </div>

                        <div class="form-group">
                            <label>Email*</label>
                            <input type="email" name="email" value="{{ old('email') }}" class="input_field" required />
                        </div>

                        <div class="form-group">
                            <label>Password*</label>
                            <input type="password" name="password" class="input_field" id="password" required />
                        </div>

                        <div class="form-group">
                            <label>Repeat Password*</label>
                            <input type="password" name="password_repeat" class="input_field" required />
                        </div>

                        <div class="form-group">
                            <label>Referral Code (Optional)</label>
                            <input type="text" name="refer_code" value="{{ old('ref_code') }}" />
                        </div>

                        <div class="form-group">
                            <button type="submit" class="submit-btn btn-style-one">
                                <span class="btn-wrap">
                                    <span class="text-one">Register now</span>
                                    <span class="text-two">Register now</span>
                                </span>
                            </button>
                        </div>

                        <div class="form-group">
                            <div class="creat-account">
                                Already have a account?
                                <a href="{{ route('signin') }}">Login Now</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>l
    </section>

    <section class="cta-one cta-footer" style="margin-top: 400px">
        <div class="auto-container">
            <div class="inner-container">
                <div class="cta-icon_one"
                    style="
                    background-image: url(asset/img/icons/cta-icon-1.png);
                ">
                </div>
                <div class="cta-icon_two"
                    style="
                    background-image: url(asset/img/icons/cta-icon-2.png);
                ">
                </div>

                <div class="row clearfix">
                    <div class="cta-one_title-column col-lg-6 col-md-12 col-sm-12">
                        <div class="cta-one_title-outer">
                            <h2 class="cta-one_title">
                                Start your first mining with
                                <span>MasHash.</span>
                            </h2>
                            <div class="cta-one_button">
                                <a href="#" class="template-btn btn-style-three">
                                    <span class="btn-wrap">
                                        <span class="text-one">Get Started Free</span>
                                        <span class="text-two">Get Started Free</span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="cta-one_image-column col-lg-6 col-md-12 col-sm-12">
                        <div class="cta-one_image-outer">
                            <div class="image">
                                <img src="asset/img/sections/subfooter/66a42302d54b71722032898.png" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@push('js')
    <script>
        $(document).ready(function() {

            $.validator.addMethod("passwordMatch", function(value, element) {
                return value === $("#password").val();
            }, "Passwords do not match!");
            $('#form').validate({
                rules: {
                    username: {
                        required: true,
                        maxlength: 191,

                    },
                    email: {
                        required: true,
                        maxlength: 191,
                        email: true
                    },
                    password: {
                        required: true,
                        maxlength: 191,

                    },
                    password_repeat: {
                        required: true,
                        maxlength: 191,
                        passwordMatch: true

                    },
                },
                errorElement: "span",
                errorPlacement: function(error, element) {
                    error.addClass("text-danger ml-4");
                    element.closest(".form-group").append(error);
                },
                highlight: function(element, errorClass, validClass) {
                    $('.please-wait').click();
                    $(element).addClass("text-danger ml-4");
                },
                unhighlight: function(element, errorClass, validClass) {
                    $(element).removeClass("text-danger ml-4");
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

                                    if (response.redirect == true) {
                                        window.location = response.route;
                                    }
                                    // var url = $('#redirect_url').val();
                                    // if (url !== undefined || url != null) {
                                    //     window.location = url;
                                    // } else {
                                    //     location.reload(true);
                                    // }
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
                                var form = $("#form");
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
    </script>
    @if (Session::has('success'))
        <script>
            Swal.fire('Success', '{{ Session('success') }}', 'success');
        </script>
    @endif

    @if (Session::has('error'))
        <script>
            Swal.fire('Error', '{{ Session('error') }}', 'error');
        </script>
    @endif
@endpush
