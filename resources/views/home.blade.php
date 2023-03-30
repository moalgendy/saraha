@extends('layouts.app')

@section('content')
{{-- <div class="fh5co-loader"></div> --}}
	<style>
        .py-4{
            padding-top: 0rem!important;
        }
        .fh5co-heading h2{
            margin-top: 2rem;
        }



        /* .container{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
        } */
        .copy-text{
            position: relative;
            margin-bottom: 100px;
            padding: 10px;
            background: #fff;
            border: 1px solid #ddd;
            border-radius:10px;
            display: flex;
        }
        .copy-text input.text{
            padding: 10px;
            font-size: 18px;
            color: #555;
            border: none;
            outline: none;
        }
        .copy-text button{
            padding:  8px 12px ;
            background: #5784f5;
            color: #fff;
            font-size: 18px;
            border: none;
            outline: none;
            border-radius: 10px;
            cursor: pointer;
        }
        .copy-text button:active{
            background: #809ce2;
        }
        .copy-text button::before{
            content: "Copied";
            position: absolute;
            top: -55px;
            right: 0px;
            background: #5c81dc;
            padding: 8px 10px;
            border-radius: 20px;
            font-size: 15px;
            display: none;
        }
        .copy-text button::after{
            content: "";
            position: absolute;
            top: -20px;
            right: 25px;
            width: 10px;
            height: 10px;
            background: #5c81dc;
            transform: rotate(45deg);
            display: none;
        }
        .copy-text.active button::before,
        .copy-text.active button::after{
            display: block;
        }
        
    </style>


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        
    @import url('https://fonts.googleapis.com/css2?family=Tajawal:wght@200;300;400;500;700;800;900&display=swap');
    </style>
    
<div id="page">	
<header id="fh5co-header" class="fh5co-cover js-fullheight" role="banner" style="background-image:url(images/cover_bg_3.jpg);" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">


                    @if (session()->has('success'))
                        <div style="margin-top: 10px;" class="alert alert-success">{{ session()->get('success') }}</div>
                    @endif


            <div class="col-md-8 col-md-offset-2 text-center">
                <div class="display-t js-fullheight">
                    <div class="display-tc js-fullheight animate-box" data-animate-effect="fadeIn">
                        <div class="profile-thumb"
                        style="background: url({{ asset('storage/images/' . Auth::user()->profile_photo_path) }});"></div>
                        <h1><span>{{ Auth::user()->name }}</span></h1>
                        <h3><span> {{ Auth::user()->detail1 }} / {{ Auth::user()->detail2 }} </span></h3>
                        <p>
                            <ul class="fh5co-social-icons">
                                <li><a href="#"><i class="icon-twitter2"></i></a></li>
                                <li><a href="#"><i class="icon-facebook2"></i></a></li>
                                <li><a href="#"><i class="icon-linkedin2"></i></a></li>
                                <li><a href="#"><i class="icon-instagram2"></i></a></li>
                            </ul>
                        </p>
                        {{-- <div class="container"> --}}
                        <center>
                            <div style="width: 350px" class="copy-text">
                                <input style="width: 350px" type="text" class="text" value="{{'http://127.0.0.1:8000/send/' . encrypt(Auth::user()->id) }}">
                                <button>
                                    <i class="fas fa-clone"></i>
                                </button>
                            </div>
                        </center>
                        {{-- </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>


<div class="row">
    <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
        <h2>{{ __('Message To You') }}</h2>
    </div>
</div>
<div class="container" style="margin-top: 3rem;">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                
                    <div class="card-header">{{ __('All Messages ') }} ->
                        <button  class="btn btn-primary" style="cursor: text;">{{ $message }}</button> 
                        
                             </div>

                <div class="card-body" style=" font-family: Tajawal,sans-serif">
                    
                    @forelse ($messages as $message)
                        <td>{{ $message->text }}</td>        
                            <P style="margin-bottom: 0; margin-top:3px;"><td>{{ \Carbon\Carbon::make($message->created_at)->diffForHumans() }}</td></P>
                        <hr>
                    @empty
                        <p>No message</p>

                    @endforelse

                </div>
                {{ $messages->links() }}
            </div>
        </div>
    </div>
</div>

@endsection




