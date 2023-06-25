<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
          <li><a href="<?php echo site_url('order/order1'); ?>"> Order</a></li>
          <li><a href="<?php echo site_url('Contact/contactdb'); ?>"> Contact us</a></li>
          <li><a href="<?php echo site_url('auth/logout'); ?>"> Logout</a></li></ul>
          </ul>
         
      </nav>
    </div>
  </header>
  <main>
   <center> <div class="welcome">
        <h2>Free Online Ordering System for Restaurants</h2>
        <p>Feed more of your hungry customers by tonight with our restaurant online ordering system.</p>
      </div></center>
  </main><br><br><br><br><br>
  
 

 <footer class="text-center" style="background-color: #222; color: black;">
    <div class="container">
      <div class="row">
        
        <div class="col col-3">
          <h4>FOOD ORDERING</h4>
          <ul class="list-unstyled">
            <li>Overview</li>
            <li>Website Ordering</li>
            <li>Facebook Ordering</li>
            <li>Mobile Apps</li>
            <li>How It Works</li>
          </ul>
        </div>
        <div class="col col-3">
          <h4>RESTAURANT SERVICES</h4>
          <ul class="list-unstyled">
            <li>Overview</li>
            <li>Table Reservations</li>
            <li>Pre-order food></li>
            <li>Food for Takeaway</li>
            <li>Food Delivery</li>
          </ul>
        </div>
        <div class="col col-3">
          <h4>MARKETING &amp; SALES</h4>
          <ul class="list-unstyled">
            <li>Videos</li>
            <li>Promotions Engine</li>
            </footer>

</body>
<style>
    * {
  box-sizing: border-box;
  background-color:white;
}
.welcome{
    color:black;
    padding-top: 10em;
}
body {
  padding: 0;
  margin: 0;
  font-family: 'Source Sans Pro', sans-serif;
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
</style>
</html>
