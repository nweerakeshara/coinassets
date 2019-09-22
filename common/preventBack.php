<?php

	if((@$_SESSION["login"] == NULL) && (@$_SESSION["loginemp"] == NULL)){
		?>
		<script type="text/javascript">
	 
	function prevent_back(){
		window.history.forward();
	}
	setTimeout("prevent_back()", 0);
	window.onunload = function(){
		null
	};

	</script>
	<?php
	}

?>