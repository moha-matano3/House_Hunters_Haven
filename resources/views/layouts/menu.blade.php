<nav class="navbar">
    <ul>
        <li><a href=""> Menu </a>
            <div class="subMenu">
                <ul>
                    <li>Prize</li>
                    <li><a href="">Rental</a></li>
                    <li><a href="">To buy</a></li>
                    <li class="MenuList">Bedrooms
                        <div class="subMenu2">
                            <ul>
                                <li><input type="checkbox"> Single room</li>
                                <li><input type="checkbox"> Studio/bedsitter</li>
                                <li><input type="checkbox"> 1 Bedroom</li>
                                <li><input type="checkbox"> 2 Bedrooms</li>
                                <li><input type="checkbox"> 3 Bedrooms</li>
                                <li><input type="checkbox"> 4 Bedrooms</li>
                            </ul>
                        </div>
                    </li>
                    <li class="MenuList">Amenities
                        <div class="subMenu2">
                            <ul>
                                <li><input type="checkbox"> WiFi</li>
                                <li><input type="checkbox"> Gated Community</li>
                                <li><input type="checkbox"> Un-gated Community</li>
                                <li><input type="checkbox"> GYM </li>
                                <li><input type="checkbox"> Hired security</li>
                                <li><input type="checkbox"> Swimming pool</li>
                                <li><input type="checkbox"> Provided parking space</li>
                                <li><input type="checkbox"> Fully furnished</li>
                            </ul>
                        </div>
                    </li> 
                    <li class="MenuList">Size
                    <div class="subMenu2">
                            <ul>
                                <li><input type="checkbox"> < than 500sqft </li>
                                <li><input type="checkbox"> < than 1500sqft</li>
                                <li><input type="checkbox"> < than 3000sqft</li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </li>
        <li><input type="text" placeholder="Enter Property name or location"> <input type="submit" value="Search"></li>
        <ul>
            @auth
            <!-- User is authenticated -->
            <li><a href="#">Profile</a>
                <div class="subMenu">
                    <ul>
                        <li><a href="#">Profile</a></li>
                        <li><a href="#">Messages</a></li>
                        <li><a href="#">My adverts</a></li>
                        <li><a href="#">Settings</a></li>
                        <li><a href="#">Boost account</a></li>
                        <li><a href="{{ route('logout') }}">Log out</a></li>
                    </ul>
                </div>
            </li>
            @else
            <!-- User is not authenticated -->
            <li><a href="#">Profile</a>
                <div class="subMenu">
                    <ul>
                        <li><a href="/signin">Sign up</a></li>
                        <li><a href="login">Log in</a></li>
                    </ul>
                </div>
            </li>
            @endauth
        </ul>
        
    </ul>
</nav>