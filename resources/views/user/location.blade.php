<html lang="">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Propeller Admin Dashboard">
<meta content="width=device-width, initial-scale=1, user-scalable=no" name="viewport">

<title>FROODY</title>

<link rel="shortcut icon" type="image/x-icon" href="{{asset('vendor_css/images/favicon.png')}}">
<!-- Bootstrap css -->
<link rel="stylesheet" type="text/css" href="{{asset('vendor_css/css/bootstrap.min.css')}}">
<!-- build:[href] assets/css/ -->
<link rel="stylesheet" type="text/css" href="{{asset('vendor_css/css/propeller.min.css')}}">

<!-- Google icon -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <script src="https://js.pusher.com/5.0/pusher.min.js"></script>
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #address-map-container {
        height: 75%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        max-height: 100%;
        margin: 0;
        padding: 0;
      }
       a[href^="http://maps.google.com/maps"],
a[href^="https://maps.google.com/maps"],
a[href^="https://www.google.com/maps"] {
    display: none !important;
}
.gm-bundled-control .gmnoprint {
    display: block;
}
.gmnoprint:not(.gm-bundled-control) {
    display: none;
}

.pac-logo:after {
    content: "";
    padding: 1px 1px 1px 0;
    height: 18px;
    box-sizing: border-box;
    text-align: right;
    display: none;  
}

#form_div{
height: 80%;
}
#search_div{
height: 80%;
}
#address_a{
  display: block;
  width: 80%;
  max-width: 80%;
  color: #726e6e;
  overflow: hidden;
  white-space: nowrap;
  text-overflow: ellipsis;

}
#address_b{
  display: block;
  width: 80%;
  max-width: 80%;
  color: #726e6e;
  overflow: hidden;
  white-space: nowrap;
  text-overflow: ellipsis;

}
#comfirmbtn a{
  display: block;
  background-color: #f32525;
  border-radius: 6px;
  font-size: 20px;
  padding: 10px 25px 10px 25px;
  margin-top: 10px;
  margin-bottom: 10px;
 color: #fff;
}
.dark_map{
  visibility: .5;
}
.pmd-card{
  margin-bottom: 0;
}
.rdo{
 background-color: #e5e5e5;
  padding: 3px 0px 3px 0px;
  margin-right: 10px;
   border-radius: 4px;
   color: #999;
  border: .5px solid #ccc
}
.pac-container {
  box-shadow: none;
}

.pac-item {
    line-height: 40px;
    font-size: 15px;
}
.pac-matched {
    font-size: 15px;
}
.pac-item-query{
 display: inline;
  font-size: 15px;
}
.pac-icon {margin-top: 10px;}
    </style>
  </head>
  <body>
  
<div id="address-map-container" style="width:100%;height:70%;">
    <div style="width: 100%; height: 100%" id="address-map"></div>
</div>
 
<div id="btm"  class="pmd-card pmd-z-depth form_div" style="margin-bottom: 0">
        <div class="pmd-card-body">

          <div class="group-fields clearfix row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <h3 style="margin-top: 5px; font-size:20px">Select delivery location</h3>
            </div>
          </div>
<div id="address_diva">
     <p style="margin: 5px 1px 3px 5px; font-size: 11px">YOUR LOCATION</p>
     <a id="address_a" ><i class="fa fa-check-circle-o" style="font-size:18px;color:#f4511e;"></i></a>
     <a style="color: #f4511e;;float: right;margin-top: -21px;">CHANGE</a>
     <li style="min-height: .5px; max-height: .5px; list-style: none; margin-top: 10px; background-color: grey"></li>
    
  </div>
        </div>

        <div class="pmd-card-actions">
          <p align="center">
          <button class="btn pmd-ripple-effect btn-danger " onclick="show_form()" name="btnAdd">Confirm location & Proceed</button>
          </p>
        </div>
      </div>

      <div id="form_div"  class="pmd-card pmd-z-depth form_div" style="margin-bottom: 0; display:none;">
        <div class="pmd-card-body">

          <div class="group-fields clearfix row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
             <h3 style="margin-top: 5px; font-size:20px">Enter address details<span onclick="hide_form()" class="close">&times;</span></h3>
 
            </div>
          </div>
<div id="address_divb">
  <form method="post" action="{{ route('user-new_address_submit') }}">
    @csrf
     <p style="margin: 5px 1px 3px 5px; font-size: 11px">YOUR LOCATION</p>
     <a id="address_b" ><i class="fa fa-check-circle-o" style="font-size:18px;color:#f4511e;"></i></a>
     <a style="color: #f4511e;float: right;margin-top: -21px;">CHANGE</a>
     <li style="min-height: .5px; max-height: .5px; list-style: none; margin-top: 10px; background-color: grey"></li>
    <input type="hidden" id="address-input1" name="address_address" class="form-control">
    <input type="hidden" name="address_latitude" id="address-latitude1" value="0" />
    <input type="hidden" name="address_longitude" id="address-longitude1" value="0" />
     <input type="hidden" name="old_latitude" value="{{app('request')->input('latitude')}}" />
    <input type="hidden" name="old_longitude" value="{{app('request')->input('longitude')}}" />
    <input type="hidden" name="old_range" value="{{app('request')->input('range')}}" />
    <input type="hidden" name="address_pincode" id="address-pincode" value="0" />
  </div>
       <div class="group-fields clearfix row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <div class="form-group pmd-textfield">
                <label for="name" class="control-label">
                  Name *
                </label>
                <input type="text" name="name" id="name" class="form-control" placeholder="Name" required=""><span class="pmd-textfield-focused"></span>
              </div>
            </div>
      
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <div class="form-group pmd-textfield">
                <label for="address" class="control-label">
                  Complete Address*
                </label>
                <input type="text" name="address" id="address" class="form-control" placeholder="Complete Address" required=""><span class="pmd-textfield-focused"></span>
              </div>
            </div>
        
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <div class="form-group pmd-textfield">
                <label for="mobile" class="control-label">
                  Contact no.*
                </label>
                <input type="text" name="mobile" id="mobile" class="form-control" placeholder="Contact no." required=""><span class="pmd-textfield-focused"></span>
              </div>
            </div>
      
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <div class="form-group pmd-textfield">
                <label for="landmark" class="control-label">
                  Landmark
                </label>
                <input type="text" name="landmark" id="landmark" class="form-control" placeholder="Landmark ( Optional )"><span class="pmd-textfield-focused"></span>
              </div>
            </div>
            <input type="hidden" name="address_type" id="address_type" value="Home" class="form-control" required="">
             <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
              <a class="btn rdo" data-id="Home">Home</a>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
              <a class="btn rdo" data-id="Work">Work</a>
            </div>
          </div>
            
        </div>
 
              
        <div class="pmd-card-actions">
          <p align="center">
          <button type="submit" class="btn pmd-ripple-effect btn-danger " name="btnAdd">Save Address</button>
          </p>
        </div>
      </form>
      </div>




<div id="search_div"  class="pmd-card pmd-z-depth form_div" style="margin-bottom: 0; display:none; min-height: 80%">
        <div class="pmd-card-body">

          <div class="group-fields clearfix row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
             <h3 style="margin-top: 5px; font-size:20px">Search location<span onclick="hide_form()" class="close">&times;</span></h3>
 
            </div>
          </div>

       <div class="group-fields clearfix row">
           
          <div style="padding-right: -1px;padding-left: -1px;" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <div class="form-group pmd-textfield">
                <input type="text" id="address-input" placeholder="Search your location..." name="address_address" class="form-control map-input">
                <input type="hidden" name="address_latitude" id="address-latitude" value="0" />
                <input type="hidden" name="address_longitude" id="address-longitude" value="0" />
              </div>
            </div>
          </div> 
        </div>
      </div>
<script src="{{asset('vendor_css/js/jquery-2.1.4.min.js')}}"></script> 
<script src="{{asset('vendor_css/js/bootstrap.min.js')}}"></script> 
<script src="{{asset('vendor_css/js/propeller.min.js')}}"></script>
<script type="text/javascript">
  function show_form() {
    $('#form_div').slideDown(900);
    $('#btm').attr('style','display:none;');
    $('#search_div').attr('style','display:none;');
 $('#address-map-container').attr('style','width:100%;height:20%;');
  }

   function hide_form() {
    $('#btm').slideDown(500);
    $('#form_div').attr('style','display:none;');
    $('#search_div').attr('style','display:none;');
 $('#address-map-container').attr('style','width:100%;height:70%;');
  }
  $('.rdo').click(function(){
    var val = $(this).data('id');
   $('#address_type').val(val);
  });
   $('#address_diva').click(function(){
     $('#address-input').val('');
     $('#search_div').slideDown(900);
    $('#btm').attr('style','display:none;');
    $('#form_div').attr('style','display:none;');
 $('#address-map-container').attr('style','width:100%;height:20%;');
  });
   $('#address_divb').click(function(){
     $('#address-input').val('');
     $('#search_div').slideDown(900);
    $('#form_div').attr('style','display:none;');
  });
</script> 
   <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAs1Bx6zAVcChqXCf9Q_W5om9x9ecFRung&libraries=places&callback=getLocation" async defer></script>
   <script type="text/javascript" src="{{ asset('vendor_css/js/mapinput.js') }}"></script>
  </body>
</html>

     