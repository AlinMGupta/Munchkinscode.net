 <!DOCTYPE html>
 <html lang="en-US">

 <head>
   <title>Python Editor v1.0</title>
   <meta name="viewport" content="width=device-width">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta property="og:image" content="http://munchkinscode.com/images/MCL.png">
   <meta property="og:image:type" content="image/png">
   <meta property="og:image:width" content="330">
   <meta property="og:image:height" content="330">
   <link rel="stylesheet" href="../style.css">
   <link rel="stylesheet" href="../cm/lib/codemirror.css">
   <script src="../cm/lib/codemirror.js"></script>
   <script src="../cm/mode/python/python.js"></script>

   <link rel="apple-toucm-icon" sizes="180x180" href="http://munchkinscode.com/Favicon/apple-toucm-icon.png">
   <link rel="icon" type="image/png" sizes="32x32" href="http://munchkinscode.com/Favicon/favicon-32x32.png">
   <link rel="icon" type="image/png" sizes="16x16" href="http://munchkinscode.com/Favicon/favicon-16x16.png">
   <link rel="manifest" href="http://munchkinscode.com/site.webmanifest">

   <script src="//cdn.snigelweb.com/sncmp/latest/sncmp_stub.min.js"></script>
   <style>
     #snigel-cmp-framework .sn-b-def.sn-blue {
       color: #ffffff !important;
       background-color: #FFBD4A !important;
       border-color: #FFBD4A !important;
     }

     #snigel-cmp-framework .sn-b-def {
       border-color: #FFBD4A !important;
       color: #FFBD4A !important;
     }

     #snigel-cmp-framework .sn-selector ul li {
       color: #FFBD4A !important
     }

     #snigel-cmp-framework .sn-selector ul li:after {
       background-color: #FFBD4A !important;
     }

     #snigel-cmp-framework .sn-footer-tab .sn-privacy a {
       color: #FFBD4A !important;
     }

     #snigel-cmp-framework .sn-arrow:after,
     #snigel-cmp-framework .sn-arrow:before {
       background-color: #FFBD4A !important;
     }

     #snigel-cmp-framework .sn-switch input:checked+span::before {
       background-color: #FFBD4A !important;
     }

     #adconsent-usp-link {
       border: 1px solid #FFBD4A !important;
       color: #FFBD4A !important;
     }

     #adconsent-usp-banner-optout input:checked+.adconsent-usp-slider {
       background-color: #FFBD4A !important;
     }

     #adconsent-usp-banner-btn {
       color: #ffffff;
       border: solid 1px #FFBD4A !important;
       background-color: #FFBD4A !important;
     }
   </style>
   <script type="text/javascript">
     __cmp("setLogo", "http://munchkinscode.com/images/logo-smol.png");
   </script>
   <script>
     if (window.addEventListener) {
       window.addEventListener("resize", browserResize);
     } else if (window.attachEvent) {
       window.attachEvent("onresize", browserResize);
     }
     var xbeforeResize = window.innerWidth;

     function browserResize() {
       var afterResize = window.innerWidth;
       if ((xbeforeResize < (970) && afterResize >= (970)) || (xbeforeResize >= (970) && afterResize < (970)) ||
         (xbeforeResize < (728) && afterResize >= (728)) || (xbeforeResize >= (728) && afterResize < (728)) ||
         (xbeforeResize < (468) && afterResize >= (468)) || (xbeforeResize >= (468) && afterResize < (468))) {
         xbeforeResize = afterResize;

       }
       if (window.screen.availWidth <= 768) {
         restack(window.innerHeight > window.innerWidth);
       }
       fixDragBtn();
       showFrameSize();
     }
     var fileID = "";
     var loadSave = false;

     function getSavedFile() {
       loadSave = true;
       var htmlCode;
       var paramObj = {};
       paramObj.fileid = "";
       console.log(paramObj);
       fileID = paramObj.fileid;
       var paramA = JSON.stringify(paramObj);
       if (httpA.readyState == 4 && httpA.status == 200) {
         document.getElementById("textareaCode").value = httpA.responseText;
         window.editor.getDoc().setValue(httpA.responseText);
         loadSave = false;
       }
       httpA.send(paramA);
     }

     const queryString = window.location.search;
     const urlParams = new URLSearchParams(queryString);
     const file = urlParams.get('filename');
     const group = urlParams.get("group");
     var request = new XMLHttpRequest();
     request.open('GET', group + "/" + file + '.py', true);
     request.responseType = 'blob';
     request.onload = function() {
       var reader = new FileReader();
       reader.readAsText(request.response);
       reader.onload = function(e) {
         window.editor.setValue(e.target.result);
       };
     };
     request.send();
   </script>
   <style>
     .w3schools-logo {
       font-family: fontawesome;
       text-decoration: none;
       line-height: 1;
       -webkit-font-smoothing: antialiased;
       -moz-osx-font-smoothing: grayscale;
       font-size: 37px;
       letter-spacing: 3px;
       color: #555555;
       display: block;
       position: relative;
     }

     .w3schools-logo .dotcom {
       color: #FFBD4A;
     }

     @font-face {
       font-family: 'fontawesome';
       src: url('../lib/fonts/fontawesome.eot?14663396#iefix') format('embedded-opentype'),
         url('../lib/fonts/fontawesome.woff?14663396') format('woff'),
         url('../lib/fonts/fontawesome.ttf?14663396') format('truetype'),
         url('../lib/fonts/fontawesome.svg?14663396#fontawesome') format('svg');
       font-style: normal;
     }

     * {
       -webkit-box-sizing: border-box;
       -moz-box-sizing: border-box;
       box-sizing: border-box;
     }

     body {
       color: #000000;
       margin: 0px;
       font-size: 100%;
     }

     .trytopnav {
       height: 40px;
       overflow: hidden;
       min-width: 380px;
       position: absolute;
       width: 100%;
       top: 99px;
       background-color: #f1f1f1;
     }

     .trytopnav a,
     .trytopnav button {
       color: #999999;
     }

     .m-bar .m-bar-item:hover {
       color: #757575 !important;
     }

     a.w3schoolslink {
       padding: 0 !important;
       display: inline !important;
     }

     a.w3schoolslink:hover,
     a.w3schoolslink:active {
       text-decoration: underline !important;
       background-color: transparent !important;
     }

     #dragbar {
       position: absolute;
       cursor: col-resize;
       z-index: 3;
       padding: 5px;
     }

     #shield {
       display: none;
       top: 0;
       left: 0;
       width: 100%;
       position: absolute;
       height: 100%;
       z-index: 4;
     }

     #framesize span {
       font-family: Consolas, monospace;
     }

     #container {
       background-color: #f1f1f1;
       width: 100%;
       overflow: auto;
       position: absolute;
       top: 138px;
       bottom: 0;
       height: auto;
     }

     #textareacontainer,
     #iframecontainer {
       float: left;
       height: 100%;
       width: 50%;
     }

     #textarea,
     #iframe {
       height: 100%;
       width: 100%;
       padding-bottom: 10px;
       padding-top: 1px;
     }

     #textarea {
       padding-left: 10px;
       padding-right: 5px;
     }

     #iframe {
       padding-left: 5px;
       padding-right: 10px;
       color: #ffffff;
       font-family: consolas, "courier new", monospace;
     }

     #textareawrapper {
       width: 100%;
       height: 100%;
       background-color: #ffffff;
       position: relative;
       box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
     }

     #iframewrapper {
       width: 100%;
       height: 100%;
       -webkit-overflow-scrolling: touch;
       background-color: #ffffff;
       box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
       color: #ffffff;
       font-family: consolas, "courier new", monospace;
     }

     #textareaCode {
       background-color: #ffffff;
       font-family: consolas, "courier new", monospace;
       font-size: 15px;
       height: 100%;
       width: 100%;
       padding: 8px;
       resize: none;
       border: none;
       line-height: normal;
     }

     .CodeMirror.cm-s-default {
       line-height: normal;
       padding: 4px;
       height: 100%;
       width: 100%;
     }

     #iframeResult,
     #iframeSource {
       background-color: #000000;
       color: #ffffff;
       font-family: consolas, "courier new", monospace;
       height: 100%;
       width: 100%;
       padding: 8px;
     }

     #stackV {
       background-color: #999999;
     }

     #stackV:hover {
       background-color: #BBBBBB !important;
     }

     #stackV.horizontal {
       background-color: transparent;
     }

     #stackV.horizontal:hover {
       background-color: #BBBBBB !important;
     }

     #stackH.horizontal {
       background-color: #999999;
     }

     #stackH.horizontal:hover {
       background-color: #999999 !important;
     }

     #textareacontainer.horizontal,
     #iframecontainer.horizontal {
       height: 50%;
       float: none;
       width: 100%;
     }

     #textarea.horizontal {
       height: 100%;
       padding-left: 10px;
       padding-right: 10px;
     }

     #iframe.horizontal {
       height: 100%;
       padding-right: 10px;
       padding-bottom: 10px;
       padding-left: 10px;
     }

     #container.horizontal {
       min-height: 200px;
       margin-left: 0;
     }

     #tryitLeaderboard {
       background-color: #ffffff;
       overflow: hidden;
       text-align: center;
       margin-top: 10px;
       height: 90px;
     }

     .m-dropdown-content {
       width: 350px
     }

     body.darktheme {
       background-color: rgb(40, 44, 52);
     }

     body.darktheme #tryitLeaderboard {
       background-color: rgb(40, 44, 52);
     }

     body.darktheme .trytopnav {
       background-color: #616161;
       color: #dddddd;
     }

     body.darktheme #container {
       background-color: #616161;
     }

     body.darktheme #textareaCode {
       background-color: rgb(40, 44, 52);
       color: #fff;
     }

     body.darktheme .trytopnav a,
     body.darktheme .trytopnav button {
       color: #dddddd;
     }


     @media screen and (max-width: 727px) {
       .trytopnav {
         top: 70px;
       }

       #container {
         top: 108px;
       }

     }

     @media screen and (max-width: 467px) {
       .trytopnav {
         top: 60px;
       }

       #container {
         top: 98px;
       }

       .m-dropdown-content {
         width: 100%
       }
     }

     @media only screen and (max-device-width: 768px) {
       #iframewrapper {
         overflow: auto;
       }

       #container {
         min-width: 320px;
       }

       .stack {
         display: none;
       }

       #tryhome {
         display: block;
       }
     }

     .fa {
       display: inline-block;
       font-size: 14px;
       text-rendering: auto;
       -webkit-font-smoothing: antialiased;
       -moz-osx-font-smoothing: grayscale;
       transform: translate(0, 0);
     }

     .fa-2x {
       font-size: 2em;
     }

     .fa-home:before {
       content: url('../images/1.png');
     }

     .loader {
       border: 6px solid #f3f3f3;
       /* Light grey */
       border-top: 6px solid #3498db;
       /* Blue */
       border-radius: 50%;
       width: 60px;
       height: 60px;
       animation: spin 2s linear infinite;
     }

     #saveLoader {
       margin: 20px;
     }

     #runloadercontainer {
       display: none;
       position: absolute;
       background-color: #000;
       z-index: 9;
     }

     #runloader {
       margin: auto;
       border: 10px solid #333;
       border-top: 10px solid #FFBD4A;
       border-radius: 50%;
       max-width: 150px;
       max-height: 150px;
       animation: spin 2s linear infinite;
       position: relative;
     }

     @keyframes spin {
       0% {
         transform: rotate(0deg);
       }

       100% {
         transform: rotate(360deg);
       }
     }
   </style>
   <!--[if lt IE 8]>
<style>
#textareacontainer, #iframecontainer {width:48%;}
#container {height:500px;}
#textarea, #iframe {width:90%;height:450px;}
#textareaCode, #iframeResult {height:450px;}
.stack {display:none;}
</style>
<![endif]-->
 </head>

 <body>
   <div id="tryitLeaderboard">
     <div class="m-row m-padding m-white m-hide-medium m-hide-small">
       <div class="">
         <a href="http://munchkinscode.com/">
           <img src="/images/Logo.jpg" class="m-left m-wuhan" href="http://munchkinscode.com/" style="padding: 12px; font-size: 23px!important">
         </a>
       </div>
       <div class="">
         <div class="m-right m-wuhan" style="padding: 12px; font-size: 23px!important">
           Learn How To Code
         </div>
       </div>
     </div>
   </div>
   <div class="trytopnav">
     <div class="m-bar" style="overflow:auto">
       <a id="tryhome" href="http://munchkinscode.com" title="munchkinscode.com Home" class="m-button m-bar-item topnav-icons fa fa-home" style="font-size:28px;margin-top:-2px"></a>
       <button class="m-button m-bar-item m-green m-hover-white m-hover-text-green" onclick="submitTryit(1);ga('send', 'event', 'runCodePython', 'click');">Run &raquo;</button>
       <span class="m-right m-hide-medium m-hide-small" style="padding:8px 8px 8px 8px;display:block"></span>
       <span class="m-right m-hide-small" style="padding:8px 0;display:block;float:right;"><span id="framesize"></span></span>
     </div>

   </div>
   <div id="shield"></div>
   <a href="javascript:void(0)" id="dragbar"></a>
   <div id="container">
     <div id="navbarDropMenu" class="m-dropdown-content m-bar-block m-border" style="z-index:5">
       <span onclick="openMenu()" class="m-button m-display-topright m-transparent m-hover-dark-grey" title="Close Menu" style="font-weight:bold;padding-top:10px;padding-bottom:11px;">&times;</span>
       <div class="m-bar-block">
         <a class="m-bar-item m-button" href='javascript:void(0);' title="Change Orientaton" onclick="openMenu();restack(currentStack)"><i class="fa fa-rotate" style="font-size:26px;margin-left:-4px;margin-right:8px"></i><span
             style="position:relative;top:-4px;left:2px;">Change Orientation</span></a>
       </div>
       <footer class="m-container m-small m-light-gray">
         <p><a style="display:inline;padding:0;" href="/about/about_privacy.asp" onclick="openMenu();" class="m-hover-none m-hover-text-green">Privacy policy</a> and
           <a style="display:inline;padding:0;" href="/about/about_copyright.asp" onclick="openMenu();" class="m-hover-none m-hover-text-green">Copyright 1999-2020</a></p>
       </footer>
     </div>
     <div id="menuOverlay" class="m-overlay m-transparent" style="cursor:pointer;z-index:4"></div>
     <div id="textareacontainer">
       <div id="textarea">
         <div id="textareawrapper">
           <textarea autocomplete="off" id="textareaCode" wrap="logical" spellcheck="false">#You can use double or single quotes:

print("Hello")
print('Hello')
</textarea>
           <form id="codeForm" autocomplete="off" style="margin:0px;display:none;">
             <input type="hidden" name="code" id="code" />
           </form>
         </div>
       </div>
     </div>
     <div id="iframecontainer">
       <div id="iframe">
         <div id="runloadercontainer">
           <div id="runloader"></div>
         </div>
         <div id="iframewrapper">
           <div id="iframeResult" style="white-space:nowrap;overflow:auto;"><br>
           </div>
         </div>
       </div>
     </div>
   </div>
   <div id="err_form" class="m-modal" style="z-index:4">
     <div class="m-modal-content m-display-container">
       <span onclick="document.getElementById('err_form').style.display='none'" class="m-button m-display-topright m-text-white m-padding m-green" style="font-weight:bold;">&times;</span>
       <div class="m-container m-green">
         <h2>Report a Problem:</h2>
       </div>
       <form class="m-container">
         <p><label for="err_email">Your E-mail:</label>
           <input class="m-input m-border" type="text" style="width:100%" id="err_email" name="err_email">
         </p>
         <p>
           <label for="err_email">Page address:</label>
           <input class="m-input m-border" type="text" style="width:100%" id="err_url" name="err_url" disabled="disabled">
         </p>
         <p>
           <label for="err_email">Description:</label>
           <textarea rows="10" class="m-input m-border" id="err_desc" name="err_desc" style="width:100%;resize:vertical"></textarea>
         </p>
         <button class="m-btn m-right m-green m-margin-bottom" type="button" onclick="sendErr()">Submit</button>
       </form>

     </div>
   </div>
   <script>
     function submitTryit(n) {
       if (window.editor) {
         window.editor.save();
       }
       var text = document.getElementById("textareaCode").value;
       var ifr = document.createElement("iframe");
       ifr.setAttribute("frameborder", "0");
       ifr.setAttribute("id", "iframeResult");
       ifr.setAttribute("name", "iframeResult");
       document.getElementById("iframewrapper").innerHTML = "";
       document.getElementById("iframewrapper").appendChild(ifr);
       document.getElementById("iframeResult").addEventListener("load", hideSpinner);
       if (loadSave == true) {
         ifr.setAttribute("src", "/code/opentext.htm");
       } else if (loadSave == false) {
         displaySpinner();
         var t = text;
         t = t.replace(/=/gi, "w3equalsign");
         t = t.replace(/\+/gi, "w3plussign");
         var pos = t.search(/script/i)
         while (pos > 0) {
           t = t.substring(0, pos) + "w3" + t.substr(pos, 3) + "w3" + t.substr(pos + 3, 3) + "tag" + t.substr(pos + 6);
           pos = t.search(/script/i);
         }
         document.getElementById("code").value = t;
         document.getElementById("codeForm").action = "http://try.w3schools.com/try_python.php?x=" + Math.random();
         document.getElementById('codeForm').method = "post";
         document.getElementById('codeForm').acceptCharset = "utf-8";
         document.getElementById('codeForm').target = "iframeResult";
         document.getElementById("codeForm").submit();
       } else {
         var ifrw = (ifr.contentWindow) ? ifr.contentWindow : (ifr.contentDocument.document) ? ifr.contentDocument.document : ifr.contentDocument;
         ifrw.document.open();
         ifrw.document.write(text);
         ifrw.document.close();
         //23.02.2016: contentEditable is set to true, to fix text-selection (bug) in firefox.
         //(and back to false to prevent the content from being editable)
         //(To reproduce the error: Select text in the result window with, and without, the contentEditable statements below.)
         if (ifrw.document.body && !ifrw.document.body.isContentEditable) {
           ifrw.document.body.contentEditable = true;
           ifrw.document.body.contentEditable = false;
         }
       }
     }

     function hideSpinner() {
       document.getElementById("runloadercontainer").style.display = "none";
     }

     function displaySpinner() {
       var i, c, w, h, r, top;
       i = document.getElementById("iframeResult");
       w = w3_getStyleValue(i, "width");
       h = w3_getStyleValue(i, "height");
       c = document.getElementById("runloadercontainer");
       c.style.width = w;
       c.style.height = h;
       c.style.display = "block";
       w = Number(w.replace("px", "")) / 5;
       r = document.getElementById("runloader");
       r.style.width = w + "px";
       r.style.height = w + "px";
       h = w3_getStyleValue(r, "height");
       h = Number(h.replace("px", "")) / 2;
       top = w3_getStyleValue(c, "height");
       top = Number(top.replace("px", "")) / 2;
       top = top - h
       r.style.top = top + "px";
     }


     var currentStack = true;
     if ((window.screen.availWidth <= 768 && window.innerHeight > window.innerWidth) || "" == " horizontal") {
       restack(true);
     }

     function restack(horizontal) {
       var tc, ic, t, i, c, f, sv, sh, d, height, flt, width;
       tc = document.getElementById("textareacontainer");
       ic = document.getElementById("iframecontainer");
       t = document.getElementById("textarea");
       i = document.getElementById("iframe");
       c = document.getElementById("container");
       sv = document.getElementById("stackV");
       sh = document.getElementById("stackH");
       tc.className = tc.className.replace("horizontal", "");
       ic.className = ic.className.replace("horizontal", "");
       t.className = t.className.replace("horizontal", "");
       i.className = i.className.replace("horizontal", "");
       c.className = c.className.replace("horizontal", "");
       if (sv) {
         sv.className = sv.className.replace("horizontal", "")
       };
       if (sv) {
         sh.className = sh.className.replace("horizontal", "")
       };
       stack = "";
       if (horizontal) {
         tc.className = tc.className + " horizontal";
         ic.className = ic.className + " horizontal";
         t.className = t.className + " horizontal";
         i.className = i.className + " horizontal";
         c.className = c.className + " horizontal";
         if (sv) {
           sv.className = sv.className + " horizontal"
         };
         if (sv) {
           sh.className = sh.className + " horizontal"
         };
         stack = " horizontal";
         document.getElementById("textareacontainer").style.height = "50%";
         document.getElementById("iframecontainer").style.height = "50%";
         document.getElementById("textareacontainer").style.width = "100%";
         document.getElementById("iframecontainer").style.width = "100%";
         currentStack = false;
       } else {
         document.getElementById("textareacontainer").style.height = "100%";
         document.getElementById("iframecontainer").style.height = "100%";
         document.getElementById("textareacontainer").style.width = "50%";
         document.getElementById("iframecontainer").style.width = "50%";
         currentStack = true;
       }
       fixDragBtn();
       showFrameSize();
     }

     function retheme() {
       var cc = document.body.className;
       if (cc.indexOf("darktheme") > -1) {
         document.body.className = cc.replace("darktheme", "");
         if (opener) {
           opener.document.body.className = cc.replace("darktheme", "");
         }
         localStorage.setItem("preferredmode", "light");
       } else {
         document.body.className += " darktheme";
         if (opener) {
           opener.document.body.className += " darktheme";
         }
         localStorage.setItem("preferredmode", "dark");
       }
     }
     (
       function setThemeMode() {
         var x = localStorage.getItem("preferredmode");
         if (x == "dark") {
           document.body.className += " darktheme";
         }
       })();

     function showFrameSize() {
       var t;
       var width, height;
       width = Number(w3_getStyleValue(document.getElementById("iframeResult"), "width").replace("px", "")).toFixed();
       height = Number(w3_getStyleValue(document.getElementById("iframeResult"), "height").replace("px", "")).toFixed();
       document.getElementById("framesize").innerHTML = "Result Size: <span>" + width + " x " + height + "</span>";
     }
     var dragging = false;
     var stack;

     function fixDragBtn() {
       var textareawidth, leftpadding, dragleft, containertop, buttonwidth
       var containertop = Number(w3_getStyleValue(document.getElementById("container"), "top").replace("px", ""));
       if (stack != " horizontal") {
         document.getElementById("dragbar").style.width = "5px";
         textareasize = Number(w3_getStyleValue(document.getElementById("textareawrapper"), "width").replace("px", ""));
         leftpadding = Number(w3_getStyleValue(document.getElementById("textarea"), "padding-left").replace("px", ""));
         buttonwidth = Number(w3_getStyleValue(document.getElementById("dragbar"), "width").replace("px", ""));
         textareaheight = w3_getStyleValue(document.getElementById("textareawrapper"), "height");
         dragleft = textareasize + leftpadding + (leftpadding / 2) - (buttonwidth / 2);
         document.getElementById("dragbar").style.top = containertop + "px";
         document.getElementById("dragbar").style.left = dragleft + "px";
         document.getElementById("dragbar").style.height = textareaheight;
         document.getElementById("dragbar").style.cursor = "col-resize";

       } else {
         document.getElementById("dragbar").style.height = "5px";
         if (window.getComputedStyle) {
           textareawidth = window.getComputedStyle(document.getElementById("textareawrapper"), null).getPropertyValue("height");
           textareaheight = window.getComputedStyle(document.getElementById("textareawrapper"), null).getPropertyValue("width");
           leftpadding = window.getComputedStyle(document.getElementById("textarea"), null).getPropertyValue("padding-top");
           buttonwidth = window.getComputedStyle(document.getElementById("dragbar"), null).getPropertyValue("height");
         } else {
           dragleft = document.getElementById("textareawrapper").currentStyle["width"];
         }
         textareawidth = Number(textareawidth.replace("px", ""));
         leftpadding = Number(leftpadding.replace("px", ""));
         buttonwidth = Number(buttonwidth.replace("px", ""));
         dragleft = containertop + textareawidth + leftpadding + (leftpadding / 2);
         document.getElementById("dragbar").style.top = dragleft + "px";
         document.getElementById("dragbar").style.left = "5px";
         document.getElementById("dragbar").style.width = textareaheight;
         document.getElementById("dragbar").style.cursor = "row-resize";
       }
     }

     function dragstart(e) {
       e.preventDefault();
       dragging = true;
       var main = document.getElementById("iframecontainer");
     }

     function dragmove(e) {
       if (dragging) {
         document.getElementById("shield").style.display = "block";
         if (stack != " horizontal") {
           var percentage = (e.pageX / window.innerWidth) * 100;
           if (percentage > 5 && percentage < 98) {
             var mainPercentage = 100 - percentage;
             document.getElementById("textareacontainer").style.width = percentage + "%";
             document.getElementById("iframecontainer").style.width = mainPercentage + "%";
             fixDragBtn();
           }
         } else {
           var containertop = Number(w3_getStyleValue(document.getElementById("container"), "top").replace("px", ""));
           var percentage = ((e.pageY - containertop + 20) / (window.innerHeight - containertop + 20)) * 100;
           if (percentage > 5 && percentage < 98) {
             var mainPercentage = 100 - percentage;
             document.getElementById("textareacontainer").style.height = percentage + "%";
             document.getElementById("iframecontainer").style.height = mainPercentage + "%";
             fixDragBtn();
           }
         }
         showFrameSize();
       }
     }

     function dragend() {
       document.getElementById("shield").style.display = "none";
       dragging = false;
       var vend = navigator.vendor;
       if (window.editor && vend.indexOf("Apple") == -1) {
         window.editor.refresh();
       }
     }
     if (window.addEventListener) {
       document.getElementById("dragbar").addEventListener("mousedown", function(e) {
         dragstart(e);
       });
       document.getElementById("dragbar").addEventListener("touchstart", function(e) {
         dragstart(e);
       });
       window.addEventListener("mousemove", function(e) {
         dragmove(e);
       });
       window.addEventListener("touchmove", function(e) {
         dragmove(e);
       });
       window.addEventListener("mouseup", dragend);
       window.addEventListener("touchend", dragend);
       window.addEventListener("load", fixDragBtn);
       window.addEventListener("load", showFrameSize);
     }


     function colorcoding() {
       var ua = navigator.userAgent;
       //Opera Mini refreshes the page when trying to edit the textarea.
       if (ua && ua.toUpperCase().indexOf("OPERA MINI") > -1) {
         return false;
       }
       window.editor = CodeMirror.fromTextArea(document.getElementById("textareaCode"), {
         mode: "text/x-python",
         lineWrapping: true,
         smartIndent: false
       });
       //  window.editor.on("change", function () {window.editor.save();});
     }
     colorcoding();

     function w3_getStyleValue(elmnt, style) {
       if (window.getComputedStyle) {
         return window.getComputedStyle(elmnt, null).getPropertyValue(style);
       } else {
         return elmnt.currentStyle[style];
       }
     }


     var addr = document.location.href;

     function displayError() {
       document.getElementById("err_url").value = addr;
       document.getElementById("err_form").style.display = "block";
       document.getElementById("err_email").focus();
       hideSent();
     }

     function hideError() {
       document.getElementById("err_form").style.display = "none";
     }

     function hideSent() {
       document.getElementById("err_sent").style.display = "none";
     }

     function sendErr() {
       var xmlhttp;
       var err_url = document.getElementById("err_url").value;
       var err_email = document.getElementById("err_email").value;
       var err_desc = document.getElementById("err_desc").value;
       if (window.XMLHttpRequest) { // code for IE7+, Firefox, Chrome, Opera, Safari
         xmlhttp = new XMLHttpRequest();
       } else { // code for IE6, IE5
         xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
       }
       xmlhttp.open("POST", "/err_sup.asp", true);
       xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xmlhttp.send("err_url=" + err_url + "&err_email=" + err_email + "&err_desc=" + escape(err_desc));
       document.getElementById("err_desc").value = "";
       hideError();
       document.getElementById("err_sent").style.display = "block";
     }

     function openMenu() {
       var x = document.getElementById("navbarDropMenu");
       var y = document.getElementById("menuOverlay");
       var z = document.getElementById("menuButton");
       if (z.className.indexOf("m-text-gray") == -1) {
         z.className += " m-text-gray";
       } else {
         z.className = z.className.replace(" m-text-gray", "");
       }
       if (z.className.indexOf("m-gray") == -1) {
         z.className += " m-gray";
       } else {
         z.className = z.className.replace(" m-gray", "");
       }
       if (x.className.indexOf("m-show") == -1) {
         x.className += " m-show";
       } else {
         x.className = x.className.replace(" m-show", "");
       }
       if (y.className.indexOf("m-show") == -1) {
         y.className += " m-show";
       } else {
         y.className = y.className.replace(" m-show", "");
       }

     }
     // When the user clicks anywhere outside of the modal, close it
     window.onclick = function(event) {
       if (event.target == document.getElementById("menuOverlay")) {
         openMenu();
       }
     }
   </script>

 </body>

 </html>
