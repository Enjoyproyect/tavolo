<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>Restaurante en bucaramanga - Carta de Tavolo</title>
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<meta name="author" content="" />
		<link rel="shortcut icon" href="../favicon.ico">
		<link rel="stylesheet" type="text/css" href="../css/menu.css" />
		<script src="../js/modernizr.custom.js"></script>
		<link href="//netdna.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.css" rel="stylesheet"/>
	</head>
	<body class="cbp-spmenu-push">
		<?php include './menu.php';?>
		<section class="info">
				<div class="Table">
					<div class="Title">
						<h2>ARROCES</h2>
					</div>
					<div class="Row">
						<div class="Cell">
							<h3>Arroz Español</h3>
							<p>Chorizo español, calamares, camarones, aceitunas y salsa a base de azafrán.</p>
							<p>$ 25.000</p>
						</div>
						<div>
							<p style="font-size:80%">Con Róbalo $28.000</p>
							<p style="font-size:80%">Con Salmón $34.500</p>
						</div>
					</div>
					<div class="Row">
						<div class="Cell">
							<h3>Risotto San George</h3>
							<p>Trozos de pollo, champiñones, tocineta, salsa blanca, pesto de albahaca y queso parmesano.</p>
						</div>
						<div>
							<p>$ 21.000</p>
						</div>
					</div>					
					<div class="Row">
						<div class="Cell">
							<h3>Risotto Florentina</h3>
							<p>Filete de robalo sobre risotto con camarones, tomate cherry, espinacas, champiñones y queso parmesano.</p>
							<p>$ 23.500</p>
						</div>
						<div>
							<p style="font-size:80%">Con Salmón $31.000</p>
						</div>
					</div>
					<div class="Row">
						<div class="Cell">
							<h3>Arroz Oriental Lomo,Pollo y Camaron</h3>
							<p>Julianas de lomo, pollo y camaron salteados con vegetales al wok, esencias orientales, champiñones, salsa teriyaky y aguacate.</p>
						</div>
						<div>
							<p>$ 28.000</p>
						</div>
					</div>
					<div class="Row">
						<div class="Cell">
							<h3>Arroz Oriental Lagostinos y Calamares</h3>
							<p>Calamares apanados, langostinos salteados con vegetales al wok, esencias orientales, champiñones, salsa teriyaky y aguacate.</p>
						</div>
						<div>
							<p>$ 35.000</p>
						</div>
					</div>
				</div>
		</section>
				<footer>
			<div class="social">
				<ul>
					<li><a class="fa fa-twitter-square fa-3x" href="https://twitter.com/TavoloGourmet" title="Twitter" rel="nofollow"></a></li>
					<li><a class="fa fa-instagram fa-3x" href="http://instagram.com/tavologourmet?ref=badge" title="Instagram" rel="nofollow"></a></li>
					<li><a class="fa fa-google-plus-square fa-3x" href="https://plus.google.com/+Tavologourmet-Restaurante/" title="Google +" rel="nofollow"></a></li>
					<li><a class="fa fa-facebook-square fa-3x" href="https://www.facebook.com/TavoloGourmet" title="Facebook" rel="nofollow"></a></li>
					<li><a class="fa fa-youtube-play fa-3x" href="https://youtube.com" title="Youtube"></a></li>
					<li><a class="fa fa-compass fa-3x" href="https://goo.gl/maps/VTF3V" title="Google maps" rel="nofollow"></a></li>
					<li><a class="fa fa-foursquare fa-3x" href="https://es.foursquare.com/v/tavolo-gourmet/4bb0e6b4f964a52052683ce3" title="Foursquare" rel="nofollow"></a></li>
					<li><a href="http://www.tripadvisor.co/Restaurant_Review-g297474-d929120-Reviews-Tavolo_Gourmet-Bucaramanga_Santander_Department.html" title="Tripadvisor" rel="nofollow"><img class="tripadvisor" src="../images/tripadvisor.png"></a></li>
				</ul>
			</div>				
		</footer>
		<script src="../js/classie.js"></script>
		<script>
			var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
				menuRight = document.getElementById( 'cbp-spmenu-s2' ),
				showLeftPush = document.getElementById( 'showLeftPush' ),
				body = document.body;

			showLeftPush.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( body, 'cbp-spmenu-push-toright' );
				classie.toggle( menuLeft, 'cbp-spmenu-open' );
				disableOther( 'showLeftPush' );
			};

			function disableOther( button ) {
				if( button !== 'showLeftPush' ) {
					classie.toggle( showLeftPush, 'disabled' );
				}
			}
		</script>
	</body>
</html>