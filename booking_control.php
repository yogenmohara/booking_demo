<?
	class Booking_control
	{
		private $code;
		public $book_date;
		public $cust_name;
		public $cust_phone;
		public $cust_email;


		public function __construct($code = '')
		{
			$this -> code = $code;
		}		

		public function getBookingDetails()
		{
			if($this -> code != '')
			{
				$booking = Booking_model::getBooking($this -> code);
				$this -> book_date = $booking['book_date'];
				$this -> cust_name = $booking['cust_name'];
				$this -> cust_phone = $booking['cust_phone'];
				$this -> cust_email = $booking['cust_email'];

				return $this;
			}
		}

	}
?>