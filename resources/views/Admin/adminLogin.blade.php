<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <title>log in</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            font-family: 'Times New Roman', Times, serif;
        }
        
        body {
            width: 100%;
            margin: 0;
            padding: 0;
            font-family: 'Times New Roman', Times, serif;
            background-image: url("https://cdn.al-ain.com/images/2020/6/12/121-101148-alzheimer-s-disease-symptoms-causes_350x200.jpg");
        }
        
        .clear_fix {
            clear: both;
        }
        
        .container {
            width: 1000px;
            ;
            margin: auto;
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
        
        .navbar .container2 .image img {
            float: left;
            padding-top: 15px;
            margin-left: 0px
        }
        
        .navbar .container2 .icon ul {
            list-style: none;
        }
        
        .navbar .container2 .icon ul li {
            float: left;
            padding: 30px;
            margin-left: 0px;
        }
        
        .navbar .container2 .icon ul li a {
            color: white;
            text-decoration: none;
            font-family: 'Times New Roman', Times, serif;
            font-weight: bold;
            font-size: 24px;
        }
        
        .navbar .container2 .icon ul li a:hover {
            color: black;
        }
        /*end navbar*/
        
        body {
            font-family: 'Times New Roman', Times, serif;
            background-repeat: no-repeat;
            background-position: center center;
            background-attachment: fixed;
            background-size: cover;
            background-color: rgb(243, 235, 235);
        }
        
        .log_in .container {
            width: 50%;
            height: 800px;
            margin-top: 30px;
        }
        
        .log_in .container h2 {
            color: rgb(14, 39, 103);
            font-size: 40px;
            margin-left: 30px;
            text-align: center;
            font-family: 'Times New Roman', Times, serif;
            margin-top: -30px;
        }
        
        .log_in .container .log {
            font-weight: bold;
            text-align: center;
            margin-top: 17px;
            font-size: 25px;
            padding-left: 50px;
            padding: 10px 20px;
            background: none;
            border: 3px solid dimgrey;
            color: rgb(14, 39, 103);
            border-radius: 50px;
            cursor: pointer;
            text-decoration: none;
            font-family: 'Times New Roman', Times, serif;
        }
        
        .log_in .container .form {
            font-weight: bold;
            width: 80%;
            margin-right: 45px;
            text-align: center;
            float: right;
            margin-top: 15px;
            padding: 0px 20px;
            border: 2px solid dimgrey;
            background: none;
            color: dimgrey;
            border-radius: 50px;
            cursor: pointer;
            text-decoration: none;
            font-family: 'Times New Roman', Times, serif;
            margin-bottom: 100px;
        }
        
        .log_in .container .form .login :hover {
            background: #8199e8;
            color: #fff;
            border-color: dimgrey;
        }
        
        input {
            border-radius: 30px;
            font-size: 40px;
            padding: 15px 50px;
        }
        
        .log_in .container .logbtn .registerbtn  {
            font-weight: bold;
            color: black;
            border-radius: 60px;
            cursor: pointer;
            text-decoration: none;
            font-family: 'Times New Roman', Times, serif;
            font-size: 25px;
            padding: 10px 30px;
            background-color: #8199e8;
        }
        
        .log_in .container .logbtn .registerbtn a:hover {
            background: #8199e8;
            color: #fff;
            border-color: black;
        }
        article{
            padding: 10px;
            background-color: pink;
            border-radius: 12px;
        }
        .error{
            font-size:24px;
            color:red;
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
        /*end log in*/
    </style>
</head>

<body>
    <!-- start header -->
    <div class="navbar">
        <div class="container2">
            <div class="image">
                <img src="" width="" />
            </div>
            <div class="icon" style="padding-left:80px">
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

            </div>

        </div>
    </div>
    </div>
    <!--end header-->
    <!--start sign up-->

    <div class="log_in ">
        <div class="container">
            <h2><br><br> <br>{{__('myCustom.admin-log-in')}}</h2>
            <form class="form" action="{{route('admin.store')}}" method="POST"> 
                @csrf
                <br>
                <div class="login">
                    @if(Session('locale') == 'ar')
                    <input type="email" name="Mail" style="text-align:right;" placeholder="{{__('myCustom.email')}} " required>
                    <br> <br>
                    @error('Mail') <p class="error">{{$message}}</p>@enderror
                    <input type="password" name="Pass" style="text-align:right;" placeholder="{{__('myCustom.password')}}" required>
                    <br> 
                    @error('Pass') <p class="error">{{$message}}</p>@enderror
                    <br>
                    @else
                    <input type="email" name="Mail"  placeholder="{{__('myCustom.email')}} " required>
                    <br> <br>
                    @error('Mail') <p class="error">{{$message}}</p>@enderror
                    <input type="password" name="Pass"  placeholder="{{__('myCustom.password')}}" required>
                    <br> 
                    @error('Pass') <p class="error">{{$message}}</p>@enderror
                    <br> 
                    @endif
                    @if($message = Session::get('message'))
        
                    <article style="color:red;">{{$message}}</article>
                    
                     @endif
                     @if($logout = Session::get('logout'))
        
                    <article style="color:white;font-size:20px; padding:20px; background-color:#009933; border-radius:12px;">{{$logout}}</article>
        
                    @endif
                     <br>
                    
                </div>
                <div class="logbtn">
                    <input type="submit" value="{{__('myCustom.login')}}" class="registerbtn">
                </div><br>
                <br>
        </div>
        <br>
        </form>
    </div>

    </div>

    <!--end sign up -->

    <!--start footer-->
    <div class="end_footer " style="background-color: #8199e8; text-align: center; width: 100%;height: 100px; ">


        <p style="color: rgb(255, 255, 255); font-size: large; margin-top: 100px; margin-left: 380px ; padding-top: 5px; margin-right: 330px ;">&copy;{{__('myCustom.copyright')}}
            <br><a style="color: rgb(255, 255, 255); " href="# ">{{__('myCustom.part-one')}}<br>
            {{__('myCustom.part-two')}}</a>
        </p>
        </p>
    </div>

    <!--end footer-->
</body>

</html>