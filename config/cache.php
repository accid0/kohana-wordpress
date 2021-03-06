<?php defined('SYSPATH') or die('No direct script access.');
return array
(
  'wp-file'    => array(
    'driver'             => 'WPFile',
    'cache_dir'          => WP_CONTENT_DIR .'/cache/kohana/parts',
    'default_expire'     => 3600,
    'ignore_on_delete'   => array(
      '.gitignore',
      '.git',
      '.svn'
    )
  ),
  'object-file'    => array(
    'driver'             => 'ObjectFile',
    'cache_dir'          => WP_CONTENT_DIR .'/cache/kohana/objects',
    'default_expire'     => 3600,
    'ignore_on_delete'   => array(
      '.gitignore',
      '.git',
      '.svn'
    )
  ),
  'tag-file'    => array(
    'driver'             => 'ObjectFileTag',
    'cache_dir'          => WP_CONTENT_DIR .'/cache/kohana/objects',
    'tags_dir'           => WP_CONTENT_DIR .'/cache/kohana/tags',
    'parts_dir'          => WP_CONTENT_DIR .'/cache/kohana/parts',
    'default_expire'     => 0,
    'ignore_on_delete'   => array(
      '.gitignore',
      '.git',
      '.svn'
    )
  ),
);