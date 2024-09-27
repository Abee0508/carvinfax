@extends('layout.app')
@section('content')

    <div class="page">
        <div class="page__wrapper">
            <section class="banner">
                <div class="bg-color">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 col-sm-12 col-lg-6">
                                <div class="banner-img">
                                    <img src="{{ asset('front/images/banner-img.png') }}">
                                    <img class="abs" src="{{ asset('front/images/logooooo.png') }}">
                                </div>
                            </div>

                            <div class="col-md-6 col-sm-12 col-lg-6">
                                <div class="banner-content">
                                    <div class="banner-content-top">
                                        <h6>Are you worried about buying a used car? TEst</h6>
                                        <h1>Buying or selling a used car? Get the <span>Vehicle History.</span></h1>
                                        <p>Your VIN Check is just a click away</p>
                                    </div>
                                    <div class="input-switcher">

                                        <div id="vinInput" class="redd input-container active">
                                            <input type="text" placeholder="Enter your 17 character VIN" id="vinField"/>
                                            <button id="checkButton">Check VIN<i class="fa-solid fa-angle-right"></i>
                                            </button>
                                            <p id="error-message-2" style="color:red; display:none;">VIN must be exactly
                                                17 characters long.</p>
                                        </div>
                                        <div id="plateInput" class="input-container">
                                            <input type="text" placeholder="License Plate"/>
                                            <select>
                                                <option value="state">State</option>
                                                <!-- Add other states here -->
                                            </select>
                                            <button>Check Plate <i class="fa-solid fa-angle-right"></i></button>
                                        </div>
                                    </div>

                                    <div class="banner-content-bottom">
                                        <ul>
                                            <li><a href="#check-vehicle-records">Where</a>to find the VIN?</li>
                                            •
                                            <li><a href="{{ route('front.sample.report') }}">View a sample report</a></li>
                                        </ul>
                                        <ul>
                                            <li><img src="{{ asset('front/images/banner-bottom-img.png') }}"></li>
                                        </ul>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="trusted">
                        <div class="row">
                            <div class="col-md-3">
                                <ul>
                                    <li><img src="{{ asset('front/images/trusted-img.png') }}"></li>
                                    <li>
                                        <p>Trusted globally by <strong>1,000,000+</strong> users across
                                            <strong>150+</strong> nations</p>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-4 logos">
                                <div class="row">
                                    <div class="col">
                                        <img src="{{ asset('front/images/logo1.png') }}">
                                    </div>
                                    <div class="col">
                                        <img src="{{ asset('front/images/logo2.png') }}">
                                    </div>
                                    <div class="col">
                                        <img src="{{ asset('front/images/logo3.png') }}">
                                    </div>
                                    <div class="col">
                                        <img src="{{ asset('front/images/logo4.png') }}">
                                    </div>
                                    <div class="col">
                                        <img src="{{ asset('front/images/logo5.png') }}">
                                    </div>
                                    <div class="col">
                                        <img src="{{ asset('front/images/logo6.png') }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="what-we-offer">
                <div class="container">
                    <div class="what-we-offer-title">
                        <h6>What We Offer</h6>
                        <h2>We provide the most comprehensive vehicle reports in the market!</h2>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="content">
                                <img src="{{ asset('front/images/offer1.png') }}">
                                <h4>Vehicle Damage</h4>
                                <ul>
                                    <li><span><i class="fa-solid fa-check"></i></span> Accident History</li>
                                    <li><span><i class="fa-solid fa-check"></i></span> Frame or structural damage</li>
                                    <li><span><i class="fa-solid fa-check"></i></span> Damage location</li>
                                    <li><span><i class="fa-solid fa-check"></i></span> Weather damage</li>
                                    <li><span><i class="fa-solid fa-check"></i></span> Repair estimates and costs</li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="content">
                                <img src="{{ asset('front/images/offer2.png') }}">
                                <h4>Safety and Services</h4>
                                <ul>
                                    <li><span><i class="fa-solid fa-check"></i></span>Unfixed safety recalls</li>
                                    <li><span><i class="fa-solid fa-check"></i></span>Service history</li>
                                    <li><span><i class="fa-solid fa-check"></i></span>Tire rotation</li>
                                    <li><span><i class="fa-solid fa-check"></i></span>Brake replacements</li>
                                    <li><span><i class="fa-solid fa-check"></i></span>Oil changes</li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="content">
                                <img src="{{ asset('front/images/offer3.png') }}">
                                <h4>Other essentials details</h4>
                                <ul>
                                    <li><span><i class="fa-solid fa-check"></i></span>Money owing on the vehicle (lien)
                                    </li>
                                    <li><span><i class="fa-solid fa-check"></i></span>Rental or commercial use</li>
                                    <li><span><i class="fa-solid fa-check"></i></span>Vehicle theft</li>
                                    <li><span><i class="fa-solid fa-check"></i></span>Rebuilt or salvage title</li>
                                    <li><span><i class="fa-solid fa-check"></i></span>Odometer readings</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </section>

            <section class="vehicle-record">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-12 col-lg-6 col-xl-6">
                            <div class="album">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="card">
                                                <div class="beforeafterdrag">
                                                    <div data-type="data-type-image">
                                                        <div data-type="before">
                                                            <img src="{{ asset('front/images/car1.png') }}">
                                                        </div>
                                                        <div data-type="after">
                                                            <img src="{{ asset('front/images/car2.png') }}">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-md-6">
                            <div class="content repeated" id="check-vehicle-records">
                                <h6>Check Vehicle Records</h6>
                                <h2>What we check for when preparing a report</h2>
                                <ul>
                                    <li><strong>Dashboard:</strong> Look through the windshield on the driver's side,
                                        where the dashboard meets the glass.
                                    </li>

                                    <li><strong>Driver's Side Door Frame:</strong>Open the driver's side door and check
                                        the door jamb or sticker.
                                    </li>

                                    <li><strong>Engine Block:</strong> Some manufacturers place the VIN on the engine
                                        itself.
                                    </li>

                                    <li><strong>Under the Car:</strong>Check the frame or chassis, often near the front
                                        or rear axles.
                                    </li>

                                    <li><strong>Vehicle Registration Documents:</strong> The VIN is also listed on the
                                        vehicle's registration and title documents.
                                    </li>
                                </ul>
                                <a href="vehicle-history.php">Read More<i class="fa-solid fa-angle-right"></i></a>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <section class="sample-record">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="content repeated">
                                <h6>Sample Report</h6>
                                <h2>Here's how a Carvinfax report can help you</h2>
                                <p>If you plan on buying and selling a car, you must know as much as possible about it.
                                    Using CarvinFax VIN Check service, instantly learn about previous owners, any major
                                    damage and accidents (flood/fire/collision and more), original or optional equipment
                                    installed, mileage/odometer, and much more!</p>
                                <a href="{{ route('front.sample.report') }}">View sample report<i
                                        class="fa-solid fa-angle-right"></i></a>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <img src="{{ asset('front/images/sample-record.png') }}">
                        </div>

                    </div>
                </div>
            </section>

            <section class="pricing" id="change">
                <div class="container">
                    <div class="what-we-offer-title">
                        <h6>Our Packages</h6>
                        <h2>Pricing Packages</h2>
                    </div>


                    <div class="row">
                        <div class="col-md-5">
                            <div class="content">
                                <h5>Premium detail Package</h5>
                                <ul>
                                    <li><span><i class="fa-solid fa-check"></i></span>Accident history</li>
                                    <li><span><i class="fa-solid fa-check"></i></span>Theft records</li>
                                    <li><span><i class="fa-solid fa-check"></i></span>Title records</li>
                                    <li><span><i class="fa-solid fa-check"></i></span>Market Value</li>
                                    <li><span><i class="fa-solid fa-check"></i></span>Liens and loans</li>
                                    <li><span><i class="fa-solid fa-check"></i></span>Odometer readings</li>
                                </ul>
                                <h3>$<strong>100</strong> <sub>/one time</sub></h3>
                                <a href="{{ route('front.buy.now') }}">Buy Now<i class="fa-solid fa-angle-right"></i></a>
                            </div>
                        </div>

                        <div class="col-md-7">
                            <div class="content twoo">
                                <h5>Elite Gloss Package <span>Save $40</span></h5>
                                <div class="row">
                                    <div class="col-md-6">
                                        <ul>
                                            <li><span><i class="fa-solid fa-check"></i></span>Accident history</li>
                                            <li><span><i class="fa-solid fa-check"></i></span>Theft records</li>
                                            <li><span><i class="fa-solid fa-check"></i></span>Title records</li>
                                            <li><span><i class="fa-solid fa-check"></i></span>Market Value</li>
                                            <li><span><i class="fa-solid fa-check"></i></span>Liens and loans</li>
                                            <li><span><i class="fa-solid fa-check"></i></span>Odometer readings</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6">
                                        <ul>
                                            <li><span><i class="fa-solid fa-check"></i></span>Weather damage</li>
                                            <li><span><i class="fa-solid fa-check"></i></span>Service records</li>
                                            <li><span><i class="fa-solid fa-check"></i></span>Registration</li>
                                            <li><span><i class="fa-solid fa-check"></i></span>Detailed U.S History</li>
                                            <li><span><i class="fa-solid fa-check"></i></span>Odometer readings</li>
                                            <li><span><i class="fa-solid fa-check"></i></span>Rebuild or salvage title
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <h3>$<strong>130</strong> <sub>/one time</sub></h3>
                                <a href="{{ route('front.buy.now') }}">Buy Now<i class="fa-solid fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>

                </div>
            </section>

            <section class="dedicated-customers">
                <div class="container">
                    <div class="title">
                        <img src="{{ asset('front/images/dedicated-img.png') }}">
                        <h3>Dedicated Customer Support: We're Here to Help</h3>
                        <p>Our support team is always ready to assist you. Simply drop us a message, and we'll promptly
                            respond to ensure a seamless experience.</p>
                    </div>

                    <div class="content">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="inner">
                                    <img src="{{ asset('front/images/dedi-icon1.png') }}">
                                    <h4>98%</h4>
                                    <p>Satisfaction rate</p>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="inner">
                                    <img src="{{ asset('front/images/dedi-icon2.png') }}">
                                    <h4>10 minutes</h4>
                                    <p>Avg. response time</p>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="inner">
                                    <img src="{{ asset('front/images/dedi-icon3.png') }}">
                                    <h4>24/7</h4>
                                    <p>Chat Availability</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="history-report">
                        <div class="row">
                            <div class="col-md-6">
                                <h3><span>Starting from </span><span class="fntt">$100*</span><br>for a vehicle history
                                    report</h3>
                                <p>Verify the VIN number and gain valuable insights before buying and selling a used
                                    car. Get started today for peace of mind and confidence in your investment.</p>
                                <div id="vinInput" class="input-container active">
                                    <input type="text" placeholder="Enter your 17 character VIN">
                                    <button>Check your Car
                                        <svg class="svg-inline--fa fa-angle-right" aria-hidden="true" focusable="false"
                                             data-prefix="fas" data-icon="angle-right" role="img"
                                             xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg="">
                                            <path fill="currentColor"
                                                  d="M278.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L210.7 256 73.4 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z"></path>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>


            </section>

            <section class="find-car">
                <div class="container">
                    <div class="title">
                        <h2>Find car by make</h2>
                    </div>

                    <div class="content">
                        <div class="row">
                            <div class="col-md-4">
                                <a href="https://www.lexus.com/" target="_blank">
                                    <div class="inner">
                                        <img src="{{ asset('front/images/car1.1.png') }}">
                                        <h4>Lexus</h4>
                                    </div>
                                </a>
                            </div>


                            <div class="col-md-4">
                                <a href="https://www.mercedes-benz.com/en/" target="_blank">
                                    <div class="inner">
                                        <img src="{{ asset('front/images/car22.png') }}">
                                        <h4>Mercedes-Benz</h4>
                                    </div>
                                </a>
                            </div>

                            <div class="col-md-4">
                                <a href="https://www.volvocars.com/sg/" target="_blank">
                                    <div class="inner">
                                        <img src="{{ asset('front/images/car3.png') }}">
                                        <h4>Volvo</h4>
                                    </div>
                                </a>
                            </div>

                            <div class="col-md-4">
                                <a href="https://www.bmw.com/en/index.html" target="_blank">
                                    <div class="inner">
                                        <img src="{{ asset('front/images/car4.png') }}">
                                        <h4>BMW</h4>
                                    </div>
                                </a>
                            </div>

                            <div class="col-md-4">
                                <a href="https://www.infiniti.com/" target="_blank">
                                    <div class="inner">
                                        <img src="{{ asset('front/images/car5.png') }}">
                                        <h4>Infiniti</h4>
                                    </div>
                                </a>
                            </div>

                            <div class="col-md-4">
                                <a href="https://www.audi.com/en.html" target="_blank">
                                    <div class="inner">
                                        <img src="{{ asset('front/images/car6.png') }}">
                                        <h4>Audi AG</h4>
                                    </div>
                                </a>
                            </div>

                            <div class="col-md-4">
                                <a href="https://www.subaru.com/index.html" target="_blank">
                                    <div class="inner">
                                        <img src="{{ asset('front/images/car7.png') }}">
                                        <h4>Subaru</h4>
                                    </div>
                                </a>
                            </div>

                            <div class="col-md-4">
                                <a href="https://www.nissan-global.com/EN/" target="_blank">
                                    <div class="inner">
                                        <img src="{{ asset('front/images/car8.png') }}">
                                        <h4>Nissan Motor</h4>
                                    </div>
                                </a>
                            </div>

                            <div class="col-md-4">
                                <a href="https://www.chevrolet.com/" target="_blank">
                                    <div class="inner">
                                        <img src="{{ asset('front/images/car9.png') }}">
                                        <h4>Chevrolet</h4>
                                    </div>
                                </a>
                            </div>

                            <div class="col-md-4">
                                <a href="https://www.porsche.com/" target="_blank">
                                    <div class="inner">
                                        <img src="{{ asset('front/images/car10.png') }}">
                                        <h4>Porsche AG</h4>
                                    </div>
                                </a>
                            </div>

                            <div class="col-md-4">
                                <a href="https://www.mazda.com/" target="_blank">
                                    <div class="inner">
                                        <img src="{{ asset('front/images/car11.png') }}">
                                        <h4>Mazda</h4>
                                    </div>
                                </a>
                            </div>

                            <div class="col-md-4">
                                <a href="https://www.hyundai.com/worldwide/en" target="_blank">
                                    <div class="inner">
                                        <img src="{{ asset('front/images/car12.png') }}">
                                        <h4>Hyundai Motor</h4>
                                    </div>
                                </a>
                            </div>

                            <div class="col-md-4">
                                <a href="https://www.landrover.com/market-selector/index.html" target="_blank">
                                    <div class="inner">
                                        <img src="{{ asset('front/images/car13.png') }}">
                                        <h4>Land Rover</h4>
                                    </div>
                                </a>
                            </div>

                            <div class="col-md-4">
                                <a href="https://www.acura.com/" target="_blank">
                                    <div class="inner">
                                        <img src="{{ asset('front/images/car14.png') }}">
                                        <h4>Acura</h4>
                                    </div>
                                </a>
                            </div>

                            <div class="col-md-4">
                                <a href="https://www.cadillac.com/" target="_blank">
                                    <div class="inner">
                                        <img src="{{ asset('front/images/car15.png') }}">
                                        <h4>Cadillac</h4>
                                    </div>
                                </a>
                            </div>

                            <div class="col-md-4">
                                <a href="https://www.tesla.com/" target="_blank">
                                    <div class="inner">
                                        <img src="{{ asset('front/images/car16.png') }}">
                                        <h4>Tesla</h4>
                                    </div>
                                </a>
                            </div>

                            <div class="col-md-4">
                                <a href="https://www.mitsubishicars.com/" target="_blank">
                                    <div class="inner">
                                        <img src="{{ asset('front/images/car17.png') }}">
                                        <h4>Mitsubishi</h4>
                                    </div>
                                </a>
                            </div>

                            <div class="col-md-4">
                                <a href="https://www.toyota.com/" target="_blank">
                                    <div class="inner">
                                        <img src="{{ asset('front/images/car18.png') }}">
                                        <h4>Toyota</h4>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </section>
        </div>
    </div>

@endsection
