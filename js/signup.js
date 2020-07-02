
function submitForm(){
	if(document.SignUp_User.firstname.value ==""){
		alert( "Please provide your First name." );
        document.SignUp_User.firstname.focus() ;
        return false;
	}
	else if(document.SignUp_User.lastname.value ==""){
		alert( "Please provide your Last name." );
        document.SignUp_User.lastname.focus() ;
        return false;
	}
	else if(document.SignUp_User.Password.value.length < 6){
		alert( "Password length should be atleast 6 characters." );
        document.SignUp_User.Password.focus() ;
        return false;
	}
	else{
		return true;
	}
}