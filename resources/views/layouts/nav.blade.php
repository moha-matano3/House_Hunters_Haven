<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
         *
        {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        h1 a{
            text-decoration: none;
            color: black;
        }
        h1 a:hover{
            color: white;
        }
        .navbar
        {
            background: #7c6e7f;
            text-align: center;
        }
        .navbar ul
        {
            display: inline-flex;
            list-style: none;
            color: #000000;
        }
        .navbar ul li 
        {
            width: 400px;
            margin: 15px;
            padding: 15px;
        }
        .navbar ul li a
        {
            text-decoration: none;
            color: #000000;
        }
        .navbar ul li a:hover
        {
            color: #fff;
        }
        .subMenu {
            width: 300px;
            margin: 0px;
            display: none;
        }
        .navbar ul li:hover .subMenu {
            display: block;
            position: absolute;
            margin-top: 15px;
            margin-left: -15px;
            background: #7c6e7f;
        }
        .navbar ul li:hover .subMenu ul {
            display: block;
        }
        .navbar ul li:hover .subMenu ul li {
            width: auto;
            padding: 10px;
            border-bottom: 1px dotted #000;
            background: transparent;
            border-radius: 0;
            text-align: left;
        }
        .navbar ul li:hover .subMenu ul li:last-child {
            border-bottom: none;
        }
        .navbar ul li:hover .subMenu ul li:hover {
            color: #fff;
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
    </style>
</head>
<body>
    <nav class="navbar">

        <div class="titleHome"><h1><a href="/">House Hunters Haven</a></h1></div>

        <ul>
            <div class="Menu">
                <li><a href="">Menu</a>
                    <div class="subMenu">
                        <ul>
                            <li>
                                <label for="bedrooms">Filter by Bedrooms:</label>
                                <select name="bedrooms" id="bedrooms">
                                    <option>Select</option>
                                    <option value="0">Bed-sitter</option>
                                    <option value="1">1 Bedroom</option>
                                    <option value="2">2 Bedrooms</option>
                                    <option value="3">3 Bedrooms</option>
                                    <option value="4">4 Bedrooms</option>
                                    <option value="5">5 Bedrooms</option>
                                </select><br><br>
                            </li>
                            <li>
                                <label for="size">Filter by Size:</label>
                                <select name="size" id="size">
                                    <option>Select</option>
                                    <option value="500"> < than 500sqft </option>
                                    <option value="1500"> < than 1500sqft </option>
                                    <option value="3000"> < than 3000sqft </option>
                                </select><br><br>
                            </li>
                            <li>
                                <label for="status">Filter by Status:</label>
                                <select name="status" id="status">
                                    <option>Select</option>
                                    <option value="rent"> Rent </option>
                                    <option value="To buy"> To buy </option>  
                                </select><br><br>
                            </li>
                            <li>
                                <form action="{{ route('houses.filter') }}" method="GET">
                                    <label for ="amenities"> Filter by Amenities </label>
                                    <ul>
                                        <li><input type="checkbox" name="amenities[]" value="is_wifi"> WiFi</li>
                                        <li><input type="checkbox" name="amenities[]" value="is_gated"> Gated Community</li>
                                        <li><input type="checkbox" name="amenities[]" value="is_gym"> GYM </li>
                                        <li><input type="checkbox" name="amenities[]" value="is_security"> Hired security</li>
                                        <li><input type="checkbox" name="amenities[]" value="is_pool"> Swimming pool</li>
                                        <li><input type="checkbox" name="amenities[]" value="is_parking"> Provided parking space</li>
                                        <li><input type="checkbox" name="amenities[]" value="is_furnished"> Fully furnished</li>
                                    </ul>
                                    <button type="submit">Apply Filter</button>
                                </form>
                            </li>
                        </ul>
                    </div>
                </li>
            </div>
            <div class="searchbar">
                <li>
                    <form action="{{route('search')}}" method="GET">
                        <div class="dropdown-content">
                            <input type="search" id="search_text" name="query" class="form-control" placeholder="Search" style="">
                            <button type="submit" style="" class="primary-btn">Search</button>
                        </div>
                    </form>
                </li>
            </div>
            <div class="Menu">
                <li><a href="">Profile</a>
                    @auth
                    <div class="subMenu">
                        <ul>
                            <li><a href="{{route('dashboard.profile.prof')}}">Profile</a></li>
                            <li><a href="#">Messages</a></li>
                            <li><a href="{{ route ('adverts.index') }}">My adverts</a></li>
                            <li><a href="{{ route('logout') }}">Log out</a></li>
                        </ul>
                    </div>
                    @else
                    <div class="subMenu">
                        <ul>
                            <li><a href="/signin">Sign up</a></li>
                            <li><a href="login">Log in</a></li>
                        </ul>
                    </div>
                    @endauth
                </li>
            </div>
        </ul>
    </nav>
</body>
</html>