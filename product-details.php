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
      <main class="container">
         <div class="row p-tb">
            <div class="col-xs-12">
               <ol class="breadcrumb">
                  <li><a href="index.php">Home</a></li>
                  <li><a href="product-list.php">Mens</a></li>
                  <li class="active">Product</li>
               </ol>
            </div>
            <div class="col-xs-12 col-md-6">
               <span class="discount-tag">51%</span>
               <div class="left-box-pdetail">
                  <div class="owl-carousel ol2 owl-theme">
                     <div class="item">
                        <div class="big-thumb" data-hash="one"><img  class="" src="images/p03.jpg"></div>
                     </div>
                     <div class="item">
                        <div class="big-thumb" data-hash="two"><img  class="" src="images/p02.jpg"></div>
                     </div>
                     <div class="item">
                        <div class="big-thumb" data-hash="three"><img  class="" src="images/p05.jpg"></div>
                     </div>
                     <div class="item">
                        <div class="big-thumb" data-hash="four"><img  class="" src="images/p04.jpg"></div>
                     </div>
                     <div class="item">
                        <div class="big-thumb" data-hash="five"><img  class="" src="images/p06.jpg"></div>
                     </div>
                  </div>
                  <ul class="list-unstyled">
                     <li><a href="#one"><img class="thumb-img" src="images/p03.jpg"></a></li>
                     <li><a href="#two"><img class="thumb-img" src="images/p02.jpg"></a></li>
                     <li><a href="#three"><img class="thumb-img" src="images/p05.jpg"></a></li>
                     <li><a href="#four"><img class="thumb-img" src="images/p04.jpg"></a></li>
                     <li><a href="#five"><img class="thumb-img" src="images/p06.jpg"></a></li>
                  </ul>
               </div>
            </div>
            <div class="col-xs-12 col-md-6">
               <div class="right-box-pdetail">
                  <div class="rating">
                     <i class="fa fa-star-o" aria-hidden="true"></i>
                     <i class="fa fa-star-o" aria-hidden="true"></i>
                     <i class="fa fa-star-o" aria-hidden="true"></i>
                     <i class="fa fa-star-o" aria-hidden="true"></i>
                     <i class="fa fa-star-o" aria-hidden="true"></i>
                  </div>
                  <span class="r-rew">4.2  |  3 customer reviews</span>
                  <h2 class="prd-title">Puma Royal CL Jogger 2</h2>
                  <p class="prd-price"><strike>$68.00</strike> $47.60</p>
                  <div class="row r-sel-area mb-20">
                     <div class="col-sm-4">
                        <label for="sel1">Select size</label>
                        <select class="form-control" id="sel1">
                           <option>1</option>
                           <option>2</option>
                           <option>3</option>
                           <option>4</option>
                        </select>
                     </div>
                     <div class="col-sm-5">
                        <label for="sel2">Select Color</label>
                        <select class="form-control" id="sel2">
                           <option>Red</option>
                           <option>Green</option>
                           <option>Blue</option>
                           <option>White</option>
                        </select>
                     </div>
                     <div class="col-sm-3">
                        <label for="sel3">Select Quantity</label>
                        <select class="form-control" id="sel3">
                           <option>1</option>
                           <option>2</option>
                           <option>3</option>
                           <option>4</option>
                        </select>
                     </div>
                  </div>
                  <div class="prd-code"><span>SKU: </span> #214567</div>
                  <div class="prd-cat"><span>Category: </span>Mens Shoes, Sprots Shoes</div>
                  <div class="row mtb-20 btn-row">
                     <div class="btn-group-bx"><a href="#" class="btn-add">Add To Cart</a><a href="#" class="btn-add fav-color">Add To wishlist</a></div>
                  </div>
                  <div class="col-xs-12 col-md-5 share-social">
                     <span>Share</span>
                     <div class="share-b text-right">
                        <a class="fa fa-facebook"></a>
                        <a class="fa fa-pinterest-p"></a>
                        <a class="fa fa-google"></a>
                        <a class="fa fa-instagram"></a>
                        <a class="fa fa-twitter"></a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         </div>
         <div class="row pb-40">
            <div class="col-xs-12 prd-info">
               <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                  <div class="panel panel-default">
                     <div class="panel-heading" role="tab" id="headingOne">
                        <h4 class="panel-title">
                           <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                           Product Detail
                           </a>
                        </h4>
                     </div>
                     <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                        <div class="panel-body">
                           Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                        </div>
                     </div>
                  </div>
                  <div class="panel panel-default">
                     <div class="panel-heading" role="tab" id="headingTwo">
                        <h4 class="panel-title">
                           <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                           Material & Care
                           </a>
                        </h4>
                     </div>
                     <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                        <div class="panel-body">
                           Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                        </div>
                     </div>
                  </div>
                  <div class="panel panel-default">
                     <div class="panel-heading" role="tab" id="headingThree">
                        <h4 class="panel-title">
                           <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                           Check Delivery Options
                           </a>
                        </h4>
                     </div>
                     <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                        <div class="panel-body">
                           Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                        </div>
                     </div>
                  </div>
                  <div class="panel panel-default">
                     <div class="panel-heading" role="tab" id="headingFour">
                        <h4 class="panel-title">
                           <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                           Payment Options
                           </a>
                        </h4>
                     </div>
                     <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                        <div class="panel-body">
                           Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                        </div>
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
      <script src="js/smoothproducts.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
   </body>
</html>