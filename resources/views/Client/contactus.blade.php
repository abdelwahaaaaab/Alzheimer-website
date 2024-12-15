<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>contact</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            font-family: 'Times New Roman', Times, serif;
        }
        
        body {
            background-image: url("https://png.pngtree.com/thumb_back/fw800/background/20190223/ourmid/pngtree-blue-gradient-ink-watercolor-background-colorbluelight-bluedark-blueblue-image_85975.jpg");
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
        
        .container {
            width: 1000px;
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
            color: #fff;
            text-decoration: none;
            font-family: 'Times New Roman', Times, serif;
            font-weight: bold;
            font-size: 21px;
        }
        
        .navbar .container2 .icon ul li a:hover {
            color: black;
            cursor: pointer;
        }
        /*end navbar*/
        
        button[type="submit"] {
            padding: 7px;
            font-size: 17px;
        }
        
        button {
            border-style: double
        }
        
        form {
            display: inline
        }
        
        .form {
            width: 300px;
            float: right;
            /*position: absolute;*/
            left: 350px;
            top: 25px
        }
        
        textarea {
            border-radius: 7px;
        }
        /*start section two*/
        
        .sectiontwo .container {
            background-color: ;
            padding-top: 150px;
            padding-bottom: 0px;
            width: 100%;
            height: 300px;
        }
        
        .sectiontwo .container .imagesalma {
            width: 40%;
            float: left;
        }
        
        .sectiontwo .container .imagesalma img {
            box-shadow: rgb(39, 185, 247);
            margin-right: 50px;
            padding-left: 30px;
            
        }
        
        .sectiontwo .container .sectiontwosalma {
            width: 35%;
            float: left;
    
        }
        
        .sectiontwo .container .sectiontwosalma h2 {
            color: #756f6c;
            font-size: 35px;
            margin-left: 20px;
            margin-top: -20px;
        }
        
        .sectiontwo .container .sectiontwosalma p {
            text-align: justify;
            font-size: 15px;
            line-height: 25px;
            color: black;
            margin-left: 0px;
        }
        /*end section two */
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
        .btn
        {
            background-color:#8199e8;
            color:white;
            border-radius:12px;
        }
        .btn:hover
        {
            cursor:pointer;
        }
        textarea
        {
            padding:10px;
            font-size: 18px;
            border-radius:12px;
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
        
    </style>

</head>

<body>
    <!-- start header -->
    <div class="navbar" style="padding-top: 0px; ">
        <div class="container2">
            <div class="image">
                <img src="" width="60px" />
            </div>
            <div class="icon" style="padding-left:100px">
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

    <!--start section two -->
    <div id="Services">
        <div class="sectiontwo">
            <div class="container">
                <div class="imagesalma">
                    <br><br> <img src="https://cdn1-m.alittihad.ae/store/archive/image/2021/5/7/bcf5862a-201b-434d-9918-dff3fa3976d4.jpg" height="220px" ; width="580px" ; /><br><br>
                    <p style="padding-left: 28px; font-size:24px;text-align: justify;">{{__('myCustom.contact-title')}}</p><br>
                    <p style="padding-left: 28px; font-size:22px;">{{__('myCustom.contact-info')}} &nbsp;<strong>{{__('myCustom.info')}}</strong></p><br>
                    <p style="padding-left: 28px; font-size:15px;"><i class="fa fa-envelope-o"></i>&nbsp; info@hospitalplus.com</p><br>
                    <p style="padding-left: 28px; font-size:15px;"><i class="fa fa-phone"></i> &nbsp; +3212345678</p><br>
                    <p style="padding-left: 28px; font-size:15px;"><i class="fa fa-phone"></i> &nbsp; +3212345678</p><br>
                    <i style="padding-left: 28px; " class="fa fa-facebook-f"></i>&nbsp;
                    <i class="fa fa-twitter"></i>&nbsp;
                    <i class="fa fa-instagram"></i>&nbsp;
                    <i class="fa fa-youtube"></i>&nbsp;
                    <i class="fa fa-google"></i>&nbsp;
                    <i class="fa fa-linkedin"></i>&nbsp;
                    <i class="fa fa-pinterest"></i>
                </div>
                @if(session('locale') == 'ar')
                <div class="sectiontwosalma" style="padding-left: 150px;">
                @else
                <div class="sectiontwosalma">
                @endif
                    <div class="paragserv" >
                        <br>
                        <div class="form" style="padding-top: 160px;padding-left: 500px;">
                            <!--start form-->
                            @if(session('locale') == 'ar')
                            <form action="{{route('contact.store')}}" method="POST" style="direction:rtl;">
                            @else
                            <form action="{{route('contact.store')}}" method="POST">
                            @endif
                                @csrf
                                <div class="form-group ">
                                    
                                    @if(session('locale') == 'ar')
                                    <label style="font-size:26px ; color:rgb(22, 22, 73);" for="subject">{{__('myCustom.subject')}}</label><br>
                                    <input style="height: 30px; width:200px; padding-right:20px; text-align: right; border-radius: 20px; font-size: 18px;" type="text" class="form-control" id="subject" name="subject" value="{{old('subject')}}">
                                    @error('subject') <p style="color:red;">{{$message}}</p>@enderror
                                </div><br>
                                <div class="form-group">
                                    <label style="font-size:26px ; color:rgb(22, 22, 73);" for="exampleInputmessage">{{__('myCustom.message')}}</label>
                                    <textarea style="margin-top:4px; text-align: right;" rows="10" cols="50" name="message">{{old('message')}}</textarea>
                                    @error('message') <p style="color:red;">{{$message}}</p>@enderror
                                </div><br>
                                @else
                                <label style="font-size:26px ; color:rgb(22, 22, 73);" for="subject">{{__('myCustom.subject')}}</label><br>
                                <input style="height: 30px; width:200px; padding-left:20px; border-radius: 20px; font-size: 18px;" type="text" class="form-control" id="subject" name="subject" value="{{old('subject')}}">
                                    @error('subject') <p style="color:red;">{{$message}}</p>@enderror
                                </div><br>
                                <div class="form-group">
                                    <label style="font-size:26px ; color:rgb(22, 22, 73); " for="exampleInputmessage" >{{__('myCustom.message')}}</label>
                                    <textarea style="margin-top:4px; " rows="10" cols="50" name="message">{{old('message')}}</textarea>
                                    @error('message') <p style="color:red;">{{$message}}</p>@enderror
                                @endif
                                <button type="submit" class="btn btn-primary" style="font-size:23px ;">{{__('myCustom.send-message')}}</button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!--end section two -->
    <!--start footer-->
    <div class="end_footer " style="background-color: #8199e8; text-align: center; width: 1519px;height: 100px; margin-top:400px">
        <p style="margin: 0%; color: rgb(255, 255, 255); font-size: large; margin-top: 100px; margin-left: 40px ; padding-top: 5px; ">&copy; {{__('myCustom.copyright')}}
            <br><a style="color: rgb(255, 255, 255); " href="# ">{{__('myCustom.part-one')}}<br>
            {{__('myCustom.part-two')}}</a>
        </p>
    </div>

<!--end footer-->

</html>