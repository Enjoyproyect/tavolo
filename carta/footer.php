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