<meta charset="utf-8" />
<?php
  $connect = mysql_connect('localhost', 'ourdream1', 'dpffh123');
  $db = mysql_select_db('ourdream1', $connect);

  $id = $_POST['user_id'];
  $pw = $_POST['user_pw'];
  $pw2 = $_POST['user_pw2'];
  $address = $_POST['user_address'];
  $year = $_POST['user_birth_year'];
  $month = $_POST['user_birth_month'];
  $day = $_POST['user_birth_day'];

  $sql = "INSERT into login VALUES(null, '$id','$pw','$address','$year','$month','$day')";
  $result = mysql_query($sql, $connect);

  $sql = "SELECT * from login WHERE id='$id'";
  $result = mysql_query($sql, $connect);
  $num = mysql_num_rows($result);

  if($num){
    echo "<script>alert('회원가입 성공');</script>";
  }
  else {
    echo "<script>alert('회원가입 실패');</script>";
  }


?>
