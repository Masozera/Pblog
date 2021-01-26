<?php require_once('data.php') ;?>
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

$sql = "select * from PROJECTS WHERE is_deleted=0";

$myquery = $conn->query($sql);
while($row = $myquery->fetch_assoc()){
  $PROJECTS[] = $row;
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
  <body class="bg">
    <header>
      <div class="container">
        <div class="header-left">
          <p>PERSONAL BLOG</p>
        </div>
        <div class="header-right">

          <a href="index.php" class="h-r-l">Home</a>
          <a href="contact.php" class="h-r-l">Contact</a>
          <a href="#" class="h-r-l">Projects</a>
          <a href="#"class="h-r-l hide-bars-b" ><i class="fa fa-bars  "></i></a>
          <a href="#"class="h-r-l hide-bars-x" ><i class="fa fa-times  "></i></a>
         
        </div>
      </div>
    </header>

    <div class="hidable-nav">
        <a href="contact.php">Conact</a>
        <a>Projects</a>
        <a href="index.php">Home</a>
    </div>

    <div class="projects">
        <div class="projects-header text-center">
            <h1 class="projects-h">Projects</h1>
        </div>
        <div class="projects-wrapper">

        <?php foreach ($PROJECTS as $PROJECT): ?>
            <div class="project-item">
                <div class="description-right fl-l">
                    <h3 class="fl-l-t"><?php echo $PROJECT['NAME']; ?></h3>
                    <p><?php echo $PROJECT['DESCRIPTION']; ?><</p>
                </div>
                <div class="content-right fl-l k">
                    <img src="<?php echo $PROJECT['IMAGE']; ?>" style="width:100%">
                    <div>
                    <a href="">Find Details</a>
                    <a href="#" class="btn link-btn"> <i class="fa fa-github"></i></a>
                    </div>
                </div>
                <div style="clear:both"></div>
                    
            </div>
          <?php endforeach ?>


            <!-- <div class="project-item">
                <div class="description-right fl-l">
                    <h3 class="fl-l-t">MONDY PROJECT</h3>
                    <p>Website for a cleaning company</p>
                </div>
                <div class="content-right fl-l">
                    <img src="c" style="width:100%; padding-top:20px">
                    <div class="details-div">
                        <a class="find-d-link">Find Details</a>
                        <a href="#" class="btn link-btn"> <i class="fa fa-github"></i></a>
                    </div>
                    

                </div>
                <div style="clear:both"></div>

            </div> -->

        </div>

    </div>


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
