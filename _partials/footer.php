		<footer>

			<!-- .footer -->
			<div class="footer">

				<!-- .wrapper -->				
				<div class="wrapper clearfix">

					<p class="copyright">Copyright 2015 &copy; Vac Custom Links S.C <span>&#8226; Todos los Derechos Reservados</span></p>

					<p class="created-by">Desarrollo por <img class="global-net-studio-logo" src="/images/icons/global-net-studio-logo.png" alt=""> <a href="http://globalnetstudio.com/" target="_blank">Global Net Studio</a></p>

				</div>
				<!-- /.wrapper -->

			</div>
			<!-- /.footer -->

		</footer>

		<!-- jQuery -->
		<script src="./js/jquery.min.js"></script>
		<script src="./js/jquery.flexslider.min.js"></script>
		<script src="./js/jquery-validate.min.js"></script>
		<!--[if lt IE 10]>
			<script src="./js/placeholders.min.js"></script>
	  	<![endif]-->
		<script>
			$(function() {
				$('.flexslider').flexslider({
			    animation: "slide",
			    customDirectionNav: $(".custom-navigation a")
			  });
			});
		</script>
		
		<?php if($pageId == 'contact') : ?>
		<script>
			$(function() {
				$("#contactForm").validate({
					rules: {
						firstName: {
							required: true,
							minlength: 3
							
						},
						lastName: {
							required: true,
							minlength: 3
						},
						email: {
							required: true,
							email: true
						},
						phone: {
							required: true,
							minlength: 4
						},
						questionComment: {
							required: true,
							minlength: 5
						}
					},
					messages: {
						firstName: {
							required: "* Escriba su nombre",
							minlength: "* Escriba por lo menos 4 caracteres"
						},
						
						lastName: {
							required: "* Escriba su apellido",
							minlength: "* Escriba por lo menos 4 caracteres"
						},
						phone: {
							required: "* Escriba su teléfono (con lada)",
							minlength: "* Escriba por lo menos 4 caracteres"
						},
						email: "* Formato Inválido",
						questionComment: {
							required: "* Escriba sus preguntas y comentarios",
							minlength: "* Escriba por lo menos 3 caracteres"
						},
					}
				});
			});
		</script>
		<?php endif; ?>
	</body>
</html>