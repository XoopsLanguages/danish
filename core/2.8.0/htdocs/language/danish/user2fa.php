<?php
/**
 * Second-factor challenge strings.
 *
 * A file of their own, apart from user.php: xoops_loadLanguage() falls back
 * to English for a missing file but never fills gaps in a present one, so
 * a language pack that predates the challenge renders it in English rather
 * than failing on an undefined constant.
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

// XOOPS 2.7.4: two-factor challenge
define('_US_2FA_TITLE', 'Andet trin');
define('_US_2FA_PROMPT', 'Indtast koden fra din autentificeringsapp');
define('_US_2FA_CODE', 'Godkendelseskode');
define('_US_2FA_PROMPT_EMAIL', 'Vi har sendt en sekscifret kode til %s. Indtast den nedenfor.');
define('_US_2FA_CODE_EMAIL', 'Kode fra din e-mail');
define('_US_2FA_SEND', 'Send en ny kode');
define('_US_2FA_SENT', 'En ny kode er sendt til %s. Den er gyldig i ti minutter.');
define('_US_2FA_SEND_WAIT', 'Der blev sendt en kode for mindre end et minut siden. Tjek din indbakke og spammappe, før du anmoder om en ny.');
define('_US_2FA_SEND_FAILED', 'Koden kunne ikke sendes lige nu. Prøv igen om lidt, eller brug en gendannelseskode.');
define('_US_2FA_EMAIL_SUBJECT', '%s: din login-kode');
define('_US_2FA_EMAIL_BODY', 'Din login-kode til %s er:

%s

Den er gyldig i %d minutter og virker én gang. Hvis du ikke har anmodet om dette, skal du ignorere denne besked og overveje at skifte adgangskode.');
define('_US_2FA_RECOVERY', 'Brug en gendannelseskode i stedet');
define('_US_2FA_RECOVERY_HINT', 'Hver gendannelseskode virker én gang. Brug af en sender dig en e-mail.');
define('_US_2FA_SUBMIT', 'Fortsæt');
define('_US_2FA_STARTAGAIN', 'Dette login er udløbet eller blev afbrudt. Start venligst forfra.');
define('_US_2FA_BACKTOLOGIN', 'Tilbage til loginformularen');
define('_US_2FA_BADCODE', 'Den kode blev ikke accepteret.');
define('_US_2FA_LOCKED', 'For mange forsøg. Andet trin er låst i femten minutter; en gendannelseskode virker stadig.');
define('_US_2FA_UNAVAILABLE', 'Andet trin er ikke tilgængeligt lige nu. En gendannelseskode virker stadig, eller kontakt webstedets administrator.');
define('_US_2FA_REQUIRED', 'Denne konto har totrinsgodkendelse aktiveret. Log ind via webstedets loginside.');
define('_US_2FA_HTTP_LOGIN', 'Dette pop op-vindue kan ikke gennemføre et totrinslogin via HTTP, fordi din adgangskode ville blive sendt ukrypteret. Brug i stedet webstedets login, eller bed administratoren om at aktivere HTTPS for webstedet.');
define('_US_2FA_LOCKED_MAIL_SUBJECT', '%s: andet trin låst');
define('_US_2FA_LOCKED_MAIL_BODY', 'Fem forkerte koder til andet trin blev indtastet for din konto på %s fra %s. Andet trin er låst i femten minutter. Hvis det ikke var dig, skal du skifte adgangskode.');
define('_US_2FA_RECOVERY_MAIL_SUBJECT', '%s: en gendannelseskode blev brugt');
define('_US_2FA_RECOVERY_MAIL_BODY', 'En gendannelseskode blev brugt til at logge ind på din konto på %s fra %s. Den kode virker ikke længere. Hvis det ikke var dig, skal du skifte adgangskode og nulstille dine gendannelseskoder.');
