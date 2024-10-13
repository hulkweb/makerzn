@extends('layouts.app')
@section('content')
    <script>
        const menu = 'blogs'
        if (document.getElementById(menu)) {
            document.getElementById(menu).classList.add('current')
        }
    </script>
    <section class="page-title mb-3">
        <div class="page-title-icon" style="background-image:url({{ asset('asset/img/icons/page-title_icon-1.png') }})"></div>
        <div class="page-title-icon-two" style="background-image:url({{ asset('asset/img/icons/page-title_icon-2.png') }})">
        </div>
        <div class="page-title-shadow" style="background-image:url({{ asset('asset/img/background/page-title-1.png') }})">
        </div>
        <div class="page-title-shadow_two" style="background-image:url({{ asset('asset/img/background/page-title-2.png') }})">
        </div>
        <div class="auto-container">
            <h2>{{ $blog->title }}</h2>
            <ul class="bread-crumb clearfix">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('blogs') }}">Blogs</a></li>
                <li>BLOG</li>
            </ul>
        </div>
    </section>

    <div class="sidebar-page-container">
        <div class="auto-container">
            <div class="row clearfix">

                <!-- Content Side -->
                <div class="content-side col-lg-8 col-md-12 col-sm-12">
                    <div class="blog-detail">
                        <div class="blog-detail_inner">
                            <div class="blog-detail_image">
                                <img src="{{ asset('uploads/blogs/' . $blog->image) }}"
                                    alt="Bitcoin mining energy use doubled in 2023 as crypto prices rose" />
                            </div>
                            <div class="blog-detail_content">
                                <h3 class="blog-detail_heading">{{ $blog->title }}</h3>
                                <div class="blog-c" style="color:white !Important">
                                    {!! $blog->body !!}
                                </div>
                                <div class="post-share-options">
                                    <div class="post-share-inner d-flex justify-content-end flex-wrap">
                                        <ul class="social-links">
                                            <li><a href="#" class="fa-brands fa-facebook-f fa-fw"></a></li>
                                            <li><a href="#" class="fa-brands fa-twitter fa-fw"></a></li>
                                            <li><a href="#" class="fa-brands fa-google fa-fw"></a></li>
                                            <li><a href="#" class="fa-brands fa-dribbble fa-fw"></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
                    <aside class="sidebar">
                        <div class="sidebar-inner">

                            <div class="sidebar-widget post-widget">
                                <div class="widget-content">
                                    <h5 class="sidebar-widget_title">Latest blog</h5>
                                    @foreach ($recent_posts as $item)
                                        <div class="post">
                                            <div class="thumb"><a href="{{ route('blog', $item->id) }}"><img
                                                        src="{{ asset("uploads/blogs/$item->image") }}" alt=""></a>
                                            </div>
                                            <h6><a href="{{ route('blog', $item->id) }}">{{ $item->title }}</a></h6>
                                        </div>
                                    @endforeach



                                </div>
                            </div>

                        </div>

                    </aside>
                </div>

            </div>
        </div>
    </div>

    <section class="cta-one cta-footer" style="margin-top: 400px">
        <div class="auto-container">
            <div class="inner-container">
                <div class="cta-icon_one" style="background-image:url({{ asset('asset/img/icons/cta-icon-1.png') }})">
                </div>
                <div class="cta-icon_two" style="background-image:url({{ asset('asset/img/icons/cta-icon-2.png') }})">
                </div>

                <div class="row clearfix">
                    <div class="cta-one_title-column col-lg-6 col-md-12 col-sm-12">
                        <div class="cta-one_title-outer">
                            <h2 class="cta-one_title">Start your first mining with <span>MasHash.</span></h2>
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
