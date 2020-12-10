function getElement(id){
	return document.getElementById(id);
}
function validate(){
	refresh();
	var hasErr=false;
	var uname = getElement("uname");
	var pass = getElement("pass");
	var err_uname = getElement("err_uname");
	var err_pass = getElement("err_pass");

	
	
	if(uname.value == ""){
		hasErr= true;
		err_uname.innerHTML = "Username Required";
		uname.focus();
		return !hasErr;
	}

	if(pass.value == ""){
		hasErr= true;
		err_pass.innerHTML = "Password Required";
		pass.focus();
		return !hasErr;
	}	
	return !hasErr;

}
function refresh(){
	var err_uname = getElement("err_uname");
	var err_pass = getElement("err_pass");
	
	err_uname.innerHTML = "";
	err_pass.innerHTML = "";
	
}