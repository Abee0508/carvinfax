@extends('layout.app')
@section('content')

    <div class="page">
        <div class="page__wrapper">
            <section class="banner vehicle-history">
                <div class="bg-color">
                    <div class="container">
                        <div class="content">
                            <h1>New look, same peace of mind.</h1>
                            <p>Key details at a glance with no surprises</p>
                            <img src="{{ asset('front/images/vehicle-history.png') }}">
                        </div>
                    </div>
                </div>
            </section>

            <section class="vh-premium">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="inner">
                                <h2>Premium detail Package</h2>
                                <ul>
                                    <li><img src="{{ asset('front/images/tick.png') }}"> A detailed record of the vehicle's past, including previous owners, accident history, and maintenance records.</li>
                                    <li><img src="{{ asset('front/images/tick.png') }}"> Insights into the vehicle's ownership history, including any title issues, odometer discrepancies, and reported damages.</li>
                                    <li><img src="{{ asset('front/images/tick.png') }}">A thorough summary of the vehicle's background, covering service history, collision reports, and any salvage or insurance claims.</li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <img src="{{ asset('front/images/lien.png') }}" style="width: 100%;">
                        </div>

                        <div class="col-md-6" style="text-align: left;">
                            <img src="{{ asset('front/images/elite.png') }}" style="width: 80%;">
                        </div>

                        <div class="col-md-6">
                            <div class="inner">
                                <h2>Elite Gloss Package</h2>
                                <ul>
                                    <li><img src="{{ asset('front/images/tick.png') }}">Verification of the vehicle’s title status, including any salvage, rebuilt, or flood designations.</li>
                                    <li><img src="{{ asset('front/images/tick.png') }}"> Mileage history with documented odometer readings to identify any potential rollback or discrepancies.</li>
                                    <li><img src="{{ asset('front/images/tick.png') }}">Records of previous owners and their locations, ensuring transparency and clarity about the vehicle's past..</li>
                                    <li><img src="{{ asset('front/images/tick.png') }}">Information on any outstanding recalls or safety issues affecting the vehicle. Service and maintenance history to verify regular upkeep and identify any major repairs..</li>
                                    <li><img src="{{ asset('front/images/tick.png') }}">A summary of any insurance claims filed, providing insight into previous damage or repairs, Report on any structural damage or major repairs, including collision and flood damage assessments</li>
                                </ul>
                            </div>
                        </div>




                    </div>
                </div>
            </section>

            <section class="sample-record twoo">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="content repeated">
                                <h2>Vehicle History Report</h2>
                                <p>With CavinFax, it's easier to ask what's not included in our vehicle history reports because they're so detailed. Examples of what you could find in our vehicle history reports include:</p>
                                <ul>
                                    <li><img src="{{ asset('front/images/tick-orange.png') }}"> Photos</li>
                                    <li><img src="{{ asset('front/images/tick-orange.png') }}"> Recalls</li>
                                    <li><img src="{{ asset('front/images/tick-orange.png') }}"> Detailed history</li>
                                    <li><img src="{{ asset('front/images/tick-orange.png') }}"> Market value</li>
                                    <li><img src="{{ asset('front/images/tick-orange.png') }}"> Sales history</li>
                                    <li><img src="{{ asset('front/images/tick-orange.png') }}"> Ownership costs</li>
                                    <li><img src="{{ asset('front/images/tick-orange.png') }}"> Accident history</li>
                                    <li><img src="{{ asset('front/images/tick-orange.png') }}"> Warranties</li>
                                    <li><img src="{{ asset('front/images/tick-orange.png') }}"> Theft records</li>
                                    <li><img src="{{ asset('front/images/tick-orange.png') }}"> Safety ratings</li>
                                    <li><img src="{{ asset('front/images/tick-orange.png') }}"> Title records</li>
                                    <li><img src="{{ asset('front/images/tick-orange.png') }}"> Full vehicle specs</li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <img src="{{ asset('front/images/sample-record.png') }}">
                        </div>

                    </div>

                    <p>In addition, you also have the option to pull salvage records, and each report also includes a tool for guided self-inspections so you can make sure  the vehicle you want to learn more about lines up with what you're seeing in person.</p>
                </div>
            </section>

            <section class="nmvtis">
                <div class="container">
                    <div class="inner">
                        <div class="row">
                            <div class="col-md-7">
                                <h2>
                                    <img src="{{ asset('front/images/nmvtis.png') }}">
                                    Official NMVTIS Source
                                </h2>
                                <p>
                                    CarvinFax is an approved NMVTIS data provider. NMVTIS is a national database designed to protect consumers from fraud and unsafe vehicles, to prevent stolen vehicles from being resold, and to provide users with accurate and complete vehicle information.
                                </p>
                            </div>

                            <div class="col-md-4">
                                <img src="{{ asset('front/images/nmvtis2.png') }}">
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
                                <a href="">
                                    <div class="inner">
                                        <img src="{{ asset('front/images/car1.1.webp') }}">
                                        <h4>Lexus</h4>
                                    </div>
                                </a>
                            </div>


                            <div class="col-md-4">
                                <a href="">
                                    <div class="inner">
                                        <img src="{{ asset('front/images/car22.webp') }}">
                                        <h4>Mercedes-Benz</h4>
                                    </div>
                                </a>
                            </div>

                            <div class="col-md-4">
                                <a href="">
                                    <div class="inner">
                                        <img src="{{ asset('front/images/car3.webp') }}">
                                        <h4>Volvo</h4>
                                    </div>
                                </a>
                            </div>

                            <div class="col-md-4">
                                <a href="">
                                    <div class="inner">
                                        <img src="{{ asset('front/images/car4.webp') }}">
                                        <h4>BMW</h4>
                                    </div>
                                </a>
                            </div>

                            <div class="col-md-4">
                                <a href="">
                                    <div class="inner">
                                        <img src="{{ asset('front/images/car5.webp') }}">
                                        <h4>Infiniti</h4>
                                    </div>
                                </a>
                            </div>

                            <div class="col-md-4">
                                <a href="">
                                    <div class="inner">
                                        <img src="{{ asset('front/images/car6.webp') }}">
                                        <h4>Audi AG</h4>
                                    </div>
                                </a>
                            </div>

                            <div class="col-md-4">
                                <a href="">
                                    <div class="inner">
                                        <img src="{{ asset('front/images/car7.webp') }}">
                                        <h4>Subaru</h4>
                                    </div>
                                </a>
                            </div>

                            <div class="col-md-4">
                                <a href="">
                                    <div class="inner">
                                        <img src="{{ asset('front/images/car8.webp') }}">
                                        <h4>Nissan Motor</h4>
                                    </div>
                                </a>
                            </div>

                            <div class="col-md-4">
                                <a href="">
                                    <div class="inner">
                                        <img src="{{ asset('front/images/car9.webp') }}">
                                        <h4>Chevrolet</h4>
                                    </div>
                                </a>
                            </div>

                            <div class="col-md-4">
                                <a href="">
                                    <div class="inner">
                                        <img src="{{ asset('front/images/car10.webp') }}">
                                        <h4>Porsche AG</h4>
                                    </div>
                                </a>
                            </div>

                            <div class="col-md-4">
                                <a href="">
                                    <div class="inner">
                                        <img src="{{ asset('front/images/car11.webp') }}">
                                        <h4>Mazda</h4>
                                    </div>
                                </a>
                            </div>

                            <div class="col-md-4">
                                <a href="">
                                    <div class="inner">
                                        <img src="{{ asset('front/images/car12.webp') }}">
                                        <h4>Hyundai Motor</h4>
                                    </div>
                                </a>
                            </div>

                            <div class="col-md-4">
                                <a href="">
                                    <div class="inner">
                                        <img src="{{ asset('front/images/car13.webp') }}">
                                        <h4>Land Rover</h4>
                                    </div>
                                </a>
                            </div>

                            <div class="col-md-4">
                                <a href="">
                                    <div class="inner">
                                        <img src="{{ asset('front/images/car14.webp') }}">
                                        <h4>Acura</h4>
                                    </div>
                                </a>
                            </div>

                            <div class="col-md-4">
                                <a href="">
                                    <div class="inner">
                                        <img src="{{ asset('front/images/car15.webp') }}">
                                        <h4>Cadillac</h4>
                                    </div>
                                </a>
                            </div>

                            <div class="col-md-4">
                                <a href="">
                                    <div class="inner">
                                        <img src="{{ asset('front/images/car16.webp') }}">
                                        <h4>Tesla</h4>
                                    </div>
                                </a>
                            </div>

                            <div class="col-md-4">
                                <a href="">
                                    <div class="inner">
                                        <img src="{{ asset('front/images/car17.webp') }}">
                                        <h4>Mitsubishi</h4>
                                    </div>
                                </a>
                            </div>

                            <div class="col-md-4">
                                <a href="">
                                    <div class="inner">
                                        <img src="{{ asset('front/images/car18.webp') }}">
                                        <h4>Toyota</h4>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </section>

            <section class="cta">
                <div class="container">
                    <img src="{{ asset('front/images/cta-img.png') }}">
                    <p>See what types of critical information our vehicle history reports provide to help you avoid costly problems and drive away with confidence.
                    </p>
                    <a href="javascript:void(0)">Learn More<i class="fa-solid fa-angle-right"></i></a>
                    <a href="{{ route('front.sample.report') }}">View sample report</a>
                </div>
            </section>

            <section class="people">
                <div class="container">
                    <div class="inner">
                        <div class="content">
                            <img src="{{ asset('front/images/logo.png') }}">
                            <p>Join the millions of Peoples we've helped to find the right car with a CarvinFax Vehicle History Report.
                            </p>
                            <a href="{{ route('front.sample.report') }}">Get Report<i class="fa-solid fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

@endsection
