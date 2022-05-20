<?php
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$country=filter_input(INPUT_POST, 'country', FILTER_SANITIZE_STRING);
$msg=$_POST['subject'];
$conn=mysqli_connect("localhost", "root","","sdata");
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
$sql="INSERT INTO `sdata`.`data`
(`firstname`,
`lastname`,
`country`,
`msgg`)
VALUES
('$firstname',
'$lastname',
'$country',
'$msg');
";
if(!mysqli_query($conn, $sql)){
    echo "Problem Entering data to mysql";
    exit();
};
echo "Submited Your data to action_page.php";
