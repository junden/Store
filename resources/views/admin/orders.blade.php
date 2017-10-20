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
@if (count($orders) > 0)
<div class="panel panel-default">
    <div class="panel-heading">
        Все заказы
    </div>

    <div class="panel-body">
        <table class="table table-striped task-table">

            <!-- Заголовок таблицы -->
            <thead>
            <th>Имя</th>
            <th>Адресс</th>
            <th>Телефон</th>
            <th>Комментарий</th>
            </thead>

            <!-- Тело таблицы -->
            <tbody>
                @foreach ($orders as $order)
                <tr>
                    <!-- Имя задачи -->
                    <td class="table-text">
                        <div>{{ $order->name }}</div>
                    </td>
                    <td class="table-text">
                        <div>{{ $order->adress }}</div>
                    </td>
                    <td class="table-text">
                        <div>{{ $order->phone }}</div>
                    </td>
                    <td class="table-text">
                        <div>{{ $order->comment }}</div>
                    </td>
                    <td>
                        <form action="{{ url('admin/order/'.$order->id) }}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}

                            <button type="submit" class="btn btn-danger">
                                <i class="fa fa-btn fa-trash"></i>Удалить
                            </button>
                        </form>
                    </td>
                    <td>
                        <a href="{{url('admin/orders/'.$order->id)}}" class="btn btn-warning">Подробно</a>
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


