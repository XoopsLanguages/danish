<?php
// mymenu
define('_MD_A_MYMENU_MYTPLSADMIN','');
define('_MD_A_MYMENU_MYBLOCKSADMIN','Rettigheder');
define('_MD_A_MYMENU_MYPREFERENCES','Indstillinger');
// index.php
define('_AM_TH_DATETIME', 'Tid');
define('_AM_TH_USER', 'User');
define('_AM_TH_IP', 'IP');
define('_AM_TH_AGENT', 'AGENT');
define('_AM_TH_TYPE', 'Type');
define('_AM_TH_DESCRIPTION', 'Beskrivelse');
define('_AM_TH_BADIPS','Dårlige iper<br><br><span style="font-weight:normal;">Skriv hver ip per linje<br>Tom betyder alle IPer er tilladte</span>');
define('_AM_TH_GROUP1IPS','Tilladte IPer for gruppe=1<br><br><span style="font-weight:normal;">Skriv hver IP per linje.<br>192.168. betyder 192.168.*<br>Blank betyder at alle IPer er tilladte</span>');
define('_AM_LABEL_COMPACTLOG', 'Kompakt log');
define('_AM_BUTTON_COMPACTLOG', 'Komprimer log!');
define('_AM_JS_COMPACTLOGCONFIRM', 'Dupletter (IP, Type) rækker vil blive fjernet');
define('_AM_LABEL_REMOVEALL', 'Fjern alle rækker');
define('_AM_BUTTON_REMOVEALL', 'Fjern alt!');
define('_AM_JS_REMOVEALLCONFIRM', 'Alle logger bliver permanent fjernet, Er du sikker ?');
define('_AM_LABEL_REMOVE', 'Fjern alle markeret rækker:');
define('_AM_BUTTON_REMOVE', 'Fjern!');
define('_AM_JS_REMOVECONFIRM', 'Fjern OK ?');
define('_AM_MSG_IPFILESUPDATED', 'Filerne for IPer er blevet ændret');
define('_AM_MSG_BADIPSCANTOPEN', 'Filen for dårlige IPer kan ikke åbnes');
define('_AM_MSG_GROUP1IPSCANTOPEN', 'Filen for at tillade group=1 kan ikke åbnes');
define('_AM_MSG_REMOVED', 'Rækker fjernes');
define('_AM_FMT_CONFIGSNOTWRITABLE', 'Sæt mappe konfiguration til skrivbar: %s');
// prefix_manager.php
define('_AM_H3_PREFIXMAN', 'Prefix Manager');
define('_AM_MSG_DBUPDATED', 'Database opdateret med success!');
define('_AM_CONFIRM_DELETE', 'Alt data slettes. ok ?');
define('_AM_TXT_HOWTOCHANGEDB',"Hvis du vil ændre præfiks,<br> rediger %s/data/secure.php Manuelt.<br><br>define('XOOPS_DB_PREFIX', '<b>%s</b>');");
// advisory.php
define('_AM_ADV_NOTSECURE', 'Ikke sikker');
define('_AM_ADV_TRUSTPATHPUBLIC', 'Hvis du kan se et billede -NG- eller linket returnerer den normale side, er din XOOPS_TRUST_PATH ikke placeret korrekt. Det bedste sted for XOOPS_TRUST_PATH er uden for DocumentRoot. Hvis du ikke kan gøre det, skal du sætte .htaccess (DENY FROM ALL) lige under XOOPS_TRUST_PATH som den næstbedste måde.');
define('_AM_ADV_TRUSTPATHPUBLICLINK', 'Kontroller, at PHP-filer inde i TRUST_PATH er indstillet til skrivebeskyttet (det skal være 404.403 eller 500 fejl)');
define('_AM_ADV_REGISTERGLOBALS',"Hvis 'ON' beder denne indstilling en række injecting angreb. Hvis du kan, skal du indstille 'register_globals' i php.ini eller, hvis det ikke er muligt, oprette eller redigere .htaccess i din XOOPS-mappe:");
define('_AM_ADV_ALLOWURLFOPEN',"Hvis \"ON\", giver denne indstilling angriberne mulighed for at udføre vilkårlig scripts på eksterne servere. <br>Kun administrator kan ændre denne indstilling. <br>Hvis du er en administrator, rediger php.ini eller httpd.conf.<br><b>Sample of httpd.conf:<br> & nbsp; php_admin_flag & nbsp; allow_url_fopen & nbsp; off</b><br>Else, gør det gældende for dine administratorer.");
define('_AM_ADV_USETRANSSID',"Hvis 'ON' vises, vil dit session-id blive vist i ankeretiketter etc. <br>For at forhindre, at sessionen hi-jacking, skal du tilføje en linje til .htaccess i XOOPS_ROOT_PATH.<br><b>php_flag session.use_trans_sid off</b>");
define('_AM_ADV_DBPREFIX',"Denne indstilling inviterer \"SQL Injections\".<br> Glem ikke at slå 'Force sanitizing *' til ON i dette moduls præferencer.");
define('_AM_ADV_LINK_TO_PREFIXMAN', 'Gå tyil prefix manager');
define('_AM_ADV_MAINUNPATCHED', 'Du burde ændre din mainfile.php som beskrevet i README.');
define('_AM_ADV_DBFACTORYPATCHED', 'Din databasefactory er klar til DBLayer Trapping anti-SQL-Injection');
define('_AM_ADV_DBFACTORYUNPATCHED', 'Din databasefactory er IKKE klar til DBLayer Trapping anti-SQL-Injection. Der skal rettes lidt.');
define('_AM_ADV_SUBTITLECHECK', 'Se om Protector virker som det skal.');
define('_AM_ADV_CHECKCONTAMI', 'Forurening');
define('_AM_ADV_CHECKISOCOM', 'Isoleret kommentarer');
//XOOPS 2.5.4
define('_AM_ADV_REGISTERGLOBALS2', 'og placer den i linjen herunder:');
//XOOPS 2.5.8
define('_AM_PROTECTOR_PREFIX', 'Prefix');
define('_AM_PROTECTOR_TABLES', 'Tabeller');
define('_AM_PROTECTOR_UPDATED', 'Opdateret: ');
define('_AM_PROTECTOR_COPY', 'Kopier');
define('_AM_PROTECTOR_ACTIONS', 'Handling');
// XOOPS 2.5.10 v Protector 3.60
define('_AM_LABEL_BAN_BY_IP', 'Bloker IP\'erne på afkrydsede poster:');
define('_AM_BUTTON_BAN_BY_IP', 'Bloker IP!');
define('_AM_JS_BANCONFIRM', 'Bloker IP OK ?');
define('_AM_MSG_BANNEDIP', 'IPerne er blokerede');
define('_AM_ADMINSTATS_TITLE', 'Protector log resume');

