<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <title>Admin</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            font-family: 'Times New Roman', Times, serif;
        }
        
        body {
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
            margin-left: 0px;
        }
        
        .navbar .container2 .icon ul {
            list-style: none;
        }
        
        .navbar .container2 .icon ul li {
            float: left;
            padding: 20px;
            margin-left: 0px;
        }
        
        .navbar .container2 .icon ul li a {
            color: #fff;
            text-decoration: none;
            font-family: 'Times New Roman', Times, serif;
            font-weight: bold;
            font-size: 24px;
        }
        
        .navbar .container2 .icon ul li a:hover {
            color: black;
        }
        /*end navbar*/
        /*start section two*/
        
        .sectiontwo .container {
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
            width: 50%;
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
        article{
            padding: 35px;
            background-color: #009933;
            border-radius: 12px;
            text-align: center;
            position: absolute;
            margin-top: 100px;
            margin-left: 300px;
            width: 1000px;
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
        /*end section two */
    </style>
</head>

<body>
    <!-- start header -->
    <div class="navbar">
        <div class="container2">
            <div class="image">
                <img src="" width="" />
            </div>
            <div class="icon" style="padding-left:100px">
            @if(session('locale') == 'ar')
                <ul>
                    <li><button class="registerbtn2"><a href="{{route('lang','en')}}" style="font-size: 18px">English</a></button></li>
                    <li><button class="registerbtn2"><a href="{{route('lang','ar')}}" style="font-size: 18px">اللغة العربية</a></button></li> 
                    <li><form action="{{route('Admin.destroy', session('user_id'))}}" method="POST">
                        @csrf
                        @method('delete')
                        <input type="submit" value="{{__('myCustom.logout-btn')}}" class="logout">
                    </form></li>
                    <li><a href="/show-users">{{__('myCustom.show-user')}}</a></li>
                    <li><a href="/show-messages">{{__('myCustom.show-message')}}</a></li>
                    <li><a href="/instruction/create"> {{__('myCustom.add-instruction')}} </a></li>
                    <li><a href="/instruction"> {{__('myCustom.instruction')}}</a></li>
                    <li><a href="/"> {{__('myCustom.alzheimer')}}</a></li>
                    <li><a href="/admin-home">{{__('myCustom.home')}} </a></li>
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
                    <li><button class="registerbtn2"><a href="{{route('lang','en')}}" style="font-size: 18px">English</a></button></li>
                    <li><button class="registerbtn2"><a href="{{route('lang','ar')}}" style="font-size: 18px">اللغة العربية</a></button></li>
                </ul>  
                @endif

            </div>

        </div>
    </div>

    <!--end header-->
    <!--start section two -->
    <div id="Services">
        @if($message = Session::get('message'))
        
        <article style="color:white; font-size:20px;">{{$message}}</article><br>

        @endif
        <div class="sectiontwo">
            <div class="container">
                <div class="imagesalma">
                    <br><br> <img src="https://th.bing.com/th/id/R.04284984176bfb478ca7cb2aab344b80?rik=hUBzERT6gvhKHA&pid=ImgRaw&r=0" height="510px" ; width="500px" ; />
                </div>
                <div class="sectiontwosalma" style=" margin-right:0px">
                    @if(session('locale') == 'ar')
                    <h2 style="font-size:40px; color:rgb(74, 74, 126); padding-top:60px; padding-left:5px; padding-right:1px; text-align:right;">{{__('myCustom.caregivers')}}</h2>
                    <div class="paragserv">
                        <br>
                        <p style="font-size:18px; text-align: justify; padding-bottom:10px; text-align:right"> {{__('myCustom.caregivers-text')}}</span>
                        </p>

                        <iframe width="696" height="300" src="https://www.youtube.com/embed/O9726ZlezE0" title="Alzheimer's Disease: A Caregiver's Perspective" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    @else
                    <h2 style="font-size:40px; color:rgb(74, 74, 126); padding-top:60px; padding-left:5px; padding-right:1px;">{{__('myCustom.caregivers')}}</h2>
                    <div class="paragserv">
                        <br>
                        <p style="font-size:18px; text-align: justify; padding-bottom:10px;"> {{__('myCustom.caregivers-text')}}</span>
                        </p>

                        <iframe width="696" height="300" src="https://www.youtube.com/embed/O9726ZlezE0" title="Alzheimer's Disease: A Caregiver's Perspective" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    @endif

                </div>
            </div>
        </div>
    </div>

    <!--end section two -->






</body>

</html>