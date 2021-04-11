<?php
//
// _LANGCODE: da
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team (Djculex)

$content .= '
<p>
<abbr title="eXtensible Objekt-Orienteret Portal System">XOOPS</abbr> er et open source
Objekt-Orienteret Web publiserings system skrevet i PHP. Det er et idealt værktøj for
udvikling af små til store dynamiske samfund hjemmesider, intra selskabs portaler, virksomhedernes hjemmesider, weblogs og meget mere.
</p>
<p>
XOOPS er udgivet under betingelserne i 
<a href="http://www.gnu.org/copyleft/gpl.html" rel="external">GNU General Public License (GPL)</a>
og kan gratis anvendes og ændres.
og må vidre distributioneres sålænge betingelserne i GPL overholdes.
</p>
<h3>System krav</h3>
<ul>
<li>WWW Server (<a href="https://www.apache.org/" rel="external">Apache</a>, <a href="https://www.nginx.com/" rel="external">NGINX</a>, IIS, etc)</li>
    <li><a href="https://www.php.net/" rel="external">PHP</a> 5.3.9 eller mere, 7.2+ anbefales</li>
    <li><a href="https://www.mysql.com/" rel="external">MySQL</a> 5.5 eller mere, 5.7+ anbefales </li>
</ul>
<h3>Før du installerer.</h3>
<ol>
<li>Indstil http server, PHP og database korrekt.</li>
<li>Forbered database til XOOPS sitet.</li>
<li>Forbered din bruger konto og adgangsrettigheder til databasen.</li>
<li>Gør følgende mapper og filer skrivbare: %s</li>
<li>Af sikkerhedsmæssige årsager, anbefales det at flytte følgende to mapper ud af <a href="http://phpsec.org/projects/guide/3.html" rel="external">document root</a>, og ændre mappenavnene. %s</li>
<li>Opret (hvis de ikke findes) og gør følgende mapper skrivbare: %s</li>
<li>Tillad cookie og JavaScript i din browser.</li>
</ol>
<h3>Specielle bemærkninger</h3>
<p> Nogle specifikke systemsoftwarekombinationer kræver muligvis nogle yderligere konfigurationer for at fungere
med XOOPS. Hvis et af disse emner gælder for dit miljø, skal du se den fulde
 <a href="https://xoops.gitbook.io/xoops-install-upgrade/" rel="external">XOOPS 
 installationsmanual</a> for mere info.
</p>
<p> MySQL 8.0 understøttes ikke i alle PHP-versioner. Selv i de understøttede versioner er der problemer med
PHP <em> mysqlnd </em> bibliotek kræver muligvis MySQL-serverens <em> standard-godkendelses-plugin </em>
skal indstilles til <em> mysql_native_password </em> for at fungere korrekt.
</p>
<p> SELinux-aktiverede systemer (såsom CentOS og RHEL) kan kræve ændringer i sikkerhedskonteksten
for XOOPS-mapper ud over de normale filtilladelser til at gøre mapper skrivbare.
Kontakt din systemdokumentation og / eller systemadministrator.
</p>
';