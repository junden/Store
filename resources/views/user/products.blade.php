@extends('layouts.user_app')

@section('user_content')
<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-9 col-md-12">
					<div class="features_items">
						<h2 class="title text-center">Новые товары</h2>
                                                @foreach($goods as $good)
                                                <div class="col-sm-6 col-md-3  ">
                                                    
							<div class="product-image-wrapper ">
                                                            
                                                            <div class="single-products ">
                                                                
										<div class="productinfo text-center ">
                                                                                    
											<img src="{{$good->image}}" alt="" />
											<h2>{{$good->price}}</h2>
											<p>{{$good->name}}</p>
                                                                                        <a href="{{route('good.addToCart',['id'=>$good->id])}}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Добавить в корзину</a>
                                                                                        
										</div>
                                                                
								</div>
                                                            
							</div>
                                                     
						</div>
                                                @endforeach
					</div>
					
				</div>
                                    
			</div>
                     
		</div>
</section>
	
@endsection
