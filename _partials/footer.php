		<footer>
			<!-- .footer -->
			<div class="footer">
				<p class="copyright">Copyright 2015 &copy; Vac Custom Links S.C <span>&#8226; Todos los Derechos Reservados</span></p>
				<p class="created-by">Desarrollo por <img class="global-net-studio-logo" src="/images/icons/global-net-studio-logo.png" alt=""> Global Net Studio</p>
			</div>
			<!-- /.footer -->
		</footer>

		<!-- jQuery -->
		<script src="./js/jquery.min.js"></script>
		<script src="./js/jquery.flexslider.min.js"></script>
		<script src="./js/jquery-validate.min.js"></script>
		<script>
			$(function() {
				// $('.flexslider').flexslider({
			 //    animation: "slide",
			 //    controlsContainer: $(".custom-controls-container"),
			 //    customDirectionNav: $(".custom-navigation a")
			 //  });
			});
		</script>
		
		<?php if($page == 'contact') : ?>
		<script>
			$(document).ready(function() {
				$("#contactForm").validate();
		</script>
		<?php endif; ?>
	</body>
</html>