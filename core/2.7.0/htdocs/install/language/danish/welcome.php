<?php
//
// _LANGCODE: da
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team

$content = '
<p>
    <abbr title="eXtensible Object-Oriented Portal System">XOOPS</abbr> er en open source
    Objektorienteret webpubliceringssystem skrevet i PHP. Det er et ideelt værktøj til
    udvikling af små til store dynamiske community-websteder, interne virksomhedsportaler, virksomhedsportaler, weblogs og meget mere.
</p>
<p>
    XOOPS frigives i henhold til vilkårene i
    <a href="https://www.gnu.org/licenses/gpl-2.0.html" rel="external">GNU General Public License (GPL)</a>
    version 2 eller nyere, og er gratis at bruge og ændre.
    Det er gratis at videredistribuere, så længe du overholder distributionsbetingelserne i GPL.
</p>
<h3>Krav</h3>
<ul>
    <li>WWW Server (<a href="https://www.apache.org/" rel="external">Apache</a>, <a href="https://www.nginx.com/" rel="external">NGINX</a>, IIS osv.)</li>
    <li><a href="https://www.php.net/" rel="external">PHP</a> 8.2 eller højere, 8.4+ anbefales</li>
    <li><a href="https://www.mysql.com/" rel="external">MySQL</a> 5.7.8 eller højere, 8.4.5+ anbefales </li>
</ul>
<h3>Før du install</h3>
<ol>
    <li>Konfigurer WWW server, PHP og databaseserver korrekt.</li>
    <li>Forbered en database til dit XOOPS websted.</li>
    <li>Forbered brugerkonto og giv brugeren adgang til databasen.</li>
    <li>Gør disse mapper og filer skrivbare: %s</li>
    <li>Af sikkerhedshensyn anbefales det kraftigt at flytte de to nedenstående mapper ud af <a href="https://privacyaustralia.net/phpsec/projects/guide/php-security-guide-databases-and-sql/" rel="external">dokument rod</a> og ændre mappenavnene: %s</li>
    <li>Opret (hvis ikke allerede til stede) og gør disse mapper skrivbare: %s</li>
    <li>Slå cookie og JavaScript af din browser til.</li>
</ol>
<h3>Særlige bemærkninger</h3>
<ol>
    <li>Nogle specifikke systemsoftwarekombinationer kræver muligvis nogle yderligere konfigurationer for at fungere
    med XOOPS. Hvis nogle af disse emner gælder for dit miljø, bedes du se det fulde
    <a href="https://xoops.gitbook.io/xoops-install-upgrade/" rel="external">XOOPS
    installationsmanual</a> for mere information.<br><br>

    <li><strong>SELinux</strong> aktiverede systemer (såsom <strong>CentOS</strong>  og <strong>RHEL</strong>) kan kræve ændringer af sikkerhedskonteksten
    for XOOPS mapper ud over de normale filtilladelser til at gøre mapper skrivbare.
    Rådfør dig med din systemdokumentation og/eller systemadministrator.
</ol>
';

return $content;

