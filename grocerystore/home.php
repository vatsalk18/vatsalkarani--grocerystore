
Database connection successful!
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>home page</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   

<header class="header">

   <div class="flex">

      <a href="admin_page.php" class="logo">Groco<span>.</span></a>

      <nav class="navbar">
         <a href="home.php">home</a>
         <a href="shop.php">shop</a>
         <a href="orders.php">orders</a>
         <a href="about.php">about</a>
         <a href="contact.php">contact</a>
      </nav>

      <div class="icons">
         <div id="menu-btn" class="fas fa-bars"></div>
         <div id="user-btn" class="fas fa-user"></div>
         <a href="search_page.php" class="fas fa-search"></a>
                  <a href="wishlist.php"><i class="fas fa-heart"></i><span>(0)</span></a>
         <a href="cart.php"><i class="fas fa-shopping-cart"></i><span>(1)</span></a>
      </div>

      <div class="profile">
                  <img src="uploaded_img/apple.jpg" alt="">
         <p>Rohit Chauhan</p>
         <a href="user_profile_update.php" class="btn">update profile</a>
         <a href="logout.php" class="delete-btn">logout</a>
         <div class="flex-btn">
            <a href="login.php" class="option-btn">login</a>
            <a href="register.php" class="option-btn">register</a>
         </div>
      </div>

   </div>

</header>
<div class="home-bg">

   <section class="home">

      <div class="content">
         <span>don't panic, go organice</span>
         <h3>Reach For A Healthier You With Organic Foods</h3>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto natus culpa officia quasi, accusantium explicabo?</p>
         <a href="about.php" class="btn">about us</a>
      </div>

   </section>

</div>

<section class="home-category">

   <h1 class="title">shop by category</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/cat-1.png" alt="">
         <h3>fruits</h3>
         <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Exercitationem, quaerat.</p>
         <a href="category.php?category=fruits" class="btn">fruits</a>
      </div>

      <div class="box">
         <img src="images/cat-2.png" alt="">
         <h3>meat</h3>
         <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Exercitationem, quaerat.</p>
         <a href="category.php?category=meat" class="btn">meat</a>
      </div>

      <div class="box">
         <img src="images/cat-3.png" alt="">
         <h3>vegitables</h3>
         <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Exercitationem, quaerat.</p>
         <a href="category.php?category=vegitables" class="btn">vegitables</a>
      </div>

      <div class="box">
         <img src="images/cat-4.png" alt="">
         <h3>fish</h3>
         <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Exercitationem, quaerat.</p>
         <a href="category.php?category=fish" class="btn">fish</a>
      </div>

   </div>

</section>

<section class="products">

   <h1 class="title">latest products</h1>

   <div class="box-container">

      <form action="" class="box" method="POST">
      <div class="price">$<span>3</span>/-</div>
      <a href="view_page.php?pid=24" class="fas fa-eye"></a>
      <img src="uploaded_img/apple.jpg" alt="">
      <div class="name">Apple</div>
      <input type="hidden" name="pid" value="24">
      <input type="hidden" name="p_name" value="Apple">
      <input type="hidden" name="p_price" value="3">
      <input type="hidden" name="p_image" value="apple.jpg">
      <input type="number" min="1" value="1" name="p_qty" class="qty">
      <input type="submit" value="add to wishlist" class="option-btn" name="add_to_wishlist">
      <input type="submit" value="add to cart" class="btn" name="add_to_cart">
   </form>
      <form action="" class="box" method="POST">
      <div class="price">$<span>1</span>/-</div>
      <a href="view_page.php?pid=25" class="fas fa-eye"></a>
      <img src="uploaded_img/banana.jpg" alt="">
      <div class="name">Banana</div>
      <input type="hidden" name="pid" value="25">
      <input type="hidden" name="p_name" value="Banana">
      <input type="hidden" name="p_price" value="1">
      <input type="hidden" name="p_image" value="banana.jpg">
      <input type="number" min="1" value="1" name="p_qty" class="qty">
      <input type="submit" value="add to wishlist" class="option-btn" name="add_to_wishlist">
      <input type="submit" value="add to cart" class="btn" name="add_to_cart">
   </form>
      <form action="" class="box" method="POST">
      <div class="price">$<span>4</span>/-</div>
      <a href="view_page.php?pid=26" class="fas fa-eye"></a>
      <img src="uploaded_img/broccoli.jpg" alt="">
      <div class="name">Broccoli</div>
      <input type="hidden" name="pid" value="26">
      <input type="hidden" name="p_name" value="Broccoli">
      <input type="hidden" name="p_price" value="4">
      <input type="hidden" name="p_image" value="broccoli.jpg">
      <input type="number" min="1" value="1" name="p_qty" class="qty">
      <input type="submit" value="add to wishlist" class="option-btn" name="add_to_wishlist">
      <input type="submit" value="add to cart" class="btn" name="add_to_cart">
   </form>
      <form action="" class="box" method="POST">
      <div class="price">$<span>2</span>/-</div>
      <a href="view_page.php?pid=27" class="fas fa-eye"></a>
      <img src="uploaded_img/milk.jpg" alt="">
      <div class="name">Milk</div>
      <input type="hidden" name="pid" value="27">
      <input type="hidden" name="p_name" value="Milk">
      <input type="hidden" name="p_price" value="2">
      <input type="hidden" name="p_image" value="milk.jpg">
      <input type="number" min="1" value="1" name="p_qty" class="qty">
      <input type="submit" value="add to wishlist" class="option-btn" name="add_to_wishlist">
      <input type="submit" value="add to cart" class="btn" name="add_to_cart">
   </form>
      <form action="" class="box" method="POST">
      <div class="price">$<span>2</span>/-</div>
      <a href="view_page.php?pid=28" class="fas fa-eye"></a>
      <img src="uploaded_img/bread.jpg" alt="">
      <div class="name">Bread</div>
      <input type="hidden" name="pid" value="28">
      <input type="hidden" name="p_name" value="Bread">
      <input type="hidden" name="p_price" value="2">
      <input type="hidden" name="p_image" value="bread.jpg">
      <input type="number" min="1" value="1" name="p_qty" class="qty">
      <input type="submit" value="add to wishlist" class="option-btn" name="add_to_wishlist">
      <input type="submit" value="add to cart" class="btn" name="add_to_cart">
   </form>
      <form action="" class="box" method="POST">
      <div class="price">$<span>5</span>/-</div>
      <a href="view_page.php?pid=29" class="fas fa-eye"></a>
      <img src="uploaded_img/chicken_breast.jpg" alt="">
      <div class="name">Chicken Breast</div>
      <input type="hidden" name="pid" value="29">
      <input type="hidden" name="p_name" value="Chicken Breast">
      <input type="hidden" name="p_price" value="5">
      <input type="hidden" name="p_image" value="chicken_breast.jpg">
      <input type="number" min="1" value="1" name="p_qty" class="qty">
      <input type="submit" value="add to wishlist" class="option-btn" name="add_to_wishlist">
      <input type="submit" value="add to cart" class="btn" name="add_to_cart">
   </form>
   
   </div>

</section>







<footer class="footer">

   <section class="box-container">

      <div class="box">
         <h3>quick links</h3>
         <a href="home.php"> <i class="fas fa-angle-right"></i> home</a>
         <a href="shop.php"> <i class="fas fa-angle-right"></i> shop</a>
         <a href="about.php"> <i class="fas fa-angle-right"></i> about</a>
         <a href="contact.php"> <i class="fas fa-angle-right"></i> contact</a>
      </div>

      <div class="box">
         <h3>extra links</h3>
         <a href="cart.php"> <i class="fas fa-angle-right"></i> cart</a>
         <a href="wishlist.php"> <i class="fas fa-angle-right"></i> wishlist</a>
         <a href="login.php"> <i class="fas fa-angle-right"></i> login</a>
         <a href="register.php"> <i class="fas fa-angle-right"></i> register</a>
      </div>

      <div class="box">
         <h3>contact info</h3>
         <p> <i class="fas fa-phone"></i> +123-456-7890 </p>
         <p> <i class="fas fa-phone"></i> +111-222-3333 </p>
         <p> <i class="fas fa-envelope"></i> vatsal_hardik@gmail.com </p>
         <p> <i class="fas fa-map-marker-alt"></i> mumbai, india - 400104 </p>
      </div>

      <div class="box">
         <h3>follow us</h3>
         <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
         <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
         <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
         <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
      </div>

   </section>


</footer>
<script src="js/script.js"></script>

</body>
</html>