<?php

if (empty($ads_result)) {
    $ads_result = $this->requestAction(array('controller' => 'advertisements', 'action' => 'show'));
}

//var_dump($ads_result);
foreach($ads_result as $data => $ads ){

   ?>

<div class="area">
    <img src="<?php echo $this->webroot; ?>files/uploads/advertisements/<?php echo $ads['Advertisement']['image_small']; ?>" height="220" width="220" style="padding: 10px;" />
    <h1><span><?php echo $ads['Advertisement']['title']." - ".$ads['Advertisement']['counter']; ?></span><br/> </h1></div>
<?php
}
?>