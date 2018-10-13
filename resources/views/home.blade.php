@extends('layouts.app')

@section('content')
<div class="container" id="app">
    <div class="row front-row card-background-color">
        <div class="col">
            <img src="{{ asset('icons/Yasir-Azman.jpg') }}" class="rounded-circle profile-img-backgroud" alt="Photo" width="40" height="40"> 
            <span class="profile-img-text">Yasir Azman</span>
            <span class="profile-img-msisdn">01711506899</span>
        </div>
        <div class="col">
            <div class="float-right star-holder">
                <span class="rounded-circle fas fa-star font-color-star star-border"></span>
                <span class="star-text-padding">Gold</span>
            </div>
        </div>
    </div>
    <div class="card-total-padding">
        <div class="row card-padding card-background-color">
            <div class="col" style="padding:0;">
                <div class="progress" data-percentage="100">
                    <span class="progress-left">
                        <span class="progress-bar"></span>
                    </span>
                    <span class="progress-right">
                        <span class="progress-bar"></span>
                    </span>
                    <div class="progress-value">
                        <p class="text-inside-circle">
                            420
                            <span>TK</span>
                        </p>
                    </div>
                </div>
                <div class="balance-circle-name">Account Balance</div>
                <div class="balance-valid-circle-name">Valid TIll 31 Oct, 2018</div>
            </div>          
            <div class="col" style="padding:0;">
                <div class="progress" data-percentage="100">
                    <span class="progress-left">
                        <span class="progress-bar"></span>
                    </span>
                    <span class="progress-right">
                        <span class="progress-bar"></span>
                    </span>
                    <div class="progress-value">
                        <p class="text-inside-circle">
                            690
                            <span>MB</span>
                        </p>
                    </div>
                </div>
                <div class="balance-circle-name">Internet Remaining</div>
                <div class="balance-valid-circle-name">Valid TIll 31 Oct, 2018</div>
            </div>
            <div class="col" style="padding:0;">
                <div class="progress" data-percentage="100">
                    <span class="progress-left">
                        <span class="progress-bar"></span>
                    </span>
                    <span class="progress-right">
                        <span class="progress-bar"></span>
                    </span>
                    <div class="progress-value">
                        <p class="text-inside-circle">
                            88
                            <span>MIN</span>
                        </p>
                    </div>
                </div>
                <div class="balance-circle-name">Talktime Remaining</div>
                <div class="balance-valid-circle-name">Valid TIll 31 Oct, 2018</div>
                <div class="view-profile float-right">View Profile ></div>
            </div>
        </div>
    </div>
    <div class="card-total-padding">
        <div class="row card-background-color justify-content-center card-padding">
            <div class="row modified-inside-card">
                <div class="col icon-padding">
                    <img class="center-icon-block" src="{{ asset('icons/flexiplan.png') }}" alt="Cinque Terre" width="48" height="48">
                    <div class="icon-text center-icon-block">FlexiPlan</div>
                </div>
                <div class="col icon-padding">
                    <img class="center-icon-block" src="{{ asset('icons/buy-internet.png') }}" alt="Cinque Terre" width="48" height="48">
                    <div class="icon-text center-icon-block">Buy Internet</div>
                </div>
                <div class="col icon-padding">
                    <img class="center-icon-block" src="{{ asset('icons/buy-talktime.png') }}" alt="Cinque Terre" width="48" height="48"> 
                    <div class="icon-text center-icon-block">Buy Talktime</div>
                </div>
                <div class="col icon-padding">
                    <img class="center-icon-block" src="{{ asset('icons/recharge.png') }}" alt="Cinque Terre" width="48" height="48"> 
                    <div class="icon-text center-icon-block">Recharge</div>
                </div>
            </div>
        </div>
        <div class="row card-background-color justify-content-center card-padding">
            <div class="row modified-inside-card">
                <!--Carousel Wrapper-->
                <div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">
                <!--Indicators-->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-1z" data-slide-to="1"></li>
                    <li data-target="#carousel-example-1z" data-slide-to="2"></li>
                </ol>
                <!--/.Indicators-->
                <!--Slides-->
                <div class="carousel-inner" role="listbox">
                    <!--First slide-->
                    <div class="carousel-item active">
                    <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(130).jpg" alt="First slide">
                    </div>
                    <!--/First slide-->
                    <!--Second slide-->
                    <div class="carousel-item">
                    <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(129).jpg" alt="Second slide">
                    </div>
                    <!--/Second slide-->
                    <!--Third slide-->
                    <div class="carousel-item">
                    <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(70).jpg" alt="Third slide">
                    </div>
                    <!--/Third slide-->
                </div>
                <!--/.Slides-->
                <!--Controls-->
                <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
                <!--/.Controls-->
                </div>
                <!--/.Carousel Wrapper-->
            </div>
        </div>
    </div>
</div>
@endsection
