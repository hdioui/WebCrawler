<?php
	
	class News {
		private $conn;
		private $date;

		public function __construct() {
			$this->conn = new mysqli("localhost", "root" , "root", "test");
			$today = gettimeofday();
			$this->date = date('Y-n-j', $today['sec']);
		}

		public function update_todayNews($title, $url, $auth) {
			$today = gettimeofday();
			$time = date('Y-n-j', $today['sec']);
			$sql = "SELECT * FROM `news` WHERE add_date='$time' AND title='$title'";
			$result = $this->conn->query($sql);
			if($result->num_rows == 0) {
				$sql = "INSERT INTO `news` VALUES ('', '$title', '$url', '$auth', '$time')";
				if($this->conn->query($sql)) {
					return TRUE;
				}
				else {
					return FALSE;
				}
			}
			else {
				return FALSE;
			}
		}

		public function get_news($auth) {
			$today = gettimeofday();
			$time = date('Y-n-j', $today['sec']);
			$sql = "SELECT * FROM `news` WHERE auth='$auth' AND add_date='$time'";
			$result = $this->conn->query($sql);
			return $result->fetch_all();
		}

	}

/*
	End of the class news
*/