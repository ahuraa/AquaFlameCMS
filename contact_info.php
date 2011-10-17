<?php
include("configs.php");
$page_cat = "settings";
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-gb">
<head>
<title><?php echo $website['title']; ?> - Account Information</title>
<meta content="false" http-equiv="imagetoolbar" />
<meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible" />
<link rel="shortcut icon" href="wow/static/local-common/images/favicons/bam.ico" type="image/x-icon"/>
<link rel="search" type="application/opensearchdescription+xml" href="http://eu.battle.net/en-gb/data/opensearch" title="Battle.net Search" />
<link rel="stylesheet" type="text/css" media="all" href="wow/static/local-common/css/common.css?v22" />
<!--[if IE]><link rel="stylesheet" type="text/css" media="all" href="wow/static/local-common/css/common-ie.css?v22" /><![endif]-->
<!--[if IE 6]><link rel="stylesheet" type="text/css" media="all" href="wow/static/local-common/css/common-ie6.css?v22" /><![endif]-->
<!--[if IE 7]><link rel="stylesheet" type="text/css" media="all" href="wow/static/local-common/css/common-ie7.css?v22" /><![endif]-->
<link rel="stylesheet" type="text/css" media="all" href="wow/static/css/bnet.css?v21" />
<link rel="stylesheet" type="text/css" media="print" href="wow/static/css/bnet-print.css?v21" />
<link rel="stylesheet" type="text/css" media="all" href="wow/static/css/management/address-book.css?v21" />
<!--[if IE 6]><link rel="stylesheet" type="text/css" media="all" href="wow/static/css/management/address-book-ie6.css?v21" /><![endif]-->
<!--[if IE 7]><link rel="stylesheet" type="text/css" media="all" href="wow/static/css/management/address-book-ie7.css?v21" /><![endif]-->
<link rel="stylesheet" type="text/css" media="all" href="wow/static/css/ui.css?v21" />
<!--[if IE]><link rel="stylesheet" type="text/css" media="all" href="wow/static/css/bnet-ie.css?v21" /><![endif]-->
<!--[if IE 6]><link rel="stylesheet" type="text/css" media="all" href="wow/static/css/bnet-ie6.css?v21" /><![endif]-->
<script type="text/javascript" src="wow/static/local-common/js/third-party/jquery-1.4.4-p1.min.js"></script>
<script type="text/javascript" src="wow/static/local-common/js/core.js?v22"></script>
<script type="text/javascript" src="wow/static/local-common/js/tooltip.js?v22"></script>
<!--[if IE 6]> <script type="text/javascript">
//<![CDATA[
try { document.execCommand('BackgroundImageCache', false, true) } catch(e) {}
//]]>
</script>
<![endif]-->
<script type="text/javascript">
//<![CDATA[
Core.staticUrl = '/account';
Core.sharedStaticUrl= 'wow/static/local-common';
Core.baseUrl = '/account';
Core.supportUrl = 'http://eu.battle.net/support/';
Core.secureSupportUrl= 'https://eu.battle.net/support/';
Core.project = 'bam';
Core.locale = 'en-gb';
Core.buildRegion = 'eu';
Core.shortDateFormat= 'dd/MM/yyyy';
Core.dateTimeFormat = 'dd/MM/yyyy HH:mm';
Core.loggedIn = true;
Flash.videoPlayer = 'http://eu.media.blizzard.com/global-video-player/themes/bam/video-player.swf';
Flash.videoBase = 'http://eu.media.blizzard.com/bam/media/videos';
Flash.ratingImage = 'http://eu.media.blizzard.com/global-video-player/ratings/bam/rating-pegi.jpg';
Flash.expressInstall= 'http://eu.media.blizzard.com/global-video-player/expressInstall.swf';
var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-544112-16']);
_gaq.push(['_trackPageview']);
_gaq.push(['_trackPageLoadTime']);
//]]>
</script>
</head>
<body class="en-gb logged-in">
<div id="layout-top">
<div class="wrapper">
<div id="header">
<?php include("functions/header_account.php"); ?>
<?php include("functions/footer_man_nav.php"); ?>
</div>
<div id="layout-middle">
<div class="wrapper">
<div id="content">
<div id="page-header">
<h2 class="subcategory">Account Settings</h2>
<h3 class="headline">Your Contact &amp; Shipping Addresses</h3>
</div>
<div id="page-content" class="page-content">
<p>Your Primary Contact is the address and phone number that you wish to be associated with this <?php echo $website['title']; ?> account. Edit this address by clicking the button to its right.</p>
<p>These information given to <?php echo $website['title']; ?> will be associated to help us for the Donations. To be sure we always check your information before any usage of your Credit Card or Paypal.</p>
<p>If you wish to add additional shipping addresses to this <?php echo $website['title']; ?> account, simply select the option below. You can save only 2 addresses.</p>
<fieldset class="ui-controls section-buttons" >
<a
class="ui-button button1 "
href="wow/static/management/add-address.html"
>
<span>
<span>Add New Shipping Address</span>
</span>
</a>
</fieldset>
<div class="address-book" id="address-book">
<div id="address-1" class="address-box primary-address border-5">
<div class="actions">
<a href="edit-address.php" class="icon-edit">Edit</a>
</div>
<h4 class="caption">Last Name</h4><br />
<h4>Username:</h4>
<p><?php echo strtolower($_SESSION['username']); ?></p>
<h4>Name:</h4>
<p class="address-block">Unaivalable
<br />
<br />
Town, INFO
<br />Country</p>
<h4>Primary Phone:</h4>
<p></p>
<div class="activate-primary">
<div id="primary-address">This is currently your main shipping address</div>
</div>
<div class="address-dialog" style="display: none" id="address-dialog-1" title="Delete?">
Are you sure you want to delete this address?
<input type="hidden" name="addressId" value="1" />
</div>
</div>
<script type="text/javascript">
//<![CDATA[
$(function() {
$(".address-dialog").dialog("destroy");
$('.address-dialog').dialog({
autoOpen: false,
modal: true,
position: "center",
resizeable: false,
closeText: "Close",
buttons: {
'Yes': function() {
var id = $(this).find('input[name="addressId"]').val();
AddressBook.deleteAddress(id);
$(this).dialog("close");
},
'Cancel': function() {
$(this).dialog("close");
}
},
open: function() {
$(".ui-dialog-buttonpane").find("button").addClass("button1").find(":first").addClass("first");
}
});
});
//]]>
</script>
<span class="clear"></span>
</div>
</div>
</div>
</div>
</div>
<div id="layout-bottom">
<?php include("functions/footer_man.php"); ?>
</div>
<script type="text/javascript">
//<![CDATA[
var xsToken = 'db9c1032-afc8-4a29-9ab8-07ec1c068d37';
var Msg = {
support: {
ticketNew: 'Ticket {0} was created.',
ticketStatus: 'Ticket {0}’s status changed to {1}.',
ticketOpen: 'Open',
ticketAnswered: 'Answered',
ticketResolved: 'Resolved',
ticketCanceled: 'Cancelled',
ticketArchived: 'Archived',
ticketInfo: 'Need Info',
ticketAll: 'View All Tickets'
},
cms: {
requestError: 'Your request cannot be completed.',
ignoreNot: 'Not ignoring this user',
ignoreAlready: 'Already ignoring this user',
stickyRequested: 'Sticky requested',
postAdded: 'Post added to tracker',
postRemoved: 'Post removed from tracker',
userAdded: 'User added to tracker',
userRemoved: 'User removed from tracker',
validationError: 'A required field is incomplete',
characterExceed: 'The post body exceeds XXXXXX characters.',
searchFor: "Search for",
searchTags: "Articles tagged:",
characterAjaxError: "You may have become logged out. Please refresh the page and try again.",
ilvl: "Item Lvl",
shortQuery: "Search requests must be at least three characters long."
},
bml: {
bold: 'Bold',
italics: 'Italics',
underline: 'Underline',
list: 'Unordered List',
listItem: 'List Item',
quote: 'Quote',
quoteBy: 'Posted by {0}',
unformat: 'Remove Formating',
cleanup: 'Fix Linebreaks',
code: 'Code Blocks',
item: 'WoW Item',
itemPrompt: 'Item ID:',
url: 'URL',
urlPrompt: 'URL Address:'
},
ui: {
viewInGallery: 'View in gallery',
loading: 'Loading…',
unexpectedError: 'An error has occurred',
fansiteFind: 'Find this on…',
fansiteFindType: 'Find {0} on…',
fansiteNone: 'No fansites available.'
},
grammar: {
colon: '{0}:',
first: 'First',
last: 'Last'
},
fansite: {
achievement: 'achievement',
character: 'character',
faction: 'faction',
'class': 'class',
object: 'object',
talentcalc: 'talents',
skill: 'profession',
quest: 'quest',
spell: 'spell',
event: 'event',
title: 'title',
arena: 'arena team',
guild: 'guild',
zone: 'zone',
item: 'item',
race: 'race',
npc: 'NPC',
pet: 'pet'
}
};
//]]>
</script>
<script type="text/javascript" src="wow/static/js/bam.js?v21"></script>
<script type="text/javascript" src="wow/static/local-common/js/tooltip.js?v22"></script>
<script type="text/javascript" src="wow/static/local-common/js/menu.js?v22"></script>
<script type="text/javascript">
$(function() {
Menu.initialize();
Menu.config.colWidth = 190;
Locale.dataPath = 'data/i18n.frag.xml';
});
</script>
<!--[if lt IE 8]>
<script type="text/javascript" src="wow/static/local-common/js/third-party/jquery.pngFix.pack.js?v22"></script>
<script type="text/javascript">$('.png-fix').pngFix();</script>
<![endif]-->
<script type="text/javascript" src="wow/static/js/management/address-book.js?v21"></script>
<script type="text/javascript" src="wow/static/local-common/js/third-party/jquery-ui-1.8.1.custom.min.js?v22"></script>
<script type="text/javascript">
//<![CDATA[
Core.load("wow/static/local-common/js/overlay.js?v22");
Core.load("wow/static/local-common/js/search.js?v22");
Core.load("wow/static/local-common/js/third-party/jquery-ui-1.8.6.custom.min.js?v22");
Core.load("wow/static/local-common/js/third-party/jquery.mousewheel.min.js?v22");
Core.load("wow/static/local-common/js/third-party/jquery.tinyscrollbar.custom.js?v22");
Core.load("wow/static/local-common/js/login.js?v22", false, function() {
Login.embeddedUrl = 'https://eu.battle.net/login/login.frag';
});
//]]>
</script>
<script type="text/javascript">
//<![CDATA[
(function() {
var ga = document.createElement('script');
var src = "https://ssl.google-analytics.com/ga.js";
if ('http:' == document.location.protocol) {
src = "http://www.google-analytics.com/ga.js";
}
ga.type = 'text/javascript';
ga.setAttribute('async', 'true');
ga.src = src;
var s = document.getElementsByTagName('script');
s = s[s.length-1];
s.parentNode.insertBefore(ga, s.nextSibling);
})();
//]]>
</script>
</body>
</html>
