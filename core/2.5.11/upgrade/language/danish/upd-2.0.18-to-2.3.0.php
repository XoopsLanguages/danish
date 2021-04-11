<?php
// _LANGCODE: da
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team (Djculex)

define('LEGEND_XOOPS_PATHS', 'XOOPS fysiske sti');
define('LEGEND_DATABASE', 'Database Karaktersæt');

define('XOOPS_LIB_PATH_LABEL', 'XOOPS library sti');
define('XOOPS_LIB_PATH_HELP', 'Fysiske sti til XOOPS lib mappen UDEN efterfølgende skråstreg. Find mappen ud fra ' . XOOPS_ROOT_PATH . ' og gør den sikker.');
define('XOOPS_DATA_PATH_LABEL', 'XOOPS datafilmappe');
define('XOOPS_DATA_PATH_HELP', 'Fysiske sti til XOOPS datafiler de skrivbare, stien uden efterfølgende skråstreg. Find mappen i ' . XOOPS_ROOT_PATH . ' for at gøre den sikker');

define('DB_COLLATION_LABEL', 'Database Karaktersæt');
define('DB_COLLATION_HELP', "Fra og med 4.12 understøtter MySQL brugerdefineret tegnsæt og collation. Det er dog mere komplekst end forventet, så IKKE foretag nogen ændringer, medmindre du er sikker på dit valg.");
define('DB_COLLATION_NOCHANGE', 'Ændre ikke');

define('XOOPS_PATH_FOUND', 'Sti funder.');
define('ERR_COULD_NOT_ACCESS', 'Kunne ikke få adgang til den angivne mappe. Kontroller, at den findes og kan læses af serveren.');
define('CHECKING_PERMISSIONS', 'Kontrol af fil- og mappetilladelser ...');
define('ERR_NEED_WRITE_ACCESS', 'Serveren skal have skriveadgang til følgende filer og mappe <br> (dvs. <em> chmod 777 mappenavn </em> på en UNIX / LINUX-server)');
define('IS_NOT_WRITABLE', '%s er IKKE skrivbar.');
define('IS_WRITABLE', '%s er skrivbar.');
define('ERR_COULD_NOT_WRITE_MAINFILE', 'Fejl ved skrivning af indhold til mainfile.php, skriv indholdet til mainfile.php manuelt.');