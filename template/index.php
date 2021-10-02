<?php get_header(); ?>
<div id="main">
	<div id="content">
		<h2>Publicaciones</h2>
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<section id="continguts">
				<a href="<?php the_permalink(); ?>"><p><strong> <?php the_title(); ?></strong> (<?php the_time('j \d\e F \d\e Y') ?>)</p></a>
				<!-- <p><?php the_content(__('(more...)')); ?></p> -->
			</section>
			<?php endwhile; else: ?>
			<p><?php _e('Sorry, no posts matched your criteria.'); ?></p><?php endif; ?>
			<h2>Sobre mi</h2>
			<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit.</p>
			<p>sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?</p> 
	</div>
</div>
	<div id="delimiter">
	</div>
<?php get_footer(); ?>