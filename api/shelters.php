<?php
/**
 * Created by PhpStorm.
 * User: josh
 * Date: 3/5/16
 * Time: 11:16 AM
 */

var_dump($_ENV['DATABASE_USERNAME']);
//
//$conn_string = "host=ec2-54-227-248-123.compute-1.amazonaws.com port=5432 dbname=d7ci554olg4igm user=".getenv('DATABASE_USERNAME')." password=". getenv('DATABASE_PASSWORD') . "";
//$conn = pg_connect($conn_string);


//$results = pg_query($conn, "select location.id, name, lat, long, address1, address2, city, state, zip_code, beds_available from location join shelter on location.id=shelter.location_id where beds_available>0;");
//
//$shelters = pg_fetch_all($results);
//echo '<pre>';
//if (!$shelters) {
//    echo "An error occurred.\n";
//    exit;
//}
//else {
//    foreach ($shelters as $shelter) {
//        json_encode($shelter);
//        exit();
//    }
//}