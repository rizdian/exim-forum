@extends('master.master')

@section('title', 'Page Title')

@section('css')
    <style>
        .card-master {
            width: 100%;
            padding: 10px;
            border-radius: 1px;
            box-shadow: 0px 0px 0px 1px rgba(0,0,0,0.2);
        }

        .card-submaster {
            width: 100%;
            padding: 10px;
            border-radius: 1px;
            box-shadow: 0px 0px 0px 1px rgba(0,0,0,0.2);
        }

        .card-blockquote {
        	border-left: 5px solid #1998ed;
        	padding: 10px;
        	font-weight: bold;
        }

        .item {
            margin-bottom: 10px;
        }
        * {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }

        .item > img {
            width: 80px;
            height: 80px;
            border: 2px solid transparent;
            border-radius: 50%;
        }

        .item > .message {
            margin-left: 85px;
            margin-top: -80px;
        }
        p {
            margin: 0 0 10px;
        }
        * {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }

        .btn-master > .btn {
            margin-top: 8%;
            margin-left: 5px;
        }

        .card-blockquote p, .card-submaster p {
        	margin-bottom: 0px;
        }
    </style> 
@endsection

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
					<h4 class="classic-title hidden"><span>Margo Buttons System</span></h4>

					<!-- Accnent Color Buttons -->
                    <div class="row">
                        <div class="col-lg-12">
                            <ul>
                                <li>                                
                                    <div class="card-master">
                                        <div class="row">
                                            <div class="col-lg-8 item">                                                
                                                <img     src="https://www.w3schools.com/howto/img_avatar2.png" 
                                                        class="img-thumbnail" 
                                                        alt="Avatar">
                                                <p class="message">
                                                    <a href="#" class="name">
                                                        Berita dan Politik
                                                    </a><br>
                                                    Forum diskusi dan berbagi berita dari dalam maupun luar negeri.
                                                    Mulai dari ideologi, politik, ekonomi, sosial dan budaya.
                                                </p>
                                            </div>
                                            {{-- <div class="col-lg-4 btn-master">
                                                <a class="btn btn-default pull-right" href="#" role="button">Forum Chat</a>
                                                <a class="btn btn-default pull-right" href="#" role="button">Subscribe</a>
                                            </div> --}}
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <ul class="hidden-xs">
                                <li>
                                    <div class="card-master card-blockquote">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <p>
                                                    Subforum: Berita dan Politik
                                                </p>
                                            </div>
                                            <div class="col-lg-6">
                                            	<div class="row">
                                            		<div class="col-lg-5">
		                                                <p>
		                                                    Stats
		                                                </p>
                                            		</div>
                                            		<div class="col-lg-7">
                                            			<p>
		                                                    Last Post
		                                                </p>
                                            		</div>
                                            	</div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <ul>
                                <li>
                                    <div class="card-submaster">
                                        <div class="row">
                                            <div class="col-lg-6 item">
                                                <img     src="https://www.w3schools.com/howto/img_avatar2.png" 
                                                        class="img-thumbnail" 
                                                        alt="Avatar">
                                                <p class="message">
                                                    <a href="#" class="name">
                                                        Berita Dunia Hiburan
                                                    </a><br>
                                                    Mau makin dekat dengan kehidupan selebritis? Ayo diskusikan berbagai
                                                    update dari dunia entertaiment!
                                                </p>
                                            </div>
                                            <div class="col-lg-6">
                                            	<div class="row">
                                            		<div class="col-lg-5">
		                                                <p>Replies: <b>3</b></p>
		                                                <p>Views: <b>128</b></p>
                                            		</div>
                                            		<div class="col-lg-7">
                                            			<p class="message">
		                                                    <a href="#" class="name">
		                                                        Merah Menyala, Khloe Kardashian Seleb Top Ten
		                                                    </a><br>
		                                                    Today 14:12 <i>by:</i>pophonorface
		                                                </p>
                                            		</div>
                                            	</div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <ul>
                                <li>
                                    <div class="card-submaster">
                                        <div class="row">
                                            <div class="col-lg-6 item">
                                                <img     src="https://www.w3schools.com/howto/img_avatar2.png" 
                                                        class="img-thumbnail" 
                                                        alt="Avatar">
                                                <p class="message">
                                                    <a href="#" class="name">
                                                        Beritaga.id
                                                    </a><br>
                                                    Temukan pengalaman baru dalam membaca berita dan berbagai info unik lainnya
                                                </p>
                                            </div>
                                            <div class="col-lg-6">
                                            	<div class="row">
                                            		<div class="col-lg-5">
		                                                <p>Replies: <b>40</b></p>
		                                                <p>Views: <b>1,587</b></p>
                                            		</div>
                                            		<div class="col-lg-7">
                                            			<p class="message">
		                                                    <a href="#" class="name">
		                                                        Jokowi bertemu SBY, lalu apa?
		                                                    </a><br>
		                                                    Today 14:32 <i>by:</i>batzyndrome
		                                                </p>
                                            		</div>
                                            	</div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <ul>
                                <li>
                                    <div class="card-submaster">
                                        <div class="row">
                                            <div class="col-lg-6 item">
                                                <img     src="https://www.w3schools.com/howto/img_avatar2.png" 
                                                        class="img-thumbnail" 
                                                        alt="Avatar">
                                                <p class="message">
                                                    <a href="#" class="name">
                                                        Berita Luar Negeri
                                                    </a><br>
                                                    Tempat diskusi mengenai berita luar negeri.
                                                </p>
                                            </div>
                                            <div class="col-lg-6">
                                            	<div class="row">
                                            		<div class="col-lg-5">
		                                                <p>Replies: <b>9,651</b></p>
		                                                <p>Views: <b>254,231</b></p>
                                            		</div>
                                            		<div class="col-lg-7">
                                            			<p class="message">
		                                                    <a href="#" class="name">
		                                                        All About Konflik Timur Tengah dan Afrika Utara menghadapi Terorisme
		                                                        part 3 - part 2
		                                                    </a><br>
		                                                    Today 14:27 <i>by:</i>budicute2nd
		                                                </p>
                                            		</div>
                                            	</div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

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
								<a href="#">Pembiayaan</a>
							</li>
							<li>
								<a href="#">Regulasi</a>
							</li>
							<li>
								<a href="#">Konsultasi</a>
							</li>
							
						</ul>
					</div>

					<!-- Popular Posts widget -->
					{{-- <div class="widget widget-popular-posts">
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
					</div> --}}

					<!-- Tags Widget -->
					{{-- <div class="widget widget-tags">
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
 --}}
				</div>
				<!--End sidebar-->


	        </div>
	    </div>
    </div>
@endsection