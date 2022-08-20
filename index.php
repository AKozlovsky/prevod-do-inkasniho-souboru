<html lang="cs" xml:lang="cs">

<head>
	<title>P&#345;evod do souboru .ikm</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="author" content="Andrej Kozlovský" />
	<meta name="description" content="Převod do souboru BEST" />
	<link rel="stylesheet" href="style.css" type="text/css" />
</head>

<body>
	<div id="header">
		<div class="logo">
			<h4>P&#345;evod do inkasn&#xED;ho souboru</h4>
			<h2>MLP Design</h2>
		</div>
	</div>
	<div id="main">
		<form enctype="multipart/form-data" action="parse.php" method="post">
			<table>
				<tr class="required">
					<th><label class="required" for="frmupload-source" style="color: black">Vlo&#x17E;te &#xFA;&#x10D;etn&#xED; soubor v Microsoft Excel:</label></th>
					<td><input type="file" class="text" style="color: black" name="source" id="frmupload-source" required="required" data-nette-rules="{op:':filled',msg:'Please complete mandatory field.'}" /></td>
				</tr>
				<tr></tr>
				<tr></tr>
				<tr></tr>
				<tr class="required">
					<th><label class="required" for="frmupload-details-cisloUctu" style="color: black; text-align: left; margin: -50px">&#268;&#xED;slo &#xFA;&#x10D;tu:</label></th>
					<td><input type="text" class="text" name="cisloUctu" id="frmupload-details-cisloUctu" required="required" data-nette-rules="{op:':filled',msg:'Please complete mandatory field.'}" value="" /></td>
				<tr></tr>
				<tr></tr>
				<tr></tr>
				<tr class="required">
					<th><label class="required" for="frmupload-details-datumVytvoreni" style="color: black;">Datum vytvo&#345;en&#xED;:</label></th>
					<td><input type="date" class="text date" name="datumVytvoreni" required="required" data-nette-rules="{op:':filled',msg:'Please complete mandatory field.'}" value="<?php echo date('Y-m-d'); ?>" /></td>
				</tr>
				</tr>
				</tr>
				<tr></tr>
				<tr></tr>
				<tr class="required">
					<th><label class="required" for="frmupload-details-datumSplatnosti" style="color: black;">Datum splatnosti:</label></th>
					<td><input type="date" class="text date" name="datumSplatnosti" required="required" data-nette-rules="{op:':filled',msg:'Please complete mandatory field.'}" value="<?php echo date('Y-m-d'); ?>" /></td>
				</tr>
				</tr>
				<tr></tr>
				<tr></tr>
				<tr>
					<td>
						<div class="switch" style="margin-left:2cm;">
							<input type="checkbox" class="toggle-round" name="toggle">
							<label for="label-text" style="color: black; font-size:80%;">Zpracov&#xE1;n&#xED; v&#xED;ce d&#xE1;vek</label>
						</div>
					</td>
					<td><input type="submit" class="button" name="submit" id="frmupload-submit" value="Vytvo&#x159;it soubor ve form&#xE1;tu BEST" /></td>
					<td><input type="submit" class="button" name="delete_history" id="frmupload-submit" value="Vymazat historii zpracov&#xE1;n&#xED;" /></td>
				</tr>
			</table>
		</form>
	</div>
	<div id="footer">
		<p>Copyright &copy; 2015-2016 Andrej Kozlovsk&#253;. All Rights Reserved.
			<br /><a href="http://www.mlpdesign.net" title="Template design by MLP Design"> MLP Design</a>.
		</p>
	</div>
</body>

</html>