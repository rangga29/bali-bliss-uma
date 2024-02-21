<!-- Section / Flats -->
<section id="rooms" class="section bg-light pt-0 pb-5">

    <!-- Objects - Search -->
    <div class="objects-search bg-dark dark">
        <div class="bg-image-holder bg-image-fixed zooming"><img src="{{ asset('frontend/img/photos/search-bg.jpg') }}" alt=""></div>
        <div class="container">
            <h2 class="mb-1 text-uppercase">Our Swanky Rooms</h2>
        </div>
    </div>

    <div class="objects-container container">
        <div class="tab-content">
            <div id="grid_view" class="tab-pane fade show active" role="tabpanel">
                <!-- Objects - Grid-->
                <div class="objects-grid gutters-sm row">
                    <div class="col-lg-4 col-12">
                        <!-- Object - Vertical -->
                        <div class="object object-vertical">
                            <div class="object-image">
                                <a class="link-inherit" href="{{ route('rooms.deluxe') }}">
                                    <img src="{{ asset('images/deluxe_main.jpg') }}" alt="">
                                </a>
                            </div>
                            <div class="object-content">
                                <h5 class="object-title"><a class="link-inherit" href="{{ route('rooms.deluxe') }}">DELUXE ROOM</a></h5>
                                <p class="lead text-dark">Room with a charming balcony for you to revel in the crisp air.</p>
                                <ul class="object-details list-unstyled">
                                    <li><span class="text-muted">></span> Air Conditioner</li>
                                    <li><span class="text-muted">></span> Water Heater</li>
                                    <li><span class="text-muted">></span> Double Size Bed [160 x 200]</li>
                                    <li><span class="text-muted">></span> TV</li>
                                    <li><span class="text-muted">></span> Wardrobe</li>
                                    <li><span class="text-muted">></span> Writing Desk / Dressing Table</li>
                                </ul>
                                <span class="object-price">8 Rooms</span>
                                <a href="{{ route('rooms.deluxe') }}" class="object-btn btn btn-secondary"><span class="hidden-xs-down">View</span> Details</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-12">
                        <!-- Object - Vertical -->
                        <div class="object object-vertical">
                            <div class="object-image">
                                <a class="link-inherit" href="{{ route('rooms.family') }}">
                                    <img src="{{ asset('images/family_main.jpg') }}" alt="">
                                </a>
                            </div>
                            <div class="object-content">
                                <h5 class="object-title">
                                    <a class="link-inherit" href="{{ route('rooms.family') }}">FAMILY ROOM</a>
                                    <i class="fa fa-check-circle text-success ml-2" data-toggle="tooltip" data-placement="top" title="Best choice!"></i>
                                </h5>
                                <p class="lead text-dark">A spacious room abode where you can work, study, and bask in the glory of sunset vistas from your balcony.</p>
                                <ul class="object-details list-unstyled">
                                    <li><span class="text-muted">></span> Air Conditioner</li>
                                    <li><span class="text-muted">></span> Water Heater</li>
                                    <li><span class="text-muted">></span> King Size Bed [200 x 200]</li>
                                    <li><span class="text-muted">></span> TV</li>
                                    <li><span class="text-muted">></span> Wardrobe</li>
                                    <li><span class="text-muted">></span> Writing Desk / Dressing Table</li>
                                </ul>
                                <span class="object-price">8 Rooms</span>
                                <a href="{{ route('rooms.family') }}" class="object-btn btn btn-secondary"><span class="hidden-xs-down">View</span> Details</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-12">
                        <!-- Object - Vertical -->
                        <div class="object object-vertical">
                            <div class="object-image">
                                <a class="link-inherit" href="{{ route('rooms.standard') }}">
                                    <img src="{{ asset('images/standard_main.jpg') }}" alt="">
                                </a>
                            </div>
                            <div class="object-content">
                                <h5 class="object-title"><a class="link-inherit" href="{{ route('rooms.standard') }}">STANDARD ROOM</a></h5>
                                <p class="lead text-dark">Room with a cozy haven offering peace and solitude.</p>
                                <ul class="object-details list-unstyled">
                                    <li><span class="text-muted">></span> Air Conditioner</li>
                                    <li><span class="text-muted">></span> Water Heater</li>
                                    <li><span class="text-muted">></span> Double Size Bed [160 x 200]</li>
                                    <li><span class="text-muted">></span> TV</li>
                                    <li><span class="text-muted">></span> Wardrobe</li>
                                    <li><span class="text-muted">></span> Writing Desk / Dressing Table</li>
                                </ul>
                                <span class="object-price">8 Rooms</span>
                                <a href="{{ route('rooms.standard') }}" class="object-btn btn btn-secondary"><span class="hidden-xs-down">View</span> Details</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
