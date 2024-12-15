<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <title>Instructions</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            font-family: 'Times New Roman', Times, serif;
        }
        
        body {
            background-image: url("https://halateb.com/wp-content/uploads/2019/05/%D8%A7%D9%84%D9%88%D9%82%D8%A7%D9%8A%D8%A9-%D9%85%D9%86-%D9%85%D8%B1%D8%B6-%D8%A7%D9%84%D8%B2%D9%87%D8%A7%D9%8A%D9%85%D8%B1.jpg");
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
        }
        /*end navbar*/
        
        .h {
            color: rgb(45, 45, 118);
            font-size: 23px;
            padding-top: 105px;
            padding-left: 105px;
        }
        
        #container {
            padding-top: 5px;
            width: 75%;
            aspect-ratio: 2/1;
            border: 0px solid black;
            display: grid;
            grid-template-columns: 1fr 1fr;
            justify-items: center;
            padding-top: 50px;
            padding-left: 100px;
        }
        
        #container>div {
            border: 0px solid black;
            margin-right: 130px;
        }
        
        .green {
            padding-top: 10pX;
            padding-left: 5px;
            padding-right: 2px;
            padding-bottom: 0pX;
            background-color: rgb(233, 233, 233);
            width: 75%;
            justify-self: right;
            margin-bottom: 20px;
        }
        
        .dd {
            padding-top: 20pX;
            padding-left: 20px;
            padding-right: 20px;
            padding-bottom: 20pX;
            background-color: rgb(233, 233, 233);
            width: 75%;
            margin-bottom: 20px;
            border-radius: 12px;
        }
        
        .r {
            padding-top: 10pX;
            padding-left: 5px;
            padding-right: 2px;
            padding-bottom: 0pX;
            background-color: rgb(233, 233, 233);
            width: 75%;
            justify-self: right;
            margin-bottom: 20px;
        }
        
        .e {
            padding-top: 10pX;
            padding-left: 5px;
            padding-right: 2px;
            padding-bottom: 0pX;
            background-color: rgb(233, 233, 233);
            width: 75%;
            margin-bottom: 20px;
        }
        
        .d {
            padding-top: 10pX;
            padding-left: 5px;
            padding-right: 2px;
            padding-bottom: 0pX;
            background-color: rgb(233, 233, 233);
            width: 75%;
            justify-self: right;
        }
        
        .rr {
            padding-top: 10pX;
            padding-left: 5px;
            padding-right: 2px;
            padding-bottom: 0pX;
            background-color: rgb(233, 233, 233);
            width: 75%;
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
    </style>
</head>

<body>
      <!-- start header -->
      <div class="navbar">
        <div class="container2">
            <div class="image">
                <img src="" width="" />
            </div>
            <div class="icon" style="padding-left: 20px" >
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
    </div>
    <!--end header-->

    <div class="h">
        <h1>{{__('myCustom.help-with-instructions')}}</h1>
    </div>
    <div id="container">
        @if(session('locale') == 'ar')
        @foreach($instructions as $instruction)
        <div class="dd" style="text-align: right;">
            {{$instruction->instruction_ar}}
        </div>
        @endforeach
        @else
        @foreach($instructions as $instruction)
        <div class="dd">
            {{$instruction->instruction}}
        </div>
        @endforeach
        @endif
    </div>
    <!--start footer-->
    <div class="end_footer " style="background-color: #8199e8; text-align: center; width: 1519px;height: 100px; margin-top:400px">
        <p style="margin: 0%; color: rgb(255, 255, 255); font-size: large; margin-top: 100px; margin-left: 40px ; padding-top: 5px; ">&copy; {{__('myCustom.copyright')}}
    <br><a style="color: rgb(255, 255, 255); " href="# ">{{__('myCustom.part-one')}}<br>
    {{__('myCustom.part-two')}}</a>
        </p>
    </div>
    <!--end footer-->

</body>