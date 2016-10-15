<?php

	class yanzheng
	{
		public function show()
		{
			echo 'hello word';
		}

		public function checksesson($sesson)
		{
			if (!isset($sesson))
				{
					echo '您无权访问该页,<b><a href="../index.php">点击返回</a></b>';
					exit();
				}
	
		}

	}

?>