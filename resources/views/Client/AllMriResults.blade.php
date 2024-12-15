<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title> MRI Results </title>
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
        .sub-sub-header
        {
            text-align: center;
            font-size: 20px;
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
        th
        {
            background-color:#8199e8;
            color:white;
        }
        th,
        td {
            padding: 10px;
            border: 2px solid #0c1d4b;
            font-size: larger;
        }
        
        .tabl {
            width: 100%;
            padding-top: 160px;
            margin-left: 250px;
        }
        article{
            padding: 35px;
            background-color: #009933;
            border-radius: 12px;
            text-align:center;
        }
        .button {
            border: none;
            color: white;
            padding: 4px 10px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 18px;
            margin-left: 4%;
            margin-right: 5px;
            transition-duration: 0.5s;
            cursor: pointer;
        }
        
        .button1 {
            background-color: lightgreen;
            color: white;
           
        }
        
        .button2
        {
            
            background-color: #c62a32;
            color: white;
          
        }
  
        
        .button1:hover, .button2:hover {
            background-color: #ffffff;
            color: black;
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
    <!--start slider-->
<div class="container2">
    <div id="slider" style=" padding-top:150px;"> 
      <h1 class="header">{{__('myCustom.mri-title')}}</h1><br><br>
      @if($message = Session::get('message'))
        
        <article style="color:white; font-size:20px;">{{$message}}</article><br> 

      @endif
      
      <br><br>
    

      <table style="width:53%">
            @if(Session('locale') == 'en')
            <tr>
                <th>{{__('myCustom.mri_number')}}</th>
                <th>{{__('myCustom.user-name')}}</th>
                <th>{{__('myCustom.mri_result')}}</th>
                <th>{{__('myCustom.time-test')}}</th>
            </tr>
            <?php $i = 1; ?>
            
            @foreach($results as $res)
            @if($res->client_id == Session('user_id'))
            <tr>
                <td style="padding: 5px 50px;">{{$i}} </td>
                <td>{{$res->patient_name}}</td> 
                <td>{{$res->mri_result}}</td>
                <td>{{$res->created_at}}</td>
            </tr>
            <?php $i ++; ?>
            @endif
            @endforeach
            @else
            <tr>
                <th>{{__('myCustom.time-test')}}</th>
                <th>{{__('myCustom.mri_result')}}</th>
                <th>{{__('myCustom.user-name')}}</th>
                <th>{{__('myCustom.mri_number')}}</th>
            </tr>
            <?php $i = 1; ?>
            
            @foreach($results as $res)
            @if($res->client_id == Session('user_id'))
            <tr>
                <td>{{$res->created_at}}</td>
                <td>{{$res->mri_result_ar}}</td>
                <td>{{$res->patient_name}}</td> 
                <td style="padding: 5px 50px;">{{$i}} </td>
            </tr>
            <?php $i ++; ?>
            @endif
            @endforeach
            @endif
        </table>

    
    </div>
</div><br><br>
    <!--end section one -->

 <!--start footer-->
 <div class="end_footer " style="background-color: #8199e8; text-align: center; width: 100%;height: 100px; ">


<p style="color: rgb(255, 255, 255); font-size: large; margin-top: 300px; margin-left: 380px ; padding-top: 5px; margin-right: 330px ;">&copy; {{__('myCustom.copyright')}}
    <br><a style="color: rgb(255, 255, 255); " href="# ">{{__('myCustom.part-one')}}<br>
    {{__('myCustom.part-two')}}</a>
</p>
</div>


<!--end footer-->
</body>

</html>