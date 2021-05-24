  <?php
  $hostname="localhost";
    $username="root";
    $password="";
    $dbname="forum";
    
    
    $conn = mysqli_connect($hostname, $username, $password, $dbname);
if (!$conn) {
    die("Не удалось подкючиться к БД: " . mysqli_connect_error());
}
$query2 = ("INSERT INTO `thread` (`date`, `little_title`, `big_title`) VALUES ('2020-02-02', '{$_POST['little']}', '{$_POST['big']}')");
    $res2 = mysqli_query($conn,$query2);
    echo "aye";
    ?>
