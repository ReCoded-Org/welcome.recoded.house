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
	
	}
	
body, a {
	font-family: Karla, 'Sans Serif';
	font-size: 15px;
	line-height: 1.4em;
	color: #fff;
	}
	
.div-bar {
	display: block;
	margin: 0;
	padding: 0;
	background: #555;
	text-align: center;
	width: auto;
	}
	
.div-bar > div {
	display: block;
	margin: 0 auto;
	max-width: 1560px;
	white-space: nowrap;
	column-gap: 20px;
	column-rule: 0;
	column-width: 29%;
	column-count: 3;
	}
	
.div-bar amp-img {
	margin: 0 auto;
	padding: 0;
	max-width: 500px;
	}
	
.div-content {
	display: block;
	padding: 0;
	background: #333;
	background-image: linear-gradient (45deg, rgba(30,30,30,1), rgba(100,100,100,1));
	}

h2, p {
	width: auto;
	max-width: 810px;
	box-sizing: border-box;
	text-align: left;
	display: block;
	margin: 0 auto;
	}

h2 {
	opacity: 0.8;
	font-family: Lato, 'Sans Serif';
	font-size: 37px;
	line-height: 1.3em;
	font-weight: 700;
	padding: 80px 20px 30px;
	}
	
p {
	padding: 20px 20px 80px;
	}

p, a {
	font-size: 23px;
	line-height: 1.4em;
	font-weight: 400;
	}
	
#div-welcome {
	background: #555;
/*	background-image: linear-gradient(45deg, rgba(62,132,128,1), rgba(100,132,100,1)); */
	}

</style></head>
<body>
	
<div id='div-header'>
	logo
	</div>
	
<div class='div-bar' id='div-welcome-bar'><div>
	<amp-img src='social-icons/social-icon-009.png' layout='responsive' width='1' height='1'></amp-img>
	<amp-img src='social-icons/social-icon-012.png' layout='responsive' width='1' height='1'></amp-img>
	<amp-img src='social-icons/social-icon-006.png' layout='responsive' width='1' height='1'></amp-img>
	</div></div>
	
<div class='div-content' id='div-welcome'>
	<h2><? echo $text_content['div-welcome-header'] ?></h2>
	<p><? echo $text_content['div-welcome-body'] ?></p>
	</div>
	
<div class='div-bar' id='div-communication-bar'>
	</div>
	
<div class='div-content' id='div-communication'>
	<h2><? echo $text_content['div-communication-header'] ?></h2>
	<p><? echo $text_content['div-communication-body'] ?></p>
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
