@extends('master.master')

@section('title', 'Page Title')

@section('content')
	<!-- Start Content -->
    <div id="content">
	    <div class="container">
		    <div class="row">
		    	<div class="col-lg-12">
					<ol class="breadcrumb">
						<li><a href="#">Beranda</a></li>
					</ol>
				</div>
			</div>
	        <div class="row sidebar-page">

				<!-- Page Content -->
				<div class="col-md-9 page-content">

					<!-- Classic Heading -->
					<h4 class="classic-title"><span>Margo Buttons System</span></h4>

					<!-- Accnent Color Buttons -->
					<p>
					  <a href="#" class="btn-system btn-large">Button</a>
					  <a href="#" class="btn-system btn-medium">Button</a>
					  <a href="#" class="btn-system btn-small">Button</a>
					  <a href="#" class="btn-system btn-mini">Button</a>
					  <a href="#" class="btn-system btn-large"><i class="icon-heart-4"></i> Button</a>
					  <a href="#" class="btn-system btn-medium"><i class="icon-heart-4"></i> Button</a>
					  <a href="#" class="btn-system btn-small"><i class="icon-heart-4"></i> Button</a>
					  <a href="#" class="btn-system btn-mini"><i class="icon-heart-4"></i> Button</a>
					</p>

					<p><strong class="accent-color">You can also use the wite button in Home-slider</strong>.</p>

				</div>
				<!-- End Page Content-->


				<!--Sidebar-->
				<div class="col-md-3 sidebar right-sidebar">

					<!-- Search Widget -->
					<div class="widget widget-search">
						<form action="#">
							<input type="search" placeholder="Enter Keywords..." />
							<button class="search-btn" type="submit"><i class="fa fa-search"></i></button>
						</form>
					</div>

					<!-- Categories Widget -->
					<div class="widget widget-categories">
						<h4>Categories <span class="head-line"></span></h4>
						<ul>
							<li>
								<a href="#">Brandign</a>
							</li>
							<li>
								<a href="#">Design</a>
							</li>
							<li>
								<a href="#">Development</a>
							</li>
							<li>
								<a href="#">Graphic</a>
							</li>
						</ul>
					</div>

					<!-- Popular Posts widget -->
					<div class="widget widget-popular-posts">
						<h4>Popular Post <span class="head-line"></span></h4>
						<ul>
							<li>
								<div class="widget-thumb">
									<a href="#"><img src="images/blog-mini-01.jpg" alt="" /></a>
								</div>
								<div class="widget-content">
									<h5><a href="#">How To Download The Google Fonts Catalog</a></h5>
									<span>Jul 29 2013</span>
								</div>
								<div class="clearfix"></div>
							</li>
							<li>
								<div class="widget-thumb">
									<a href="#"><img src="images/blog-mini-02.jpg" alt="" /></a>
								</div>
								<div class="widget-content">
									<h5><a href="#">How To Download The Google Fonts Catalog</a></h5>
									<span>Jul 29 2013</span>
								</div>
								<div class="clearfix"></div>
							</li>
							<li>
								<div class="widget-thumb">
									<a href="#"><img src="images/blog-mini-03.jpg" alt="" /></a>
								</div>
								<div class="widget-content">
									<h5><a href="#">How To Download The Google Fonts Catalog</a></h5>
									<span>Jul 29 2013</span>
								</div>
								<div class="clearfix"></div>
							</li>
						</ul>
					</div>

					<!-- Tags Widget -->
					<div class="widget widget-tags">
						<h4>Tags <span class="head-line"></span></h4>
						<div class="tagcloud">
							<a href="#">Portfolio</a>
							<a href="#">Theme</a>
							<a href="#">Mobile</a>
							<a href="#">Design</a>
							<a href="#">Wordpress</a>
							<a href="#">Jquery</a>
							<a href="#">CSS</a>
							<a href="#">Modern</a>
							<a href="#">Theme</a>
							<a href="#">Icons</a>
							<a href="#">Google</a>
						</div>
					</div>

				</div>
				<!--End sidebar-->


	        </div>
	    </div>
    </div>
@endsection