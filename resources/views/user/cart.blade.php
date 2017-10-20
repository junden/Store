@extends('layouts.user_app')

@section('user_content')

<section id="cart_items">
   
    <div class="container">
         
        <div class="breadcrumbs">
           
            <ol class="breadcrumb">
                
                <li><a href="{{route('main.user_app')}}">Домой</a></li>
                <li class="active">Корзина</li>
            </ol>
        </div>
         @if(Session::has('cart'))
        <div class="table-responsive cart_info">

            <table class="table table-condensed">
                <thead>
                    <tr class="cart_menu">
                        <td class="name">Товары</td>
                        <td class="price">Цена</td>
                        <td class="total">Всего</td>
                        <td></td>
                    </tr>
                </thead>

                <tbody>
                    @foreach($good as $goods)
                    <tr>
                        <td class="cart_info">
                            <p>{{$goods['item']['title']}}</p>
                        </td>
                        <td class="cart_price">
                            <p>{{$goods['price']}}</p>
                        </td>
                        <td class="cart_total">
                            <p class="cart_total_price">{{$totalPrice}}</p>
                        </td>
                        <td class="cart_delete">
                            <a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>
                        </td>
                @endforeach

                </tr>

                </tbody>

            </table>

        </div>
    </div>

</section>

@else

        

@endif
<!--/#cart_items-->
@endsection
