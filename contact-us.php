<?php
error_reporting(0);
include_once("config.php"); 
$page_id = 6;

//code to get description,keywords and titles form DB
$sql = "SELECT * FROM solace_site_SEO where id=".$page_id; 
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

$description=$row['description'];
$keywords= $row['keywords'];
$titles = $row['titles'];
$ipaddress = get_client_ip();
$page_name="Contact Us";
include("header.php")?>

<script>
	$(document).ready(function(){
		$('#contactus').submit(function(){
	
			// show that something is loading
			$('#response').html("<b>Loading response...</b>");
	
			// Call ajax for pass data to other place
			$.ajax({
				type: 'POST',
				url: 'send_email.php',
				data: $(this).serialize() // getting filed value in serialize form
				})
				.done(function(data){ // if getting done then call.
				
				// show the response
				$('#response').html(data);
				 setTimeout(function(){// wait for 5 secs(2)
           location.reload(); // then reload the page.(3)
      }, 5000); 
				
				})
				.fail(function() { // if fail then getting message
	
	// just in case posting your form failed
				alert( "Response sending failed." );
	
				});
	
	// to prevent refreshing the whole page page
			return false;
	
		});
	});
</script>
<link rel="stylesheet" href="niceCountryInput.css">
<script src="https://code.jquery.com/jquery-1.12.4.min.js" 
        integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" 
        crossorigin="anonymous">
</script>
<script type="text/javascript"
src="https://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
<script src="niceCountryInput.js"></script>
<style>


div.polaroid {
  width: 92%;
  height:260px;
  background-color: white;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  margin-bottom: 0px;
  border-radius: 8px;
  float:left;
}

div.polaroid1 {
  width: 100%;
  height:260px;
  background-color: white;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  margin-bottom: 0px;
  border-radius: 8px;
  float:left;
  margin-left:260px;
}
.addr{
margin: -260px 200px 0px ;
padding:0px 50px;
color:black;
width:59%;
}

.office{
	
	 border-radius: 8px 0 0 8px;width:40%;
	 height:260px
	
}

@media (max-width: 667px) {
	div.polaroid {
  width: 100%;
  height:260px;
  background-color: white;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  margin-bottom: 25px;
  border-radius: 8px;
  float:left;
}
div.polaroid1 {
  width: 92%;
  height:260px;
  background-color: white;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  margin-bottom: 0px;
  border-radius: 8px;
  float:left;
  margin-left:0px;
}
.addr{
margin: -259px 86px 0px;
padding:0px 50px;
width:85%;
color:black;
}

.office{
	
	 border-radius: 8px 0 0 8px;width:40%;
	 height:260px
	
}

#contact-content-mid .polaroid p {
      font-size: 13px;
      
    width: 110px;
    text-align: left;
   
}
#contact-content-mid .polaroid1 p {
      font-size: 13px;
      
    width: 110px;
    text-align: left;
   
}

.intl-tel-input.allow-dropdown input, .intl-tel-input.allow-dropdown input[type=text], .intl-tel-input.allow-dropdown input[type=tel], .intl-tel-input.separate-dial-code input, .intl-tel-input.separate-dial-code input[type=text], .intl-tel-input.separate-dial-code input[type=tel] {
    padding-right: 6px;
    padding-left: 52px;
    width: 210px;
    font-size: 16px;
    margin-left: 0;
	}
  #contact-content-mid h1 {
    text-align: center;
  }

  #service-top-banner{position: fixed;z-index: 3;}
  #contact-content{padding: 160px 0 0 0;}

	}
	
	
	@media (max-width: 736px) {
	
	
.addr{
margin: -259px 86px 0px;
padding:0px 80px;
width:85%;
color:black;
}
.intl-tel-input.allow-dropdown input, .intl-tel-input.allow-dropdown input[type=text], .intl-tel-input.allow-dropdown input[type=tel], .intl-tel-input.separate-dial-code input, .intl-tel-input.separate-dial-code input[type=text], .intl-tel-input.separate-dial-code input[type=tel] {
    padding-right: 6px;
    padding-left: 52px;
   width: 210px;
    font-size: 16px;
    margin-left: 0;
	}
	
	}

@media (max-width: 1024px) {
	
	
div.polaroid {
  width: 100%;
  height:260px;
  background-color: white;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  margin-bottom: 25px;
  border-radius: 8px;
  float:left;
}
div.polaroid1 {
  width: 100%;
  height:260px;
  background-color: white;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  margin-bottom: 0px;
  border-radius: 8px;
  float:left;
  margin-left:0px;
}

.addr{
margin: -259px 111px 0px;
padding:0px 50px;
width:85%;
color:black;
}

.office{
	
	 border-radius: 8px 0 0 8px;width:40%;
	 height:260px
	
}

.intl-tel-input.allow-dropdown input, .intl-tel-input.allow-dropdown input[type=text], .intl-tel-input.allow-dropdown input[type=tel], .intl-tel-input.separate-dial-code input, .intl-tel-input.separate-dial-code input[type=text], .intl-tel-input.separate-dial-code input[type=tel] {
    padding-right: 6px;
    padding-left: 52px;
     width: 210px;
    font-size: 16px;
    margin-left: 0;
	}
	
	}
@media (min-width: 640px)and (max-height: 360px){
.addr {
    margin: -259px 222px 0px;
    padding: 0px 50px;
    width: 85%;
    color: black;
}
}
</style>
<link rel="stylesheet" href="intl-tel-input-master/build/css/intlTelInput.css">
  <link rel="stylesheet" href="intl-tel-input-master/build/css/demo.css">

<table width="100%" border="0" cellspacing="0" cellpadding="0" id="spac">
  <tbody>
    <tr>
      <td><img src="images/blank.gif" alt=""/></td>
    </tr>
  </tbody>
</table>



<!--  TOP BANNER SECTION -->
   <div id="service-top-banner">
     <div id="service-top-banner-mid">
	   <h1>LET’S TALK</h1>
	   <p>We are eager to listen from you.</p>
	 </div>
   </div>
<!-- TOP BANNER SECTION -->



<!-- CONTACT US PAGE CONTENT SECTION -->
<div id="contact-content">
  <div id="contact-content-mid">
    <div id="full-sec-bor"><br>
		 <h1>Contact Us</h1>
         <table width="100%" border="0" cellspacing="0" cellpadding="0" class="title-bor">
            <tbody>
                <tr>
                    <td align="center" valign="middle"></td>
                    <td align="center" valign="middle">
                      <h2>What can we help you with today?</h2>
					  <p style="display: table; background-color: #fff;">Fill out a form below and we will be in touch with you shortly</p>
                    </td>
                   <td align="center" valign="middle"></td>
              </tr>
            </tbody>
         </table><br>
         
      <div id="contact-form">
      
		<form id="contactus">
            <input type="text" style="width: 95%;" required class="halffield" name="fname" placeholder="Full Name*" title="Full Name*" autocomplete="off">
          
          <input type="email" required class="halffield" name="email" placeholder="Email*" title="Email*" autocomplete="off">
         
        

       <input type="hidden" style="display:block"  id="output" name="phone" value="" >
       <input id="phone" type="tel" placeholder="01-1234-5678-90"  class="halffield" required> 
			<!--<input id="phone"  placeholder="Phone*" class="halffield" type="tel" name="phone" required> 
-->
			
          <input type="text"  class="halffield" name="company" placeholder="Company Name" title="Company Name" autocomplete="off">
          
          
         
          <input class="halfselfield" name="role" placeholder="What is your role?" title="What is your role?" autocomplete="off">
             
          <input class="fullselfield" name="duration" placeholder="Estimated Duration of Your Project" title="Estimated Duration of Your Project" autocomplete="off">
           
          <input class="fullselfield" name="start" placeholder="How soon do you want to start Your Project?" title="How soon do you want to start Your Project?" autocomplete="off">
         
          <textarea required class="fulltxtfield" name="requirement" placeholder="Tell us a bit about your requirements *" title="Tell us a bit about your requirements"></textarea>
          <input type="text" name="ip_address" style="display:none;"id="ip_address" value="<?php echo $ipaddress;?>"/>
          <input type="submit" class="send-button" title="Send" value="Send">
                
        </form>
        	<div id='response' style="color: #ff9008;
    font-size: 21px;"></div>
      </div>
      <div id="contact-info">
        <div id="info-sec">
          <img src="images/taltosale.png" alt="" class="btm-box-icon-m"/>
          <h3>Talk to Sales</h3>
          <p>
            Interested in hiring developers? Get answers to all your questions. Call to discuss your requirements with a  member of our sales team.<br>
			<!-- <span class="orange-tel"><a href="tel:+91 9922551001">India: +91 992 255 1001</a></span><br> -->
            <span class="orange-tel"><a href="tel:+919028987312">India: +91 90289 87312</a></span><br>
			<span class="orange-tel"><a href="tel:+16264665906">USA: +1-626-466-5906</a></span>
          </p>
        </div>
        <div id="info-sec" style="border-bottom: none;">
          <img src="images/joinsolace.png" alt="" class="btm-box-icon-m"/>
		  <h4>Join Solace Infotech</h4>
          <p>
            Looking to join Solace infotech team? Be part of something special. For submitting your resume for open positions, click on the following link.<br>
			<span class="orange-tel"><a href="career.html">Careers</a></span>
          </p>
        </div>
      </div>
      <div class="clr"></div>
      
      
    </div>
   
    <div id="full-sec-bor" class="btm-nobor">
	  	<h1 style="margin-left: 14px;">Office</h1>
	  	<div class="row" style="margin-left: 1px;">
	  		
				<div class="col-sm-6">
		    	<div class="polaroid1" >
		  			<img src="images/us.jpg" alt="5 Terre" class="office">
					 	<div class="addr">
						<h3><strong>USA</strong></h3>
			 				<h3>Arcadia</h3>
							<p style="color:black;margin-top:20px; font-size:12px;">	<strong>Address:</strong><br/><br/>
								1119 <br>W Duarte Rd,<br> Arcadia, CA 91007.
						</div>
					</div>
				</div>
				
			</div><br>
			<div class="row" style="margin-left: 1px;">
	  		<div class="col-sm-6">
		    	<div class="polaroid">
		  			<img src="https://www.trodly.com/pictures/attraction/5152.jpg" alt="5 Terre" class="office">
					 	<div class="addr">
						 <h3><strong>INDIA</strong></h3>
			 				<h3>Nashik</h3>
							<p style="color:black;font-size:12px;">	<strong>Address:</strong><br/><br/>
                            4th Floor, Samraat Nucleus, Bombay Naka, Nashik - 422001.</p>
						</div>
					</div>
				</div>
				
				<div class="col-sm-6">
		    	<div class="polaroid">
		  			<img src="https://image3.mouthshut.com/images/imagesp/925740392s.jpg" alt="5 Terre" class="office">
					 	<div class="addr">
						<h3><strong>INDIA</strong></h3>
			 				<h3>Pune</h3>
							<p style="color:black; font-size:12px;"><strong>Address:</strong><br/><br/>
								207, Supreme HQ Headquarters, NH-4 , Baner, Pune - 411021.<br></p>
						</div>
					</div>
				</div>
				
			</div>
			</div>
     
  	  
      <div class="clr"></div>
	  <br><p>&nbsp;  </p><br>
      </div>
    
    
  </div>
</div>
<!-- CONTACT US PAGE CONTENT SECTION -->


  <script src="intl-tel-input-master/build/js/intlTelInput.js"></script>
  <script>
  	var countryData = window.intlTelInputGlobals.getCountryData(),
  	 input = document.querySelector("#phone"),
  output = document.querySelector("#output");
  

var iti = window.intlTelInput(input, {
  nationalMode: true,
  geoIpLookup: function(callback) {
  	//alert("hii");
         $.get("http://ipinfo.io", function() {}, "jsonp").always(function(resp) {
           var countryCode = (resp && resp.country) ? resp.country : "";
           callback(countryCode);
       });
      },
  utilsScript: "intl-tel-input-master/build/js/utils.js?1537717752654" // just for formatting/placeholders etc
});


var handleChange = function() {
  var text = (iti.isValidNumber()) ?  iti.getNumber() : "";
  //var textNode = document.createTextNode(text);
  //output.innerHTML = "";
  output.value=text;
   
 /*
  for (var i = 0; i < countryData.length; i++) {
  var country = countryData[i];
 // alert(country.name);
  var optionNode = document.createElement("option");
  optionNode.value = country.iso2;
  var textNode = document.createTextNode(country.name);
  optionNode.appendChild(textNode);
  addressDropdown.appendChild(optionNode);
}
*/
};

// listen to "keyup", but also "change" to update when the user selects a country
input.addEventListener('change', handleChange);
input.addEventListener('keyup', handleChange);
  
  </script>


<!-- FOLLOW US SECTION -->
<?php 
// Function to get the client IP address
function get_client_ip() {
  $ipaddress = '';
  if (isset($_SERVER['HTTP_CLIENT_IP']))
      $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
  else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
      $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
  else if(isset($_SERVER['HTTP_X_FORWARDED']))
      $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
  else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
      $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
  else if(isset($_SERVER['HTTP_FORWARDED']))
      $ipaddress = $_SERVER['HTTP_FORWARDED'];
  else if(isset($_SERVER['REMOTE_ADDR']))
      $ipaddress = $_SERVER['REMOTE_ADDR'];
  else
      $ipaddress = 'UNKNOWN';
  return $ipaddress;
}


include("footer.php")?>

