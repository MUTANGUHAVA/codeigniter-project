<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Restaurant Home Page</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
<header class="container">
    <div class="row">
      <div class="logo col col-4">
        <span>Mvresto</span>
      </div>
      <nav class="col col-8">    
        <ul class="navbar list-unstyle list-inline text-right">
        <li><a href="<?php echo site_url('auth/index'); ?>"> Home</a></li>
          <li><a href="<?php echo site_url('auth/aboutus'); ?>"> About us</a></li>
          <li><a href="<?php echo site_url('auth/menu'); ?>"> Menu</a></li>
          <li><a href="<?php echo site_url('Login/loginpage'); ?>"> Login</a></li>
          <li><a href="<?php echo site_url('auth/register'); ?>"> Register</a></li></ul>
      </nav>
    </div>
  </header>
	<section class="welcome-message">
		<h2>FIND OUR MENU HERE</h2>
		<p>We offer the best dining experience in town.</p>
	</section>

	<section class="menu">
		<div class="menu-item">
      <img src="<?php echo base_url('assets/download.jpg'); ?>" alt="Chheps">
			<h3>Cheeps</h3>
			<p>A delicious snack made with flour and spices.</p>
			<p class="price">12000frw</p>
      
		</div>
    
		<div class="menu-item">
      <img src="<?php echo base_url('assets/steak.jpg'); ?>" alt="Steak">
			<h3>Steak</h3>
			<p>A juicy steak cooked to perfection.</p>
			<p class="price">7500frw</p>
		</div>
		<div class="menu-item">
      <img src="<?php echo base_url('assets/omollete.jpg'); ?>"alt="Omorate">
			<h3>Omellete</h3>
			<p>A traditional dish made with beans and spices.</p>
			<p class="price">9000frw</p>
		</div>
		<div class="menu-item">
      <img src="<?php echo base_url('assets/cassava.jpg'); ?>" alt="Cassava">
			<h3>Cassava</h3>
			<p>A side dish made with boiled cassava and butter.</p>
			<p class="price">5000frw</p>
		</div>
		<div class="menu-item">
      <img src="<?php echo base_url('assets/cassava.jpg'); ?>" alt="Cassava">
			<h3>Patatoes</h3>
			<p>Roasted potatoes seasoned with herbs and spices.</p>
			<p class="price">3000frw</p>
		</div>
		<div class="menu-item">
      <img src="<?php echo base_url('assets/burger.jpg'); ?>"alt="Burger">
			<h3>Burger</h3>
			<p>A classic burger with lettuce, tomato, and cheese.</p>
			<p class="price">8000frw</p>
		</div>
	</section>
  <style>
    /* Global styles */
    body {
  padding: 0;
  margin: 0;
  font-family: 'Source Sans Pro', sans-serif;
}

    body {
  margin: 0;
  padding: 0;
  font-family: Arial, sans-serif;
}

.container {
 
 padding: 0 15px;
 margin: 0 auto;
}

.row:after {
 content: "";
 display: table;
 clear: both;
}
.col {
 padding: 0 15px;
 float: left;
}
.col-4 {
 width: 33.33%;
}
.col-8 {
 width: 66.66%;
}
.list-unstyle {
 list-style: none;
 padding: 0;
 margin: 0;
}
.list-inline li {
 display: inline-block;
}
.text-center {
 text-align: center;
 margin-bottom: 0;
}
.text-right {
 text-align: right;
}
text-left {
 text-align: left;
}
header {
 height: 60px;
}
.logo {
 font-size: 3em;
 color:black;
}
.navbar a {
 text-decoration: none;
 cursor: pointer;
 height: 60px;
 line-height: 60px;
 padding: 0 25px;
 display: inline-block;
 color: black;
}
.navbar a:hover {
 background-color: #8bc34a;
 color:black;
}
.products {
 padding: 50px 0;
}
h2 {
 font-size: 2.5em;
 color:black;
 margin: 0 auto 30px;
}
footer {
 padding: 30px ;
 background: blacks;
 color:black;
 margin-bottom: 0;
 margin-top: 20px;
}
@media (max-width: 479px) {
 .col-4,
 .col-8 {
   width: 100%;
 }
 .logo {
   font-size: 2em;
 }
 .jumbotron {
   min-height: 400px;
 }
 .products .thumbnail {
   margin-bottom: 10px;
 }
}

nav ul {
  display: flex;
}

nav ul li {
  margin-left: 20px;
}

nav ul li a:hover {
  color: #ff5f5f;
}


.welcome-message {
  background-color: white;
  color:black;
  text-align: center;
  padding: 50px 0;

}

.welcome-message h2 {
  font-size: 48px;
  font-weight: bold;
  margin-bottom: 20px;
  margin-top: 25px;
}


.menu {
  display: flex;
  flex-wrap: wrap;
  margin-top: 150px;
  margin-bottom: 50px;
}

.menu-item {
  width: calc(100% / 3);
  padding: 20px;
  box-sizing: border-box;
  text-align: center;
}

.menu-item img {
  width: 100%;
  height: 200px;
  object-fit: cover;
  margin-bottom: 20px;
}

.menu-item h3 {
  font-size: 24px;
  font-weight: bold;
  margin-bottom: 10px;
}

.menu-item p {
  font-size: 16px;
  margin-bottom: 20px;
  line-height: 1.5;
}

.menu-item .price {
  font-size: 20px;
  font-weight: bold;
}

  </style>
</body>
</html>
