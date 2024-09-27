@extends('layout.app')
@section('content')

    <div class="page">
        <div class="page__wrapper">
            <section class="pricing pricingg">
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
                                    <li><img src="{{ asset('front/images/tick-orange.png') }}">Accident history </li>
                                    <li><img src="{{ asset('front/images/tick-orange.png') }}">Theft records </li>
                                    <li><img src="{{ asset('front/images/tick-orange.png') }}">Title records </li>
                                    <li><img src="{{ asset('front/images/tick-orange.png') }}">Market Value </li>
                                    <li><img src="{{ asset('front/images/tick-orange.png') }}">Liens and loans </li>
                                    <li><img src="{{ asset('front/images/tick-orange.png') }}">Odometer readings </li>
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
                                            <li><img src="{{ asset('front/images/tick-orange.png') }}">Accident history </li>
                                            <li><img src="{{ asset('front/images/tick-orange.png') }}">Theft records </li>
                                            <li><img src="{{ asset('front/images/tick-orange.png') }}">Title records </li>
                                            <li><img src="{{ asset('front/images/tick-orange.png') }}">Market Value </li>
                                            <li><img src="{{ asset('front/images/tick-orange.png') }}">Liens and loans </li>
                                            <li><img src="{{ asset('front/images/tick-orange.png') }}">Odometer readings </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6">
                                        <ul>
                                            <li><img src="{{ asset('front/images/tick-orange.png') }}">Weather damage</li>
                                            <li><img src="{{ asset('front/images/tick-orange.png') }}">Service records</li>
                                            <li><img src="{{ asset('front/images/tick-orange.png') }}">Registration</li>
                                            <li><img src="{{ asset('front/images/tick-orange.png') }}">Detailed U.S History</li>
                                            <li><img src="{{ asset('front/images/tick-orange.png') }}">Odometer readings</li>
                                            <li><img src="{{ asset('front/images/tick-orange.png') }}">Rebuild or salvage title</li>
                                        </ul>
                                    </div>
                                </div>
                                <h3>$<strong>130</strong> <sub>/one time</sub></h3>
                                <a href="{{ route('front.buy.now') }}">Buy Now<i class="fa-solid fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>


                    <div class="history-reporttt">
                        <h2>What's in a vehicle history report?</h2>
                        <p>With CavinFax, it's easier to ask what's not included in our vehicle history reports because they're so detailed. Examples of what you could find in our vehicle history reports include:</p>
                        <ul>
                            <li><img src="{{ asset('front/images/tick-orange.png') }}">Photos</li>
                            <li><img src="{{ asset('front/images/tick-orange.png') }}">Theft records</li>
                            <li><img src="{{ asset('front/images/tick-orange.png') }}">Ownership costs</li>
                            <li><img src="{{ asset('front/images/tick-orange.png') }}">Detailed history</li>
                            <li><img src="{{ asset('front/images/tick-orange.png') }}">Title records</li>
                            <li><img src="{{ asset('front/images/tick-orange.png') }}">Warranties</li>
                            <li><img src="{{ asset('front/images/tick-orange.png') }}">Sales history</li>
                            <li><img src="{{ asset('front/images/tick-orange.png') }}">Recalls</li>
                            <li><img src="{{ asset('front/images/tick-orange.png') }}">Safety ratings</li>
                            <li><img src="{{ asset('front/images/tick-orange.png') }}">Accident history</li>
                            <li><img src="{{ asset('front/images/tick-orange.png') }}">Market value</li>
                            <li><img src="{{ asset('front/images/tick-orange.png') }}">Full vehicle specs</li>
                        </ul>
                        <p>In addition, you also have the option to pull salvage records, and each report also includes a tool for guided self-inspections so you can make sure  the vehicle you want to learn more about lines up with what you're seeing in person.</p>

                        <div class="sample-reporttt">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="content repeated">
                                        <h6>Sample Report</h6>
                                        <h2>Here’s how a Carvinfax report can help you</h2>
                                        <p>If you plan on buying a car, you must know as much as possible about it. Using CarvinFax VIN Check service, instantly learn about previous owners, any major damage and accidents (flood/fire/collision and more), original or optional equipment installed, mileage/odometer, and much more!</p>
                                        <a href="{{ route('front.sample.report') }}">Read More<i class="fa-solid fa-angle-right"></i></a>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <img src="{{ asset('front/images/sample-record.png') }}">
                                </div>

                            </div>
                        </div>

                    </div>

                </div>
                <img class="car-design" src="{{ asset('front/images/car-design.png') }}">
            </section>
        </div>
    </div>

@endsection
