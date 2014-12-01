function redirect($page = '../PHP/index.php'){
	header("Location: $page");
	exit();
}

function checkUser($dbc, $email = '', $pass = ''){
	$errors = array();
	
	if(empty($email)){
		$errors[] = 'You forgot your email address.';
	}else{
		$e = mysqli_real_escape_string($dbc, trim($email));
	}
	
	if(empty($pass)){
		$errors[] = 'You forgot your password.';
	}else{
		$p = mysqli_real_escape_string($dbc, trim($pass));
	}
	
	if(empty($errors)){
		$q = "SELECT user_id, fName FROM jl2286716_proj_entity_users WHERE eMail='$e' AND passW=SHA1('$p')";
		$r = @mysqli_query($dbc, $q);
		
		if(mysqli_num_rows($r) == 1){
			$row = mysqli_fetch_array($r, MYSQLI_ASSOC);
			return array(true, $row);
		}else{
			$errors[] = 'The email address and password entered do not match those on file.';
		}
		return array(false, $errors);
	}
}

function checkAdmin($dbc, $user = '', $pass = ''){
	$errors = array();
	
	if(empty($user)){
		$errors[] = 'You forgot your username.';
	}else{
		$u = mysqli_real_escape_string($dbc, trim($user));
	}
	
	if(empty($pass)){
		$errors[] = 'You forgot your password.';
	}else{
		$p = mysqli_real_escape_string($dbc, trim($pass));
	}
	
	if(empty($errors)){
		$q = "SELECT admin_id, fName FROM jl2286716_proj_entity_admins WHERE uName='$u' AND passW=SHA1('$p')";
		$r = @mysqli_query($dbc, $q);
		
		if(mysqli_num_rows($r) == 1){
			$row = mysqli_fetch_array($r, MYSQLI_ASSOC);
			return array(true, $row);
		}else{
			$errors[] = 'The username and password entered do not match those on file.';
		}
		return array(false, $errors);
	}
}
