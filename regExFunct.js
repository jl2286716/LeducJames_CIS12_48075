function validate_field(var regX){
	var x = document.forms["formName"]["fieldName"].value;
	var re = new RegExp("/"+regX+"/");
	var m = re.exec(x);
	if (m==null){
		alert("Please, enter appropriate data!");
		return false;
	}else{
		alert("Your regular expression worked!");
		return true;
	}
}
function validate_form(var reg){
	if(!validate_field(reg))return false;
	return true;
}