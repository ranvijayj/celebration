<?php

class FileInfo{
	
}

class FileSystemInfo{
var $any;//<anyXML>
var $FactoryType;//QName
}
class SmsInputs{
var $ApplicationId;//int
var $Password;//string
var $PhoneNo;//string
var $ProviderId;//int
var $SMSBody;//string
var $Token;//string
var $UserId;//string
var $VendorId;//string
}

class Emailinfo{
var $ApplicationId;//int
var $Attachement;//string
var $FileAttachement;//ArrayOfFileAttachment
var $MailBcc;//string
var $MailCc;//string
var $MailFrom;//string
var $MailMessage;//string
var $MailSubject;//string
var $MailTo;//string
var $MailType;//string
var $Password;//string
var $SmtpId;//int
var $Token;//string
var $UserId;//string
var $VendorId;//string
}
class ArrayOfFileAttachment{
var $FileAttachment;//FileAttachment
}
class FileAttachment{
var $FileContentBase64;//string
var $Info;//FileInfo
}
class SmsVerificationCodeDetail{
var $SmsResponse;//string
var $SmsVerificationId;//long
var $VerificationCode;//string
}
class SmsVerificationCodeInput{
var $SmsVerificationId;//long
}

class SendSMS{
var $smsinfo;//SmsInputs
}
class SendSMSResponse{
var $SendSMSResult;//string
}
class SendSMSByParameters{
var $userId;//string
var $password;//string
var $token;//string
var $applicationId;//int
var $vendorId;//string
var $phoneNo;//string
var $smsBody;//string
var $providerId;//int
}
class SendSMSByParametersResponse{
var $SendSMSByParametersResult;//string
}
class SendEmail{
var $emlinfo;//Emailinfo
}
class SendEmailResponse{
var $SendEmailResult;//string
}
class SendVerificationCode{
var $smsinputs;//SmsInputs
}
class SendVerificationCodeResponse{
var $SendVerificationCodeResult;//SmsVerificationCodeDetail
}
class UpdateVerificationCodeStatus{
var $smsVerificationCodeinput;//SmsVerificationCodeInput
}
class UpdateVerificationCodeStatusResponse{
var $UpdateVerificationCodeStatusResult;//UpdateVerificationCodeStatus
}
class getit_notifications 
 {
 var $soapClient;
 
private static $classmap = array('FileInfo'=>'FileInfo'
,'FileSystemInfo'=>'FileSystemInfo'
,'SmsInputs'=>'SmsInputs'
,'Emailinfo'=>'Emailinfo'
,'ArrayOfFileAttachment'=>'ArrayOfFileAttachment'
,'FileAttachment'=>'FileAttachment'
,'SmsVerificationCodeDetail'=>'SmsVerificationCodeDetail'
,'SmsVerificationCodeInput'=>'SmsVerificationCodeInput'
,'UpdateVerificationCodeStatus'=>'UpdateVerificationCodeStatus'
,'SendSMS'=>'SendSMS'
,'SendSMSResponse'=>'SendSMSResponse'
,'SendSMSByParameters'=>'SendSMSByParameters'
,'SendSMSByParametersResponse'=>'SendSMSByParametersResponse'
,'SendEmail'=>'SendEmail'
,'SendEmailResponse'=>'SendEmailResponse'
,'SendVerificationCode'=>'SendVerificationCode'
,'SendVerificationCodeResponse'=>'SendVerificationCodeResponse'
,'UpdateVerificationCodeStatus'=>'UpdateVerificationCodeStatus'
,'UpdateVerificationCodeStatusResponse'=>'UpdateVerificationCodeStatusResponse'

);

 function __construct($url='http://notificationservice.getit.in/NotificationService.svc?wsdl')
 {
  $this->soapClient = new SoapClient($url,array("classmap"=>self::$classmap,"trace" => true,"exceptions" => true));
 }
 
function SendSMS($SendSMS)
{

$SendSMSResponse = $this->soapClient->SendSMS($SendSMS);
return $SendSMSResponse;
}

function SendSMSByParameters($SendSMSByParameters)
{

$SendSMSByParametersResponse = $this->soapClient->SendSMSByParameters($SendSMSByParameters);
return $SendSMSByParametersResponse;

}
function SendEmail($SendEmail)
{

$SendEmailResponse = $this->soapClient->SendEmail($SendEmail);
return $SendEmailResponse;

}
function SendVerificationCode($SendVerificationCode)
{

$SendVerificationCodeResponse = $this->soapClient->SendVerificationCode($SendVerificationCode);
return $SendVerificationCodeResponse;

}
function UpdateVerificationCodeStatus($UpdateVerificationCodeStatus)
{

$UpdateVerificationCodeStatusResponse = $this->soapClient->UpdateVerificationCodeStatus($UpdateVerificationCodeStatus);
return $UpdateVerificationCodeStatusResponse;

}}


?>