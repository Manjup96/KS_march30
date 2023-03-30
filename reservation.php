<!DOCTYPE html>
<html lang="en">
<?php
  include 'links2.php';
?>

<body>
<?php
 $page = 'reservation';
  include 'navbar2.php';
?>



<div class="container" style="padding-top:20px;padding-bottom:150px;" data-aos="flip-right">
  <div class="row">
    <div class="col-md-12">

	<p style="font-size:20px;font-family:roboto;">For any of the advance or pre booking of the Resort, please fill up the form and our executive will get back to you for assistance.</p>    
</div>
        </div>

        <div>   
    <!-- contact form starts -->
      
       
    <section id="contact" class="contact">

<div class="container ">
 
    <form action="forms/contact.php" method="post" role="form" class="php-email-form" >
      <div class="row" style="font-family:Open Sans, sans-serif;">
        <h2 class="text-center fs-2 pb-4">Reserve Now </h2>
        <div class="col-md-6 form-group">
          <input type="text" name="firstname" class="form-control border border-dark" id="First name" placeholder="First Name"  style="font-size: 18px;" required>
        </div>

        <div class="col-md-6 form-group">
          <input type="text" name="lastname" class="form-control border border-dark" id="Last name" placeholder="Last Name" style="font-size: 18px;" required>
        </div>

        <div class="col-md-6 form-group">
          <input type="text" name="Address" class="form-control border border-dark" id="Address" placeholder="Address" style="font-size: 18px;" required>
        </div>
        <div class="col-md-6 form-group">
          <input type="text" name="City" class="form-control border border-dark" id="City" placeholder="City" style="font-size: 18px;" required>
        </div>
         <div class="col-md-6 form-group">
         
        
          <select class="form-control input-block-level border border-dark" id="Country" placeholder="Country" name='Country'  style="font-size: 18px;" required>
			<option value='-None-'>-None-</option>
			<option value='Afghanistan'>Afghanistan</option>
			<option value='Albania'>Albania</option>
			<option value='Algeria'>Algeria</option>
			<option value='American&#x20;Samoa'>American Samoa</option>
			<option value='Andorra'>Andorra</option>
			<option value='Angola'>Angola</option>
			<option value='Anguilla'>Anguilla</option>
			<option value='Antigua&#x20;and&#x20;Barbuda'>Antigua and Barbuda</option>
			<option value='Argentina'>Argentina</option>
			<option value='Armenia'>Armenia</option>
			<option value='Aruba'>Aruba</option>
			<option value='Australia'>Australia</option>
			<option value='Austria'>Austria</option>
			<option value='Azerbaijan'>Azerbaijan</option>
			<option value='Azores'>Azores</option>
			<option value='Bahamas'>Bahamas</option>
			<option value='Bahrain'>Bahrain</option>
			<option value='Banaba&#x20;Island'>Banaba Island</option>
			<option value='Bangladesh'>Bangladesh</option>
			<option value='Barbados'>Barbados</option>
			<option value='Belarus'>Belarus</option>
			<option value='Belgium'>Belgium</option>
			<option value='Belize'>Belize</option>
			<option value='Benin'>Benin</option>
			<option value='Bermuda'>Bermuda</option>
			<option value='Bhutan'>Bhutan</option>
			<option value='Bolivia'>Bolivia</option>
			<option value='Bosnia&#x20;and&#x20;Herzegovina'>Bosnia and Herzegovina</option>
			<option value='Botswana'>Botswana</option>
			<option value='Brazil'>Brazil</option>
			<option value='British&#x20;Virgin&#x20;Islands'>British Virgin Islands</option>
			<option value='Brunei'>Brunei</option>
			<option value='Bulgaria'>Bulgaria</option>
			<option value='Burkina&#x20;Faso'>Burkina Faso</option>
			<option value='Burma'>Burma</option>
			<option value='Burundi'>Burundi</option>
			<option value='Cambodia'>Cambodia</option>
			<option value='Cameroon'>Cameroon</option>
			<option value='Canada'>Canada</option>
			<option value='Cape&#x20;Verde'>Cape Verde</option>
			<option value='Cayman&#x20;Islands'>Cayman Islands</option>
			<option value='Central&#x20;African&#x20;Republic'>Central African Republic</option>
			<option value='Chad'>Chad</option>
			<option value='Channel&#x20;Islands'>Channel Islands</option>
			<option value='Chile'>Chile</option>
			<option value='China'>China</option>
			<option value='Christmas&#x20;Island'>Christmas Island</option>
			<option value='Cocos&#x20;&#x28;Keeling&#x29;&#x20;Islands'>Cocos (Keeling) Islands</option>
			<option value='Colombia'>Colombia</option>
			<option value='Comoros'>Comoros</option>
			<option value='Congo'>Congo</option>
			<option value='Cook&#x20;Islands'>Cook Islands</option>
			<option value='Costa&#x20;Rica'>Costa Rica</option>
			<option value='Cote&#x20;d&#x27;Ivoire'>Cote d'Ivoire</option>
			<option value='Croatia'>Croatia</option>
			<option value='Cuba'>Cuba</option>
			<option value='Cyprus'>Cyprus</option>
			<option value='Czech&#x20;Republic'>Czech Republic</option>
			<option value='Denmark'>Denmark</option>
			<option value='Djibouti'>Djibouti</option>
			<option value='Dominica'>Dominica</option>
			<option value='Dominican&#x20;Republic'>Dominican Republic</option>
			<option value='East&#x20;Timor'>East Timor</option>
			<option value='Easter&#x20;Island'>Easter Island</option>
			<option value='Ecuador'>Ecuador</option>
			<option value='Egypt'>Egypt</option>
			<option value='El&#x20;Salvador'>El Salvador</option>
			<option value='Equatorial&#x20;Guinea'>Equatorial Guinea</option>
			<option value='Eritrea'>Eritrea</option>
			<option value='Estonia'>Estonia</option>
			<option value='Ethiopia'>Ethiopia</option>
			<option value='Falkland&#x20;Islands'>Falkland Islands</option>
			<option value='Faroe&#x20;Islands'>Faroe Islands</option>
			<option value='Fiji'>Fiji</option>
			<option value='Finland'>Finland</option>
			<option value='France'>France</option>
			<option value='French&#x20;Antilles'>French Antilles</option>
			<option value='French&#x20;Guiana'>French Guiana</option>
			<option value='French&#x20;Polynesia'>French Polynesia</option>
			<option value='Gabon'>Gabon</option>
			<option value='Gambia'>Gambia</option>
			<option value='Georgia'>Georgia</option>
			<option value='Germany'>Germany</option>
			<option value='Ghana'>Ghana</option>
			<option value='Gibraltar'>Gibraltar</option>
			<option value='Greece'>Greece</option>
			<option value='Greenland'>Greenland</option>
			<option value='Grenada'>Grenada</option>
			<option value='Guadeloupe'>Guadeloupe</option>
			<option value='Guam'>Guam</option>
			<option value='Guatemala'>Guatemala</option>
			<option value='Guernsey'>Guernsey</option>
			<option value='Guinea'>Guinea</option>
			<option value='Guinea-Bissau'>Guinea-Bissau</option>
			<option value='Guyana'>Guyana</option>
			<option value='Haiti'>Haiti</option>
			<option value='Holy&#x20;See&#x20;&#x28;Vatican&#x20;City&#x29;'>Holy See (Vatican City)</option>
			<option value='Honduras'>Honduras</option>
			<option value='Hong&#x20;Kong'>Hong Kong</option>
			<option value='Hungary'>Hungary</option>
			<option value='Iceland'>Iceland</option>
			<option value='India' selected>India</option>
			<option value='Indonesia'>Indonesia</option>
			<option value='Iran'>Iran</option>
			<option value='Iraq'>Iraq</option>
			<option value='Ireland'>Ireland</option>
			<option value='Israel'>Israel</option>
			<option value='Italy'>Italy</option>
			<option value='Jamaica'>Jamaica</option>
			<option value='Japan'>Japan</option>
			<option value='Jersey'>Jersey</option>
			<option value='Jordan'>Jordan</option>
			<option value='Kazakhstan'>Kazakhstan</option>
			<option value='Kenya'>Kenya</option>
			<option value='Kiribati'>Kiribati</option>
			<option value='Korea,&#x20;North'>Korea, North</option>
			<option value='Korea,&#x20;South'>Korea, South</option>
			<option value='Kuwait'>Kuwait</option>
			<option value='Kyrgyzstan'>Kyrgyzstan</option>
			<option value='Laos'>Laos</option>
			<option value='Latvia'>Latvia</option>
			<option value='Lebanon'>Lebanon</option>
			<option value='Leichenstein'>Leichenstein</option>
			<option value='Lesotho'>Lesotho</option>
			<option value='Liberia'>Liberia</option>
			<option value='Libya'>Libya</option>
			<option value='Liechtenstein'>Liechtenstein</option>
			<option value='Lithuania'>Lithuania</option>
			<option value='Lord&#x20;Howe&#x20;Island'>Lord Howe Island</option>
			<option value='Luxembourg'>Luxembourg</option>
			<option value='Macau'>Macau</option>
			<option value='Macedonia'>Macedonia</option>
			<option value='Madagascar'>Madagascar</option>
			<option value='Madria'>Madria</option>
			<option value='Malawi'>Malawi</option>
			<option value='Malaysia'>Malaysia</option>
			<option value='Maldives'>Maldives</option>
			<option value='Mali'>Mali</option>
			<option value='Malta'>Malta</option>
			<option value='Man,&#x20;Isle&#x20;of'>Man, Isle of</option>
			<option value='Marshall&#x20;Islands'>Marshall Islands</option>
			<option value='Martinique'>Martinique</option>
			<option value='Mauritania'>Mauritania</option>
			<option value='Mauritius'>Mauritius</option>
			<option value='Mayotte'>Mayotte</option>
			<option value='Mexico'>Mexico</option>
			<option value='Micronesia'>Micronesia</option>
			<option value='Midway&#x20;Islands'>Midway Islands</option>
			<option value='Moldova'>Moldova</option>
			<option value='Monaco'>Monaco</option>
			<option value='Mongolia'>Mongolia</option>
			<option value='Mongolian&#x20;People&#x27;s&#x20;Republic'>Mongolian People's Republic</option>
			<option value='Montenegro'>Montenegro</option>
			<option value='Montserrat'>Montserrat</option>
			<option value='Morocco'>Morocco</option>
			<option value='Morovia'>Morovia</option>
			<option value='Mozambique'>Mozambique</option>
			<option value='Myanmar'>Myanmar</option>
			<option value='Namibia'>Namibia</option>
			<option value='Nauru'>Nauru</option>
			<option value='Nepal'>Nepal</option>
			<option value='Netherlands'>Netherlands</option>
			<option value='Netherlands&#x20;Antilles'>Netherlands Antilles</option>
			<option value='New&#x20;Caledonia'>New Caledonia</option>
			<option value='New&#x20;Zealand'>New Zealand</option>
			<option value='Nicaragua'>Nicaragua</option>
			<option value='Niger'>Niger</option>
			<option value='Nigeria'>Nigeria</option>
			<option value='Niue'>Niue</option>
			<option value='Norfolk&#x20;Island'>Norfolk Island</option>
			<option value='Northern&#x20;Ireland'>Northern Ireland</option>
			<option value='Northern&#x20;Mariana&#x20;Islands'>Northern Mariana Islands</option>
			<option value='Norway'>Norway</option>
			<option value='Oman'>Oman</option>
			<option value='Pakistan'>Pakistan</option>
			<option value='Palau'>Palau</option>
			<option value='Panama'>Panama</option>
			<option value='Papua&#x20;New&#x20;Guinea'>Papua New Guinea</option>
			<option value='Paraguay'>Paraguay</option>
			<option value='Peru'>Peru</option>
			<option value='Philippines'>Philippines</option>
			<option value='Pitcairn&#x20;Islands'>Pitcairn Islands</option>
			<option value='Poland'>Poland</option>
			<option value='Portugal'>Portugal</option>
			<option value='Puerto&#x20;Rico'>Puerto Rico</option>
			<option value='Qatar'>Qatar</option>
			<option value='Reunion'>Reunion</option>
			<option value='Romania'>Romania</option>
			<option value='Russia'>Russia</option>
			<option value='Rwanda'>Rwanda</option>
			<option value='Saint&#x20;Helena'>Saint Helena</option>
			<option value='Saint&#x20;Kitts&#x20;and&#x20;Nevis'>Saint Kitts and Nevis</option>
			<option value='Saint&#x20;Lucia'>Saint Lucia</option>
			<option value='Saint&#x20;Pierre&#x20;and&#x20;Miquelon'>Saint Pierre and Miquelon</option>
			<option value='Saint&#x20;Vincent&#x20;and&#x20;the&#x20;Grenadines'>Saint Vincent and the Grenadines</option>
			<option value='Samoa'>Samoa</option>
			<option value='San&#x20;Andr&eacute;s&#x20;y&#x20;Providencia'>San Andrés y Providencia</option>
			<option value='San&#x20;Marino'>San Marino</option>
			<option value='Sao&#x20;Tome&#x20;and&#x20;Principe'>Sao Tome and Principe</option>
			<option value='Saudi&#x20;Arabia'>Saudi Arabia</option>
			<option value='Scotland'>Scotland</option>
			<option value='Senegal'>Senegal</option>
			<option value='Serbia'>Serbia</option>
			<option value='Seychelles'>Seychelles</option>
			<option value='Sierra&#x20;Leone'>Sierra Leone</option>
			<option value='Singapore'>Singapore</option>
			<option value='Slovakia'>Slovakia</option>
			<option value='Slovenia'>Slovenia</option>
			<option value='Solomon&#x20;Islands'>Solomon Islands</option>
			<option value='Somalia'>Somalia</option>
			<option value='South&#x20;Africa'>South Africa</option>
			<option value='Spain'>Spain</option>
			<option value='Sri&#x20;Lanka'>Sri Lanka</option>
			<option value='Sudan'>Sudan</option>
			<option value='Suriname'>Suriname</option>
			<option value='Swaziland'>Swaziland</option>
			<option value='Sweden'>Sweden</option>
			<option value='Switzerland'>Switzerland</option>
			<option value='Syria'>Syria</option>
			<option value='Tahiti'>Tahiti</option>
			<option value='Taiwan'>Taiwan</option>
			<option value='Tajikistan'>Tajikistan</option>
			<option value='Tanzania'>Tanzania</option>
			<option value='Thailand'>Thailand</option>
			<option value='Tibet'>Tibet</option>
			<option value='Togo'>Togo</option>
			<option value='Tokelau'>Tokelau</option>
			<option value='Tonga'>Tonga</option>
			<option value='Trinidad&#x20;and&#x20;Tobago'>Trinidad and Tobago</option>
			<option value='Tunisia'>Tunisia</option>
			<option value='Turkey'>Turkey</option>
			<option value='Turkmenistan'>Turkmenistan</option>
			<option value='Turks&#x20;and&#x20;Caicos&#x20;Islands'>Turks and Caicos Islands</option>
			<option value='Tuvalu'>Tuvalu</option>
			<option value='Uganda'>Uganda</option>
			<option value='Ukraine'>Ukraine</option>
			<option value='United&#x20;Arab&#x20;Emirates'>United Arab Emirates</option>
			<option value='United&#x20;Kingdom'>United Kingdom</option>
			<option value='United&#x20;States'>United States</option>
			<option value='Uruguay'>Uruguay</option>
			<option value='Uzbekistan'>Uzbekistan</option>
			<option value='Vanuatu'>Vanuatu</option>
			<option value='Vatican&#x20;City'>Vatican City</option>
			<option value='Venezuela'>Venezuela</option>
			<option value='Vietnam'>Vietnam</option>
			<option value='Virgin&#x20;Islands'>Virgin Islands</option>
			<option value='Wales'>Wales</option>
			<option value='Wallis&#x20;&amp;&#x20;Futuna'>Wallis & Futuna</option>
			<option value='Western&#x20;Sahara'>Western Sahara</option>
			<option value='Yemen'>Yemen</option>
			<option value='Yugoslavia'>Yugoslavia</option>
			<option value='Zambia'>Zambia</option>
			<option value='Zimbabwe'>Zimbabwe</option>
		</select>


        </div>
        <div class="col-md-6 form-group">
          <input type="text" name="Address" class="form-control border border-dark" id="Address" placeholder="Address" style="font-size: 18px;" required>
        </div>

        <div class="form-group mt-3">
          <input type="email" class="form-control border border-dark" name="email" id="email" placeholder="Your Email" style="font-size: 18px;" required>
        </div>
     
      <div class="form-group mt-3">
        <input type="text" class="form-control border border-dark" name="subject" id="subject" placeholder="Subject" style="font-size: 18px;" required>
      </div>
      <div class="col-md-6 form-group">
          <input type="text" name="No of adults" class="form-control border border-dark" id="No of adults" placeholder="No of adults"  style="font-size: 18px;" required>
        </div>

        <div class="col-md-6 form-group">
          <input type="text" name="No of childrens" class="form-control border border-dark" id="No of childrens" placeholder="No of childrens" style="font-size: 18px;" required>
        </div>
     
        <div class="col-md-6 form-group">
          <input type="text" name="No of Infants" class="form-control border border-dark" id="No of Infants" placeholder="No of Infants" style="font-size: 18px;" required>
        </div>

        <div class="col-md-6 form-group">
         
       <select class="form-control border border-dark" id="selectResort" name=""  placeholder="Type of accommodation"  style="font-size: 18px;" required><option value="Type of accommodation"> Type of accommodation</option>
									
                <option value='Garden Cottage'>Garden Cottage</option>
                <option value='Emperor Suite'>Emperor Suite</option>
                <option value='Villa'>Villa</option>
</select>
        </div>
        <div class="col-md-6 form-group">
          <input type="text" name="check In date" class="form-control border border-dark" id="check In date" placeholder="check In date" style="font-size: 18px;" required>
        </div>
        <div class="col-md-6 form-group">
          <input type="text" name="check In date" class="form-control border border-dark" id="check Out date" placeholder="check Out date" style="font-size: 18px;" required>
        </div>



        </div>
      <div class="my-3">
        <div class="loading">Loading</div>
        <div class="error-message"></div>
        <div class="sent-message">Your message has been sent. Thank you!</div>
      </div>
      <div class="text-center fs-5" style="border-radius:2px;"><button type="submit">Submit</button></div>
    </form>

  </div>
  </section> 
  <!-- contact form ends here -->

        </div>
    </div>
  </div>
</div>





 <?php
include 'footer_ipad.php';
include 'footer_desktop.php';
include 'copyright.php';
 include 'scrollup.php';
 include 'whatsapp.php';
  ?>

<!-- Animation links -->
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init({
      offset: 120, // offset (in px) from the original trigger point
  delay: 0, // values from 0 to 3000, with step 50ms
  duration: 3000, // values from 0 to 3000, with step 50ms
  easing: 'ease', // default easing for AOS animations
  once: false, // whether animation should happen only once - while scrolling down
  mirror: false, // whether elements should animate out while scrolling past them
  anchorPlacement: 'top-bottom', 
    });
  </script>
</body>
</html>