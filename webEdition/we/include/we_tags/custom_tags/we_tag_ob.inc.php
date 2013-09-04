<?php

/**
 * we-Tag we:ob
 *
 * File: we_tag_favicon.inc.php
 * Path: webEdition/we/include/we_tags/custom_tags/
 *
 * @author Aurelian Hermand (aurel@hermand.de)
 * @version 1.0.0
 * @date 04.09.2013
 *
 *
 *
 * Beschreibung:
 *
 * Das Tag <we:ob varname="\$xyz" /> puffert die Ausgabe und hinterlegt sie in der 
 * angegebenen Variablen (varname) für weitere Bearbeitungen.
 * 
 *
 * Attribute:
 * - varname: Name der Variablen
 *       - Pflicht
 *       - Backslash-$-Alphanums
 *       - Beispiel:
 *           <we:ob varname="\$site">
 *             <we:var type="property" name="Text" />
 *           </we:ob>
 *           <?=$site?>
 *
 *
 */

function we_tag_ob($attribs, $content) {

	// Fehlende Pflicht-Attribute abfangen
	if ($missingAttrib = attributFehltError($attribs, "varname", __FUNCTION__)) {
		return $missingAttrib;
	}


	$varname = $attribs['varname'];

	$nameTo = str_replace("$", "", $varname);
	$to = 'global';


    	$return  = '<'.'? ob_start(); ?'.'>';
    	$return .= $content;
    	$return .= '<'.'? $returnvalue = ob_get_clean();';
	$return .= 'we_redirect_tagoutput("$returnvalue", "'.$nameTo.'", "'.$to.'") ?'.'>';


	return $return;

}

