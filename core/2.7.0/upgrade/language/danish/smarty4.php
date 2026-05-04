<?php

// _LANGCODE: da
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team

define('_XOOPS_SMARTY4_MIGRATION', 'XOOPS Smarty4 Migration');

define('_XOOPS_SMARTY4_SCANNER_RESULTS', 'Scannerresultater');
define('_XOOPS_SMARTY4_SCANNER_RUN', 'Kør scanning');
define('_XOOPS_SMARTY4_SCANNER_END', 'Afslut scanner');
define('_XOOPS_SMARTY4_SCANNER_RULE', 'Regel');
define('_XOOPS_SMARTY4_SCANNER_MATCH', 'Kamp');
define('_XOOPS_SMARTY4_SCANNER_FILE', 'Fil');
define('_XOOPS_SMARTY4_SCANNER_FIXED', 'Fix Count');
define('_XOOPS_SMARTY4_SCANNER_MANUAL_REVIEW', 'Manuel gennemgang påkrævet');
define('_XOOPS_SMARTY4_SCANNER_AUTOFIX', 'Kan rettes automatisk: for hver elementvariabel vil blive omdøbt ved at tilføje "_item" (f.eks. "foo" bliver "foo_item").');
define('_XOOPS_SMARTY4_SCANNER_NOT_WRITABLE', 'Ikke skrivbar');

define('_XOOPS_SMARTY4_RESCAN_OPTIONS', 'Genscanningsindstillinger');

define('_XOOPS_SMARTY4_FIX_BUTTON', 'Klik på afkrydsningsfeltet "Ja" nedenfor, og klik derefter på knappen Kør scanning for automatisk at prøve at løse eventuelle fundne problemer.');
define('_XOOPS_SMARTY4_SCANNER_MARK_COMPLETE', 'Markér fuldført');

define('_XOOPS_SMARTY4_TEMPLATE_DIR', 'Skabelonkatalog (valgfrit)');
define('_XOOPS_SMARTY4_TEMPLATE_EXT', 'Skabelonudvidelse (valgfrit)');


define(
    '_XOOPS_SMARTY4_SCANNER_OFFER',
    <<<'EOT'
<h3>XOOPS 2.7.0 introducerer en væsentlig ændring: Smarty 4</h3>

<p>Desværre kan denne ændring potentielt forstyrre nogle ældre temaer. Derfor, før du fortsætter med opgraderingen, skal du sørge for, at du følger disse trin:

<li>Kør preflight.php for at tjekke for forældede temaer eller modulskabeloner.</li>
<li>Hvis der identificeres problemer, skal du konsultere dette dokument for at forstå de nødvendige ændringer, før du fortsætter med opgraderingen.</li>
<li>Efter at have foretaget de nødvendige ændringer, kør preflight.php igen.</li>
<li>Hvis der ikke er flere problemer, kan du begynde opgraderingsprocessen.</li>
</p>
EOT,
);
