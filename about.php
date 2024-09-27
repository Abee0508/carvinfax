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
						<li class="nav-item"><a class="nav-link active" aria-current="page" href="index.php"><i class="fa-solid fa-house"></i></a></li>
						<li class="nav-item"><a class="nav-link active" aria-current="page" href="about.php"> About Us </a></li>
						<li class="nav-item"><a class="nav-link active" aria-current="page" href="pricing.php">Packages</a></li>
						<li class="nav-item"><a class="nav-link active" aria-current="page" href="sample-report.php">Sample Report</a></li>
						<li class="nav-item"><a class="nav-link active" aria-current="page" href="vehicle-history.php">Vehicle History Report</a></li>
					</ul>
					<div class="lang-signup">
					<button id="language">
						<img src="images/language.png">
						<span id="current-lang">EN</span>
					</button>
					<a href="pricing.php">Buy a report</a>
				</div>
				</div>
				
			</div>
		</nav>
	</div>
</header>

		<section class="about">
			<div class="container">
				<div class="content">
					<h2>What is CarvinFax?</h2>
					<p>CarvinFax is world best online automotive bureau, a data and information company that holds global database of automotive records.</p>

					<p>Through providing access to extensive data, our mission is to reduce fraud and improve transparency in the sale and purchase of used vehicles by selling vehicle reports.</p>

					<p>We believe we offer some of the best value for money reports and a simple solution for car buyers and sellers. Our paid reports help you uncover any hidden history on a vehicle you are thinking of purchasing.</p>

					<p>Information provided in any CarvinFax Report comes from various data sources in the US, UK, Japan, Canada and Malaysia. These include: auction houses, insurance companies and several government agencies.</p>
				</div>

				<div class="content">
					<h2>Our Mission</h2>
					<p>At CarvinFax, our mission is to provide a compelling online experience with our products and solutions to empower consumers to make better informed decisions when purchasing a vehicle.</p>
				</div>

				<div class="content">
					<h2>Our Values</h2>
					<p>Our values are what makes us tick. We put our heart into the things we do and here's how we do it.</p>
				</div>


				<div class="valuess">
					<div class="row">
						<div class="col-md-4">
							<div class="inner">
								<img src="images/value1.svg">
								<h5>Transparent</h5>
								<p>Having clear intentions and not taking sides.</p>
							</div>
						</div>

						<div class="col-md-4">
							<div class="inner">
								<img src="images/value2.svg">
								<h5>Integrity</h5>
								<p>Doing what's right, not what's easy.</p>
							</div>
						</div>

						<div class="col-md-4">
							<div class="inner">
								<img src="images/value3.svg">
								<h5>Consumer advocate</h5>
								<p>Helping them make better decisions.</p>
							</div>
						</div>
					</div>
				</div>

			</div>
		</section>





		<section class="thousand-dollars">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="inner">
							<h3>Save Thousands of Dollars</h3>
							<p>Learn everything there is to know about your next car.</p>
							<div class="input-switcher">
	
								<div id="vinInput" class="input-container active">
									<input type="text" placeholder="Enter your 17 character VIN" />
									<button>Check VIN<i class="fa-solid fa-angle-right"></i></button>
								</div>
								<div id="plateInput" class="input-container">
									<input type="text" placeholder="License Plate" />
									<select>
										<option value="state">State</option>
										<!-- Add other states here -->
									</select>
									<button>Check Plate <i class="fa-solid fa-angle-right"></i></button>
								</div>
							</div>
							<img src="images/thousand-img.svg">
						</div>
					</div>
				</div>
			</div>
		</section>

		<?php include 'include/footer.php'; ?>
	</div>
</div>
<?php include 'include/script.php'; ?>