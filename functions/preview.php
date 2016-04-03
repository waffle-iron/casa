<?php 
if($row['images']!=''){

	echo '      <a href="'.$row['images'].'"><img class="img-responsive img-thumbnail preview" src="'.$row['images'].'" /></a>';
}else{

	echo '<img src="images/hero.jpg" class="img-responsive preview" alt="no-thumbnail" />';
};

 ?>