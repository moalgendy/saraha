@extends('layouts.app')

@section('content')



<script>
    $(document).ready(function() {
	$("#emojionearea3").emojioneArea({
  	pickerPosition: "left",
    tonesStyle: "bullet"
  });
	$("#emojionearea2").emojioneArea({
  	pickerPosition: "bottom",
    tonesStyle: "radio"
  });
	$("#emojionearea3").emojioneArea({
  	pickerPosition: "left",
  	filtersPosition: "bottom",
    tonesStyle: "square"
  });
	$("#emojionearea1").emojioneArea({
  	pickerPosition: "bottom",
  	filtersPosition: "bottom",
    tonesStyle: "bullet"
  });
	$("#emojionearea5").emojioneArea({
  	pickerPosition: "top",
  	filtersPosition: "bottom",
    tones: false,
    autocomplete: false,
    inline: true,
    hidePickerOnBlur: false
  });
});
</script>

{{-- <script src="{{ asset('profile/script.js') }}"></script>  --}}
{{-- <link rel="stylesheet" href="{{ asset('profile/style.css') }}"> --}}


{{-- <div class="fh5co-loader"></div> --}}
	<style>
        .py-4{
            padding-top: 0rem!important;
        }
        #fh5co-header, .fh5co-cover{
            margin-bottom: 5rem;
        }
        .fh5co-heading h2{
            margin-top: 2rem;
        }


        .row:after, .row:before {
    content: " ";
    display: table;
    clear: both;
  }
  .span6 {
    float: left;
    width: 48%;
    padding: 1%;
  }
  .emojionearea-editor:not(.inline) {
    min-height: 8em!important;
  }
    </style>
<div id="page">	
<header id="fh5co-header" class="fh5co-cover js-fullheight" role="banner" style="background-image:url(images/cover_bg_3.jpg);" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center">
                <div class="display-t js-fullheight">
                    <div class="display-tc js-fullheight animate-box" data-animate-effect="fadeIn">
                        <div class="profile-thumb" style="background: url({{ asset('storage/images/' . $user->profile_photo_path) }});"></div>
                        <h1><span>{{ $user->name }}</span></h1>
                        <h3><span> {{ $user->detail1 }} / {{ $user->detail2 }} </span></h3>
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



<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                @if (\Illuminate\support\Facades\Auth::id() == $user->id)
                    <div class="card-header">You Cannot send to yourself</div>

                    @else

                    <div class="card-header">{{ __('Message to :') }} {{ $user->name }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('message.store' , encrypt($user->id)) }}">
                        @csrf
                        <div class="form-group">
                        <textarea id="emojionearea1" class="form-control" cols="30" rows="10" name="text" placeholder="اكتب لصديقك ما تريد هنا" required=""></textarea>
                        </div>
                        <button class="btn btn-primary">إرسال</button>
                        </form>
                </div>

                @endif

            



            </div>
        </div>
    </div>
</div>



<div id="fh5co-about" class="animate-box">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                <h2>About Me</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <ul class="info">
                    <li><span class="first-block">Full Name:</span><span class="second-block">Mohamed Algendy</span></li>
                    <li><span class="first-block">Phone:</span><span class="second-block">01017678379</span></li>
                    <li><span class="first-block">Email:</span><span class="second-block">mhmadalgendy@gmail.com</span></li>
                    <li><span class="first-block">Website:</span><span class="second-block">www.moalgendy.com</span></li>
                    <li><span class="first-block">Address:</span><span class="second-block">198 West 21th Street, Suite 721 New York NY 10016</span></li>
                </ul>
            </div>
            <div class="col-md-8">
                <h2>Hello There!</h2>
                <p>There live the blind texts far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in bookmarksgrove there live the blind texts far from the countries.</p>
                <p>Far far away, behind the word mountains, Quos quia provident consequuntur culpa facere ratione maxime commodi voluptates id repellat velit eaque aspernatur expedita. Possimus itaque adipisci there live the blind texts from the countries Vokalia and Consonantia, there live the blind texts. Quos quia provident consequuntur culpa facere ratione maxime commodi voluptates id repellat velit eaque aspernatur expedita. Possimus itaque adipisci.</p>
                <p>
                    <ul class="fh5co-social-icons">
                        <li><a href="#"><i class="icon-twitter2"></i></a></li>
                        <li><a href="#"><i class="icon-facebook3"></i></a></li>
                        <li><a href="#"><i class="icon-linkedin2"></i></a></li>
                        <li><a href="#"><i class="icon-instagram2"></i></a></li>
                    </ul>
                </p>
            </div>
        </div>
    </div>
</div>

<div id="fh5co-resume" class="fh5co-bg-color">
    <div class="container">
        <div class="row animate-box">
            <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                <h2>My Resume</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-md-offset-0">
                <ul class="timeline">
                    <li class="timeline-heading text-center animate-box">
                        <div><h3>Work Experience</h3></div>
                    </li>
                    <li class="animate-box timeline-unverted">
                        <div class="timeline-badge"><i class="icon-suitcase"></i></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h3 class="timeline-title">Senior Developer</h3>
                                <span class="company">Company Name - 2016 - Current</span>
                            </div>
                            <div class="timeline-body">
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                            </div>
                        </div>
                    </li>
                    <li class="timeline-inverted animate-box">
                        <div class="timeline-badge"><i class="icon-suitcase"></i></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h3 class="timeline-title">Junior Developer</h3>
                                <span class="company">Company Name - 2013 - 2015</span>
                            </div>
                            <div class="timeline-body">
                                <p>Far far away, behind the word mountains, they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                            </div>
                        </div>
                    </li>
                    <li class="animate-box timeline-unverted">
                        <div class="timeline-badge"><i class="icon-suitcase"></i></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h3 class="timeline-title">UI/UX Designer</h3>
                                <span class="company">Company Name - 2010 - 2012</span>
                            </div>
                            <div class="timeline-body">
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                            </div>
                        </div>
                    </li>

                    <br>
                    <li class="timeline-heading text-center animate-box">
                        <div><h3>Education</h3></div>
                    </li>
                    <li class="timeline-inverted animate-box">
                        <div class="timeline-badge"><i class="icon-graduation-cap"></i></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h3 class="timeline-title">Masters Degree</h3>
                                <span class="company">University Name - 2007 - 2009</span>
                            </div>
                            <div class="timeline-body">
                                <p>Far far away, behind the word mountains, they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                            </div>
                        </div>
                    </li>
                    <li class="animate-box timeline-unverted">
                        <div class="timeline-badge"><i class="icon-graduation-cap"></i></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h3 class="timeline-title">Bachelors Degree</h3>
                                <span class="company">University Name - 2002 - 2006</span>
                            </div>
                            <div class="timeline-body">
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                            </div>
                        </div>
                    </li>
                    <li class="timeline-inverted animate-box">
                        <div class="timeline-badge"><i class="icon-graduation-cap"></i></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h3 class="timeline-title">Diploma Course</h3>
                                <span class="company">College Name - 1999 - 2001</span>
                            </div>
                            <div class="timeline-body">
                                <p>Far far away, behind the word mountains, they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                            </div>
                        </div>
                    </li>
                    <li class="animate-box timeline-unverted">
                        <div class="timeline-badge"><i class="icon-graduation-cap"></i></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h3 class="timeline-title">Graduation</h3>
                                <span class="company">College Name - 1994 - 1998</span>
                            </div>
                            <div class="timeline-body">
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>


@endsection
