<html lang=en style="height: 100%;">

<head>
  <meta charset=utf-8>
  <title>Munchkins Code</title>

  <link rel="apple-toucm-icon" sizes="180x180" href="/Favicon/apple-toucm-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/Favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/Favicon/favicon-16x16.png">
  <link rel="manifest" href="/site.webmanifest">

  <link rel="stylesheet" href="/style.css">
  <script src="../cm/lib/codemirror.js"></script>
  <script src="../cm/mode/python/python.js"></script>

  <style>
    /* W3Schools Font Logo */
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

    .fa {
      display: inline-block;
      font: normal normal normal 14px/1 FontAwesome;
      font-size: 20px;
      text-rendering: auto;
      -webkit-font-smoothing: antialiased;
      -moz-osx-font-smoothing: grayscale;
      transform: translate(0, 0);
    }

    .fa-home:before {
      content: url('http://munchkinscode.com/images/1.png');
    }

    .fa-menu:before {
      content: '\f0c9';
    }

    .fa-globe:before {
      content: '\e801';
    }

    .fa-search:before {
      content: '\e802';
    }

    .fa-thumbs-o-up:before {
      content: '\e803';
    }

    .fa-left-open:before {
      content: '\e804';
    }

    .fa-right-open:before {
      content: '\e805';
    }

    .fa-caret-down:before {
      content: url('http://munchkinscode.com/images/down.png');
    }

    .fa-caret-up:before {
      content: url('http://munchkinscode.com/images/up.png');
    }

    .fa-user:before {
      content: '\e816';
    }

    .fa-js:before {
      content: '\e819';
    }

    .fa-python:before {
      content: '\e81a';
    }

    .fa-php:before {
      content: '\e81b';
    }

    .fa-bootstrap:before {
      content: '\e81c';
    }

    .fa-html5:before {
      content: '\f13b';
    }

    .fa-css3:before {
      content: '\f13c';
    }

    /* Google */
    #nav_translate,
    #nav_search {
      display: none;
    }

    #nav_translate a {
      display: inline;
    }

    #googleSearch {
      color: #000000;
    }

    .searchdiv {
      max-width: 400px;
      margin: auto;
      text-align: left;
      font-size: 16px;
    }

    div.cse .gsc-control-cse,
    div.gsc-control-cse {
      background-color: transparent;
      border: none;
      padding: 0px;
      margin: 0px;
    }

    td.gsc-searcm-button input.gsc-searcm-button {
      background-color: #555555;
      border-color: #555555;
    }

    input.gsc-input,
    .gsc-input-box,
    .gsc-input-box-hover,
    .gsc-input-box-focus,
    .gsc-searcm-button {
      box-sizing: content-box;
      line-height: normal;
    }

    .gsc-tabsArea div {
      overflow: visible;
    }

    .gsst_a .gscb_a {
      margin-top: 3px;
    }

    /* Customize W3.CSS */
    #nav_tutorials,
    #nav_references,
    #nav_examples,
    #nav_exercises {
      display: none;
      padding-bottom: 40px;
      position: absolute;
      width: 100%;
      z-index: 5 !important;
    }

    .m-col .m-button {
      margin: 5px 5px 5px 0;
      font-size: 16px;
    }

    .m-col.l4 .m-card-2 {
      padding: 15px 10px;
      height: 260px;
    }

    .m-theme {
      color: #000 !important;
      background-color: #FFBD4A !important;
    }

    .m-main {
      margin-left: 230px;
    }

    .m-sidebar {
      z-index: 3;
      width: 230px;
      overflow: hidden !important;
      position: absolute !important;
      margin-bottom: -155px;
    }

    .m-sidebar .m-bar-block .m-bar-item {
      padding: 0 16px;
      font-size: 16px;
    }

    .m-bar {
      position: relative;
      z-index: 4;
      font-size: 17px;
    }

    .m-wide {
      font-family: "Segoe UI", Arial, sans-serif;
    }

    h1 {
      font-size: 80px;
      color: #555555;
      margin: 2px 0 -20px 0 !important;
    }

    .certoverlay {
      position: absolute;
      top: 0;
      background-color: rgba(0, 0, 0, 0.5);
      width: 100%;
      text-align: center;
      padding: 15px
    }

    .certoverlay h2 {
      margin: 10px 0 0 0;
      font-size: 36px;
    }

    .certoverlay h3 {
      margin: 0 0 10px 0;
    }

    .tagcolor {
      color: mediumblue
    }

    .tagnamecolor {
      color: brown
    }

    .attributecolor {
      color: red
    }

    .attributevaluecolor {
      color: mediumblue
    }

    .commentcolor {
      color: green
    }

    .cssselectorcolor {
      color: brown
    }

    .csspropertycolor {
      color: red
    }

    .csspropertyvaluecolor {
      color: mediumblue
    }

    .cssdelimitercolor {
      color: black
    }

    .cssimportantcolor {
      color: red
    }

    .jscolor {
      color: black
    }

    .jskeywordcolor {
      color: mediumblue
    }

    .jsstringcolor {
      color: brown
    }

    .jsnumbercolor {
      color: red
    }

    .jspropertycolor {
      color: black
    }

    .javacolor {
      color: black
    }

    .javakeywordcolor {
      color: mediumblue
    }

    .javastringcolor {
      color: brown
    }

    .javanumbercolor {
      color: red
    }

    .javapropertycolor {
      color: black
    }

    .kotlincolor {
      color: black
    }

    .kotlinkeywordcolor {
      color: mediumblue
    }

    .kotlinstringcolor {
      color: brown
    }

    .kotlinnumbercolor {
      color: red
    }

    .kotlinpropertycolor {
      color: black
    }

    .phptagcolor {
      color: red
    }

    .phpcolor {
      color: black
    }

    .phpkeywordcolor {
      color: mediumblue
    }

    .phpglobalcolor {
      color: goldenrod
    }

    .phpstringcolor {
      color: brown
    }

    .phpnumbercolor {
      color: red
    }

    .pythoncolor {
      color: black
    }

    .pythonkeywordcolor {
      color: mediumblue
    }

    .pythonstringcolor {
      color: brown
    }

    .pythonnumbercolor {
      color: red
    }

    .angularstatementcolor {
      color: red
    }

    .sqlcolor {
      color: black
    }

    .sqlkeywordcolor {
      color: mediumblue
    }

    .sqlstringcolor {
      color: brown
    }

    .sqlnumbercolor {
      color: brown
    }

    .darktheme .m-code {
      background-color: rgb(40, 44, 52);
      color: white;
      border-left-color: rgb(40, 44, 52) !important
    }

    .darktheme .m-example pre {
      background-color: rgb(40, 44, 52) !important;
      border-left-color: rgb(40, 44, 52)
    }

    .darktheme .tagcolor {
      color: #88ccbb
        /*green2*/
         !important
    }

    .darktheme .tagnamecolor {
      color: #ff9999
        /*red*/
         !important
    }

    .darktheme .attributecolor {
      color: #c5a5c5
        /*purple*/
         !important
    }

    .darktheme .attributevaluecolor {
      color: #88c999
        /*green*/
         !important
    }

    .darktheme .commentcolor {
      color: #999 !important
    }

    .darktheme .cssselectorcolor {
      color: #ff9999
        /*red*/
         !important
    }

    .darktheme .csspropertycolor {
      color: #c5a5c5
        /*purple*/
         !important
    }

    .darktheme .csspropertyvaluecolor {
      color: #88c999
        /*green*/
         !important
    }

    .darktheme .cssdelimitercolor {
      color: white !important
    }

    .darktheme .cssimportantcolor {
      color: #ff9999
        /*red*/
         !important
    }

    .darktheme .jscolor {
      color: white !important
    }

    .darktheme .jskeywordcolor {
      color: #c5a5c5
        /*purple*/
         !important
    }

    .darktheme .jsstringcolor {
      color: #88c999
        /*green*/
         !important
    }

    .darktheme .jsnumbercolor {
      color: #80b6ff
        /*blue*/
         !important
    }

    .darktheme .jspropertycolor {
      color: white !important
    }

    .darktheme .javacolor {
      color: white !important
    }

    .darktheme .javakeywordcolor {
      color: #88c999
        /*green*/
         !important
    }

    .darktheme .javastringcolor {
      color: #88c999
        /*green*/
         !important
    }

    .darktheme .javanumbercolor {
      color: #88c999
        /*green*/
         !important
    }

    .darktheme .javapropertycolor {
      color: white !important
    }

    .darktheme .kotlincolor {
      color: white !important
    }

    .darktheme .kotlinkeywordcolor {
      color: #88c999
        /*green*/
         !important
    }

    .darktheme .kotlinstringcolor {
      color: #88c999
        /*green*/
         !important
    }

    .darktheme .kotlinnumbercolor {
      color: #88c999
        /*green*/
         !important
    }

    .darktheme .kotlinpropertycolor {
      color: white !important
    }

    .darktheme .phptagcolor {
      color: #999 !important
    }

    .darktheme .phpcolor {
      color: white !important
    }

    .darktheme .phpkeywordcolor {
      color: #ff9999
        /*red*/
         !important
    }

    .darktheme .phpglobalcolor {
      color: white !important
    }

    .darktheme .phpstringcolor {
      color: #88c999
        /*green*/
         !important
    }

    .darktheme .phpnumbercolor {
      color: #88c999
        /*green*/
         !important
    }

    .darktheme .pythoncolor {
      color: white !important
    }

    .darktheme .pythonkeywordcolor {
      color: #ff9999
        /*red*/
         !important
    }

    .darktheme .pythonstringcolor {
      color: #88c999
        /*green*/
         !important
    }

    .darktheme .pythonnumbercolor {
      color: #88c999
        /*green*/
         !important
    }

    .darktheme .angularstatementcolor {
      color: #ff9999
        /*red*/
         !important
    }

    .darktheme .sqlcolor {
      color: white !important
    }

    .darktheme .sqlkeywordcolor {
      color: #80b6ff
        /*blue*/
         !important
    }

    .darktheme .sqlstringcolor {
      color: #88c999
        /*green*/
         !important
    }

    .darktheme .sqlnumbercolor {
      color: #88c999
        /*green*/
         !important
    }

    @media screen and (min-width:769px) {
      .m-sidebar.m-collapse {
        display: block !important;
      }
    }

    @media screen and (min-width:769px) {

      #myAccordion,
      .hidesm {
        display: none !important;
      }
    }

    @media screen and (min-width:769px) {
      .m-main {
        margin-left: 230px !important;
      }

      .m-bar-block .m-button {
        padding: 0;
      }
    }

    @media screen and (max-width:768px) {

      .m-sidebar.m-collapse,
      .barex,
      .navex {
        display: none !important;
      }

      .m-bar-block .m-bar-item {
        text-align: center !important;
        padding: 2px 0;
      }

      h1,
      .m-jumbo {
        font-size: 60px !important;
      }
    }

    @media screen and (max-width:545px) {
      .certoverlay {
        padding: 10px;
        height: 100%;
      }

      .certoverlay h3 {
        font-size: 15px;
      }
    }

    @media screen and (max-width:380px) {
      .getcert {
        position: absolute;
        text-align: center;
        left: 50%;
        bottom: 50%;
        font-size: 13px;
      }
    }

    @media only screen and (max-device-width: 1366px) {
      .m-hide-device {
        display: none;
      }
    }

    @media screen and (max-width:1080px) {
      #cert_navbtn {
        display: none;
      }
    }
  </style>
  <!--[if lt IE 9]>
<script src="http://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="http://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
  <!-- begin cmp -->
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
</head>

<body>
  <div class="m-row m-padding m-white m-hide-medium m-hide-small">
    <div>
      <a href="../index.php">
        <img src="/images/Logo.jpg" class="m-left m-wuhan" href="/index.php" style="padding: 12px; font-size: 23px!important">
      </a>
    </div>
    <div class="">
      <div class="m-right m-wuhan" style="padding: 12px; font-size: 23px!important">
        Learn How To Code
      </div>
    </div>
  </div>
  </div>
  <div class="m-bar m-theme m-card-2 m-wide notranslate">
    <a class="m-bar-item m-button barex m-hover-white m-padding-16">
      TUTORIALS
    </a>
    <a class="m-bar-item m-button barex m-hover-white m-padding-16">
      EXAMPLES
    </a>
    <a class="m-bar-item m-button barex m-hover-white m-padding-16" href="/AboutUs.php">
      ABOUT US
    </a>
  </div>
