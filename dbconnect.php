<?
	interface DBConnect
	{
		const hostname = 'localhost';
		const username = 'root';
		const password = '';
		const dbname = 'db_booking';

		public static function connect();
	}
?>