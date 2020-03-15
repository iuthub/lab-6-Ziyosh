<?php
$name = $email = $username = $password = $confirm_password = $date_of_birth = $gender = $marital_status = $address = $overall_gpa = "";
$cit<php
$name = $email = $username = $password = $confirm_password = $date_of_birth = $gender = $marital_status = $address = $overall_gpa = "";
$city = $postal_code = $home_phone = $mobile_phone = $credit_card_number = $credit_card_expiry_date = $monthly_salary = $web_site_url = "";
$is_valid = TRUE;
$name_err = $email_err = $username_err = $password_err = $confirm_password_err = $date_of_birth_err = $gender_err = "";
$marital_status_err = $address_err = $city_err = $postal_code_err = $home_phone_err = $mobile_phone_err = "";
$credit_card_number_err = $credit_card_expiry_date_err = $monthly_salary_err = $web_site_url_err = $overall_gpa_err = "";
$field_err_msg = "This field is required";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	//Name validation
	if (empty($_POST["name"])) {
		$name_err = $field_err_msg;
		$is_valid = FALSE;
	} else {
		if (preg_match("/^[a-zA-Z]{2,}$/", $_POST["name"])) {
			$name = $_POST["name"];
		} else {
			$name_err = "It has to contain at least two chars and not any numeric char";
			$is_valid = FALSE;
		}
	}
	//Email validation
	if (empty($_POST["email"])) {
		$email_err = $field_err_msg;
		$is_valid = FALSE;
	} else {
		if (preg_match("/^[^.][a-z0-9A-Z]+@[a-z]+\.[a-z]{2,}$/", $_POST["email"])) {
			$email = $_POST["email"];
		} else {
			$email_err = "It should correspond to email format";
			$is_valid = FALSE;
		}
	}
	//Username validation
	if (empty($_POST["username"])) {
		$username_err = $field_err_msg;
		$is_valid = FALSE;
	} else {
		if (preg_match("/^\w{5,}$/", $_POST["username"])) {
			$username = $_POST["username"];
		} else {
			$username_err = "Username has to contain at least 5 characters";
			$is_valid = FALSE;
		}
	}
	//Password validation
	if (empty($_POST["password"])) {
		$password_err = $field_err_msg;
		$is_valid = FALSE;
	} else {
		if (preg_match("/^[a-zA-z0-9\W]{8,}$/", $_POST["password"])) {
			$password = $_POST["password"];
		} else {
			$password_err = "Password has to contain at least 8 chars";
			$is_valid = FALSE;
		}
	}
	//Confirm password
	if (empty($_POST["confirm_password"])) {
		$confirm_password_err = $field_err_msg;
		$is_valid = FALSE;
	} else {
		if ($_POST["password"] == $_POST["confirm_password"]) {
			$confirm_password = $_POST["confirm_password"];
		} else {
			$confirm_password_err = "Passwords don't match!";
			$is_valid = FALSE;
		}
	}
	//Date of Birth validation
	if (!empty($_POST["date_of_birth"])) {
		if (preg_match("/^[0-9]{2}\.[0-9]{2}\.[0-9]{4}$/", $_POST["date_of_birth"])) {
			$date_of_birth = $_POST["date_of_birth"];
		} else {
			$date_of_birth_err = "Wrong format for date";
			$is_valid = FALSE;
		}
	}
	//Gender validation
	if (empty($_POST["gender"])) {
		$gender_err = "Please select your gender";
		$is_valid = FALSE;
	} else {
		$gender = $_POST["gender"];
	}
	//Marital Status
	if (empty($_POST["marital_status"])) {
		$marital_status_err = "Please choose your marital status";
		$is_valid = FALSE;
	} else {
		$marital_status = $_POST["marital_status"];
	}
	//Address validation
	if (empty($_POST["address"])) {
		$address_err = $field_err_msg;
		$is_valid = FALSE;
	} else {
		$address = $_POST["address"];
	}
	//City validation
	if (empty($_POST["city"])) {
		$city_err = $field_err_msg;
		$is_valid = FALSE;
	} else {
		if (preg_match("/^[a-zA-Z]{2,}$/", $_POST["city"])) {
			$city = $_POST["city"];
		} else {
			$city_err = "Invalid city name";
			$is_valid = FALSE;
		}
	}
	//Postal Code validation
	if (empty($_POST["postal_code"])) {
		$postal_code_err = $field_err_msg;
		$is_valid = FALSE;
	} else {
		if (preg_match("/^[0-9]{6}$/", $_POST["postal_code"])) {
			$postal_code = $_POST["postal_code"];
		} else {
			$postal_code_err = "Postal code should consist of 6 numeric characters";
			$is_valid = FALSE;
		}
	}
	//Home phone validation
	if (empty($_POST["home_phone"])) {
		$home_phone_err = $field_err_msg;
		$is_valid = FALSE;
	} else {
		if (preg_match("/^[0-9]{2}\s[0-9]{7}$/", $_POST["home_phone"])) {
			$home_phone = $_POST["home_phone"];
		} else {
			$home_phone_err = "It should follow 9-digit format";
			$is_valid = FALSE;
		}
	}
	//Mobile phone validation
	if (empty($_POST["mobile_phone"])) {
		$mobile_phone_err = $field_err_msg;
		$is_valid = FALSE;
	} else {
		if (preg_match("/^[0-9]{2}\s[0-9]{7}$/", $_POST["mobile_phone"])) {
			$mobile_phone = $_POST["mobile_phone"];
		} else {
			$mobile_phone_err = "It should follow 9-digit format";
			$is_valid = FALSE;
		}
	}
	//Credit Card Number Validation
	if (empty($_POST["credit_card_number"])) {
		$credit_card_number_err = $field_err_msg;
		$is_valid = FALSE;
	} else {
		if (preg_match("/^[0-9]{4}[- ]{1}[0-9]{4}[- ]{1}[0-9]{4}[- ]{1}[0-9]{4}$/", $_POST["credit_card_number"])) {
			$credit_card_number = $_POST["credit_card_number"];
		} else {
			$credit_card_number_err = "It should follow 16-digit format";
			$is_valid = FALSE;
		}
	}
	//Credit Card Expiry Date
	if (empty($_POST["credit_card_expiry_date"])) {
		$credit_card_expiry_date_err = $field_err_msg;
		$is_valid = FALSE;
	} else {
		if (preg_match("/^[0-9]{2}\.[0-9]{2}\.[0-9]{4}$/", $_POST["credit_card_expiry_date"])) {
			$credit_card_expiry_date = $_POST["credit_card_expiry_date"];
		} else {
			$credit_card_expiry_date_err = "Wrong format for date";
			$is_valid = FALSE;
		}
	}
	//Monthly Salary validation
	if (empty($_POST["monthly_salary"])) {
		$monthly_salary_err = $field_err_msg;
		$is_valid = FALSE;
	} else {
		if (preg_match("/^UZS\s[0-9]{3,}\,[0-9]{3}\.[0-9]{2}$/", $_POST["monthly_salary"])) {
			$monthly_salary = $_POST["monthly_salary"];
		} else {
			$monthly_salary_err = "Wrong input for this field";
			$is_valid = FALSE;
		}
	}
	//Web Site URL validation
	if (empty($_POST["web_site_url"])) {
		$web_site_url_err = $field_err_msg;
		$is_valid = FALSE;
	} else {
		if (preg_match("/^http:\/\/(www)?(\.)?[a-zA-Z0-9]{1,}\.[a-z]{2,}$/", $_POST["web_site_url"])) {
			$web_site_url = $_POST["web_site_url"];
		} else {
			$web_site_url_err = "Invalid Web Site URL";
			$is_valid = FALSE;
		}
	}
	//Overall GPA validation
	if (empty($_POST["overall_gpa"])) {
		$overall_gpa_err = $field_err_msg;
		$is_valid = FALSE;
	} else {
		if (preg_match("/^([0-3]\.[0-9]{1,2}){1}$|^(4\.[0-4]{1}[0-9]?){1}$|^(4\.5[0]?){1}$/", $_POST["overall_gpa"])) {
			$overall_gpa = $_POST["overall_gpa"];
		} else {
			$overall_gpa_err = "Wrong GPA format";
			$is_valid = FALSE;
		}
	}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Validating Forms</title>
		<link href="style.css" type="text/css" rel="stylesheet" />
	</head>
	
	<body>
		<h1>Registration Form</h1>

		<p>
			This form validates user input and then displays "Thank You" page.
		</p>
		
		<hr />
		
		<h2>Please, fill below fields correctly</h2>
		<dl>
			<dt>Name</dt>
			<dd>
				???
			</dd>
			
			<!-- Write other fiels similar to Name as specified in lab6.pdf -->
		</dl>
		
		<div>
			Register
		</div>
	</body>
</html>y = $postal_code = $home_phone = $mobile_phone = $credit_card_number = $credit_card_expiry_date = $monthly_salary = $web_site_url = "";
$is_valid = TRUE;
$name_err = $email_err = $username_err = $password_err = $confirm_password_err = $date_of_birth_err = $gender_err = "";
$marital_status_err = $address_err = $city_err = $postal_code_err = $home_phone_err = $mobile_phone_err = "";
$credit_card_number_err = $credit_card_expiry_date_err = $monthly_salary_err = $web_site_url_err = $overall_gpa_err = "";
$field_err_msg = "This field is required";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	//Name validation
	if (empty($_POST["name"])) {
		$name_err = $field_err_msg;
		$is_valid = FALSE;
	} else {
		if (preg_match("/^[a-zA-Z]{2,}$/", $_POST["name"])) {
			$name = $_POST["name"];
		} else {
			$name_err = "It has to contain at least two chars and not any numeric char";
			$is_valid = FALSE;
		}
	}
	//Email validation
	if (empty($_POST["email"])) {
		$email_err = $field_err_msg;
		$is_valid = FALSE;
	} else {
		if (preg_match("/^[^.][a-z0-9A-Z]+@[a-z]+\.[a-z]{2,}$/", $_POST["email"])) {
			$email = $_POST["email"];
		} else {
			$email_err = "It should correspond to email format";
			$is_valid = FALSE;
		}
	}
	//Username validation
	if (empty($_POST["username"])) {
		$username_err = $field_err_msg;
		$is_valid = FALSE;
	} else {
		if (preg_match("/^\w{5,}$/", $_POST["username"])) {
			$username = $_POST["username"];
		} else {
			$username_err = "Username has to contain at least 5 characters";
			$is_valid = FALSE;
		}
	}
	//Password validation
	if (empty($_POST["password"])) {
		$password_err = $field_err_msg;
		$is_valid = FALSE;
	} else {
		if (preg_match("/^[a-zA-z0-9\W]{8,}$/", $_POST["password"])) {
			$password = $_POST["password"];
		} else {
			$password_err = "Password has to contain at least 8 chars";
			$is_valid = FALSE;
		}
	}
	//Confirm password
	if (empty($_POST["confirm_password"])) {
		$confirm_password_err = $field_err_msg;
		$is_valid = FALSE;
	} else {
		if ($_POST["password"] == $_POST["confirm_password"]) {
			$confirm_password = $_POST["confirm_password"];
		} else {
			$confirm_password_err = "Passwords don't match!";
			$is_valid = FALSE;
		}
	}
	//Date of Birth validation
	if (!empty($_POST["date_of_birth"])) {
		if (preg_match("/^[0-9]{2}\.[0-9]{2}\.[0-9]{4}$/", $_POST["date_of_birth"])) {
			$date_of_birth = $_POST["date_of_birth"];
		} else {
			$date_of_birth_err = "Wrong format for date";
			$is_valid = FALSE;
		}
	}
	//Gender validation
	if (empty($_POST["gender"])) {
		$gender_err = "Please select your gender";
		$is_valid = FALSE;
	} else {
		$gender = $_POST["gender"];
	}
	//Marital Status
	if (empty($_POST["marital_status"])) {
		$marital_status_err = "Please choose your marital status";
		$is_valid = FALSE;
	} else {
		$marital_status = $_POST["marital_status"];
	}
	//Address validation
	if (empty($_POST["address"])) {
		$address_err = $field_err_msg;
		$is_valid = FALSE;
	} else {
		$address = $_POST["address"];
	}
	//City validation
	if (empty($_POST["city"])) {
		$city_err = $field_err_msg;
		$is_valid = FALSE;
	} else {
		if (preg_match("/^[a-zA-Z]{2,}$/", $_POST["city"])) {
			$city = $_POST["city"];
		} else {
			$city_err = "Invalid city name";
			$is_valid = FALSE;
		}
	}
	//Postal Code validation
	if (empty($_POST["postal_code"])) {
		$postal_code_err = $field_err_msg;
		$is_valid = FALSE;
	} else {
		if (preg_match("/^[0-9]{6}$/", $_POST["postal_code"])) {
			$postal_code = $_POST["postal_code"];
		} else {
			$postal_code_err = "Postal code should consist of 6 numeric characters";
			$is_valid = FALSE;
		}
	}
	//Home phone validation
	if (empty($_POST["home_phone"])) {
		$home_phone_err = $field_err_msg;
		$is_valid = FALSE;
	} else {
		if (preg_match("/^[0-9]{2}\s[0-9]{7}$/", $_POST["home_phone"])) {
			$home_phone = $_POST["home_phone"];
		} else {
			$home_phone_err = "It should follow 9-digit format";
			$is_valid = FALSE;
		}
	}
	//Mobile phone validation
	if (empty($_POST["mobile_phone"])) {
		$mobile_phone_err = $field_err_msg;
		$is_valid = FALSE;
	} else {
		if (preg_match("/^[0-9]{2}\s[0-9]{7}$/", $_POST["mobile_phone"])) {
			$mobile_phone = $_POST["mobile_phone"];
		} else {
			$mobile_phone_err = "It should follow 9-digit format";
			$is_valid = FALSE;
		}
	}
	//Credit Card Number Validation
	if (empty($_POST["credit_card_number"])) {
		$credit_card_number_err = $field_err_msg;
		$is_valid = FALSE;
	} else {
		if (preg_match("/^[0-9]{4}[- ]{1}[0-9]{4}[- ]{1}[0-9]{4}[- ]{1}[0-9]{4}$/", $_POST["credit_card_number"])) {
			$credit_card_number = $_POST["credit_card_number"];
		} else {
			$credit_card_number_err = "It should follow 16-digit format";
			$is_valid = FALSE;
		}
	}
	//Credit Card Expiry Date
	if (empty($_POST["credit_card_expiry_date"])) {
		$credit_card_expiry_date_err = $field_err_msg;
		$is_valid = FALSE;
	} else {
		if (preg_match("/^[0-9]{2}\.[0-9]{2}\.[0-9]{4}$/", $_POST["credit_card_expiry_date"])) {
			$credit_card_expiry_date = $_POST["credit_card_expiry_date"];
		} else {
			$credit_card_expiry_date_err = "Wrong format for date";
			$is_valid = FALSE;
		}
	}
	//Monthly Salary validation
	if (empty($_POST["monthly_salary"])) {
		$monthly_salary_err = $field_err_msg;
		$is_valid = FALSE;
	} else {
		if (preg_match("/^UZS\s[0-9]{3,}\,[0-9]{3}\.[0-9]{2}$/", $_POST["monthly_salary"])) {
			$monthly_salary = $_POST["monthly_salary"];
		} else {
			$monthly_salary_err = "Wrong input for this field";
			$is_valid = FALSE;
		}
	}
	//Web Site URL validation
	if (empty($_POST["web_site_url"])) {
		$web_site_url_err = $field_err_msg;
		$is_valid = FALSE;
	} else {
		if (preg_match("/^http:\/\/(www)?(\.)?[a-zA-Z0-9]{1,}\.[a-z]{2,}$/", $_POST["web_site_url"])) {
			$web_site_url = $_POST["web_site_url"];
		} else {
			$web_site_url_err = "Invalid Web Site URL";
			$is_valid = FALSE;
		}
	}
	//Overall GPA validation
	if (empty($_POST["overall_gpa"])) {
		$overall_gpa_err = $field_err_msg;
		$is_valid = FALSE;
	} else {
		if (preg_match("/^([0-3]\.[0-9]{1,2}){1}$|^(4\.[0-4]{1}[0-9]?){1}$|^(4\.5[0]?){1}$/", $_POST["overall_gpa"])) {
			$overall_gpa = $_POST["overall_gpa"];
		} else {
			$overall_gpa_err = "Wrong GPA format";
			$is_valid = FALSE;
		}
	}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Validating Forms</title>
		<link href="style.css" type="text/css" rel="stylesheet" />
	</head>
	
	<body>
		<h1>Registration Form</h1>

		<p>
			This form validates user input and then displays "Thank You" page.
		</p>
		
		<hr />
		
		<h2>Please, fill below fields correctly</h2>
		<dl>
			<dt>Name</dt>
			<dd>
				???
			</dd>
			
			<!-- Write other fiels similar to Name as specified in lab6.pdf -->
		</dl>
		
		<div>
			Register
		</div>
	</body>
</html>