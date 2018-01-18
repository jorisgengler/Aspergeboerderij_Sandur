<?php
mb_internal_encoding("iso-8859-1");
mb_http_output( "UTF-8" );
ob_start("mb_output_handler");

require 'php_action/databasecon.php'; //connect to database

$sql = "SELECT kop, bereiding, bron, img, ingredienten FROM receptenpage";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {

echo '<div class="recptendata">';
        echo "<h1>".$row["kop"]."</h1><br><br>";
        echo '<img src="data:image/jpeg;base64,'.base64_encode($row['img'] ).'" height="200" width="200" class="img-thumnail" />'."<br><br>";
        echo $row["ingredienten"]. "<br><br>";
        echo "<br>";
        echo $row["bereiding"]. "<br><br>" . $row["bron"]. "<br><br>";
echo '</div>';

    }
} else {
    echo "Er zijn geen recepten ";
}

$conn->close();

?>
