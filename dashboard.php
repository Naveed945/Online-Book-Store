<?php include_once 'server/adminheader.php'; ?>

<div class="layout-px-spacing">
	<div class="row">
		<div class=" col-12">
			<div style="width: 100%;height: 50vh;background:linear-gradient(rgba(0,0,0,0.0),rgba(0,0,0,0.5)), url(img/bg.jpg);background-size: cover;background-position: center;display: flex;justify-content: center;align-items: center">

			</div>

		</div>
		<!--	end of col-->
	</div>

	<div class="row layout-top-spacing" style="margin-top: -4rem;">




		<div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">

			<div class="widget widget-account-invoice-three" style="background: none">

				<div class="widget-heading">

					<div class="wallet-balance">
						<p>All Orders</p>
						<h5 class="">&rArr;</h5>
					</div>
				</div>

				<div class="widget-amount" style="background: none">

					<div class="w-a-info funds-received">

						<a href="orders.php" class="btn btn-outline-primary pay-now">View Now &rArr;</a>
					</div>


				</div>


			</div>
		</div>

		<div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">

			<div class="widget widget-account-invoice-three" style="background: none">

				<div class="widget-heading one">

					<div class="wallet-balance">
						<p>All Books</p>
						<h5 class="">&rArr;</h5>
					</div>
				</div>

				<div class="widget-amount">

					<div class="w-a-info funds-received">

						<a href="books.php" class="btn btn-outline-primary pay-now">View Now &rArr;</a>
					</div>


				</div>


			</div>
		</div>


		<div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">

			<div class="widget widget-account-invoice-three" style="background: none;">

				<div class="widget-heading two">

					<div class="wallet-balance">
						<p>All Users</p>
						<h5 class="">&rArr;</h5>
					</div>
				</div>

				<div class="widget-amount">

					<div class="w-a-info funds-received">

						<a href="users.php" class="btn btn-outline-primary pay-now">View Now &rArr;</a>
					</div>


				</div>


			</div>
		</div>





	</div>

</div>



<?php include_once 'server/adminfooter.php'; ?>
