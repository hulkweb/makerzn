@extends('layouts.app')
@push('css')
@endpush
@section('content')
    <style>
        .news-block_one-text p {
            color: #bdbdbd !important;
        }
    </style>
    <script>
        const menu = "Blogs";
        if (document.getElementById(menu)) {
            document.getElementById(menu).classList.add("current");
        }
    </script>
    <section class="page-title mb-3">
        <div class="page-title-icon"
            style="
            background-image: url({{ asset('asset/img/icons/page-title_icon-1.png') }});
        "></div>
        <div class="page-title-icon-two"
            style="
            background-image: url({{ asset('asset/img/icons/page-title_icon-2.png') }});
        "></div>
        <div class="page-title-shadow"
            style="
            background-image: url({{ asset('asset/img/background/page-title-1.png') }});
        "></div>
        <div class="page-title-shadow_two"
            style="
            background-image: url({{ asset('asset/img/background/page-title-2.png') }});
        "></div>
        <div class="auto-container">
            <h2>
                {{ setting('site_name') }} Blogs | Easy Cryptocurrency Cloud Mining
                Platform
            </h2>
            <ul class="bread-crumb clearfix">
                <li><a href="home.html">Home</a></li>
                <li>
                    {{ setting('site_name') }} Blogs | Easy Cryptocurrency Cloud Mining
                    Platform
                </li>
            </ul>
        </div>
    </section>

    <section class="news-three" style="padding-bottom: 0px">
        <div class="auto-container">
            <div class="row clearfix">
                @foreach ($blogs as $item)
                    <div class="news-block_one col-lg-4 col-md-6 col-sm-12">
                        <div class="news-block_one-inner">
                            <div class="news-block_one-image">
                                <a href="{{ route('blog', $item->id) }}"><img
                                        src="{{ asset('uploads/blogs/' . $item->image) }}" alt="{{ $item->title }}" /></a>
                            </div>
                            <div class="news-block_one-content">
                                <h5 class="news-block_one-title">
                                    <a href="{{ route('blog', $item->id) }}">{{ $item->title }}</a>
                                </h5>
                                <div class="news-block_one-text" style="color:#BDBDBD !Important">
                                    {!! substr($item->body, 0, 200) . '...' !!}
                                </div>
                                <a class="news-block_one-more" href="{{ route('blog', $item->id) }}">Read more
                                    <i class="fa-solid fa-plus fa-fw"></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach



            </div>
            <link rel="stylesheet" href="#" />
            {{ $blogs->links() }}
        </div>
    </section>

    <section class="cta-one cta-footer" style="margin-top: 400px">
        <div class="auto-container">
            <div class="inner-container">
                <div class="cta-icon_one"
                    style="
                    background-image: url({{ asset('asset/img/icons/cta-icon-1.png') }});
                ">
                </div>
                <div class="cta-icon_two"
                    style="
                    background-image: url({{ asset('asset/img/icons/cta-icon-2.png') }});
                ">
                </div>

                <div class="row clearfix">
                    <div class="cta-one_title-column col-lg-6 col-md-12 col-sm-12">
                        <div class="cta-one_title-outer">
                            <h2 class="cta-one_title">
                                Start your first mining with
                                <span>{{ setting('site_name') }}.</span>
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
                                <img src="{{ asset('asset/img/sections/subfooter/66a42302d54b71722032898.png') }}"
                                    alt="" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
