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
    </style>

    <style>
    @import url('https://fonts.googleapis.com/css2?family=Tajawal:wght@200;300;400;500;700;800;900&display=swap');
    </style>
    
<div id="page">	
<header id="fh5co-header" class="fh5co-cover js-fullheight" role="banner" style="background-image:url(images/cover_bg_3.jpg);" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center">
                <div class="display-t js-fullheight">
                    <div class="display-tc js-fullheight animate-box" data-animate-effect="fadeIn">
                        <div class="profile-thumb" style="background: url({{ asset('profile/images/myphoto.jpeg') }});"></div>
                        <h1><span>Mohamed Algendy</span></h1>
                        <h3><span>Fullstack Developer / Software Engineer</span></h3>
                        <p>
                            <ul class="fh5co-social-icons">
                                <li><a href="#"><i class="icon-twitter2"></i></a></li>
                                <li><a href="#"><i class="icon-facebook2"></i></a></li>
                                <li><a href="#"><i class="icon-linkedin2"></i></a></li>
                                <li><a href="#"><i class="icon-instagram2"></i></a></li>
                            </ul>
                        </p>
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




