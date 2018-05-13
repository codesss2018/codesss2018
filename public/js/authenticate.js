
//for id manipulation
function makeid() {
  var text = "";
  var possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";

  for (var i = 0; i < 5; i++)
    text += possible.charAt(Math.floor(Math.random() * possible.length));

  return text;
}
//set cookie
function setCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    var expires = "expires="+ d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}
//get cookie
function getCookie(cname) {
    var name = cname + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var ca = decodedCookie.split(';');
    for(var i = 0; i <ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}

function getuserId(){
	 var cookie = getCookie("sessionId");
   	//alert(cookie);
    if (cookie!=null) {
    	id = cookie.substring(5,6);
    	if (id!="") {
    		return id;
    	}else{
    		return "";
    	}
    }else{
    	return "";
    }
}

$(document).ready(function () {
	$('#login_user').on('click', function(e){
		//get input text values
		//alert('Email and Password are required');
		userMail = $('#txtEmail').val();
		userPassword = $('#txtPassword').val();
		/*if (userMail=="" || userPassword=="") {
			alert('Email and Password are required');
			return false;
		}else{*/
			$.ajax({
				type: "POST",
				url: "includes/login.php",
				data: "txtEmail="+userMail+"&txtPassword="+userPassword,
				success: function(html){
					value = JSON.parse(html);
					if (value.error==true) {
						//localStorage["session"] = value.user_id;
						userId = makeid() + value.user_id + makeid();
						setCookie("sessionId", userId, 1);
						//alert("Login Successful!")
						window.location.replace("account.php");
    					//alert(getCookie("sessionId"));
					}else{
						//error messages goes here
						alert(value.error_msg);
					}
				},
				beforeSend: function(){
					//error messages
				}
			});
			return false;
		//}
	});

	$('#register_user').on('click', function(e){
		//get input text values
		userName = $('#txtNameRegister').val();
		userMail = $('#txtEmailRegister').val();
		userPhone = $('#txtPhoneRegister').val();
		userPassword = $('#txtPasswordRegister').val();
		userPasswordC = $('#txtPasswordCRegister').val();
		//userMobile = localStorage['mobile'];
		if (userMail=="" || userPassword=="" || userPasswordC=="") {
			alert('All fields are required');
			return false;
		}else{
			$.ajax({
				type: "POST",
				url: "includes/register.php",
				data: "txtName="+userName+"&txtEmail="+userMail+"&txtPhone="+userPhone+"&txtPassword="+userPassword+"&txtPasswordC="+userPasswordC,
				success: function(html){
					value = JSON.parse(html);
					if (value.error==true) {
						alert('Successful Registration');
						window.location.replace("index.html");
					}else{
						//error messages goes here
						alert(value.error_msg);
					}
				},
				beforeSend: function(){
					//error messages
				}
			});
			return false;
		}
	});
});
