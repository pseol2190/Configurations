<?php
if (!defined("MEDIAWIKI"))
{exit("This is not a valid entry point.");}

//< General >

//<< Basic information >>
$wgLogos=
["1x"=>$wgScriptPath."/data/".$wmgWiki."/logos/logo-1x.png",
"1.5x"=>$wgScriptPath."/data/".$wmgWiki."/logos/logo-1.5x.png",
"2x"=>$wgScriptPath."/data/".$wmgWiki."/logos/logo-2x.png"];
$wgSitename="오사위키덤프";

//< Permissions >

//<< User group permissions >>
$wgGroupPermissions["*"]["createaccount"]=false;
$wgGroupPermissions["user"]["edit"]=false;

//< Extensions >

//<< Extension usage >>
$wmgExtensionCite=true;
$wmgExtensionHighlightjs_Integration=true;
$wmgExtensionJosa=true;
$wmgExtensionMath=true;
$wmgExtensionPageImages=true;
$wmgExtensionParserFunctions=true;
$wmgExtensionPopups=true;
$wmgExtensionReplaceText=true;
$wmgExtensionSyntaxHighlight_GeSHi=true;
$wmgExtensionTextExtracts=true;

//< Skins >

//<< Skin usage >>
$wmgSkinPlavorBuma=true;
