
<article
		<?php post_class("col-fill-l-8 col-fill-p-2 col-pull-2 row-span-auto padding-bottom-5"); ?>
		id="post-<?php the_ID(); ?>">


	<div class="height-24 flex-bottom" data-bg-image="<?= get_the_post_thumbnail_url() ?>">
		<div class="padding-1 full-width backdrop-blur">
			<h2 class="font-color-off-white blend-difference font-weight-300">
				<?php the_title(); ?>
			</h2>
			<p class="font-color-off-white blend-difference font-weight-300">
				By&nbsp;
				<a href="<?= get_author_posts_url(get_the_author_meta('ID')) ?>">
					<?php the_author(); ?>

				</a>
				&nbsp;on <em><?php the_date(); ?></em>
			</p>
		</div>
	</div>

	<div class="padding-1">

		<?php the_content(); ?>

		<hr>

		<div class="padding-y-1">

			<p>
				<i class="bi bi-person-circle"></i>
				 <a href="<?= get_author_posts_url(get_the_author_meta('ID')) ?>">
					<?php the_author(); ?>

				</a>
			</p>
			<p>
				<i class="bi bi-calendar-event"></i>
				<em><?= get_the_date() ?></em>
			</p>


			<?php
			$tags = get_the_category();
			if($tags): ?>
			<p>
				<i class="bi bi-folder"></i>
				<em>
					<?php foreach($tags as $i=>$term): ?>

					<a href="<?= get_category_link($term->term_id) ?>">
						<?= esc_html($term->name) . $term->ID ?>

					</a><?= ($i < count($tags)-1) ? "," : "" ?>&nbsp;
					<?php endforeach; ?>

				</em>
			</p>
			<?php endif; ?>

			<?php
			$tags = wp_get_post_tags(get_the_ID());
			if($tags): ?>
			<p>
				<i class="bi bi-tags"></i>
				<em>
					<?php foreach($tags as $i=>$term): ?>

					<a href="<?= get_tag_link($term->term_id) ?>" class="no-underline">
						<?= esc_html($term->name) ?>

					</a><?= ($i < count($tags)-1) ? "," : "" ?>&nbsp;

					<?php endforeach; ?>

				</em>
			</p>
			<? endif; ?>

		</div>
		<hr>

	</div>
</article>
