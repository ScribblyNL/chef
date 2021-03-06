<?php
header("Content-type: text/css");
$bg_color = 'white';
$txt_color = 'black';
$link_color = '#3366CC';
$a_hover = 'white';
$site_color = '#3366CC';
$adm_button = '#CCCCCC';
$adm_button2 = '#000066';
$link_bgcolor = '#7093DB';
$body_font_size = '7pt';

?> 
body{
font-family: Verdana, Arial, Helvetica, sans-serif;
font-size: <?=$body_font_size?>;
text-decoration: none;}

h1{ font-size: 12pt;
font-family: Verdana, Arial, Helvetica, sans-serif;
color:<?=$site_color?>;
font-weight: bold;}

h2{ font-size: 8pt;
font-family: Verdana, Arial, Helvetica, sans-serif;
color:<?=$site_color?>;
font-weight: 800;}

h3, h4, { font-size: 7px;
font-family: Verdana, Arial, Helvetica, sans-serif;
color:<?=$txt_color?>;}
table.frame{ position:relative;
top:-1px;}

table.navbar { text-align: left;
font-family: Verdana, Arial, Helvetica, sans-serif;
width: 88%;
font-size : 11px;
padding : 1px;}

#main { text-align : center;
text-decoration : none;
font-family: Verdana, Arial, Helvetica, sans-serif;
}

#logout { 
position:relative;
top:-15px;
left:80%;
font-size: 9px;
width: 6%;
}

table.votes {
font-size: 9px;
position:relative;
top:-39px;
left:85%;
border-spacing: 0px; 
margin: 0px; 
padding: 0px;
}

#navmenu a {
background-color : <?=$site_color?>;
border-bottom : solid 2px #000066;
border-left : solid 2px #CCCCCC;
border-right : solid 2px #000066;
border-top : solid 2px #CCCCCC;
color : white;
font-size : 9px;
text-align : center;
text-decoration : none;
padding : 0 4px 2px 4px;
margin : 1px;
display : block;
float : left;
width : 89px;}

#navmenu a:hover {
background-color : <?=$site_color?>;
border-bottom : solid 2px #CCCCCC;
border-left : solid 2px #000066;
border-right : solid 2px #CCCCCC;
border-top : solid 2px white;
color : #CCCCCC;
padding : 1px 3px 1px 5px;}

#navmenu a:active {color : black;}
border : None;
table.data {text-align: left;
width: 90%;
border-collapse: collapse;
border-spacing: 4px ;
font-size: 10px;
position:relative;
top:-17px;
left:10px;
}

table.tkrdata {text-align: left;
padding : 1px 3px 1px 5px;
width: 50%;
border-collapse: collapse;
border-spacing: 1px ;
position:relative;
font-size: 11px;
top:-1px;
left:39px;}

table.weblogdata {
width: 88%;
text-align: left;
padding : 3px 3px 2px 3px;
border-bottom : solid 1px #CCCCCC;
border-left : dotted 1px #CCCCCC;
border-right : dotted 1px #CCCCCC;
border-top : solid 1px #CCCCCC;
font-size: 11px;
font-weight: 500;
border-collapse: collapse;
position:relative;
top:13px;
left:7px;}

table.lastresult {text-align: left;
padding : 1px 3px 1px 5px;
font-size: 12px;
font-weight: 500;
width: 30%;
border-collapse: collapse;
position:relative;
top:1px;
left:69px;}

.blockquote, .p, {
font-size: 10px;
font-weight: bold;
color:<?=$txt_color?>;}

a:link{ 
background-color: transparent;
font-size: 11px;
color: <?=$link_color?>;
font-weight: bold;
text-decoration: none;}

a:visited{font-size: 11px;
background-color: transparent;
color: <?=$link_color?>;
font-weight: bold;
border : None;
}

a:hover{
background-color: <?=$link_bgcolor?>;
color: <?=$a_hover?>;
font-weight: bold;
border : None;
}

a:active{
background-color: transparent;
color: <?=$link_color?>;
font-weight: bold;
border : None;
}

#navmenuadm a {background-color : #8F8F8F;
border-bottom : solid 2px <?=$adm_button2?>;
border-left : solid 2px <?=$adm_button?>;
border-right : solid 2px <?=$adm_button2?>;
border-top : solid 2px <?=$adm_button?>;
color : white;
margin : 1px;
font-size : 9px;
text-align : center;
text-decoration : none;
padding : 0px 0px 0px 0px;
margin : 0px;
display : block;
float : top;
width : 100px;}

#navmenuadm a:hover {background-color : <?=$site_color?>;
border-bottom : solid 2px #CCCCCC;
border-left : solid 2px #000066;
border-right : solid 2px #CCCCCC;
border-top : solid 2px #000066;
color : #CCCCCC;
padding : 0px 0px 0px 0px;}

#navmenuadm a:active 
{
color : black;
}


