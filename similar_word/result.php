<!DOCTYPE html>
<html lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<title>Spell Checker Help</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<style>
.button {

}

.button1 {background-color: #4CAF50;} /* Green */
</style>

<link rel="stylesheet" href="bootstrapc.css">
<link rel="stylesheet" href="stylec.css">



<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top mshadow py-0 mb-4">
<div class="container">
	<a class="navbar-brand pr-5" href="">
	<img loading="lazy" src="../Odia%20Spell%20Checker_files/spell_logo.png" alt="" title="" width="267" height="50"></a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item pr-2">
			<a class="nav-link text-dark" href="https://expoodisha.com/Software/spellchecker/"><i class="fas fa-home"></i> 
			Home <span class="sr-only">(current)</span></a></li>
			<li class="nav-item pr-2">
			<a class="nav-link text-primary" href="https://expoodisha.com/Software/spellchecker/dynamic.htm">
			Dynamic Spell</a></li>
			<li class="nav-item pr-2">
			<a class="nav-link text-primary" href="https://expoodisha.com/Software/componets.htm">
			Components</a></li>
			<li class="nav-item dropdown pr-2">
				<a class="nav-link text-primary" href="https://expoodisha.com/Software/comment.htm">
				Comments</a> 
				</li>
			<li class="nav-item dropdown pr-2">
				<a class="nav-link text-primary" href="https://expoodisha.com/Software/spellchecker/content/contact.htm"><i class="fas fa-envelope"></i> 
				Contact</a></li>
			<li class="nav-item pr-2">
			<a class="nav-link text-primary" href="https://expoodisha.com/Software/spellchecker/content/help.htm">Help</a></li>
			<li class="nav-item pr-2">
			<a class="nav-link text-primary">
			Search&gt;&gt;</a></li>
		</ul>
		<form class="form-inline my-4 my-lg-0" role="search" name="search" id="search" method="get" action="/search/">
			<div class="input-group">
				<input type="text" class="form-control" onkeyup="showResult(this.value)" name="T49" size="20">  
			<div id="livesearch"></div>
				
				<div class="input-group-append">&nbsp;</div>
			</div>
		</form>
	</div>
</div>
</nav>
<div class="container" style="height: auto !important;">
	<div class="row" style="height: auto !important;">
		<div class="col-sm-8">
			<h1><font size="4" color="#6699FF">Similar word meaning</font></h1>
<div class="card mb-4">
	&nbsp;<div class="card-body bg-light" style="background-color: #FFFFFF !important">

 
<div style="margin-left: 100px;"font-family: Dtsoft Web">
<p>
<?php
$strvar=$_POST["strvar"];
$strptr=simplexml_load_file("xml.xml");
foreach($strptr -> dictionary_words as $fin_ptr){
print "<div id='div_2'>$strvar :</div><br>";
print "<div id='div_3'>";
print  $fin_ptr -> $strvar;
print "</div>";
}
?>
</div>

        



<p>&nbsp;</div>
			</div>
			<a href="http://expoodisha.com/Software/spellchecker/word_contribution/open.php">.</a>
		</div>
		<div class="col-md-4" style="height: auto !important;">
<div class="mb-4">
	&nbsp;</div>
<div class="list-group mb-4">
	<b>
	<a class="list-group-item text-decoration-none list-group-item-primary">Font Converter</a></b><div class="card-body bg-light">
		<ul>
			<li>
			<a href="https://expoodisha.com/Software/FExchange/FExchange.htm">Akruti &gt; Unicode</a></li>
			<li>
			<a href="https://expoodisha.com/Software/FExchange/Shreelipi.htm">Shreelipi &gt; Unicode</a></li>
			<li><a href="https://expoodisha.com/Software/FExchange/Gist.htm">Gist &gt; Unicode</a></li>
			<li>shruti &gt; Unicode</li>
			<li>Aprant &gt; Unicode</li>
		</ul>
	</div>
	<p>&nbsp;<b><a class="list-group-item text-decoration-none list-group-item-success">Non-Unicode Converter</a></b></p>
	<div class="card-body bg-light">
		<ul>
			<li><a href="https://expoodisha.com/Software/unitoak/">Unicode &gt; Akruti</a></li>
		</ul>
	</div>
	</div>
<div class="card mb-4">
	<div class="card-header bg-warning"><i class="fas fa-envelope"></i> <b>Spell 
		Checker (Home)</b></div>
	<div class="card-body bg-light">
		<ul>
			<li><a href="https://expoodisha.com/Software/spellchecker/">Odia</a></li>
			<li>
			<a href="https://www.expoodisha.com/Software/spellchecker%20-%20Hindi/">Hindi</a></li>
		</ul>
	</div>
</div>
<div class="card mb-4">
	<div class="card-header bg-warning" style="background-color: #C0C0C0 !important"><i class="fas fa-envelope"></i> <b>Spell 
		Checker (Add-on)</b></div>
	<div class="card-body bg-light">
		<p align="center"><span style="font-size: 13pt">Installing a dictionary
		<b>
		<a href="https://expoodisha.com/Software/spellchecker/content/Spell_add-on_inner.htm">
		<font color="#FF0000">add-on</font></a></b> will add a new language 
		option to your spell-checker, which checks your spelling as you type.</span></div>
</div>
		</div>
	</div>
</div>
<div class="container">
	-<footer class="bg-light border-top p-3"><div class="row">
		<div class="col-sm-4 small pb-2">
			<p style="text-align: center">expoodisha.com 2023. All Rights Reserved.</div>
	</div>
</div>
</footer>

</body></html>