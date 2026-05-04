<?php
/**
 * DebugBar Module - Module Info Language Constants
 *
 * @copyright       (c) 2000-2026 XOOPS Project (https://xoops.org)
 * @license             GNU GPL 2 (https://www.gnu.org/licenses/gpl-2.0.html)
 * @author              Richard Griffith <richard@geekwright.com>
 */
// _LANGCODE: da

define('_MI_DEBUGBAR_NAME', 'DebugBar');
define('_MI_DEBUGBAR_DSC', 'Fejlrapportering og ydeevneanalyse med PHP DebugBar');

define('_MI_DEBUGBAR_ENABLE', 'Vis DebugBar');
define('_MI_DEBUGBAR_SMARTYDEBUG', 'Aktivér Smarty Debug');
define('_MI_DEBUGBAR_FILESDEBUG', 'Aktivér fane med inkluderede filer');
define('_MI_DEBUGBAR_FILESDEBUG_DSC', 'Vis alle PHP-filer indlæst under anmodningen');
define('_MI_DEBUGBAR_SLOWQUERY', 'Grænse for langsom forespørgsel (sekunder)');
define('_MI_DEBUGBAR_SLOWQUERY_DSC', 'Forespørgsler langsommere end dette fremhæves med rødt (f.eks. 0.05 = 50ms)');

define('_MI_DEBUGBAR_QUERYMODE',      'Logning af forespørgsler');
define('_MI_DEBUGBAR_QUERYMODE_DSC',  'Alle forespørgsler eller kun langsomme og fejl');
define('_MI_DEBUGBAR_QUERYMODE_ALL',  'Alle forespørgsler');
define('_MI_DEBUGBAR_QUERYMODE_SLOW', 'Kun langsomme og fejl');

define('_MI_DEBUGBAR_RAY_ENABLE', 'Aktivér Ray-integration');
define('_MI_DEBUGBAR_RAY_ENABLE_DSC', 'Send fejlfinderdata til Ray-appen');

define('_MI_DEBUGBAR_ADMENU1', 'Hjem');
define('_MI_DEBUGBAR_MENU_ABOUT', 'Om');

//Help
\define('_MI_DEBUGBAR_DIRNAME', basename(dirname(__DIR__, 2)));
\define('_MI_DEBUGBAR_HELP_HEADER', __DIR__ . '/help/helpheader.tpl');
\define('_MI_DEBUGBAR_BACK_2_ADMIN', 'Tilbage til administration af ');
\define('_MI_DEBUGBAR_OVERVIEW', 'Oversigt');

//help multipage
\define('_MI_DEBUGBAR_DISCLAIMER', 'Ansvarsfraskrivelse');
\define('_MI_DEBUGBAR_LICENSE', 'Licens');
\define('_MI_DEBUGBAR_SUPPORT', 'Supports');
