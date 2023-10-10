

<nav class="navbar">
    <ul>
        <li>
            <div class="row">
                <form action="{{ route('houses.filter') }}" method="GET">
                    <li><a href=""> Filter by Amenities </a>
                        <div class="subMenu">
                        <ul>
                            <li><input type="checkbox" name="amenities[]" value="is_wifi"> WiFi</li>
                            <li><input type="checkbox" name="amenities[]" value="is_gated"> Gated Community</li>
                            <li><input type="checkbox" name="amenities[]" value="is_gym"> GYM </li>
                            <li><input type="checkbox" name="amenities[]" value="is_security"> Hired security</li>
                            <li><input type="checkbox" name="amenities[]" value="is_pool"> Swimming pool</li>
                            <li><input type="checkbox" name="amenities[]" value="is_parking"> Provided parking space</li>
                            <li><input type="checkbox" name="amenities[]" value="is_furnished"> Fully furnished</li>
                        </ul>
                    </div>
                    </li>
                    <label for="bedrooms">Filter by Bedrooms:</label>
                    <select name="bedrooms" id="bedrooms">
                        <option>Select</option>
                        <option value="1">1 Bedroom</option>
                        <option value="2">2 Bedrooms</option>
                        <option value="3">3 Bedrooms</option>
                        <option value="4">4 Bedrooms</option>
                        
                        <!-- Add more options as needed -->
                    </select>
                    <label for="size">Filter by Size:</label>
                    <select name="size" id="size">
                        <option>Select</option>
                        <option value="500"> < than 500sqft </option>
                        <option value="1500"> < than 1500sqft </option>
                        <option value="3000"> < than 3000sqft </option>
                    </select>
    
                    <label for="status">Filter by Status:</label>
                    <select name="status" id="status">
                        <option>Select</option>
                        <option value="rent"> Rent </option>
                        <option value="sell"> Sell </option>
                      
                    </select>
                    

                    <button type="submit">Apply Filter</button>
                </form>
            </div>
        
        </li>
      {{--    <li><a href=""> Filter by Amenities </a>
            <div class="subMenu">
                <ul>
                  <li>Prize</li>
                    <li><a href="">Rental</a></li>
                    <li><a href="">To buy</a></li>
                   <li class="MenuList">Bedrooms
                        <div class="subMenu2">
                            <ul>
                                <li><input type="checkbox" id="filter-single-bedrooms" value="Single room"> Single room</li>
                                <li><input type="checkbox" id="filter-studio" value="Studio/bedsitter"> Studio/bedsitter</li>
                                <li><input type="checkbox" id="filter-1bedroom" value="1 Bedroom"> 1 Bedroom</li>
                                <li><input type="checkbox" id="filter-2bedrooms" value="2 Bedrooms"> 2 Bedrooms</li>
                                <li><input type="checkbox" id="filter-3bedrooms" value="3 Bedrooms"> 3 Bedrooms</li>
                                <li><input type="checkbox" id="filter-4bedrooms" value="4 Bedrooms"> 4 Bedrooms</li>
                            </ul>
                        </div>
                        
                    </li> 
                    <li class="MenuList">Amenities
                        <div class="subMenu2">
                            <ul>
                                <li><input type="checkbox" name="amenities[]" value="is_wifi"> WiFi</li>
                                <li><input type="checkbox" name="amenities[]" value="is_gated"> Gated Community</li>
                                <li><input type="checkbox" name="amenities[]" value="is_gym"> GYM </li>
                                <li><input type="checkbox" name="amenities[]" value="is_security"> Hired security</li>
                                <li><input type="checkbox" name="amenities[]" value="is_pool"> Swimming pool</li>
                                <li><input type="checkbox" name="amenities[]" value="is_parking"> Provided parking space</li>
                                <li><input type="checkbox" name="amenities[]" value="is_furnished"> Fully furnished</li>
                            </ul>
                        </div>
                    </li> 
                 {{--   <li class="MenuList">Size
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
        </li>--}}
        <li>
         <!-- Form -->
         <form action="{{route('search')}}" method="GET">
            <div class="dropdown-content">
              <input type="search" id="search_text" name="query" class="form-control" placeholder="Search" style="">
              <button type="submit" style="" class="primary-btn">Search</button>
           </div>
         </form>
        </li>
        <ul>
            @auth
            <!-- User is authenticated -->
            <li><a href="#">Profile</a>
                <div class="subMenu">
                    <ul>
                        <li><a href="{{route('dashboard.profile.prof')}}">Profile</a></li>
                        <li><a href="#">Messages</a></li>
                        <li><a href="{{ route ('adverts.index') }}">My adverts</a></li>
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





