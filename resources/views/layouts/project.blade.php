@extends('layouts.app')
@section('content')
<section class="text-center">
    <div class="container">
        <div class="row">
            <div class="col-sm-10 col-md-8">
                <h1>@yield('page-title')</h1>
            </div>
        </div>
    </div>
</section>
<section class="switchable">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-md-7">
                <h2>Abstract<br></h2>
                <p class="lead"> @yield('first-block') </p>
                <p class="lead"> @yield('second-block') </p>
            </div>
            <div class="col-sm-4 col-md-3">
                <div class="text-block">
                    <h5>Price</h5>
                    <h4>Rs. 12,500/-<br></h4>
                    <a class="btn btn--primary type--uppercase" href=""> <span class="btn__text">
                        BUY NOW
                    </span> </a>
                </div>
                <div class="text-block">
                    <h5>Keywords</h5>
                    <h4>@yield('keywords')<br></h4>
                </div>
                <div class="text-block">
                    <h5>Contact</h5>
                    <h4>+91 9660 237 535<br></h4>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- <section>
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-3">
                <div class="feature feature-6"> <i class="icon icon--sm icon-Post-Mail2 color--primary"></i>
                    <h5>Collect Leads</h5>
                    <p> Stack comes with integration for Mail Chimp and Campaign Monitor forms - ideal for launching modern marketing campaigns </p>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="feature feature-6"> <i class="icon icon--sm icon-Preview color--primary"></i>
                    <h5>Showcase Products</h5>
                    <p> Give your products the presentation they deserve with Stack's uniquely presents e-commerce styling — perfectly suited to tech products </p>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="feature feature-6"> <i class="icon icon--sm icon-Pen color--primary"></i>
                    <h5>Engage Users</h5>
                    <p> Taking inspiration from high-profile tech companies, Stack's diverse blog styles make your written-content shine and your user's smile </p>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="feature feature-6"> <i class="icon icon--sm icon-Road-3 color--primary"></i>
                    <h5>Launch Quickly</h5>
                    <p> Forget handling cumbersome mockups. Get building immediately in the comfort of your browser. Our customers love the ability to launch beautiful sites quickly. </p>
                </div>
            </div>
        </div>
    </div>
</section> -->
<section class="space--xs imagebg" data-overlay="4">
<div class="background-image-holder"> <img alt="background" src="/img/cowork-5.jpg"> </div>
<div class="container">
    <div class="row">
        <div class="cta cta--horizontal text-center-xs">
            <div class="col-sm-4">
                <h4>Let's get you started</h4>
            </div>
            <div class="col-sm-5">
                <p class="lead"> Buy this amazing project today </p>
            </div>
            <div class="col-sm-3 text-right text-center-xs">
                <a class="btn btn--primary type--uppercase" href="#"> <span class="btn__text">
            BUY PROJECT
        </span> </a>
            </div>
        </div>
    </div>
</div>
</section>
@endsection