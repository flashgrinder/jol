<?php get_header(); ?>

<?php the_post(); ?>
<section class="policy">
	<div class="policy__heading-wrap">
		<h1 class="policy__heading title title--large title--black title--w-regular js-reveal gs-reveal">
			<?php the_title(); ?>
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