<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>

<div id="content" class="event">
    <div id="contact" class="photos">
        <h1 class="title">Calendar of Availability for your listing</h1>
        <div class="form">
            <div class="calendar"></div>
            <div class="clear"></div>
        </div>		
        <div class="buttons">
            <div class="reserve"><img src="<?php echo $this->webroot; ?>images/red-dot.png" /> Reserved</div>
            <a href="listing-rate.html"><span class="back"><input type="submit" class="btnback" value="<< BACK" /></span></a>
            <span class="next"><input type="submit" class="btnnext" value="NEXT >>" /></span>
        </div>
    </div>

</div>
<script type="text/javascript"> 
 
  jQuery(document).ready(function() {
      jQuery.noConflict();
      jQuery('.calendar').datepicker({
				inline: true,
				//nextText: '&rarr;',
				//prevText: '&larr;',
				showOtherMonths: true,
				//dateFormat: 'dd MM yy',
				dayNamesMin: ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat']
				//showOn: "button",
				//buttonImage: "img/calendar-blue.png",
				//buttonImageOnly: true,
			});
  });
</script>