<?php require_once("header.php");?>
<div class="conteiner-fluid body_box">
 <h1>Выбор темы и сложности задачи</h1>
</div>
<!--
? php header('Content-Type: text/html; charset=utf-8');
$mysqli=mysqli_connect("localhost", "a0540774_neray03", "123456","a0540774_bd");

if ($mysqli == false) {
    print("error");
} else {
 print("Соединение установлено успешно<br><hr>");


$result = $mysqli->query("SELECT `id`, `topic` FROM `topics`");
    {
        $users = array();
//        $result = $mysqli->query("SELECT `name`,`lastname`,`email`,`id` FROM `users` WHERE 1");
        while ($row = $result->fetch_assoc()) {
            $users[] = $row;
        }
        return json_encode($users);
    }
}


$row = fetch_assoc($result));
while ($row = mysql_fetch_assoc($result)) {
    echo $row["id"];
    echo $row["topic"];
}

//    print( $row);

// echo "<ul>";
//foreach ($row as $item){
//echo "<li><a href='</a></li>";
//}
// $result = $mysqli->query("SELECT `id`, `topic` FROM `topics`");
// for($i=0;$i<$result->num_rows;$i++)
print( $result->num_rows );
 //   $name = $_POST['name'];
 //   $lastname = $_POST['lastname'];
 //   $email = trim(mb_strtolower($_POST['email']));
 //   $pass = trim($_POST['pass']);
 //   $pass = password_hash("$pass", PASSWORD_DEFAULT);

   
 //   if ($result->num_rows != 0) {
 //       print("exist");
 //   } else {
 //       $mysqli->query("INSERT INTO `users`(`name`, `lastname`, `email`, `pass`) VALUES ('$name','$lastname','$email','$pass')");
 //       print("ok");
 //   };
};?>
-->
<?php require_once("footer.php");?>
