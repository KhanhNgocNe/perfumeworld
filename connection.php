<?php
$conn = pg_connect("postgres://sfdaznhoxgmsiq:0e4555d493aedc569a6726bb2e4895b150e651f8b48918c1409c506ca5af1a76@ec2-52-200-155-213.compute-1.amazonaws.com:5432/ddvrq2iq529clf");
	echo 'Connected Successfully!!!';
	if(!$conn)
	{
		die("Could not connect to database");
	}
?>