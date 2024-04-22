@extends('layouts.app')
@section('content')
    <style>
        body {
            background-color: #0B0B0B;
        }

        .bg-hero {
            background-image: url("{{ asset('assets/img/hero.jpg') }}");
        }

        #features {
            background-image: url("{{ asset('assets/img/bg2.jpeg') }}");
            background-size: cover;
        }



        #blog {
            background-image: url("{{ asset('assets/img/bg3.jpeg') }}");
            background-size: cover;
            background-color: rgba(16, 14, 14, 0.5);
        }

        #about {
            background-image: url("{{ asset('assets/img/bg1.jpeg') }}");
            background-size: cover;
            background-color: rgba(16, 14, 14, 0.5);
        }

        .section-angle {
            border-color: #1de9b6;
        }

        .card {
            background-color: #2d2d2d;
        }

        .product-card {
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 20px;
            margin-bottom: 20px;
        }

        .product-name {
            font-size: 24px;
            margin-bottom: 10px;
        }

        .product-description {
            font-size: 16px;
            color: #666;
        }
    </style>
    <!--hero header-->
    <section class="py-7 py-md-0 bg-hero" id="home">
        <div class="container">
            <div class="row vh-md-100 hero">
                <div class="col-md-8 col-sm-10 col-12 mx-auto my-auto text-center">
                    <h1 class="heading-black text-capitalize">The Only Limit Is Your Imagination</h1>
                    <p class="lead py-3">Free. Easy. No Signup Required</p>
                    <a href="{{ url('/all-tools') }}">
                        <button class="btn btn-primary d-inline-flex flex-row align-items-center">
                            Get Started
                            <em class="ml-2" data-feather="arrow-right"></em>
                        </button></a>
                </div>
            </div>
        </div>
    </section>

    <!-- features section -->
    <section class="pt-6 section-angle bottom-left" id="features">
        <div class="container overlay">
            <div class="row">
                <div class="col-md-6 mx-auto text-center">
                    <h2 class="heading-black">Introducing New AI Features!</h2>
                    <p class="text-muted lead">Here's some amazing stuff our AI can do for you.</p>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-10 mx-auto">
                    <div class="row feature-boxes">
                        <div class="col-md-4 box">
                            <div class="icon-box box-primary">
                                <div class="icon-box-inner">
                                    <span data-feather="edit-3" width="35" height="35"></span>
                                </div>
                            </div>
                            <h5>Content Writing</h5>
                            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                        <div class="col-md-4 box">
                            <div class="icon-box box-primary">
                                <div class="icon-box-inner">
                                    <span data-feather="type" width="35" height="35"></span>
                                </div>
                            </div>
                            <h5>Grammar Checking</h5>
                            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                        <div class="col-md-4 box">
                            <div class="icon-box box-primary">
                                <div class="icon-box-inner">
                                    <span data-feather="align-justify" width="35" height="35"></span>
                                </div>
                            </div>
                            <h5>Text Summarization</h5>
                            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                        <div class="col-md-4 box">
                            <div class="icon-box box-primary">
                                <div class="icon-box-inner">
                                    <span data-feather="code" width="35" height="35"></span>
                                </div>
                            </div>
                            <h5>Code Generation</h5>
                            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                        <div class="col-md-4 box">
                            <div class="icon-box box-primary">
                                <div class="icon-box-inner">
                                    <span data-feather="image" width="35" height="35"></span>
                                </div>
                            </div>
                            <h5>Image Description</h5>
                            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                        <div class="col-md-4 box">
                            <div class="icon-box box-primary">
                                <div class="icon-box-inner">
                                    <span data-feather="layout" width="35" height="35"></span>
                                </div>
                            </div>
                            <h5>Picture Based Content</h5>
                            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Premium section-->
    <section class="py-7 bg-dark section-angle top-right bottom-right" id="blog">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto text-center">
                    <h2 class="heading-black">Premium Tools For Free!</h2>
                    <p class="text-muted lead">Things you would usually pay for.</p>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-4">
                    <div class="product-card text-center bg-dark">
                        <i class="fas fa-qrcode fa-3x mb-3"></i>
                        <h2 class="product-name">QR Code Generator</h2>
                        <p class="product-description">Generate QR codes and save as SVGs.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="product-card text-center bg-dark">
                        <i class="fa-regular fa-image fa-3x mb-3"></i>
                        <h2 class="product-name">Image Analysis</h2>
                        <p class="product-description">Use AI to talk to pictures.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="product-card text-center bg-dark">
                        <i class="fa-regular fa-file-pdf fa-3x mb-3"></i>
                        <h2 class="product-name">PDF Converter</h2>
                        <p class="product-description">Solve your PDF problems.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--About section-->
    <section class="pb-6 pt-7 section-angle top-left" id="about">
        <div class="container">
            <div class="row">
                <div class="col-md-7 mx-auto text-center">
                    <h2 class="text-primary">What ContentCraft offers?</h2>
                    <p class="text-muted lead">Tools to make your life easier.</p>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-10 mx-auto">
                    <div class="row">
                        <div class="col-md-6 mb-5">
                            <div class="media">
                                <div class="icon-box">
                                    <div class="icon-box-inner small-xs text-primary">
                                        <span data-feather="zap" width="30" height="30"></span>
                                    </div>
                                </div>
                                <div class="media-body">
                                    <h5 class="mt-3 mb-1">Quick solution</h5>
                                    Do the tedious tasks fast and easy.
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-5">
                            <div class="media">
                                <div class="icon-box">
                                    <div class="icon-box-inner small-xs text-primary">
                                        <span data-feather="shield" width="30" height="30"></span>
                                    </div>
                                </div>
                                <div class="media-body">
                                    <h5 class="mt-3 mb-1">Secure environment</h5>
                                    Your data is only yours.
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-5">
                            <div class="media">
                                <div class="icon-box">
                                    <div class="icon-box-inner small-xs text-primary">
                                        <span data-feather="clock" width="30" height="30"></span>
                                    </div>
                                </div>
                                <div class="media-body">
                                    <h5 class="mt-3 mb-1">24/7 availability</h5>
                                    Anytime. Anywhere
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-5">
                            <div class="media">
                                <div class="icon-box">
                                    <div class="icon-box-inner small-xs text-primary">
                                        <span data-feather="settings" width="30" height="30"></span>
                                    </div>
                                </div>
                                <div class="media-body">
                                    <h5 class="mt-3 mb-1">More additions</h5>
                                    Routinely adding more tools.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
