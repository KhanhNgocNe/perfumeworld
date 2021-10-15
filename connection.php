<?php
$conn = pg_connect("postgres://atrtvpahulshsq:c60ed240116df3b35ee51f04b977d962220c770a0eddd939fd70905e0e96b79a@ec2-34-203-91-150.compute-1.amazonaws.com:5432/dcvc7cnl1eepc");
	echo 'Connected Successfully!!!';
	if(!$conn)
	{
		die("Could not connect to database");
	}
?>