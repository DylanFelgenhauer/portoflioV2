<?php
/**
 * Template Name: home
 */

$file = get_field('download');
$filename = $file['filename'];
$fileurl = $file['url'];
add_filter('wpcf7_form_elements', function($content) {
	$content = preg_replace('/<(span).*?class="\s*(?:.*\s)?wpcf7-form-control-wrap(?:\s[^"]+)?\s*"[^\>]*>(.*)<\/\1>/i', '\2', $content);

	return $content;
});
?>

<?php get_header(); ?>
<div class="arrowup">
	<div class="arrow"> <?= get_field('arrowup'); ?></div>
</div>
<section id="sect1" class="about__layout">
	<h2 class="section__title about__title hidden">
		A propos de moi
	</h2>
	<div class="imgcontain">
		<?php
		$image = get_field('imagemoi');
		$size = 'large'; // (thumbnail, medium, large, full or custom size)
		if( $image ) {
			echo wp_get_attachment_image( $image, $size );
		}?>	</div>
	<div class="divcontainer">
		<div class="paragraphcontain">
			<span class="hello"><?= get_field('title') ?></span>
			<p class="section__container" id="paragraph">
                <?= get_field('slugaboutme') ?>

			</p>
			<span class="joke"><?= get_field('joke') ?></span>

		</div>
		<div class="sayHello">
			<a href="#contact"><?= get_field('aboutcontact') ?></a>
		</div>
	</div>

</section>
<section id="sect2" class="project__layout reveal2">
	<h2 class=" project__title">
		<?= get_field('projecttitle')?>
	</h2>
	<section class="grid__project">
		<div id="grid__layout">
			<a href="https://cv.felgenhauer-dylan.be/" class="project__container  " id="p1">
				<?php
				$image = get_field('photocv');
				$size = 'large'; // (thumbnail, medium, large, full or custom size)
				if( $image ) {
					echo wp_get_attachment_image( $image, $size );
				}?>
                <div class="flex__column">
					<h3 class="project--container__title"><?= get_field('titlecv')?></h3>
				</div>
			</a>

			<a href="https://antilope.felgenhauer-dylan.be/" class="project__container " id="p2">
				<?php
				$image = get_field('photoantilope');
				$size = 'large'; // (thumbnail, medium, large, full or custom size)
				if( $image ) {
					echo wp_get_attachment_image( $image, $size );
				}?>				<div class="flex__column">
					<h3 class="project--container__title"><?= get_field('titleantilope')?></h3>
				</div>
			</a>

			<a href="https://countdown.felgenhauer-dylan.be/" class="project__container " id="p3">
				<?php
				$image = get_field('photocountdown');
				$size = 'large'; // (thumbnail, medium, large, full or custom size)
				if( $image ) {
					echo wp_get_attachment_image( $image, $size );
				}?>				<div class="flex__column">
					<h3 class="project--container__title"><?= get_field('titlecountdown')?></h3>
				</div>
			</a>
		</div>
	</section>
</section>
<section id="sect3" class="cv__layout reveal3">
	<h2 class="cv__title"><?= get_field('cvtitle') ?></h2>
	<div class="history-cv-container">
		<ul class="cv">
			<li class="cv-item cv-study">
				<div class="firstcolonne">
					<div class="item-title">HEPL</div>
					<div class="item-detail">Bachelier web</div>
				</div>
				<time>2020 à aujourd'hui</time>
			</li>
			<li class="cv-item cv-study">
				<div class="firstcolonne">
					<div class="item-title">Gestion de base</div>
					<div class="item-detail">Obtention</div>
				</div>
				<time>2020</time>
			</li>
			<li class="cv-item cv-study">
				<div class="firstcolonne">
					<div class="item-title">VCA (sécurité du bâtiment)</div>
					<div class="item-detail">Obtention</div>
				</div>
				<time>2019</time>
			</li>
			<li class="cv-item">
				<div class="firstcolonne">
					<time>2018 à aujourd'hui</time>
				</div>
				<div class="item-title">Travaux de peinture</div>
				<div class="item-detail">Indépendant et Intérim</div>
			</li>
			<li class="cv-item">
				<div class="firstcolonne">
					<time>2016-2017</time>
				</div>
				<div class="item-title">Commune de Modave</div>
				<div class="item-detail">&Eacute;tudiant ouvrier communal</div>
			</li>
			<li class="cv-item cv-study">
				<div class="firstcolonne">
					<div class="item-title">ICADI</div>
					<div class="item-detail">Formation peintre en bâtiment</div>
				</div>
				<time>2015-2017</time>
			</li>
			<li class="cv-item">
				<div class="firstcolonne">
					<time>2013-2017</time>
				</div>
				<div class="item-title">Friterie</div>
				<div class="item-detail">Travail étudiant</div>
			</li>
			<li class="cv-item">
				<div class="firstcolonne">
					<time>2012</time>
				</div>
				<div class="item-title">Industrie Poncin</div>
				<div class="item-detail">&Eacute;tudiant ouvrier</div>
			</li>
			<li class="cv-item cv-study">
				<div class="firstcolonne">
					<div class="item-title">ISMH Huy</div>
					<div class="item-detail">&Eacute;tudes secondaires générales</div>
				</div>
				<time>2009-2015</time>
			</li>

		</ul>
	</div>
	<div class="download">
            <?php if ($file): ?>
                <a href="<?= $fileurl;?>" download="cv">Télécharge mon CV papier <span class="uppercase">içi</span></a>
            <?php endif; ?>
	</div>
</section>
<section id="contact reveal4">
	<div class="contact-box">
		<div class="contact-links">
			<h2 class="contact__title"><?= get_field('contacttitle')?></h2>
			<div class="links">
				<div class="link">
					<a href="https://www.facebook.com/dylan.felgenhauer.7"><img class="contactIcon" src="/wp-content/themes/portfolio2/img/facebook.jpg"
					                 alt="facebook"></a>
				</div>
				<div class="link">
					<a href="https://github.com/DylanFelgenhauer"><img class="contactIcon" src="/wp-content/themes/portfolio2/img/signe-github.jpg" alt="github"></a>
				</div>
				<div class="link">
					<a href="https://www.instagram.com/?hl=fr"><img class="contactIcon" src="/wp-content/themes/portfolio2/img/instagram.jpg"
					                alt="instagram"></a>
				</div>
				<div class="link">
					<a href="https://www.pinterest.fr/dylanfelgenhauer97/"><img class="contactIcon" src="/wp-content/themes/portfolio2/img/pinterest.jpg"
					                alt="pinterest"></a>
				</div>
			</div>
		</div>
		<div class="contact-form-wrapper">

            <form action="https://formsubmit.co/dylan.felgenhauer97@gmail.com" method="POST">
                <div class="form-item">
                    <input type="text" name="sender" required>
                    <label>Nom:</label>

                </div>
                <div class="form-item">
                    <input type="text" name="email" required>
                    <label>Email:</label>
                </div>
                <div class="form-item">
                    <textarea class="" name="message" required></textarea>
                    <label>Message:</label>
                </div>
                <button class="submit-btn">Envoyer</button>
            </form>
		</div>
	</div>
</section>
<script src="/wp-content/themes/portfolio2/javascript/end.js"></script>
</body>
