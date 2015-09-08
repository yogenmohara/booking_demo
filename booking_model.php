<?
	class Booking_model extends Mysql
	{
		private $sql;

		public function getBooking($code)
		{
			$this -> sql = "select *
							from tbl_booking 
							where code=".$code;

			return parent::getRow($this -> sql);
		}

	}
?>