<?php

/////////////////////////////////////////////////
///
/// this is footer
///
/////////////////////////////////////////////////

	require_once('./../lib/logino_functions.php');
	
	$answ = show_footer();
	
	if ($answ == '1')
	{

?>
<footer class="footer">
  <div class="container">
	<span class="pull-left">&copy; DmR<i>soft</i>, 2017</span>
	<span class="pull-right"><a href="https://github.com/dmrsoft/logino" target="_blank">dmrsoft/<span style="color: red; font-style: normal;">Login</span><span style="color: white">O</span></a></span>
  </div>
</footer>

<?

	}

/////////////////////////////////////////////////
///
/// this is footer
///
/////////////////////////////////////////////////

?>