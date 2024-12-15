<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Alzheimer</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">


</head>
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
        background-color: #f0eaea;
    }
    
    .clear_fix {
        clear: both;
    }
    
    .container2 {
        width: 1000px;
        margin-left: 100px;
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
    
    .navbar  .image img {
        float: left;
        padding-top: 15px;
        margin-left: 0px
    }
    
    .navbar  .icon ul {
        list-style: none;
        margin-left: -80px;
    }
    
    .navbar  .icon ul li {
        float: left;
        padding: 25px;
        margin-left: 0px;
    }
    
    .navbar  .icon ul li a {
        color: #fff;
        text-decoration: none;
        font-family: 'Times New Roman', Times, serif;
        font-weight: bold;
        font-size: 21px;
    }
    
    .navbar  .icon ul li a:hover {
        color: black;
    }
    /*end navbar*/
    /*start slider*/
    
    .slider {
        height: 800px;
        background-image: url('../i3.png');
        background-size: cover;
        margin-bottom: 0;
    }
    
    .slider .intro h1 {
        padding-top: 350px;
        float: left;
        color: #fff;
        font-family: arial;
        font-size: 60px;
        margin-left: 100px
    }
    
    .navbar  .icon .norsign a {
        font-weight: bold;
        float: right;
        margin-top: 17px;
        padding: 10px 20px;
        margin-right: 50px;
        background: none;
        border: 3px solid dimgrey;
        color: dimgrey;
        border-radius: 50px;
        cursor: pointer;
        text-decoration: none;
        font-family: 'Times New Roman', Times, serif;
        font-size: 20px;
    }
    
    .navbar  .icon .norsign a:hover {
        background: dimgrey;
        color: #fff;
        border-color: dimgrey;
    }
    
    .navbar  .icon .login a {
        font-weight: bold;
        float: left;
        margin-top: 20px;
        margin-left: 77px;
        font-size: 20px;
        padding: 10px 20px;
        padding-right: 20px;
        margin-right: 50px;
        background: none;
        border: 3px solid dimgrey;
        color: dimgrey;
        border-radius: 50px;
        cursor: pointer;
        text-decoration: none;
        font-family: 'Times New Roman', Times, serif;
    }
    
    .navbar  .icon .login a:hover {
        background: dimgrey;
        color: #fff;
        border-color: dimgrey;
    }
    /*end slider*/
    /*start section one */
    
    .sectionone .container {
        background-color: #f0eaea;
        padding-top: 50px;
        padding-bottom: 100px;
        width: 100%;
        height: 500px;
    }
    
    .sectionone .container .sectiononenora {
        width: 50%;
        float: left;
    }
    
    .sectionone .container .sectiononenora h1 {
        color: #756f6c;
        font-size: 35px;
        margin-left: 30px;
    }
    
    .sectionone .container .sectiononenora p {
        text-align: justify;
        font-size: 15px;
        line-height: 30px;
        color: black;
        margin-left: 30px;
    }
    
    .sectionone .container .sectiononenora span {
        font-weight: bold;
    }
    
    .sectionone .container .imagenora {
        width: 62%;
        float: right;
    }
    
    .sectionone .container .imagenora img {
        margin-left: 300px;
        margin-top: -350px;
        box-shadow: 13px 15px 15px pink;
        padding-left: 100px;
    }
    /*end section one */
    /*start section two*/
    
    .sectiontwo .container {
        background-color: #f0eaea;
        padding-top: 70px;
        padding-bottom: 70px;
        width: 100%;
        height: 500px;
    }
    
    .sectiontwo .container .imagesalma {
        width: 50%;
        float: left;
    }
    
    .sectiontwo .container .imagesalma img {
        box-shadow: 5px 5px 5px pink;
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
        margin-left: 30px;
        margin-top: -20px;
    }
    
    .sectiontwo .container .sectiontwosalma p {
        text-align: justify;
        font-size: 15px;
        line-height: 25px;
        color: black;
        margin-left: 30px;
    }
    /*end section two */
    /*start section three */
    
    .threeimages .container {
        padding-top: 60px;
        padding-bottom: 200px;
        height: 400px;
        background-color: #f0eaea;
        width: 100%;
    }
    
    .threeimages .container .ourphoto div {
        float: left;
        margin-left: 20px;
        width: 30%;
        text-align: center
    }
    
    .threeimages .container h2 {
        color: #756f6c;
        font-size: 35px;
        text-align: center;
        margin-left: 30px;
        margin-top: -20px;
    }
    
    .threeimages .container .ourphoto div p {
        text-align: center;
        color: rgb(22, 21, 21);
        padding: 17px;
    }
    
    .threeimages .container .ourphoto div img {
        margin-left: 50px;
        margin-bottom: 20px;
        padding: 3px;
        background-color: pink;
        border: 1px solid pink;
        box-shadow: 10px 10px 10px rgb(221, 172, 180);
    }
    
    .threeimages .container .ourphoto div img:hover {
        transform: scale(1.3);
        opacity: 45%;
        transition: 1s;
    }
    /*end section three */
    /*start section four */
    
    .container2 {
        background-color: #f0eaea;
        width: 100%;
    }
    
    .container2 h2 {
        color: #756f6c;
        font-size: 35px;
        text-align: center;
        margin-left: 30px;
        margin-top: 70px;
        margin-bottom: 50px;
    }
    
    .row {
        width: 100%;
        margin-top: 0px;
        margin-right: 0px;
        margin-bottom: 0px;
        margin-left: 0px;
        padding-top: 0px;
        padding-right: 0px;
        padding-bottom: 0px;
        padding-left: 0px;
        display: inline-block
    }
    
    .row.blockDisplay {
        display: block;
    }
    
    .column_half {
        width: 50%;
        float: left;
        margin-top: 0px;
    }
    
    .columns {
        width: 25%;
        float: left;
        color: black;
        line-height: 24px;
        padding-top: 10px;
        padding-bottom: 10px;
        text-align: justify;
        margin-top: 15px;
        margin-bottom: 15px;
        padding-left: 0px;
        padding-right: 0px;
        margin-left: 0px;
        margin-right: 0px;
    }
    
    .row .columns p {
        padding-left: 10%;
        padding-right: 10%;
    }
    
    .container2 .columns h4 {
        text-align: center;
        color: #01B2D1;
    }
    
    .thumbnail {
        width: 100px;
        border-radius: 200px;
        height: 100px;
        margin-left: auto;
    }
    
    .thumbnail_align {
        text-align: center;
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
        padding: 20px 70px;
        width: 500px;
        background-color: lightgreen;
        border-radius: 12px;
        text-align: center;
        position: absolute;
        margin: 110px 450px;
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
    /*end section four */
</style>


<body>
    <!-- start header -->
    <div class="navbar">
       
       
            <div class="icon" style="padding-left:150px">
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
                @elseif(Session('ALoggedIn'))
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
                    <li><a href="/admin-home">{{__('myCustom.home')}} </a></li>
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
    <!--end header-->

    <div id="Providers">
        <div class="container2">
     
            <div class="row">
            @if($message = Session::get('message'))
            
                <article style="color:darkgreen;">{{$message}}</article>

            @endif


                <h1 style="padding-top: 110px; padding-bottom: 50px; padding-left:630px;  font-size:55px; color:rgb(14, 39, 103);"> <br>{{__('myCustom.alzheimer')}} </h1>

                @if(session('locale') == 'ar')
                <div class="columns" style="direction: rtl;">
                @else
                <div class="columns">
                @endif
                    <p class="thumbnail_align"> <img src="https://th.bing.com/th/id/OIP.IqJyV76tcyF0ktoQEwdRzAHaE-?pid=ImgDet&rs=1" alt="" class="thumbnail" /> </p>
                    <h4>{{__('myCustom.alzheimer-p1')}} </h4>
                    <p>{{__('myCustom.alzheimer-p2')}} </p>
                </div>
                @if(session('locale') == 'ar')
                <div class="columns" style="direction: rtl;">
                @else
                <div class="columns">
                @endif
                    <p class="thumbnail_align"> <img src="https://www.qposts.com/wp-content/uploads/2021/09/0-9.jpg" alt="" class="thumbnail" /> </p>
                    <h4>{{__('myCustom.alzheimer-p3')}} </h4>
                    <p>{{__('myCustom.alzheimer-p4')}}</p>
                </div>
                @if(session('locale') == 'ar')
                <div class="columns" style="direction: rtl;">
                @else
                <div class="columns">
                @endif
                    <p class="thumbnail_align"> <img src="https://cdni.rt.com/media/pics/2022.10/original/633d6c9f4c59b74c577a7340.jpg" alt="" class="thumbnail" /> </p>
                    <h4>{{__('myCustom.alzheimer-p5')}} </h4>
                    <p>{{__('myCustom.alzheimer-p6')}}</p>
                </div>
                @if(session('locale') == 'ar')
                <div class="columns" style="direction: rtl;">
                @else
                <div class="columns">
                @endif
                    <p class="thumbnail_align"> <img src="https://media.gemini.media/img/large/2017/9/29/2017_9_29_16_12_42_573.jpg" alt="" class="thumbnail" /> </p>
                    <h4>{{__('myCustom.alzheimer-p7')}}</h4>
                    <p>{{__('myCustom.alzheimer-p8')}}</p>
                </div>
            </div>

        </div>

    </div>
    <!--start footer-->
    <div class="end_footer " style="background-color: #8199e8; text-align: center; width: 1519px;height: 100px; ">


        <p style="margin: 0%; color: rgb(255, 255, 255); font-size: large; margin-top: 100px; margin-left: 40px ; padding-top: 5px; ">&copy;{{__('myCustom.copyright')}}
    <br><a style="color: rgb(255, 255, 255); " href="# ">{{__('myCustom.part-one')}}<br>
    {{__('myCustom.part-two')}}</a>
        </p>
    </div>

    <!--end footer-->

</body>

</html>