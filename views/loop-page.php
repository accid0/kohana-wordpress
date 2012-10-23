<?php
global $post;

if ($_active_title == 'yes' || !$_active_title)
  the_title('<h2>', '</h2>');
?>

<?php if (!empty($post->post_content)) : ?>
<div id="post-<?php the_ID(); ?>" <?php post_class('group'); ?>>
  <?php the_content();?>
</div>
<?php endif;