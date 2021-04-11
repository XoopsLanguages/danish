<div id="help-template" class="outer">
    <h1 class="head">Hjælp: <a class="ui-corner-all tooltip" href="<{$xoops_url}>/modules/protector/admin/index.php" title="Back to the administration of Protector"> Protector <img src="<{xoAdminIcons home.png}>" alt="Back to the administration of Protector"/></a></h1>
    <!-- -----Help Content ---------- -->
    <h4 class="odd">Beskrivelse</h4>

    <p class="even">Protector er et modul til at forsvare dit XOOPS CMS mod forskellige ondsindede angreb.</p>
    <h4 class="odd">Installer/afinstall</h4>

    <p> Definer først XOOPS_TRUST_PATH til mainfile.php, hvis du aldrig har gjort det endnu. </p>
    <br />

    <p> Kopier html/moduler/protector i arkivet til din XOOPS_ROOT_PATH/modules/ </p>

    <p> Kopier xoops_trust_path/modules/protector i arkivet til din XOOPS_TRUST_PATH/modules/ </p>
    <br />

    <p> Drej tilladelse fra XOOPS_TRUST_PATH/modules/protector/protector / konfigurerer skrivbar </p>
    <h4 class = "odd"> = Sådan reddes = </h4>

    <p class = "even"> Hvis du er udelukket fra Protector, skal du bare slette filer under XOOPS_TRUST_PATH/modules/protector/configs/ </p>
    <h4 class = "odd"> Introduktion til filter-plugins i dette arkiv. </h4>

    <p class = "even"> - postcommon_post_deny_by_rbl.php
        <br />
        Dette plugin kan bremse udførelsen af ​​Post, især chatmoduler.
        <br />
        - postcommon_post_deny_by_httpbl.php
        <br />
        Alle indlæg fra IP registreret i http: BL afvises.
    </p>

    <p> - postcommon_post_deny_by_httpbl.php
        <br />
        Dette plugin kan bremse udførelsen af ​​Post, især chatmoduler.
        <br />
        definere ('PROTECTOR_HTTPBL_KEY', '............');
        <br />
        - postcommon_post_need_multibyte.php
        <br />
        Indlæg uden multi-byte-tegn afvises.
    </p>

    <p class = "even"> - postcommon_post_need_multibyte.php
        <br />
        Dette plugin kan bremse udførelsen af ​​Post, især chatmoduler.
        <br />
        - postcommon_post_htmlpurify4guest.php
        <br />
        Alle postdata sendt af gæster renses af HTMLPurifier.
    </p>

    <p> - postcommon_post_htmlpurify4guest.php
        <br />
        -postcommon_register_insert_js_check.php
        <br />
        Dette plugin forhindrer dit websted i at registrere brugerens robot.
    </p>

    <p class = "even"> - postcommon_register_insert_js_check.php
        <br />
        - bruteforce_overrun_message.php
        <br />
        Angiv en besked for besøgende, der har prøvet forkerte adgangskoder mere end de angivne tidspunkter.
    </p>

    <p> - bruteforce_overrun_message.php
        <br />
        - precommon_bwlimit_errorlog.php
        <br />
        Når begrænsning af båndbredde limit bremses, logger dette plugin det i Apache's error_log.
    </p>

    <p class = "even"> - precommon_bwlimit_errorlog.php
        <br />
        Vejledning
    </p>

    <p> Alle plugins med navnet * _errorlog.php logger nogle oplysninger ind i Apaches error_log. </p>
    <h4 class = "odd"> Manual </h4>

    <p class = "even"> Manual kommer snart. </p>
    <!-- -----Help Content ---------- -->
</div>