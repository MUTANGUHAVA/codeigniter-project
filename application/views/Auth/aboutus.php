<!DOCTYPE html>
<html>
  <head>
    <title>About MVRESTO</title>
    <h1>ABOUT MVRESTO</h1>
  <body>
    <div class="container">
      <h2>meet our team</h2>
      
      <div class="profiles">
        <div class="profile">
          <img src="<?php echo base_url('assets/lon.jpg'); ?>"alt="Mutanguha Valentin">
          <h2>Mutanguha Valentin</h2>
          <p>CEO</p>
        </div>
        <div class="profile">
          <img src="<?php echo base_url('assets/ani.jpg'); ?>"alt="Nkurunziza Bonavanture">
          <h2>Nkurunziza Bonavanture</h2>
          <p>Director General</p>
        </div>
        <div class="profile">
          <img src="<?php echo base_url('assets/bip.jpg'); ?>" alt="Nkurunziza Eric">
          <h2>Nkurunziza Eric</h2>
          <p>System Manager</p>
        </div>
        <div class="profile">
          <img src="<?php echo base_url('assets/jack.jpg'); ?>"alt="Nkotanyi Emmacule">
          <h2>Nkotanyi Emmacule</h2>
          <p>Marketing Manager</p>
        </div>
        <div class="profile">
          <img src="<?php echo base_url('assets/kin.jpg'); ?> "alt="Ingabire Odiller">
          <h2>Ingabire Odiller</h2>
          <p>Customer Care Officer</p>
        </div>
      </div>
      <p>Address: 123 Main Street, City, kigali,</p>
    </div>
    <a href="<?php echo base_url('Auth/index'); ?>">
  <button type="submit"class="btn btn-primary ">Back Home</button>
</a>
  </body>
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
        background-color: #f8f8f8;
        margin: left 0;
      }
      h1 {
        text-align: center;
        color: #333;
      }

        h2 {
        text-align: center;
        color: #333;
      }
      .container {
        max-width: 800px;
        margin: 0 auto;
        padding: 20px;
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0px 0px 10px #ccc;
      }
      .profiles {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 20px;
        margin-top: 20px;
      }
      .profile {
        display: flex;
        flex-direction: column;
        align-items: center;
      }
      .profile img {
        width: 150px;
        height: 150px;
        border-radius: 50%;
        margin-bottom: 10px;
      }
      .profile h2 {
        font-size: 24px;
        margin: 0;
        text-align: center;
      }
      .profile p {
        margin: 0;
        text-align: center;
      }
      a{
	      background-color: black;
	      color: white;
	      padding: 12px 20px;
	      border: none;
	      border-radius: 4px;
	      cursor: pointer;
}
    </style>
</html>
