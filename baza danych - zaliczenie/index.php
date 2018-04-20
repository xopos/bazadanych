<!DOCTYPE html> 
<html> 
 <head> 
   <meta charset="utf-8"> 
   <title>Dane Osobowe</title> 
   <link rel="Stylesheet" type="text/css" href="style.css" />
   <meta name="description" content="Baza danych">
   <meta name="keywords" content="baza danych">
   <meta name="author" content="Gal Anonim">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
 </head>
 <body>

  <div id="header">
    <h1>DANE OSOBOWE</h1>
  </div>

  <div id="menu">
    <ul>
      <li><a href="index.php?id=home">Home</a></li>
      <li><a href="index.php?id=sort">30-60</a></li>
      <li><a href="index.php?id=miejscowosc">Miejscowość</a></li>
      <li><a href="index.php?id=data">Data</a></li>
      <li><a href="index.php?id=1018">10-18 lat</a></li>
     <li><a href="index.php?id=pokaz">Pokaż po nazwisku</a></li>
    </ul>
        
    </nav>
  </div>
  
  <div id="content">
    <p>
    <?php
    require('config.inc.php');
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) 
    {
        die("Connection failed: " . $conn->connect_error);
    } 

    $id = isset($_GET['id'])?$_GET['id']:"";
    
    switch($id)
    {
        case"home":require('home.inc.html'); break;
        case"pokaz":require('pokaz.inc.html'); break;
        case"miejscowosc":require('miejscowosc.inc.html'); break;
        case"data":require('data.inc.html'); break;
        case"1018":require('1018.inc.html'); break;
        case"sort":require('sort.inc.html'); break;
        default: require('home.inc.html');
    }
    mysqli_close($conn);
    ?>
    </p>
  </div>

  <div id="footer">
        &copy; 2018 Gal Anonim
  </div>

</body>
</html>	