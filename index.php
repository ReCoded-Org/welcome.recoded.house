<? $text_content = file_get_contents('text_content.json', FILE_USE_INCLUDE_PATH);
$text_content = json_decode($text_content, TRUE); ?>

<!doctype html>
<html amp lang="en">
<head>
<meta charset="utf-8">
	
<!-- AMP -->
<script async src="https://cdn.ampproject.org/v0.js"></script>
<meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
<style amp-boilerplate>body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}</style><noscript><style amp-boilerplate>body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style></noscript>

<!-- More AMP -->
<script async custom-element="amp-fx-collection" src="https://cdn.ampproject.org/v0/amp-fx-collection-0.1.js"></script>

<title><? echo $text_content['title'] ?></title>
<link rel="canonical" href="<? echo $text_content['domain'] ?>">
	
<!-- Import custom fonts -->
<link href="https://fonts.googleapis.com/css?family=Karla" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
	
<!-- Material Icons -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<!-- Custom CSS -->
<style amp-custom>
	
body {
	font-family: Karla, 'Sans Serif';
	font-size: 15px;
	line-height: 1.4em;
	color: #fff;
	}
	
.div_content {
	background: #333;
	background-image: linear-gradient {45deg, rgba(30,30,30,1), rgba(100,100,100,1));
	}

h2, p {
	width: 100%;
	max-width: 810px;
	box-sizing: border-box;
	margin: 0 auto;
	padding: 20px;
	text-align: left;
	}

h2 {
	font-family: Lato, 'Sans Serif';
	font-size: 30px;
	line-height: 1.3em;
	font-weight: 700;
	}

p {
	font-size: 20px;
	line-height: 1.4em;
	font-weight: 400;
	}

</style></head>
<body>
	
<div id='div-header'>
	logo
	</div>
	
<div class='div-bar' id='div-welcome-bar'>
	</div>
	
<div id='div-welcome'>
	<h2><? echo $text_content['div-welcome-header'] ?></h2>
	<p><? echo $text_content['div-welcome-body'] ?></p>
	</div>
	
<div class='div-bar' id='div-communication-bar'>
	</div>
	
<div class='div-content' id='div-communicaton'>
	<h2><? echo $text_content['div-communicaton-header'] ?></h2>
	<p><? echo $text_content['div-communicaton-body'] ?></p>
	</div>
	
<div class='div-bar' id='div-access-bar'>
	</div>
	
<div class='div-content' id='div-access'>
	<h2><? echo $text_content['div-access-header'] ?></h2>
	<p><? echo $text_content['div-access-body'] ?></p>
	</div>
	
<div class='div-bar' id='div-policies-bar'>
	</div>
	
<div class='div-content' id='div-policies'>
	<h2><? echo $text_content['div-policies-header'] ?></h2>
	<p><? echo $text_content['div-policies-body'] ?></p>
	</div>
	
<div class='div-bar' id='div-library-bar'>
	</div>
	
<div class='div-content' id='div-library'>
	<h2><? echo $text_content['div-library-header'] ?></h2>
	<p><? echo $text_content['div-library-body'] ?></p>
	</div>
	
<div class='div-bar' id='div-makerlab-bar'>
	</div>
	
<div class='div-content' id='div-makerlab'>
	<h2><? echo $text_content['div-makerlab-header'] ?></h2>
	<p><? echo $text_content['div-makerlab-body'] ?></p>
	</div>
	
<div class='div-bar' id='div-footer-bar'>
	</div>
	
<div id='div-footer'>
	</div>
	
</body>
</html>
