<?php
/*
Plugin Name: AW Policy Calculator Form
Plugin URI: http://anthroware.com
Description: A simple policy calculator for simple needs. Usage: <code>[aw_calculator]</code>
Version: 1.0
Author: Justin Adams
Author URI: http://justwhat.net
*/

function aw_policy_calculator() {
echo '<script>'
echo 'var headID = document.getElementsByTagName("head")[0]';         
echo 'var cssNode = document.createElement("link")';
echo 'cssNode.type = "text/css"';
echo 'cssNode.rel = "stylesheet"';
echo 'cssNode.href = "FireFox.css"';
echo 'cssNode.media = "screen"';
echo 'headID.appendChild(cssNode)';
echo '</script>'
 
}
add_shortcode( 'aw_calculator', 'aw_policy_calculator' );

?>        
        <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/themes/smoothness/jquery-ui.css" />
        
        <style>
        .policyCalculator h1 { 
        	text-align: center;
        	text-transform: uppercase;
        }
        
        .policyCalculator h2 { 
        	text-align: center;   
        }
        
        .ageRangeOutputs, .amountRangeOutputs {
	        text-align: center;
        }
        
        .ageRangeOutputs input, .amountRangeOutputs input { 
        	width: 38px;
        	border: 0; 
        }
        
        
        </style>
        
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        
        <div class="policyCalculator">
        
        	<h1>Rule of thumb calculator</h1>
        	<span class="separator small center"></span>
        	
        	<h2>Use this calculator to discover the right amount of insurance for you.</h2>
        
	        <p class="ageRangeOutputs">
				<input type="text" id="yourAgeRange"> <br />
				<label for="yourAgeRange">Your age range:</label>
			</p>
				<div id="ageRangeSlider"></div>
			<p class="amountRangeOutputs">
				<input type="text" id="amount"> <br />
				<label for="amount">Policy amount:</label>
			</p>
				<div id="policySlider"></div>
	
			<p class="reccOutput">RECOMMENDED <span id="recc"></span></p>
			<p class="maxOutput">MAXIMUM <span id="max"></span></p>
        </div>

        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
        
        <script>
        var $j = jQuery.noConflict();
        
		$j(function() {    
		    
		    var foo = " ";
		    var bar = " ";
		       
		    // Age range function
		    $j("#ageRangeSlider").slider({
		      range: "min",
		      value: 0,
		      min: 0,
		      max: 66,
		      step: 11,
		      slide: function(event, ui) {
		        $j("#yourAgeRange").val(ui.value);
		        foo = $j("#yourAgeRange").val();
		        console.log('age range' + foo);
		      }
		    });
		    $j("#yourAgeRange").val($j("#ageRangeSlider").slider("value"));
		    
		    // Policy amount function
		    $j("#policySlider").slider({
		      range: "min",
		      value: 0,
		      min: 0,
		      max: 1000000,
		      step: 50000,
		      slide: function(event, ui) {
		        $j("#amount").val(ui.value);
		        bar = $j("#amount").val();
		        console.log('amount'+ bar)
		      }
		    });
		    $j("#amount").val($j("#policySlider").slider("value"));
		
		$j("#ageRangeSlider , #policySlider").on('blur click mousemove mouseup mousedown keypress keyup' , function() {
		  var total = +foo + +bar;
		  console.log( "Handler for .change() called for age range slider" + foo);
		  console.log( "Handler for .change() called for policy range slider" + bar);
		  console.log( "Lets add foo and bar" + total)
		  
		  if(foo == 11){ // This is for the 20-30 range
		  	  $j("#yourAgeRange").val('20-30');
		      var recc = bar * 15;
		      var max = bar * 20;
		      $j('#recc').html(recc);
		      $j('#max').html(max);
		      console.log('recommended' + recc);
		      console.log('maximum' + max);
		  }
		  if(foo == 22){ // This is for the 31-40 range
		      $j("#yourAgeRange").val('31-40');
		      var recc = bar * 15;
		      var max = bar * 20;
		      $j('#recc').html(recc);
		      $j('#max').html(max);
		      console.log('recommended' + recc);
		      console.log('maximum' + max);
		  }
		  if(foo == 33){ // This is for the 41-50 range
		      $j("#yourAgeRange").val('41-50');
		      var recc = bar * 10;
		      var max = bar * 15;
		      $j('#recc').html(recc);
		      $j('#max').html(max);
		      console.log('recommended' + recc);
		      console.log('maximum' + max);
		  }
		  if(foo == 44){ // This is for the 51-60 range
		      $j("#yourAgeRange").val('51-60');
		      var recc = bar * 7;
		      var max = bar * 10;
		      $j('#recc').html(recc);
		      $j('#max').html(max);
		      console.log('recommended' + recc);
		      console.log('maximum' + max);
		  }
		  if(foo == 55){ // This is for the 61-65 range
		      $j("#yourAgeRange").val('61-65');
		      var recc = bar * 5;
		      var max = bar * 7;
		      $j('#recc').html(recc);
		      $j('#max').html(max);
		      console.log('recommended' + recc);
		      console.log('maximum' + max);
		  }
		  if(foo == 66){ // This is for the 66+ range
		      $j("#yourAgeRange").val('66+');
		      var recc = bar * 3;
		      var max = bar * 5;
		      $j('#recc').html(recc);
		      $j('#max').html(max);
		      console.log('recommended' + recc);
		      console.log('maximum' + max);
		  }
		    
		});
		    
		    
		});
        
        </script>

    </body>
</html>
