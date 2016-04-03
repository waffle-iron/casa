<?php 
if($row['images']!=''){

	echo '      <a href="'.$row['images'].'"><img class="img-responsive img-thumbnail " src="'.$row['images'].'" /></a>';
}else{

	echo '<img src="images/hero.jpg" class="img-responsive real-image" alt="no-thumbnail" />';
};

 ?>