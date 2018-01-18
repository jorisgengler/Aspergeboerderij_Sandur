<html>
<head>
  <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-112070976-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-112070976-1');
</script>

<title>Aspergeboerdrij Sandur</title>
<link rel="icon" href="images/tablogo.png">
<link href="css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div class="container">

  <div class="header">
        <div class="slogan">

          <div class="nieuwsbrief" id="nieuwsbrief">
          <form name="nieuwsbrief" action="action_page_nieuwsbrief.php" onsubmit="return validateForm();" method="post">
          <label for="email"> <p1>Nieuwsbrief:</p1></label>
            <input type="text" id="email" name="email" placeholder="Email">
            <input type="submit" name="register" value="Meld me aan"> </input>
          </form>
          </div>
            <p>Vaart NZ 186 | Nieuw Amsterdam | +31 (0)591554375</p>
        </div><!--/slogan-->
        <div class="nav">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="de boerderij.php">DE BOERDERIJ</a></li>
                <li><a href="producten.php">PRODUCTEN</a></li>
                <li><a href="excursie.php">EXCURSIE</a></li>
                <li><a href="fresh food academy.php">FRESH FOOD ACADEMY</a></li>
                <li><a href="recepten.php">RECEPTEN</a></li>
                <li><a href="contact.php">CONTACT</a></li>
            </ul>
        </div><!--/nav-->
    </div><!--/header-->
    <a class="logo" href="#">
  		<img src="/images/logo.png" alt="Logo" style="width: 400px; height: auto; max-width: 147%; margin-top: 20%;">
    </a><!--/logo-->
    <div class="clear"></div><!--/clear-->
    <div class="backbanner">
      <div class="semibackbanner">
         <img src="images/banner-img.jpg" width="960" height="119" />
        </div><!--/semibackbanner-->
    </div><!--/backbanner-->
        <div class="clear"></div><!--/clear-->

        <!--javascript-->
        	<script src="javascript/validateform.js"></script>

    <div class="content">

    <div class="tekst5">
      <p>Oeps er ging iets mis.</br>
        Probeer het nogmaals
      </p>
  </div>
  </div><!--/content-->
</div><!--/container-->

<?php include 'footer.php'; ?>
</body>
</html>
