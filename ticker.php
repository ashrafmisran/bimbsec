<?php
	$y = new YahooFinanceAPI;
$tickers = array('SLV','GLD');
$data = $y->api($tickers);
?>