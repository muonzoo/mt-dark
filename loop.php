<div <?php post_class() ?> >
	<h2 class="title"><a href="<?php the_permalink(); ?>" title="<?php echo esc_attr(sprintf(__('Permanent Link to %s', 'mt-dark'), the_title_attribute('echo=0'))); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
	<div class="entry">
		<?php
		if ((function_exists('add_theme_support')) && ( has_post_thumbnail())) {
			the_post_thumbnail('single_post');
		}
		?>
		<?php if ( is_archive()) {
		?>
		<?php the_excerpt(); ?>
		<?php } else { ?>
		<?php the_content(__('(more...)', 'mt-dark')); ?>
		<?php } ?>
	</div>
	<ul class="postmeta">
		<?php wp_link_pages(array('before' => '<li class="page-link">' . __('Pages:', 'mt-dark'), 'after' => '<br /></li>')); ?>
<?php if(function_exists('dark_posted_on')) dark_posted_on(); 

if (comments_open()) :
	echo '<li>';
	comments_popup_link(__('No comments yet', 'mt-dark'), __('1 comment', 'mt-dark'), __('% comments', 'mt-dark'), 'comments-link', __('Comments are off for this post', 'mt-dark'));
	echo '</li> ';
endif;
 dark_posted_footer();?>
	</ul>
</div>