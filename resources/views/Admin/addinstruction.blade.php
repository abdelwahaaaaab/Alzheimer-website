<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <title>Add Instructions</title>
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
        
        button[type="submit"], .button {
            padding: 7px;
            font-size: 17px;
            cursor: pointer;
        }

        .btn{cursor: pointer;}
        
        button {
            border-style: doubleS
        }
        
    
        .form {
            width: 300px;
            float: right;
            position: absolute;
            left: 350px;
            top: 25px
        }
        /*start section two*/
        
        table,
        th,
        td {
            border: 1px solid #0c1d4b;
            font-size: x-large;
        }
        th,td
        {
            padding:10px;
        }
        
        .tabl {
            padding-top: 0px;
            margin-left: 15%
        }
        
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
            margin-right: 0px;
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
            margin-top: -60px;
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
        .editbtn
        {
            background-color: green;
        }
        .edita
        {
            text-decoration: none;
            color:white;
        }
        .button{
            background-color:red;
            color:white;
        }
        textarea
        {
            padding:10px;
            font-size: 18px;
            border-radius:12px;
        }
        article{
            padding: 35px;
            background-color: #009933;
            border-radius: 12px;
            margin-top: -20px;
            text-align: center;
            width: 100%;
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
        #Services
        {
            padding-bottom: 1500px;
        }


        /*end section two */
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
    <!--start section two -->
    <div id="Services">
        <div class="sectiontwo">
            <div class="container"> 
                <div class="imagesalma">
                    <div class="paragserv">

                        <br>
                        <div class="form" style="margin-top: 100px;margin-left: 600px; ">
                        @if($message = Session::get('message'))
                            
                            <article style="color:white; font-size:20px;">{{$message}}</article><br>

                        @endif
                            <!--start form-->
                            <form action="{{route('instruction.store')}}" method="POST">
                                @csrf
                                <div class="form-group ">
                                    <label style="font-size:25px ; color:rgb(22, 22, 73); " for="exampleInputmessage ">{{__('myCustom.instruction-en')}}</label>
                                    <textarea style="margin-top:4px; background-color:rgb(234, 234, 234);" rows="10 " cols="50 " name="instruction" placeholder="{{__('myCustom.enter-instruction')}}">{{old('instruction')}}</textarea>
                                    @error('instruction') <br><p style="color:red">{{$message}}</p>@enderror
                                </div><br>
                                <div class="form-group ">
                                    <label style="font-size:25px ; color:rgb(22, 22, 73); " for="exampleInputmessage ">{{__('myCustom.instruction-ar')}}</label>
                                    <textarea style="margin-top:4px; background-color:rgb(234, 234, 234); text-align: right;" rows="10 " cols="50 " name="instruction_ar" placeholder="إدخل التعلميات">{{old('instruction_ar')}}</textarea>
                                    @error('instruction_ar') <br><p style="color:red">{{$message}}</p>@enderror
                                </div><br>
                                <button type="submit " class="btn btn-primary " style=" color:rgb(234, 234, 234); ;font-size:23px ; width:110px ;height:40px;background-color:rgb(22, 22, 73)">{{__('myCustom.add')}}</button>
                            </form>
                        </div>
                    </div>

                    <div class="sectiontwosalma " style=" margin-right:0px ">
                        <div class="tabl">
                            <h2 style="padding-bottom: 25px; font-size: 50px; color: #0c1d4b "> </h2>

                            <table style="width:280%; background-color:rgb(234, 234, 234); color:#0c1d4b; ">
                                <tr>
                                    <th style="font-size: larger; ">{{__('myCustom.instruction')}}</th>
                                    <th style="font-size: larger; " colspan="2">{{__('myCustom.action')}}</th>

                                </tr>
                                @if(session('locale') == 'ar')
                                @foreach($instructions as $instruction)
                                <tr>

                                    <td >{{$instruction->instruction_ar}}</td>
                                    <td><button type="submit" class="editbtn"><a href="/instruction/{{$instruction->id}}/edit" class="edita">{{__('myCustom.edit')}}</a></button></td>
                                    <td >
                                        <form action="{{route('instruction.destroy', $instruction->id)}}" method="POST">
                                            @csrf
                                            @method('delete')
                                            <div class="but"><input type="submit" value="{{__('myCustom.delete')}}" class="button button2"></div>
                                        </form>
                                    </td>          
                                </tr>
                                @endforeach
                                @else
                                @foreach($instructions as $instruction)
                                <tr>

                                    <td >{{$instruction->instruction}}</td>
                                    <td><button type="submit" class="editbtn"><a href="/instruction/{{$instruction->id}}/edit" class="edita">{{__('myCustom.edit')}}</a></button></td>
                                    <td >
                                        <form action="{{route('instruction.destroy', $instruction->id)}}" method="POST">
                                            @csrf
                                            @method('delete')
                                            <div class="but"><input type="submit" value="{{__('myCustom.delete')}}" class="button button2"></div>
                                        </form>
                                    </td>          
                                </tr>
                                @endforeach
                                @endif
                            </table>
                        </div>
                    </div>
                </div>
            </div>   
        </div>
    </div>    
    <!--end section two -->
    <!-- start footer-->
    <!-- <div class="end_footer " style="background-color: #8199e8; text-align: center; margin-top: 1000px; width: 1519px;height: 100px;  ">


        <p style="margin: 0%; color: rgb(255, 255, 255); font-size: large; margin-left: 40px ; padding-top: 5px; ">&copy; {{__('myCustom.copyright')}}
        <br><a style="color: rgb(255, 255, 255); " href="# ">{{__('myCustom.part-one')}}<br>
        {{__('myCustom.part-two')}}</a>
        </p>
    </div> -->

    <!--end footer -->

        





</body>