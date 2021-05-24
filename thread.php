
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Доска объявлений</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.2/css/bulma.min.css">
</head>
<body>	
        <?php
		$mysqli = new mysqli("localhost", "root", "", "forum");
		$result = $mysqli->query("SELECT * FROM threads");
		while ($row = $result->fetch_assoc())
		{
		echo $row['big_title']."<br>";
		echo $row['little_title']."<br>";
		echo "==========================";
		}
		$result->free();
		$mysqli->close();
		?>
</body>
</html>

