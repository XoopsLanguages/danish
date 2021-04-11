<?php
// _LANGCODE: da
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team (Djculex)

define('_XOOPS_UPGRADE_WELCOME', <<<'EOT'
<h2> XOOPS-opgradering </h2>

<p>
<em> Opgradering </em> vil undersøge denne XOOPS-installation og anvende de nødvendige patches for at gøre den kompatibel
med den nye XOOPS-kode. Patches kan omfatte databaseændringer og tilføje standardindstillinger for nye
konfigurationselementer, fil- og dataopdateringer med mere.
<p>
Efter hver programrettelse giver opgraderingen status og venter på dit input før den fortsætter. I
slutningen af ​​opgraderingen overføres kontrollen til systemmodulets opdateringsfunktion.

<div class="alert alert-warning">
Når opdateringen er færdig, Glem ikke at : 
<ul class="fa-ul">
<li><span class="fa-li fa fa-folder-open-o"></span> Slette opdateringsmappen!</li>
 <li><span class="fa-li fa fa-refresh"></span> Opdater alle moduler som er blevet ændret</li>
</div>

EOT
);