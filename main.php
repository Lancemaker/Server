<?php
//-23.604110968096037, -46.664578285567835
date_default_timezone_set('America/Sao_Paulo');

include 'Connect.php';
$macAdress = $_GET["macAdress"];
$return =fetch($macAdress);
$return = $return[0];
echo '<pre>',print_r($return,1),'</pre>';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Position Viewer</title>    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <meta http-equiv="refresh" content="30"/>
 
</head>
<style>
    iframe{
        display: block;
        border-style:none;
        width: 800px;
        height: 600px;
        margin: 0 auto;
    }
</style>
<body>

<!--alert-->
<div class="alert alert-danger" role="alert">
  <?= 'Ultima posição em: '. date('Y-m-d H:i:s').'    Mac Adress :'.$macAdress.'  latitude :'.$return['LAT'].'  longitude :'.$return['LON']; ?>
</div>
<!--waze-->
<iframe src=<?="https://embed.waze.com/iframe?zoom=15&lat=".$return['LAT']."&lon=".$return['LON']."&pin=1";?>></iframe>
<!--waze-->
</body>
</html>