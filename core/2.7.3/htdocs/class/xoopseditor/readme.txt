xoopseditor tilbyder en samling af redaktører til XOOPS

brugervejledning:

1 tjek filerne xoops_version.php under /xoopseditor/ for at sikre, at de er nyere end dine nuværende

2 upload /xoopseditor/ til /XOOPS/class/ => /XOOPS/class/xoopseditor/:
  XOOPS/class/xoopseditor/dhtmlext
  XOOPS/class/xoopseditor/dhtmltekstområde
  XOOPS/class/xoopseditor/fckeditor
  XOOPS/class/xoopseditor/koivi
  XOOPS/klasse/xoopseditor/tekstområde
  XOOPS/class/xoopseditor/tinymce

3 konfigurere præferencer, hvor det er relevant
3.1 ./dhtmlext(alle editorer)/language/: lav din lokale sprogfil baseret på english.php
3.3 ./dhtmlext(alle editorer)/editor_registry.php: sæt konfigurationer for editoren: rækkefølge - vis rækkefølge i tilfælde af, at editorvalg bruges, 0 for deaktiveret; nohtml - virker til ikke-html-syntaks
3.3 ./FCKeditor/module/: kopier filerne til modulmapperne i tilfælde af, at der kræves modulspecifikke uploadtilladelser, lagring og redigeringsmuligheder
3.3.1 ./FCKeditor/module/fckeditor.config.js: for redigeringsmuligheder behøver du normalt ikke at ændre det
3.3.2 ./FCKeditor/module/fckeditor.connector.php: for at angive mappen til filsøgning (og upload af lager) => XOOPS/uploads/XOOPS_FCK_FOLDER/, mappen er påkrævet for at oprette manuelt
3.3.3 ./FCKeditor/module/fckeditor.upload.php: angiv uploadtilladelse og uploadlager
3.4 XOOPS/uploads/fckeditor/: for at oprette mappen, hvis FCKeditor er aktiveret, bruges til uploads, hvorfra uploadmappen ikke er angivet
3.5 ./tinymce/tinymce/jscripts/: download dine lokale sprogfiler fra http://tinymce.moxiecode.com/language.php

4 tjek filnavne: for filnavne, der skelner mellem store og små bogstaver, skal du sørge for, at du har filnavnene bogstaveligt talt korrekte, dvs. "FCKeditor" er ikke identisk med "fckeditor"

5 tjek /xoopseditor/sampleform.inc.php for udviklingsvejledning
