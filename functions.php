<?php
/**
 * Sage includes
 *
 * The $sage_includes array determines the code library included in your theme.
 * Add or remove files to the array as needed. Supports child theme overrides.
 *
 * Please note that missing files will produce a fatal error.
 *
 * @link https://github.com/roots/sage/pull/1042
 */
$sage_includes = [
  'lib/assets.php',    // Scripts and stylesheets
  'lib/extras.php',    // Custom functions
  'lib/setup.php',     // Theme setup
  'lib/titles.php',    // Page titles
  'lib/wrapper.php',   // Theme wrapper class
  'lib/customizer.php' // Theme customizer
];

foreach ($sage_includes as $file) {
  if (!$filepath = locate_template($file)) {
    trigger_error(sprintf(__('Error locating %s for inclusion', 'sage'), $file), E_USER_ERROR);
  }

  require_once $filepath;
}
unset($file, $filepath);

function SearchFilter($query) {
    if ($query->is_search) {
        $query->set('post_type', 'post');
    }
    return $query;
}

add_filter('pre_get_posts','SearchFilter');

add_filter('disqus_language_filter', function( $lang ){
    // la función pll_current_language es del plugin polylang; y devuelve el idioma de la entrada actual
    $current_language = function_exists('pll_current_language') ? pll_current_language('locale') : 'es_ES';
    // ojo que en Disqus, inglés es "en" pero español "es_ES" :-P
    return $current_language == 'en_US' ? 'en' : $current_language;
});