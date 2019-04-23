<?php
##Prevent web access

if (!defined("MEDIAWIKI"))
{die("You don't have permission to do that.");}

##General

/*Basic information*/
$wgLogo="{$wgScriptPath}/data/{$wiki_id}/logo.png";
$wgSitename="PlavorEXITBeta";

/*Interface*/
$wgForceUIMsgAsContentMsg= //Added for test
["modifiedarticleprotection-comment",
"protect-expiry-indefinite",
"protect-fallback",
"protect-summary-cascade",
"protect-summary-desc",
"protectedarticle-comment",
"restriction-delete",
"restriction-edit",
"restriction-move",
"restriction-protect",
"restriction-upload",
"undo-summary",
"unprotectedarticle-comment",

"protect-level-user-access",
"protect-level-autoconfirmed-access",
"protect-level-staff-access",
"protect-level-admin-access",
"protect-level-bureaucrat-access",
"protect-level-steward-access"];
$wgSiteNotice="<b>Welcome to [[{{SITENAME}}]]!</b>";

/*Others*/
$wgRestrictDisplayTitle=false; //Added for test

##Permissions

/*Group permissions*/
$wgGroupPermissions=array_merge($wgGroupPermissions,
["bureaucrat"=>
  ["editinterface"=>false,
  "editsitecss"=>false,
  "editsitejs"=>false,
  "editsitejson"=>false,
  "editusercss"=>false,
  "edituserjs"=>false,
  "edituserjson"=>false]
]);

/*Protection*/
$wgNamespaceProtection=
[NS_CATEGORY=>
  ["autoconfirmed-access"],
NS_HELP=>
  ["staff-access"],
NS_MEDIAWIKI_TALK=>
  ["steward-access"],
NS_PROJECT=>
  ["steward-access"],
NS_TEMPLATE=>
  ["admin-access"]
];

##Extensions

/*Extensions usage*/
$extension_AccountInfo=true;
$extension_CodeEditor=true;
$extension_CollapsibleVector=true;
$extension_CommonsMetadata=true;
$extension_Highlightjs_Integration=true;
$extension_MultimediaViewer=true;
$extension_PageImages=true;
$extension_Popups=true;
$extension_SyntaxHighlight_GeSHi=true;
$extension_TextExtracts=true;
$extension_Theme=true;
$extension_TwoColConflict=true;
$extension_WikiEditor=true;
?>
