@extends('layouts.admin')
@section('content')
    <div class="container">
        <div class="row">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="https://www.ptu161.brest.by/zoh/images/eda.jpg" class="d-block w-100" alt="питание">
                    </div>
                    <div class="carousel-item">
                        <img src="https://cdn.lifehacker.ru/wp-content/uploads/2018/03/cover-2_1520669590-1140x570.jpg"
                             class="d-block w-100" alt="тренировки">
                    </div>
                    <div class="carousel-item">
                        <img src="https://f.mixsport.pro/article/218/W8inJ.jpeg" class="d-block w-100" alt="сон">
                    </div>
                    <div class="carousel-item">
                        <img src="https://fainaidea.com/wp-content/uploads/2019/07/Setevye-BADy-protiv-aptechnykh.jpg"
                             class="d-block w-100" alt="бад">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
@endsection
