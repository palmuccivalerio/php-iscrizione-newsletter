<?php
$email = $_GET['mail'] ?? null;
// dobbiamo controllare che abbia punto e chiocciola
if (str_contains($email ,'.')) {
if (str_contains($email ,'@')) {
  echo $email;  

} 
}
?>