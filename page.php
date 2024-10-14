<?php get_header(); ?>

<?php
	$dark_title = get_field('dark_title');
	$gray_title = get_field('gray_title');
?>

<?php the_post(); ?>
<section class="policy">
	<?php include_once(__DIR__ . '/template-parts/breadcrumbs.php'); ?>
	<div class="policy__heading-wrap container-right">
		<h1 class="policy__heading title title--big title--dark title--w-medium title--indent js-reveal gs-reveal">
			<?= $dark_title; ?> <span class="policy__heading-accent title title--gray"><?= $gray_title; ?></span>
		</h1>
	</div>
	<div class="policy__wrapper">
		<div class="policy__body container">
			<div class="policy__content wysiwyg js-reveal gs-reveal">
				<?php the_content(); ?>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>