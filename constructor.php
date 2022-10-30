<?php
	class bankaccount
	{
		public $balance;
		public $accountnumber;
		
		function __construct($balance,$accountnumber)
		{
			$this->balance=$balance;
			$this->accountnumber=$accountnumber;
		}
		
		function get_balance()
		{
			return $this->balance;
		}
		function get_accountnumber()
		{
			return $this->accountnumber;
		}
	}
	$myaccount=new bankaccount("15000","7284858743");
	
	echo $myaccount->get_balance();
	echo "<br>"	;
	echo $myaccount->get_accountnumber();

?>