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
<link href="https://fonts.googleapis.com/css?family=Lora" rel="stylesheet">
	
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
	
.div-header {
	background: rgba(158,158,158,1);
	margin: 0;
	padding: 100px 20px;
	}
	
.div-content {
	display: block;
	padding: 100px 20px;
	background: rgba(68,68,68,1);
	column-count: 3;
	column-gap: 20px;
	column-rule: 0 solid rgba(200,200,200,0.5);
/*	column-width: 30%; */
	}

.div-content-square {
	display: block;
	max-width: 400px;
	margin: 0 auto 40px;
	page-break-inside: avoid;
	}
	
.div-content-square amp-img {
	border-radius: 12px;
	opacity: 0.85;
	margin: 0;
	padding: 0;
	transition: opacity 0.3s;
	}
	
.div-content-square:hover amp-img {
	opacity: 1;
	transition: opacity 0.5s;
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
	font-family: Lora, Serif;
	font-size: 37px;
	line-height: 1.3em;
	font-weight: 700;
	padding: 50px 20px 0;
	}
	
p {
	padding: 20px 20px 40px;
	}

p, a {
	font-size: 22px;
	line-height: 1.4em;
	font-weight: 400;
	}
	
@media (max-width: 1000px) {
	.div-content { column-count: 2; }
	.hide-first { display: none; }
	}
	
@media (max-width: 500px) {
	.div-content { column-count: 1; }
	.hide-first { display: none; }
	.hide-second { display: none; }
	}

</style></head>
<body>
	
<div class='div-header'>
	logo
	</div>
	
<div class='div-content'>

	<div class='div-content-square'>
		<h2><? echo $text_content['div-welcome-header'] ?></h2>
		<p><? echo $text_content['div-welcome-body'] ?></p></div>

	<div class='div-content-square hide-first'>
		<amp-img src='social-icons/social-icon-009.png' layout='responsive' width='1' height='1'></amp-img></div>

	<div class='div-content-square'>
		<amp-img src='social-icons/social-icon-006.png' layout='responsive' width='1' height='1'></amp-img></div>
	
	<div class='div-content-square'>
		<h2><? echo $text_content['div-communication-header'] ?></h2>
		<p><? echo $text_content['div-communication-body'] ?></p></div>
	
	<div class='div-content-square hide-second'>
		<amp-img src='social-icons/social-icon-005.png' layout='responsive' width='1' height='1'></amp-img></div>

	<div class='div-content-square'>
		<amp-img src='social-icons/social-icon-018.png' layout='responsive' width='1' height='1'></amp-img></div>

	<div class='div-content-square'>
		<h2><? echo $text_content['div-access-header'] ?></h2>
		<p><? echo $text_content['div-access-body'] ?></p></div>

	<div class='div-content-square hide-second'>
		<amp-img src='social-icons/social-icon-015.png' layout='responsive' width='1' height='1'></amp-img></div>
	
	<div class='div-content-square'>
		<amp-img src='social-icons/social-icon-010.png' layout='responsive' width='1' height='1'></amp-img></div>

	<div class='div-content-square'>
		<h2><? echo $text_content['div-policies-header'] ?></h2>
		<p><? echo $text_content['div-policies-body'] ?></p></div>

	<div class='div-content-square hide-first'>
		<amp-img src='social-icons/social-icon-002.png' layout='responsive' width='1' height='1'></amp-img></div>
	<div class='div-content-square'>
		<amp-img src='social-icons/social-icon-016.png' layout='responsive' width='1' height='1'></amp-img></div>

	<div class='div-content-square'>
		<h2><? echo $text_content['div-library-header'] ?></h2>
		<p><? echo $text_content['div-library-body'] ?></p></div>

	<div class='div-content-square hide-first'>
		<amp-img src='social-icons/social-icon-017.png' layout='responsive' width='1' height='1'></amp-img></div>

	<div class='div-content-square  hide-second'>
		<amp-img src='social-icons/social-icon-014.png' layout='responsive' width='1' height='1'></amp-img></div>
		
	<div class='div-content-square'>
		<h2><? echo $text_content['div-makerlab-header'] ?></h2>
		<p><? echo $text_content['div-makerlab-body'] ?></p></div>

	<div class='div-content-square hide-first'>
		<amp-img src='social-icons/social-icon-008.png' layout='responsive' width='1' height='1'></amp-img></div>

	<div class='div-content-square'>
		<amp-img src='social-icons/social-icon-011.png' layout='responsive' width='1' height='1'></amp-img></div>

	<div class='div-content-square hide-first'>
		<amp-img src='social-icons/social-icon-001.png' layout='responsive' width='1' height='1'></amp-img></div>

	<div class='div-content-square hide-second'>
		<amp-img src='social-icons/social-icon-012.png' layout='responsive' width='1' height='1'></amp-img></div>

	<div class='div-content-square hide-first'>
		<amp-img src='social-icons/social-icon-004.png' layout='responsive' width='1' height='1'></amp-img></div>

	<div class='div-content-square hide-second'>
		<amp-img src='social-icons/social-icon-013.png' layout='responsive' width='1' height='1'></amp-img></div>

	</div>
	
</body>
</html>
