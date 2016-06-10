<?php //Efie ghana setup

@$dbc = mysqli_connect("localhost", "kofiwork_karsoft", "lollypop28:)", "");
// @$dbc = mysqli_connect("kofiwork", "kofiwork_karsoft", "lollypop28:)", "kofiwork_banditconsult");

if (!$dbc) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

/* check connection */

 $query="CREATE DATABASE IF NOT EXISTS `casa`";
  //database connection_status

 $result=mysqli_query($dbc,$query);

include 'dependencies.php';

//storing db after creation of database

//creation of tables



$users= "CREATE TABLE IF NOT EXISTS `users` (
  `confirm_code` varchar(64) NOT NULL,
  `delete_code` varchar(64) NOT NULL,
  `active` int(1) NOT NULL DEFAULT '0',
  `user_id` text NOT NULL,
  `first_name` text NOT NULL,
  `last_name` text NOT NULL,
  `email` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `repassword` varchar(256) NOT NULL,
  `country` text NOT NULL,
  `contact` varchar(40) NOT NULL,
  `user_type` int(11) NOT NULL DEFAULT '0',
  `company` varchar(256),
  PRIMARY KEY (`email`)
) ";

$userresult=mysqli_query($dbc,$users);

$properties="CREATE TABLE IF NOT EXISTS `properties`(
   `property_id` varchar(64) NOT NULL,
   `owner` varchar(64) NOT NULL,
   `email` varchar(256) NOT NULL,
   `title` varchar(256) NOT NULL,
   `property_type` varchar(256) NOT NULL,
   `price` varchar(256) NOT NULL,
   `description` mediumtext NOT NULL,
   `contact` varchar(256) NULL,
   `location` text NOT NULL,
   `status` varchar(256) not null,
   `images` varchar(256),
   `post_date` date,
   `size` varchar(256),
   `bedrooms` varchar(256),
   `gsize` varchar(256),
   PRIMARY KEY (`email`)
)";

 
   $propresult=mysqli_query($dbc,$properties);

$locations="CREATE TABLE IF NOT EXISTS `locations`(
    `region` varchar(256)  null,
      PRIMARY KEY (`region`)
)";

 $locationresult=mysqli_query($dbc,$locations);

$checklocations="select * from locations";
$checkloc=mysqli_query($dbc,$checklocations);
$check_locresult=mysqli_num_rows($checkloc);

if($check_locresult==0){

  $insertlocation="INSERT  into locations values('Ashanti'),('Brong Ahafo'),('Central'),('Eastern'),('Greater Accra'),('Nothern'),
  ('Upper East'),('Upper West'),('Volta'),('Western')";
  $insertloc=mysqli_query($dbc,$insertlocation);

}

$proptype="CREATE TABLE IF NOT EXISTS `property_type`(

`type_name` varchar(256) not null,
  PRIMARY KEY (`type_name`)
)";

 $typeresult=mysqli_query($dbc,$proptype);

$property_id=md5(rand(0,10000));
$insertCheck="select * from property_type";
$check=mysqli_query($dbc,$insertCheck);
$check_result=mysqli_num_rows($check);
if($check_result==0){
$insertPropType= "insert into property_type  values('single house'),('family house'),
('villa'),('appartment')";
 $insertproptype=mysqli_query($dbc,$insertPropType);
};

$status="CREATE TABLE IF NOT EXISTS`property_status`(

`status_name` varchar(256) not null,
  PRIMARY KEY (`status_name`)
)";

    $statusresult=mysqli_query($dbc,$status);


$statusCheck="select * from property_status";
$checkstatus=mysqli_query($dbc,$statusCheck);
$status_result=mysqli_num_rows($checkstatus);
if($status_result==0){
$insertstatus= "insert into property_status  values('rent'),('lease'),
('room sharing')";
 $insertpropstatus=mysqli_query($dbc,$insertstatus);

};

  
  
 exit(header("location:../index"));

 ?>