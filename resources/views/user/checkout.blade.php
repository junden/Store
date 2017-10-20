@extends('layouts.master')

@section('title')
Корзина
@endsection

@section('content')
<div class="row">
    <div class="col-sm-6 col-md-4 col-md-offset-4 col-sm-offset-3">
        <h1>Купить</h1>
        <h4>Стоимость товара: ${{$total}}</h4>
        <form action="{{route('checkout')}}" method="post" id="checkout-form">
            <div class="row">
                <div class="col-xs-12">
                    <div class="form-group">
                        <label for="name">Имя и фимилия</label>
                        <input type="text" id="name" class="form-control" required>
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="form-group">
                        <label for="name">Город</label>
                        <input type="text" id="city" class="form-control" required>
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="form-group">
                        <label for="name">Номер телефона</label>
                        <input type="text" id="numper-phone" class="form-control" required>
                    </div>
                </div>
            </div>
            {{csrf_field()}}
            <button type="submit" class="btn btn-success">Купить</button>
        </form>
    </div>
</div>
@endsection
