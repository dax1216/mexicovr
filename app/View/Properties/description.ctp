<div id="content">
    <div id="contact" class="listing">
        <h1 class="title">Description of your listing</h1>
        <div class="form">
              <?php echo $this->Form->create('Property', array('action' => 'description')); ?>
                <label>Title of your Listing: </label>
                <?php echo $this->Form->input('title', array('tabindex'=>'1', 'label' => false, 'div' => false)); ?>

                <div class="line-black"></div>
                <label>Description of the Villa:<br/>(No limit of characters)</label>
          
                <?php echo $this->Form->textarea('description'); ?>

                <div class="right">
                   


                        <?php
                            echo $this->Form->input('bedrooms', array(
                                'options' => array(1=>1, 2=>2, 3=>3, 4=>4, 5=>5),
                                 'label' => 'Number of Bedrooms: '
                            ));
                        ?>

                         <?php
                            echo $this->Form->input('bathrooms', array(
                                'options' => array(1=>1, 2=>2, 3=>3, 4=>4, 5=>5),
                                'label' => 'Number of Bathrooms: '

                            ));
                        ?>
           
                </div>

                <div class="clear"></div>
         

        </div>
        <div class="line"></div>
        <div class="left">
            <h1 class="title">List of activities</h1>

            <ul class="activity">
                <?php
                $idt=0;
                    foreach ($activities as $activity): 
               ?>

                <li><div class="squaredFour">
                        <img src="<?php echo $this->webroot; ?>images/<?php echo h($activity['Activity']['icon']); ?>" />
                          <?php
                            $name =  $activity['Activity']['name'];
                            $id = "squaredFour".$idt;
                            echo $this->Form->checkbox('activity', array(
                                'id' => $id,
                                'value' =>  $activity['Activity']['id'],
                                "name"=> 'data[Property][activity][]',
                                'hiddenField' => false
                            ));
                        ?>
                        <label for="squaredFour<?php echo $idt; ?>"></label><span class="text"><?php echo h($activity['Activity']['name']); ?></span></div></li>
               <?php
               $idt++;
               endforeach; ?>
          
            </ul>

        </div>
        <div class="clear"></div>
        <div class="line"></div>
        <div class="buttons">

                <span class="back"> <input type="submit" class="btnback" value="BACK" onClick="history.back();"/> </span>
                <span class="next"><input type="submit" class="btnnext" value="NEXT" /></span>
        </div>
         <?php echo $this->Form->end(); ?>
    </div>

</div>
