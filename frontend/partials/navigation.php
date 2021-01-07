<!-- Header -->
<header>
    <div class="container">
        <div class="logo"> <a href="index-2.html"><img src="frontend/images/logo.png" alt=""></a> </div>
        <div class="search-cate">
            <select class="selectpicker">
                <option> All Categories</option>
                <option> Home Audio & Theater</option>
                <option> TV & Video</option>
                <option> Camera, Photo & Video</option>
                <option> Cell Phones & Accessories</option>
                <option> Headphones</option>
                <option> Video Games</option>
                <option> Bluetooth & Wireless </option>
                <option> Gaming Console</option>
                <option> Computers & Tablets</option>
                <option> Monitors </option>
            </select>
            <input type="search" placeholder="Search entire store here...">
            <button class="submit" type="submit"><i class="icon-magnifier"></i></button>
        </div>

        <!-- Cart Part -->
        <ul class="nav navbar-right cart-pop">
            <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="itm-cont">3</span> <i class="flaticon-shopping-bag"></i> <strong>My Cart</strong> <br>
                    <span>3 item(s) - $500.00</span></a>
                <ul class="dropdown-menu">
                    <li>
                        <div class="media-left"> <a href="#." class="thumb"> <img src="frontend/images/item-img-1-1.jpg" class="img-responsive" alt=""> </a> </div>
                        <div class="media-body"> <a href="#." class="tittle">Funda Para Ebook 7" 128GB full HD</a> <span>250 x 1</span> </div>
                    </li>
                    <li>
                        <div class="media-left"> <a href="#." class="thumb"> <img src="frontend/images/item-img-1-2.jpg" class="img-responsive" alt=""> </a> </div>
                        <div class="media-body"> <a href="#." class="tittle">Funda Para Ebook 7" full HD</a> <span>250 x 1</span> </div>
                    </li>
                    <li class="btn-cart"> <a href="#." class="btn-round">View Cart</a> </li>
                </ul>
            </li>
        </ul>
    </div>

    <!-- Nav -->
    <nav class="navbar ownmenu">
        <div class="container">

            <!-- Categories -->
            <div class="cate-lst"> <a data-toggle="collapse" class="cate-style" href="#cater"><i class="fa fa-list-ul"></i> Our Categories </a>
                <div class="cate-bar-in">
                    <div id="cater" class="collapse">
                        <ul>
                            <li><a href="#."> Home Audio & Theater</a></li>
                            <li><a href="#."> TV & Video</a></li>
                            <li><a href="#."> Camera, Photo & Video</a></li>
                            <li class="sub-menu"><a href="#."> Cell Phones & Accessories</a>
                                <ul>
                                    <li><a href="#."> TV & Video</a></li>
                                    <li><a href="#."> Camera, Photo & Video</a></li>
                                    <li><a href="#."> Cell Phones & Accessories</a>
                                </ul>
                            </li>
                            <li><a href="#."> Headphones</a></li>
                            <li><a href="#."> Video Games</a></li>
                            
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Navbar Header -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nav-open-btn" aria-expanded="false"> <span><i class="fa fa-navicon"></i></span> </button>
            </div>
            <!-- NAV -->
            <div class="collapse navbar-collapse" id="nav-open-btn">
                <ul class="nav">
                    <li class="active"> 
                        <a href="index.php">Home </a>
                    </li>
                    <li> <a href="shop.php">Shop</a></li>
                </ul>
            </div>

            <!-- NAV RIGHT -->
            <div class="nav-right"> <span class="call-mun"><i class="fa fa-phone"></i> <strong>Hotline:</strong> (+100) 123 456 7890</span> </div>
        </div>
    </nav>
</header>