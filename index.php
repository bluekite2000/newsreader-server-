<?php
require_once(dirname(__FILE__).'/config.php');
// check for custom config.php (custom_config.php)
if (file_exists(dirname(__FILE__).'/custom_config.php')) {
	require_once(dirname(__FILE__).'/custom_config.php');
}
// check for custom index.php (custom_index.php)
if (!defined('_FF_FTR_INDEX')) {
	define('_FF_FTR_INDEX', true);
	if (file_exists(dirname(__FILE__).'/custom_index.php')) {
		include(dirname(__FILE__).'/custom_index.php');
		exit;
	}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />	
	<meta name="robots" content="noindex, follow" />
	<script type="text/javascript" src="niceforms.js"></script>	
	<link rel="stylesheet" href="css/niceforms-default.css" type="text/css" media="screen" />
	<script type="text/javascript" src="js/niceforms.js"></script>
	<!--<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>-->
	<script type="text/javascript" src="js/jquery-1.4.4.min.js"></script>
	<script type="text/javascript">
	var baseUrl = 'http://'+window.location.host+window.location.pathname.replace(/(\/index\.html|\/)$/, '');
	$(document).ready(function() {
		$('#form').submit(function() {
			$('#url').val($('#url').val().replace(/^http:\/\//i, ''));
			return true;
		});
	});
	</script>
  </head>
  <body style="background-color: #eee; margin: 0; line-height: 1.4em;">
	<div id="container">
	
    <form method="get" action="makefulltextfeed.php" id="form" class="niceform">
	<fieldset>
		<legend>Create full-text feed from feed or webpage URL</legend>
		<dl>
			<dt><label for="url">Enter URL:</label></dt>
			<dd><input type="text" id="url" name="url" style="width: 450px;" /></dd>
		</dl>
	</fieldset>
	
	<fieldset class="action" style="background: transparent; border: none; margin-bottom: 20px; padding: 0;">
		<input type="submit" id="sudbmit" name="submit" value="Create Feed" />
	</fieldset>
	</form>
	
	

  </body>
</html>