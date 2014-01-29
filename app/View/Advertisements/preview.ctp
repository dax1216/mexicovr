<div id="content" class="submits">
    <div class="title">
        <h1>Advertising</h1>
        <div class="line"></div>
    </div>
    <div class="box">
        <div class="title">
            <h1><?php echo $advertisement['Advertisement']['title']; ?></h1>
        </div>
        <img src="<?php echo $this->webroot . $advertisement['Advertisement']['image_small']; ?>" alt="Lorem Ipsum" />
        <div class="text">
            <p><?php echo $advertisement['Advertisement']['description1']; ?></p>
            <div class="lines"></div>
            <h3><?php echo $advertisement['Advertisement']['address']; ?></h3>
            <div class="lines"></div>
            <h2><?php echo $advertisement['Advertisement']['contact_number']; ?></h2>
        </div>
    </div>
    <div class="buttons">
        <span class="sub left"><input type="submit" value="BACK" onclick="window.location = '<?php echo APP_URL.'advertisements/advertising_advertise/'.$advertisement['Advertisement']['id']; ?>'"/></span>
        <span class="sub right"><input class="my_modal_open btnSub" type="submit" value="NEXT" onclick="window.location = '<?php echo APP_URL.'advertisements/advertising_payment/'.$advertisement['Advertisement']['id']; ?>'"/></span>
    </div>
<!--    <div id="my_modal">
        <div class="message">
            <h1>Thank you for advertising with us. <br/>A copy of your receipt<br/>will be sent to your email.</h1>
        </div>
    </div>-->
    <div class="clear"></div>
</div>