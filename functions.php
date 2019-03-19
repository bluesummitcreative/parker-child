<?php
  //Fix reference to parent theme file that breaks Snapshots - 3/26/18
  include get_template_directory() . '/includes/comment.php';

  //Add Support for WP Core Title Tag functionality - 3/27/18
  add_theme_support( 'title-tag' );
?>
