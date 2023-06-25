<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
	</head>
	<header>
      <nav>
        <ul>
          <li><a href="<?php echo site_url('auth/index'); ?>"> HOME</a></li>
          <li><a href="<?php echo site_url('auth/aboutus'); ?>"> About us</a></li>
          <li><a href="<?php echo site_url('auth/menu'); ?>"> menu</a></li>
          <li><a href="<?php echo site_url('auth/order'); ?>"> Order</a></li>
          <li><a href="<?php echo site_url('auth/contactus'); ?>"> CONTACTUS</a></li>
          <li><a href="<?php echo site_url('auth/login'); ?>"> LOGIN</a></li>
          <li><a href="<?php echo site_url('auth/register'); ?>"> REGISTER</a></li>
        </ul>
      </nav>
    </header>
	<section>
		<h2>Contact Us</h2>
		<form action="<?php echo site_url('Contact/contactdb'); ?>" method="POST">
			<label for="name">Name:</label>
			<input type="text" id="name" name="name" placeholder="Your name" required>
			<label for="email">Email:</label>
			<input type="email" id="email" name="email" placeholder="Your email" required>
			<label for="message">Message:</label>
			<textarea id="message" name="message" placeholder="Your message" required></textarea>
			<input type="submit" value="Send Message">
		</form>
	</section>
  

    <footer>
      <p>Follow us on social media:</p>
      <ul>
        <li><a href="https://www.facebook.com/mvresto"><img src="assets/facebook.png" alt="facebook"></a></li>
        <li><a href="https://www.instagram.com/mvresto"><img src="assets/instgram.jpg" alt="Instagram"></a></li>
		<li><a href="https://www.twitter.com/mvresto"><img src="assets/twitter.png" alt="Twitter"></a></li>
        <li><a href="https://www.youtube.com/mvresto"><img src="assets/youtube.png" alt="Youtube"></a></li>
      </ul>
    </footer>
    <style>
		header {
  background-color: white;
  color: #fff;
  padding: 20px;
}

nav ul {
  list-style: none;
  margin: 0;
  padding: 0;
}

nav li {
  display: inline-block;
  margin-right: 20px;
}

nav a {
  color: black;
  text-decoration: none;
}
        
		body {
			font-family: Arial, sans-serif;
			margin: 0;
			padding: 0;
		}
		
		header {
  background-color: white;
  color: #fff;
  padding: 20px;
}

nav ul {
  list-style: none;
  margin: 0;
  padding: 0;
}

nav li {
  display: inline-block;
  margin-right: 20px;
}

nav a {
  color:black;
  text-decoration: none;
}
		section {
			margin: 50px auto;
			max-width: 800px;
			padding: 20px;
			background-color: #f8f8f8;
		}
		form {
			display: flex;
			flex-direction: column;
			max-width: 600px;
			margin: 0 auto;
		}
		label {
			font-size: 18px;
			margin-bottom: 10px;
			color: #333;
		}
		input, textarea {
			padding: 10px;
			font-size: 16px;
			border-radius: 5px;
			border: none;
			margin-bottom: 20px;
		}
		input[type="submit"] {
			background-color: #333;
			color: #fff;
			cursor: pointer;
			font-size: 18px;
			padding: 10px 20px;
			border-radius: 5px;
			transition: background-color 0.3s ease-in-out;
		}
		input[type="submit"]:hover {
			background-color: #666;
		}

        footer {
  background-color: #ccc;
  color: #333;
  padding: 10px;
}

footer ul {
  list-style: none;
  margin: 0;
  padding: 0;
}

footer li {
  display: inline-block;
  margin-right: 10px;
}

footer a img {
  height: 30px;
  width: 30px;
  border-radius: 50%;
  transition: all 0.3s ease-in-out;
}

footer a img:hover {
  transform: scale(1.1);
}

    </style>
</body>
</html>

