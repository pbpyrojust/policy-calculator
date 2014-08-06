var $j = jQuery.noConflict();
        
		$j(function() {
		
		var headIDCalculator = document.getElementsByTagName("head")[0];         
		var cssNodeCalculator = document.createElement('link');
		cssNodeCalculator.type = 'text/css';
		cssNodeCalculator.rel = 'stylesheet';
		cssNodeCalculator.href = '/wp-content/plugins/aw-policy-calculator/css/styles.css?version=1.0';
		cssNodeCalculator.media = 'screen';
		headIDCalculator.appendChild(cssNodeCalculator);
		
		var headIDUi = document.getElementsByTagName("head")[0];         
		var cssNodeUi = document.createElement('link');
		cssNodeUi.type = 'text/css';
		cssNodeUi.rel = 'stylesheet';
		cssNodeUi.href = '//ajax.googleapis.com/ajax/libs/jqueryui/1.11.0/themes/smoothness/jquery-ui.css';
		cssNodeUi.media = 'screen';
		headIDUi.appendChild(cssNodeUi);
		
		$j("#policyAmount").prepend('$');
		$j('#recc').prepend('$');
		$j('#max').prepend('$');
		    
		    var foo = 11;
		    var bar = 20000;

		    // Age range function
		    $j("#ageRangeSlider").slider({
		      range: "min",
		      value: 11,
		      min: 11,
		      max: 66,
		      step: 11,
		      slide: function(event, ui) {
		        $j("#yourAgeRange").val(ui.value);
		        foo = $j("#yourAgeRange").val();
		      }
		    });
		    $j("#yourAgeRange").val($j("#ageRangeSlider").slider("value"));

		    // Policy amount function
		    $j("#policySlider").slider({
		      range: "min",
		      value: 20000,
		      min: 20000,
		      max: 500000,
		      step: 5000,
		      slide: function(event, ui) {
		        $j("#amount").val(ui.value);
		        bar = $j("#amount").val();
		        $j("#policyAmount").html(bar).prepend('$');
		        $j(".points").digits();
		      }
		    });
		    $j("#amount").val($j("#policySlider").slider("value"));

		    // lets create a comma adding plugin
		    $j.fn.digits = function(){ 
				return this.each(function(){ 
					$j(this).text( $j(this).text().replace(/\B(?=(?:\d{3})+(?!\d))/g, ",") ); 
					})
			}
			$j(".points").digits();

    		    		
		$j("body , .policyCalculator , #ageRangeSlider , #policySlider").on('load focus blur click mousemove mouseup mousedown keypress keyup' , function() {
						
		  var total = +foo + +bar;
		  
		  if(foo == 11){ // This is for the 20-30 range
		  	  $j("#ageRange").html('20-30');
		      var recc = bar * 15;
		      var max = bar * 20;
		      $j('#recc').html(recc).prepend('$');
		      $j('#max').html(max).prepend('$');
		      $j(".points").digits();
		  }
		  if(foo == 22){ // This is for the 31-40 range
		      $j("#ageRange").html('31-40');
		      var recc = bar * 15;
		      var max = bar * 20;
		      $j('#recc').html(recc).prepend('$');
		      $j('#max').html(max).prepend('$');
		      $j(".points").digits();
		  }
		  if(foo == 33){ // This is for the 41-50 range
		      $j("#ageRange").html('41-50');
		      var recc = bar * 10;
		      var max = bar * 15;
		      $j('#recc').html(recc).prepend('$');
		      $j('#max').html(max).prepend('$');
		      $j(".points").digits();
		  }
		  if(foo == 44){ // This is for the 51-60 range
		      $j("#ageRange").html('51-60');
		      var recc = bar * 7;
		      var max = bar * 10;
		      $j('#recc').html(recc).prepend('$');
		      $j('#max').html(max).prepend('$');
		      $j(".points").digits();
		  }
		  if(foo == 55){ // This is for the 61-65 range
		      $j("#ageRange").html('61-65');
		      var recc = bar * 5;
		      var max = bar * 7;
		      $j('#recc').html(recc).prepend('$');
		      $j('#max').html(max).prepend('$');
		      $j(".points").digits();
		  }
		  if(foo == 66){ // This is for the 66+ range
		      $j("#ageRange").html('66+');
		      var recc = bar * 3;
		      var max = bar * 5;
		      $j('#recc').html(recc).prepend('$');
		      $j('#max').html(max).prepend('$');
		      $j(".points").digits();
		  }
		    
		});
		
	});