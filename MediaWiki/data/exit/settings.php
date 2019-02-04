<?php
##Prevent web access

if (!defined("MEDIAWIKI"))
{die("You don't have permission to do that.");}

##General settings

/*Basic information*/
$wgSitename="PlavorEXITBeta";

/*Blocking*/
$wgBlockAllowsUTEdit=false; //Added for test

/*Others*/
$wgSiteNotice="<b>Welcome to [[{{SITENAME}}]]!</b>";
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

##Permissions

/*Protection*/
$wgNamespaceProtection=
[NS_CATEGORY=>
  ["autoconfirmed-access"],
NS_HELP=>
  ["staff-access"],
NS_PROJECT=>
  ["steward-access"],
NS_TEMPLATE=>
  ["admin-access"]
];
?>