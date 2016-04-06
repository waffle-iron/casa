<?php 

$id=$_GET['id'];

    $query2="select * from properties where property_id='$id'";
  $result2=mysqli_query($dbc,$query2);
  $row2=mysqli_fetch_array($result2);

if($_POST){

$id=$_GET['id'];

 $name=mysqli_escape_string($dbc,$_POST['name']);
  // $email=mysqli_escape_string($dbc,$_POST['email']);
  $contact=mysqli_escape_string($dbc,$_POST['contact']);
  $title=mysqli_escape_string($dbc,$_POST['title']);
  $location=mysqli_escape_string($dbc,$_POST['location']);
  $price=mysqli_escape_string($dbc,$_POST['price']);
    $type=mysqli_escape_string($dbc,$_POST['type']);
     $bedroom=mysqli_escape_string($dbc,$_POST['bedroom']);
    $gsize=mysqli_escape_string($dbc,$_POST['gsize']);
        $size=mysqli_escape_string($dbc,$_POST['size']);
  $description=mysqli_escape_string($dbc,$_POST['description']);
    // $status=mysqli_escape_string($dbc,$_POST['status']);
  // $listid=uniqid(rand(0,10000));
  $target_path="images/";
$target_path=$target_path.basename($_FILES['uploadedfile']['name']);
if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path)) {

}

if($target_path==="images/"){
  $target_path="images/no-thumb.png";
}


 

    $query2="UPDATE  properties SET owner='$name',contact='$contact', title='$title',location='$location',price='$price',
    description='$description',property_type='$type',bedrooms='$bedroom',gsize='$gsize', size='$size' where email='$user'";

    $result2=mysqli_query($dbc,$query2);
if($result2){
    echo '<p class="bg-success alert alert-success text-center">Property listing updated Successful</p>';}else{
      echo '<p class="alert alert-danger text-center">Update failed<span class="close pull-right"> <a href="#"> X </span></a></p>';
    }
  }

 ?>