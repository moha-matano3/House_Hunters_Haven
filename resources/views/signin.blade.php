
<style>
        body {
            margin:0;
            padding:0;
            font-family: sans-serif;
            background: #808080;
        }

        .signin-Form {
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

        .signin-Form h2 {
            margin: 0 0 30px;
            padding: 0;
            color: #fff;
            text-align: center;
        }

        .signin-Form .user-box {
            position: relative;
        }

        .signin-Form .user-box input {
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
        .signin-Form .user-box label {
            position: absolute;
            top:0;
            left: 0;
            padding: 10px 0;
            font-size: 16px;
            color: #fff;
            pointer-events: none;
            transition: .5s;
        }

        .signin-Form .user-box input:focus ~ label,
        .signin-Form .user-box input:valid ~ label {
            top: -20px;
            left: 0;
            color: #fff;
            font-size: 12px;
        }

        .signin-Form form .submit {
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

        .signin-Form .submit:hover {
            background: #fff;
            color: #000;
            border-radius: 5px;
            box-shadow: 0 0 5px #fff,
              0 0 25px #fff,
              0 0 50px #fff,
              0 0 100px #fff;
        }

        .signin-Form .submit span {
            position: absolute;
            display: block;
        }

        .signin-Form .submit span:nth-child(1) {
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

        .signin-Form .submit span:nth-child(2) {
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

        .signin-Form .submit span:nth-child(3) {
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

        .signin-Form .submit span:nth-child(4) {
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
        .signin-Form .redirect p{
            color: #fff;
        }
        .signin-Form .redirect a{
            text-decoration: none;
            color: #fff;
        }
        .signin-Form .redirect a:hover{
            color: #000;
        }
</style>
    <div class="titleHome"><h1><a href="/">House Hunters' Haven</a></h1></div>
    <div class="signin-Form">
      <h2>Sign In</h2>
        
     <form action="{{ route('signup') }}" method="POST" enctype="multipart/form-data">
       @csrf
       <div class="user-box">
            <input type="file" name="image">
            <label>Upload profile:</label>
            @error('image')
            <p class="text-danger">{{$message}}</p>
            @enderror
       </div>
       <div class="user-box">
            <input type="name" name="firstname" required="">
            <label>First name:</label>
            @error('firstname')
            <p class="text-danger">{{$message}}</p>
            @enderror
       </div>
       <div class="user-box">
            <input type="text" name="identification" required="">
            <label>ID/Passport:</label>
            @error('identification')
            <p class="text-danger">{{$message}}</p>
            @enderror
       </div>
       <div class="user-box">
            <input type="username" name="username" required="">
            <label>Username:</label>
            @error('username')
            <p class="text-danger">{{$message}}</p>
            @enderror
       </div>
       <div class="user-box">
            <input type="number" name="telephone" required="">
            <label>Tel no:</label>
            @error('telephone')
            <p class="text-danger">{{$message}}</p>
            @enderror
       </div>
       <div class="user-box">
            <input type="email" name="email" required="">
            <label>Email:</label>
            @error('email')
            <p class="text-danger">{{$message}}</p>
            @enderror
       </div>
       <div class="user-box">
            <input type="password" name="password" required="">
            <label>Create Password:</label>
            @error('password')
            <p class="text-danger">{{$message}}</p>
            @enderror
       </div>
       <input class="submit" type="submit" name="signin" value="submit">
     </form>
    </div>

