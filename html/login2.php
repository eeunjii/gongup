<?php
  session_start();
  $connect = mysql_connect('localhost', 'ourdream1', 'dpffh123');
  $db = mysql_select_db('ourdream1', $connect);

  $id = $_POST['user_id'];
  $pw = $_POST['user_pw'];

  $sql = "SELECT * from login WHERE id='$id' AND pw='$pw'";
  $result = mysql_query($sql, $connect);
  $num = mysql_num_rows($result);

  if($num) {
    $_SESSION['id'] = $id;
    echo "<script>alert('로그인 성공! 서이추:04060320');location.replace('./index.html');</script>";
  }
  else{
    echo "<script>alert('로그인 실패');location.replace('./login.php');</script>";
  }
?>
