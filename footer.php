<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package some_like_it_neat
 */
?>
        <?php do_action( 'some_like_it_neat_after_content' ); ?>

        <?php do_action( 'some_like_it_neat_footer' ); ?>

	</div><!-- .wrap -->

</div><!-- #page -->

<?php tha_body_bottom(); ?>

<?php wp_footer(); ?>

</body>

</html>
