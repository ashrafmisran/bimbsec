<?php
	//Retrieve data from form
	$message = $_POST['message'];
	$category= $_POST['category'];
	$from 	 = $_POST['email'];
	$name	 = $_POST['name'];
	switch ($category){
	    case 'Account Opening':
	        $to = 'retail@bimbsec.com.my';
	        $cc = 'helpdesk@bimbsec.com.my';
	    case 'Shariah':
	        $to = 'ashrafmisran@gmail.com';
	        $cc = 'm.ashraf@bimbsec.com.my';
	    case 'Deposit / Withdrawal':
	        $to = 'ccsmargin@bimbsec.com.my';
	        $cc = 'helpdesk@bimbsec.com.my';
	    default:
	        $to = 'helpdesk@bimbsec.com.my';
	}
	$subject = 'Email ('.$category.') from '.$name.' via Website';
	$headers = 'From: '.$from;
	$headers.= '\r\nCc: '.$cc;

	mail($to, $subject, $message, $headers);

	$_SESSION['noti'] = 'Success';
	header('Location: http://bimbintranet/bimbsec_dev');
?>