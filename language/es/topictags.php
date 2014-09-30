<?php
/**
*
* @package phpBB Extension - RH Topic Tags
* @copyright (c) 2014 Robet Heim
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

if (!defined('IN_PHPBB'))
{
    exit;
}

if (empty($lang) || !is_array($lang))
{
    $lang = array();
}

$lang = array_merge($lang, array(
	'RH_TOPICTAGS'						=> 'Etiquetas',
	'RH_TOPICTAGS_EXP'					=> 'Etiquetas separadas por coma (",")',
	'RH_TOPICTAGS_ALLOWED_TAGS'			=> 'Etiquetas permitidas:',

	'RH_TOPICTAGS_SEARCH_HEADER_OR'		=> 'Búsqueda de temas con cualquiera de estas etiquetas: %s',
	'RH_TOPICTAGS_SEARCH_HEADER_AND'	=> 'Búsqueda de temas con todas estas etiquetas: %s',
	'RH_TOPICTAGS_SEARCH_IGNORED_TAGS'	=> 'Las siguientes etiquetas han sido ignoradas, porque no son válidas: %s',

	'RH_TOPICTAGS_NO_TOPICS_FOR_TAG_OR'		=> 'No hay temas etiquetados con cualquiera de estas etiquetas:  %s',
	'RH_TOPICTAGS_NO_TOPICS_FOR_TAG_AND'	=> 'No hay temas etiquetados con estas etiquetas: %s',

	'RH_TOPICTAGS_NO_TAGS'				=> 'No hay etiquetas, todavía.',

	'RH_TOPICTAGS_TAGS_INVALID'			=> 'Las siguientes etiquetas no son válidas: %s',

));