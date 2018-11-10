<?php
class Validate {
	function emailValidate($email) {
		$res = array ();
		/* $regex = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/'; */
		$regex = '/^[_A-Za-z0-9-]+(\\.[_A-Za-z0-9-]+)*@[A-Za-z0-9]+(\\.[A-Za-z0-9]+)*(\\.[A-Za-z]{2,})$/';
		if (preg_match ( $regex, $email )) {
			
			$res ["error"] = true;
			$res ["message"] = "valid email";
		} else {
			
			$res ["error"] = false;
			$res ["message"] = "not valid email";
		}
		
		return $res;
		
		// return $validation;
	}
	function mobileNumberValidate($mobile) {
		$res = array ();
		
		/* $regex = '/^[7-9]{1}[0-9]{9}$/'; */
		$regex = '/^[0-9]{10}$/';
		
		if (preg_match ( $regex, $mobile )) {
			
			$res ["error"] = true;
			$res ["message"] = "valid mobile";
		} else {
			
			$res ["error"] = false;
			$res ["message"] = "not valid mobile";
		}
		
		return $res;
		
		// return $validation;
	}
	function nameValidate($name) {
		$res = array ();
		
		$regex = '/^[A-Za-z\\s]{1,}[\\.]{0,1}[A-Za-z\\s]{0,}$/';
		
		if (preg_match ( $regex, $name )) {
			
			$res ["error"] = true;
			$res ["message"] = "valid name";
		} else {
			
			$res ["error"] = false;
			$res ["message"] = "not valid name";
		}
		
		return $res;
	}
	function altnameValidate($name) {
		$res = array ();
		
		$regex = '/^[A-Za-z\\s]{1,}[\\.]{0,1}[A-Za-z\\s]{0,}$/';
		
		if (preg_match ( $regex, $name )) {
			
			$res ["error"] = true;
			$res ["message"] = "valid alternate name";
		} else {
			
			$res ["error"] = false;
			$res ["message"] = "not valid alternate name";
		}
		
		return $res;
	}
	function altmobileNumberValidate($mobile) {
		$res = array ();
		
		$regex = '/^[7-9]{1}[0-9]{9}$/';
		
		if (preg_match ( $regex, $mobile )) {
			
			$res ["error"] = true;
			$res ["message"] = "valid alternate mobile number";
		} else {
			
			$res ["error"] = false;
			$res ["message"] = "not valid alternate mobile number";
		}
		
		return $res;
		
		// return $validation;
	}
	function usernameValidate($username)
	{
		$res=array();
		$regex= '/^[A-Za-z0-9]*$/';

		if (preg_match ( $regex, $username )) {
			
			$res ["error"] = true;
			$res ["message"] = "valid username";
		} else {
			
			$res ["error"] = false;
			$res ["message"] = "not valid username";
		}
		
		return $res;
	}
	function passwordValidate($password) {
		$res = array ();
		
		$regex = '/^[0-9A-Za-z!@#\$%\^\&*]*$/';
		
		if (preg_match ( $regex, $password )) {
			
			$res ["error"] = true;
			$res ["message"] = "valid password";
		} else {
			
			$res ["error"] = false;
			$res ["message"] = "not valid password";
		}
		
		return $res;
	}
	function pinValidate($pin) {
		$res = array ();
		
		$regex = '/^[1-9]{1}[0-9]{5}$/';
		
		if (preg_match ( $regex, $pin )) {
			
			$res ["error"] = true;
			$res ["message"] = "valid pin";
		} else {
			
			$res ["error"] = false;
			$res ["message"] = "not valid pin";
		}
		
		return $res;
	}
	function adharnoValidate($adharno) {
		$res = array ();
		
		$regex = '/^[2-9]{1}[0-9]{11}$/';
		
		if (preg_match ( $regex, $adharno )) {
			
			$res ["error"] = true;
			$res ["message"] = "valid adhar number";
		} else {
			
			$res ["error"] = false;
			$res ["message"] = "not valid adhar number";
		}
		
		return $res;
	}
	function vehiclenoValidate($vehicleno) {
		$res = array ();
		
		$regex = '/^[A-Z]{2}[0-9]{2}[A-Z]{1,}[0-9]{3,}$/';
		
		if (preg_match ( $regex, $vehicleno )) {
			
			$res ["error"] = true;
			$res ["message"] = "valid vehicle number";
		} else {
			
			$res ["error"] = false;
			$res ["message"] = "not valid vehicle number";
		}
		
		return $res;
	}
	function vehicleColorValidate($vehicleColor) {
		$res = array ();
		
		$regex = '/^[A-Za-z\\s]{1,}$/';
		
		if (preg_match ( $regex, $vehicleColor )) {
			
			$res ["error"] = true;
			$res ["message"] = "valid vehicle colour";
		} else {
			
			$res ["error"] = false;
			$res ["message"] = "not valid vehicle colour";
		}
		
		return $res;
	}
	function driverlicenceValidate($driverlicence) {
		$res = array ();
		
		$regex = '/^[A-Z]{2}[0-9]{13}$/';
		
		if (preg_match ( $regex, $driverlicence )) {
			
			$res ["error"] = true;
			$res ["message"] = "valid driver licence number";
		} else {
			
			$res ["error"] = false;
			$res ["message"] = "not valid driver licence number";
		}
		
		return $res;
	}
	function vehicleModelValidate($vehicleModel) {
		$res = array ();
		
		$regex = '/^[A-Za-z0-9\\s]{1,}$/';
		
		if (preg_match ( $regex, $vehicleModel )) {
			
			$res ["error"] = true;
			$res ["message"] = "valid vehicle model";
		} else {
			
			$res ["error"] = false;
			$res ["message"] = "not valid vehicle model";
		}
		
		return $res;
	}
	function checkEmpty($data) {
		$res = array ();
		
		$regex = '/^[\s]*[\s]*$/';
		
		foreach ( $data as $key ) {
			
			if (preg_match ( $regex, $key )) {
				
				$res ["error"] = false;
				$res ["message"] = "blank data";
				break;
			} else {
				$res ["error"] = true;
				$res ["message"] = "no blank data";
			}
		}
		
		return $res;
	}
	function otpValidate($otp) {
		$res = array ();
		
		$regex = '/^[0-9]{4}$/';
		
		if (preg_match ( $regex, $otp )) {
			
			$res ["error"] = true;
			$res ["message"] = "valid otp";
		} else {
			
			$res ["error"] = false;
			$res ["message"] = "otp should be 4 digit";
		}
		
		return $res;
	}
	function numericalData($number) {
		$res = array ();
		
		if (is_numeric ( $number )) {
			
			$res ["error"] = true;
			$res ["message"] = "valid number ";
		} else {
			
			$res ["error"] = false;
			$res ["message"] = "not valid booking id";
		}
		
		return $res;
	}
}