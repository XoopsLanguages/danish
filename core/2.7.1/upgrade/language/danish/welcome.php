<?php

// _LANGCODE: da
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team

define(
    '_XOOPS_UPGRADE_WELCOME',
    <<<'EOT'
<h2>XOOPS Opgradering</h2>

<p>
<em>Opgrader</em> vil undersøge denne XOOPS installation og anvende eventuelle nødvendige patches for at gøre den kompatibel 
med den nye XOOPS kode. Patches kan omfatte databaseændringer, tilføjelse af standardindstillinger for nye
konfigurationselementer, fil- og dataopdateringer og mere.
<p>
Efter hver patch vil opgraderingsprogrammet rapportere status og vente på, at dit input fortsætter. Hos
slutningen af opgraderingen, vil kontrollen gå til systemmodulets opdateringsfunktion.

<div class="alert alert-warning">
Når opgraderingen er fuldført, skal du ikke glemme at:
<ul class="fa-ul">
 <li><span class="fa-li fa-solid fa-folder-open"></span> slet opgraderingsmappen</li>
 <li><span class="fa-li fa-solid fa-arrows-rotate"></span> opdatere eventuelle moduler, der er ændret</li>
</div>

EOT,
);
