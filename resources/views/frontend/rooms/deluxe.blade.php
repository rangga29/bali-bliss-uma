@extends('frontend.layouts.index')

@section('content')
    <!-- Section / Information -->
    <section id="informations" class="section section-object bg-dark cover dark">

        <!-- BG Image -->
        <div class="bg-image-holder bg-image-fixed"><img src="{{ asset('images/deluxe_main.jpg') }}" alt=""></div>

        <!-- Content -->
        <div class="container object-single" data-local-scroll>
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1 class="mb-0">
                        <span class="mr-3">DELUXE ROOM</span>
                    </h1>
                </div>
                <div class="col-lg-6 text-lg-right">
                    <span class="object-price mr-4">8 Rooms Available</span>
                    <a href="{{ route('home') }}" class="btn btn-primary">BACK TO HOMEPAGE</a>
                </div>
            </div>
        </div>

    </section>

    <!-- Section / Details -->
    <section id="details" class="section section-details">

        <div class="container">
            <div class="row">
                <div class="col-lg-10 push-lg-1">
                    <h2 class="mb-0">FACILITIES</h2>
                    <hr class="hr-primary">
                    <div class="row lead">
                        <div class="col-md-6">
                            <dl class="row">
                                <dt class="col-sm-2"><i class="icon icon-primary ti ti-check"></i></dt>
                                <dd class="col-sm-10">Double Size Bed [160 x 200]</dd>
                                <dt class="col-sm-2"><i class="icon icon-primary ti ti-check"></i></dt>
                                <dd class="col-sm-10">Air Conditioner</dd>
                                <dt class="col-sm-2"><i class="icon icon-primary ti ti-check"></i></dt>
                                <dd class="col-sm-10">Water Heater</dd>
                            </dl>
                        </div>
                        <div class="col-md-6">
                            <dl class="row">
                                <dt class="col-sm-2"><i class="icon icon-primary ti ti-check"></i></dt>
                                <dd class="col-sm-10">TV</dd>
                                <dt class="col-sm-2"><i class="icon icon-primary ti ti-check"></i></dt>
                                <dd class="col-sm-10">Wardrobe</dd>
                                <dt class="col-sm-2"><i class="icon icon-primary ti ti-check"></i></dt>
                                <dd class="col-sm-10">Writing Desk / Dressing Table</dd>
                            </dl>
                        </div>
                    </div>
                    <hr class="hr-sm">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-10 push-lg-1">

                    <!-- Post / Single -->
                    <article class="post single mt-3">
                        <div class="post-content">
                            <p class="text-justify text-dark">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A ad aliquid asperiores dolores dolorum earum esse est et ex, expedita explicabo facere facilis fuga fugit illum impedit ipsam ipsum laborum minima minus molestias odit perferendis quis quisquam recusandae rem repellat reprehenderit repudiandae rerum sed sequi temporibus tenetur unde vitae voluptatibus?</p>
                            <figure class="figure">
                                <img src="{{ asset('images/deluxe/deluxe_1.jpg') }}" class="figure-img img-fluid rounded" alt="...">
                            </figure>
                            <figure class="figure">
                                <img src="{{ asset('images/deluxe/deluxe_2.jpg') }}" class="figure-img img-fluid rounded" alt="...">
                            </figure>
                            <figure class="figure">
                                <img src="{{ asset('images/deluxe/deluxe_3.jpg') }}" class="figure-img img-fluid rounded" alt="...">
                            </figure>
                            <figure class="figure">
                                <img src="{{ asset('images/deluxe/deluxe_4.jpg') }}" class="figure-img img-fluid rounded" alt="...">
                            </figure>
                        </div>
                    </article>

                </div>
            </div>
        </div>

    </section>
@endsection

@section('gallery-script')
    <script></script>
@endsection
