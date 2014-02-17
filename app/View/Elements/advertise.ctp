<?php

if (empty($ads_result)) {
    $ads_result = $this->requestAction(array('controller' => 'advertisements', 'action' => 'show'));
}

//var_dump($ads_result);
foreach($ads_result as $data => $ads ){

   ?>

<div class="area">
<!--    <img src="<?php echo $this->webroot; ?><?php echo $ads['Advertisement']['image_small']; ?>" height="220" width="220" style="padding: 10px;" />
    <h1><span><?php echo $ads['Advertisement']['title']." - ".$ads['Advertisement']['counter']; ?></span><br/> </h1>-->
    <div class="box">
        <div class="title">
            <h1><?php echo $ads['Advertisement']['title']; ?></h1>
        </div>
        <img src="<?php echo $this->webroot . $ads['Advertisement']['image_small']; ?>" alt="Lorem Ipsum" />
        <div class="text">
            <p><?php echo $ads['Advertisement']['description1']; ?></p>
            <div class="lines"></div>
            <h3><?php echo $ads['Advertisement']['address']; ?></h3>
            <div class="lines"></div>
            <h2><?php echo $ads['Advertisement']['contact_number']; ?></h2>
        </div>
    </div>
</div>
<?php
}
?>