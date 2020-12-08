function getElement(id){
	return document.getElementById(id);
}
function validate(){
	refresh();
	var hasErr=false;
	var name = getElement("name");
	var uname = getElement("uname");
	var pass = getElement("pass");
	var email = getElement("email");
	var phone = getElement("phone");
	var err_name = getElement("err_name");
	var err_uname = getElement("err_uname");
	var err_pass = getElement("err_pass");
	var err_email = getElement("err_email");
	var err_phone = getElement("err_phone");
	
	if(name.value == ""){
		hasErr= true;
		err_name.innerHTML = "Name Required";
		name.focus();
		return !hasErr;
	}
	
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
	if(email.value == ""){
		hasErr= true;
		err_email.innerHTML = "Email Required";
		email.focus();
		return !hasErr;
	}

	if(phone.value == ""){
		hasErr= true;
		err_phone.innerHTML = "Phone Number Required";
		phone.focus();
		return !hasErr;
	}	
	return !hasErr;

}
function refresh(){
	var err_name = getElement("err_name");
	var err_email = getElement("err_email");
	var err_uname = getElement("err_uname");
	var err_pass = getElement("err_pass");
	var err_phone = getElement("err_phone");
	
	err_name.innerHTML = "";
	err_uname.innerHTML = "";
	err_pass.innerHTML = "";
	err_email.innerHTML = "";
	err_phone.innerHTML = "";
	
}