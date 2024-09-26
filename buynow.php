<?php include 'include/head.php'; ?>
<div class="page">
    <div class="page__wrapper">
        <header>
            <div class="container">
                <nav class="navbar navbar-expand-lg">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="index.php"><img src="images/logo.png"></a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <li class="nav-item"><a class="nav-link active" aria-current="page" href="index.php"><img src="images/home-icon.png"></a></li>
                                <li class="nav-item"><a class="nav-link active" aria-current="page" href="about.php"> About Us </a></li>
                                <li class="nav-item"><a class="nav-link active" aria-current="page" href="pricing.php">Packages</a></li>
                                <li class="nav-item"><a class="nav-link active" aria-current="page" href="sample-report.php">Sample Report</a></li>
                                <li class="nav-item"><a class="nav-link active" aria-current="page" href="vehicle-history.php">Vehicle History Report</a></li>
                            </ul>
                            <div class="lang-signup">
                                <button id="language">
                                    <img src="images/language.png">
                                    <select id="google_translate_element" class="menuDropdown">
                                        <option>English</option>
                                        <option>Turkish</option>
                                    </select>
                                </button>
                                <a href="login.php">Login / Signup</a>
                            </div>
                        </div>

                    </div>
                </nav>
            </div>
        </header>

        <section class="checkout">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <div class="form-container">
                            <h2>Customer Information</h2>
                            <form>
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
                                            <img src="images/visaa.png" alt="Visa">
                                            <img src="images/mastercard.png" alt="MasterCard">
                                            <img src="images/amex.png" alt="American Express">
                                        </div>
                                    </div>
                                    <div class="payment-option">
                                        <input type="radio" id="paypal" name="payment-method">
                                        <label for="paypal">Pay with PayPal</label>
                                        <img src="images/paypal.png" alt="PayPal">
                                    </div>
                                </div>
                                <button id="checkoutt">Proceed to Checkout</button>
                            </form>
                        </div>

                    </div>

                    <div class="col-md-5">
                        <div class="order-summary">
                            <h2>Order Summary</h2>
                            <p class="boldd">3 Vehicle History Reports + 1 Lien Check <a href="index.php#change">Change</a> </p>
                            <p><img src="images/tick.png"> Accident and damage history</p>
                            <p><img src="images/tick.png"> Recall information</p>
                            <p><img src="images/tick.png"> Free History-Based Value</p>
                            <p><img src="images/tick.png"> Canadian lien search</p>
                            <p><img src="images/tick.png"> Check multiple vehicles</p>
                            <h2>Order Total: $112.95</h2>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <?php include 'include/footer.php'; ?>
    </div>
</div>
<?php include 'include/script.php'; ?>