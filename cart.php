<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="https://fonts.googleapis.com/css?family=Barlow:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <link href="css/font-awesome.min.css" rel="stylesheet">
      <link href="css/bootstrap.css" rel="stylesheet">
      <!-- owl carousel -->
      <link rel="stylesheet" href="css/owl.carousel.min.css">
      <!-- <link rel="stylesheet" href="../assets/owlcarousel/assets/owl.theme.default.min.css"> -->
      <!-- <link href="css/bootstrap.min.css" rel="stylesheet"> -->
      <link href="css/style.css" rel="stylesheet">
   </head>
   <body>
      <section class="top-bar hidden-xs hidden-sm">
         <div class="top-column">
            <a class="" href="#"><i class="fa fa-envelope-open-o"></i>support@assure.com</a>
            <a class="" href="#"><i class="fa fa-bell-o"></i>000-22-121-3434</a>
            <a class="" href="#"><i class="fa fa-facebook-square"></i></a>
            <a class="" href="#"><i class="fa fa-google-plus-square"></i></a>
            <a class="" href="#"><i class="fa fa-twitter-square"></i></a>
            <a class="" href="#"><i class="fa fa-pinterest-square"></i></a>
            <a class="" href="#"><i class="fa fa-instagram"></i></a>
         </div>
         <div class="top-column currency">
            <a href="#" class="dropdown-toggle" id="dropdownMenu3" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">$ USD <span class="caret"></span></a>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenu3">
               <li class="active"><a href="#"><i class="fa fa-usd"></i>USD</a></li>
               <li><a href="#"><i class="fa fa-jpy"></i>JPY</a></li>
               <li><a href="#"><i class="fa fa-inr"></i>INR</a></li>
               <li><a href="#"><i class="fa fa-btc"></i>BTC</a></li>
               <li><a href="#"><i class="fa fa-eur"></i>EURO</a></li>
            </ul>
         </div>
      </section>
      <?php include 'cms/header.php';?>
      <main class="container cart-page">
         <nav class="page-heading">
            <h2 class="text-center"><i class="fa fa-shopping-bag" aria-hidden="true"></i>Your Cart</h2>
         </nav>
         <div class="row">
            <div class="col-xs-12">
               <ol class="breadcrumb">
                  <li><a href="index.html">Home</a></li>
                  <li><a href="product-list.html">Mens</a></li>
                  <li class=""><a href="#">Product</a></li>
                  <li class="active">cart</li>
               </ol>
            </div>
         </div>
         <div class="table-responsive">
            <table class="table">
               <thead>
                  <tr>
                     <th>Product Name</th>
                     <th class="text-center">Quantity</th>
                     <th class="text-center">Subtotal</th>
                     <th class="text-center">Discount</th>
                     <th class="text-center">Clear</th>
                  </tr>
               </thead>
               <tbody>
                  <tr class="itemRow">
                     <th>
                        <div class="prd-item">
                           <a class="prd-thumb" href="#"><img src="images/02.png" atl="product"></a> 
                           <div class="prd-info">
                              <h4>Unionbay Park</h4>
                              <span><em>Size:</em> 10.5</span> <span><em>Color:</em> Blue</span> 
                           </div>
                        </div>
                     </th>
                     <th class="text-center">
                        <select class="form-control">
                           <option>1</option>
                           <option>2</option>
                           <option>3</option>
                           <option>4</option>
                           <option>5</option>
                        </select>
                     </th>
                     <th class="text-center">100$</th>
                     <th class="text-center">-</th>
                     <th class="text-center"><i class="fa fa-times removeItem"></i></th>
                  </tr>
                  <tr class="itemRow">
                     <th>
                        <div class="prd-item">
                           <a class="prd-thumb" href="#"><img src="images/02.png" atl="product"></a> 
                           <div class="prd-info">
                              <h4>Unionbay Park</h4>
                              <span><em>Size:</em> 10.5</span> <span><em>Color:</em> Blue</span> 
                           </div>
                        </div>
                     </th>
                     <th class="text-center">
                        <select class="form-control">
                           <option>1</option>
                           <option>2</option>
                           <option>3</option>
                           <option>4</option>
                           <option>5</option>
                        </select>
                     </th>
                     <th class="text-center">100$</th>
                     <th class="text-center">-</th>
                     <th class="text-center"><i class="fa fa-times removeItem"></i></th>
                  </tr>
                  <tr class="itemRow">
                     <th>
                        <div class="prd-item">
                           <a class="prd-thumb" href="#"><img src="images/02.png" atl="product"></a> 
                           <div class="prd-info">
                              <h4>Unionbay Park</h4>
                              <span><em>Size:</em> 10.5</span> <span><em>Color:</em> Blue</span> 
                           </div>
                        </div>
                     </th>
                     <th class="text-center">
                        <select class="form-control">
                           <option>1</option>
                           <option>2</option>
                           <option>3</option>
                           <option>4</option>
                           <option>5</option>
                        </select>
                     </th>
                     <th class="text-center">100$</th>
                     <th class="text-center">-</th>
                     <th class="text-center"><i class="fa fa-times removeItem"></i></th>
                  </tr>
               </tbody>
            </table>
         </div>
         <div class="cart-ttl">
            <div class="col-xs-12 col-md-7">
               <form class="cpn">
                  <input class="form-control" type="text" placeholder="Coupon code" required="">
                  <a class="btn" type="submit">Apply Coupon</a>
               </form>
            </div>
            <div class="col-xs-12 col-md-5 sub-total-r">
               <h5>Subtotal:<span> $250.00</span></h5>
            </div>
         </div>
         <div class="cart-0out">
            <div class="col-xs-12 text-right">
               <a href="#" class="btn text-uppercase up">Update cart</a>
               <a href="checkout.html" class="btn text-uppercase check">Check out</a>
            </div>
         </div>
         <div class="">
            <div class="col-xs-12 prd-slider">
               <h2 class="text-center"><span class="color-red">You May also </span>Like</h2>
               <div class="owl-carousel ol3 owl-theme">
                  <div class="item">
                     <div class="prd-img-bx">
                        <img src="images/p01.jpg" class="img-responsive">
                        <span class="discount-tag">41%</span>
                        <div class="overlay">
                           <a class="fa fa-heart-o" href="#"></a>
                           <a class="btn-cart" href=""><i class="fa fa-shopping-bag"></i>Add to cart</a>
                        </div>
                     </div>
                     <div class="prd-detail">
                        <a href="">
                           <h3>Nike N150 Blue Wave EDT - 150 ml  (For Men)</h3>
                        </a>
                        <span class="discounted">$80.00</span><strike>$160.00</strike>
                     </div>
                  </div>
                  <div class="item">
                     <div class="prd-img-bx">
                        <img src="images/p02.jpg" class="img-responsive">
                        <span class="discount-tag">12%</span>
                        <div class="overlay">
                           <a class="fa fa-heart-o" href="#"></a>
                           <a class="btn-cart" href=""><i class="fa fa-shopping-bag"></i>Add to cart</a>
                        </div>
                     </div>
                     <div class="prd-detail">
                        <a href="">
                           <h3>Nike N150 Blue Wave EDT - 150 ml  (For Men)</h3>
                        </a>
                        <span class="discounted">$80.00</span><strike>$160.00</strike>s
                     </div>
                  </div>
                  <div class="item">
                     <div class="prd-img-bx">
                        <img src="images/p03.jpg" class="img-responsive">
                        <span class="discount-tag">19%</span>
                        <div class="overlay">
                           <a class="fa fa-heart-o" href="#"></a>
                           <a class="btn-cart" href=""><i class="fa fa-shopping-bag"></i>Add to cart</a>
                        </div>
                     </div>
                     <div class="prd-detail">
                        <a href="">
                           <h3>Nike N150 Blue Wave EDT - 150 ml  (For Men)</h3>
                        </a>
                        <span class="discounted">$80.00</span><strike>$160.00</strike>
                     </div>
                  </div>
                  <div class="item">
                     <div class="prd-img-bx">
                        <img src="images/p04.jpg" class="img-responsive">
                        <span class="discount-tag">27%</span>
                        <div class="overlay">
                           <a class="fa fa-heart-o" href="#"></a>
                           <a class="btn-cart" href=""><i class="fa fa-shopping-bag"></i>Add to cart</a>
                        </div>
                     </div>
                     <div class="prd-detail">
                        <a href="">
                           <h3>Nike N150 Blue Wave EDT - 150 ml  (For Men)</h3>
                        </a>
                        <span class="discounted">$80.00</span><strike>$160.00</strike>
                     </div>
                  </div>
                  <div class="item">
                     <div class="prd-img-bx">
                        <img src="images/p05.jpg" class="img-responsive">
                        <span class="discount-tag">11%</span>
                        <div class="overlay">
                           <a class="fa fa-heart-o" href="#"></a>
                           <a class="btn-cart" href=""><i class="fa fa-shopping-bag"></i>Add to cart</a>
                        </div>
                     </div>
                     <div class="prd-detail">
                        <a href="">
                           <h3>Nike N150 Blue Wave EDT - 150 ml  (For Men)</h3>
                        </a>
                        <span class="discounted">$80.00</span><strike>$160.00</strike>
                     </div>
                  </div>
                  <div class="item">
                     <div class="prd-img-bx">
                        <img src="images/p06.jpg" class="img-responsive">
                        <span class="discount-tag">20%</span>
                        <div class="overlay">
                           <a class="fa fa-heart-o" href="#"></a>
                           <a class="btn-cart" href=""><i class="fa fa-shopping-bag"></i>Add to cart</a>
                        </div>
                     </div>
                     <div class="prd-detail">
                        <a href="">
                           <h3>Nike N150 Blue Wave EDT - 150 ml  (For Men)</h3>
                        </a>
                        <span class="discounted">$80.00</span><strike>$160.00</strike>
                     </div>
                  </div>
                  <div class="item">
                     <div class="prd-img-bx">
                        <img src="images/p07.jpg" class="img-responsive">
                        <span class="discount-tag">49%</span>
                        <div class="overlay">
                           <a class="fa fa-heart-o" href="#"></a>
                           <a class="btn-cart" href=""><i class="fa fa-shopping-bag"></i>Add to cart</a>
                        </div>
                     </div>
                     <div class="prd-detail">
                        <a href="">
                           <h3>Nike N150 Blue Wave EDT - 150 ml  (For Men)</h3>
                        </a>
                        <span class="discounted">$80.00</span><strike>$160.00</strike>
                     </div>
                  </div>
                  <div class="item">
                     <div class="prd-img-bx">
                        <img src="images/p08.jpg" class="img-responsive">
                        <span class="discount-tag">44%</span>
                        <div class="overlay">
                           <a class="fa fa-heart-o" href="#"></a>
                           <a class="btn-cart" href=""><i class="fa fa-shopping-bag"></i>Add to cart</a>
                        </div>
                     </div>
                     <div class="prd-detail">
                        <a href="">
                           <h3>Nike N150 Blue Wave EDT - 150 ml  (For Men)</h3>
                        </a>
                        <span class="discounted">$80.00</span><strike>$160.00</strike>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </main>
      <?php include 'cms/footer.php';?>
      <?php include 'cms/popup.php';?>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      <script src="js/owl.carousel.js"></script>
      <script src="js/commanjs.js"></script>
      <script src="js/bootstrap.min.js"></script>
   </body>
</html>