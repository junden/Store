@extends('layouts.user_app')

@section('user_content')
<div class="banner banner10">
    <div class="container">
        <h2>О Нас</h2>
    </div>
</div>
<!-- //banner -->   
<!-- breadcrumbs -->
<div class="breadcrumb_dress">
    <div class="container">
        <ul>
            <li><a href="index.blade.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Домой</a> <i>/</i></li>
            <li>О Нас</li>
        </ul>
    </div>
</div>
<!-- //breadcrumbs --> 
<!-- about -->
<div class="about">
    <div class="container">	
        <div class="w3ls_about_grids">
            <div class="col-md-6 w3ls_about_grid_left">
                <p>Мы предлагаем широкий ассортимент электроники, бытовой техники.</p>
                <div class="col-xs-2 w3ls_about_grid_left1">
                    <span class="glyphicon glyphicon-new-window" aria-hidden="true"></span>
                </div>
                <div class="col-xs-10 w3ls_about_grid_left2">
                    <p>Наша задача состоит не только в том, чтобы просто продать нужный товар, но и в том, чтобы информировать и просвещать покупателя.Наш сайт в среднем посещает более 20 000 уникальных посетителей в день, и это число продолжает расти. Не останавливаясь на достигнутом, мы продолжаем наращивать обороты, стремясь стать лучшим в стране интернет-супермаркетом — местом, где вы сможете выбрать и приобрести любые товар — осознанно, недорого и удобно.</p>
                </div>
                <div class="clearfix"> </div>
                <div class="col-xs-2 w3ls_about_grid_left1">
                    <span class="glyphicon glyphicon-flash" aria-hidden="true"></span>
                </div>
                <div class="col-xs-10 w3ls_about_grid_left2">
                    <p>Все товары в нашем магазине сопровождаются гарантией. Подтверждением гарантии служит фирменный гарантийный талон.

                        Мы дорожим своей репутацией, и поэтому сознательно не продаём неофициальный или нелегальный товар без гарантии и сервисной поддержки в Украине. В конечном итоге покупка продуктов сомнительного происхождения доставляет головную боль и для продавца, и для покупателя.</p>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="col-md-6 w3ls_about_grid_right">
                <img src="images/clientFunny.jpg" alt=" " class="img-responsive" />
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<!-- //about --> 
<!-- newsletter -->
<div class="newsletter">
    <div class="container">
        <div class="col-md-6 w3agile_newsletter_left">
            <h3>Новости</h3>

        </div>
        <div class="col-md-6 w3agile_newsletter_right">
            <form action="#" method="post">
                <input type="email" name="Email" placeholder="Email" required="">
                <input type="submit" value="" />
            </form>
        </div>
        <div class="clearfix"> </div>
    </div>
</div>
@endsection
