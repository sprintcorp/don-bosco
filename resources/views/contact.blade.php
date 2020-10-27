@extends('layouts.public')
@section('content')

    <!-- Being Page Title -->
    <div class="container">
        <div class="page-title clearfix">
            <div class="row">
                <div class="col-md-12">
                    <h6><a href="index.html">Home</a></h6>
                    <h6><span class="page-active">Contact</span></h6>
                </div>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="row">

           @if(session('success_message'))
                        <div class="alert alert-success">
                            {{session('success_message')}}
                        </div>
                    @endif
            
            <div class="col-md-12">
                <div class="contact-page-content">
                    <div class="contact-heading">
                        <h3>Our Contact Details</h3>
                        <p>Someone finds it difficult to understand your creative idea? There is a better visualisation. Share your views with me...</p>
                    </div>
                    <form method="post" action="{{ route('contact.store') }}">
                    @csrf
                        <div class="contact-form clearfix">
                        <p class="full-row">
                            <span class="contact-label">
                                <label for="name-id">First Name:</label>
                                <span class="small-text">Put your name here</span>
                            </span>
                            <input type="text" id="name-id" name="firstname">
                        </p>
                        <p class="full-row"> 
                            <span class="contact-label">
                                <label for="surname-id">Last Name:</label>
                                <span class="small-text">Put your surname here</span>
                            </span>
                            <input type="text" id="surname-id" name="lastname">
                        </p>
                        <p class="full-row">
                            <span class="contact-label">
                                <label for="email-id">E-mail:</label>
                                <span class="small-text">Type email address</span>
                            </span>
                            <input type="text" id="email-id" name="email">
                        </p>
                        <p class="full-row">
                            <span class="contact-label">
                                <label for="message">Message:</label>
                                <span class="small-text">Type email address</span>
                            </span>
                            <textarea name="message" id="message" rows="6"></textarea>
                        </p>
                        <p class="full-row">
                            <input class="mainBtn" type="submit" value="Send Message">
                        </p>
                    </div>
                    </form>
                </div>
            </div> <!-- /.col-md-7 -->

        </div> <!-- /.row -->
    </div> <!-- /.container -->
@endsection