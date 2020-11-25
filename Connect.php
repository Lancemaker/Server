<?php

//  if(function_exists($_GET['method'])) {
//       $_GET['method']();
//     }

function fetch($mac){
    //$mac = $_GET["macAdress"];
    $mysqli = mysqli_connect("localhost:3306", "root", "", "posviewer");
    $test = mysqli_query($mysqli, "SELECT * FROM posdata WHERE MAC='".$mac."' order by ID desc");
    $ret=[];
    while($row = $test->fetch_assoc()){
        // echo '<pre>',print_r(mysqli_fetch_assoc($test),1),'</pre>';
        
        array_push($ret,$row);
    }    
    mysqli_close($mysqli);
    //echo '<pre>',print_r($ret),'</pre>';
    return $ret;
}
//fetch();

function insert(){
    $mac = $_GET["macAdress"];
    $lat = $_GET["lat"];
    $lon = $_GET["lon"];
    $time = $_GET["time"];
    $mysqli = mysqli_connect("localhost:3306", "root", "", "posviewer");
    mysqli_query($mysqli, "INSERT INTO posdata (MAC, LAT, LON, TEMPO) VALUES ('".$mac."', '".$lat."', '".$lon."', '".$time."')");
    mysqli_close($mysqli);
}

?>

