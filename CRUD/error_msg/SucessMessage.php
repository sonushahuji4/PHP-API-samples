<?php

//namespace error_msg;

class SucessMessage {
	function messagetype($message) {
		$response = array ();
		$response ['error'] = FALSE;
		$response ['message'] = $message;
		
		return $response;
	}
	function LoginSuccess()
	{
		$message = "Successful Login";
		$result = SucessMessage::messagetype ( $message );
		return $result;
	}
	function UserCreatedSuccess()
	{
		$message = "User registered Successfully";
		$result = SucessMessage::messagetype ( $message );
		return $result;
	}
	function otpSucessMessage() {
		$message = "OTP sent sucessful";
		$result = SucessMessage::messagetype ( $message );
		return $result;
	}
	function otpSucesstoNumberMessage($sendMobile) {
		$message = "OTP sent successfull to $sendMobile";
		$result = SucessMessage::messagetype ( $message );
		return $result;
	}
	function getErrorFalse() {
		$response = array ();
		$response ['error'] = FALSE;
		return $response;
	}
	function sucessfullPasswordUpdate() {
		$message = "Successfully password Updated";
		$result = SucessMessage::messagetype ( $message );
		return $result;
	}
	function priceCalculationSuccessMessage() {
		$message = "Price Calculation Success";
		$result = SucessMessage::messagetype ( $message );
		return $result;
	}
	function sucesFullUpdated() {
		$message = "Successful updated";
		$result = SucessMessage::messagetype ( $message );
		return $result;
	}
	function sucessFullUpdated($msg) {
		$message = "Successful updated $msg";
		$result = SucessMessage::messagetype ( $message );
		return $result;
	}
	function ratingStoreSucess() {
		$message = "Rating stored successfull !";
		$result = SucessMessage::messagetype ( $message );
		return $result;
	}
	function statusOfdriver($status) {
		$message = "Rating stored successfull !";
		$result = SucessMessage::messagetype ( $message );
		return $result;
	}
	function distanceCalculation() {
		$message = "distance Calculation Success";
		$result = SucessMessage::messagetype ( $message );
		return $result;
	}
	function priceUpdation() {
		$message = "actual price update success";
		$result = SucessMessage::messagetype ( $message );
		return $result;
	}
	function bookingCancellationSucess() {
		$message = "Booking Cancellation success";
		$result = SucessMessage::messagetype ( $message );
		return $result;
	}
	function driverStatusSucess() {
		$message = "driver status success";
		$result = SucessMessage::messagetype ( $message );
		return $result;
	}
	function notificationSucess() {
		$message = "notification success";
		$result = SucessMessage::messagetype ( $message );
		return $result;
	}
	function cancellationSucess() {
		$message = "CANCELLATION FROM PASSENGER DONE !";
		$result = SucessMessage::messagetype ( $message );
		return $result;
	}
	function driverNameAndAvailablitySucess() {
		$message = "Driver availability, name and mobile number update and notification success";
		$result = SucessMessage::messagetype ( $message );
		return $result;
	}
	function noResponsefromDriver() {
		$message = "no response from driver";
		$result = SucessMessage::messagetype ( $message );
		return $result;
	}
	function mailSentSucess() {
		$message = "mail sent sucessful";
		$result = SucessMessage::messagetype ( $message );
		return $result;
	}
	function userNotBlock() {
		$message = "you are not blocked";
		$result = SucessMessage::messagetype ( $message );
		return $result;
	}
	function sucessFullyStored() {
		$message = "sucessfully  stored";
		$result = SucessMessage::messagetype ( $message );
		return $result;
	}
	function sucesfullDeleted() {
		$message = "sucessfully  deleted";
		$result = SucessMessage::messagetype ( $message );
		return $result;
	}
	function complaintRegister() {
		$message = "compliant registered sucessfull";
		$result = SucessMessage::messagetype ( $message );
		return $result;
	}
	function canceled() {
		$message = "cancellation sucessfull !";
		$result = SucessMessage::messagetype ( $message );
		return $result;
	}
	function taxDataSucess(){
		$message = "tax Calculation sucessfull !";
		$result = SucessMessage::messagetype ( $message );
		return $result;
	}
}

