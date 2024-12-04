<?php 
    include("conection.php");
    $sql_product = "SELECT * FROM productsell ORDER BY productsellID DESC";
    $query_product = mysqli_query ($mysqli,$sql_product);
?>


</html>
<!DOCTYPE html>
<html>
<head>
  <meta charset=utf-8>
  <title>Trang chủ</title>
  <link rel="stylesheet"  href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet"  href="bootstrap/css/bootstrap.css">
  <link rel="stylesheet"  href="bootstrap/js/bootstrap.bundle.js">
  <link rel="stylesheet"  href="bootstrap/js/bootstrap.bundle.min.js">
  <link rel="stylesheet"  href="style.css">
  <link rel="stylesheet"  href="themify-icons/themify-icons.css">
  <link rel="shortcut icon" href="https://img.icons8.com/cotton/2x/laptop--v3.png" type="image/png">

  <link rel="shortcut icon" href="assets/images/favicon.ico" type="image/png">

    <!-- ::::::::::::::All CSS Files here :::::::::::::: -->
    <!-- Vendor CSS -->
    <link rel="stylesheet" href="assets/css/vendor/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/vendor/plaza-icon.css">
    <link rel="stylesheet" href="assets/css/vendor/jquery-ui.min.css">

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="assets/css/plugins/slick.css">
    <link rel="stylesheet" href="assets/css/plugins/animate.min.css">
    <link rel="stylesheet" href="assets/css/plugins/nice-select.css">
    <link rel="stylesheet" href="assets/css/plugins/venobox.min.css">

    <!-- Main CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body> 
<?php
    include("menu.php")
    ?> 
    <div>
<ul class="nav flex-column sticky-top">
   <li class="nav-item">
   <a  class="navbar-branch nav-link" href="../index.php">
        <img style="margin-top: 100px; display: none;" src="image/thanh1.png" height="100">
      </a>
   </li>
</ul>
</div>
<div class="position-fixed" style="align-items:center;top:200px; left:20px;">
      
      <img style="" src="image/thanh1.png" width="50%">
      
   </div><div class="position-fixed" style="align-items:center;top:200px; right:-90px;">
      
      <img style="" src="image/thanh2.png" width="50%">
      
   </div>

        <div class="container">
        <div id="slides" class="carousel slide" data-ride="carousel">
        <ul class="carousel-indicators">
          <li data-target="#slides" data-slide-to="0" class="active"></li>
          <li data-target="#slides" data-slide-to="1"></li>
          <li data-target="#slides" data-slide-to="2"></li>
        </ul>
        <div class="carousel-inner" >
          <div class="carousel-item active">
            <img style="text-align: center ;width: 100%; height: auto; " src="image/bia.jpg" alt="">
          </div>
          <div class="carousel-item" >
            <img style="text-align: center ;width: 100%; height: auto; " src="image/anh2.jpg" alt="">
          </div>
          <div class="carousel-item" >
            <img style="text-align: center ;width: 100%; height: auto; " src="image/anh3.jpg" alt="">
          </div>
        </div>
      </div>
      </div>  
</div>


<!-- midle -->
    <div class="text-center">
      <img style="width: 638px; height: auto" src = "image/hotdealtrongthang.png">
    </div>
    
    <div style="width:100%">
      
      <?php
      while($row_product = mysqli_fetch_array($query_product)){
        ?>
        <?php if(isset($_SESSION['customerID'])) { 
          ?>
  <div class="container"> 
          
          <form action="allProduct?id_cus=9<?php echo $_SESSION['customerID'];?>" method="POST" >
          <div style="margin: 20px">
              <div class="card" style=" width: 25%; float: left; text-align: center  ">
              <img src="image/<?php echo $row_product['image'];?>" class="card-img-top" alt="...">
               <div class="card-body">
                 <h2><?php echo $row_product['productsellName'];?></h2>
                 <h6>Giá: <?php echo $row_product['price'];?> VND</h6>
                 <input type="submit" class="btn btn-info" name='submit' value="Mua" >
              </div>
              </div>
              </div>
            
         </form>
         </div>
         </div>
         <?php
         
       }else{
         ?>
  <div class="container"> 

         <div class="card" style=" width: 25%; float: left; text-align: center  ">
              <img src="image/<?php echo $row_product['image'];?>" class="card-img-top" alt="...">
               <div class="card-body">
                 <h2><?php echo $row_product['productsellName'];?></h2>
                 <h6>Giá: <?php echo $row_product['price'];?> VND</h6>
              </div>
              </div>
              </div>
       <?php
     }
   }
   ?>
</div>
<!-- footer1 -->
<div class="text-center">
      <img style="width: 638px; height: auto" src = "image/type/uudaichokhachhang.png">
    </div>
<div class="mng-sec" style="text-align: center">
<img style= "" src="image/type/solid1.png" width="50%">
<img style= "" src="image/type/solid5.png" width="25%">
<img style= "" src="image/type/solid4.png" width="25%">
<img style= "" src="image/type/solid3.png" width="25%">
<img style= "" src="image/type/solid6.png" width="25%">

</div>

  <div class = "container" style = "margin-top: 25px">
      <div class="text-center">
        <img style="text-align: center" src="">
      </div>
      <p><img style= "" src="image/quangcao/anh4.jpg" width="50%"><img style= "" src="image/quangcao/anh5.jpg" width="50%">
        <img style= "" src="image/quangcao/anh6.jpg" width="25%"><img style= "" src="image/quangcao/anh11.jpg" width="25%"><img style= "" src="./image/quangcao/anh8.jpg" width="25%"><img style= "" src="./image/quangcao/anh10.jpg" width="25%">
  </p>
 <!-- footer2 -->
 <hr class="hr--large">
    <div class = "container" style="margin-top: 25px">
      <div class="text-center"> 
      </div>
        <img style= "" src="image/giaohang.PNG" width="24.69%">
        <img style= "" src="image/ch.PNG" width="24.69%">
        <img style= "" src="image/1doi1.PNG" width="24.69%">
        <img style= "" src="image/thanhtoan.PNG" width="24.69%">
    </div>
    
 
<!-- Contact -->
<hr class="hr--large">
<div class = "Conten-sec" >
  <h1 class="sec-heading"style="text-align: center">ĐÓNG GÓP Ý KIẾN</h1>
  <p class="sec-sub-heading"style="text-align: center; color: red">Liên hệ với chúng tôi</p>
  <div class="">
    <div class="col col-half"style="font-size: 17px;padding-left: 40%">
        <p style="width 30px;font-weight: bold"><i class="ti-location-pin" style="width 30px; font-weight: bold;padding: 0 5px"></i>HoChiMinh City, VietNam</p>
        <p style="width 30px;font-weight: bold"><i class="ti-mobile"  style="width: 30px;font-weight: bold;padding: 0 5px"></i>Phone:+84-938325878</p>
        <p style="width 30px;font-weight: bold"><i class="ti-email" style="width: 30px;font-weight: bold;padding: 0 5px"></i>Email:shoplaptop@gmail.com</p>
</div>
<div class=" col-half" style="">
<form target="_blank" action="https://formsubmit.co/dangminhquang1401@gmail.com" method="POST">
    <input type="hidden" name="_subject" value="Shoplaptop: Giải đáp vấn đề!">
    <input type="text" name="_honey" style="display:none">
    <div class="form-group">
      <div class="form-row">
        <div class="col">
          <input type="text" name="name" class="form-control" placeholder="Tên khách hàng" required>
        </div>
        <div class="col">
          <input type="email" name="email" class="form-control" placeholder="Email" required>
          <input type="hidden" name="_next" value="http://localhost/shoplaptop/allproduct/thankyou.php">
        </div>
      </div>
    </div>
    <div class="form-group">
      <textarea placeholder="Lời nhắn" class="form-control" name="message"  required></textarea>
    </div>
    <input type="submit" style="background-color:black; color: #fff; float: right" value="Gửi"> 
  </form>
</div>
</div>
<hr class="hr--large">
    <div class = "space" style="text-align: center; background-color: #white ">
   
              <ul style="list-style: none" class="no-bullets social-icons">
                    <li style="text-align: center">
                    <a class = "ti-facebook"style=" color: black" href="https://www.facebook.com/profile.php?id=100014117371605" title="Q&T on Facebook" >
                      Facebook
                    </a>
                    <a class = "ti-pinterest"style=" color: black" href="https://www.pinterest.com/bachthien2739/_saved/" title="Q&T on Pinterest">
                      Pinterest
                    </a>
                    <a class = "ti-instagram"style=" color: black" href="https://www.instagram.com/shoplaptop.vn/" title="Q&T on Instagram">
                      Instagram
                    </a>
                    </li>
              </ul>
              <p class="site-footer__copyright-content">
                  © 2021, 
                  <a href="http://localhost/shoplaptop/index.php" \title=""style=" color: red" >Q&T</a>
            
    </div>

 <div class="position-fixed" style="bottom:-130px; right:5px;">
      <a href="https://www.facebook.com/hutechuniversity">
      <img style="" src="image/thanhFb.png" height="300">
      </a>
</div> 
<!-- Start Modal Quickview cart -->
<div class="modal fade" id="modalQuickview" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog  modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col text-right">
                                <button type="button" class="close modal-close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true"> <i class="fa fa-times"></i></span>
                                </button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="product-details-gallery-area">
                                    <div class="product-large-image modal-product-image-large">
                                        <div class="product-image-large-single">
                                            <img class="img-fluid" src="assets/images/products_images/aments_products_image_1.jpg" alt="">
                                        </div>
                                        <div class="product-image-large-single">
                                            <img class="img-fluid" src="assets/images/products_images/aments_products_image_2.jpg" alt="">
                                        </div>
                                        <div class="product-image-large-single">
                                            <img class="img-fluid" src="assets/images/products_images/aments_products_image_3.jpg" alt="">
                                        </div>
                                        <div class="product-image-large-single">
                                            <img class="img-fluid" src="assets/images/products_images/aments_products_image_4.jpg" alt="">
                                        </div>
                                        <div class="product-image-large-single">
                                            <img class="img-fluid" src="assets/images/products_images/aments_products_image_5.jpg" alt="">
                                        </div>
                                        <div class="product-image-large-single">
                                            <img class="img-fluid" src="assets/images/products_images/aments_products_image_6.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="product-image-thumb modal-product-image-thumb">
                                        <div class="zoom-active product-image-thumb-single">
                                            <img class="img-fluid" src="assets/images/products_images/aments_products_image_1.jpg" alt="">
                                        </div>
                                        <div class="product-image-thumb-single">
                                            <img class="img-fluid" src="assets/images/products_images/aments_products_image_2.jpg" alt="">
                                        </div>
                                        <div class="product-image-thumb-single">
                                            <img class="img-fluid" src="assets/images/products_images/aments_products_image_3.jpg" alt="">
                                        </div>
                                        <div class="product-image-thumb-single">
                                            <img class="img-fluid" src="assets/images/products_images/aments_products_image_4.jpg" alt="">
                                        </div>
                                        <div class="product-image-thumb-single">
                                            <img class="img-fluid" src="assets/images/products_images/aments_products_image_5.jpg" alt="">
                                        </div>
                                        <div class="product-image-thumb-single">
                                            <img class="img-fluid" src="assets/images/products_images/aments_products_image_6.jpg" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="product-details-content-area">
                                    <!-- Start  Product Details Text Area-->
                                    <div class="product-details-text">
                                        <h4 class="title">Nonstick Dishwasher PFOA</h4>
                                        <div class="price"><del>$70.00</del>$80.00</div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia iste laborum ad impedit pariatur esse optio tempora sint ullam autem deleniti nam in quos qui nemo ipsum numquam, reiciendis maiores quidem aperiam, rerum vel recusandae</p>
                                    </div> <!-- End  Product Details Text Area-->
                                    <!-- Start Product Variable Area -->
                                    <div class="product-details-variable">
                                        <!-- Product Variable Single Item -->
                                        <div class="variable-single-item">
                                            <span>Color</span>
                                            <div class="product-variable-color">
                                                <label for="modal-product-color-red">
                                                    <input name="modal-product-color" id="modal-product-color-red" class="color-select" type="radio" checked>
                                                    <span class="product-color-red"></span>
                                                </label>
                                                <label for="modal-product-color-tomato">
                                                    <input name="modal-product-color" id="modal-product-color-tomato" class="color-select" type="radio">
                                                    <span class="product-color-tomato"></span>
                                                </label>
                                                <label for="modal-product-color-green">
                                                    <input name="modal-product-color" id="modal-product-color-green" class="color-select" type="radio">
                                                    <span class="product-color-green"></span>
                                                </label>
                                                <label for="modal-product-color-light-green">
                                                    <input name="modal-product-color" id="modal-product-color-light-green" class="color-select" type="radio">
                                                    <span class="product-color-light-green"></span>
                                                </label>
                                                <label for="modal-product-color-blue">
                                                    <input name="modal-product-color" id="modal-product-color-blue" class="color-select" type="radio">
                                                    <span class="product-color-blue"></span>
                                                </label>
                                                <label for="modal-product-color-light-blue">
                                                    <input name="modal-product-color" id="modal-product-color-light-blue" class="color-select" type="radio">
                                                    <span class="product-color-light-blue"></span>
                                                </label>
                                            </div>
                                        </div>
                                        <!-- Product Variable Single Item -->
                                        <div class="variable-single-item ">
                                            <span>Quantity</span>
                                            <div class="product-variable-quantity">
                                                <input min="1" max="100" value="1" type="number">
                                            </div>
                                        </div>
                                    </div> <!-- End Product Variable Area -->
                                    <!-- Start  Product Details Meta Area-->
                                    <div class="product-details-meta mb-20">
                                        <ul>
                                            <li><a href=""><i class="icon-heart"></i>Add to wishlist</a></li>
                                            <li><a href=""><i class="icon-repeat"></i>Compare</a></li>
                                            <li><a href="#" data-toggle="modal" data-target="#modalQuickview"><i class="icon-shopping-cart"></i>Add To Cart</a></li>
                                        </ul>
                                    </div> <!-- End  Product Details Meta Area-->
                                    <!-- Start  Product Details Social Area-->
                                    <ul class="modal-product-details-social">
                                        <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#" class="pinterest"><i class="fa fa-pinterest"></i></a></li>
                                        <li><a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                                    </ul> <!-- End  Product Details Social Area-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End Modal Quickview cart -->

  
</body>
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</html>
