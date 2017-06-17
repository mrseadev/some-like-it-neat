<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package Some_Like_It_Neat
 * @author  Alex Vasquez <alex@digisavvy.com>
 * @license GPL-2.0+ https://www.gnu.org/licenses/old-licenses/gpl-2.0.en.html
 * @link    https://github.com/digisavvy/some-like-it-neat
 */
?>
<?php tha_entry_before(); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> itemscope itemType="http://schema.org/WebPage">
    <?php tha_entry_top(); ?>
    <header class="entry-header">

        <h1 class="entry-title" itemprop="name"><?php the_title(); ?></h1>

    </header><!-- .entry-header -->

    <div class="entry-content" itemprop="mainContentOfPage">

    <?php the_content(); ?>

    </div><!-- .entry-content -->
    <?php edit_post_link(__('Edit', 'some-like-it-neat'), '<footer class="entry-meta"><span class="edit-link">', '</span></footer>'); ?>
    <?php tha_entry_bottom(); ?>
</article><!-- #post-## -->
<?php tha_entry_after(); ?>
