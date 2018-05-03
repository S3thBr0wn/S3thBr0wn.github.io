<html>
<head>
<title> Brownphp</title>

<style>
		body {
		background-color: #00156F;
		margin: 0px; 
		padding: 0px;		
font-family: system-ui, sans-serif;
font-size: 16px;
	}
pre{
font-family: system-ui, sans-serif;
font-size: 16px;
color : #4c4c4c;
}

.imagesize {
    width: 100%;
    height: auto;
}
.smalltext{
	font-family: system-ui, sans-serif;
	font-size: 9px;
}
* {
    box-sizing: border-box;
}
.row::after {
    content: "";
    clear: both;
    display: table;
}
[class*="col-"] {
    float: left;
    padding: 15px;
}
html {
 font-family: system-ui, sans-serif;
}
 
.header {
  color: #000;
 
}

#list{
	 position: absolute;
    left: 200px;
    top: 0px;
	
}

.menu a {
	color: #000;
	text-decoration: none;
}
.menu ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
}
.menu li {
    padding: 1px;
    margin-bottom: 1px;
    background-color: #fff;
    color: #fff;
    box-shadow: 0 1px 2px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
}
.menu li:hover a:hover{
    color: #ff7f00;
}
.aside {
    background-color: #fff;
    padding: 16px;
    color: #000;
    text-align: center;
    font-size: 14px;
    
}
.footer {
    background-color: #ff7f00;
    font-size: 18px;
    font-style: bold;
  color: #fff;
}
.bttn {
  background-color: #ff7f00;
    border: none;
    color: #fff;
    padding: 2px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    margin: 2px 1px;
    cursor: pointer;
    
}

.bttn:hover{
	background-color:#7c7c7c;
	 color: #fdf6e3;
}


</style>

</head>



<?php
	error_reporting(0);
	$theList = array("*");

    if ($handle = opendir('.')) {
    while (false !== ($file = readdir($handle)))
    {
        if ($file != "." && $file != ".."&& $file != "index.php")
        {
            $thelist .= '<li><a href=" '.$file. '  target = "_blank">'.$file.'</a></li>';
        }
    }
    closedir($handle);
    }
?>

<body>
<div id="list">	
<div class="header">
  <img src = "ADD A GRAPHIC .png" height = "70px">
  <?php  echo "Today is " . date("m/d/Y"); ?>
</div>
<header><span style="color:#6F0002; background-color:#00156F";>ADD TEXT NOW </span></header>

<hr />
<p>Files:</p>
<ul>
<?php echo $thelist?>
</ul>

<hr />
</div>
<footer>
<center>

</center>
</footer>

</body>
</head>
