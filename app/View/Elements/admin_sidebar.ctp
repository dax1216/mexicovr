<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<h2><?php echo $title; ?></h2>
<div>
    <ul>
        <?php foreach($actions as $k=>$a){ ?>
            <li><a href="<?php echo $a; ?>"><?php echo $k;?></a></li>
        <?php }?>
    </ul>
</div>