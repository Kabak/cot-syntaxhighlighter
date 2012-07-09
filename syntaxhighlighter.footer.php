<?php
/* ====================
[BEGIN_COT_EXT]
Hooks=footer.first
[END_COT_EXT]
==================== */

/**
 * SyntaxHighlighter connector for Cotonti
 *
 * @package syntaxhighligther
 * @version 1.0
 * @author Trustmaster
 * @copyright Copyright (c) Cotonti Team 2011
 * @license BSD
 */

defined('COT_CODE') or die('Wrong URL');

$sh_core_css = cot_rc('code_rc_css_file', array('url' => $cfg['plugins_dir'] . '/syntaxhighlighter/lib/styles/shCore.css'));
$sh_theme_css = cot_rc('code_rc_css_file', array('url' => $cfg['plugins_dir'] . '/syntaxhighlighter/lib/styles/shThemeDefault.css'));
$sh_core_js = $cfg['plugins_dir'] . '/syntaxhighlighter/lib/scripts/shAll.min.js';

cot_rc_embed_footer(<<<JS
$(function(){if($('pre').length>0){ $('head').append('$sh_core_css');$('head').append('$sh_theme_css');var sh_e1=document.createElement('script');sh_e1.async=true;sh_e1.src ='$sh_core_js';$('body').append(sh_e1);}});
JS
);

?>
