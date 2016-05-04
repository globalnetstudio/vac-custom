<?php $pageTitle= 'Contacto'; $pageId = 'contact'; ?>

<?php include('./_partials/head.php'); ?>

	<h1 class="hide">Vac Customs Links S.C</h1>

	<?php include_once('_partials/header.php') ?>

	<?php include_once('_partials/carousel.php') ?>

	<section>
		<!-- .content -->
		<div class="content">
			<h2>CONTACTO</h2>

			<p>Envíanos tus dudas o comentarios a través de nuestro formulario de contacto.</p>

			<form id="contactForm" action="/process.php" method="POST">

				<!-- .input-group -->
				<div class="input-group clearfix">
					<input type="text" name="firstName" placeholder="Nombre(s):">
					<input type="text" name="lastName" placeholder="Apellidos:">
					<input type="text" name="phone" placeholder="Teléfono (con lada):">
					<input type="email" name="email" placeholder="Correo Electrónico:">
				</div>
				<!-- /.input-group -->

				<textarea name="questionComment" id="questionComment"  rows="5" placeholder="Preguntas y Comentarios:"></textarea>

				<!-- .buttons -->
				<div class="buttons">
					<input type="reset" value="BORRAR">
					<input type="submit" value="ENVIAR">
				</div>
				<!-- /.buttons -->
			</form>

			<h2 class="map">UBICACIÓN</h2>

			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5282.9578658298315!2d-103.31231695275754!3d20.562914079008376!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842f4cd9ea193fb9%3A0x7fa850a095aef471!2sAv.+de+la+Solidaridad+Iberoamericana+3000%2C+Minerales%2C+45693+Las+Pintitas%2C+Jal.!5e0!3m2!1ses-419!2smx!4v1462356187646" width="980" height="388" frameborder="0" style="border:0" allowfullscreen></iframe>

			<?php include_once('./_partials/address.php'); ?>

		</div>
		<!-- /.content -->
	</section>

<?php include_once('./_partials/footer.php'); ?>