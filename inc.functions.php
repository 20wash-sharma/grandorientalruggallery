<?php

	function CurrentPage() {
		return substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);
	}
	function CurrentPageMenu( $menuPage ){
            $r='';
		foreach( $menuPage as $a => $b ){
			if( $b == CurrentPage() ){
				$r = 'active';
			}
		}
		return $r;
	}
?>