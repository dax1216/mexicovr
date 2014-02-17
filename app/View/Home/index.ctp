<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css">
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<?php echo $this->Html->script(array('ajax-loader')); ?>

<?php //echo $this->Html->script('constants');?>
<?php echo $this->Html->script(array('constants','jquery-ui-1.10.4.custom.min'));?>

<div class="search-property">
    <?php echo $this->Form->create('Property', array('controller'=>'properties','action' => 'search', 'type'=>'get')); ?>
        <a href="<?php echo $this->webroot ?>properties/rent_a_property" class="search-rentprop rent-current"></a>
        <a href="<?php echo $this->webroot ?>properties/buy_a_property" class="search-buyprop"></a>
        <?php echo $this->Form->input('destination', array('class'=>'destination', 'label' => false, 'div' => false, 'placeholder'=>'DESTINATION', 'id'=>'destination')); ?>
        <div class="lines"></div>
        <div id="dd" class="wrapper-dropdown-1" tabindex="1">
            <span>BEDROOMS</span>
            <ul class="dropdown" tabindex="1" id="bedroom-dropdown">
                <li><a href="#" data-val="1">1 BEDROOM</a></li>
                <li><a href="#" data-val="2">2 BEDROOMS</a></li>
                <li><a href="#" data-val="3">3 BEDROOMS</a></li>
                <li><a href="#" data-val="4">4 BEDROOMS</a></li>
                <li><a href="#" data-val="5">5 BEDROOMS</a></li>
            </ul>
            <?php echo $this->Form->input('bedrooms', array('type'=>'hidden')); ?>
        </div>
        <span class="dateholder">
            <span class="date-bg">
                <?php echo $this->Form->input('datefrom', array('class'=>'datefrom', 'label' => false, 'div' => false, 'placeholder'=>'FROM', 'id'=>'datefrom')); ?>
            </span>
            <span class="date-bg">
                <?php echo $this->Form->input('dateto', array('class'=>'dateto', 'label' => false, 'div' => false, 'placeholder'=>'TO', 'id'=>'dateto')); ?>
            </span>
        </span>
        <div class="or">OR</div>
        <?php echo $this->Form->input('mxvrno', array('class'=>'mxvrno', 'label' => false, 'div' => false, 'placeholder'=>'ENTER MXVR #', 'id'=>'mxvrno')); ?>
        <div class="lines"></div>
        <span class="sub"><input type="submit" value="SEARCH" class="btnsearch-property" /></span>
    <?php echo $this->Form->end(); ?>
</div>

<div class="searchmap">
    <img class="imgmap" src="images/map.png" />

    <div class="callout" style="display: none;">
        <div class="callout-header"></div>
        <p class="callout-text"></p>
        <div class="readmore"><a href="#">Read More..</a></div>
    </div>

<!--    <div class="callout-lapaz" id="callout" style="display: none;">
        <div class="callout-header">La Paz</div>
        <p class="callout-text">For a relaxed tropical paradise, Acapulco certainly is vibrant one --as a matter of fact, it literally never sleeps. With non-stop nightlife, great shopping centers and restaurants, this bustling seaside resort is alive and...</p>
        <div class="readmore"><a href="#">Read More..</a></div>
    </div>

    <div class="callout-ciudad" id="callout" style="display: none;">
        <div class="callout-header">Ciudad Constitucion</div>
        <p>For a relaxed tropical paradise, Acapulco certainly is vibrant one --as a matter of fact, it literally never sleeps. With non-stop nightlife, great shopping centers and restaurants, this bustling seaside resort is alive and...</p>
        <div class="readmore"><a href="#">Read More..</a></div>
    </div>-->

</div>

<script>
    $(function() {

        $("#destination").autocomplete({
            source: cities,
            select: function(a, b){
                var dest = b.item.value;
                $('.callout').hide();
                $('.callout').find('.callout-text').empty();
                $('.callout').find('.readmore a').attr('href','#');
                $('.callout').find('.callout-header').html(dest);
                var desc = '';
                var link = '#';
                var loader = new ajaxLoader('.callout-text',{bgColor: '#000',  opacity: '0.3'});
                if(parseInt(callouts[dest]['top']) < -485){
                    $('.callout').css('background-image', 'url('+<?php echo $this->webroot; ?>+'images/callout_down.png)');
                    $('.callout').css('top',parseInt(callouts[dest]['top'])+235+'px');
                    $('.callout').css('left',parseInt(callouts[dest]['left'])+1+'px');
                    $('.callout-header').css('margin-top','70px');
                }else{
                    $('.callout').css('background-image', 'url('+<?php echo $this->webroot; ?>+'images/callout.png)');
                    $('.callout').css('top',callouts[dest]['top']);
                    $('.callout').css('left',callouts[dest]['left']);
                    $('.callout-header').css('margin-top','0');
                }
                $('.callout').show();
                $.ajax({
                    type: "POST",
                    data: {dest: dest},
                    dataType: 'json',
                    url: '<?php echo APP_URL . 'pages/generate_excerpt'; ?>',
                    success: function(d){
                        desc = d.content;
                        link = '<?php echo APP_URL . 'pages/';?>'+d.slug;
                        console.log(d.content);
                        $('.callout').find('.callout-text').html(desc);
                        $('.callout').find('.readmore a').attr('href',link);
                        loader.remove();
                    }
                });
                
                
            }
        });
    });
</script>

<script type="text/javascript">
    $('#bedroom-dropdown').find('li a').each(function(){
        $(this).click(function(){
            $('input[name="bedrooms"]').val($(this).data('val'));
        })
    })
</script>