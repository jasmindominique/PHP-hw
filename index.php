<?php 

require 'database.php';

require 'head.php';

if ( isset($_GET['page']) ) {
	$page = $_GET['page'];
} else{
	$page = "gallery";
}
require $page . '.php';

require 'footer.php';

?>

<!-- include and require - include will repeat the action that you are trying to complete. Require is just that "required" the page will fail if it doesn't work . -->