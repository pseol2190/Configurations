<?php
//< General >

//<< Basic information >>
$wgLogos=
['1x' => "/resources/per-wiki/{$wmgWiki}/logos/logo-1x.png",
'1.5x' => "/resources/per-wiki/{$wmgWiki}/logos/logo-1.5x.png",
'2x' => "/resources/per-wiki/{$wmgWiki}/logos/logo-2x.png",
'icon' => "/resources/per-wiki/{$wmgWiki}/logos/logo-2x.png"];
$wgSitename='오사위키덤프';

//< Permissions >

//<< User group permissions >>
$wmgGroupPermissions['*']['createaccount']=false;
$wmgGroupPermissions['user']['edit']=false;

//< Extensions >

//<< Extension usage >>
$wmgExtensions=array_merge($wmgExtensions,
['Cite' => true,
'Highlightjs_Integration' => true,
'Josa' => true,
'Math' => true,
'PageImages' => true,
'ParserFunctions' => true,
'Popups' => true,
'ReplaceText' => true,
'SyntaxHighlight_GeSHi' => true,
'TextExtracts' => true]);
