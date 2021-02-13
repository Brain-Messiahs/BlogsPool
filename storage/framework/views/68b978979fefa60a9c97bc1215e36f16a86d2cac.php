<?php $__env->startSection('body'); ?>
    


<div class="top-header">
	<img class="desktop" src="wp-content/uploads/2018/03/30093336/Commercial-Industrial.jpg" alt="" title="">
    <img class="mob" src="wp-content/uploads/2018/03/30093334/Commercial-Industrial-Tab-Banner.jpg" alt="" title="">


</div>
<div class="clear"></div>

<div class="wrapper">
 <div class="commercial">
<div class="power-savings"> 
    <div class="power-savings-left">
        <h4> To reduce your energy costs join sustainable alternatives.</h4>
        <p>Solar panels generate electricity using the radiation emitted by the sun. When such solar panels are fitted onto the top of a building, they are known as rooftop photovoltaic system power stations. Solar energy provides a good return on investment through the use of un-utilized rooftop space and requires minimal maintenance. All of this has a positive impact on your savings and  even greater impact on the environment.</p>
        <p>We provide Rooftop in both ways Off-Grid and On-Grid. <br>
        			On-Grid system in which the rooftop solar system is integrated with the main grid supply. This system allows power to be used from the grid supply only when the rooftop solar system is unable to supply the required power. Thus, a well-planned rooftop system can efficiently supply power without using grid supply saving expenses otherwise incurred on using power from the grid. <br>
           			Off-Grid system in which the rooftop solar system is not linked to the main grid. This system can run on its own with its own battery. The solar power generated from the rooftop solar system charges the battery which is then used to power various applications.
        	
        </p>
        <p>You just need a Roof-space, to start your journey with us. For more information Contact Us.</p>

    </div>
    <div class="power-savings-right"><img src="wp-content/themes/tpsolar/assets/images/power-savings-pic.jpg"></div>
</div>
<div class="monitoring22">
    <span>COMMERCIAL & INDUSTRIAL</span>
   <div class="power-savings-left">
         <small>
        <p>Solenergi Energies Solar EPC solutions will provide a good return on investment by utilizing idle roof space / Land. Solenergi  provides customized EPC solution as per your need and energy consumption. Commercial & Industrial customers are eligible for Accelerated depreciation benefits for renewables under IT section 32 on investment for solar rooftops, whereas the depreciation claim shall be at 40% of project value in 1st year*</p>
    </small>
    </div>

    <div class="power-savings-right"><img src="wp-content/themes/tpsolar/assets/images/industry.jpg"></div>

</div>
<div class="monitoring22">
    <span>INSTITUTIONAL</span>
    <div class="power-savings-left">
    <small>
        <p>Solenergi Energies solar rooftop solutions for institutions can help a great deal in savings of operating expenditure for institutions such as schools, colleges, universities, non-profit organizations. It will also help to reduce / hedge the cost of power from solar at Rs 3.5 - 5 /unit * & can give 3 – 5* years on payback of investment. Customer can avail net metering offered from state electricity utility companies, any excess generation from solar can be net benefited with reduction in electricity bills.</p>
    </small>
</div>
    <div class="power-savings-right"><img src="wp-content/themes/tpsolar/assets/images/institutions.jpg"></div>
</div>
<div class="monitoring22">
    <span>SOLAR CAR PARKING/ CAR PORT/ELEVATED STRUCTURERS</span>
    <div class="power-savings-left">
    <small>
        <p>Solar rooftop carport is one of the fastest growing trends in photovoltaic solution. Solenergis leads in offering & implementing the solutions for solar powered car park, where user can capitalise on un tapped ground / parking for solar energy generation.</p>
    </small>
</div>
    <div class="power-savings-right"><img style="align-content: center;" src="wp-content/themes/tpsolar/assets/images/car-park.jpg"></div>

</div>
<div class="monitoring22">
    <span>SOLAR FARMS SOLUTIONS (Utility scale)</span>
    <div class="power-savings-left">
    <small>
    	<p>Waaree Energies Solar provides private solar farm solutions across India to commercial and Industrial power consumer with zero or minimum investment (i.e. Third Party and Group Captive) at a discount to grid electricity tariff. We also offer "captive" solutions for those who prefer to own the solar parks by themselves.</p>
        <ul>
            <li>RESCO (Model)</li>
            <li>CAPEX (Model)</li>
            <li>GROUP Captive</li>
        </ul>
    </small>
</div>
 <div class="power-savings-right"><img src="wp-content/themes/tpsolar/assets/images/solar-farm.jpg"></div>
</div>
<div class="monitoring22">
    <span>SOLAR PARK</span>
    <div class="power-savings-left">
    <small>
        <p>Solenergi  provides solar park solution to commercial & industrial power consumers. We also offer "captive" solutions for those who prefer to own the solar parks by their consumption.</p>
    </small>
</div>
 <div class="power-savings-right"><img src="wp-content/themes/tpsolar/assets/images/solar-park.jpg"></div>
</div>
 

</div>
</div>
<div class="clear"></div>




<script type="text/javascript" src="wp-content/themes/tpsolar/assets/js/nav.js"></script>
<script type='text/javascript' src='wp-includes/js/wp-embed.min1845.js?ver=4.9.6'></script>




<script>
function get_result( segment, roof ) {
    $.ajax({
        dataType: 'json',
        data: { filter: 'porject_gallery', project_cat: 6, app_segment: segment, roof_type: roof }
    }).done(function( data ) {
        $('#galleryContainer').html( data.result_set );

        $('#appSegment').html( data.app_segment_list );
        $('#roofType').html( data.roof_type_list );
    });
}
$(function() {
    $('#appSegment').change(function() {
        get_result( $(this).val(), $('#roofType').val() );
    });
    
    $('#roofType').change(function() {
        get_result( $('#appSegment').val(), $(this).val() );
    });
});
</script>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('main', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>