<!DOCTYPE html>
<html>

<head>
    <meta name="Discrption" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/reg.css" />



    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-image: url("https://cdni.rt.com/media/pics/2021.09/original/6141c40c4c59b73a707219bd.png");
            background-repeat: no-repeat;
            background-position: center center;
            background-attachment: fixed;
            background-size: cover;
        }
        
        * {
            box-sizing: border-box;
        }
        /* Add padding to containers */
        
        .container {
            padding: 16px;
            background-color: rgb(254, 254, 254);
            width: 600px;
            margin: auto;
            opacity: 80%;
            border: 2px solid white;
            border-radius: 15px;
        }
        /* Full-width input fields */
        
        input[type=text],
        input[type=password],
        input[type=phone],
        input[type=integer] {
            width: 100%;
            padding: 15px;
            margin: 5px 0 22px 0;
            display: inline-block;
            border: none;
            background: #8199e8;
            font-size: medium;
        }
        
        input[type=radio] {
            margin: 10px;
        }
        
        input[type=text]:focus,
        input[type=string]:focus,
        input[type=password]:focus,
        input[type=integer]:focus {
            background-color: #ddd;
            outline: none;
        }
        /* Overwrite default styles of hr */
        
        hr {
            border: 1px solid #f1f1f1;
            margin-bottom: 25px;
        }
        /* Set a style for the submit button */
        
        .registerbtn {
            background-color: #8199e8;
            color: white;
            padding: 16px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
            opacity: 0.9;
            font-size: 25px;
        }
        
        .registerbtn:hover {
            opacity: 1;
        }
        /* Add a blue text color to links */
        
        a {
            color: rgb(6, 6, 7);
        }
        /* Set a grey background color and center the text of the "sign in" section */
        
        .signin {
            background-color: #f1f1f1;
            text-align: center;
        }
        article{
            padding: 10px;
            background-color: pink;
            border-radius: 12px;
        }
    </style>
</head>

<body>
    @if(session('locale') == 'ar')
    <form action="{{route('create-admin.store')}}" method="POST" style="direction:rtl;">
    @else
    <form action="{{route('create-admin.store')}}" method="POST">
    @endif    
        @csrf
        <div class="container">
            <h1>{{__('myCustom.admin-registeration')}}</h1>
            <p>{{__('myCustom.fill')}}</p>
            <hr>
            <label for="text"><b>{{__('myCustom.admin-name')}}</b></label>
            <input type="text" placeholder="{{__('myCustom.username')}}" name="Name" id="Name" required value="{{old('Name')}}">
            @error('Name') <p style="color:red;">{{$message}}</p>@enderror

            <label for="email"><b>{{__('myCustom.admin-email')}}</b></label>
            <input type="text" placeholder="{{__('myCustom.email')}}" name="Email" id="Email" required value="{{old('Email')}}">
            @error('Email') <p style="color:red;">{{$message}}</p>@enderror

            <label for="password"><b>{{__('myCustom.admin-password')}}</b></label>
            <input type="password" placeholder="{{__('myCustom.password')}}" name="Password" id="Password" required>
            @error('Password') <p style="color:red;">{{$message}}</p>@enderror

            <label for="password_confirmation"><b>{{__('myCustom.admin-confirm')}}</b></label>
            <input type="password" placeholder="{{__('myCustom.repeat')}}" name="Password_confirmation" id="password_confirmation" required>
            @error('Password_confirmation') <p style="color:red;">{{$message}}</p>@enderror

            <input type="submit" value="{{__('myCustom.register')}}" class="registerbtn">
        </div>


    </form>
  

</body>

</html>