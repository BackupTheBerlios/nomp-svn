<?
include '../blog/dbinfo.php';
include '../blog/counter_functions.php';
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3c.org/TR/1999/REC-html401-19991224/loose.dtd">
<HTML xmlns="http://www.w3.org/1999/xhtml">
<HEAD>
<link rel=stylesheet type="text/css" href="http://www.bunnyhug.net/blog/styles-site.css">
</HEAD>
<BODY>

	<!-- <CONTAINER> -->
	<div id="container">
		<TABLE width="100%" CELLPADDING=0 CELLSPACING=0>
		<tr><td valign=top align=left>

			<!-- <HEADER> -->
			<div id="header">
				<table width=100%>
				<tr><td align=left>
					<div id="banner">
						<h1><a href="http://www.bunnyhug.net/nomp/" accesskey="1">NOMP - NZB-O-MATIC PLUS</a></h1>
						<h2>An extension from the <a href="http://nzb.wordtgek.nl/">NZB-O-MATIC</a> project by <i>over</i></h2>
					</div>
				</td></tr>
				</table>
			</div>
			<!-- </HEADER> -->

			<!-- <MENU> -->
			<UL id=navlist>
			</UL>
			<!-- </MENU> -->

		</td></tr><tr><td>
			<TABLE cellSpacing=0 cellPadding=0 width="100%">
			<TBODY>
			<TR>
			<TD id=center vAlign=top align=left>
				<!-- <CONTENT> -->
				<div class="content">
					<!-- <AD> -->
					<div id=ad>
						<center>
						<script type="text/javascript"><!--
						google_ad_client = "pub-3679344559703247";
						google_alternate_color = "FFFFFF";
						google_ad_width = 468;
						google_ad_height = 60;
						google_ad_format = "468x60_as";
						google_ad_channel ="2703929160";
						google_ad_type = "text_image";
						google_color_border = "FFFFFF";
						google_color_bg = "FFFFFF";
						google_color_link = "008000";
						google_color_url = "3366CC";
						google_color_text = "000000";
						//--></script>
						<script type="text/javascript"
						src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
						</script>
						</center>
					</div>
					<!-- </AD> -->
<h3>NOMP</h3>

<TABLE class=test width="100%" CELLPADDING=0 CELLSPACING=0>
<tr><td valign=top align=left>

<!-- <desc> -->
<a name="description"></a>
<p>
<span class="header">Description</span><br>
<span class="description">
<b>NOMP requires the <a href="http://msdn.microsoft.com/netframework/downloads/framework1_1/">1.1 .NET Framework</a></b>
<BR><br>
NOMP (NZB-O-MATIC PLUS) is a extension from the <a href="http://nzb.wordtgek.nl/">NZB-O-MATIC</a> project started by Da_Teach and Azaril.
If you want to contact them check out the <a href="http://nzb.wordtgek.nl/">NZB-O-MATIC</a> page for their contact information.  So far all I
have done is add some small bug fixes and additional features.  Straight from the <a href="http://nzb.wordtgek.nl/">NZB-O-MATIC</a>
page here are some of the features:

<table width=80%><tr><td><i>
      <p>NZB-O-Matic is an easy to use, free, multi-server usenet download program based on NZB files. It requires the .NET framework v1.1 to run and probably contains a few bugs ;)</p>
      <p>Current features :</p>
      <ul>
        <li>Support multiple servers, it will first try to download from the first server, if the article cant be found it'll try the 2nd, and 3rd, and so on. There is no limit on servers, although each server-connection is a thread looking at that server's download queue, so processor power could come into play when you have a lot of connections.</li>
        <li>Multi-threaded downloading for multiple connections.</li>
        <li>Supports yEnc, UUEncode and Base-64 decoding. </li>
        <li>Imports NZB files that are downloaded from <a href="http://www.newzbin.com" target="_blank">www.newzbin.com</a>.</li>
      </ul>
</i>
</td></tr></table>

</span></p>
<!-- </desc> -->


<!-- <changelog> -->
<a name="changelog"></a>
<p>
<span class="header">Change Log</span>
<p>
<span class="logheader">Version 0.47</span>
<ul class="changelog">
	<li>* Fixed the '%z' so that it supports 'msgidlist_uid' files from newzbin as well
	<li>+ Added a '%y' option that is the same as '%z' but it replaces '_' with ' '
</ul></p>

<p>
<span class="logheader">Version 0.46</span>
<ul class="changelog">
	<li>* Fixed the monitor folder option to wait until the file has finished downloading.
</ul></p>

<p>
<span class="logheader">Version 0.45</span>
<ul class="changelog">
	<li>+ Added the option to monitor a folder for new NZB files.  In the
	preferences window you can select the folder which you want to monitor.
	Whenever a new nzb file is created in this folder it will automatically be
	imported into NOMP.
</ul></p>

<p>
<span class="logheader">Version 0.44</span>
<ul class="changelog">
	<li>* Fixed bug with importing a nzb file and then having the config files saved in the wrong folder
	<li>* Fixed bug with opening the window from the tray and having it set the window size to 0x0
	<li>* Fixed 'disconnect on idle' so that it saves it to the options file
	<li>+ If you import a nzb file while the form is minimized to the tray it won't bring the form to the front
	<li>+ Changed the import NZB functionality to allow importing multiple .nzb
		files at one time
	<li>+ Added a new download folder option '%z' which can be used for nzb files imported
		from newzbin (msgid_111111_Blah.nzb will become Blah).  If the nzb file
		doesn't follow the msgid_<number> format it will just create the folder
		the same way the '%i' does
	<li>+ Saves the window location now and whether or not the form is maximized
	<li>+ Changed the update check to point to my server instead
	<li>+ Added option to empty the cache
	<li>+ Added an attempt at a fix for when you import/delete entries while downloading and the current download stalls
</ul></p>

<!-- </changelog> -->

</td></tr></table>


				</div>
				<!-- </CONTENT> -->

			</td><td vAlign=top>

				<!-- <RIGHT> -->
				<div id="right">
					<!-- <SIDEBAR> -->
					<div class="sidebar">

					<h2>Downloads</h2>
					<ul>
					<li><a href="NzbOMaticPlusSetup.exe">Binary - Download (Version 0.47)</a>
					</ul>

					<H2>Information</H2>

					<ul>
					<!-- <header> -->
					<li>Original Release: February 10, 2005
					<li>Last Updated: March 14, 2005
					<li>Required: <a href="http://msdn.microsoft.com/netframework/downloads/framework1_1/">1.1 .NET Framework</a>
					</ul>

					<ul>
					<h2>Contact Information</h2>
				   <li><i>(replace --at-- with @)</i>
					<li>bunnyhug.7256620--at--bloglines.com
					</ul>

					</div>
					<!-- </SIDEBAR> -->

					<!-- <JUNK> -->
					<DIV class=junk>
						<center>

						<? echo $pagecount; ?>
						<br><br>
							</center>
					</DIV>
					<!-- </JUNK> -->

				</div>
				<!-- </RIGHT> -->
			</TD></TR></TBODY></TABLE>
		</td></tr></table>
	</div>
	<!-- </CONTAINER> -->
</BODY>
</HTML>

