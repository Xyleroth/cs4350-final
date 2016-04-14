@extends('master')

@section('title', 'The Black Cabinet')

@section('nav')
    @parent

    @include('nav')

@endsection

@section('content')
    <div id="mainCarousel" class="carousel slide" data-ride="carousel">

        <ol class="carousel-indicators">
            <li data-target="#mainCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#mainCarousel" data-slide-to="1"></li>
            <li data-target="#mainCarousel" data-slide-to="2"></li>
            <li data-target="#mainCarousel" data-slide-to="3"></li>

        </ol>

        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img class="first-slide" src="img/call_of_duty.png" alt="First slide">
                <div class="container">
                    <div class="carousel-caption text-right">
                        <h1>The Black Cabinet</h1>
                        <p>Check out registered gun dealers and available deals throughout Puerto Rico.</p>
                        <p><a class="btn btn-lg btn-primary" href="#" role="button">Look Up Dealers</a></p>
                    </div>
                </div>
            </div>
            <div class="item">
                <img class="second-slide" src="img/uncle-sam.png" alt="Second slide">
                <div class="container">
                    <div class="carousel-caption text-xs-left">
                        <h1>President Jose Wants You!</h1>
                        <p>Join the revolution! Make your pledge now!</p>
                        <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
                    </div>
                </div>
            </div>



            <a class="left carousel-control" href="#mainCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#mainCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>

        </div>



    </div>

   <div class="container-fluid">

       <div class="row main_call">

        <div class="col-sm-4">




        </div>

       </div>

   </div>


@endsection


@section('footer')
    @parent
    @include('footer)

@endsection