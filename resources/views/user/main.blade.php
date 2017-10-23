@extends('layouts.user_app')

@section('user_content')
<section id="slider"><!--slider-->
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div id="slider-carousel" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
							<li data-target="#slider-carousel" data-slide-to="1"></li>
							<li data-target="#slider-carousel" data-slide-to="2"></li>
						</ol>
						
						<div class="carousel-inner">
							<div class="item active">
								<div class="col-sm-6">
									<h1><span>Book</span>SHOP</h1>
									<p> «Это – Ваша библиотека»</p>
								</div>
								<div class="col-sm-6">
                                                                    <img src="images/baner1.jpg" class="girl img-responsive" alt="" />
									
								</div>
							</div>
							<div class="item">
								<div class="col-sm-6">
									<h1><span>Book</span>SHOP</h1>
									
								</div>
								<div class="col-sm-6">
                                                                    <img src="images/baner2.jpg" class="girl img-responsive" alt="" />
								</div>
							</div>
							
<!--							<div class="item">
								<div class="col-sm-6">
									<h1><span>Book</span>SHOP</h1>
									<h2>Бытовая техника от лучших производителей</h2>
									<button type="button" class="btn btn-default get">Подробние</button>
								</div>
								<div class="col-sm-6">
                                                                    <img src="images/bittech.jpg" class="girl img-responsive" alt="" />
								</div>
							</div>-->
							
						</div>
						
						<a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
							<i class="fa fa-angle-left"></i>
						</a>
						<a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
							<i class="fa fa-angle-right"></i>
						</a>
					</div>
					
				</div>
			</div>
		</div>
	</section><!--/slider-->
	
	<section>
		<div class="container">
			<div class="row">
                            <div class="col-sm-3">
					<div class="left-sidebar">
						<h2>Жанры</h2>
                                                 @foreach ($categories as $category)
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a href="{{url($category->id)}}">{{$category->name}}
											<span class="badge pull-right"></span>
										</a>
									</h4>
								</div>
							</div>   
						</div>
                                                 @endforeach<!--/category-products-->
						
						
                                                <!--/price-range-->
						
						<div class="shipping text-center"><!--shipping awards-->
							<img src="images/home/shipping.jpg" alt="" />
						</div><!--/shipping-->
					
					</div>
				</div>     
			</div>
		</div>
	</section>
@endsection
