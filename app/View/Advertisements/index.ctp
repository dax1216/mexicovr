<div id="content">
    <div class="title">
        <h1>Advertising</h1>
        <div class="line"></div>
    </div>
    <div class="box">
        <div class="title">
            <h1><?php echo $advertisement['title'] ?></h1>
        </div>
        <?php echo '<img src='.$this->webroot.$advertisement['image_small'].' alt="Lorem Ipsum" />'; ?>
        <div class="text">
            <?php echo '<p><strong>'.$advertisement['title'].'</strong> '.$advertisement['description1'].'</p>'; ?>
            <div class="lines"></div>
            <?php echo '<h3>'.$advertisement['propertyAddress'].' <br/> $'.$advertisement['propertyPrice'].'</h3>'; ?>
            <div class="lines"></div>
            <?php echo '<h2>'.$advertisement['propertyContact'].'</h2>'; ?>
        </div>
    </div>
    <div class="buttons">
         <?php
         	/***** 
         	echo $this->Html->link('<< BACK', '/advertisements/advertising_advertise', array('class' => 'btnback'));
			echo $this->Html->link('NEXT >>', '/advertisements/advertising_advertise', array('class' => 'btnnext'));
			*****/
			echo '<a href="'.$this->webroot.'advertisements/advertising_advertise"><span class="back"><input type="submit" class="btnback" value="<< BACK" /></span></a>
        		  <a href="'.$this->webroot.'advertisements/advertising_payment/'.$advertisement['id'].'"><span class="next"><input type="submit" class="btnnext" value="NEXT >>" /></span></a>
				 ';
         ?>
    </div>
</div>