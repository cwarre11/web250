 <?php
$mysqli = new mysqli('sql103.epizy.com', 'epiz_31507143', 'zuLWTijOReSqIL', 'epiz_31507143_cars' );
/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
//select a database to work with
$mysqli->select_db("cars");
 
?>
