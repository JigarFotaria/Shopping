<header>
      <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php"><img src="images/logo.png" class="img-responsive"></a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li class="active"><a href="index.php"><i class="visible-xs"></i>Home</a></li>
              <li class="category-l dropdown">
                <a href="#" class="dropdown-toggle category-b" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="visible-xs fa fa-shopping-bag"></i>shop</a>
                <ul class="dropdown-menu">
                  <li><a href="product-list.php" class="text-uppercase">Men</a></li>
                  <li><a href="product-list.php" class="text-uppercase">Women</a></li>
                  <li><a href="product-list.php" class="text-uppercase">Kids</a></li>
                  <li><a href="product-list.php" class="text-uppercase">Home&living</a></li>
                  <li><a href="product-list.php" class="text-uppercase">Books</a></li>
                  <li><a href="product-list.php" class="text-uppercase">Gift cards</a></li>
                </ul>
              </li>
             <li class="profile dropdown">
                <!-- <a class="fa fa-user" aria-hidden="true" href=""></a> --> 
                <a href="#" class="dropdown-toggle person" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" ata-placement="left" title="Profile"><i class="fa fa-user"></i><span class="visible-xs">Profile</span></a>
                <ul class="dropdown-menu">
                  <li><a type="button" class="btn login-btn" data-toggle="modal" data-target="#myModal">
                    Sign In
                    </a><small><a data-target="#myModal2" data-toggle="modal" href="#">Dont have id? New Customer</a></small>
                  </li>
                  <li role="separator" class="divider"></li>
                  <li><a href="#">My Orders</a></li>
                  <li><a href="#">Gift Card</a></li>
                  <li><a href="#">Shopping Group</a></li>
                </ul>
              </li>
              <li class="cart dropdown">
                <a class="dropdown-toggle bag" href="cart.php" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" ata-placement="left" title="Cart"><i class="fa fa-shopping-cart"></i><span class="visible-xs">Cart</span></a>
                <ul class="dropdown-menu">
                  <li>
                    <a>
                      <img class="img-responsive cart-img" src="images/02.png">
                      <div class="cart-text">
                        <h5>Puma Backpacks Collection</h5>
                        <small>$ 40</small><i class="fa fa-times"></i>
                      </div>
                    </a>
                  </li>
                  <li role="separator" class="divider"></li>
                </ul>
              </li>
               <li class="cart dropdown">
                <a class="bag" href="wishlist.php" data-placement="left" title="wishlist"><i class="fa fa-heart"></i><span class="visible-xs">wishlist</span></a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>