@extends('layouts.app')
@section('title', 'Contact - Z8Labs')
@section('content')
<section class="text-center">
    <div class="container">
        <div class="row">
            <div class="col-sm-10 col-md-8">
                <h1>Contact</h1>
            </div>
        </div>
    </div>
</section>
<section class="switchable">
    <div class="container">
        <div class="row">
            <div class="col-sm-5"> <img alt="Image" class="border--round box-shadow-wide" src="img/inner-2.jpg"> </div>
            <div class="col-sm-6">
                <div class="row switchable__text">
                    <p class="lead"> E: <a href="">hi@z8labs.com</a><br> P: +91 9660 237 535</p>
                    <p class="lead"> Give us a call or drop by anytime, we endeavor to answer all enquiries within 48 hours on business days. </p>
                    <p class="lead"> We are open from 9am — 5pm week days. </p>
                    <hr class="short">
                    <div class="row">
                        <form class="form-email" data-success="Thanks for your enquiry, we'll be in touch shortly." data-error="Please fill in all fields correctly.">
                            <div class="col-sm-6"> <label>Your Name:</label> <input name="Name" class="validate-required" type="text"> </div>
                            <div class="col-sm-6"> <label>Email Address:</label> <input name="Email" class="validate-required validate-email" type="email"> </div>
                            <div class="col-sm-12"> <label>Message:</label> <textarea rows="4" name="Message" class="validate-required"></textarea> </div>
                            <div class="col-sm-5 col-md-4"> <button type="submit" class="btn btn--primary type--uppercase">Send Enquiry</button> </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection