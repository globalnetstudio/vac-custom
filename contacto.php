<?php $pageTitle= 'Contacto'; $pageId = 'contact'; ?>
<?php session_start() ?>

<?php include('./_partials/head.php'); ?>

	<h1 class="hide">Vac Customs Links S.C</h1>

	<?php include_once('_partials/header.php') ?>

	<?php include_once('_partials/carousel.php') ?>

	<section>
		<!-- .content -->
		<div class="content">
			<h2>CONTACTO</h2>

			<p>Envíanos tus dudas o comentarios a través de nuestro formulario de contacto.</p>

			<?php if(isset($_SESSION['error']) && $_SESSION['error'] !== '') : ?>

			<div class="form-errors">
				<p><b><?php echo $_SESSION['error']; ?></b></p>
			
				<ul>
					<?php foreach($_SESSION['form-errors'] as $key => $error) : ?>
						<?php if($key == 'questionComment') : ?>
							<li>Esciba sus <b><?php echo $error ?></b></li>	
						<?php else: ?>
							<li>Esciba su <b><?php echo $error ?></b></li>
						<?php endif; ?>
					<?php endforeach; ?>
				</ul>
			</div>

			<?php endif; ?>			

			<form id="contactForm" action="/process-email.php" method="POST">

				<!-- .input-group -->
				<div class="input-group clearfix">

					<div class="form-group">
						<input <?php echo (isset($_SESSION['form-errors']['firstName'])) ? "class='inputError'" : null; ?>
							type="text"
							name="firstName"
							placeholder="Nombre(s):"
							value="<?php echo (isset($_SESSION['old-first-name'])) ? $_SESSION['old-first-name'] : null; ?>"
						>
					</div>

					<div class="form-group">
						<input <?php echo (isset($_SESSION['form-errors']['lastName'])) ? "class='inputError'" : null; ?>
							type="text"
							name="lastName"
							placeholder="Apellidos:"
							value="<?php echo (isset($_SESSION['old-last-name'])) ? $_SESSION['old-first-name'] : null; ?>"
						>
					</div>

					<div class="form-group">
						<input <?php echo (isset($_SESSION['form-errors']['phone'])) ? "class='inputError'" : null; ?>
							type="text"
							name="phone"
							placeholder="Teléfono (con lada):"
							value="<?php echo (isset($_SESSION['old-phone'])) ? $_SESSION['old-phone'] : null; ?>"
						>
					</div>

					<div class="form-group">
						<input <?php echo (isset($_SESSION['form-errors']['email'])) ? "class='inputError'" : null; ?>
							type="email"
							name="email"
							placeholder="Correo Electrónico:"
							value="<?php echo (isset($_SESSION['old-email'])) ? $_SESSION['old-email'] : null; ?>"
						>
					</div>

				</div>
				<!-- /.input-group -->

				<textarea <?php echo (isset($_SESSION['form-errors']['questionComment'])) ? "class='inputError'" : null; ?>
					name="questionComment"
					id="questionComment"
					rows="5"
					placeholder="Preguntas y Comentarios:"
					><?php echo (isset($_SESSION['old-first-name'])) ? $_SESSION['old-question-comment'] : null; ?></textarea>

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
<?php $_SESSION = array(); session_destroy(); ?>