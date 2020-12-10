function getElement(id){
	return document.getElementById(id);
}
function validate(){
	refresh();
	var hasErr=false;
	var id = getElement("id");
	var name = getElement("name");
	var dob = getElement("uname");
	var credit = getElement("pass");
	var cgpa = getElement("email");
	var deptid = getElement("phone");
	var err_id = getElement("err_id");
	var err_name = getElement("err_name");
	var err_dob = getElement("err_dob");
	var err_credit = getElement("err_credit");
	var err_cgpa = getElement("err_cgpa");
	var err_deptid = getElement("err_deptid");
	
	if(id.value == ""){
		hasErr= true;
		err_id.innerHTML = "ID Required";
		id.focus();
		return !hasErr;
	}

	if(name.value == ""){
		hasErr= true;
		err_name.innerHTML = "Name Required";
		name.focus();
		return !hasErr;
	}
	
	if(dob.value == ""){
		hasErr= true;
		err_dob.innerHTML = "DOB Required";
		dob.focus();
		return !hasErr;
	}

	if(credit.value == ""){
		hasErr= true;
		err_credit.innerHTML = "Credit Required";
		credit.focus();
		return !hasErr;
	}
	if(cgpa.value == ""){
		hasErr= true;
		err_cgpa.innerHTML = "cgpa Required";
		cgpa.focus();
		return !hasErr;
	}

	if(deptid.value == ""){
		hasErr= true;
		err_deptid.innerHTML = "deptid Number Required";
		deptid.focus();
		return !hasErr;
	}	
	return !hasErr;

}
function refresh(){
	var err_id = getElement("err_id");
	var err_name = getElement("err_name");
	var err_dob = getElement("err_dob");
	var err_credit = getElement("err_credit");
	var err_cgpa = getElement("err_cgpa");
	var err_deptid = getElement("err_deptid");
	
	err_id.innerHTML = "";
	err_name.innerHTML = "";
	err_dob.innerHTML = "";
	err_credit.innerHTML = "";
	err_cgpa.innerHTML = "";
	err_phone.innerHTML = "";
	
}