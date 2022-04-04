<?php
/*
Page :
- Installation d'un serveur VPS OVH
- TUTO : https://deb.ovh/category/install/
*/
?>
<html lang="fr">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://dist.ovh/dist/asset/1/style.css">
<title>VPS OVH - <?php echo $_SERVER['HTTP_HOST']; ?> </title>
<meta name="description" content="VPS OVH - <?php echo $_SERVER['HTTP_HOST']; ?>">
<meta name="keywords" content="<?php echo $_SERVER['HTTP_HOST']; ?>">
<style>
pre { 
overflow-x: auto; 
background : black;
color: white;
padding : 10px;
margin-top: 25px;
margin-bottom: 25px;
font-size: 16px;
}
</style>
</head>
<body>
<div class="dist-container">
<h1 class="text-center">VPS OVH - <?php echo $_SERVER['HTTP_HOST']; ?></h1>
<?php
echo "<pre>";
echo date('H:i:s Y-m-d');
echo "</pre>";
$domain =  $_SERVER['HTTP_HOST']; 
$ip = gethostbyname($domain);
echo "<pre>";
echo "Domain:<br> ".$domain;
echo "<br>";
echo "IP:<br> ".$ip;
$reverse = gethostbyaddr($ip);
echo "<br>";
echo "Reverse:<br> ".$reverse;
echo "</pre>";
echo "<hr>";
echo "<pre>";
$clientIPAddress=$_SERVER['REMOTE_ADDR']; 
echo "Votre IP:<br> ".$clientIPAddress;
$hostname = gethostbyaddr($clientIPAddress);
echo "<br>";
echo "Reverse de votre IP:<br> ".$hostname;
echo "<br>";
echo "</pre>";
?>
</div>
</body>
</html>
