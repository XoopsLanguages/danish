<?php
/**
 * Two-factor management strings.
 *
 * You may not change or alter any portion of this comment or credits
 * of supporting developers from this source code or any supporting source code
 * which is considered copyrighted (c) material of the original comment or credit authors.
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 * @copyright       (c) 2000-2026 XOOPS Project (https://xoops.org)
 * @license             GNU GPL 2 (https://www.gnu.org/licenses/gpl-2.0.html)
 * @package             core
 * @since               2.7.4
 */

define('_US_2FAM_TITLE', 'Totrinsgodkendelse');
define('_US_2FAM_PASSWORD', 'Din nuværende adgangskode');
define('_US_2FAM_ENABLE', 'Opsæt en autentificeringsapp');
define('_US_2FAM_CONFIRM', 'Bekræft autentificeringsapp');
define('_US_2FAM_CHOOSE', 'Vælg, hvordan du vil modtage dit andet trin: en autentificeringsapp eller en kode via e-mail.');
define('_US_2FAM_ENABLE_EMAIL', 'Brug e-mailkoder');
define('_US_2FAM_EMAIL_HELP', 'E-mailkoder: en sekscifret kode sendes til %s, hver gang du logger ind. Mindre sikkert end en autentificeringsapp, fordi enhver, der kan læse din e-mail, kan bestå dette trin.');
define('_US_2FAM_EMAIL_STEP', 'Vi har sendt en sekscifret kode til %s. Indtast den nedenfor for at bekræfte. Den er gyldig i ti minutter.');
define('_US_2FAM_CONFIRM_EMAIL', 'Bekræft e-mailkoder');
define('_US_2FAM_CODE_HELP_EMAIL', 'Den sekscifrede kode fra den e-mail, vi lige har sendt dig.');
define('_US_2FAM_ENABLED_EMAIL', 'E-mailkoder er tilmeldt. For at foretage en ændring skal du indtaste din nuværende adgangskode og koden, vi sender via e-mail, eller en gendannelseskode. Brug knappen nedenfor for at anmode om en kode.');
define('_US_2FAM_SEND', 'Send mig en kode');
define('_US_2FAM_MANUAL', 'Manuel opsætningsnøgle');
define('_US_2FAM_SCAN', 'QR-kode til din autentificeringsapp');
define('_US_2FAM_STEP_APP', 'Du skal bruge en autentificeringsapp: enhver app eller adgangskodehåndtering, der genererer tidsbaserede engangskoder (TOTP), fungerer, på din telefon eller computer. Hvis du ikke allerede har en, skal du først installere en efter eget valg (f.eks. Google Authenticator, Microsoft Authenticator, Aegis eller FreeOTP).');
define('_US_2FAM_STEP_ADD', 'Tilføj en konto i appen: scan denne QR-kode, eller vælg manuel indtastning og skriv opsætningsnøglen, der vises nedenfor.');
define('_US_2FAM_STEP_CODE', 'Appen viser nu en sekscifret kode, der ændres hvert 30. sekund. Indtast den kode, der vises lige nu, i feltet nedenfor, og bekræft.');
define('_US_2FAM_CODE_HELP', 'Den sekscifrede kode, som din autentificeringsapp viser lige nu.');
define('_US_2FAM_HTTP', 'Denne forbindelse bruger almindelig HTTP. Din adgangskode, session, opsætningsnøgle og gendannelseskoder kan opsnappes. Brug HTTPS, når det er muligt.');
define('_US_2FAM_CODES', 'Gem disse gendannelseskoder nu');
define('_US_2FAM_CODES_HELP', 'Hver kode virker én gang. Disse koder vises ikke igen. Opbevar dem et sikkert sted, adskilt fra denne konto.');
define('_US_2FAM_DISABLE', 'Deaktiver totrinsgodkendelse');
define('_US_2FAM_REGENERATE', 'Erstat gendannelseskoder');
define('_US_2FAM_ENABLED', 'Der er tilmeldt en autentificeringsapp. Indtast din nuværende adgangskode og en godkendelses- eller gendannelseskode for at foretage en ændring.');
define('_US_2FAM_DISABLED', 'Totrinsgodkendelse er deaktiveret.');
define('_US_2FAM_PAUSED', 'Webstedet har sat totrinsudfordringer på pause. Din faktor bevares, og "husk mig" er fortsat utilgængelig for tilmeldte konti.');
define('_US_2FAM_UNAVAILABLE', 'Opsætning eller administration af totrinsgodkendelse er ikke tilgængelig. Kontakt venligst webstedets administrator.');
define('_US_2FAM_STARTAGAIN', 'Opsætningen udløb, eller kontoen ændrede sig. Indtast din adgangskode for at starte opsætningen igen.');
define('_US_2FAM_BADPASSWORD', 'Din nuværende adgangskode blev ikke accepteret.');
define('_US_2FAM_RESET', 'Nulstil denne brugers totrinsgodkendelse');
define('_US_2FAM_STATUS_NONE', 'Ikke tilmeldt');
define('_US_2FAM_STATUS_TOTP', 'Autentificeringsapp tilmeldt');
define('_US_2FAM_STATUS_EMAIL', 'E-mailkoder tilmeldt');
define('_US_2FAM_STATUS_UNAVAILABLE', 'Status ikke tilgængelig');
define('_US_2FAM_RESET_HELP', 'Dette deaktiverer brugerens anden faktor, uanset hvilken metode de tilmeldte, og tilbagekalder deres gendannelseskoder og "husk mig"-cookies. Eksisterende loggede sessioner forbliver aktive. Indtast din egen administratoradgangskode for at bekræfte.');
define('_US_2FAM_RESET_DONE', 'Brugerens totrinsgodkendelse er blevet nulstillet.');
define('_US_2FAM_BACK', 'Tilbage til konto');
define('_US_2FAM_DONE', 'Totrinsgodkendelse er aktiveret.');
define('_US_2FAM_REPLACED', 'Tidligere gendannelseskoder er blevet tilbagekaldt.');
define('_US_2FAM_NOTICE_SUBJECT', '%s: totrinsgodkendelse ændret');
define('_US_2FAM_NOTICE_BODY', 'Totrinsgodkendelsen eller gendannelseskoderne for din konto på %s blev ændret fra %s. Hvis det ikke var dig, skal du kontakte webstedets administrator.');
define('_US_2FAM_RESET_SUBJECT', '%s: en administrator nulstillede din totrinsgodkendelse');
define('_US_2FAM_RESET_BODY', 'En administrator deaktiverede din anden faktor og tilbagekaldte dens gendannelseskoder på %s fra %s. Eksisterende loggede sessioner forbliver aktive. Log ind, og opsæt totrinsgodkendelse igen. Kontakt webstedets administrator, hvis dette var uventet.');
