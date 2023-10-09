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
    <div class="titleHome"><h1><a href="/">House Hunters' Haven</a></h1></div>
    <div class="signin-Form">
      <h2>Sign In</h2>
        
     <form action="{{ route('signup') }}" method="POST" enctype="multipart/form-data">
       @csrf
       <label>Upload profile:</label>
       <input type="file" name="image">
       @error('image')
       <p class="text-danger">{{$message}}</p>
       @enderror
       <br><br>
       <label>First name:</label>
       <input type="name" name="firstname" placeholder="Enter your first name">
       @error('firstname')
       <p class="text-danger">{{$message}}</p>
       @enderror
       <br><br>
       <label>ID/Passport:</label>
       <input type="text" name="identification" placeholder="Enter ID No or Passport number">
       @error('identification')
       <p class="text-danger">{{$message}}</p>
       @enderror
       <br><br>
       <label>Username:</label><input type="username" name="username" placeholder="Enter Your Username">
       @error('username')
       <p class="text-danger">{{$message}}</p>
       @enderror
       <br><br>
       <label>Tel no:</label><input type="number" name="telephone" placeholder="Enter Your Telephone no">
       @error('telephone')
       <p class="text-danger">{{$message}}</p>
       @enderror
       <br><br>
       <label>Email:</label><input type="email" name="email" placeholder=" Enter your Email">
       @error('email')
       <p class="text-danger">{{$message}}</p>
       @enderror
       <br><br>
       <label>Create Password:</label><input type="password" name="password" placeholder=" Create your Password">
       @error('password')
       <p class="text-danger">{{$message}}</p>
       @enderror
       <br><br>
       <input class="submit" type="submit" name="signin" value="submit">
     </form>
    </div>

