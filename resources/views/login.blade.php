@extends('layout.app')
@section('content')

    <div class="scroll-wrapper">
        <div class="scroll-content">

            <section class="login">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="inner">
                                <div class="img">
                                    <img id="locked" src="{{ asset('front/images/lock.png') }}">
                                </div>
                                <div class="content">
                                    <h2>Login for Community <br>Chat Rooms and Faith Games</h2>
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit</p>
                                    <form>
                                        <div class="flexx">
                                            <img src="{{ asset('front/images/email.png') }}">
                                            <input type="email" name="" placeholder="Email Address" required>
                                        </div>
                                        <div class="flexx">
                                            <img src="{{ asset('front/images/password.png') }}">
                                            <input type="password" name="" placeholder="......." required>
                                        </div>
                                        <button type="submit">Log in</button>
                                    </form>
                                </div>
                            </div>
                            <a class="forgot-password" href="javascript:void(0)">Forgotten password?</a><br>
                            <a class="forgot-password" href="{{ route('front.sign.up') }}">Create new account</a>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

@endsection
