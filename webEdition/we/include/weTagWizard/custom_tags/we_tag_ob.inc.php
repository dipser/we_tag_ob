<?php

$this->NeedsEndTag = true;
$this->Description = 'Mit we:ob werden Ausgaben gepuffert und an eine Variable übergeben. Beispiel:<br /><pre>&lt;we:ob varname="\$site"&gt;<br />  &lt;we:var type="property" name="Text" /&gt;<br />&lt;'.'/we:ob&gt;<br />&lt;?=$site?&gt;</pre>';

$this->Attributes[] = new weTagData_textAttribute('varname', false, '');