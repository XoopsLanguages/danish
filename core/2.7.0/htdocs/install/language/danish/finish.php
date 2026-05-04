<?php
//
// _LANGCODE: da
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team

$content .= "<h3>Dit websted</h3>
<p>Du kan nu få adgang til <a href='../index.php'>hjemmesiden på dit websted</a>.</p>
<h3>Støtte</h3>
<p>Besøg <a href='https://xoops.org/' rel='external'>XOOPS-projektet</a></p>
<p><strong>OBS:</strong> Dit websted indeholder i øjeblikket minimumsfunktionaliteten. 
Besøg venligst <a href='https://xoops.org/' rel='external' title='XOOPS Web Application System'>xoops.org</a> 
for at lære mere om at udvide XOOPS til at præsentere tekstsider, fotogallerier, fora og mere, 
med <em>moduler</em> samt tilpasse udseendet af din XOOPS med <em>temaer</em>.</p>
";

$content .= "<h3>Sikkerhedskonfiguration</h3>
<p>Installationsprogrammet vil forsøge at konfigurere dit websted af sikkerhedshensyn. Dobbelttjek venligst for at sikre:
<div class='confirmMsg'>
De <em>mainfile.php</em> er skrivebeskyttet.<br>
Fjern mappen <em>{$installer_modified}</em> (eller <em>install</em> hvis det ikke blev omdøbt automatisk af installationsprogrammet) fra din server.
</div>
</p>
";
