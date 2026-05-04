<?php
/**
 * DebugBar Module - Main Language Constants
 *
 * @copyright       (c) 2000-2026 XOOPS Project (https://xoops.org)
 * @license             GNU GPL 2 (https://www.gnu.org/licenses/gpl-2.0.html)
 * @author              trabis <lusopoemas@gmail.com>
 * @author              Richard Griffith <richard@geekwright.com>
 */
// _LANGCODE: da

define('_MD_DEBUGBAR_DEBUG', 'Fejlretning');
define('_MD_DEBUGBAR_INCLUDED_FILES', 'Inkluderede filer');
define('_MD_DEBUGBAR_PHP_VERSION', 'PHP-version');
define('_MD_DEBUGBAR_NONE', 'Ingen');
define('_MD_DEBUGBAR_ERRORS', 'Fejl');
define('_MD_DEBUGBAR_DEPRECATED', 'Forældet');
define('_MD_DEBUGBAR_QUERIES', 'Forespørgsler');
define('_MD_DEBUGBAR_BLOCKS', 'Blokke');
define('_MD_DEBUGBAR_EXTRA', 'Ekstra');
define('_MD_DEBUGBAR_TIMERS', 'Timere');
define('_MD_DEBUGBAR_TIMETOLOAD', '%s tog %s sekunder at indlæse.');
define('_MD_DEBUGBAR_TOTAL', 'I alt');
define('_MD_DEBUGBAR_NOT_CACHED', 'Ikke cachet');
define('_MD_DEBUGBAR_CACHED', 'Cachet (regenereres hvert %s sekund)');

// Value display labels (Smarty/DebugBar panels)
define('_MD_DEBUGBAR_EMPTY_STRING', '(tom streng)');
define('_MD_DEBUGBAR_NULL', 'NULL');
define('_MD_DEBUGBAR_BOOL_TRUE', 'bool SAND');
define('_MD_DEBUGBAR_BOOL_FALSE', 'bool FALSK');

// Extra panel labels
define('_MD_DEBUGBAR_DATABASE_QUERIES', 'Databaseforespørgsler');
define('_MD_DEBUGBAR_MEMORY_USAGE', 'Hukommelsesbrug');
define('_MD_DEBUGBAR_QUERY_SUMMARY', '%d forespørgsler');
define('_MD_DEBUGBAR_QUERY_DUPLICATES', '(%d dubletter)');
define('_MD_DEBUGBAR_BYTES', '%s bytes');
define('_MD_DEBUGBAR_DB_VERSION', '%s version');

// Query error formatting
define('_MD_DEBUGBAR_QUERY_ERROR', '-- Fejlnummer: %s Fejlmeddelelse: %s');
define('_MD_DEBUGBAR_QUERY_ERROR_RAY', "
-- Fejl #%s: %s");

// Ray labels
define('_MD_DEBUGBAR_RAY_EXCEPTION', 'Undtagelse');
define('_MD_DEBUGBAR_RAY_QUERY', 'Forespørgsel #%d');
define('_MD_DEBUGBAR_RAY_DUP', '[DUP x%d]');
define('_MD_DEBUGBAR_RAY_SLOW', 'LANGSOMT');
define('_MD_DEBUGBAR_RAY_BLOCK_CACHED', 'Bloker (cachelagrede %ds)');
define('_MD_DEBUGBAR_RAY_BLOCK_NOT_CACHED', 'Bloker (ikke cachelagret)');
define('_MD_DEBUGBAR_RAY_DUMP', 'Dump');
define('_MD_DEBUGBAR_RAY_TEMPLATE_CONTEXT', 'Skabelonkontekst');
define('_MD_DEBUGBAR_RAY_NO_VARS', '(ingen skabelonvariabler)');
define('_MD_DEBUGBAR_RAY_VARS_COUNT', '%s (%d vars)');

// Install error messages
define('_MD_DEBUGBAR_ERR_DIR_CREATE', 'Directory "modules/debugbar/%s" blev ikke oprettet');
define('_MD_DEBUGBAR_ERR_DIR_COPY', 'Kunne ikke oprette mappen "%s" under aktivkopiering');
