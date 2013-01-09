<?php
$limb = rand(1,4);

if ( $limb == 1 ) {
$limb = "rightfoot";
$limbtext = "Right Foot";
} else {
if ( $limb == 2 ) {
$limb = "leftfoot";
$limbtext = "Left Foot";
} else {
if ( $limb == 3 ) {
$limb = "righthand";
$limbtext = "Right Hand";
} else {
$limb = "lefthand";
$limbtext = "Left Hand";
}
}
}

$color = rand(1,4);

if ( $color == 1 ) {
$color = "#04B404";
$colortext = "Green";
} else {
if ( $color == 2 ) {
$color = "#FFFF00";
$colortext = "Yellow";
} else {
if ( $color == 3 ) {
$color = "#0101DF";
$colortext = "Blue";
} else {
$color = "#DF0101";
$colortext = "Red";
}
}
}

?>

<html>
<head>
<style type="text/css">
* {margin:0;padding:0}
/* mac hide \*/
html,body{height:100%;width:100%;}
/* end hide */
body { 
background-color: #FFFFFF;
text-align:center;
min-height:468px;/* for good browsers*/
min-width:468px;/* for good browsers*/
}
#outer{
height:100%;
width:100%;
display:table;
vertical-align:middle;
}
#container {
text-align: center;
position:relative;
vertical-align:middle;
display:table-cell;
height: 468px;
} 
#inner {
width: 552px;
height: 468px;
text-align: center;
margin-left:auto;
margin-right:auto;
border:0px solid #000;
}
.circleBase {
    -webkit-border-radius: 999px;
    -moz-border-radius: 999px;
    border-radius: 999px;
    behavior: url(PIE.htc);
}
.circle {
    width: 500px;
    height: 500px;
    text-align: center;
    background: <?php echo $color; ?>;
    border: 0px
}
</style>
<META HTTP-EQUIV="refresh" CONTENT="30">
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-28725137-1']);
  _gaq.push(['_setDomainName', 'gho.st']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</head>
<body>
<div id="outer">
<div id="container">
<div id="inner">
<div class="circleBase circle">
<p><br></p>
<p><br></p>
<p><br></p>
<p><br></p>
<a href="/"><img height="75%" width="75%" src="<?php echo $limb; ?>.png"></a>

</div>
</div>
</div>
</div>
</body>
</html>
