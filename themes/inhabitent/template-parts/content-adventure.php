<?php
/**
 * Template part for displaying posts.
 *
 * @package RED_Starter_Theme
 */

?>
<div class="adventure-block">
    <div class="adventures-wrapper">
        <img src="<?php echo get_the_post_thumbnail_url($post) ?>" alt="<?php echo $post->name ?>">
        <h3><a href="<?php the_permalink($post) ?>"><?php echo get_the_title($post) ?></a></h3>
        <a class="button white-btn" href="<?php the_permalink($post) ?>">
            Read more
        </a>
    </div>
</div>

