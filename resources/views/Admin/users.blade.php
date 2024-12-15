<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <title>show users</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            font-family: 'Times New Roman', Times, serif;
        }
        
        body {
            background-image: url(" https://img.youm7.com/large/201709261116321632.jpg");
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
            margin-left: 200px;
     
        }
        
        .but {
            padding-top: 3px;
            padding-bottom: 3px;
        }
        
        .button {
            border: none;
            color: white;
            padding: 8px 10px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin-left: 15%;
            transition-duration: 0.5s;
            cursor: pointer;
        }
        
        .button1 {
            background-color: #1b2c5c;
            color: white;
            border: 0px solid #c6c4c9;
        }
        
        .button1:hover {
            background-color: #ffffff;
            color: black;
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
        .admin-a
        {
            color:white;
            text-decoration: none;
        }
        .admin-a:hover
        {
            color: black;
        }
    </style>
</head>

<body>
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



    <div class="tabl">
        <h2 style="padding-bottom: 25px; font-size: 50px; color: #1b2c5c ">{{__('myCustom.user-title')}}</h2>

        <table style="width:40%">
            @if(Session('locale') == 'en')
            <tr>
                <th>{{__('myCustom.user-name')}}</th>
                <th>{{__('myCustom.user-email')}}</th>
                <th>{{__('myCustom.action')}}</th>
            </tr>
            @foreach($users as $user)
            <tr>
                <td>{{$user->user}}</td>
                <td>{{$user->email}}</td>
                <td>
                    <form action="{{route('user.destroy',$user->id)}}"method="POST">
                        @csrf
                        @method('delete')
                        <div class="but"><input type="submit" value="{{__('myCustom.user-delete')}}" class="button button1"></div>
                    </form>
                </td>

            </tr>
            @endforeach
            @else
            <tr>
                <th>{{__('myCustom.action')}}</th>
                <th>{{__('myCustom.user-email')}}</th>
                <th>{{__('myCustom.user-name')}}</th>
            </tr>
            @foreach($users as $user)
            <tr>
                <td>
                    <form action="{{route('user.destroy',$user->id)}}"method="POST">
                        @csrf
                        @method('delete')
                        <div class="but"><input type="submit" value="{{__('myCustom.user-delete')}}" class="button button1"></div>
                    </form>
                </td>
                <td>{{$user->email}}</td>
                <td>{{$user->user}}</td>

            </tr>
            @endforeach
            @endif

            
        </table>
        <br><br><br>
        <button class="button button1"><a href="/create-admin" class="admin-a">{{__('myCustom.add-admin')}}</a></button>
    </div>
    
    <!--start footer-->
    <div class="end_footer " style="background-color: #8199e8; text-align: center; width: 1519px;height: 100px; ">


        <p style="margin: 0%; color: rgb(255, 255, 255); font-size: large; margin-top: 100px; margin-left: 40px ; padding-top: 5px;margin-top:500px; ">&copy; {{__('myCustom.copyright')}}
            <br><a style="color: rgb(255, 255, 255); " href="# "> {{__('myCustom.part-one')}}<br>
            {{__('myCustom.part-two')}}</a>
        </p>
    </div>

    <!--end footer-->






</body>

</html>