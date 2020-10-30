<link href="label4x6.css" rel="stylesheet" type="text/css" />

<title>GIGACYCLE.CO.UK BARCODE GENERATOR 0.2 beta by DAMIAN BEDNAREK</title>


<div id=main>

<?php


include 'barcode128.php';
echo '<div id=box><center><br>
<div style="height: 30%; width: 90%;">';
echo '<p>'.bar128(stripcslashes($_POST['MFG'])).'MFG</p>';
echo '<p>'.bar128(stripcslashes($_POST['MODEL'])).'MODEL</p>';
echo '<p>'.bar128(stripcslashes($_POST['PROCESSOR'])).'CPU</p>';
echo '<p>MEMORY - '.($_POST['MEMORY']);
echo '<br><br>STORAGE - '.($_POST['STORAGE']);
echo '<p>OPTICAL DRIVE - '.($_POST['OPTICALDRIVE']);
echo '<p>SCREEN SIZE - '.($_POST['SCREENSIZE']);
echo '<br><br>WEB CAM - '.($_POST['WEBCAM']);
echo '<br><br>OS - '.($_POST['OS']);

echo '<br><br>'.bar128(stripcslashes($_POST['SN'])).'SERIAL NUMBER</p>';
echo '<p>'.bar128(stripcslashes($_POST['SKU'])).'SKU</p>';
echo '<p>'.bar128(stripcslashes($_POST['ASSET'])).'ASSET TAG</p>';
echo '<br><br>'.bar128(stripcslashes($_POST['COA'])).'COA';
echo '
</center>';
?>


</div>



