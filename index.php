
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
          <a class="navbar-brand" href="index.php">TRANSPOSITION CIPHER</a>
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
        <h2><b>Introduction</b></h2>
<p>The columnar transposition cipher is a fairly simple, easy to implement cipher. It is a transposition
cipher that follows a simple rule for mixing up the characters in the plaintext
to form the ciphertext.</p>
<p>Although weak on its own, it can be combined with other ciphers, such as a substitution
cipher, the combination of which can be more difficult to break than either cipher on it's own. The 
<a href="/ciphers/adfgvx-cipher/">ADFGVX cipher</a> uses a columnar transposition to greatly improve its security.</p>

<h2><b>Example</b></h2>
<p>The key for the columnar transposition cipher is a keyword e.g. <tt>GERMAN</tt>. The row length that is used is 
the same as the length of the keyword. To encrypt a piece of text, e.g.</p>
 
<pre>defend the east wall of the castle</pre>
<p>we write it out in a special way in a number of rows (the keyword here is <tt>GERMAN</tt>):</p>

<pre><span style="text-decoration: underline;">G E R M A N</span>
d e f e n d
t h e e a s
t w a l l o
f t h e c a
s t l e x x</pre>

<p>In the above example, the plaintext has been padded so that it neatly fits in a rectangle. This is known as a regular columnar transposition.
An irregular columnar transposition leaves these characters blank, though this makes decryption slightly more difficult. The columns are now reordered
such that the letters in the key word are ordered alphabetically.</p>

<pre><span style="text-decoration: underline;">A E G M N R</span>
n e d e d f
a h t e s e
l w t l o a
c t f e a h
x t s e x l</pre>

<p>The ciphertext is read off along the columns:</p>

<pre>nalcxehwttdttfseeleedsoaxfeahl</pre>



      </div>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  </body>
</html>
