<?php 
    include 'connection.php';
    include 'public/vendor/autoload.php';
    use haoch\insertData;
    if(isset($_POST['btn-add'])){
        $name=$_POST['name'];
        $gender=$_POST['gender'];
        $email=$_POST['email'];
        $province=$_POST['province'];

        $student = new insertData($name,$gender,$email,$province);
        $getName=$student->getName();
        $getGender=$student->getGender();
        $getEmail=$student->getEmail();
        $getProvince=$student->getProvince();
        $query = "INSERT INTO tblstudent(name,gender,email,province)
        VALUES('$getName','$getGender','$getEmail','$getProvince')";
        $result = mysqli_query($connection, $query);
        if(!$result) {
        die ("Can't insert data into database");
        }else {
        header("location:index.php");
        }
        }
?>