@extends('layouts.admin_app')

@section('content')
@if (Auth::user())
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



<!-- Текущие задачи -->
@if (count($goods) > 0)
<div class="panel panel-default">
    <div class="panel-heading">
        Все товары в категории {{$category_id->name}}
    </div>

    <div class="panel-body">
        <table class="table table-striped task-table">

            <!-- Заголовок таблицы -->
            <thead>
            <th>Товары</th>
            <th>&nbsp;</th>
            </thead>

            <!-- Тело таблицы -->
            <tbody>
                @foreach ($goods as $good)
                <tr>
                    <!-- Имя задачи -->
                    <td class="table-text">
                        <div>{{ $good->name }}</div>
                    </td>
                    <td>
                        <form action="{{ url('admin/category/'.$category_id->id.'/'.$good->id) }}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}

                            <button type="submit" class="btn btn-danger">
                                <i class="fa fa-btn fa-trash"></i>Удалить
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endif
@endif
@endsection


