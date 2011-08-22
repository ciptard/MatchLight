<?php
/**
 * Response Messages
 * 
 * These messages return something that could be meaningful in a log message or to a user.
*/
$lang = array (
	'response_message_not_a_module'									=>	'The payment module provided is not valid.',
	'response_message_invalid_input' 								=>	'The input provided is not in the correct format',
	'response_message_invalid_date_params'							=>	'Units of time must be called "Year", "Month", or "Day"',
	'response_message_not_a_method'									=>	'The method called does not exist',
	'response_message_required_params_missing'						=>	'Some required parameters have been omitted.',
	
	//Payment Methods
	'response_message_authorize_payment_success'						=>	'The authorization was successful.',
	'response_message_authorize_payment_local_failure'				=>	'The authorization was not sent to the payment gateway because it failed validation.',	
	'response_message_authorize_payment_gateway_failure'				=>	'The authorization was declined by the payment gateway.',	
	'response_message_oneoff_payment_success'						=>	'The payment was successful.',
	'response_message_oneoff_payment_local_failure'					=>	'The payment could not be sent to the payment gateway because it failed local validation.',
	'response_message_oneoff_payment_gateway_failure'				=>	'The payment was declined by the payment gateway.',
	'response_message_capture_payment_success'						=>	'The payment capture was successful.',
	'response_message_capture_payment_local_failure'					=>	'The payment capture could not be sent to the payment gateway because it failed local validation.',
	'response_message_capture_payment_gateway_failure'				=>	'The payment capture was declined by the gateway.',
	'response_message_void_payment_success'							=>	'The payment was voided successfully.',
	'response_message_void_payment_local_failure'					=>	'The void request could not be sent to the payment gateway because it failed local validation.',
	'response_message_void_payment_gateway_failure'					=>	'The void request was rejected by the payment gateway.',
	'response_message_get_transaction_details_success'				=>	'Transaction details returned successfully.',
	'response_message_get_transaction_details_local_failure'			=>	'Transaction details were not requested from the payment gateway because local validation failed.',
	'response_message_get_transaction_details_gateway_failure'		=>	'Transaction details could not be retrieved by the payment gateway.',
	'response_message_change_transaction_status_success'				=>	'Transaction status was changed successfully.',
	'response_message_change_transaction_status_local_failure'		=>	'Transaction status could not be requested from the payment gateway because local validation failed.',	
	'response_message_change_transaction_status_gateway_failure'		=>	'Transaction status could not retrieved from the payment gateway.',
	'response_message_refund_payment_success'						=>	'Refund has been made.',
	'response_message_refund_payment_local_failure'					=>	'Refund request could not be sent to the payment gateway because local validation failed.',
	'response_message_refund_payment_gateway_failure'				=>	'Refund request was declined by the payment gateway.',	
	'response_message_search_transactions_success'					=>	'Transaction information successfully retrieved.',
	'response_message_search_transactions_local_failure'				=>	'Transaction search request could not be sent to the payment gateway because local validation failed',
	'response_message_search_transactions_gateway_failure'			=>	'Transaction search failed.',	
	'response_message_recurring_payment_success'						=>	'Recurring payments successfully initiated.',
	'response_message_recurring_payment_local_failure'				=>	'Recurring payment request could not be sent to the payment gateway because local validation failed.',	
	'response_message_recurring_payment_gateway_failure'				=>	'Recurring payment was declined by the payment gateway.',		
	'response_message_get_recurring_profile_success'					=>	'Recurring profile successfully retrieved.',
	'response_message_get_recurring_profile_local_failure'			=>	'Recurring profile could not be retrieved from the payment gateway because local validation failed.',
	'response_message_get_recurring_profile_gateway_failure'			=>	'Recurring profile could not be retrieved by the payment gateway.',		
	'response_message_suspend_recurring_profile_success'				=>	'Recurring profile successfully suspended.',
	'response_message_suspend_recurring_profile_local_failure'		=>	'Recurring profile suspension request could not be sent to the payment gateway because local validation failed.',
	'response_message_suspend_recurring_profile_gateway_failure'		=>	'Recurring profile could not be suspended by the payment gateway.',		
	'response_message_activate_recurring_profile_success'			=>	'Recurring profile successfully activated.',
	'response_message_activate_recurring_profile_local_failure'		=>	'Recurring profile activation request could not be sent to the payment gateway because local validation failed.',
	'response_message_activate_recurring_profile_gateway_failure'	=>	'Recurring profile could not be activated by the payment gateway.',		
	'response_message_cancel_recurring_profile_success'				=>	'Recurring profile cancelled successfully.',
	'response_message_cancel_recurring_profile_local_failure'		=>	'Recurring profile cancellation request could not be sent to the payment gateway because local validation failed.',
	'response_message_cancel_recurring_profile_gateway_failure'		=>	'Recurring profile could not be cancelled by the payment gateway.',		
	'response_message_recurring_bill_outstanding_success'			=>	'Outstanding bill amount successfully billed.',
	'response_message_recurring_bill_outstanding_local_failure'		=>	'Outstanding bill request could not be sent to the payment gateway because local validation failed.',
	'response_message_recurring_bill_outstanding_gateway_failure'	=>	'Outstanding bill request was rejected by the payment gateway.',		
	'response_message_update_recurring_profile_success'				=>	'Recurring profile updated successfully.',
	'response_message_update_recurring_profile_local_failure'		=>	'Recurring profile update request could not be sent to the payment gateway because local validation failed.',
	'response_message_update_recurring_profile_gateway_failure'		=>	'Recurring profile update was rejected by the payment gateway.',		
);