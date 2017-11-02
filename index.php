<?php
/**
 * Description for undefined
 * @private
 * @version     0.5.1
 * @property    undefined
 * @package     WordPress
 * @subpackage  firstPixel
 * @since       0.1
 */

get_header();

get_template_part('templates/misc/loop', get_post_format());

get_footer();
