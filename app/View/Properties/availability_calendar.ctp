<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>

<div id="content" class="event">
    <div id="contact" class="photos">
        <h1 class="title">Calendar of Availability for your listing</h1>
        <?php echo $this->Form->create('Properties'); ?>
            <div class="form">
                <div class="calendar"></div>
                <div class="clear"></div>
            </div>		
            <div class="buttons">
                <div class="reserve"><img src="<?php echo $this->webroot; ?>images/red-dot.png" /> Reserved</div>
                <?php if($preview){ ?>
                    <span class="back"><input type="button" class="btnback" value="<< BACK" onclick="window.location = '<?php echo $sess_listing_type=='rent'?APP_URL.'properties/rates/1':APP_URL.'properties/rate/1'; ?>'"/></span>
                    <span class="next"><input type="submit" class="btnnext" value="SUBMIT" /></span>
                <?php }else {?>
                    <span class="back"><input type="button" class="btnback" value="<< BACK" onclick="window.location = '<?php echo APP_URL.'properties/video_url'; ?>'"/></span>
                    <span class="next"><input type="submit" class="btnnext" value="NEXT >>" /></span>
                <?php } ?>
                
            </div>
        <?php echo $this->Form->end(); ?>
    </div>

</div>
<?php var_dump($sess_reservation_dates); ?>
<script type="text/javascript"> 
 
  jQuery(document).ready(function() {
      jQuery.noConflict();
      jQuery('.calendar').multiDatesPicker({
            addDates: <?php echo json_encode($sess_reservation_dates); ?>
//      {
//				inline: true,
//				//nextText: '&rarr;',
//				//prevText: '&larr;',
//				showOtherMonths: true,
//				//dateFormat: 'dd MM yy',
//				dayNamesMin: ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],
//				//showOn: "button",
//				//buttonImage: "img/calendar-blue.png",
//				//buttonImageOnly: true,
//                                selectMultiple:true
//			}
      });
                        
  });
  
  jQuery('#PropertiesAvailabilityCalendarForm').submit(function(e){
        var dates = jQuery('.calendar').multiDatesPicker('getDates');
        var input = jQuery("<input>").attr("type", "hidden").attr("name", "dates").val(dates);
        jQuery(this).append(input);
        jQuery(this).submit();
  })
</script>