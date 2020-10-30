<!DOCTYPE html>
<html>
<head>
<title>GIGACYCLE.CO.UK BARCODE GENERATOR 0.2 beta by DAMIAN BEDNAREK</title>
<link href="style.css" rel="stylesheet" type="text/css">
<script type="text/javascript">
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
</script>
</head>
<body onLoad="MM_preloadImages('gigacycle.png')">








<div class="main"><br><center>Please fill out this form COMPLETELY</center><br><br><br>
<form method="post" action="barcode.php">
 MFG :			<input type="text" name="MFG"><br>
 MODEL :		<input type="text" name="MODEL"><br>
 SIZE :		<input type="text" name="SIZE"><br>
<br><br>
 GRADE :		<input type="text" name="GRADE"><br>
<br><br>
 SN :			<input type="text" name="SN"><br><br>
 ASSET :		<input type="text" name="ASSET"><br>
 SKU :			<input type="text" name="SKU"><br>
	
<br> <input type="submit" name="submit" value="submit">
</form><br><br>
<a href="www.gigarefurb.co.uk" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image2','','gigacycle.png',1)"><img src="Giga-Refurb.png" name="Image2" width="445" height="89" id="Image2"></a> </div>





</body>
</html>