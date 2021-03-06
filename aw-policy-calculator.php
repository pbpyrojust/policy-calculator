<?php
/*
Plugin Name: AnthroWare Policy Calculator
Plugin URI: http://anthroware.com
Description: AnthroWare policy calculator plugin! Usage: <code>[aw_calculator]</code>
Version: 1.2
Author: Justin Adams
Author URI: http://justwhat.net
*/

function aw_policy_calculator() {

$calculator_markup = '<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
<script src="/wp-content/plugins/aw-policy-calculator/js/jquery.ui.touch-punch.min.js"></script>

<div class="policyCalculator">
    <p class="ageRangeOutputs">
		<input type="hidden" id="yourAgeRange">
		<span id="ageRange">20-30</span> 
		<label for="yourAgeRange">Age range</label>
	</p>
		<div id="ageRangeSlider"></div>
	<p class="amountRangeOutputs">
		<input type="hidden" id="amount">
		<span id="policyAmount" class="points">20000</span>
		<label for="amount">Avg. yearly income</label>
	</p>
		<div id="policySlider"></div>
	<div class="grid2cola">
		<div class="column">
			<div class="reccOutput">Reccomended Policy Amount<br /> <p id="recc" class="points">300000</p></div>
		</div>
		<div class="column">
			<div class="maxOutput">Maximum Policy Available<br /> <p id="max" class="points">400000</p></div>
		</div>
	</div>
</div>

<script src="/wp-content/plugins/aw-policy-calculator/js/calculator.js?version=1.0"></script>';
 
return $calculator_markup;

}
add_shortcode( 'aw_calculator', 'aw_policy_calculator' );

?>
