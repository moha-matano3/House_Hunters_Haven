<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HHH-sign in</title>

    <style>
        body{
            background: #9F6724;
            padding: 0;
            margin: 0;
        }
        .signin-Form{
            padding: 0;
            margin: 0;
            border-radius: 10px;
            background: #7c6e7f;
            text-align: center;
            position: absolute;
            top: 30%;
            left: 50%;
            transform: translateX(-50%);
        }
        .signin-Form form{
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
    </style>
</head>
<body>
    <div class="titleHome"><h1><a href="/">House Hunters' Haven</a></h1></div>
    <div class="signin-Form">
    <h2>Sign In</h2>
        <form action="" method="">
            <label>Upload profile:</label><input type="file" name="prof"><br><br>
            <label>First name:</label><input type="name" name="fname" placeholder="Enter your first name"><br><br>
            <label>ID/Passport:</label><input type="text" name="identity" placeholder="Enter ID No or Passport number"><br><br>
            <label>Username:</label><input type="username" name="username" placeholder="Enter Your Username"><br><br>
            <label>Tel no:</label><input type="number" name="telephone" placeholder="Enter Your Telephone no"><br><br>
            <label>Email:</label><input type="email" name="email" placeholder=" Enter your Email"><br><br>
            <label>Create Password:</label><input type="password" name="password" placeholder=" Create your Password"><br><br>
            <input class="submit" type="submit" name="signin" value="submit">
        </form>
    </div>
</body>
</html>