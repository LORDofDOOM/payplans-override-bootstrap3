<?php
/**
* @copyright	Copyright (C) 2009 - 2009 Ready Bytes Software Labs Pvt. Ltd. All rights reserved.
* @license		GNU/GPL, see LICENSE.php
* @package		PayPlans
* @subpackage	Frontend
* @contact 		payplans@readybytes.in
*/
if(defined('_JEXEC')===false) die();
?>
<?php 
header('Cache-Control: no-cache, no-store, must-revalidate'); // HTTP 1.1.
header('Pragma: no-cache'); // HTTP 1.0.
header('Expires: 0'); // Proxies. 
?>

<style>
.pp-advanced-pricing{
	line-height: 30px;
	overflow-x:auto;
}

.pp-bottom-line{
	border-bottom:1px solid #ccc;
}

.pp-width{
	padding-left:5px;
	padding-right:5px; 
}

.pp-pricing-calculate{
	border-radius: 4px;
	padding: 1px;
	height: 25px;
	width: 120px;
}

</style>
<script type="text/javascript">
(function($){
	$(document).ready(function(){
		var plan_id = <?php echo $plan->plan_id;?>;
		$('#testPlan'+plan_id).hide();
	});
})(payplans.jQuery);

</script>

<div class="form-horizontal">

	<div class="form-group">
		<label class="col-sm-3 control-label"><?php echo XiText::_($unit_title);?></label>
		<div class="col-sm-3">
			<input id="pp-pricing-units-<?php echo $plan->plan_id;?>" type="text" value="" class="form-control" />
		</div>
		<div class="col-sm-3">
			<button class="pp-pricing-calculate" type="button" value="<?php echo $plan->plan_id;?>"><?php echo XiText::_('COM_PAYPLANS_APP_ADVANCED_PRICING_CALCULATE_PRICE');?></button>
		</div>
		
	</div>
	
	<div class="form-group">
		<div class="col-sm-3 col-sm-offset-3">
			<?php echo XiText::_('COM_PAYPLANS_APP_ADVANCED_PRICING_AVAILABLE_RANGE');?> (<?php echo $minimum .'-'. $maximum;?>)
		</div>
	</div>
	
	
</div>

<div id="pp-pricing-details-<?php echo $plan->plan_id;?>">&nbsp;</div>



<br/>
<br/><br/>



<?php 
