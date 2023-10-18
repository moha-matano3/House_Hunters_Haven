<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <style>
        body {
            margin:0;
            padding:0;
            font-family: sans-serif;
            background: #808080;
        }

        .login-box {
            position: absolute;
            top: 50%;
            left: 50%;
            width: 400px;
            padding: 40px;
            transform: translate(-50%, -50%);
            background: rgba(0,0,0,.5);
            box-sizing: border-box;
            box-shadow: 0 15px 25px rgba(0,0,0,.6);
            border-radius: 10px;
        }

        .login-box h2 {
            margin: 0 0 30px;
            padding: 0;
            color: #fff;
            text-align: center;
        }

        .login-box .user-box {
            position: relative;
        }

        .login-box .user-box input {
            width: 100%;
            padding: 10px 0;
            font-size: 16px;
            color: #fff;
            margin-bottom: 30px;
            border: none;
            border-bottom: 1px solid #fff;
            outline: none;
            background: transparent;
        }
        .login-box .user-box label {
            position: absolute;
            top:0;
            left: 0;
            padding: 10px 0;
            font-size: 16px;
            color: #fff;
            pointer-events: none;
            transition: .5s;
        }

        .login-box .user-box input:focus ~ label,
        .login-box .user-box input:valid ~ label {
            top: -20px;
            left: 0;
            color: #fff;
            font-size: 12px;
        }

        .login-box form .submit {
            position: relative;
            display: inline-block;
            padding: 10px 20px;
            color: #7c6e7f;
            font-size: 16px;
            text-decoration: none;
            text-transform: uppercase;
            overflow: hidden;
            transition: .5s;
            margin-top: 40px;
            letter-spacing: 4px
        }

        .login-box .submit:hover {
            background:#fff;
            color: #000;
            border-radius: 5px;
            box-shadow: 0 0 5px #fff,
              0 0 25px #fff,
              0 0 50px #fff,
              0 0 100px #fff;
        }

        .login-box .submit span {
            position: absolute;
            display: block;
        }

        .login-box .submit span:nth-child(1) {
            top: 0;
            left: -100%;
            width: 100%;
            height: 2px;
            background: linear-gradient(90deg, transparent, #03e9f4);
            animation: btn-anim1 1s linear infinite;
        }

        @keyframes btn-anim1 {
            0% {
                left: -100%;
            }
            50%,100% {
                left: 100%;
            }
        }

        .login-box .submit span:nth-child(2) {
            top: -100%;
            right: 0;
            width: 2px;
            height: 100%;
            background: linear-gradient(180deg, transparent, #03e9f4);
            animation: btn-anim2 1s linear infinite;
            animation-delay: .25s
        }

        @keyframes btn-anim2 {
            0% {
                top: -100%;
            }
            50%,100% {
                top: 100%;
            }
        }

        .login-box .submit span:nth-child(3) {
            bottom: 0;
            right: -100%;
            width: 100%;
            height: 2px;
            background: linear-gradient(270deg, transparent, #03e9f4);
            animation: btn-anim3 1s linear infinite;
            animation-delay: .5s
        }

        @keyframes btn-anim3 {
            0% {
                right: -100%;
            }
            50%,100% {
                right: 100%;
            }
        }

        .login-box .submit span:nth-child(4) {
            bottom: -100%;
            left: 0;
            width: 2px;
            height: 100%;
            background: linear-gradient(360deg, transparent, #03e9f4);
            animation: btn-anim4 1s linear infinite;
            animation-delay: .75s
        }

        @keyframes btn-anim4 {
            0% {
                bottom: -100%;
            }
            50%,100% {
                bottom: 100%;
            }
        }

        .titleHome {
            margin: 0;
            padding: 0;
            background: #000;
        }
        .titleHome h1 {
            text-align: center;
            padding: 0;
            margin: 0;
        }
        .titleHome h1 a {
            text-decoration: none;
            color: #fff;
        }
        .titleHome h1 a:hover {
            color: #808080;
        }
        .login-box .redirect p{
            color: #fff;
        }
        .login-box .redirect a{
            text-decoration: none;
            color: #fff;
        }
        .login-box .redirect a:hover{
            color: #000;
        }
    </style>
</head>
<body>
    <div class="titleHome"><h1><a href="/">House Hunters' Haven</a></h1></div>
    <div class="login-box">
        <h2>Log In</h2>
        <form action="{{ route('login') }}" method="POST">
            @csrf
            <div class= "user-box">
                <input type="email" name="email" required="">
                <label>Email:</label>
                @error('email')
                <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="user-box">
                <input type="password" name="password" required="">
                <label>Password:</label>
                @error('password')
                <p class="text-danger">{{$message}}</p>
                @enderror
            </div>

            <input class="submit" type="submit" name="signin" value="Log in"><br><br>

            <div class="redirect"><p>New to House Hunters' Haven? Please sign up by clicking<a href="/signin"> HERE</a></p></div>
        </form>
    </div>
</body>
</html>
