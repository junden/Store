@extends('layouts.admin_app')

@section('content')
<nav class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="{{ url('/') }}">
                На главную
            </a>
            <a class="navbar-brand" href="{{ url('/admin') }}">
                Админ панель
            </a>
            <a class="navbar-brand" href="{{ url('admin/categories') }}">
                Категории
            </a>
            <a class="navbar-brand" href="{{ url('admin/orders') }}">
                Заказы
            </a>
        </div>
        <div class="collapse navbar-collapse" id="app-navbar-collapse">

            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu" role="menu">
                        <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                    </ul>
                </li>

            </ul>
        </div>
    </div>
</nav>
<div class="container">
    <div class="row">
        <div class="col-md-2">
            <ul class="nav nav-pills nav-stacked" role="tablist">
                <li role="presentation" class="active"><a href="#add_category" aria-controls="add_category" role="tab" data-toggle="tab">Добавить категорию</a></li>
                <li role="presentation"><a href="#add_good" aria-controls="add_good" role="tab" data-toggle="tab">Добавить товар</a></li>
            </ul>
        </div>
        <div class="col-md-10">
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="add_category">
                    <!-- Отображение ошибок проверки ввода -->
                    @include('common.errors')

                    <!-- Форма новой задачи -->
                    <form action="{{ url('admin/category') }}" method="POST" class="form-horizontal">
                        {{ csrf_field() }}

                        <!-- Имя задачи -->
                        <div class="form-group">
                            <label for="category-name" class="col-sm-3 control-label">Категория</label>

                            <div class="col-sm-6">
                                <input type="text" name="name" id="category-name" class="form-control">
                            </div>
                        </div>

                        <!-- Кнопка добавления задачи -->
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-6">
                                <button type="submit" class="btn btn-default">
                                    <i class="fa fa-plus"></i> Добавить категорию
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <div role="tabpanel" class="tab-pane" id="add_good">
                    <!-- Отображение ошибок проверки ввода -->
                    @include('common.errors')

                    <!-- Форма новой задачи -->
                    <form action="{{ url('admin/good') }}" method="POST" class="form-horizontal">
                        {{ csrf_field() }}

                        <!-- Имя задачи -->
                        <div class="form-group">
                            <label for="good-name" class="col-sm-3 control-label">Товар</label>

                            <div class="col-sm-6">
                                <input type="text" name="name" id="good-name" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="good-price" class="col-sm-3 control-label">Цена</label>

                            <div class="col-sm-6">
                                <input type="text" name="price" id="goodprice" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="good-image" class="col-sm-3 control-label">Картинка</label>

                            <div class="col-sm-6">
                                <input type="text" name="image" id="good-image" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="good-description" class="col-sm-3 control-label">Описание</label>

                            <div class="col-sm-6">
                                <textarea class="form-control" rows="3" name="description" id="good-description"></textarea>
                            </div>
                        </div>
                        <div class="form-group">

                            @foreach($categories as $category)
                            <div class="radio">

                                <div class="col-md-6 col-md-offset-3">
                                    <input type="radio" name="category_id"  value="{{$category->id}}">
                                    {{$category->name}}    
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <!-- Кнопка добавления задачи -->
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-6">
                                <button type="submit" class="btn btn-default">
                                    <i class="fa fa-plus"></i> Добавить товар
                                </button>
                            </div>
                        </div>
                    </form> 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
