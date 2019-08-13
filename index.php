<?php
include_once 'DBstudent.php';

$dbconnect = new DBstudent();

$student1 = new Student('khanh7','09888444','khanh2@gmail.com');
$name =  $student1->getName();
$phone = $student1->getPhone();
$email = $student1->getEmail();
echo $name.$phone.$email;
echo '<br>';
//$dbconnect->insert( $name,$phone, $email);

$dbconnect->delete('20');

$dbconnect->update('2','hai','01235554','hai@mail.com');

$data  = ($dbconnect->selectAll());

?>

<table border="1">
    <caption><h1>LIST</h1></caption>
    <tr>
        <th>ID</th>
        <th>NAME</th>
        <th>PHONE</th>
        <th>EMAIL</th>
    </tr>

    <?php
    foreach($data as $values){
        echo "<tr>";
        echo "<td style='width: 50px'>".$values['studentId']."</td>";
        echo "<td style='width: 100px'>".$values['name']."</td>";
        echo "<td style='width: 200px'>".$values['phone']."</td>";
        echo "<td style='width: 200px'>".$values['email']."</td>";
        echo "</tr>";
    }
    ?>
</table>