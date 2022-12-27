<!doctype html>
<html lang="en">
  <head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Boot Camp</title>
     <!-- add icon link -->
     <link rel = "icon" href = "{{ asset('img/Png-yellow.png') }}" type = "image/x-icon" style="width: 200%;">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
      <!-- Optional JavaScript; choose one of the two! -->
      <!-- Option 1: Bootstrap Bundle with Popper -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  
      <!-- Option 2: Separate Popper and Bootstrap JS -->
      <!--
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
      -->
  

    <!-- fontawesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    {{-- owl carousal --}}
    <link rel="stylesheet" href="{{asset('owlcarousel/dist/assets/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('owlcarousel/dist/assets/owl.theme.default.min.css')}}">
    <!-- main CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
  </head>
  <body>
    @php
        $token = "<script>document.writeln(localStorage.getItem('token'))</script>";
        session('token',  $token);
        $mytoken = session('token');
        echo  $mytoken;
    @endphp
    <main>
        <header style="background-color: #222221" class="">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <nav class="navbar navbar-expand-lg navbar-light navbar-fixed-top">
                        
                            <a class="navbar-brand" href="#" > 
                                <img src="{{asset('img/Png-yellow.png')}}" alt="" class="logo">
                            </a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                    <div id="loginLi">
                                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                            <li class="nav-item me-4">
                                                <a class="nav-link" aria-current="page" href="{{route('registeration.page')}}">Register</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{route('login.page')}}">Login</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="dropdown">
                                        <span id="authUser" style=" color: #fff; font-size: 22px;"></span>
                                        <span id="icon" style="color: #fff; font-size: 22px;"><i class="fa fa-angle-double-down" aria-hidden="true"></i></span>
                                        <div class="dropdown-content">
                                            <a href="{{ route('payment.history.2') }}" style="font-size: 17px;">Purchase History</a>
                                            <form action="#" method="post" id="logoutRoute">
                                                <button style="border: none; text-align:center; font-size: 17px;">Logout</button>
                                            </form>
                                        </div>
                                    </div>
                            </div>
                                    
                        </nav>
                    </div>
                </div>
            </div>
        </header>
        <!-- banner section start -->
        <section class="banner">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <h3 style="margin-top: 2%;">Professional Course for <br> Public Speaking</h3>
                        <h1 class="display-1 fw-bolder main_color">Become a Pro</h1>
                        <p class="h3 mt-3">Bespoke Public Speaking Bootcamp to <br> Transform You from <span class="main_color fw-bold">Average</span> to <span class="main_color fw-bold">Pro</span></p>
                        <ul class="fs-5 mt-5">
                            <li>Build competence in 5 key areas: public speaking,fluency, confidence, body language, power pose</li>
                            <li>Get a certificate to verify your skill and knowledge</li>
                        </ul>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div>
                            <img src="{{asset('img/banner_img.jpg')}}" alt="" class="banner_img">
                        </div>
                        <div>
                            <p class="image_blur"></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <div class="mt-5 text-center">
                                        <a href="#discount" class="banner_btn">Get Discount</a>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <div class="mt-5 text-center">
                                        <a href="#courseProgram" class="banner_btn_2">Program Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <div class="mt-4 mx-4">
                                        <div class="row">
                                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                <p><span class="fw-bold h6">Duration:</p>
                                            </div>
                                            <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-xs-12">
                                                <p><span class="fw-bold h6"></span>16 hours of intensive training <strong>plus</strong> 80 hours of year-long practice</p>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                                
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <div class="mt-4 mx-4">
                                        <div class="row">
                                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                <p><span class="fw-bold h6">Location:</p>
                                            </div>
                                            <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-xs-12">
                                                <p><span class="fw-bold h6"></span>On premises and Outdoor</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sticky_icon">
                <nav>
                    <ul>
                      <li><a><i class="fa fa-phone" aria-hidden="true"></i><span>+88 01617-302010</span></a></li>
                      <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i><span>Facebook</span></a></li>
                      <li><a href="https://www.youtube.com/channel/UCz-y-XgBAzD99Ao7IeeFBJg" target="_blank"><i class="fa fa-youtube"></i><span>Youtube</span></a></li>
                    </ul>
                  </nav>
            </div>
        </section>
        <!-- banner section end -->
        {{-- price details section start --}}
        <section class="mt-5">
            <div class="container">
                {{-- <div class="row">
                    <div class="col-lg-12 col-xl-12 col-md-12 col-sm-12 col-xs-12">
                        <h1 class="fw-bolder">About Bootcamp</h1>
                    </div>
                </div> --}}
                <div class="row">
                    <div class="col-lg-5 col-xl-5 col-md-5 col-sm-12 col-xs-12 mx-auto">
                        <div class="price_details">
                            <h2 class="text-center fw-bolder mb-3">Bootcamp Pro</h2>
                            <div>
                                <img src="{{asset('img/bootcamp_max.jpg')}}" alt="" style="width: 100%; border-radius:5px;">
                            </div>
                            <p class="fs-5 mt-2"><strong>Bootcamp Pro</strong> is a 16-hour intensive training program designed to help you become a confident and effective public speaker. 
                                <br> The workshop includes two days of in-person sessions, 8 program modules, 30 video lessons, a 100-page workbook, 
                                and 20 hands-on activities. <br> Upon completion, you'll receive a certification in public speaking and presentation skills. 
                                <br> This workshop is ideal for those looking to improve their public speaking abilities or make a career change into the world of public speaking.
                            </p>
                            <div class="text-center">
                                <a href="#price_table" class="btn main_background_color fw-bold">Learn More <span class="mt-3"><i class="fa fa-caret-right" aria-hidden="true"></i></span></a>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-5 col-xl-5 col-md-5 col-sm-12 col-xs-12 mx-auto">
                        <div class="price_details">
                            <h2 class="text-center fw-bolder mb-3">Bootcamp Max</h2>
                            <div>
                                <img src="{{asset('img/bootcamp_pro.jpg')}}" alt="" style="width: 100%; border-radius:5px;">
                            </div>
                            <p class="fs-5 mt-2"><strong>Bootcamp Max</strong> is a comprehensive 96-hour training program designed to help you master the art of public speaking. 
                              <br>  Bootcamp Max includes a year-long practice session with 40 sessions covering 40 different themes <strong>PLUS</strong> everything on Bootcamp Pro. 
                               Upon completion, you'll receive a certification in public speaking and presentation skills, as well as a Master Certificate. 
                                <br> This workshop is ideal for those looking to improve their public speaking skills or transition into a career in public speaking.
                            </p>
                            <div class="text-center">
                                <a href="#price_table" class="btn main_background_color fw-bold">Learn More <span class="mt-3"><i class="fa fa-caret-right" aria-hidden="true"></i></span></a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- price details section end --}}
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="mb-4 mt-5">
                            <h1 class="display-1 fw-bolder">This Bootcamp will help you:</h1>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="d-flex justify-content-start">
                            <div style="margin-top: 15px;"><span class="display-3 fw-bolder" style="border: 2px solid #000; padding: 0px 20px;">1</span></div>
                            <div class="mx-3 mt-4">
                                <span class="fs-5">Craft a <strong>powerful message</strong>.</span>
                            </div>
                        </div>
                        <div class="d-flex justify-content-start mt-4">
                            <div style="margin-top: 15px;"><span class="display-3 fw-bolder"  style="border: 2px solid #000; padding: 0px 20px;">2</span></div>
                            <div class="mx-3 mt-4">
                                <span class="fs-5">Build your <strong>influential presence</strong>.</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="d-flex justify-content-start">
                            <div style="margin-top: 15px;"><span class="display-3 fw-bolder" style="border: 2px solid #000; padding: 0px 20px;">3</span></div>
                            <div class="mx-3 mt-4">
                                <span class="fs-5">Create an easy structure.</span>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between mt-4">
                            <div style="margin-top: 15px;"><span class="display-3 fw-bolder" style="border: 2px solid #000; padding: 0px 20px;">4</span></div>
                            <div class="mx-3 mt-3">
                                <span class="fs-5">Calm your nerves and add <strong>power to your voice</strong> </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="d-flex justify-content-between">
                            <div style="margin-top: 15px;"><span class="display-3 fw-bolder" style="border: 2px solid #000; padding: 0px 20px;">5</span></div>
                            <div class="mx-3 mt-3">
                                <span class="fs-5">Use engaging nonverbal delivery methods (body language)</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- gallary section start -->
        <section class="my-5">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12 col-xs-12">
                        <div class="mt-3">
                            <img src="{{asset('img/gallary_1.jpg')}}" alt="" class="gallary_image">
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12 col-xs-12">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <div class="mt-3">
                                    <img src="{{asset('img/gallary_2.png')}}" alt="" class="gallary_image">
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <div class="mt-3">
                                    <img src="{{asset('img/gallary_3.jpg')}}" alt="" class="gallary_image">
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <div class="mt-4">
                                    <img src="{{asset('img/gallary_4.jpg')}}" alt="" class="gallary_image">
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <div class="mt-4">
                                    <img src="{{asset('img/gallary_5.jpg')}}" alt="" class="gallary_image">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="main_background_color text-dark mt-5">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <div>
                                        <p class="h5 px-5 py-4">Study art and become an expert in the art industry! <br> Hurry up! The offer is limited.</p>
                                    </div>
                                </div>
                                <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                    <div class="text-center discount">
                                        <p class="white_background px-2 py-2 text-center fs-4"> <span class="fw-bold">50%</span> <br> off</p>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                    <div class="text-center mt-4">
                                        <p class="fs-3">3:11:46:12</p>
                                    </div>
                                </div> 
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
        </section>
        <!-- gallary section end -->
        <!-- course program collapse section start -->
        <section class="" id="courseProgram">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-xs-12">
                        <div>
                            <span class="display-1 fw-bolder">Bootcamp </span> <span class="display-1 fw-bolder main_color"> Program</span>
                            
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="mt-4">
                            <span class="me-2"><i class="fa fa-circle" aria-hidden="true"></i></span><span class="h5">Intensive training 16 hours</span> <br>
                            <span class="ml-5"><span class="me-2"><i class="fa fa-circle" aria-hidden="true"></i></span> <span class="h5">Practice session 80 hours</span></span> <br>
                            <span class="ml-5"><span class="me-2"><i class="fa fa-circle" aria-hidden="true"></i></span> <span class="h5">Modules 13</span></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="mt-5">
                            <p class="fs-1 fw-bolder">First Day (On Premises)</p>
                        </div>
                        <div class="collapse_1">
                            <button class="collapsible">Module 1: Speaking in public</button>
                            <div class="content">
                                {{-- <p class="fs-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p> --}}
                            </div>
                        </div>
                        <div class="collapse_11">
                            <button class="collapsible">Module 2: Ethics and public speaking</button>
                            <div class="content">
                                {{-- <p class="fs-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p> --}}
                            </div>
                        </div>
                        <div class="collapse_11">
                            <button class="collapsible">Module 3: Selecting a topic and purpose</button>
                            <div class="content">
                                {{-- <p class="fs-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p> --}}
                            </div>
                        </div>
                        <div class="collapse_11">
                            <button class="collapsible">Module 4: Analyzing the audience</button>
                            <div class="content">
                                {{-- <p class="fs-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p> --}}
                            </div>
                        </div>
                        <div class="collapse_11">
                            <button class="collapsible">Module 5: Gathering materials</button>
                            <div class="content">
                                {{-- <p class="fs-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p> --}}
                            </div>
                        </div>
                        <div class="collapse_11">
                            <button class="collapsible">Module 6: Supporting your ideas</button>
                            <div class="content">
                               {{-- <p class="fs-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p> --}}
                            </div>
                        </div>
                        <div class="my-4">
                            <p class="fs-1 fw-bolder">Second Day (Base Camp)</p>
                        </div>
                        <div class="collapse_11">
                            <button class="collapsible">Module 7: Organizing the body of the speech</button>
                            <div class="content">
                                {{-- <p class="fs-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p> --}}
                            </div>
                        </div>
                        <div class="collapse_11">
                            <button class="collapsible">Module 8: Beginning and ending the speech</button>
                            <div class="content">
                                {{-- <p class="fs-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p> --}}
                            </div>
                        </div>
                        <div class="collapse_11">
                            <button class="collapsible">Module 9: Outlining the speech</button>
                            <div class="content">
                                {{-- <p class="fs-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p> --}}
                            </div>
                        </div>
                        <div class="collapse_11">
                            <button class="collapsible">Module 10: Using language</button>
                            <div class="content">
                                {{-- <p class="fs-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p> --}}
                            </div>
                        </div>
                        <div class="collapse_11">
                            <button class="collapsible">Module 11: Delivery</button>
                            <div class="content">
                                {{-- <p class="fs-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p> --}}
                            </div>
                        </div>
                        <div class="collapse_11">
                            <button class="collapsible">Module 12: Using visual aids</button>
                            <div class="content">
                                {{-- <p class="fs-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p> --}}
                            </div>
                        </div>
                        <div class="collapse_11">
                            <button class="collapsible">Module 13: Rock the talk- Confidence building session</button>
                            <div class="content">
                                {{-- <p class="fs-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- course program collapse section end -->
        {{-- zigzag section start --}}
        <section class="my-5">
            <div class="container">
                <div class="row">
                    {{-- <div class="col-xl-6 col-lg-6 col-md-6 cold-sm-12 col-xs-12">
                        <div>
                            <img src="#" alt="" class="zigzag_img">
                        </div>
                    </div> --}}
                    <div class="col-xl-12 col-lg-12 col-md-12 cold-sm-12 col-xs-12">
                        <div>
                            <h1 class="display-1 fw-bolder">Why this is a <span style="color: red">must?</span></h1>
                            <div class="row">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="row">
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                            <div class="mt-4">
                                                {{-- <span class="mt-5"> --}}
                                                    <span class="about_project_empty_div"></span>
                                                {{-- </span> --}}
                                                {{-- <span class="display-1 ml-3">4</span> <span>years</span> --}}
                                                <strong class="fs-4 fw-bold" style="margin-left: 21px;">To stand out in the workplace</strong>
                                                <p class="fs-5" style="margin-top: 20px; margin-left: 40px;">You only have one chance to make a first impression. Speaking confidently and consistently with conviction, strengthen your leadership skills and get noticed at interview, your desk and the board room.</p>
                                            </div>
                                        </div> 
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                            <div class="mt-4">
                                                <span class="about_project_empty_div"></span>
                                                {{-- <span class="display-1 ml-3">1500</span> <span>lectures</span> --}}
                                                <strong class="fs-4 ml-2 fw-bold" style="margin-left: 37px;">Influence Others</strong>
                                                <p class="fs-5" style="margin-top: 20px; margin-left: 40px;">We're not saying you've got to be a motivational speaker or that everybody needs to be your best friend. But we are saying that if you want to create influence, you need to motivate others.</p>
                                            </div>
                                        </div> 
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                            <div class="mt-4">
                                                <span class="about_project_empty_div"></span>
                                                <strong class="fs-4 ml-2 fw-bold" style="margin-left: 37px;">Boost Self-Confidence</strong>
                                                <p class="fs-5" style="margin-top: 20px; margin-left: 40px;">This bootcamp will help you speak with confidence and credibility, and show audience members they can trust what you say. By overcoming the fears and insecurities, you will start politely dominating your audiences, and taking the lead on the stage.</p>
                                            </div>
                                        </div> 
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                            <div class="mt-4">
                                                <span class="about_project_empty_div"></span>
                                                {{-- <span class="display-1 ml-3">4</span> <span>years</span> --}}
                                                <strong class="fs-4 ml-2 fw-bold" style="margin-left: 37px;">Connect with People</strong>
                                                <p class="fs-5" style="margin-top: 20px; margin-left: 40px;">Understanding the pulse of people is critical in public speaking. This bootcamp will help you understand how to captivate your audience within the first 5 minutes by getting them to trust, believe and listen to you. You will be able to make them understand that you have valuable insights and opinions to share with the world.</p>
                                            </div>
                                        </div> 
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                            <div class="mt-4">
                                                <span class="about_project_empty_div"></span>
                                                {{-- <span class="display-1 ml-3">4</span> <span>years</span> --}}
                                                <strong class="fs-4 ml-2 fw-bold" style="margin-left: 34px;">Becoming a creative speaker</strong>
                                                <p class="fs-5" style="margin-top: 20px; margin-left: 40px;">This bootcamp will help you tap into your deepest ideas and emotions to uncover a story that connects and persuades your audience. Simple storytelling framework that you can employ in any situation even if you think you are not a good storyteller. You will learn strategies to deliver your presentation with impact and leave your audience hungry for more.</p>
                                            </div>
                                        </div> 
                                    </div>
                                    {{-- <div class="mt-5">
                                        <button type="button" class="btn btn-outline-dark fs-4">Learn more</button>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6 cold-sm-12 col-xs-12">
                        <div class="mt-5">
                            <h1 class="display-5 fw-bolder">What is game-changing about Public Speaking Bootcamp</h1>
                            <p class="zigzag_text_box">
                                Public Speaking ‘Blueprint’ exercise will ensure you’re telling your audience exactly what they want to know. <br><br> 
                                How to create core content, key points, takeaways, titles and actionable tasks that pique the interest of your audience and inspire them to take action. <br><br>
                                The ‘Organizer’ tool to make sure your presentation will be flawlessly organized and delivered without the use of a script, making it simple for you to deliver and for your audience to follow. <br><br>
                                The ‘Killer Opener formula’ will captivate your audience within the first minute. And your audiences start to trust what you say. <br><br>
                                How to present confidently and credibly while overcoming fear, anxiety, and nervousness so that you can remain composed and in control in front of any audience. <br><br>
                                How to grab your audience’s attention by using your body language, power pose, your eye contact, and your tone of voice with dynamic effect. <br><br>
                                The cues to read your audience for maximum impact and give the impression that your message is personalized for each listener.  <br><br>
                                You can use learning style analysis and insights to stay on topic and convey your message to all types of learners in the room. <br><br>
                                The precise steps to closing a presentation that inspires enthusiasm and applause from your audience.
                            </p>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 cold-sm-12 col-xs-12">
                        <div class="mt-5">
                            <img src="{{asset('img/1.jpg')}}" alt="" class="game_changing_img_1">
                        </div>
                        {{-- <div class="mt-4">
                            <img src="{{asset('img/2.jpg')}}" alt="" class="game_changing_img_2">
                        </div> --}}
                        <div class="mt-5">
                            <img src="{{asset('img/3.jpg')}}" alt="" class="game_changing_img_2">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- zigzag section end --}}
        {{-- Before and After card section start --}}
        <section class="my-5">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6 cold-sm-12 col-xs-12">
                        <div class="">
                            <div class="before_card">
                                <div class="px-3 py-3">
                                    <h1 class="fw-bolder text-uppercase mx-4" style="color: #ff0322;">Before</h1>
                                    <ul class="before_after_ul">
                                        <li><span class="new_beginning_card_header_p"><i class="fa fa-times-circle" aria-hidden="true"></i></span>Don’t know how to start</li>
                                        <li><span class="new_beginning_card_header_p"><i class="fa fa-times-circle" aria-hidden="true"></i></span>Stage frighten</li>
                                        <li><span class="new_beginning_card_header_p"><i class="fa fa-times-circle" aria-hidden="true"></i></span>No control over speech</li>
                                        <li><span class="new_beginning_card_header_p"><i class="fa fa-times-circle" aria-hidden="true"></i></span>Failed to deliver full message</li>
                                        <li><span class="new_beginning_card_header_p"><i class="fa fa-times-circle" aria-hidden="true"></i></span>Don’t know what to answer when asked critical question</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 cold-sm-12 col-xs-12">
                        <div class="margin_left">
                            <div class="after_card">
                                <h1 class="fw-bolder text-uppercase mx-4" style="color:#000">After</h1>
                                <ul class="before_after_ul">
                                    <li><span class="new_beginning_card2_header_p"><i class="fa fa-check-circle"aria-hidden="true"></i></span>Loaded with self-confidence</li>
                                    <li><span class="new_beginning_card2_header_p"><i class="fa fa-check-circle"aria-hidden="true"></i></span>Improved communication skill</li>
                                    <li><span class="new_beginning_card2_header_p"><i class="fa fa-check-circle"aria-hidden="true"></i></span>Ability to rock the floor</li>
                                    <li><span class="new_beginning_card2_header_p"><i class="fa fa-check-circle"aria-hidden="true"></i></span>Critical Thinking Ability</li>
                                    <li><span class="new_beginning_card2_header_p"><i class="fa fa-check-circle"aria-hidden="true"></i></span>Unleashed creativity</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- Before and After card section end --}}
        {{-- Why this is for me section start --}}
        <section class="mb-5">
            <div class="container">
               <div class="">
                    <div class="for_me_card">
                        <div class="">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-6 cold-sm-12 col-xs-12">
                                    <div class="p-4">
                                        <h1 class="display-4 fw-bolder">Why this is for me?</h1>
                                        <div class="zigzag_text_box">
                                            <ul>
                                            <li>Have you identified your presentation personality style?</li>
                                            <li>Do you know how to use your personal style to entertain your audience by being yourself?</li>
                                            <li>Do you guarantee you’ll deliver a flawless presentation without relying on a script?</li>
                                            <li>Do you have a plan for engaging and re-engaging your listeners?</li>
                                            <li>Are you absolutely certain your entire audience will take action when you’re done?</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 cold-sm-12 col-xs-12">
                                    <div class="mt-5">
                                        <img src="{{asset('img/for_me.png')}}" alt="" class="for_me_img">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-12 col-lg-12 col-md-12 cold-sm-12 col-xs-12">
                                    <h1 class="display-4 fw-bolder text-center">If your answer is <span class="text-danger">‘No’</span> to any of these questions, then you need this Public Speaking Bootcamp.</h1>
                                </div>
                           </div>
                        </div>
                    </div>
               </div>
               
            </div>
        </section>
        {{-- Why this is for me section end --}}
        <!-- Free lecture about Confidence section start -->
        <section class="about_condfidence">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <div class="mt-5">
                            <h1 class="display-3 white_text_color fw-bolder"><span class="main_color">Free lecture</span> about Confidence:</h1>
                            <p class="white_text_color fs-2">7 steps of confidence building</p>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <div class="mt-5">
                            <iframe class="video" src="https://www.youtube.com/embed/MJ-gMYj02FY" class="rounded"></iframe>
                        </div> 
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <h1 class="display-3 white_text_color fw-bolder my-5">Who is this <span class="main_color">Bootcamp for?</span></h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="testimonial">
                            <div>
                                <img src="{{asset('img/doctor.png')}}" alt="" class="testimonial_img">
                            </div>
                            <div class="testimonial_image_background"></div>
                            <h3 class="white_text_color my-3">Doctors</h3>
                            <p class="white_text_color fs-5">Doctors need public speaking skills because they have to speak to patients and many other people in the hospital, in schools and colleges, at conferences and seminars, etc.</p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="testimonial">
                            <div>
                                <img src="{{asset('img/business_owner.png')}}" alt="" class="testimonial_img">
                            </div>
                            <div class="testimonial_image_background"></div>
                            <h3 class="white_text_color my-3">Business owners</h3>
                            <p class="white_text_color fs-5">When people hear you speak as an authority, they believe you're an expert in your industry. Your reputation will be enhanced among potential clients and customers as a result.
                            </p>

                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="testimonial">
                            <div>
                                <img src="{{asset('img/enter.png')}}" alt="" class="testimonial_img">
                            </div>
                            <div class="testimonial_image_background"></div>
                            <h3 class="white_text_color my-3">Entrepreneurs</h3>
                            <p class="white_text_color fs-5">You need public speaking skills just like business skills to flourish your inventions with a profit. </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="testimonial mt-3">
                            <div>
                                <img src="{{asset('img/teacher.png')}}" alt="" class="testimonial_img">
                            </div>
                            <div class="testimonial_image_background"></div>
                            <h3 class="white_text_color my-3">Teachers</h3>
                            <p class="white_text_color fs-5">Teachers today are under pressure to make their lectures and presentations more engaging and interesting to grab and hold the attention of their students. In this challenging environment, good public speaking skills have become necessary to be successful teachers. 
                            </p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="testimonial mt-3">
                            <div>
                                <img src="{{asset('img/laywer.png')}}" alt="" class="testimonial_img">
                            </div>
                            <div class="testimonial_image_background"></div>
                            <h3 class="white_text_color my-3">lawyers</h3>
                            <p class="white_text_color fs-5">One of the most important skills for a lawyer is public speaking. Lawyers must be able to present their case in a persuasive way so that the court will believe their client is innocent or guilty.
                            </p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="testimonial mt-3">
                            <div>
                                <img src="{{asset('img/engineer.png')}}" alt="" class="testimonial_img">
                            </div>
                            <div class="testimonial_image_background"></div>
                            <h3 class="white_text_color my-3">Engineers</h3>
                            <p class="white_text_color fs-5">Engineers are the most important people in the world. They can change the world with their ideas, but they’re also expected to talk about them in public.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Free lecture about Confidence section end -->
        <!-- Reviews section start -->
        <section class="review">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <h1 class="display-3 fw-bolder mb-4">Reviews</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div>
                            <div class="main_background_color review_text">
                                <p>After the Bootcamp, I overcame my stage fright and spoke confidently in front of large groups. Now I feel very confident while delivering a presentation.</p>
                            </div>
                            <div class="review_empty_div"></div>
                            <div>
                                <img src="{{asset('img/review_2.png')}}" alt="" class="reviews_img"> 
                                <span class="fs-5 fw-bold ">SM Walid Habib</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div>
                            <div class="main_background_color review_text">
                                <p>It was a life-changing experience for me. I couldn't express my thoughts to others because I  had no control over my speech. But Bootcamp helped me to overcome my challenges. I am very thankful to Maruf Sir.</p>
                            </div>
                            <div class="review_empty_div_2"></div>
                            <div>
                                <img src="{{asset('img/reviews_1.png')}}" alt="" class="reviews_img">
                                <span class="fs-5 fw-bold ">Farzana Tuli</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="mt-5">
                            <div class="main_background_color review_text">
                                <p>The Bootcamp session was a life-changing experience for me because it gave me the tools to speak up and advocate for myself. I had previously been too afraid to express my opinions, but now I have confidence in my ability to stand up for what's right.</p>
                            </div>
                            <div class="review_empty_div_3"></div>
                            <div>
                                <img src="{{asset('img/review_3.jpg')}}" alt="" class="reviews_img">
                                <span class="fs-5 fw-bold ">Tariq Rahman</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="mt-5">
                            <div class="main_background_color review_text">
                                <p>I had a fantastic experience in the Bootcamp. Now I realize how important it is to be able to speak up, especially when you are in a leadership role.</p>
                            </div>
                            <div class="review_empty_div_4"></div>
                            <div>
                                <img src="{{asset('img/review_4.jpg')}}" alt="" class="reviews_img">
                                <span class="fs-5 fw-bold ">Tanvir Ahmed</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Reviews section end -->
        <!-- certification section start -->
        <section class="certification">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="mt-5">
                            <h1 class="display-3 fw-bold text-center mt-5 rounded">After completing the course, you will get a certificate.</h1>
                            <p class="fs-4 mt-4">It confirms that you have completed the entire course program.</p>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div>
                            <img src="{{asset('img/certificate.jpg')}}" alt="" class="certification_img">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- certification section end -->
        <!-- subscribtion section start -->
        <section class="subscribtion" id="discount">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div>
                            <h1 class="display-3 fw-bold mt-5">Sign up and get a 50% discount</h1>
                            <p class="fs-4 mt-3">Course price with the discount: <strong>BDT 7,500</strong> <span class="text-decoration-line-through">15,000 BDT</span></p>
                        </div>
                           
                            <form action="#" method="post" id="discount_form">
                                @csrf
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <div>
                                            <div class="form-group">
                                                <input type="email" class="subcription_form_input" id="discount_email" name="discount_email" aria-describedby="emailHelp" placeholder="mail@example.com">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <input type="submit" class="subcription_button" value="Sign up & get discount">
                                        </div> 
                                    </div>
                                </div>
                            </form>
                         
                            <div class="mt-4">
                                <h1 class="fw-bolder">Or</h1>
                                <h3>Call at : +88 01617-302010</h3>
                            </div>
                           
                    </div>
                </div>
            </div>
        </section>
        <!-- subscribtion section end -->
        <!-- about the project section start -->
        <section class="my-5">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div>
                            <h1 class="display-3 fw-bolder mb-5 text-center">About Bootcamp</h1>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12 col-xs-12"></div>
                    <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-xs-12">
                        <div>
                            <p class="fs-4">Public Speaking Bootcamp. It's a two-day intensive training session consisting of 5-star class outing. This workshop is perfect for anyone who wants to improve their public speaking skills or make a career change into the world of public speaking. We guarantee that you'll be more confident and comfortable after attending this course.</p>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12 col-xs-12"></div>
                </div>
            </div>
        </section>
        <!-- about the project section end -->
        {{-- price table section start --}}
        <section class="my-5" id="price_table">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6 cold-sm-12 col-xs-12">
                        <div class="">
                            <div class="price_card">
                                <div class="">
                                    <h4 class="text-center fw-bolder fs-4">Bootcamp Pro: 15,000/-</h4>
                                    <div class="price_empty_div"></div>
                                    <div class="p-4">
                                        <p class="fs-3 fw-bold">Know all the tools</p>
                                        <p class="zigzag_text_box">Signature Public Speaking and Presentation Bootcamp Workshop</p>
                                        <p class="zigzag_text_box text-center fw-bold mt-5">16-hour long session </p>
                                        <ul class="zigzag_text_box">
                                            <li>2 daylong workshops at Basecamp</li>
                                            <li>8 Program Modules</li>
                                            <li>30 Video Lessons</li>
                                            <li>100 pages Workbook & Handouts</li>
                                            <li>20 Hands-On Activities</li>
                                            <li>24/7 Access to Our Private Facebook Group</li>
                                            <li>2 Assessments</li>
                                            <li>Certification </li>
                                            <li>Total = 16 hours</li>
                                        </ul>
                                    </div>
                                    <div class="margin_top">
                                        <div id="top_right"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- @foreach ($products as $product)
                        <div class="col-xl-6 col-lg-6 col-md-6 cold-sm-12 col-xs-12">
                            <div class="">
                                <div class="price_card">
                                    <div class="">
                                        <h4 class="text-center fw-bolder fs-4">{{ $product->product_name }}: <span>{{ $product->product_price }}</span>/-</h4>
                                        <div class="price_empty_div"></div>
                                        <div class="p-4">
                                            <p class="fs-3 fw-bold">{{ $product->product_title }}</p>
                                            <p class="zigzag_text_box">
                                                {{ $product->short_desc }}
                                            </p>
                                            <p class="zigzag_text_box text-center fw-bold">{{ $product->time }}</p>
                                            <ul class="zigzag_text_box">
                                                {!! $product->long_desc !!}
                                            </ul>
                                            <p class="zigzag_text_box text-danger fw-bolder">
                                                @if($product->extra_2 == Null)
                                                    <p></p>
                                                @else
                                                    {{ $product->extra_2 }}
                                                @endif
                                            </p>
                                            <ul class="zigzag_text_box">
                                                @if($product->extra == Null)
                                                <p></p>
                                                @else
                                                    {!! $product->extra !!}
                                                @endif
                                            </ul>
                                        
                                        </div>
                                        <div> --}}
                                        
                                            {{-- purchase button --}}
                                            {{-- <div id="top_right"></div> --}}
                                            {{-- {{$mytoken}}
                                        @if ( $mytoken == "null" || $mytoken == null)
                                        <a href="{{route('login.page')}}" class="btn btn-danger fs-4 fw-bold rounded" style="width: 100%">Start Purchase</a>
                                        @else
                                       
                                        <a href="{{ route('payment.page', $product->id) }}" class="btn btn-danger fs-4 fw-bold rounded" style="width: 100%">Start Purchase</a>   
                                        @endif
                                            

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach --}}
                   
                    <div class="col-xl-6 col-lg-6 col-md-6 cold-sm-12 col-xs-12">
                        <div class="">
                            <div class="price_card">
                                <div class="">
                                    <h4 class="text-center fw-bolder fs-4">Bootcamp Max: <span>20,000</span>/-</h4>
                                    <div class="price_empty_div"></div>
                                    <div class="p-4">
                                        <p class="fs-3 fw-bold">Mastering your public Speaking</p>
                                        <p class="zigzag_text_box">
                                            Signature Public Speaking and Presentation Bootcamp Workshop <strong class="text-danger">PLUS</strong> a year-long practice session and assignments.
                                        </p>
                                        <p class="zigzag_text_box text-center fw-bold">16 hours+80 hours=96 hours</p>
                                        <ul class="zigzag_text_box">
                                            <li>2 daylong workshop at Basecamp</li>
                                            <li>8 Program Modules</li>
                                            <li>30 Video Lessons</li>
                                            <li>100 pages Workbook & Handouts</li>
                                            <li>20 Hands-On Activities</li>
                                            <li>24/7 Access to Our Private Facebook Group</li>
                                            <li>2 Assessments</li>
                                            <li>Certification </li>
                                            <li>Total = 16 hours</li>
                                        </ul>
                                        <p class="zigzag_text_box text-danger fw-bolder">
                                            PLUS
                                        </p>
                                        <ul class="zigzag_text_box">
                                            <li>40 sessions distributed in forty different weeks in a year</li>
                                            <li>40 different themes in 40 sessions.</li>
                                            <li>Master Certificate</li>
                                            <li>Total (40x2)= 80 hours</li>
                                        </ul>
                                       
                                    </div>
                                    <div>
                                    
                                        {{-- purchase button --}}
                                        <div id="top_right_2"></div>
                                      
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
               
                </div>
            </div>
        </section>
        {{-- price table section end --}}

        <!-- FAQ section start -->
        {{-- <section>
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <h1 class="display-3 fw-bold">FAQ</h1>
                        <div class="collapse_1">
                            <button class="collapsible">Open Collapsible</button>
                            <div class="content">
                                <p class="fs-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
        <!-- FAQ section end -->
        
        {{-- owll carousal gallary start --}}
        <section class="carousel_class">
            <div class="owl-carousel owl-theme">
                <div class="item">
                    <img src="{{asset('img/bootcamp_gallary/1.jpg')}}" alt="">
                </div>
                <div class="item">
                    <img src="{{asset('img/bootcamp_gallary/2.jpg')}}" alt="">
                </div>
                <div class="item">
                    <img src="{{asset('img/bootcamp_gallary/3.jpg')}}" alt="">
                </div>
                <div class="item">
                    <img src="{{asset('img/bootcamp_gallary/4.jpg')}}" alt="">
                </div>
                <div class="item">
                    <img src="{{asset('img/bootcamp_gallary/5.jpg')}}" alt="">
                </div>
                <div class="item">
                    <img src="{{asset('img/bootcamp_gallary/6.jpg')}}" alt="">
                </div>
                <div class="item">
                    <img src="{{asset('img/bootcamp_gallary/7.jpg')}}" alt="">
                </div>
                <div class="item">
                    <img src="{{asset('img/bootcamp_gallary/8.jpg')}}" alt="">
                </div>
                <div class="item">
                    <img src="{{asset('img/bootcamp_gallary/9.jpg')}}" alt="">
                </div>
                <div class="item">
                    <img src="{{asset('img/bootcamp_gallary/10.jpg')}}" alt="">
                </div>
                
            </div>
        </section>
        {{-- owll carousal gallary end --}}
        <!-- footer section start -->
        <section class="footer_section">
            <div class="container">
               <div class="footer">
                    <div class="row">
                        <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12 col-xs-12 mx-auto">
                            <div class="main_color px-5 pt-5">
                                <p class="fs-4 fw-bold">PROFESSIONAL COURSE FOR <br> PUBLIC SPEAKING</p>
                                <h1 class="display-4 fw-bold">BECOME <br> A PRO</h1>
                                <p class="">Bespoke English Spoken Course to <br> Transform You from Average to Pro</p>
                            </div>
                        </div>
                        
                        <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12 col-xs-12 mx-auto">
                            @include('frontend.flash-message')
                            <div>
                                <form action="{{route('contact.with.us')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                      <label for="email">Email address</label>
                                      <input type="email" class="form-control" name="email" id="email" placeholder="Enter your email">
                                    </div>
                                    <div class="form-group">
                                      <label for="contact">Contact Number</label>
                                      <input type="text" name="contact" class="form-control" id="contact" placeholder="Enter your contact number">
                                    </div>
                                    <div class="form-group">
                                      <label for="email">Your Message</label>
                                      <textarea name="user_message" id="" cols="30" rows="5" class="form-control" placeholder="Write your message"></textarea>
                                    </div>
                                    <button type="submit" class="btn main_background_color px-4 fw-bold mt-3">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="row">
                        <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12 col-xs-12 mx-auto">
                            <div class="footer_icon">
                                <a href="#" class="footer_icon_1"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#" class="footer_icon_2"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div> --}}
               </div>
            </div>
        </section>
        {{-- <section>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="sticky-container">
                            <ul class="sticky">
                                <li>
                                    <img src="img/phone.png" width="32" height="32">
                                    <p>+88 01617-302010</p>
                                </li>
                                <li class="mt-3">
                                    <img src="img/facebook-logo.png" width="32" height="32">
                                    <p class="mt-4 fw-bold"><a href="#" target="_blank" class="text-decoration-none">Facebook</a></p>
                                </li>
                                <li class="mt-3">
                                    <img src="img/youtube.png" width="32" height="32">
                                    <p class="mt-4 fw-bold"><a href="#" target="_blank" class="text-decoration-none">Youtube</a></p>
                                </li>
                                
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
        <!-- footer section end -->
        <!-- overflow section start -->
        <section class="main_background_color" id="overflow">
            <div class="container">               
                <div class="text-dark">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div>
                                <p class="h6 px-5 mt-3">Join Bootcamp and become a pro public speaker <br> Hurry up! The offer is limited.</p>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12 col-xs-12">
                            <div class="text-center discount">
                                <p class="white_background px-2 text-center"> <span class="fw-bold fs-5">50%</span><br> off</p>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            <div class="text-center mt-3">
                                <p class="fs-4" id="demo"></p>
                                
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
            <span class="close">&times;</span>
        </section>
        <!-- overflow section end -->

    </main>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="owlcarousel/dist/owl.carousel.min.js"></script>
    <script>
        $(document).ready(function(){
            $('.owl-carousel').owlCarousel({
                loop:true,
                margin:0,
                nav:true,
                responsive:{
                    0:{
                        items:1
                    },
                    600:{
                        items:3
                    },
                    1000:{
                        items:4
                    }
                }
            })
        });
    
    
    </script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        var coll = document.getElementsByClassName("collapsible");
        var i;
        
        for (i = 0; i < coll.length; i++) {
          coll[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var content = this.nextElementSibling;
            if (content.style.maxHeight){
              content.style.maxHeight = null;
            } else {
              content.style.maxHeight = content.scrollHeight + "px";
            } 
          });
        }
    </script>
    <script>
        // Set the date we're counting down to
        var countDownDate = new Date("jan 5, 2023 23:59:59").getTime();
        
        // Update the count down every 1 second
        var x = setInterval(function() {
        
            // Get today's date and time
            var now = new Date().getTime();
        
            // Find the distance between now and the count down date
            var distance = countDownDate - now;
        
            // Time calculations for days, hours, minutes and seconds
            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);
        
            // Display the result in the element with id="demo"
            document.getElementById("demo").innerHTML = days + "d " + hours + "h "
            + minutes + "m " + seconds + "s ";
        
            // If the count down is finished, write some text
            if (distance < 0) {
            clearInterval(x);
            document.getElementById("demo").innerHTML = "EXPIRED";
            }
        }, 1000);
    </script>
    <script>
        var closebtns = document.getElementsByClassName("close");
        var i;
        
        for (i = 0; i < closebtns.length; i++) {
            closebtns[i].addEventListener("click", function() {
            this.parentElement.style.display = 'none';
            });
        }
    </script>
          
    <script>
        $(document).ready(function () {
            $("#authUser").html(localStorage.getItem('name'));
        
            if(localStorage.getItem("token") != null){
                $("#authUser").show();
                $("#loginLi").hide();
            }else{
                $("#authUser").hide();
                $("#icon").hide();
                $("#loginLi").show();
            }
        });
    </script>

    <script>
        $(document).ready(function(){

            var token = localStorage.getItem("token");


            // alert(localStorage.getItem("token"));

        $("#logoutRoute").submit(function(e){

            e.preventDefault();
        

            $.ajax({
                    type:'POST',
                    url:"{{route('logoutAuth')}}",
                    data:{"action":"logout", },
                    dataType: 'json',
                    headers: {
                        "Authorization": "Bearer "+token,
                        "Accept": "application/json"
                    },
                    success: function(data){		

                        localStorage.removeItem("token");
                        localStorage.removeItem("name");
                        // localStorage.getItem("token");
                        Swal.fire(
                            'Good job!',
                            'Your Logout Successfully',
                            'success'
                            )
                                    window.location.href = "/";
                        $("#authUser").hide();
                        $("#loginLi").show();

                    },
                    error: function(data){
                        console.log($data);
                    }
                });

            return false;
        });


        var toplink = "";

        if(token!=null){
            toplink = `<a href="{{route('payment.page',1)}}" class="btn btn-danger fs-4 fw-bold rounded" style="width: 100%">Start Purchase</a>`;                   
        }else{
            toplink =`<a href="{{route('login.page')}}" class="btn btn-danger fs-4 fw-bold rounded" style="width: 100%">Buy Now</a>`;
        }

        $("#top_right").html(toplink);

        var toplink_2 = "";

        if(token!=null){
            toplink_2 = `<a href="{{route('payment.page',2)}}" class="btn btn-danger fs-4 fw-bold rounded" style="width: 100%">Start Purchase</a>`;                   
        }else{
            toplink_2 =`<a href="{{route('login.page')}}" class="btn btn-danger fs-4 fw-bold rounded" style="width: 100%">Buy Now</a>`;
        }

        $("#top_right_2").html(toplink_2);


        });
    </script>
    <script>
            $(document).ready(function(){

        var token = localStorage.getItem("token");


        // alert(localStorage.getItem("token"));

        $("#discount_form").submit(function(e){

            e.preventDefault();


                $.ajax({
                    type:'POST',
                    url:"{{route('discount')}}",
                    data:{"action":"discount", discount_email:$("#discount_email").val()},
                    dataType: 'json',
                    headers: {
                        // "Authorization": "Bearer "+token,
                        "Accept": "application/json"
                    },
                    success: function(data){		

                        // localStorage.removeItem("token");
                        // localStorage.removeItem("name");
                        // localStorage.getItem("token");
                        Swal.fire(
                            'Good job!',
                            'Your Discount is granted',
                            'success'
                            )
                            window.location.href = "/register/page";

                    },
                    error: function(data){
                        console.log(data);
                    }
                });

                return false;
            });

        });
    </script>
  </body>
</html>