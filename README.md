we_tag_ob
=========

webEdition-tag for buffer to var


Beschreibung:
--------------

Das Tag `<we:ob varname="\$xyz" />` puffert die Ausgabe und hinterlegt sie in der angegebenen Variablen (`varname`) für weitere Bearbeitungen.


Attribut:
* `varname`: Name der Variablen
  * Pflicht
  * Backslash-$-Alphanums

Beispiel:
`<we:ob varname="\$site">
  <we:var type="property" name="Text" />
</we:ob>
<?=$site?>`
