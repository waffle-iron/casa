<?php 

 $name=mysqli_escape_string($dbc,$_POST['name']);
  $email=mysqli_escape_string($dbc,$_POST['email']);
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


  $listid=uniqid(rand(0,10000));
  $target_path="images/";
$target_path=$target_path.basename($_FILES['uploadedfile']['name']);
if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path)) {

}

if($target_path==="images/"){
  $target_path="images/no-thumb.png";
}


  $query="select * from properties where email='$user'";
  $result=mysqli_query($dbc,$query);
  $row=mysqli_num_rows($result);
  if($row!=1){
    $query="insert into properties(owner,email,contact,title,location,
    price,description,property_id,images,property_type,bedrooms,gsize,size,post_date) values('$name','$email','$contact',
    '$title','$location','$price','$description','$listid','$target_path','$type','$bedroom','$gsize','$size',now())";

    $result=mysqli_query($dbc,$query);

    echo '<p class="bg-success alert alert-success text-center">Property Listing Successful</p>';
  }else{
    echo '<p class="bg-danger alert-danger">My bad!!! Something went totally wrong. Try again later while i try to fix it <span class="close pull-right"> <span class="close pull-right"> <a href="#" >&times; </a></span></p>';
  }


 ?>