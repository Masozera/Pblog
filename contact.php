<?PHP
$host = "localhost";
$user ="root"; 
$password = "";
$database = "PERSONALBLOG";
$connection = new mysqli ($host,$user,$password,$database);
if ($connection -> error)
{print("ERROR");
}
else {
	print ("CONNECTION SUCCESSFUL");
}
if (isset($_POST ['SAVE'])){
	echo "<br>";	
	$NAME= $_POST['name'];
	$EMAIL = $_POST['email'];
	$MESSAGE = $_POST['message'];

	
	$sql = "insert into CONTACTS(NAME,EMAIL,BODY,values('$NAME','$EMAIL','$MESSAGE')";
	if ($connection -> query($sql)){
		echo"User Data inserted successfully.";
	}
else		{
	echo "Error is here." .$connection ->error;
	}
}

if (isset($_POST ['SAVED'])){
	$sql = "select * from CONTACTS ";
	$myquery = $connection->query($sql);
	$result = $myquery ->fetch_assoc();
	while($result = $myquery->fetch_assoc()){
		echo "<br>";
		print $result['NAME']."".$result['EMAIL']."".$result['MESSAGE'];
		echo"<br>";
  }
}
  
  
  

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masozera</title>
    <link rel="stylesheet" href="stylesheet.css">
    <link rel="stylesheet" href="responsive.css">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
  </head>
  <body>
    <header>
      <div class="container">
        <div class="header-left">
          <p>PERSONAL BLOG</p>
        </div>
        <div class="header-right">
         
        
          <a href="contact.php" class="h-r-l">Contact</a>
          <a href="projects.php" class="h-r-l">Projects</a>
          <a href="#"class="h-r-l hide-bars-b" ><i class="fa fa-bars  "></i></a>
          <a href="#"class="h-r-l hide-bars-x" ><i class="fa fa-times  "></i></a>
         
        </div>
      </div>
    </header>

    <div class="hidable-nav">
        <a href="contact.php">Conact</a>
        <a href="projects.php">Projects</a>
        <a href="index.php">Home</a>
    </div>

    <div class="contact-form">
    <div class="form-title">Contact Me </div>

            <form action="sent.php" method="post">

                <div class="form-item" >Name</div>
                <input name="name" type="text">

                <div class="form-item" >Email</div>
                <input name="email" type="email">
                
                <!-- <div class="form-item">Age</div> -->
                <!-- Write the <select> tag below -->
                <!-- <select name="age">
                <option value="unselected">Select your age</option>
                <option value="20-29">20-29</option>
                <option value="30-39">30-39</option>
                </select> -->

                <div class="form-item">Message</div>
                <!-- Write the <textarea> tag below -->
                <textarea name="message"></textarea>

                <input type="submit" value="Submit">
            </form>
    </div>
    <footer>
        <div class="social-div">
            <span class="social-text-header">2020 &#169; SirMasozera</span>
            <span><a href="https://www.facebook.com/login/" target="blank"><i class="fa fa-facebook footer_icon float-right footer-social"></i></a></span>
            <span><a href="https://www.instagram.com/accounts/login/" target="blank"><i class="fa fa-twitter footer_icon float-right footer-social"></i></a></span>
            <span><a href="https://twitter.com/login?lang=en" target="blank"><i class="fa fa-instagram footer_icon float-right facebook-padding footer-social"></a ></i></span>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> -->

    <script type="text/javascript" src="main.js"></script>
    
  </body>
</html>
