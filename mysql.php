<?
	class Mysql implements dbconnect
	{
		private static $host = DBConnect::hostname;
		private static $user = DBConnect::username;
		private static $pwd = DBConnect::password;
		private static $db = DBConnect::dbname;
		private static $conn_string;

		public static function connect()
		{
			if(self::$conn_string = mysqli_connect(self::$host,self::$user,self::$pwd,self::$db))
				return self::$conn_string;
			else
				die('Error while connecting to database !!');
		}

		public function getRow($sql)
		{
			if($query = mysqli_query(self::connect(),$sql))
			{
				return mysqli_fetch_assoc($query);
			}
		}
	}
?>