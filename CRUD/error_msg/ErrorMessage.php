<?php

//namespace error_msg;

class ErrorMessage {
	function errortype($message) {
		$response = array ();
		$response ['error'] = TRUE;
		$response ['error_msg'] = $message;
		
		return $response;
	}
	function getOnlyErrorTrue() {
	    $response = array ();
		$response ['error'] = TRUE;
		return $response;
	}
	function RegisterationError()
	{
		$message = "Error While Registrating";
		$result = ErrorMessage::errortype ( $message );
		return $result;
	}
	function alreadyExitsUser()
	{
		$message = "User Aleardy Exits";
		$result = ErrorMessage::errortype ( $message );
		return $result;
	}
	function InvalidEmail()
	{
		$message = "Invalid Email";
		$result = ErrorMessage::errortype ( $message );
		return $result;
	}
	function InvalidName()
	{
		$message = "Invalid Name";
		$result = ErrorMessage::errortype ( $message );
		return $result;
	}
	function LoginFail()
	{
		$message = "Login Failed";
		$result = ErrorMessage::errortype ( $message );
		return $result;
	}
	function InvalidUsername()
	{
		$message = "Invalid Username";
		$result = ErrorMessage::errortype ( $message );
		return $result;
	}
	function invalidMobileNumber() {
		$message = "Invalid Mobile Number";
		$result = ErrorMessage::errortype ( $message );
		return $result;
	}
	function InvalidPassword()
	{
		$message = "Invalid Password";
		$result = ErrorMessage::errortype ( $message );
		return $result;
	}
	function getRequiredParameterMessage() {
		$message = "Required some parameter is missing!";
		$result = ErrorMessage::errortype ( $message );
		return $result;
	}
	function pleaseFillAllDataMessage() {
		$message = "Please fill all the parameter !";
		$result = ErrorMessage::errortype ( $message );
		return $result;
	}
	function loginCredentialMessage() {
		$message = "Please enter the valid credentials";
		$result = ErrorMessage::errortype ( $message );
		return $result;
	}
	function allReadyRegisterMessage($mobile, $type) {
		$message = "$mobile already registered as $type";
		$result = ErrorMessage::errortype ( $message );
		return $result;
	}
	function otpSendingFailedMessage() {
		$message = "OTP sending failed";
		$result = ErrorMessage::errortype ( $message );
		return $result;
	}
	function registrationFaildMessage() {
		$message = "Registration failed please try after some time.";
		$result = ErrorMessage::errortype ( $message );
		return $result;
	}
	function bookingDetailsNotFoundMessage() {
		$message = "Booking details not found";
		$result = ErrorMessage::errortype ( $message );
		return $result;
	}
	function mobileNumberMissing() {
		$message = "mobile number is missing";
		$result = ErrorMessage::errortype ( $message );
		return $result;
	}
	function invalidMobileOrPasswordMessage() {
		$message = "Invalid mobile or password";
		$result = ErrorMessage::errortype ( $message );
		return $result;
	}
	function invalidCurrentPasswordMessage() {
		$message = "Invalid current password";
		$result = ErrorMessage::errortype ( $message );
		return $result;
	}
	function sameOldandNewPassword() {
		$message = "You can not enter current password equal to new password";
		$result = ErrorMessage::errortype ( $message );
		return $result;
	}
	function tryAgain() {
		$message = "Please try again";
		$result = ErrorMessage::errortype ( $message );
		return $result;
	}
	function mobileNumberNotregister() {
		$message = "Your Mobile number is not registered!";
		$result = ErrorMessage::errortype ( $message );
		return $result;
	}
	function otpMissing() {
		$message = "OTP number is missing!";
		$result = ErrorMessage::errortype ( $message );
		return $result;
	}
	function driverNotFound() {
		$message = "Drivers not found nearby, Please try again";
		$result = ErrorMessage::errortype ( $message );
		return $result;
	}
	function profileDetails() {
		$message = "This mobile profile details not found";
		$result = ErrorMessage::errortype ( $message );
		return $result;
	}
	function bookingIdIsMissing() {
		$message = "booking id is missing";
		$result = ErrorMessage::errortype ( $message );
		return $result;
	}
	function driverIdNotFound() {
		$message = "Driver id Not found !";
		$result = ErrorMessage::errortype ( $message );
		return $result;
	}
	function feedBackError() {
		$message = "feedback error !";
		$result = ErrorMessage::errortype ( $message );
		return $result;
	}
	function passengerIdNotFound() {
		$message = "Passenger Id Not found !";
		$result = ErrorMessage::errortype ( $message );
		return $result;
	}
	function otpWrong() {
		$message = "Please enter correct otp";
		$result = ErrorMessage::errortype ( $message );
		return $result;
	}
	function PasswordUpdationFailed() {
		$message = "Password updation failed";
		$result = ErrorMessage::errortype ( $message );
		return $result;
	}
	function locationUpdate() {
		$message = "Please Wait Your Location is Updating...";
		$result = ErrorMessage::errortype ( $message );
		return $result;
	}
	function driverLocationUpdate() {
		$message = "Driver Location updation failed";
		$result = ErrorMessage::errortype ( $message );
		return $result;
	}
	function getDriverLocation() {
		$message = "location of driver not found";
		$result = ErrorMessage::errortype ( $message );
		return $result;
	}
	function distanceIsTooLong() {
		$message = "service is not available.";
		$result = ErrorMessage::errortype ( $message );
		return $result;
	}
	function distanceAndTimeNotFound() {
		$message = "Distance and Time not found";
		$result = ErrorMessage::errortype ( $message );
		return $result;
	}
	function pleaseSelectVehicleType() {
		$message = "Please select proper vehicle type";
		$result = ErrorMessage::errortype ( $message );
		return $result;
	}
	function dbDownErrorMessage() {
		$message = "currently database is down you can try after some time...!";
		$result = ErrorMessage::errortype ( $message );
		return $result;
	}
	function priceUpdationError() {
		$message = "actual price updation error..!";
		$result = ErrorMessage::errortype ( $message );
		return $result;
	}
	function advanceBookingNotFound() {
		$message = "advance booking not found";
		$result = ErrorMessage::errortype ( $message );
		return $result;
	}
	function bookingCancellationFailed() {
		$message = "Booking Cancellation Failed.";
		$result = ErrorMessage::errortype ( $message );
		return $result;
	}
	function invalidDriver() {
		$message = "invalid driver";
		$result = ErrorMessage::errortype ( $message );
		return $result;
	}
	function passengerNotFound() {
		$message = "passenger not found";
		$result = ErrorMessage::errortype ( $message );
		return $result;
	}
	function invalidrequest() {
		$message = "invalid request";
		$result = ErrorMessage::errortype ( $message );
		return $result;
	}
	function notificationError() {
		$message = "notification error, could not sent";
		$result = ErrorMessage::errortype ( $message );
		return $result;
	}
	function rideStatusErro() {
		$message = "ride status error";
		$result = ErrorMessage::errortype ( $message );
		return $result;
	}
	function bookingStatusErro() {
		$message = "booking status error";
		$result = ErrorMessage::errortype ( $message );
		return $result;
	}
	function driverStatusError() {
		$message = "driver status error";
		$result = ErrorMessage::errortype ( $message );
		return $result;
	}
	function readTrackUpdation() {
		$message = "read track status error";
		$result = ErrorMessage::errortype ( $message );
		return $result;
	}
	function driverNameAndMobileAvailabiltyError() {
		$message = "Driver name and mobile number updated but availability update error";
		$result = ErrorMessage::errortype ( $message );
		return $result;
	}
	function tokenGenerationError() {
		$message = "token not found";
		$result = ErrorMessage::errortype ( $message );
		return $result;
	}
	function updationfailed() {
		$message = "updation failed";
		$result = ErrorMessage::errortype ( $message );
		return $result;
	}
	function completeCurrentride() {
		$message = "Sorry..! You have to complete current Ride";
		$result = ErrorMessage::errortype ( $message );
		return $result;
	}
	function pleaseEnterCorrecttoken() {
		$message = "Please Enter the Correct Token";
		$result = ErrorMessage::errortype ( $message );
		return $result;
	}
	function emailSendingFailed() {
		$message = "Mail Could not be send";
		$result = ErrorMessage::errortype ( $message );
		return $result;
	}
	function userBlocked() {
		$message = "you are blocked , please contact admin";
		$result = ErrorMessage::errortype ( $message );
		return $result;
	}
	function favoritesNotFound() {
		$message = "favorites not found";
		$result = ErrorMessage::errortype ( $message );
		return $result;
	}
	function maximumLimit() {
		$message = "you have reached maximum limit";
		$result = ErrorMessage::errortype ( $message );
		return $result;
	}
	function addressNotFound() {
		$message = "address not found or deletion failed";
		$result = ErrorMessage::errortype ( $message );
		return $result;
	}
	function addressIdIsMissing() {
		$message = "address id is missing";
		$result = ErrorMessage::errortype ( $message );
		return $result;
	}
	function vehicleNotFound() {
		$result = array (
				"distance" => "not found",
				"time" => "not found" 
		);
		return $result;
	}
	function complaintRegistrationFialed() {
		$message = "complaint registration failed, please try after some time ";
		$result = ErrorMessage::errortype ( $message );
		return $result;
	}
	function complaintAllreadyRegistered() {
		$message = "complaint already registerd on this booking id, we will get back to you soon. ";
		$result = ErrorMessage::errortype ( $message );
		return $result;
	}
	function pleaseEnterTheComment() {
		$message = "Please enter the complaint !";
		$result = ErrorMessage::errortype ( $message );
		return $result;
	}
	function meterCalculationFailed() {
		$message = "Meter calculation error, Please try again !";
		$result = ErrorMessage::errortype ( $message );
		return $result;
	}
	function technicalError() {
		$message = "Please complete the ride !";
		$result = ErrorMessage::errortype ( $message );
		return $result;
	}
	function paymentError($message) {
		$message = "M3 Payment Error ".$message;
		$result = ErrorMessage::errortype ( $message );
		return $result;
	}
}

