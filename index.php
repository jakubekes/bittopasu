<!DOCTYPE html>
<html lang="en">
<head>
<title>Bittopasu</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!--<link rel="stylesheet" href="https://www.w3schools.com/w3css/3/w3.css">-->
<link rel="stylesheet" href="style/style.css">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Kanit:wght@100;200&display=swap" rel="stylesheet"> 

<script src="/jquery/jquery-3.6.4.js"> </script>
<script src="/jquery/director.js"> </script>
<script src="/script/script_main.js"> </script>

<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/Director/1.2.8/director.js"></script>-->

</head>

<body>
	<div id = "containers" class="container">
	<div class="banner_main">

		<span class="banner">
			<!--<img src="pictures/women.gif">-->
			<div class = "banner_title"> Bittopasu <!--ビットパス--> </div>
			<div class = "banner_quote"> Following the bits..</div>		
		</span>
		
			<nav class = "menu">
				<ul class = "mainmenu">
					<span class="menu_break" >|</span>
					<li><a id = "home"  href="#/home">Home</a></li>
					<span class="menu_break" >|</span>
					<li class = "parent" ><a>Articles</a>
						<ul class = "child" >
							<li><a>C++</a></li>		
							<li><a id = "windows" href="#/windows">Windows</a></li>		
							<li class = "parent" ><a>Linux </a><!--<span class = "expand" >|</span>
								<ul class = "child">
									<li><a>Article1</a></li>				
									<li><a>Article2</a></li>
									<li><a>Article3</a></li>
									<li><a>Article4</a></li>
								</ul>-->
							</li>
							<li><a>Virtualization</a></li>
						</ul>
					</li>
					<span class="menu_break" >|</span>
					<li><a id = "contact" href="#/contact">Contact</a></li>
				</ul>
				
			<!--<div><a id = "signin"  >Sign in</a></div>
			<div><a id = "register" >Register</a></div>		-->
			</nav>
	</div>

		<div id = "contents" class="content"></div>
		
	</div>
	<section id="foot" class="footer">
	
			<section class="footer_text"> © Jakub Sowa	</section>
	
	</section>
	
</body>
</html>