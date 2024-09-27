@extends('layout.app')
@section('content')

    <div class="page">
        <div class="page__wrapper">
            <section class="checkout">
                <div class="container">
                    <div class="row">
                        <div class="col-md-7">
                            <div class="form-container">
                                <h2>Customer Information</h2>
                                <form>
                                    <label for="vin">Enter Your 17 character VIN *</label>
                                    <input type="text" id="vin" name="vin" required>
                                    <p id="error-message-1" style="color:red; display:none;">VIN must be exactly 17 characters long.</p>



                                    <label for="name">Name *</label>
                                    <input type="text" id="name" name="name" required>

                                    <label for="address">Street Address *</label>
                                    <input type="text" id="address" name="address" required>

                                    <label for="city">City *</label>
                                    <input type="text" id="city" name="city" required>

                                    <label for="country">Country *</label>
                                    <select id="country" name="country" required>
                                        <option value="" disabled selected>Select a country</option>
                                        <option value="Australia">Australia</option>
                                        <option value="Canada">Canada</option>
                                        <option value="India">India</option>
                                        <option value="New Zealand">New Zealand</option>
                                        <option value="United Kingdom">United Kingdom</option>
                                        <option value="United States">United States</option>
                                    </select>


                                    <label for="province">Province *</label>
                                    <input type="text" id="province" name="province" required>

                                    <label for="postal-code">Postal Code *</label>
                                    <input type="text" id="postal-code" name="postal-code" required>

                                    <label for="email">Email *</label>
                                    <input type="email" id="email" name="email" required>

                                    <label for="confirm-email">Confirm Email *</label>
                                    <input type="email" id="confirm-email" name="confirm-email" required>




                                    <div class="mt-5 payment-method">
                                        <h2>Payment Method</h2>
                                        <div class="payment-option">
                                            <input type="radio" id="credit-card" name="payment-method">
                                            <label for="credit-card">Pay with Credit Card</label>
                                            <div class="card-logos">
                                                <img src="{{ asset('front/images/visaa.png') }}" alt="Visa">
                                                <img src="{{ asset('front/images/mastercard.png') }}" alt="MasterCard">
                                                <img src="{{ asset('front/images/amex.png') }}" alt="American Express">
                                            </div>
                                        </div>
                                        <div class="payment-option">
                                            <input type="radio" id="paypal" name="payment-method">
                                            <label for="paypal">Pay with PayPal</label>
                                            <img src="{{ asset('front/images/paypal.png') }}" alt="PayPal">
                                        </div>
                                    </div>
                                    <button id="checkoutt">Proceed to Checkout</button>
                                </form>
                            </div>

                        </div>

                        <div class="col-md-5">
                            <div class="order-summary">
                                <h2>Order Summary</h2>
                                <p class="boldd">3 Vehicle History Reports + 1 Lien Check <a href="{{ route('front.index') }}#change">Change</a> </p>
                                <p><img src="{{ asset('front/images/tick.png') }}"> Accident and damage history</p>
                                <p><img src="{{ asset('front/images/tick.png') }}"> Recall information</p>
                                <p><img src="{{ asset('front/images/tick.png') }}"> Free History-Based Value</p>
                                <p><img src="{{ asset('front/images/tick.png') }}"> Canadian lien search</p>
                                <p><img src="{{ asset('front/images/tick.png') }}"> Check multiple vehicles</p>
                                <h2>Order Total: $112.95</h2>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
        </div>
    </div

@endsection
