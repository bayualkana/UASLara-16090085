@extends('User.template')

@section('main')

@include('User.banner')

<div id="index">
  <div id="content">

          <!-- Topbar -->
          
          <!-- End of Topbar -->

          <!-- Begin Page Content -->
          <div class="container-fluid">

          <section class="owl-carousel active-product-area section_gap">
		<!-- single product slide -->
		<div class="single-product-slider">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-6 text-center">
						<div class="section-title">
							<h1>Latest Products</h1>
							<p>Dapatkan Koleksi Sepatu Olahraga & Sneaker terbaru di toko kami.
							</p>
						</div>
					</div>
				</div>
				<div class="row">
					<!-- single product -->
					<div class="col-lg-3 col-md-6">
						<div class="single-product">
							<img class="img-fluid" src="{{asset('public/user/img/product/p1.jpg')}}" alt="">
							<div class="product-details">
								<h6>addidas New Hammer sole
									for Sports person</h6>
								<div class="price">
									<h6>Rp. 150.000</h6>
									<h6 class="l-through">Rp. 210.000</h6>
								</div>
								<div class="prd-bottom">
									<a href="" class="social-info">
										<span class="lnr lnr-move"></span>
										<p class="hover-text">view more</p>
									</a>
								</div>
							</div>
						</div>
					</div>
					<div class="social-info">
										<span class="ti-bag"></span>
										<p class="hover-text">add to bag</p>
									</a>
									<a href="" class="social-info">
										<span class="lnr lnr-heart"></span>
										<p class="hover-text">Wishlist</p>
									</a>
									<a href="" class="social-info">
										<span class="lnr lnr-sync"></span>
										<p class="hover-text">compare</p>
									</a>
									<a href="" class="social-info">
										<span class="lnr lnr-move"></span>
										<p class="hover-text">view more</p>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- single product slide -->
		<div class="single-product-slider">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-6 text-center">
						<div class="section-title">
							<h1>Coming Products</h1>
							<p>Dapatkan Koleksi Sepatu Olahraga & Sneaker terbaru di toko kami.
							</p>
						</div>
					</div>
				</div>
				<div class="row"><!-- single product -->
					<div class="col-lg-3 col-md-6">
						<div class="single-product">
							<img class="img-fluid" src="{{asset('public/user/img/product/p2.jpg')}}" alt="">
							<div class="product-details">
								<h6>NIKE New Hammer sole
									for Sports person</h6>
								<div class="price">
									<h6>Rp. 150.000</h6>
									<h6 class="l-through">Rp. 210.000</h6>
								</div>
								<div class="prd-bottom">

									<a href="" class="social-info">
										<span class="ti-bag"></span>
										<p class="hover-text">add to bag</p>
									</a>
									<a href="" class="social-info">
										<span class="lnr lnr-heart"></span>
										<p class="hover-text">Wishlist</p>
									</a>
									<a href="" class="social-info">
										<span class="lnr lnr-sync"></span>
										<p class="hover-text">compare</p>
									</a>
									<a href="" class="social-info">
										<span class="lnr lnr-move"></span>
										<p class="hover-text">view more</p>
									</a>
								</div>
							</div>
						</div>
					</div>
					<!-- single product -->
					<div class="col-lg-3 col-md-6">
						<div class="single-product">
							<img class="img-fluid" src="{{asset('public/user/img/product/p3.jpg')}}" alt="">
							<div class="product-details">
								<h6>addidas </h6>
								<div class="price">
									<h6>Rp. 150.000</h6>
									<h6 class="l-through">Rp. 210.000</h6>
								</div>
								<div class="prd-bottom">
									<a href="" class="social-info">
										<span class="ti-bag"></span>
										<p class="hover-text">add to bag</p>
									</a>
									<a href="" class="social-info">
										<span class="lnr lnr-heart"></span>
										<p class="hover-text">Wishlist</p>
									</a>
									<a href="" class="social-info">
										<span class="lnr lnr-sync"></span>
										<p class="hover-text">compare</p>
									</a>
									<a href="" class="social-info">
										<span class="lnr lnr-move"></span>
										<p class="hover-text">view more</p>
									</a>
								</div>
							</div>
						</div>
					</div>
					<!-- single product -->
					<div class="col-lg-3 col-md-6">
						<div class="single-product">
							<img class="img-fluid" src="{{asset('public/user/img/product/p4.jpg')}}" alt="">
							<div class="product-details">
								<h6>New Balance</h6>
								<div class="price">
									<h6>Rp. 150.000</h6>
									<h6 class="l-through">Rp. 210.000</h6>
								</div>
								<div class="prd-bottom">

									<a href="" class="social-info">
										<span class="ti-bag"></span>
										<p class="hover-text">add to bag</p>
									</a>
									<a href="" class="social-info">
										<span class="lnr lnr-heart"></span>
										<p class="hover-text">Wishlist</p>
									</a>
									<a href="" class="social-info">
										<span class="lnr lnr-sync"></span>
										<p class="hover-text">compare</p>
									</a>
									<a href="" class="social-info">
										<span class="lnr lnr-move"></span>
										<p class="hover-text">view more</p>
									</a>
								</div>
							</div>
						</div>
					</div>
					<!-- single product -->
					<div class="col-lg-3 col-md-6">
						<div class="single-product">
							<img class="img-fluid" src="{{asset('public/user/img/product/p5.jpg')}}" alt="">
							<div class="product-details">
								<h6>New Adidas Sports for Ladies</h6>
								<div class="price">
									<h6>Rp. 150.000</h6>
									<h6 class="l-through">Rp. 210.000</h6>
								</div>
								<div class="prd-bottom">

									<a href="" class="social-info">
										<span class="ti-bag"></span>
										<p class="hover-text">add to bag</p>
									</a>
									<a href="" class="social-info">
										<span class="lnr lnr-heart"></span>
										<p class="hover-text">Wishlist</p>
									</a>
									<a href="" class="social-info">
										<span class="lnr lnr-sync"></span>
										<p class="hover-text">compare</p>
									</a>
									<a href="" class="social-info">
										<span class="lnr lnr-move"></span>
										<p class="hover-text">view more</p>
									</a>
								</div>
							</div>
						</div>
					</div>
					<!-- single product -->
					<div class="col-lg-3 col-md-6">
						<div class="single-product">
							<img class="img-fluid" src="{{asset('public/user/img/product/p6.jpg')}}" alt="">
							<div class="product-details">
								<h6>New Diadora Sports</h6>
								<div class="price">
									<h6>Rp. 150.000</h6>
									<h6 class="l-through">Rp. 210.000</h6>
								</div>
								<div class="prd-bottom">

									<a href="" class="social-info">
										<span class="ti-bag"></span>
										<p class="hover-text">add to bag</p>
									</a>
									<a href="" class="social-info">
										<span class="lnr lnr-heart"></span>
										<p class="hover-text">Wishlist</p>
									</a>
									<a href="" class="social-info">
										<span class="lnr lnr-sync"></span>
										<p class="hover-text">compare</p>
									</a>
									<a href="" class="social-info">
										<span class="lnr lnr-move"></span>
										<p class="hover-text">view more</p>
									</a>
								</div>
							</div>
						</div>
					</div>
					<!-- single product -->
					<div class="col-lg-3 col-md-6">
						<div class="single-product">
							<img class="img-fluid" src="{{asset('public/user/img/product/p7.jpg')}}" alt="">
							<div class="product-details">
								<h6>addidas New Sneakers for Ladies</h6>
								<div class="price">
									<h6>Rp. 150.000</h6>
									<h6 class="l-through">Rp. 210.000</h6>
								</div>
								<div class="prd-bottom">

									<a href="" class="social-info">
										<span class="ti-bag"></span>
										<p class="hover-text">add to bag</p>
									</a>
									<a href="" class="social-info">
										<span class="lnr lnr-heart"></span>
										<p class="hover-text">Wishlist</p>
									</a>
									<a href="" class="social-info">
										<span class="lnr lnr-sync"></span>
										<p class="hover-text">compare</p>
									</a>
									<a href="" class="social-info">
										<span class="lnr lnr-move"></span>
										<p class="hover-text">view more</p>
									</a>
								</div>
							</div>
						</div>
					</div>
					<!-- single product -->
					<div class="col-lg-3 col-md-6">
						<div class="single-product">
							<img class="img-fluid" src="{{asset('public/user/img/product/p8.jpg')}}" alt="">
							<div class="product-details">
								<h6>New Puma Pink For ladies </h6>
								<div class="price">
									<h6>Rp. 150.000</h6>
									<h6 class="l-through">Rp. 210.000</h6>
								</div>
								<div class="prd-bottom">

									<a href=
					<!-- single product -->
					<div class="col-lg-3 col-md-6">
						<div class="single-product">
							<img class="img-fluid" src="{{asset('public/user/img/sd/c1.jpg')}}" alt="">
							<div class="product-details">
								<h6>addidas New Hammer sole
									for Sports person</h6>
								<div class="price">
									<h6>Rp 150.000</h6>
									<h6 class="l-through">Rp 210.000</h6>
								</div>
								<div class="prd-bottom">

									<a href="" class="social-info">
										<span class="ti-bag"></span>
										<p class="hover-text">add to bag</p>
									</a>
									<a href="" class="social-info">
										<span class="lnr lnr-heart"></span>
										<p class="hover-text">Wishlist</p>
									</a>
									<a href="" class="social-info">
										<span class="lnr lnr-sync"></span>
										<p class="hover-text">compare</p>
									</a>
									<a href="" class="social-info">
										<span class="lnr lnr-move"></span>
										<p class="hover-text">view more</p>
									</a>
								</div>
							</div>
						</div>
					</div>
					<!-- single product -->
					<div class="col-lg-3 col-md-6">
						<div class="single-product">
							<img class="img-fluid" src="{{asset('public/user/img/sd/c2.jpg')}}" alt="">
							<div class="product-details">
								<h6>addidas New Hammer sole
									for Sports person</h6>
								<div class="price">
									<h6>Rp 150.000</h6>
									<h6 class="l-through">Rp 210.000</h6>
								</div>
								<div class="prd-bottom">

									<a href="" class="social-info">
										<span class="ti-bag"></span>
										<p class="hover-text">add to bag</p>
									</a>
									<a href="" class="social-info">
										<span class="lnr lnr-heart"></span>
										<p class="hover-text">Wishlist</p>
									</a>
									<a href="" class="social-info">
										<span class="lnr lnr-sync"></span>
										<p class="hover-text">compare</p>
									</a>
									<a href="" class="social-info">
										<span class="lnr lnr-move"></span>
										<p class="hover-text">view more</p>
									</a>
								</div>
							</div>
						</div>
					</div>
					<!-- single product -->
					<div class="col-lg-3 col-md-6">
						<div class="single-product">
							<img class="img-fluid" src="{{asset('public/user/img/sd/c3.jpg')}}" alt="">
							<div class="product-details">
								<h6>addidas New Hammer sole
									for Sports person</h6>
								<div class="price">
									<h6>Rp 150.000</h6>
									<h6 class="l-through">Rp 210.000</h6>
								</div>
								<div class="prd-bottom">

									<a href="" class="social-info">
										<span class="ti-bag"></span>
										<p class="hover-text">add to bag</p>
									</a>
									<a href="" class="social-info">
										<span class="lnr lnr-heart"></span>
										<p class="hover-text">Wishlist</p>
									</a>
									<a href="" class="social-info">
										<span class="lnr lnr-sync"></span>
										<p class="hover-text">compare</p>
									</a>
									<a href="" class="social-info">
										<span class="lnr lnr-move"></span>
										<p class="hover-text">view more</p>
									</a>
								</div>
							</div>
						</div>
					</div>
					<!-- single product -->
					<div class="col-lg-3 col-md-6">
						<div class="single-product">
							<img class="img-fluid" src="{{asset('public/user/img/sd/c4.jpg')}}" alt="">
							<div class="product-details">
								<h6>addidas New Hammer sole
									for Sports person</h6>
								<div class="price">
									<h6>Rp 150.000</h6>
									<h6 class="l-through">Rp 210.000</h6>
								</div>
								<div class="prd-bottom">

									<a href="" class="social-info">
										<span class="ti-bag"></span>
										<p class="hover-text">add to bag</p>
									</a>
									<a href="" class="social-info">
										<span class="lnr lnr-heart"></span>
										<p class="hover-text">Wishlist</p>
									</a>
									<a href="" class="social-info">
										<span class="lnr lnr-sync"></span>
										<p class="hover-text">compare</p>
									</a>
									<a href="" class="social-info">
										<span class="lnr lnr-move"></span>
										<p class="hover-text">view more</p>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
          </div>
          <!-- /.container-fluid -->

    </div>
</div>

@stop
