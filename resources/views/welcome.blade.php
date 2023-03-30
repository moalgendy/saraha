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
    

    <div id="fh5co-about" class="animate-box">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                    <h2>WELCOME </h2>
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




