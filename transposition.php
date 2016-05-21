<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Transposition Chipper</title>
</head>
<link rel="stylesheet" href="bootstrap.css">
<script type="text/javascript">
	function Encrypt() {
	    plaintext = document.getElementById("p").value.toLowerCase().replace(/[^a-z]/g, "");  
	    if(plaintext.length < 1){ alert("please enter some plaintext"); return; }    
	    var key = document.getElementById("key").value.toLowerCase().replace(/[^a-z]/g, "");  
	    var pc = document.getElementById("pc").value.toLowerCase().replace(/[^a-z]/g, "");
	    if(pc=="") pc = "x";    
	    while(plaintext.length % key.length != 0) plaintext += pc.charAt(0);    
	    var colLength = plaintext.length / key.length;
	    var chars = "abcdefghijklmnopqrstuvwxyz"; 
	    ciphertext = ""; k=0;
	    for(i=0; i < key.length; i++){
	        while(k<26){
	            t = key.indexOf(chars.charAt(k));
	            arrkw = key.split(""); arrkw[t] = "_"; key = arrkw.join("");
	            if(t >= 0) break;
	            else k++;
	        }
	        for(j=0; j < colLength; j++) ciphertext += plaintext.charAt(j*key.length + t);
	    }
	    document.getElementById("c").value = ciphertext;
	}

	function Decrypt(f) {
	    ciphertext = document.getElementById("c").value.toLowerCase().replace(/[^a-z]/g, "");  
	    if(ciphertext.length < 1){ alert("please enter some ciphertext (letters only)"); return; }    
	    keyword = document.getElementById("key").value.toLowerCase().replace(/[^a-z]/g, ""); 
	    klen = keyword.length;
	    if(klen <= 1){ alert("keyword should be at least 2 characters long"); return; }
	    if(ciphertext.length % klen != 0){ alert("ciphertext has not been padded, the result may be incorrect (incorrect keyword?)."); }
	    // first we put the text into columns based on keyword length
	    var cols = new Array(klen);
	    var colLength = ciphertext.length / klen;
	    for(i=0; i < klen; i++) cols[i] = ciphertext.substr(i*colLength,colLength);
	    // now we rearrange the columns so that they are in their unscrambled state
	    var newcols = new Array(klen);
	    chars="abcdefghijklmnopqrstuvwxyz"; j=0;i=0;
	    while(j<klen){
	        t=keyword.indexOf(chars.charAt(i));        
	        if(t >= 0){
	            newcols[t] = cols[j++];
	            arrkw = keyword.split(""); arrkw[t] = "_"; keyword = arrkw.join("");
	        }else i++;         
	    }    
	    // now read off the columns row-wise
	    plaintext = "";
	    for(i=0; i < colLength; i++){
	        for(j=0; j < klen; j++) plaintext += newcols[j].charAt(i);
	    }            
	    document.getElementById("p").value = plaintext;    
	}
 </script>
<body>
	<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>KRIPTOGRAFI MENU</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap.css" rel="stylesheet">


    <!-- Custom styles for this template -->
    <link href="style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">TRANSPOSITION CIPHER</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="index.php">Home</a></li>
            <li><a href="transposition.php">Enkripsi</a></li>
            <li><a href="dekripsi.php">Dekripsi</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container">

      <div class="starter-template" style="text-align:left;">
	<table class="table table-hover" style="width:80%; padding:100px;">
		<tr>
			<td colspan="3">
				<h1 style="text-align:center;">TRANSPOSITION CIPHER</h1>
			</td>
		</tr>
		<tr>
			<td>PlainText</td>
			<td>:</td>
			<td>
				<textarea id="p" class="form-control" name="p" rows="4" cols="50" placeholder="Masukan PlainText"></textarea>
			</td>
		</tr>
		<tr>
			<td>Keyword</td>
			<td>:</td>
			<td>
				<input id="key" placeholder="Keyword" class="form-control" name="key" size="10" value="zebra" type="text"> 
			</td>
		</tr>
		<tr>
			<td colspan="3">
				<input id="pc" name="pc"  size="1" value="x" type="hidden">
				<input name="btnEn"  class="btn btn-primary" value="Encrypt" onclick="Encrypt()" type="button"> 
			</td>
		</tr>
		<tr>
			<td>CipherText</td>
			<td>:</td>
			<td>
				<textarea id="c" class="form-control" name="c" rows="4" cols="50" placeholder="Hasil CipherText"></textarea>
			</td>
		</tr>
	</table>
	</table>
</div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  </body>
</html>
