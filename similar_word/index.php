<!DOCTYPE html>
<html lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<title>Similar word search</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<script>
function showResult(str) {
  if (str.length==0) {
    document.getElementById("livesearch").innerHTML="";
    document.getElementById("livesearch").style.border="0px";
    return;
  }
  var xmlhttp=new XMLHttpRequest();
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("livesearch").innerHTML=this.responseText;
      document.getElementById("livesearch").style.border="1px solid #A5ACB2";
    }
  }
  xmlhttp.open("GET","https://expoodisha.com/Software/spellchecker/search/livesearch.php?q="+str,true);
  xmlhttp.send();
}
</script>
<style>
.button {

}

.button1 {background-color: #4CAF50;} /* Green */
</style>

<link rel="stylesheet" href="bootstrapc.css">
<link rel="stylesheet" href="stylec.css">


<script>
   function changeValue(o){
     document.getElementById('e').value=o.innerHTML;
    }
</script>


<style>
.btn {
  border: none;
  background-color: inherit;
  padding: 0px 0px;
  font-size: 16px;
  cursor: pointer;
  display: inline-block;
}

</style>

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
			<h1><font size="4" color="#6699FF">Similar word search</font></h1>
<div class="card mb-4">
	&nbsp;<div class="card-body bg-light" style="background-color: #FFFFFF !important">

 <form name= search_form id="dict_search_form" class="form-inline" role="search" method="POST" action="result.php">
            <span style="background-color: #FF66CC">
			<input autocomplete="on" lc="Oi" lname="Odia" autofocus="" placeholder="Search word" class="form-control-user xlit hi1" id="e" name="strvar" title="Enter the word you want to search" type="text" size="41" style="border: 1px dotted #FF00FF; background-color: #FFFFFF; font-size:12; font-family:DataSoft_Uniweb"></span>
            <input name="l" id="l" value="hi" type="hidden">
            &nbsp;&nbsp;
			<button class="btn btn-default btn-up sbutton" type="submit" title="Search Word!" color="f00" style="border-style: dotted; border-width: 1px; background-color:#FFCCCC; width:83px; height:37px">
			Search</button>
        	</form>
        



<p>&nbsp;<table border="1" width="100%" cellpadding="5">
	<tr>
		<td>
			
			<button id="technician21" class="btn success" onclick="changeValue(this)" style="width: 57; height: 26">
ଆୟତ</button>
			&nbsp;&lt; &gt;&nbsp;
			
			<button id="technician38" class="btn success" onclick="changeValue(this)" style="width: 57; height: 26">
ଆୟତ୍ତ</button>
&nbsp;
</td>
		<td>
			
			<button id="technician39" class="btn success" onclick="changeValue(this)" style="width: 57; height: 26">
ମଧୁ</button>
		&nbsp;&lt; &gt;
			
			<button id="technician40" class="btn success" onclick="changeValue(this)" style="width: 57; height: 26">
ମଧୂ</button>
		&nbsp; </td>
		<td width="43%" align="left">
			
			<button id="technician44" class="btn success" onclick="changeValue(this)" style="width: 57; height: 26">
ପେଶା</button>
&lt; &gt;&nbsp;
			
			<button id="technician45" class="btn success" onclick="changeValue(this)" style="width: 57; height: 26">
ପେସା</button>
&nbsp;&lt; &gt;
			
			<button id="technician46" class="btn success" onclick="changeValue(this)" style="width: 57; height: 26">
ପେଷା</button>
		</td>
	</tr>
	<tr>
		<td>
			
			<button id="technician47" class="btn success" onclick="changeValue(this)" style="width: 57; height: 26">
ପଲ୍ଲି</button>
		&nbsp; &lt; &gt;
			
			<button id="technician48" class="btn success" onclick="changeValue(this)" style="width: 57; height: 26">
ପଲ୍ଲୀ</button>
		</td>
		<td>
						
			<button id="technician49" class="btn success" onclick="changeValue(this)" style="width: 57; height: 26">
ରୁପା</button>
&nbsp;&lt; &gt;&nbsp;
			
			<button id="technician50" class="btn success" onclick="changeValue(this)" style="width: 57; height: 26">
ରୂପା</button>
		</td>
		<td width="43%" align="left">
			
			<button id="technician57" class="btn success" onclick="changeValue(this)" style="width: 57; height: 26">
ଋଷି</button>
&nbsp;&lt; &gt;
			
			<button id="technician58" class="btn success" onclick="changeValue(this)" style="width: 57; height: 26">
ରୁସି</button>
		</td>
	</tr>
	<tr>
		<td>
			
			<button id="technician53" class="btn success" onclick="changeValue(this)" style="width: 57; height: 26">
ମତ</button>
		&nbsp;&lt; &gt;&nbsp;
			
			<button id="technician54" class="btn success" onclick="changeValue(this)" style="width: 57; height: 26">
ମତ୍&#2852;</button>
		</td>
		<td>
			
			<button id="technician55" class="btn success" onclick="changeValue(this)" style="width: 57; height: 26">
ନିରବ</button>
		&nbsp;&lt; &gt;&nbsp;
			
			<button id="technician56" class="btn success" onclick="changeValue(this)" style="width: 57; height: 26">
ନୀରବ</button>
		</td>
		<td width="43%">
			
			<button id="technician59" class="btn success" onclick="changeValue(this)" style="width: 57; height: 26">
ପରି</button>
		&nbsp;&lt; &gt;&nbsp;
			
			<button id="technician60" class="btn success" onclick="changeValue(this)" style="width: 57; height: 26">
ପରୀ</button>
		</td>
	</tr>
	<tr>
		<td>
			
			<button id="technician61" class="btn success" onclick="changeValue(this)" style="width: 57; height: 26">
ମହି</button>
		&nbsp;&lt; &gt;&nbsp;
			
			<button id="technician62" class="btn success" onclick="changeValue(this)" style="width: 57; height: 26">
ମହୀ</button>
		</td>
		<td>
			
			<button id="technician63" class="btn success" onclick="changeValue(this)" style="width: 57; height: 26">
ଡାଇରି</button>
		&nbsp;&lt; &gt;&nbsp;
			
			<button id="technician64" class="btn success" onclick="changeValue(this)" style="width: 57; height: 26">
ଡାଏରି</button>
		</td>
		<td width="43%">
			
			<button id="technician65" class="btn success" onclick="changeValue(this)" style="width: 57; height: 26">
ସାଥି</button>
		&nbsp;&lt; &gt;&nbsp;
			
			<button id="technician66" class="btn success" onclick="changeValue(this)" style="width: 57; height: 26">
ସାଥୀ</button>
		</td>
	</tr>
	<tr>
		<td>
			
			<button id="technician67" class="btn success" onclick="changeValue(this)" style="width: 57; height: 26">
ସାରଥି</button>
		&nbsp;&lt; &gt;&nbsp;
			
			<button id="technician68" class="btn success" onclick="changeValue(this)" style="width: 57; height: 26">
ସାରଥୀ</button>
		</td>
		<td>
			
			&nbsp;</td>
		<td width="43%">
			
			&nbsp;</td>
	</tr>
	</table>
	</div>
			</div>
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