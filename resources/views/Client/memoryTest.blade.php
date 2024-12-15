<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title> Memory Test </title>
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
            background-image: url("https://png.pngtree.com/background/20210715/original/pngtree-light-blue-marble-texture-background-map-picture-image_1302109.jpg");
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
            font-size: 21px;
        }
        .registerbtn2
        {
            border-radius:40px;
            background-color:#8199e8;
            padding:5px 10px;
            font-size:21px;
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
        .question
        {
            font-size: 24px;
        }
        .submit
        {
            font-size: 24px;
            margin-left: 450px;
            margin-top: 50px;
            border-radius:40px;
            background-color:#8199e8;
            font-weight: bold;
            padding:5px 10px;
        }
        .submit:hover
        {
            color:white;
            cursor:pointer;
        }
        .quiz-img
        {
            width: 150px;
        }
        .header
        {
            text-align: center;
            font-size: 50px;
        }
        .sub-header
        {
            text-align: center;
            font-size: 20px;
            color: red;
        }
        fieldset
        {
            border-radius: 12px;
            border-color: lightgray;
            border-width: 2px;
            padding: 20px
        }
        legend
        {
            font-size: 24px;
        }
        .submit2
        {
            font-size: 24px;
            border-radius:40px;
            background-color:#8199e8;
            font-weight: bold;
            padding:5px 10px;
        }
        .submit2 a
        {
            text-decoration: none;
            border-radius:40px;
            background-color:#8199e8;
            padding:5px 10px;
            font-size:21px;
            font-weight:bold;
            
        }
        .submit2 a:hover
        {
            color: white;
            cursor: pointer;
        }
        /*end navbar*/
    </style>

</head>

<body>
    <!-- start header -->
    <div class="navbar">
        <div class="container">
            <div class="icon" style="padding-left:20px">
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
                    <li><a href="mri"> {{__('myCustom.mri')}}</a></li>
                    <li><a href="/memory-test"> {{__('myCustom.memory')}}</a></li>
                    <li><a href="/instruction"> {{__('myCustom.instruction')}}</a></li>
                    <li><a href="/"> {{__('myCustom.alzheimer')}} </a></li>
                    <li><a href="/home">{{__('myCustom.home')}} </a></li>
                    @else
                    <li><a href="/home">{{__('myCustom.home')}} </a></li>
                    <li><a href="/"> {{__('myCustom.alzheimer')}} </a></li>
                    <li><a href="/instruction"> {{__('myCustom.instruction')}}</a></li>
                    <li><a href="/mri"> {{__('myCustom.mri')}}</a></li>
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
                

            </div>

        </div>
    </div>
    </div>
    <!--end header-->
    <!--start slider-->
<div class="container2">
    <div id="slider" style=" padding-top:150px;">
        <h1 class="header">{{__('myCustom.test-title')}}</h1><br>
        <p class="sub-header">{{__('myCustom.test-paragraph')}}</p><br><br>
        @if(Session('locale') == 'en')    
        <fieldset>
            <legend>{{__('myCustom.test-title')}}</legend>
        <form action="{{route('memory-test.store')}}" method="POST">
            @csrf
            <p class="question"><strong>{{__('myCustom.Q1')}} </strong> {{__('myCustom.q1')}}</p><br><br>
            <input type="radio" name="q1" id="q1" value="yes">
            <span class="question">Yes</span>
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            <input type="radio" name="q1" id="q1" value="no">
            <span class="question">No</span>
            <br><br>
            @error('q1') <p style="color:red;">{{$message}}</p>@enderror
            <hr><br><br><br>
            <p class="question"><strong>Question 2 : </strong> Choose a clock which a time is 11:10.</p><br><br>
            <input type="radio" name="q2" id="q2" value="yes">
            <img src="https://th.bing.com/th/id/R.f2bd745a58e9b8b7dc43e4fd6fd8e1de?rik=dnPYzN2w6w%2fYTQ&riu=http%3a%2f%2fetc.usf.edu%2fclipart%2f34200%2f34264%2fnclock-11-10_34264_lg.gif&ehk=kHkym4DETSFtDqjuXMxg7NtSe90daU9iYlR8HzOgC3Y%3d&risl=&pid=ImgRaw&r=0" alt="clock" class="quiz-img">
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            
            <input type="radio" name="q2" id="q2" value="no">
            <img src="https://th.bing.com/th/id/R.c7b29e1816eb4d0e02ee31e3c3ad153e?rik=jrl77w%2fe9HyoBg&riu=http%3a%2f%2fetc.usf.edu%2fclipart%2f34300%2f34304%2fnclock-11-50_34304_lg.gif&ehk=cEkdzrpsOzPyvWEY8NO%2feCHEyvOOYIiwUs3vXKbkJtc%3d&risl=&pid=ImgRaw&r=0" alt="" class="quiz-img">
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            <input type="radio" name="q2" id="q2" value="no">
            <img src="https://th.bing.com/th/id/OIP.MEiVp8lG701TNGV2bllR1QHaHa?pid=ImgDet&rs=1" alt="" class="quiz-img">
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            <input type="radio" name="q2" id="q2" value="no">
            <img src="https://th.bing.com/th/id/OIP.AIB7-QkteR3pfjd3H5GehQHaHa?pid=ImgDet&rs=1" alt="" class="quiz-img">
            <br><br>
            @error('q2') <p style="color:red;">{{$message}}</p>@enderror
            <hr><br><br>
            <p class="question"><strong>Question 3 : </strong> What is the picture that contains a Lion ?</p><br><br>
            <input type="radio" name="q3" id="q3" value="yes">
            <img src="https://webstockreview.net/images/lion-clipart-black-and-white-5.png" alt="" class="quiz-img">
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            <input type="radio" name="q3" id="q3" value="no">
            <img src="https://i.pinimg.com/originals/93/31/08/93310876e4477f1042f71e378a4f9fcf.png" alt="" class="quiz-img">
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            <input type="radio" name="q3" id="q3" value="no">
            <img src="https://www.pinclipart.com/picdir/big/519-5195127_cow-clipart.png" alt="" class="quiz-img">
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            <input type="radio" name="q3" id="q3" value="no">
            <img src="https://b.kisscc0.com/20180813/qye/kisscc0-dromedary-drawing-black-and-white-animal-camel-camel-4-5b713719bbd5b7.3534209015341463297694.png" alt="" class="quiz-img">
            <br><br>
            @error('q3') <p style="color:red;">{{$message}}</p>@enderror
            <hr><br><br>
            <p class="question"><strong>Question 4 : </strong> What is the picture that contains a Camel ?</p><br><br>
            <input type="radio" name="q4" id="q4" value="no">
            <img src="https://webstockreview.net/images/lion-clipart-black-and-white-5.png" alt="" class="quiz-img">
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            <input type="radio" name="q4" id="q4" value="no">
            <img src="https://i.pinimg.com/originals/93/31/08/93310876e4477f1042f71e378a4f9fcf.png" alt="" class="quiz-img">
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            <input type="radio" name="q4" id="q4" value="no">
            <img src="https://www.pinclipart.com/picdir/big/519-5195127_cow-clipart.png" alt="" class="quiz-img">
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            <input type="radio" name="q4" id="q4" value="yes">
            <img src="https://b.kisscc0.com/20180813/qye/kisscc0-dromedary-drawing-black-and-white-animal-camel-camel-4-5b713719bbd5b7.3534209015341463297694.png" alt="" class="quiz-img">
            <br><br>
            @error('q4') <p style="color:red;">{{$message}}</p>@enderror
            <hr><br><br>
            <p class="question"><strong>Question 5 : </strong> What is the picture that contains a Cow ?</p><br><br>
            <input type="radio" name="q5" id="q5" value="no">
            <img src="https://webstockreview.net/images/lion-clipart-black-and-white-5.png" alt="" class="quiz-img">
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            <input type="radio" name="q5" id="q5" value="no">
            <img src="https://i.pinimg.com/originals/93/31/08/93310876e4477f1042f71e378a4f9fcf.png" alt="" class="quiz-img">
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            <input type="radio" name="q5" id="q5" value="yes">
            <img src="https://www.pinclipart.com/picdir/big/519-5195127_cow-clipart.png" alt="" class="quiz-img">
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            <input type="radio" name="q5" id="q5" value="no">
            <img src="https://b.kisscc0.com/20180813/qye/kisscc0-dromedary-drawing-black-and-white-animal-camel-camel-4-5b713719bbd5b7.3534209015341463297694.png" alt="" class="quiz-img">
            <br><br>
            @error('q5') <p style="color:red;">{{$message}}</p>@enderror
            <hr><br><br>
            <p class="question"><strong>Question 6 : </strong> What is the picture that contains an Elephant ?</p><br><br>
            <input type="radio" name="q6" id="q6" value="no">
            <img src="https://webstockreview.net/images/lion-clipart-black-and-white-5.png" alt="" class="quiz-img">
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            <input type="radio" name="q6" id="q6" value="yes">
            <img src="https://i.pinimg.com/originals/93/31/08/93310876e4477f1042f71e378a4f9fcf.png" alt="" class="quiz-img">
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            <input type="radio" name="q6" id="q6" value="no">
            <img src="https://www.pinclipart.com/picdir/big/519-5195127_cow-clipart.png" alt="" class="quiz-img">
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            <input type="radio" name="q6" id="q6" value="no">
            <img src="https://b.kisscc0.com/20180813/qye/kisscc0-dromedary-drawing-black-and-white-animal-camel-camel-4-5b713719bbd5b7.3534209015341463297694.png" alt="" class="quiz-img">
            <br><br>
            @error('q6') <p style="color:red;">{{$message}}</p>@enderror
            <hr><br><br>
            <p class="question"><strong>Question 7 : </strong> What is the similarity between Apples and Oranges ?</p><br><br>
            <input type="radio" name="q7" id="q7" value="no">
            <span class="question">Both of them vegetables</span>
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            <input type="radio" name="q7" id="q7" value="yes">
            <span class="question">Both of them fruits</span>
            <br><br>
            @error('q7') <p style="color:red;">{{$message}}</p>@enderror
            <hr><br><br>
            <p class="question"><strong>Question 8 : </strong> What is the similarity between Trains and Bikes ?</p><br><br>
            <input type="radio" name="q8" id="q8" value="yes">
            <span class="question">Both of them vehicles</span>
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            <input type="radio" name="q8" id="q8" value="no">
            <span class="question">Both of them furniture</span>
            <br><br>
            @error('q8') <p style="color:red;">{{$message}}</p>@enderror
            <hr><br><br>
            <p class="question"><strong>Question 9 : </strong> Subtract 7 from 100.</p><br><br>
            <input type="radio" name="q9" id="q9" value="no">
            <span class="question">55</span>
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            <input type="radio" name="q9" id="q9" value="no">
            <span class="question">45</span>
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            <input type="radio" name="q9" id="q9" value="yes">
            <span class="question">93</span>
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            <input type="radio" name="q9" id="q9" value="no">
            <span class="question">83</span>
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            <br><br>
            @error('q9') <p style="color:red;">{{$message}}</p>@enderror
            <hr><br><br>
            <p class="question"><strong>Question 10 : </strong> Subtract 7 from 45.</p><br><br>
            <input type="radio" name="q10" id="q10" value="no">
            <span class="question">28</span>
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            <input type="radio" name="q10" id="q10" value="yes">
            <span class="question">38</span>
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            <input type="radio" name="q10" id="q10" value="no">
            <span class="question">88</span>
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            <input type="radio" name="q10" id="q10" value="no">
            <span class="question">93</span>
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            <br><br>
            @error('q10') <p style="color:red;">{{$message}}</p>@enderror
            <hr><br><br>
            <p class="question"><strong>Question 11 : </strong> Subtract 5 from 30.</p><br><br>
            <input type="radio" name="q11" id="q11" value="yes">
            <span class="question">25</span>
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            <input type="radio" name="q11" id="q11" value="no">
            <span class="question">35</span>
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            <input type="radio" name="q11" id="q11" value="no">
            <span class="question">30</span>
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            <input type="radio" name="q11" id="q11" value="no">
            <span class="question">20</span>
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            <br><br>
            @error('q11') <p style="color:red;">{{$message}}</p>@enderror
            <hr><br><br>
            <p class="question"><strong>Question 12 : </strong> Do you have trouble making decisions even for everyday things such as what to eat, clothes to wear, making plans with family/friends, what to read ? </p><br><br>
            <input type="radio" name="q12" id="q12" value="yes">
            <span class="question">Never</span>
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            <input type="radio" name="q12" id="q12" value="yes-1">
            <span class="question">Sometimes</span>
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            <input type="radio" name="q12" id="q12" value="no">
            <span class="question">Always</span>
            <br><br>
            @error('q12') <p style="color:red;">{{$message}}</p>@enderror
            <hr><br><br>
            <p class="question"><strong>Question 13 : </strong> Do you have trouble focusing or concentrating while watching TV, playing on your phone/tablet, or listening to music ? </p><br><br>
            <input type="radio" name="q13" id="q13" value="yes">
            <span class="question">Never</span>
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            <input type="radio" name="q13" id="q13" value="yes-1">
            <span class="question">Sometimes</span>
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            <input type="radio" name="q13" id="q13" value="no">
            <span class="question">Always</span>
            <br><br>
            @error('q13') <p style="color:red;">{{$message}}</p>@enderror
            <hr><br><br>
            <p class="question"><strong>Question 14 : </strong>  Do you forget the names of familiar objects and use general phrases such as 'you know what I mean' or 'that thing' ? </p><br><br>
            <input type="radio" name="q14" id="q14" value="yes">
            <span class="question">Never</span>
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            <input type="radio" name="q14" id="q14" value="yes-1">
            <span class="question">Sometimes</span>
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            <input type="radio" name="q14" id="q14" value="no">
            <span class="question">Always</span>
            <br><br>
            @error('q14') <p style="color:red;">{{$message}}</p>@enderror
            <hr><br><br>
            <p class="question"><strong>Question 15 : </strong> Do you find that you miss social cues, which may lead to not understanding what others are saying, laughing at inappropriate times, staying on a topic despite a lack of interest by others, and/or saying things that are viewed as offensive ?  </p><br><br>
            <input type="radio" name="q15" id="q15" value="yes">
            <span class="question">Never</span>
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            <input type="radio" name="q15" id="q15" value="yes-1">
            <span class="question">Sometimes</span>
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            <input type="radio" name="q15" id="q15" value="no">
            <span class="question">Always</span>
            <br><br>
            @error('q15') <p style="color:red;">{{$message}}</p>@enderror
            <hr><br><br>
            <p class="question"><strong>Question 16 : </strong>  Do you get confused with recalling the day of the week, month, year, important dates, and/or do you repeat yourself in conversations ?  </p><br><br>
            <input type="radio" name="q16" id="q16" value="yes">
            <span class="question">Never</span>
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            <input type="radio" name="q16" id="q16" value="yes-1">
            <span class="question">Sometimes</span>
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            <input type="radio" name="q16" id="q16" value="no">
            <span class="question">Always</span>
            <br><br>
            @error('q16') <p style="color:red;">{{$message}}</p>@enderror
            <hr><br><br>
            <p class="question"><strong>Question 17 : </strong>  Do you need help getting dressed, remembering to take medication, and/or handling your finances ?  </p><br><br>
            <input type="radio" name="q17" id="q17" value="yes">
            <span class="question">Never</span>
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            <input type="radio" name="q17" id="q17" value="yes-1">
            <span class="question">Sometimes</span>
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            <input type="radio" name="q17" id="q17" value="no">
            <span class="question">Always</span>
            <br><br>
            @error('q17') <p style="color:red;">{{$message}}</p>@enderror
            <hr><br><br>
            <p class="question"><strong>Question 18 : </strong>  Are these difficulties getting worse ?  </p><br><br>
            <input type="radio" name="q18" id="q18" value="yes">
            <span class="question">Never</span>
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            <input type="radio" name="q18" id="q18" value="yes-1">
            <span class="question">Sometimes</span>
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            <input type="radio" name="q18" id="q18" value="no">
            <span class="question">Always</span>
            <br><br>
            @error('q18') <p style="color:red;">{{$message}}</p>@enderror
            <hr><br><br>
            <p class="question"><strong>Question 19 : </strong>  Do you get easily confused driving, or using tools? Do you get lost in places that are familiar to you (i.e. your neighborhood or the grocery store) ?  </p><br><br>
            <input type="radio" name="q19" id="q19" value="yes">
            <span class="question">Never</span>
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            <input type="radio" name="q19" id="q19" value="yes-1">
            <span class="question">Sometimes</span>
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            <input type="radio" name="q19" id="q19" value="no">
            <span class="question">Always</span>
            <br><br>
            @error('q19') <p style="color:red;">{{$message}}</p>@enderror
            <hr><br><br>
            <p class="question"><strong>Question 20 : </strong>  Do these difficulties reflect changes from how you were functioning a few years ago ?  </p><br><br>
            <input type="radio" name="q20" id="q20" value="yes">
            <span class="question">Never</span>
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            <input type="radio" name="q20" id="q20" value="yes-1">
            <span class="question">Sometimes</span>
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            <input type="radio" name="q20" id="q20" value="no">
            <span class="question">Always</span>
            <br><br>
            @error('q20') <p style="color:red;">{{$message}}</p>@enderror
            <br><br>
            <input type="submit" value="Submit" class="submit">
            <br><br><hr><br><br>
            <button class="submit2"><a href="/test-results" style="font-size: 18px">Results Page</a></button>
        </form>
        </fieldset>
        @else
        <fieldset  style="direction:rtl;">
            <legend>{{__('myCustom.test-title')}}</legend>
        <form action="{{route('memory-test.store')}}" method="POST" style="direction:rtl;">
            @csrf
            <p class="question"><strong>{{__('myCustom.Q1')}} </strong> {{__('myCustom.q1')}}</p><br><br>
            <input type="radio" name="q1" id="q1" value="yes">
            <span class="question">نعم</span>
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            <input type="radio" name="q1" id="q1" value="no">
            <span class="question">لا</span>
            <br><br>
            @error('q1') <p style="color:red;">{{$message}}</p>@enderror
            <hr><br><br><br>
            <p class="question"><strong>السؤال الثاني : </strong> اختر الساعة التي يكون الوقت فيها 11:10</p><br><br>
            <input type="radio" name="q2" id="q2" value="yes">
            <img src="https://th.bing.com/th/id/R.f2bd745a58e9b8b7dc43e4fd6fd8e1de?rik=dnPYzN2w6w%2fYTQ&riu=http%3a%2f%2fetc.usf.edu%2fclipart%2f34200%2f34264%2fnclock-11-10_34264_lg.gif&ehk=kHkym4DETSFtDqjuXMxg7NtSe90daU9iYlR8HzOgC3Y%3d&risl=&pid=ImgRaw&r=0" alt="clock" class="quiz-img">
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            
            <input type="radio" name="q2" id="q2" value="no">
            <img src="https://th.bing.com/th/id/R.c7b29e1816eb4d0e02ee31e3c3ad153e?rik=jrl77w%2fe9HyoBg&riu=http%3a%2f%2fetc.usf.edu%2fclipart%2f34300%2f34304%2fnclock-11-50_34304_lg.gif&ehk=cEkdzrpsOzPyvWEY8NO%2feCHEyvOOYIiwUs3vXKbkJtc%3d&risl=&pid=ImgRaw&r=0" alt="" class="quiz-img">
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            <input type="radio" name="q2" id="q2" value="no">
            <img src="https://th.bing.com/th/id/OIP.MEiVp8lG701TNGV2bllR1QHaHa?pid=ImgDet&rs=1" alt="" class="quiz-img">
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            <input type="radio" name="q2" id="q2" value="no">
            <img src="https://th.bing.com/th/id/OIP.AIB7-QkteR3pfjd3H5GehQHaHa?pid=ImgDet&rs=1" alt="" class="quiz-img">
            <br><br>
            @error('q2') <p style="color:red;">{{$message}}</p>@enderror
            <hr><br><br>
            <p class="question"><strong>السؤال الثالث : </strong> ما الصورة التي تحتوي على أسد ؟</p><br><br>
            <input type="radio" name="q3" id="q3" value="yes">
            <img src="https://webstockreview.net/images/lion-clipart-black-and-white-5.png" alt="" class="quiz-img">
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            <input type="radio" name="q3" id="q3" value="no">
            <img src="https://i.pinimg.com/originals/93/31/08/93310876e4477f1042f71e378a4f9fcf.png" alt="" class="quiz-img">
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            <input type="radio" name="q3" id="q3" value="no">
            <img src="https://www.pinclipart.com/picdir/big/519-5195127_cow-clipart.png" alt="" class="quiz-img">
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            <input type="radio" name="q3" id="q3" value="no">
            <img src="https://b.kisscc0.com/20180813/qye/kisscc0-dromedary-drawing-black-and-white-animal-camel-camel-4-5b713719bbd5b7.3534209015341463297694.png" alt="" class="quiz-img">
            <br><br>
            @error('q3') <p style="color:red;">{{$message}}</p>@enderror
            <hr><br><br>
            <p class="question"><strong>السؤال الرابع : </strong> ما الصورة التي تحتوي على جمل ؟</p><br><br>
            <input type="radio" name="q4" id="q4" value="no">
            <img src="https://webstockreview.net/images/lion-clipart-black-and-white-5.png" alt="" class="quiz-img">
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            <input type="radio" name="q4" id="q4" value="no">
            <img src="https://i.pinimg.com/originals/93/31/08/93310876e4477f1042f71e378a4f9fcf.png" alt="" class="quiz-img">
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            <input type="radio" name="q4" id="q4" value="no">
            <img src="https://www.pinclipart.com/picdir/big/519-5195127_cow-clipart.png" alt="" class="quiz-img">
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            <input type="radio" name="q4" id="q4" value="yes">
            <img src="https://b.kisscc0.com/20180813/qye/kisscc0-dromedary-drawing-black-and-white-animal-camel-camel-4-5b713719bbd5b7.3534209015341463297694.png" alt="" class="quiz-img">
            <br><br>
            @error('q4') <p style="color:red;">{{$message}}</p>@enderror
            <hr><br><br>
            <p class="question"><strong>السؤال الخامس : </strong> ما الصورة التي تحتوي على بقرة ؟</p><br><br>
            <input type="radio" name="q5" id="q5" value="no">
            <img src="https://webstockreview.net/images/lion-clipart-black-and-white-5.png" alt="" class="quiz-img">
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            <input type="radio" name="q5" id="q5" value="no">
            <img src="https://i.pinimg.com/originals/93/31/08/93310876e4477f1042f71e378a4f9fcf.png" alt="" class="quiz-img">
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            <input type="radio" name="q5" id="q5" value="yes">
            <img src="https://www.pinclipart.com/picdir/big/519-5195127_cow-clipart.png" alt="" class="quiz-img">
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            <input type="radio" name="q5" id="q5" value="no">
            <img src="https://b.kisscc0.com/20180813/qye/kisscc0-dromedary-drawing-black-and-white-animal-camel-camel-4-5b713719bbd5b7.3534209015341463297694.png" alt="" class="quiz-img">
            <br><br>
            @error('q5') <p style="color:red;">{{$message}}</p>@enderror
            <hr><br><br>
            <p class="question"><strong>السؤال السادس : </strong> ما الصورة التي تحتوي على فيل ؟</p><br><br>
            <input type="radio" name="q6" id="q6" value="no">
            <img src="https://webstockreview.net/images/lion-clipart-black-and-white-5.png" alt="" class="quiz-img">
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            <input type="radio" name="q6" id="q6" value="yes">
            <img src="https://i.pinimg.com/originals/93/31/08/93310876e4477f1042f71e378a4f9fcf.png" alt="" class="quiz-img">
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            <input type="radio" name="q6" id="q6" value="no">
            <img src="https://www.pinclipart.com/picdir/big/519-5195127_cow-clipart.png" alt="" class="quiz-img">
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            <input type="radio" name="q6" id="q6" value="no">
            <img src="https://b.kisscc0.com/20180813/qye/kisscc0-dromedary-drawing-black-and-white-animal-camel-camel-4-5b713719bbd5b7.3534209015341463297694.png" alt="" class="quiz-img">
            <br><br>
            @error('q6') <p style="color:red;">{{$message}}</p>@enderror
            <hr><br><br>
            <p class="question"><strong>السؤال السابع : </strong> ما وجة التشابه بين البرتقال و التفاح ؟</p><br><br>
            <input type="radio" name="q7" id="q7" value="no">
            <span class="question">كلاهما من الخضروات</span>
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            <input type="radio" name="q7" id="q7" value="yes">
            <span class="question">كلاهما من الفاكهة</span>
            <br><br>
            @error('q7') <p style="color:red;">{{$message}}</p>@enderror
            <hr><br><br>
            <p class="question"><strong>السؤال الثامن : </strong> ما وجة التشابة بين القطار و الدراجة ؟</p><br><br>
            <input type="radio" name="q8" id="q8" value="yes">
            <span class="question">كلاهما من المركبات</span>
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            <input type="radio" name="q8" id="q8" value="no">
            <span class="question">كلاهما من الأثاث</span>
            <br><br>
            @error('q8') <p style="color:red;">{{$message}}</p>@enderror
            <hr><br><br>
            <p class="question"><strong>السؤال التاسع : </strong> اطرح 7 من 100</p><br><br>
            <input type="radio" name="q9" id="q9" value="no">
            <span class="question">55</span>
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            <input type="radio" name="q9" id="q9" value="no">
            <span class="question">45</span>
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            <input type="radio" name="q9" id="q9" value="yes">
            <span class="question">93</span>
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            <input type="radio" name="q9" id="q9" value="no">
            <span class="question">83</span>
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            <br><br>
            @error('q9') <p style="color:red;">{{$message}}</p>@enderror
            <hr><br><br>
            <p class="question"><strong>السؤال العاشر : </strong> اطرح 7 من 45</p><br><br>
            <input type="radio" name="q10" id="q10" value="no">
            <span class="question">28</span>
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            <input type="radio" name="q10" id="q10" value="yes">
            <span class="question">38</span>
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            <input type="radio" name="q10" id="q10" value="no">
            <span class="question">88</span>
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            <input type="radio" name="q10" id="q10" value="no">
            <span class="question">93</span>
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            <br><br>
            @error('q10') <p style="color:red;">{{$message}}</p>@enderror
            <hr><br><br>
            <p class="question"><strong>السؤال الحادي عشر : </strong> اطرح 5 من 30</p><br><br>
            <input type="radio" name="q11" id="q11" value="yes">
            <span class="question">25</span>
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            <input type="radio" name="q11" id="q11" value="no">
            <span class="question">35</span>
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            <input type="radio" name="q11" id="q11" value="no">
            <span class="question">30</span>
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            <input type="radio" name="q11" id="q11" value="no">
            <span class="question">20</span>
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            <br><br>
            @error('q11') <p style="color:red;">{{$message}}</p>@enderror
            <hr><br><br>
            <p class="question"><strong>السؤال الثاني عشر : </strong> هل تجد صعوبة في اتخاذ القرارات حتى بالنسبة للأشياء اليومية مثل ما تأكله ، والملابس التي سترتديها ، ووضع الخطط مع العائلة / الأصدقاء ، وماذا تقرأ؟ </p><br><br>
            <input type="radio" name="q12" id="q12" value="yes">
            <span class="question">أبدًا</span>
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            <input type="radio" name="q12" id="q12" value="yes-1">
            <span class="question">أحيانا</span>
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            <input type="radio" name="q12" id="q12" value="no">
            <span class="question">دائما</span>
            <br><br>
            @error('q12') <p style="color:red;">{{$message}}</p>@enderror
            <hr><br><br>
            <p class="question"><strong>السؤال الثالث عشر : </strong> هل تواجه صعوبة في التركيز أو التركيز أثناء مشاهدة التلفزيون أو اللعب على هاتفك / جهازك اللوحي أو الاستماع إلى الموسيقى ؟ </p><br><br>
            <input type="radio" name="q13" id="q13" value="yes">
            <span class="question">أبدًا</span>
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            <input type="radio" name="q13" id="q13" value="yes-1">
            <span class="question">أحيانا</span>
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            <input type="radio" name="q13" id="q13" value="no">
            <span class="question">دائما</span>
            <br><br>
            @error('q13') <p style="color:red;">{{$message}}</p>@enderror
            <hr><br><br>
            <p class="question"><strong>السؤال الرابع عشر : </strong>  هل تنسى أسماء الأشياء المألوفة وتستخدم عبارات عامة مثل "أنت تعرف ما أعنيه" أو "هذا الشيء" ؟ </p><br><br>
            <input type="radio" name="q14" id="q14" value="yes">
            <span class="question">أبدًا</span>
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            <input type="radio" name="q14" id="q14" value="yes-1">
            <span class="question">أحيانا</span>
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            <input type="radio" name="q14" id="q14" value="no">
            <span class="question">دائما</span>
            <br><br>
            @error('q14') <p style="color:red;">{{$message}}</p>@enderror
            <hr><br><br>
            <p class="question"><strong>السؤال الخامس عشر : </strong> هل تجد أنك تفتقد الإشارات الاجتماعية ، مما قد يؤدي إلى عدم فهم ما يقوله الآخرون ، والضحك في الأوقات غير المناسبة ، والبقاء في موضوع ما على الرغم من عدم اهتمام الآخرين ، و / أو قول أشياء تعتبر مسيئة ؟  </p><br><br>
            <input type="radio" name="q15" id="q15" value="yes">
            <span class="question">أبدًا</span>
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            <input type="radio" name="q15" id="q15" value="yes-1">
            <span class="question">أحيانا</span>
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            <input type="radio" name="q15" id="q15" value="no">
            <span class="question">دائما</span>
            <br><br>
            @error('q15') <p style="color:red;">{{$message}}</p>@enderror
            <hr><br><br>
            <p class="question"><strong>السؤال السادس عشر : </strong>  هل يتم الخلط بينك وبين تذكر يوم الأسبوع والشهر والسنة والتواريخ المهمة و / أو هل تكرر نفسك في المحادثات ؟  </p><br><br>
            <input type="radio" name="q16" id="q16" value="yes">
            <span class="question">أبدًا</span>
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            <input type="radio" name="q16" id="q16" value="yes-1">
            <span class="question">أحيانا</span>
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            <input type="radio" name="q16" id="q16" value="no">
            <span class="question">دائما</span>
            <br><br>
            @error('q16') <p style="color:red;">{{$message}}</p>@enderror
            <hr><br><br>
            <p class="question"><strong>السؤال الثامن عشر : </strong>  هل تحتاج إلى مساعدة في ارتداء ملابسك ، وتذكر تناول الأدوية ، و / أو التعامل مع أموالك ؟  </p><br><br>
            <input type="radio" name="q17" id="q17" value="yes">
            <span class="question">أبدًا</span>
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            <input type="radio" name="q17" id="q17" value="yes-1">
            <span class="question">أحيانا</span>
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            <input type="radio" name="q17" id="q17" value="no">
            <span class="question">دائما</span>
            <br><br>
            @error('q17') <p style="color:red;">{{$message}}</p>@enderror
            <hr><br><br>
            <p class="question"><strong>السؤال الثامن عشر : </strong>  هل هذه الصعوبات تزداد سوءًا ؟  </p><br><br>
            <input type="radio" name="q18" id="q18" value="yes">
            <span class="question">أبدًا</span>
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            <input type="radio" name="q18" id="q18" value="yes-1">
            <span class="question">أحيانا</span>
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            <input type="radio" name="q18" id="q18" value="no">
            <span class="question">دائما</span>
            <br><br>
            @error('q18') <p style="color:red;">{{$message}}</p>@enderror
            <hr><br><br>
            <p class="question"><strong>السؤال التاسع عشر : </strong>  هل من السهل الخلط بين القيادة أو استخدام الأدوات؟ هل تضيع في أماكن مألوفة لك (مثل الحي الذي تسكن فيه أو محل البقالة)؟  </p><br><br>
            <input type="radio" name="q19" id="q19" value="yes">
            <span class="question">أبدًا</span>
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            <input type="radio" name="q19" id="q19" value="yes-1">
            <span class="question">أحيانا</span>
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            <input type="radio" name="q19" id="q19" value="no">
            <span class="question">دائما</span>
            <br><br>
            @error('q19') <p style="color:red;">{{$message}}</p>@enderror
            <hr><br><br>
            <p class="question"><strong>السؤال العشرون : </strong>  هل تعكس هذه الصعوبات تغييرات عن طريقة أدائك قبل بضع سنوات ؟  </p><br><br>
            <input type="radio" name="q20" id="q20" value="yes">
            <span class="question">أبدًا</span>
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            <input type="radio" name="q20" id="q20" value="yes-1">
            <span class="question">أحيانا</span>
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            <input type="radio" name="q20" id="q20" value="no">
            <span class="question">دائما</span>
            <br><br>
            @error('q20') <p style="color:red;">{{$message}}</p>@enderror
            <br><br>
            <input type="submit" value="إرسال" class="submit">
            <br><br><hr><br><br>
            <button class="submit2"><a href="/test-results" style="font-size: 18px">صفحة النتائج</a></button>
        </form>
        </fieldset>
        @endif
        
    </div>
</div>    
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