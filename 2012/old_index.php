<html>
 <head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
<?php
  $langs = array( 'en', 'es', 'hu' );
  if ( ! empty($_GET['lang']) && in_array($_GET['lang'], $langs) )
  {
    $lang = $_GET['lang'];
  }
  else
  {
    if ( ! empty( $_SERVER['HTTP_ACCEPT_LANGUAGE'] ) )
	{
	  $browserlang = $_SERVER['HTTP_ACCEPT_LANGUAGE'];
	  $li = 999;
	  $lang = $langs[0];
	  foreach( $langs as $actual )
	  {
	    $x = strpos($browserlang,$actual);
		if ( $x !== false && $x<$li )
		{
		  $li = $x;
		  $lang = $actual;
		}
	  }
	}
	else
	{
	  $lang = $langs[0];
	}
  }

  if ( $lang == "en" )
  {
    echo "  <meta HTTP-EQUIV=\"REFRESH\" content=\"0; url=http://fustos.com/page.html#home\" />";
  }
  if ( $lang == "es" )
  {
    echo "  <meta HTTP-EQUIV=\"REFRESH\" content=\"0; url=http://fustos.com/page.html#casa\" />";
  }
  if ( $lang == "hu" )
  {
    echo "  <meta HTTP-EQUIV=\"REFRESH\" content=\"0; url=http://fustos.com/page.html#kezdolap\" />";
  }

?>
 </head>
 <body>
 </body>
</html>
