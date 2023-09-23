<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        body{
            background: #9F6724;
            padding: 0;
            margin: 0;
        }
        .login-Form{
            padding: 0;
            margin: 0;
            border-radius: 10px;
            background: #7C6E7F;
            text-align: center;
            position: absolute;
            top: 30%;
            left: 50%;
            transform: translateX(-50%);
        }
        .login-Form form{
            padding: 20px;
            margin: 20px;
        }
        input {
            border-radius: 10px;
            width: 300px;
            height: 20px;
        }
         .submit {
            width: 60px;
            border-radius: 0;
        }
        .titleHome {
            margin: 0;
            padding: 0;
            background: #7c6e7f;
        }
        .titleHome h1 {
            text-align: center;
            padding: 0;
            margin: 0;
        }
        .titleHome h1 a {
            text-decoration: none;
            color: #000;
        }
        .titleHome h1 a:hover {
            color: #fff;
        }
        .login-Form p a{
            color: #000;
        }
        .login-Form p a:hover{
            color: #fff;
        }
    </style>
</head>
<body>
<div class="titleHome"><h1><a href="/">House Hunters' Haven</a></h1></div>
    <div class="login-Form">
        <h2>Log In</h2>
        <form action="" method="">
            <label>Email:</label><input type="email" name="email" placeholder=" Enter your Email"><br><br>
            <label>Password:</label><input type="password" name="password" placeholder=" Enter your Password"><br><br>
            <input class="submit" type="submit" name="signin" value="Log in"><br><br>
            <p>New to House Hunters' Haven? Please sign in by clicking<a href="/signin"> HERE</a></p>
        </form>
    </div>
</body>
</html>