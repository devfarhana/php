

<?php
 include('layout/header.php');

$fullName = $_POST['fullName'];
$birthDate = $_POST['birthDate'];
$web = $_POST['web'];
$email = $_POST['email'];
$cell = $_POST['cell'];
$gender = $_POST['gender'];
$courseFee = $_POST['courseFee'];

$locDate = $_POST['locDate'];
$courseChoice = $_POST['courseChoice'];
$range = $_POST['range'];
$color = $_POST['color'];
$image  = $_FILES['image'];
$certificate  = $_FILES['certificate'];
$courseName  = $_POST['courseName'];
$classTime = $_POST['classTime'];
$description = $_POST['description'];
$ip =$_POST['ip'];



  //show data
echo "Full Name : ".$fullName."</br>";
echo "Birth Date : ".$birthDate."</br>";
echo "Website : ".$web."</br>";
echo "Email : ".$email."</br>";
echo "Cell Number : ".$cell."</br>";
echo "Gender  : ";
if (isset($gender)) {
    echo $gender;
}
echo "Course Fee : ".$courseFee."</br>";
echo "date time local : ".$locDate."</br>";
echo "Course Choice : ";
            
if (isset($courseChoice)) {
    $count = count($courseChoice);
    foreach ($courseChoice as $key => $val) {
        echo $val;
        if ($key < $count - 1) {
            echo ", ";
        }else{
            echo ".";
        }
    }
}
echo "</br> Range  : ".$range."</br>";
echo " Favourite Color  : ".$color."</br>";
echo "Image Name: ";
if (isset($image['name'])) {
    echo $image['name'];
} else {
    echo 'Name attribute is not set in $_FILES["image"].';
}
echo "</br> Certificate Name: ";
foreach ($certificate['name'] as $val) {
    echo "(".$val.")";
}
echo "</br>Course Name: ";
            if (isset($courseName)) {
                $count = count($courseName);
                foreach ($courseName as $key => $val) {
                    echo $val;
                    if ($key < $count - 1) {
                        echo ", ";
                    }else{
                        echo ".";
                    }
                }
            }

echo "class time  : ".$classTime."</br>";
echo "IP address: ".$ip."</br>";
echo "Description : ".$description."</br>";




 include('layout/footer.php');

?>
<div class="container">
<a href="index.php" class="btn btn-dark">Back</a><br>

</div>



    