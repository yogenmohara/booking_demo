<?
	require('dbconnect.php');
	require('mysql.php');
	require('booking_model.php');
	require('booking_control.php');

	if(isset($_GET['booking_code']))
	{
		$book = new Booking_control($_GET['booking_code']);
		$info = $book -> getBookingDetails();

		echo "<h2>Booking Details</h2>";
		echo "Date: ".$info -> book_date."<br>";
		echo "Customer Name: ".$info -> cust_name."<br>";
		echo "Phone: ".$info -> cust_phone."<br>";
		echo "Email: ".$info -> cust_email."<br>";
	}
?>