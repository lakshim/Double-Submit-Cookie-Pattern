<!-- IT18185744 
	Jayathissa L.M.
-->
<?php

class token {
   
	public static function checkToken($token,$cookiecsrf){
			if($cookiecsrf == $token) {
				return true;
			}
	}
}
?>