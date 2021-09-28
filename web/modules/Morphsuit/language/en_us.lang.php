<?php
/*************************************
 * SPDX-FileCopyrightText: 2009-2020 Vtenext S.r.l. <info@vtenext.com> 
 * SPDX-License-Identifier: AGPL-3.0-only  
 ************************************/
global $enterprise_website;
$mod_strings = array(
	'LBL_MORPHSUIT_ACTIVATION'=>'Activation',
	'LBL_MORPHSUIT_TIME_EXPIRED'=>'You have to activate VTE.',
	'LBL_MORPHSUIT_EMAIL'=>'Email',
	'LBL_MORPHSUIT_INSTALLATION_TYPE'=>'Installation type',
	'LBL_MORPHSUIT_PROD'=>'Production',
	'LBL_MORPHSUIT_TEST'=>'Test',
	'LBL_MORPHSUIT_DEMO'=>'Demo',
	'LBL_MORPHSUIT_INSTALLATION_LENGTH'=>'Installation duration',
	'LBL_MORPHSUIT_1Y'=>'1 year',
	'LBL_MORPHSUIT_6M'=>'6 months',
	'LBL_MORPHSUIT_30D'=>'30 days',
	'LBL_MORPHSUIT_15D'=>'15 days',
	'LBL_MORPHSUIT_1D'=>'1 day',
	'LBL_MORPHSUIT_LATER'=>'Later',
	'LBL_MORPHSUIT_PREVIOUS'=>'Previous',
	'LBL_MORPHSUIT_NEXT'=>'Next',
	'LBL_MORPHSUIT_ACTIVATE'=>'Activate',
	'LBL_MORPHSUIT_SEND_REQUEST'=>'Send Key',
	'LBL_MORPHSUIT_KEY'=>'Activation key',
	'LBL_MORPHSUIT_DESCRIPTION'=>'Send the activation key to %s. You will receive the activation code to paste below.',
	'LBL_MORPHSUIT_KEY_EMPTY'=>'The key is empty.',
	'LBL_MORPHSUIT_CODE'=>'Past here the Activation code',
	'LBL_MORPHSUIT_CODE_EMPTY'=>'The activation code is empty.',
	'LBL_MORPHSUIT_CODE_RIGHT'=>'The activation code is right!\nClick OK to proceed.',
	'LBL_MORPHSUIT_CODE_WRONG'=>'Invalid activation key',
	'LBL_MORPHSUIT_CODE_WRONG_TIME_EXPIRED'=>'Obsolete activation key',
	'LBL_MORPHSUIT_ACTIVATION_MAIL_ERROR'=>'I was unable to send the request, please send an email with the activation key',
	'LBL_MORPHSUIT_ACTIVATION_MAIL_OK'=>'Mail has been sent to VTECRM Network service, check your inbox for the activation key.',
	'LBL_MORPHSUIT_USER_NUMBER'=>'Number of users',
	'LBL_MORPHSUIT_USER_NUMBER_DESCR'=>'Leave it blank for unlimited users.',
	'LBL_MORPHSUIT_USER_NUMBER_EXCEEDED'=>'Number of users exceeded the limit. Request a new license at your administrator.',
	'LICENSE_ID'=>'License number',
	'LBL_MORPHSUIT_NEW_LICENSE_REGISTRATION'=>'Do you want to save the new license now?',
	'LBL_VTE_FREE_OK'=>'VTE activation done.',
	'LBL_ERROR_VTE_FREE'=>'Error VTE Free',
	'LBL_ERROR_VTE_FREE_CONNECTION'=>'Error server. Send a mail to info@crmvillage.biz.',
	'LBL_ERROR_VTE_FREE_CHECK'=>'Error key. Verify number of  active users.',
	'LBL_FREE'=>'Free',
	'LBL_MORPHSUIT_USER_NUMBER_EXCEEDED_FREE'=>'Number of users exceeded the Free version. Click \'OK\' if you want to upgrade to the Standard version of VTE.',
	'LBL_MORPHSUIT_USER_NUMBER_5'=>'5',
	'LBL_MORPHSUIT_USER_NUMBER_10'=>'10',
	'LBL_MORPHSUIT_USER_NUMBER_20'=>'20',
	'LBL_MORPHSUIT_USER_NUMBER_50'=>'50',
	'LBL_MORPHSUIT_USER_NUMBER_100'=>'100',
	'LBL_MORPHSUIT_USER_NUMBER_200'=>'200',
	'LBL_MORPHSUIT_USER_NUMBER_UNLIMITED'=>'Unlimited',
	'LBL_AVAILABLE_USERS'=>'Available users: ',
	'LBL_AVAILABLE_VERSION_TITLE'=>'VTE Update',
	'LBL_AVAILABLE_VERSION_TEXT'=>'There is a new version of VTE.',
	'LBL_AVAILABLE_VERSION_UPDATE'=>'Update now',
	'LBL_ERROR_VTE_REGISTRATION'=>'You have to sign up to www.crmvillage.biz',
	'LBL_ERROR_SMTP'=>'You have not yet set up an Outgoing Mail Server (SMTP). It is necessary for the recovery password function. Do you want to do now?',
	'LBL_FUNCTION_BLOCKED'=>'This function is only available in VTE ONSITE BUSINESS. If you want to continue and upgrade, please contact CRMVILLAGE at %s. Please specify how many users you want to enable.',
	'LBL_MORPHSUIT_ROLE_NUMBER_EXCEEDED'=>'You have exceeded the number of roles available in the FREE version.',
	'LBL_MORPHSUIT_PROFILE_NUMBER_EXCEEDED'=>'You have exceeded the number of profiles available in the FREE version.',
	'LBL_MORPHSUIT_PDF_NUMBER_EXCEEDED'=>'You have exceeded the number of pdf\'s available in the FREE version.',
	'LBL_MORPHSUIT_ADV_SHARING_RULE_NUMBER_EXCEEDED'=>'You have exceeded the number of advanced sharing rules available in the FREE version.',
	'LBL_MORPHSUIT_SHARING_RULE_USER_NUMBER_EXCEEDED'=>'You have exceeded the number of sharing rules owner based available in the FREE version.',
	'LBL_MORPHSUIT_UPDATE'=>'License upgrade',
	'LBL_ERROR_VTE_FREE_NOT_ACTIVABLE'=>'This version is no valid. Install/Update to the latest version.',
	'LBL_ZOMBIE_MODE'=>'Continue to use VTE in read-only mode',
	'LBL_CONNECT_TO_ENABLE_VTE'=>'Check the internet connection and login again to unlock VTECRM',
	'LBL_MORPHSUIT_SITE_LOGIN'=>'Insert username and password of',
	'LBL_MORPHSUIT_SITE_REGISTRATION'=>'If you are not yet registered click',
	'LBL_OTHER_FREE_VERSION'=>'Probably you have moved your VTE installation. Some functionality of this old installation is limited.',
	'LBL_MORPHSUIT_ADMIN_CONFIG'=>'Set the administrator',
	'LBL_MORPHSUIT_OVERWRITE_CREDENTIALS'=>'Admin user credentials will be overwritten by '.$enterprise_website[1].' credentials',
	'LBL_MORPHSUIT_BUSINESS_ACTIVATION'=>'You have to activate a Business On Site version.',
	'LBL_MORPHSUIT_REGISTER'=>'Register',
	'LBL_MORPH_NEWSLETTER_LANG'=>'Newsletter language',
	'ERR_REENTER_PASSWORDS'=>'Passwords do not match',
	'LBL_ACTIVATED_USERS'=>'Activated users',
	'LBL_EXPIRATION_DATE'=>'Expiration date',
	'LBL_UPDATE_YOUR_LICENSE'=>'Update your license',
);
?>