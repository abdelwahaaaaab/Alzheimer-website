<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <title>show message</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            font-family: 'Times New Roman', Times, serif;
        }
        
        body {
            background-image: url(" https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEjmIUq4Q9SHDh8SgKzARo8xwVPNCkboa4l9bL54DoklRcbVe9u2ZG4D0SfeT4J-usvPorWIL6pJkFl-cHdIofb5VarLAxKEYdL6lgBV-vLRHj-dDCd2TalcTpCH0k6AVetFKpffJ_AHIjKvbgBBHjZ90p3AueWIQNknRAqbP1-2oiLZLwWM4y5z8EE0/w1200-h630-p-k-no-nu/%D8%AA%D8%B5%D9%85%D9%8A%D9%85%20%D8%A8%D8%AF%D9%88%D9%86%20%D8%B9%D9%86%D9%88%D8%A7%D9%86%20(1)%20(2).png");
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
        .email
        {
            color:white;
            text-decoration: none;
        }
        .email:hover
        {
            color:black;
        }
    </style>
</head>

<body>
    <!-- start header -->
    <div class="navbar">
        <div class="container2">
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
    </div>
    <!--end header-->



    <div class="tabl">
        <h2 style="padding-bottom: 25px; font-size: 50px; color: #0c1d4b "> {{__('myCustom.message-title')}}</h2>

        <table style="width:53%">
            <tr>
                <th>{{__('myCustom.user-name')}}</th>
                <th>{{__('myCustom.message-subject')}}</th>
                <th>{{__('myCustom.user-message')}}</th>
                <th colspan="2">{{__('myCustom.action')}}</th>
            </tr>
            @foreach($messages as $message)
            <tr>
                @foreach($users as $user)
                @if($message->client_id == $user->id)
                <td style="padding: 5px 50px;">{{$user->user}} </td>
                <?php $email = $user->email ?>
                <?php $flag = true ?>
                @break
                @endif
                @endforeach
                @if($flag == true)
                <td>{{$message->subject}}</td>
                <td>{{$message->message}}</td>
                <td>
                    <div class="but"><button class="button button1"><a href="mailto:{{$email}}" class="email">{{__('myCustom.respond')}}</a></button></div>                
                </td>
                
                <td>
                    <form action="{{route('message.destroy', $message->id)}}" method="POST">
                        @csrf
                        @method('delete')
                        <div class="but"><input type="submit" value="{{__('myCustom.delete-message')}}" class="button button2"></div>
                    </form>
                </td>
                @endif
            </tr>
            @endforeach
        </table>

    </div>
    <!--start footer-->
    <div class="end_footer " style="margin-top:400px; background-color: #8199e8; text-align: center; width: 100%;height: 100px; ">


        <p style="margin: 0%; color: rgb(255, 255, 255); font-size: large;  margin-top: 100px; margin-left: 40px ; padding-top: 5px; ">&copy; {{__('myCustom.copyright')}}
            <br><a style="color: rgb(255, 255, 255); " href="# ">{{__('myCustom.part-one')}}<br>
            {{__('myCustom.part-two')}}</a>
        </p>
    </div>

<!--end footer-->






</body>

</html>

