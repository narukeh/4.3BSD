window.mwPerformance=(window.performance&&performance.mark)?performance:{mark:function(){}};window.mwNow=(function(){var perf=window.performance,navStart=perf&&perf.timing&&perf.timing.navigationStart;return navStart&&typeof perf.now==='function'?function(){return navStart+perf.now();}:function(){return Date.now();};}());window.isCompatible=function(str){var ua=str||navigator.userAgent;return!!((function(){'use strict';return!this&&!!Function.prototype.bind&&!!window.JSON;}())&&'querySelector'in document&&'localStorage'in window&&'addEventListener'in window&&!(ua.match(/webOS\/1\.[0-4]|SymbianOS|Series60|NetFront|Opera Mini|S40OviBrowser|MeeGo|Android.+Glass|^Mozilla\/5\.0 .+ Gecko\/$|googleweblight/)||ua.match(/PlayStation/i)));};(function(){var NORLQ,script;if(!isCompatible()){document.documentElement.className=document.documentElement.className.replace(/(^|\s)client-js(\s|$)/,'$1client-nojs$2');NORLQ=window.NORLQ||[];while(NORLQ.length){NORLQ.shift()();}window.NORLQ={push:function(
fn){fn();}};window.RLQ={push:function(){}};return;}function startUp(){mw.config=new mw.Map(true);mw.loader.addSource({"local":"/w/load.php"});mw.loader.register([["site","173cvi0",[1]],["site.styles","1faghmm",[],"site"],["noscript","15cf43m",[],"noscript"],["filepage","0sylbet"],["user.groups","0fas5jz",[5]],["user","024bodp",[6],"user"],["user.styles","1dhkmlr",[],"user"],["user.defaults","1qeiohz"],["user.options","0bhc5ha",[7],"private"],["user.tokens","031krj1",[],"private"],["mediawiki.language.data","14i3h1c",[176]],["mediawiki.skinning.elements","1cdzu1s"],["mediawiki.skinning.content","1mvwr9c"],["mediawiki.skinning.interface","1rwy829"],["mediawiki.skinning.content.parsoid","00qpwht"],["mediawiki.skinning.content.externallinks","1uj8ppk"],["jquery.accessKeyLabel","0h14i2l",[25,133]],["jquery.appear","09o5ie8"],["jquery.async","0mt5sd2"],["jquery.autoEllipsis","1ntgzyf",[37]],["jquery.badge","1fs6sly",[173]],["jquery.byteLength","0ok3y0z"],["jquery.byteLimit","02kj69f",[21]],[
"jquery.checkboxShiftClick","1x86e0m"],["jquery.chosen","0392t2o"],["jquery.client","0y8ygrx"],["jquery.color","0n6ul7m",[27]],["jquery.colorUtil","1ap5a7t"],["jquery.confirmable","1t2wfda",[177]],["jquery.cookie","05xcs4z"],["jquery.expandableField","0r4v5qf"],["jquery.farbtastic","1j6c456",[27]],["jquery.footHovzer","13818x3"],["jquery.form","06diliq"],["jquery.fullscreen","06aq3o2"],["jquery.getAttrs","1x58tql"],["jquery.hidpi","1w5jqob"],["jquery.highlightText","02ve63n",[133]],["jquery.hoverIntent","0imhl12"],["jquery.i18n","1y05vtb",[175]],["jquery.localize","1ozpzv1"],["jquery.makeCollapsible","00l4n3h"],["jquery.mockjax","1m1wcmp"],["jquery.mw-jump","0sqj02j"],["jquery.placeholder","1v859n7"],["jquery.qunit","1n2d1az"],["jquery.spinner","0mqa646"],["jquery.jStorage","18fpt1i"],["jquery.suggestions","1vtvm3p",[37]],["jquery.tabIndex","06fvmvg"],["jquery.tablesorter","0oxjec6",[133,178]],["jquery.textSelection","10mogaq",[25]],["jquery.throttle-debounce","18sucjr"],[
"jquery.xmldom","1gd2qsc"],["jquery.tipsy","0oivelc"],["jquery.ui.core","1iy116i",[56],"jquery.ui"],["jquery.ui.core.styles","0w92bnq",[],"jquery.ui"],["jquery.ui.accordion","03o04ge",[55,75],"jquery.ui"],["jquery.ui.autocomplete","19as3hr",[64],"jquery.ui"],["jquery.ui.button","18fkfqh",[55,75],"jquery.ui"],["jquery.ui.datepicker","0ozk6xh",[55],"jquery.ui"],["jquery.ui.dialog","13j0x6h",[59,62,66,68],"jquery.ui"],["jquery.ui.draggable","1pmwekz",[55,65],"jquery.ui"],["jquery.ui.droppable","0z72hve",[62],"jquery.ui"],["jquery.ui.menu","0qmt9jw",[55,66,75],"jquery.ui"],["jquery.ui.mouse","1t3ns0b",[75],"jquery.ui"],["jquery.ui.position","0ucxh2w",[],"jquery.ui"],["jquery.ui.progressbar","150ydpe",[55,75],"jquery.ui"],["jquery.ui.resizable","0pjfzye",[55,65],"jquery.ui"],["jquery.ui.selectable","0ar9rk4",[55,65],"jquery.ui"],["jquery.ui.slider","01o1jw4",[55,65],"jquery.ui"],["jquery.ui.sortable","0k5no09",[55,65],"jquery.ui"],["jquery.ui.spinner","0quo9rc",[59],"jquery.ui"],[
"jquery.ui.tabs","13qi4jb",[55,75],"jquery.ui"],["jquery.ui.tooltip","0b9vug2",[55,66,75],"jquery.ui"],["jquery.ui.widget","1b2xsdh",[],"jquery.ui"],["jquery.effects.core","03swgau",[],"jquery.ui"],["jquery.effects.blind","1o6ytl7",[76],"jquery.ui"],["jquery.effects.bounce","1u4b33d",[76],"jquery.ui"],["jquery.effects.clip","1n70wk0",[76],"jquery.ui"],["jquery.effects.drop","1baiadc",[76],"jquery.ui"],["jquery.effects.explode","1u0cur9",[76],"jquery.ui"],["jquery.effects.fade","1wui289",[76],"jquery.ui"],["jquery.effects.fold","0o6cdhp",[76],"jquery.ui"],["jquery.effects.highlight","1vthd1x",[76],"jquery.ui"],["jquery.effects.pulsate","127zla1",[76],"jquery.ui"],["jquery.effects.scale","0ayovw5",[76],"jquery.ui"],["jquery.effects.shake","02c21oa",[76],"jquery.ui"],["jquery.effects.slide","17j84z1",[76],"jquery.ui"],["jquery.effects.transfer","0ti46o9",[76],"jquery.ui"],["json","0fas5jz"],["moment","0zflczt",[173]],["mediawiki.apihelp","1rm2yda"],["mediawiki.template","0rmjhl6"],[
"mediawiki.template.mustache","1jcr3gm",[93]],["mediawiki.template.regexp","096f0km",[93]],["mediawiki.apipretty","1hn8o2w"],["mediawiki.api","0lohnhr",[150,9]],["mediawiki.api.category","16lnri9",[138,97]],["mediawiki.api.edit","1pp31kf",[138,148]],["mediawiki.api.login","05dcdkb",[97]],["mediawiki.api.options","0ygmq21",[97]],["mediawiki.api.parse","0d8n1kf",[97]],["mediawiki.api.upload","0vwki7n",[99]],["mediawiki.api.user","0o9w4sn",[97]],["mediawiki.api.watch","1n55cxo",[97]],["mediawiki.api.messages","1qrt6kb",[97]],["mediawiki.api.rollback","039d315",[97]],["mediawiki.content.json","18ytxfe"],["mediawiki.confirmCloseWindow","197kqde"],["mediawiki.debug","1o2iezw",[32]],["mediawiki.diff.styles","1oee3fq"],["mediawiki.feedback","1rg6wkn",[138,127,273]],["mediawiki.feedlink","1od5gib"],["mediawiki.filewarning","18ycs69",[269]],["mediawiki.ForeignApi","0cfpdhx",[116]],["mediawiki.ForeignApi.core","0n381b1",[97,265]],["mediawiki.helplink","1wrxi5d"],["mediawiki.hidpi","0bv9z5x",[36],
null,null,"return'srcset'in new Image();"],["mediawiki.hlist","0n3fx5e"],["mediawiki.htmlform","13s8ejx",[22,133]],["mediawiki.htmlform.checker","1t9ec5w",[52]],["mediawiki.htmlform.ooui","0nykug8",[269]],["mediawiki.htmlform.styles","1edy87q"],["mediawiki.htmlform.ooui.styles","0i0eall"],["mediawiki.icon","0kd7e22"],["mediawiki.inspect","10a4lym",[21,133]],["mediawiki.messagePoster","05j1xnk",[115]],["mediawiki.messagePoster.wikitext","0dhyp09",[99,127]],["mediawiki.notification","17hpaxs",[150]],["mediawiki.notify","1nxy6z7"],["mediawiki.notification.convertmessagebox","1yc7k2q",[129]],["mediawiki.notification.convertmessagebox.styles","0s4knav"],["mediawiki.RegExp","1ttswfb"],["mediawiki.pager.tablePager","0quwl51"],["mediawiki.searchSuggest","1rw7hc5",[35,48,97]],["mediawiki.sectionAnchor","0gl04fz"],["mediawiki.storage","1g6dwei"],["mediawiki.Title","1194nc7",[21,150]],["mediawiki.Upload","0rj1rbr",[103]],["mediawiki.ForeignUpload","0hbi41d",[115,139]],[
"mediawiki.ForeignStructuredUpload.config","0msydx9"],["mediawiki.ForeignStructuredUpload","1spihoy",[141,140]],["mediawiki.Upload.Dialog","0jqrisq",[144]],["mediawiki.Upload.BookletLayout","1epkeub",[139,177,262,91,271,273]],["mediawiki.ForeignStructuredUpload.BookletLayout","0hr813t",[142,144,106,181,254,249]],["mediawiki.toc","14gyil5",[154]],["mediawiki.Uri","18yahws",[150,95]],["mediawiki.user","18zc6wp",[104,137,8]],["mediawiki.userSuggest","1g8gea6",[48,97]],["mediawiki.util","0153wcw",[16,130]],["mediawiki.viewport","0nuqn8o"],["mediawiki.checkboxtoggle","10i8k7y"],["mediawiki.checkboxtoggle.styles","0hbzcn4"],["mediawiki.cookie","1xfh7d9",[29]],["mediawiki.toolbar","1sgpqjk",[51]],["mediawiki.experiments","1ijsu5i"],["mediawiki.action.edit","1muwwsx",[51,158,97,251]],["mediawiki.action.edit.styles","04o8ald"],["mediawiki.action.edit.collapsibleFooter","128bmwk",[41,125,137]],["mediawiki.action.edit.preview","0eu8fo2",[33,46,51,97,111,177,269]],["mediawiki.action.history",
"18f7lkd"],["mediawiki.action.history.styles","0tgyc2j"],["mediawiki.action.history.diff","1oee3fq"],["mediawiki.action.view.dblClickEdit","13wmbm0",[150,8]],["mediawiki.action.view.metadata","1vegqqw"],["mediawiki.action.view.categoryPage.styles","1wk8iwe"],["mediawiki.action.view.postEdit","0log0tv",[177,129]],["mediawiki.action.view.redirect","0l6csek",[25]],["mediawiki.action.view.redirectPage","0zg0x9m"],["mediawiki.action.view.rightClickEdit","1xxr2o0"],["mediawiki.action.edit.editWarning","0eqi8op",[51,109,177]],["mediawiki.action.view.filepage","1i50ym8"],["mediawiki.language","0zb2l76",[174,10]],["mediawiki.cldr","06iyc0o",[175]],["mediawiki.libs.pluralruleparser","0qy80o2"],["mediawiki.language.init","1dwdsj5"],["mediawiki.jqueryMsg","1lgv9p3",[173,150,8]],["mediawiki.language.months","0tka10q",[173]],["mediawiki.language.names","02wxp1n",[176]],["mediawiki.language.specialCharacters","0qem0v5",[173]],["mediawiki.libs.jpegmeta","1nby1kr"],["mediawiki.page.gallery","03jcp90",[
52,183]],["mediawiki.page.gallery.styles","0uiwc5q"],["mediawiki.page.gallery.slideshow","009f3is",[138,97,271,286]],["mediawiki.page.ready","1u69zd9",[16,23,43]],["mediawiki.page.startup","1gi50ea"],["mediawiki.page.patrol.ajax","1nu3tcs",[46,138,97]],["mediawiki.page.watch.ajax","03f4sc3",[138,105,177,186]],["mediawiki.page.rollback","0j9w3ys",[46,107]],["mediawiki.page.image.pagination","0kltpnc",[46,150]],["mediawiki.rcfilters.filters.base.styles","1xmmdcy"],["mediawiki.rcfilters.highlightCircles.seenunseen.styles","11dzr9j"],["mediawiki.rcfilters.filters.dm","16r34n1",[21,147,101,148,265]],["mediawiki.rcfilters.filters.ui","0oyksfr",[41,193,268,280,282,284,286]],["mediawiki.special","11mc2ep"],["mediawiki.special.apisandbox.styles","0ozqy9a"],["mediawiki.special.apisandbox","0z8h661",[41,97,177,252,268]],["mediawiki.special.block","163qxfu",[120,150]],["mediawiki.special.changecredentials.js","1dzllgl",[97,122]],["mediawiki.special.changeslist","0egdqf7"],[
"mediawiki.special.changeslist.enhanced","1aiq4je"],["mediawiki.special.changeslist.legend","11y3q86"],["mediawiki.special.changeslist.legend.js","02c7ul9",[41,154]],["mediawiki.special.changeslist.visitedstatus","0hfi9ua"],["mediawiki.special.comparepages.styles","17i2jpz"],["mediawiki.special.contributions","1nt6kok",[177,249]],["mediawiki.special.edittags","1yt0822",[24]],["mediawiki.special.edittags.styles","1du4kbc"],["mediawiki.special.import","18t2j0j"],["mediawiki.special.movePage","13nxhuv",[247,251]],["mediawiki.special.movePage.styles","1i4yz24"],["mediawiki.special.pageLanguage","1ravw7a",[269]],["mediawiki.special.pagesWithProp","1xqs9rx"],["mediawiki.special.preferences","09h6n6e",[109,173,131]],["mediawiki.special.preferences.styles","0wutz2h"],["mediawiki.special.recentchanges","0rh62of"],["mediawiki.special.search","0e9kh1d",[260]],["mediawiki.special.search.commonsInterwikiWidget","0nusotu",[147,97,177]],["mediawiki.special.search.interwikiwidget.styles","06nagwt"],[
"mediawiki.special.search.styles","0ngrry2"],["mediawiki.special.undelete","0t194vx"],["mediawiki.special.unwatchedPages","1dgd9yf",[138,105]],["mediawiki.special.upload","105az9t",[46,138,97,109,177,181,224,93]],["mediawiki.special.upload.styles","07l7ha6"],["mediawiki.special.userlogin.common.styles","0tt68jh"],["mediawiki.special.userlogin.login.styles","16wp6uq"],["mediawiki.special.userlogin.signup.js","1js4bur",[97,121,177]],["mediawiki.special.userlogin.signup.styles","1xjs3cl"],["mediawiki.special.userrights","0hdwaf1",[131]],["mediawiki.special.watchlist","0k9xh2r",[138,105,177,269]],["mediawiki.special.watchlist.styles","1h7cjyl"],["mediawiki.special.version","1kl58te"],["mediawiki.legacy.config","0wszux8"],["mediawiki.legacy.commonPrint","1pzro4x"],["mediawiki.legacy.protect","09rtoof",[22]],["mediawiki.legacy.shared","1p66xms"],["mediawiki.legacy.oldshared","1dudhy9"],["mediawiki.legacy.wikibits","1l3v76u"],["mediawiki.ui","1quzane"],["mediawiki.ui.checkbox","0lz6e7r"],[
"mediawiki.ui.radio","09jrtxn"],["mediawiki.ui.anchor","1o1aakg"],["mediawiki.ui.button","0z26txt"],["mediawiki.ui.input","1cwp7se"],["mediawiki.ui.icon","01p2x6c"],["mediawiki.ui.text","1d6wlvt"],["mediawiki.widgets","0rmuyix",[22,37,138,97,248,271]],["mediawiki.widgets.styles","0shhijc"],["mediawiki.widgets.DateInputWidget","1sle8nz",[250,91,271]],["mediawiki.widgets.DateInputWidget.styles","1n2zurt"],["mediawiki.widgets.visibleByteLimit","01n9kti",[22,269]],["mediawiki.widgets.datetime","1er9xel",[269,287,288]],["mediawiki.widgets.CategorySelector","0fas5jz",[254]],["mediawiki.widgets.CategoryMultiselectWidget","05kubq6",[115,138,271]],["mediawiki.widgets.SelectWithInputWidget","1fcbdt9",[256,271]],["mediawiki.widgets.SelectWithInputWidget.styles","0nmvuh6"],["mediawiki.widgets.MediaSearch","1rqzuph",[115,138,271]],["mediawiki.widgets.UserInputWidget","0sh6asz",[97,271]],["mediawiki.widgets.UsersMultiselectWidget","1p166ia",[97,271]],["mediawiki.widgets.SearchInputWidget","1yzwfcf",
[135,247]],["mediawiki.widgets.SearchInputWidget.styles","1gz28as"],["mediawiki.widgets.StashedFileWidget","1beed6a",[97,269]],["es5-shim","0fas5jz"],["dom-level2-shim","0fas5jz"],["oojs","15u8v6d"],["mediawiki.router","1lfm152",[267]],["oojs-router","0eh2szw",[265]],["oojs-ui","0fas5jz",[272,271,273]],["oojs-ui-core","0pckbg4",[173,265,270,277,278,283,274,275]],["oojs-ui-core.styles","1tk1vrp"],["oojs-ui-widgets","13p9n4m",[269,279,287,288]],["oojs-ui-toolbars","0jp53kk",[269,288]],["oojs-ui-windows","1k4a2b3",[269,288]],["oojs-ui.styles.indicators","0jb2zvx"],["oojs-ui.styles.textures","0nk9vn0"],["oojs-ui.styles.icons-accessibility","1mgppip"],["oojs-ui.styles.icons-alerts","1rqvapr"],["oojs-ui.styles.icons-content","1l70ep0"],["oojs-ui.styles.icons-editing-advanced","10nv9hw"],["oojs-ui.styles.icons-editing-core","0supz6l"],["oojs-ui.styles.icons-editing-list","0aqi3p7"],["oojs-ui.styles.icons-editing-styling","0fsd2rk"],["oojs-ui.styles.icons-interactions","1ehbwe6"],[
"oojs-ui.styles.icons-layout","1r6vwj9"],["oojs-ui.styles.icons-location","1kr0ra2"],["oojs-ui.styles.icons-media","065i1sq"],["oojs-ui.styles.icons-moderation","0zk0ml1"],["oojs-ui.styles.icons-movement","1tm1sv4"],["oojs-ui.styles.icons-user","14zo6be"],["oojs-ui.styles.icons-wikimedia","1oel2cq"],["ext.nuke","1brvx2d"],["skins.monobook.styles","02ndiji"]]);;mw.config.set({"wgLoadScript":"/w/load.php","debug":!1,"skin":"monobook","stylepath":"/w/skins","wgUrlProtocols":"bitcoin\\:|ftp\\:\\/\\/|ftps\\:\\/\\/|geo\\:|git\\:\\/\\/|gopher\\:\\/\\/|http\\:\\/\\/|https\\:\\/\\/|irc\\:\\/\\/|ircs\\:\\/\\/|magnet\\:|mailto\\:|mms\\:\\/\\/|news\\:|nntp\\:\\/\\/|redis\\:\\/\\/|sftp\\:\\/\\/|sip\\:|sips\\:|sms\\:|ssh\\:\\/\\/|svn\\:\\/\\/|tel\\:|telnet\\:\\/\\/|urn\\:|worldwind\\:\\/\\/|xmpp\\:|\\/\\/","wgArticlePath":"/wiki/$1","wgScriptPath":"/w","wgScriptExtension":".php","wgScript":"/w/index.php","wgSearchType":null,"wgVariantArticlePath":!1,"wgActionPaths":{},"wgServer":
"https://gunkies.org","wgServerName":"gunkies.org","wgUserLanguage":"en","wgContentLanguage":"en","wgTranslateNumerals":!0,"wgVersion":"1.30.0","wgEnableAPI":!0,"wgEnableWriteAPI":!0,"wgMainPageTitle":"Main Page","wgFormattedNamespaces":{"-2":"Media","-1":"Special","0":"","1":"Talk","2":"User","3":"User talk","4":"Computer History Wiki","5":"Computer History Wiki talk","6":"File","7":"File talk","8":"MediaWiki","9":"MediaWiki talk","10":"Template","11":"Template talk","12":"Help","13":"Help talk","14":"Category","15":"Category talk"},"wgNamespaceIds":{"media":-2,"special":-1,"":0,"talk":1,"user":2,"user_talk":3,"computer_history_wiki":4,"computer_history_wiki_talk":5,"file":6,"file_talk":7,"mediawiki":8,"mediawiki_talk":9,"template":10,"template_talk":11,"help":12,"help_talk":13,"category":14,"category_talk":15,"image":6,"image_talk":7,"project":4,"project_talk":5},"wgContentNamespaces":[0],"wgSiteName":"Computer History Wiki","wgDBname":"mediawiki","wgExtraSignatureNamespaces":[
],"wgAvailableSkins":{"monobook":"MonoBook","fallback":"Fallback","apioutput":"ApiOutput"},"wgExtensionAssetsPath":"/w/extensions","wgCookiePrefix":"mediawiki_wiki_","wgCookieDomain":"","wgCookiePath":"/","wgCookieExpiration":2592000,"wgResourceLoaderMaxQueryLength":2000,"wgCaseSensitiveNamespaces":[],"wgLegalTitleChars":" %!\"$&'()*,\\-./0-9:;=?@A-Z\\\\\\^_`a-z~+\\u0080-\\uFFFF","wgIllegalFileChars":":/\\\\","wgResourceLoaderStorageVersion":1,"wgResourceLoaderStorageEnabled":!0,"wgForeignUploadTargets":["local"],"wgEnableUploads":!0});var RLQ=window.RLQ||[];while(RLQ.length){RLQ.shift()();}window.RLQ={push:function(fn){fn();}};window.NORLQ={push:function(){}};}window.mediaWikiLoadStart=mwNow();mwPerformance.mark('mwLoadStart');script=document.createElement('script');script.src="/w/load.php?debug=false&lang=en&modules=jquery%2Cmediawiki&only=scripts&skin=monobook&version=0wxnbuh";script.onload=script.onreadystatechange=function(){if(!script.readyState||/loaded|complete/.test(script
.readyState)){script.onload=script.onreadystatechange=null;script=null;startUp();}};document.getElementsByTagName('head')[0].appendChild(script);}());
