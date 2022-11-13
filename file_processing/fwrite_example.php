<?php

$name = $_POST['name'];
$email1 = $_POST['email1'];
$email2 = $_POST['email2'];
$hp = $_POST['number'];

if(!$email2){
    echo "<script>
alert('Email domain not specified');
window.location.href = 'example.html';
</script>";
    // exit() 을 해주어야 아래 로직이 실행되지 않음
    exit();
}

$email = $email1."@".$email2;

// 변수 여러개에 대해 unset 가능
unset($email1,$email2);

// Get file pointer, generate if not exist
$fp = fopen("text_from_post.txt","a+");

// write to file via file pointer
fwrite($fp,"Name : {$name}\n");
fwrite($fp, "E-Mail : {$email}\n");
fwrite($fp,"H.P : {$hp}\n");

// close file pointer after write
fclose($fp);
echo "<strong>Name : {$name}</strong><br>";
echo "<strong>E-Mail : {$email}</strong><br>";
echo "<strong>H.P : {$hp}</strong><br>";
?>