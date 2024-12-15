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
    <form action="{{route('register.store')}}" method="POST" style="text-align: right">
        @csrf
        <div class="container">
            <h1>{{__('myCustom.registeration')}}</h1>
            <p>{{__('myCustom.fill')}}</p>
            <hr>
            <label for="text"><b>الاسم</b></label>
            <input type="text" placeholder="{{__('myCustom.username')}}" name="user" id="user" required value="{{old('user')}}" style="text-align: right">
            @error('user') <p style="color:red;">{{$message}}</p>@enderror

            <label for="email"><b>الإيميل</b></label>
            <input type="text" placeholder="{{__('myCustom.email')}}" name="email" id="email" required value="{{old('email')}}" style="text-align: right">
            @error('email') <p style="color:red;">{{$message}}</p>@enderror

            <label for="age"><b>العمر</b></label>
            <input type="integer" placeholder="{{__('myCustom.age')}}" name="age" id="age" required value="{{old('age')}}" style="text-align: right">
            @error('age') <p style="color:red;">{{$message}}</p>@enderror

            <label for="national_id"><b>الرقم القومي</b></label>
            <input type="integer" placeholder="{{__('myCustom.id')}}" name="national_id" id="national_id" required value="{{old('national_id')}}" style="text-align: right">
            @error('national_id') <p style="color:red;">{{$message}}</p>@enderror

            <label for="password"><b>كلمة المرور</b></label>
            <input type="password" placeholder="{{__('myCustom.password')}}" name="password" id="password" required style="text-align: right">
            @error('password') <p style="color:red;">{{$message}}</p>@enderror

            <label for="password_confirmation"><b>تأكيد كلمة المرور</b></label>
            <input type="password" placeholder="{{__('myCustom.repeat')}}" name="password_confirmation" id="password_confirmation" required style="text-align: right">
            @error('password_confirmation') <p style="color:red;">{{$message}}</p>@enderror
            <label for="mobile"><b>رقم الهاتف</b></label>
            <input type="phone" placeholder="{{__('myCustom.mobile')}}" name="mobile" id="mobile" value="{{old('mobile')}}" style="text-align: right">
            @error('mobile') <p style="color:red;">{{$message}}</p>@enderror
            @if(old('gender') == 'female')
            <label for="gender"><b>{{__('myCustom.gender')}}</b></label><br><br>
            <label class="miro-radiobutton">
            <input type="radio" value="male" name="gender">
            <span>{{__('myCustom.male')}}</span>
            </label>
            <label class="miro-radiobutton">
            <input type="radio" value="female" name="gender" checked>
            <span>{{__('myCustom.female')}}</span>
            </label>
            @else
            <label for="gender"><b>{{__('myCustom.gender')}}</b></label><br><br>
            <label class="miro-radiobutton">
            <input type="radio" value="male" name="gender" checked>
            <span>{{__('myCustom.male')}}</span>
            </label>
            <label class="miro-radiobutton">
            <input type="radio" value="female" name="gender" >
            <span>{{__('myCustom.female')}}</span>
            </label>
            @endif
            <br><br>

            </label><br>
            @error('gender') <p style="color:red;">{{$message}}</p>@enderror

            <hr>
            <p>{{__('myCustom.by')}} <a href="/">{{__('myCustom.terms')}}</a>.</p>
            <p>{{__('myCustom.already-have-account')}}<a href="/login">{{__('myCustom.click')}}</a>.</p>
            <input type="submit" value="{{__('myCustom.register')}}" class="registerbtn">
        </div>


    </form>
    @else
    <form action="{{route('register.store')}}" method="POST">
        @csrf
        <div class="container">
            <h1>{{__('myCustom.registeration')}}</h1>
            <p>{{__('myCustom.fill')}}</p>
            <hr>
            <label for="text"><b>User Name</b></label>
            <input type="text" placeholder="{{__('myCustom.username')}}" name="user" id="user" required value="{{old('user')}}">
            @error('user') <p style="color:red;">{{$message}}</p>@enderror

            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="{{__('myCustom.email')}}" name="email" id="email" required value="{{old('email')}}">
            @error('email') <p style="color:red;">{{$message}}</p>@enderror

            <label for="age"><b>Age</b></label>
            <input type="integer" placeholder="{{__('myCustom.age')}}" name="age" id="age" required value="{{old('age')}}">
            @error('age') <p style="color:red;">{{$message}}</p>@enderror

            <label for="national_id"><b>ID</b></label>
            <input type="integer" placeholder="{{__('myCustom.id')}}" name="national_id" id="national_id" required value="{{old('national_id')}}">
            @error('national_id') <p style="color:red;">{{$message}}</p>@enderror

            <label for="password"><b>Password</b></label>
            <input type="password" placeholder="{{__('myCustom.password')}}" name="password" id="password" required>
            @error('password') <p style="color:red;">{{$message}}</p>@enderror

            <label for="password_confirmation"><b>Repeat Password</b></label>
            <input type="password" placeholder="{{__('myCustom.repeat')}}" name="password_confirmation" id="password_confirmation" required>
            @error('password_confirmation') <p style="color:red;">{{$message}}</p>@enderror
            <label for="mobile"><b>Phone</b></label>
            <input type="phone" placeholder="{{__('myCustom.mobile')}}" name="mobile" id="mobile" value="{{old('mobile')}}">
            @error('mobile') <p style="color:red;">{{$message}}</p>@enderror
            @if(old('gender') == 'female')
            <label for="gender"><b>{{__('myCustom.gender')}}</b></label><br><br>
            <label class="miro-radiobutton">
            <input type="radio" value="male" name="gender">
            <span>{{__('myCustom.male')}}</span>
            </label>
            <label class="miro-radiobutton">
            <input type="radio" value="female" name="gender" checked>
            <span>{{__('myCustom.female')}}</span>
            </label>
            @else
            <label for="gender"><b>{{__('myCustom.gender')}}</b></label><br><br>
            <label class="miro-radiobutton">
            <input type="radio" value="male" name="gender" checked>
            <span>{{__('myCustom.male')}}</span>
            </label>
            <label class="miro-radiobutton">
            <input type="radio" value="female" name="gender" >
            <span>{{__('myCustom.female')}}</span>
            </label>
            @endif
            <br><br>

            </label><br>
            @error('gender') <p style="color:red;">{{$message}}</p>@enderror

            <hr>
            <p>{{__('myCustom.by')}} <a href="/">{{__('myCustom.terms')}}</a>.</p>
            <p>{{__('myCustom.already-have-account')}}<a href="/login">{{__('myCustom.click')}}</a>.</p>
            <input type="submit" value="{{__('myCustom.register')}}" class="registerbtn">
        </div>


    </form>
    @endif

</body>

</html>