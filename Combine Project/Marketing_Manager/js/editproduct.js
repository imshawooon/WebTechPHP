function getElement(id){
	return document.getElementById(id);
}
function validate(){
	refresh();
	var hasErr=false;
	var id = getElement("id");
	debugger;
	
	

	if(pname.value == ""){
		hasErr= true;
		err_pname.innerHTML = "Product Name Required";
		pname.focus();
		return !hasErr;
	}

	if(pc.value == ""){
		hasErr= true;
		err_pc.innerHTML = "Product category Required";
		pc.focus();
		return !hasErr;
	}

	if(price.value == ""){
		hasErr= true;
		err_price.innerHTML = "Product price Required";
		price.focus();
		return !hasErr;
	}

	

	if(padd_date.value == ""){
		hasErr= true;
		err_padd_date.innerHTML = "Product add date Required";
		padd_date.focus();
		return !hasErr;
	}

	if(pupdate_date.value == ""){
		hasErr= true;
		err_pupdate_date.innerHTML = "Product update date Required";
		pupdate_date.focus();
		return !hasErr;
	}
	
		
	return !hasErr;

}
function refresh(){
	
	var err_pname = getElement("err_pname");
	var err_pc = getElement("err_pc");
	var err_price = getElement("err_price");
	var err_padd_date = getElement("err_padd_date");
	var err_pupdate_date = getElement("err_pupdate_date");
	
	
	err_pname.innerHTML = "";
	err_pc.innerHTML = "";
	err_price.innerHTML = "";
	err_padd_date.innerHTML = "";
	err_pupdate_date.innerHTML = "";
	
	
	
}