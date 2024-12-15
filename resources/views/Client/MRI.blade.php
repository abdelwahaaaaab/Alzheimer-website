<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <title>Upload MRI</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            font-family: 'Times New Roman', Times, serif;
        }
        
        body {
            background-image: url("https://static.dw.com/image/17270459_404.jpg");
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
        
        .navbar .container .icon ul li a:hover {
            color: black;
        }
        .registerbtn2
        {
            border-radius:40px;
            background-color:#8199e8;
            padding:5px 10px;
            font-size:21px;
            font-weight:bold;
        }
        .registerbtn3
        {
            border-radius:40px;
            background-color:#e7ff4e;
            padding:5px 10px;
            font-size:21px;
            font-weight:bold;
        }
        .registerbtn2:hover
        {
            color:white;
            cursor:pointer;
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
        .submit-mri:hover
        {
            cursor: pointer;
        }

        .upload-1:hover
        {
            cursor: pointer;
        }
        .link-a
        {
            text-decoration: none;
            color: black;
        }
        .link-a:hover
        {
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



    <div class="for" style="padding-bottom: 0px; padding-left:760px">
        <h2 style="padding-bottom: 200px; font-size: 50px; color: #1b2c5c "> </h2>
        @if(session('locale') == 'ar')
        <form action="{{route('mri.store')}}" method="POST" style="border: 4px solid #f1fb36;width: 450px;  height:250px; padding:30px; direction:rtl; ">
        @else
        <form action="{{route('mri.store')}}"  style="border: 4px solid #f1fb36;width: 450px;  height:250px; padding:30px; " method="POST">
        @endif
            @csrf
            <label for="pname" style="font-size:x-large; color:#fff">{{__('myCustom.name-mri')}}</label><br>
            <input type="text" id="pname" name="pname" value="" style="background-color:#eeeeeb;  width: 400px;  height:30px; border: 1px solid #0c1d4b"><br><br>
            @error('pname') <p style="color:red;">{{$message}}</p><br>@enderror
            <!--<input type="file" id="myFile" name="filename">-->
            <!-- <label for="img" style="font-size:xx-large;color:#fff"> Upload Image:</label><br>
            <input type="file" name="img" style="visibility:hidden;" id="img"> -->
            <!-- <button style="display:block;width:120px; height:30px; width: 400px; font-size:20px" class="upload-1" onclick="document.getElementById('getFile').click()">{{__('myCustom.upload')}}</button> -->
            <label for="img" style="font-size:x-large; color:#fff">{{__('myCustom.upload-mri')}}</label><br>
            <input type='file' id="getFile" name="img" style="display:block;width:400px; font-size:20px" title="{{__('myCustom.mri-file')}}">
            @error('img') <p style="color:red;">{{$message}}</p><br>@enderror
            <!-- <input type=" text" name="image" id="image" style="background-color:#eeeeeb; width: 300px;  height:30px; border: 1px solid #0c1d4b; " /><button type="submit" class="" style="width: 90px;  height:30px; border: 1px solid #0c1d4b; margin-left:10px;font-size: 20px">Upload</button> -->
            <br><br><br>
            <input type="submit" value="{{__('myCustom.result-mri')}}" class="submit-mri" style="width: 400px;  height:33px; border: 1px solid #0c1d4b;font-size: 30px;background-color: #e7ff4e;"><br><br>
            
        </form>


        <br><br><button class="registerbtn3"><a class="link-a" href="/show-mri-results">{{__('myCustom.pre-result')}}</a></button>
    </div>
    
    <!--start footer-->
    <div class="end_footer " style="background-color: #8199e8; text-align: center; width: 1519px;height: 100px; ">


        <p style="margin: 0%; color: rgb(255, 255, 255); font-size: large; margin-top: 200px; margin-left: 40px ; padding-top: 5px; ">&copy;{{__('myCustom.copyright')}}
        <br><a style="color: rgb(255, 255, 255); " href="# ">{{__('myCustom.part-one')}}<br>
        {{__('myCustom.part-two')}}</a>
        </p>
    </div>

<!--end footer-->






</body>

</html>