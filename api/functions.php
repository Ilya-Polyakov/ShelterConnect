<?php
/**
 * Created by PhpStorm.
 * User: josh
 * Date: 3/5/16
 * Time: 1:21 PM
 */


$shelterName = $_REQUEST['shelter_name'];
$bedsTotal = $_REQUEST['beds_total'];
$bedsAvailable = $_REQUEST['beds_available'];
$bedsInMaintenance = $_REQUEST['beds_in_maintainence'];
$phone1 = $_REQUEST['phone1'];
$phone2 = $_REQUEST['phone2'];
$phone3 = $_REQUEST['phone3'];
$address1 = $_REQUEST['address1'];
$address2 = $_REQUEST['address2'];
$city = $_REQUEST['city'];
$state = $_REQUEST['state'];
$zipCode = $_REQUEST['zip_code'];
$lat = $_REQUEST['lat'];
$long = $_REQUEST['long'];
$id = $_REQUEST['id'];


$sql = "select update_shelter_location($1,$2,$3,$4,$5,$6,$7,$8,$9,$10,$11,$12,$13,$14,$15)";
$conn_string = "host=ec2-54-227-248-123.compute-1.amazonaws.com port=5432 dbname=d7ci554olg4igm user=".getenv('DATABASE_USERNAME')." password=". getenv('DATABASE_PASSWORD') . "";
$conn = pg_connect($conn_string);

$result = pg_prepare($conn, 'update_shelter', $sql);
$result = pg_execute($conn, 'update_shelter', array($shelterName,$bedsTotal,$bedsAvailable,$bedsInMaintenance,$phone1,$phone2,$phone3,$address1,$address2,$city,$state,$zipCode,$lat,$long,$id));


//$results = pg_query($conn, "select update_shelter_location($shelterName,$bedsTotal,$bedsAvailable,$bedsInMaintenance,$phone1,$phone2,$phone3,$address1,$address2,$city,$state,$zipCode,$lat,$long,$id);");






header('Location: https://infinite-brook-58503.herokuapp.com/shelter-edit.php?shelterId='.$id);