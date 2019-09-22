<?php

	if((@$_SESSION["login"] == NULL) && (@$_SESSION["loginemp"] == NULL)){
		echo '
              <script>
                   window.location = "login.php"
              </script>
             ';
	}

	/*
	if(time() > $_SESSION["timeExpire"]){
		

		echo '
              <script>
                   window.location = "login.php"
              </script>
             ';
	}
	*/
?>