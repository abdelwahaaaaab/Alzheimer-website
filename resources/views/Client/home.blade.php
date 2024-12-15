<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title> home </title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            font-family: 'Times New Roman', Times, serif;
        }
        
        body {
            background-image: url("");
            background-repeat: no-repeat;
            background-position: center center;
            background-attachment: fixed;
            background-size: cover;
            width: 100%;
            margin: 0;
            padding: 0;
            font-family: 'Times New Roman', Times, serif;
        }
        
        .clear_fix {
            clear: both;
        }
        
        /*start navbar */
        
        .navbar {
            width: 100%;
            height: 90px;
            position: fixed;
            background-color: #8199e8;
            border-radius: 0 0 100px 100px;
            box-shadow: 4px 4px 7px black;
        }
        
        .navbar .container .image img {
            float: left;
            padding-top: 15px;
            margin-left: 0px
        }
        
        .navbar .container .icon ul {
            list-style: none;
        }
        
        .navbar .container .icon ul li {
            float: left;
            padding: 30px;
            margin-left: 0px;
        }
        
        .navbar .container .icon ul li a {
            color: #fff;
            text-decoration: none;
            font-family: 'Times New Roman', Times, serif;
            font-weight: bold;
            font-size: 24px;
        }
        .registerbtn2
        {
            border-radius:40px;
            background-color:#8199e8;
            padding:5px 10px;
            font-size:24px;
            font-weight:bold;
        }
        .registerbtn2:hover
        {
            color:white;
            cursor:pointer;
        }
        
        .navbar .container .icon ul li a:hover {
            color: black;
            cursor: pointer;
        }
        article{
            padding: 35px;
            background-color: #009933;
            border-radius: 12px;
            text-align:center;
        }
        .logout
        {
            background: none;
            border: none;
            color: white;
            font-size: 21px;
            font-weight: bold;  
        }
        .logout:hover
        {
            cursor: pointer;
            color: black;
        }
        .container2 {
            width: 1000px;
            margin: auto;
        }
        
        /*end navbar*/
    </style>

</head>
@if(session('locale') == 'en')
<body>
@else
<body style="direction: rtl;">
@endif    
    <!-- start header -->
    <div class="navbar">
        <div class="container">
            <div class="image">
                <img src="" width="60px" />
            </div>
            <div class="icon" style="padding-left:80px">
            @if(Session('client'))
                <ul>
                    @if(session('locale') == 'ar')
                    <li><button class="registerbtn2"><a href="{{route('lang','en')}}" style="font-size: 18px">English</a></button></li>
                    <li><button class="registerbtn2"><a href="{{route('lang','ar')}}" style="font-size: 18px">اللغة العربية</a></button></li> 
                    <li><form action="{{route('logout.destroy', session('user_id'))}}" method="POST">
                     @csrf
                     @method('delete')
                        <input type="submit" value="{{__('myCustom.logout-btn')}}"  class="logout">
                    </form></li>
                    <li><a href="/contact"> {{__('myCustom.contact')}} </a></li>
                    <li><a href="/mri"> {{__('myCustom.mri')}}</a></li>
                    <li><a href="/memory-test"> {{__('myCustom.memory')}}</a></li>
                    <li><a href="/instruction"> {{__('myCustom.instruction')}}</a></li>
                    <li><a href="/"> {{__('myCustom.alzheimer')}} </a></li>
                    <li><a href="/home">{{__('myCustom.home')}} </a></li>
                    @else
                    <li><a href="/home">{{__('myCustom.home')}} </a></li>
                    <li><a href="/"> {{__('myCustom.alzheimer')}} </a></li>
                    <li><a href="/instruction"> {{__('myCustom.instruction')}}</a></li>
                    <li><a href="mri"> {{__('myCustom.mri')}}</a></li>
                    <li><a href="/memory-test"> {{__('myCustom.memory')}}</a></li>
                    <li><a href="/contact"> {{__('myCustom.contact')}} </a></li>
                    <li><form action="{{route('logout.destroy', session('user_id'))}}" method="POST">
                     @csrf
                     @method('delete')
                        <input type="submit" value="{{__('myCustom.logout-btn')}}"  class="logout">
                    </form></li>
                    <li><button class="registerbtn2"><a href="{{route('lang','en')}}" style="font-size: 18px">English</a></button></li>
                    <li><button class="registerbtn2"><a href="{{route('lang','ar')}}" style="font-size: 18px">اللغة العربية</a></button></li>
                    @endif
                </ul>
                @elseif(Session('ALoggedIn'))
                @if(session('locale') == 'ar')
                <ul>
                    <li><button class="registerbtn2"><a href="{{route('lang','en')}}" style="font-size: 18px">English</a></button></li>
                    <li><button class="registerbtn2"><a href="{{route('lang','ar')}}" style="font-size: 18px">اللغة العربية</a></button></li>
                    <li><a href="/home">{{__('myCustom.home')}} </a></li>
                    <li><a href="/"> {{__('myCustom.alzheimer')}}</a></li>
                    <li><a href="/instruction"> {{__('myCustom.instruction')}}</a></li>
                    <li><a href="/instruction/create"> {{__('myCustom.add-instruction')}} </a></li>
                    <li><a href="/show-messages">{{__('myCustom.show-message')}}</a></li>
                    <li><a href="/show-users">{{__('myCustom.show-user')}}</a></li>
                    <form action="{{route('Admin.destroy', session('user_id'))}}" method="POST">
                        @csrf
                        @method('delete')
                        <input type="submit" value="{{__('myCustom.logout-btn')}}" class="logout">
                    </form>
                </ul>
                @else
                <ul>
                    <li><a href="/home">{{__('myCustom.home')}} </a></li>
                    <li><a href="/"> {{__('myCustom.alzheimer')}}</a></li>
                    <li><a href="/instruction"> {{__('myCustom.instruction')}}</a></li>
                    <li><a href="/instruction/create"> {{__('myCustom.add-instruction')}} </a></li>
                    <li><a href="/show-messages">{{__('myCustom.show-message')}}</a></li>
                    <li><a href="/show-users">{{__('myCustom.show-user')}}</a></li>
                    <li><form action="{{route('Admin.destroy', session('user_id'))}}" method="POST">
                        @csrf
                        @method('delete')
                        <input type="submit" value="{{__('myCustom.logout-btn')}}" class="logout">
                    </form></li>
                </ul>  
                @endif
                @else
                <ul>
                    @if(session('locale') == 'ar')
                    <li><button class="registerbtn2"><a href="{{route('lang','en')}}" style="font-size: 18px">English</a></button></li>
                    <li><button class="registerbtn2"><a href="{{route('lang','ar')}}" style="font-size: 18px">اللغة العربية</a></button></li>
                    <li><a href="/login"> {{__('myCustom.login')}}</a></li>
                    <li><a href="/register">{{__('myCustom.register')}}</a></li>
                    <li><a href="/contact"> {{__('myCustom.contact')}} </a></li>
                    <li><a href="/instruction"> {{__('myCustom.instruction')}}</a></li>
                    <li><a href="/"> {{__('myCustom.alzheimer')}}</a></li>
                    <li><a href="/home">{{__('myCustom.home')}} </a></li>
                    @else
                    <li><a href="/home">{{__('myCustom.home')}} </a></li>
                    <li><a href="/"> {{__('myCustom.alzheimer')}}</a></li>
                    <li><a href="/instruction"> {{__('myCustom.instruction')}}</a></li>
                    <li><a href="/contact"> {{__('myCustom.contact')}}  </a></li>
                    <li><a href="/login"> {{__('myCustom.login')}} </a></li>
                    <li><a href="/register">{{__('myCustom.register')}}</a></li>
                    <li><button class="registerbtn2"><a href="{{route('lang','en')}}" style="font-size: 18px">English</a></button></li>
                    <li><button class="registerbtn2"><a href="{{route('lang','ar')}}" style="font-size: 18px">اللغة العربية</a></button></li>
                    @endif    
                </ul>
                
                @endif

            </div>

        </div>
    </div>
    </div>
    <!--end header-->
    <!--start slider-->
<div class="container2">
    <div id="slider" style=" padding-top:150px;">
        <div class="slider">
        
            @if($message = Session::get('message'))
        
            <article style="color:white; font-size:20px;">{{$message}}</article>
    
            @endif
            @if($error = Session::get('error'))
            <article style="color:white; font-size:20px;">{{$error}}</article>
            @endif
                <div class="intro" >
                    <h1 style="font-size:55px; color:rgb(74, 74, 126); ">{{__('myCustom.home-p1')}}</h1><br>
                </div>
        </div>
    
    </div>
    <!--end slider -->
    <!--start section one -->
    <div id="About">
        <div class="sectionone">
            <div class="container">
                <div class="sectiononenora" >
                    <div class="parag">
                        <ul>
                            <li style="font-size: 20px; padding-bottom: 10px">
                                {{__('myCustom.home-p2')}}
                            </li>
                            <li style="font-size: 20px; padding-bottom: 10px">
                                {{__('myCustom.home-p3')}}
                            </li>
                            <li style="font-size: 20px; padding-bottom: 10px">
                                {{__('myCustom.home-p4')}}
                            </li>
                            <li style="font-size: 20px; padding-bottom: 10px">
                                {{__('myCustom.home-p5')}}
                            </li>
                            <li style="font-size: 20px; padding-bottom: 10px">
                                {{__('myCustom.home-p6')}}
                            </li>
                        </ul>
                        <!-- <p style="font-size:20px; text-align: justify;"><br> - <br> - <br> -</span>
                        </p> -->
                    </div><br>
                    <div class="imagenora">
                        <img style="padding-left: 280px;" src="https://annabaa.org/aarticles/fileM/5c8444b539ee9.jpg" height="300" ; alt="test" />
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="About">
        <div class="sectionone" style="padding-top:25px;">
            <div class="container ">
                <div class="sectiononenora">
                    <h1 style="font-size:40px; color:rgb(74, 74, 126); padding-top:10px; padding-left:15px; padding-right:15px; background-color: rgb(237, 237, 241);  ">{{__('myCustom.home-p28')}}</h1>
                    <div class="parag" style="background-color: rgb(237, 237, 241);padding-left:15px; padding-right:15px;">
                    @if(session('locale') == 'en')
                    <ul style="padding-left: 20px;">
                    @else
                    <ul style="padding-right: 20px;">
                    @endif
                        <li style="font-size: 20px; padding-bottom: 20px">
                            {{__('myCustom.home-p7')}}
                        </li>
                        <li style="font-size: 20px; padding-bottom: 20px">
                            {{__('myCustom.home-p8')}}
                        </li>
                        <li style="font-size: 20px; padding-bottom: 20px">
                            {{__('myCustom.home-p9')}}
                        </li>
                    </ul>
                        <p style="font-size:18px;  text-align: justify;"><br> <br> </span>
                        </p>
                    </div><br>
                    <div class="imagenora" style="padding-left: 80px;">
                        <iframe width="844" height="474" src="https://www.youtube.com/embed/wfLP8fFrOp0" title="{{__('myCustom.home-10')}}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="About">
        <div class="sectionone" style="padding-top:10px;">
            <div class="container">
                <div class="sectiononenora" >
                    <h1 style="font-size:40px; color:rgb(74, 74, 126); padding-top:30px; padding-left:15px; padding-right:15px; ">{{__('myCustom.home-p11')}}</h1>
                    <div class="parag ">
                        @if(session('locale') == 'en')
                        <ul style="padding-left: 20px; padding-top: 10px;">
                        @else
                        <ul style="padding-right: 20px; padding-top: 10px;">
                        @endif
                            <li style="font-size: 20px; padding-bottom: 20px">
                                {{__('myCustom.home-p12')}}   
                            </li>
                            <li style="font-size: 20px; padding-bottom: 20px">
                                {{__('myCustom.home-p13')}}
                            </li>
                            <li style="font-size: 20px; padding-bottom: 20px">
                                {{__('myCustom.home-p14')}}
                            </li>
                            <li style="font-size: 20px; padding-bottom: 20px">
                                {{__('myCustom.home-p15')}}
                            </li>
                            <li style="font-size: 20px; padding-bottom: 20px">
                                {{__('myCustom.home-p16')}}
                            </li>
                            <li style="font-size: 20px; padding-bottom: 20px">
                                {{__('myCustom.home-p17')}}
                            </li>
                            <li style="font-size: 20px; padding-bottom: 20px">
                                {{__('myCustom.home-p18')}}
                            </li>

                        </ul>
                    </div><br>
                    <div class="imagenora ">
                        <img style="padding-left: 200px; " src="https://img.youm7.com/ArticleImgs/2019/8/8/65046-%D9%85%D8%B1%D8%B6-%D8%A7%D9%84%D8%B2%D9%87%D8%A7%D9%8A%D9%85%D8%B1.jpg " height=" " ; />
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="About ">
        <div class="sectionone " style="padding-top:25px; ">
            <div class="container ">
                <h1 style="font-size:40px; color:rgb(74, 74, 126); padding-top:10px; padding-left:15px; padding-right:15px; background-color: rgb(237, 237, 241); ">{{__('myCustom.home-p19')}}</h1>
                <div class="sectiononenora ">

                    <div class=" parag ">
                        @if(session('locale') == 'en')
                        <ul style="padding-left: 25px; padding-top: 10px; background-color: rgb(237, 237, 241);">
                        @else
                        <ul style="padding-right: 25px; padding-top: 10px; background-color: rgb(237, 237, 241);">
                        @endif
                            <li style="font-size: 20px; padding-bottom: 20px">
                                {{__('myCustom.home-p20')}}
                            </li>
                            <li style="font-size: 20px; padding-bottom: 20px">
                                {{__('myCustom.home-p21')}}
                            </li>
                            <li style="font-size: 20px; padding-bottom: 20px">
                                {{__('myCustom.home-p22')}}
                            </li>
                            <li style="font-size: 20px; padding-bottom: 20px">
                                {{__('myCustom.home-p23')}}
                            </li>
                            <li style="font-size: 20px; padding-bottom: 20px">
                                {{__('myCustom.home-p24')}}
                            </li>
                            <li style="font-size: 20px; padding-bottom: 20px">
                                {{__('myCustom.home-p25')}}
                            </li>
                            <li style="font-size: 20px; padding-bottom: 20px">
                                {{__('myCustom.home-p26')}}
                            </li>
                        </ul>
                    </div><br>
                    <div class="imagenora " style="padding-left: 80px; ">
                        <iframe width="844 " height="474 " src="https://www.youtube.com/embed/3CiFk2hP23U " title="{{__('myCustom.home-p27')}}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>    
    <!--end section one -->







 <!--start footer-->
 <div class="end_footer " style="background-color: #8199e8; text-align: center; width: 100%;height: 100px; ">


<p style="color: rgb(255, 255, 255); font-size: large; margin-top: 100px; margin-left: 380px ; padding-top: 5px; margin-right: 330px ;">&copy; {{__('myCustom.copyright')}}
    <br><a style="color: rgb(255, 255, 255); " href="# ">{{__('myCustom.part-one')}}<br>
    {{__('myCustom.part-two')}}</a>
</p>
</div>


<!--end footer-->
</body>

</html>