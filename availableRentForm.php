 <!-- multistep form -->
<!-- <form id="msform" action="backend/bavailableForm.php" method="POST" onSubmit="alert('Successfully Submit')"> -->
  <div id="msform">
  <ul id="progressbar">
    <li class="active">Basic Info</li>
    <li>Main Features</li>
    <li>Other Facilities</li>
  </ul>
  <!-- fieldsets -->
  <fieldset>
    <h2 class="fs-title">Available Rent Form</h2>
    <h3 class="fs-subtitle">* is the mandatory field</h3>
    
        <div>
            <label  class="labelForm">Name*</label>
            <input type="text" id="aname" name="aname" placeholder="Your name" required>
        </div>

        <div>
            <label class="labelForm">Phone Number*</label>
            <input type="number" id="aphoneNumber" name="aphoneNumber" placeholder="Your phone number" required>
        </div>

        <div>
            <label class="labelForm">Care of</label>
            <input type="text" id="acareOf" name="acareOf" placeholder="Care of">
        </div>
   
    <!-- <input type="password" name="pass" placeholder="Password" />
    <input type="password" name="cpass" placeholder="Confirm Password" /> -->
    <input type="button" name="next" onclick="availableOneResult()" class="next action-button" value="Next" />
  </fieldset>
  <fieldset>
    <h2 class="fs-title">Main Features</h2>
    <h3 class="fs-subtitle">* is the mandatory field</h3>

        <div>
            <label class="labelForm">Complete Address*</label>
            <input type="text" id="acompleteAddress" name="acompleteAddress" placeholder="Your Complete Address" required>
        </div>

        <div>
            <label class="labelForm">Society Name*</label>
            <input type="text" id="asocietyName" name="asocietyName" placeholder="Your Society Name" required>
        </div>

       

        

        <div >
            <label class="labelForm">Type*</label><br>

            <div class="col-4">
                <div style="width:30%;display:inline;float:left;">
                    <input style="float:right;"type="radio" id="atype1" name="atype" value="plot" checked>
                </div> 
                <div style="width:70%;display:inline;float:right;">
                   <span class="col-4-Text"> Plot</span>
                </div>    
             </div>

             <div class="col-4">
                <div style="width:30%;display:inline;float:left;">
                    <input  style="display:inline;" type="radio" id="atype2" name="atype" value="banglow">
                </div> 
                <div style="width:70%;display:inline;float:right;">
                   <span class="col-4-Text"> Banglow</span>
                </div>    
             </div>

             <div class="col-4">
                <div style="width:30%;display:inline;float:left;">
                    <input  style="display:inline;" type="radio" id="atype3" name="atype" value="house">
                </div> 
                <div style="width:70%;display:inline;float:right;">
                   <span class="col-4-Text"> House</span>
                </div>    
             </div>

             <br>

               <div class="col-4">
                <div style="width:30%;display:inline;float:left;">
                    <input style="float:right;"type="radio" id="atype4" name="atype" value="portion">
                </div> 
                <div style="width:70%;display:inline;float:right;">
                   <span class="col-4-Text"> Portion</span>
                </div>    
             </div>

             <div class="col-4">
                <div style="width:30%;display:inline;float:left;">
                    <input  style="display:inline;" type="radio" id="atype5" name="atype" value="flat">
                </div> 
                <div style="width:70%;display:inline;float:right;">
                   <span class="col-4-Text"> Flat</span>
                </div>    
             </div>

             <div class="col-4">
                <div style="width:30%;display:inline;float:left;">
                    <input  style="display:inline;" type="radio" id="atype6" name="atype" value="shop">
                </div> 
                <div style="width:70%;display:inline;float:right;">
                   <span class="col-4-Text"> Shop</span>
                </div>    
             </div>

             <br>

              <div class="col-4">
                <div style="width:30%;display:inline;float:left;">
                    <input style="display:inline;" type="radio" id="atype7" name="atype" value="other">
                </div> 
                <div style="width:70%;display:inline;float:right;">
                   <span class="col-4-Text"> Other</span>
                </div>    
             </div>
                <div id="atypeOther" style="display:none;"> 
                    <input type="text" style="width:80%"   id="atypeOtherText" name="atypeOther" placeholder="Your other Type"> 
                </div> 
        </div><!--radio Button-->

    <div style="display:block;clear:both;"></div>

         <div>
            <label  class="labelForm">Demand*</label>
            <input type="number" id="aDemand" name="aDemand" placeholder="Your Demand" required>
        </div>





        <div >
            <label class="labelForm">Nature</label><br>

            <div class="col-4">
                <div style="width:30%;display:inline;float:left;">
                    <input style="float:right;"type="radio" id="anature1" name="anature" value="residential">
                </div> 
                <div style="width:70%;display:inline;float:right;">
                   <span class="col-4-Text"> Residential</span>
                </div>    
             </div>

             <div class="col-4">
                <div style="width:30%;display:inline;float:left;">
                    <input  style="display:inline;" type="radio" id="anature2" name="anature" value="commercial">
                </div> 
                <div style="width:70%;display:inline;float:right;">
                   <span class="col-4-Text"> Commercial</span>
                </div>    
             </div>

             <div class="col-4">
                
             </div>

             <br>

        </div><!--radio Button-->

        <div style="display:block;clear:both;"></div>

        <div>
            <label class="labelForm">Area*</label><br>
            <div class="col-8">
                <input type="text" id="aarea" name="aarea" placeholder="Your area" required>
            </div>
            <div class="col-4">
                <select class="drop" id="aareaDrop" name="aareaDrop">
                    <option value="sqfeet">SQ Feet</option>
                    <option value="sqyards">SQ Yards</option>
                    <option value="acre">Acre</option> 
                </select>
            </div>

        </div><!--area-->

        <div style="display:block;clear:both;"></div>


         <div>
            <label  class="labelForm">Direction*</label>
            <select class="drop" id="aDirection" name="aDirection">
                    <option value="westOpen">West Open</option>
                    <option value="eastOpen">East Open</option>
                    <option value="corner">Corner</option> 
            </select>
            
        </div>



             <div >
            <label class="labelForm">Floor*</label><br>

              <select class="drop" name="afloorDrop" id="afloorDrop" class="form-control">
                                                                                    <!--<option  > Select Any</option>-->
                                                                                        <option value="ground"> Ground</option>
                                                                                        <option value="1"> 1</option>
                                                                                        <option value="2"> 2</option>
                                                                                        <option value="3"> 3</option>
                                                                                        <option value="4"> 4</option>
                                                                                        <option value="other"> other</option>
                                                                                    </select>

             <div  id="afloorOther" style="display:none;">
                <input type="text" style="width:80%" id="afloorCheckOther"name="afloorOther" placeholder="Your other floor">

             </div>

            
             <br>


        </div><!--floor Button-->



        <div style="display:block;clear:both;"></div>

             



             <div >
            <label class="labelForm">Room</label><br>
            
            

            <div class="col-4">
                <div style="width:30%;display:inline;float:left;">
                    <input style="float:right;"type="checkbox" name="aroom[]" id="aroom1" value="1bedl">
                </div> 
                <div style="width:70%;display:inline;float:right;">
                   <span class="col-4-Text"> 1 Bed L</span>
                </div>    
             </div>

             <div class="col-4">
                <div style="width:30%;display:inline;float:left;">
                    <input  style="display:inline;" type="checkbox" id="aroom2" name="aroom[]" value="2bedl">
                </div> 
                <div style="width:70%;display:inline;float:right;">
                   <span class="col-4-Text"> 2 Bed L</span>
                </div>    
             </div>

             <div class="col-4">
                <div style="width:30%;display:inline;float:left;">
                    <input  style="display:inline;" type="checkbox" id="aroom3" name="aroom[]" value="2beddd">
                </div> 
                <div style="width:70%;display:inline;float:right;">
                   <span class="col-4-Text"> 2 Bed DD</span>
                </div>    
             </div>

             <br>

               <div class="col-4">
                <div style="width:30%;display:inline;float:left;">
                    <input style="float:right;"type="checkbox" id="aroom4" name="aroom[]" value="3bedl">
                </div> 
                <div style="width:70%;display:inline;float:right;">
                   <span class="col-4-Text"> 3 Bed L</span>
                </div>    
             </div>

             <div class="col-4">
                <div style="width:30%;display:inline;float:left;">
                    <input  style="display:inline;" type="checkbox" id="aroom5" name="aroom[]" value="3beddd">
                </div> 
                <div style="width:70%;display:inline;float:right;">
                   <span class="col-4-Text"> 3 Bed DD</span>
                </div>    
             </div>

             <div class="col-4">
                <div style="width:30%;display:inline;float:left;">
                    <input style="display:inline;" type="checkbox" id="aroom6" name="aroom[]" value="other">
                </div> 
                <div style="width:70%;display:inline;float:right;">
                   <span class="col-4-Text"> Other</span>
                </div>    
             </div>
            <div id="aroomOther" style="display:none;">
                <input type="text" style="width:80%" id="aroomCheckOther" name="aroomOther" placeholder="Your other Room">
            </div>
             
             <br>


        </div><!--room Button-->

        <div style="display:block;clear:both;"></div>





<br>


        <div >
            <label class="labelForm">Document Details</label><br>

            <div class="col-4">
                <div style="width:30%;display:inline;float:left;">
                    <input style="float:right;"type="radio" id="adocument1" name="adocument" value="30yearLease" checked>
                </div> 
                <div style="width:70%;display:inline;float:right;">
                   <span class="col-4-Text"> 30 Year Lease</span>
                </div>    
             </div>

             <div class="col-4">
                <div style="width:30%;display:inline;float:left;">
                    <input  style="display:inline;" type="radio" id="adocument2" name="adocument" value="90yearLease">
                </div> 
                <div style="width:70%;display:inline;float:right;">
                   <span class="col-4-Text"> 90 Year Lease</span>
                </div>    
             </div>

             <div class="col-4">
                <div style="width:30%;display:inline;float:left;">
                    <input  style="display:inline;" type="radio" id="adocument3" name="adocument" value="transfer">
                </div> 
                <div style="width:70%;display:inline;float:right;">
                   <span class="col-4-Text"> Transfer</span>
                </div>    
             </div>

             <br>

               

            

              <div class="col-4">
                <div style="width:30%;display:inline;float:left;">
                    <input style="display:inline;" type="radio" id="adocument4" name="adocument"  value="other">
                </div> 
                <div style="width:70%;display:inline;float:right;">
                   <span class="col-4-Text"> Other</span>
                </div>    
             </div>
                <div id="adocumentOther" style="display:none;"> 
                    <input type="text" style="width:80%"  id="adocumentCheck" name="adocumentOther" placeholder="Your other document"> 
                </div> 
        </div><!--radio Button-->

         <div style="display:block;clear:both;"></div>

         

<br>


        <div >
            <label class="labelForm">Authority*</label><br>

            <div class="col-4">
                <div style="width:30%;display:inline;float:left;">
                    <input style="float:right;"type="radio" id="aauthority1" name="aauthority" value="kda" checked>
                </div> 
                <div style="width:70%;display:inline;float:right;">
                   <span class="col-4-Text"> KDA</span>
                </div>    
             </div>

             <div class="col-4">
                <div style="width:30%;display:inline;float:left;">
                    <input  style="display:inline;" type="radio" id="aauthority2" name="aauthority" value="mda">
                </div> 
                <div style="width:70%;display:inline;float:right;">
                   <span class="col-4-Text"> MDA</span>
                </div>    
             </div>

             <div class="col-4">
                <div style="width:30%;display:inline;float:left;">
                    <input  style="display:inline;" type="radio" id="aauthority3" name="aauthority" value="dc">
                </div> 
                <div style="width:70%;display:inline;float:right;">
                   <span class="col-4-Text"> DC</span>
                </div>    
             </div>

             <br>

             <div class="col-4">
                <div style="width:30%;display:inline;float:left;">
                    <input  style="display:inline;" type="radio" id="aauthority4" name="aauthority" value="builder">
                </div> 
                <div style="width:70%;display:inline;float:right;">
                   <span class="col-4-Text"> Builder</span>
                </div>    
             </div>

             <div class="col-4">
                <div style="width:30%;display:inline;float:left;">
                    <input  style="display:inline;" type="radio" id="aauthority5" name="aauthority" value="cantonment">
                </div> 
                <div style="width:70%;display:inline;float:right;">
                   <span class="col-4-Text"> Cantonment</span>
                </div>    
             </div>

               
            

              <div class="col-4">
                <div style="width:30%;display:inline;float:left;">
                    <input style="display:inline;" type="radio" id="aauthority6" name="aauthority" value="other">
                </div> 
                <div style="width:70%;display:inline;float:right;">
                   <span class="col-4-Text"> Other</span>
                </div>    
             </div>
                <div id="aauthorityOther" style="display:none;"> 
                    <input type="text" style="width:80%"  id="aauthorityCheckOther" name="aauthorityOther" placeholder="Your other authority"> 
                </div> 
        </div><!--radio Button-->


         <div style="display:block;clear:both;"></div>


<br>


        <!--<div >
            <label class="labelForm">Payment</label><br>

            <div class="col-4">
                <div style="width:30%;display:inline;float:left;">
                    <input style="float:right;"type="radio" name="spayment" value="installment">
                </div> 
                <div style="width:70%;display:inline;float:right;">
                   <span class="col-4-Text"> Installment</span>
                </div>    
             </div>

             <div class="col-4">
                <div style="width:30%;display:inline;float:left;">
                    <input  style="display:inline;" type="radio" name="spayment" value="cash">
                </div> 
                <div style="width:70%;display:inline;float:right;">
                   <span class="col-4-Text"> Cash</span>
                </div>    
             </div>

             <div class="col-4">
                <div style="width:30%;display:inline;float:left;">
                    <input  style="display:inline;" type="radio" name="spayment" value="bookingPlan">
                </div> 
                <div style="width:70%;display:inline;float:right;">
                   <span class="col-4-Text"> Booking Plan</span>
                </div>    
             </div>

             <br>


              <!-<div class="col-4">
                <div style="width:30%;display:inline;float:left;">
                    <input style="display:inline;" type="radio" name="sauthority" value="other">
                </div> 
                <div style="width:70%;display:inline;float:right;">
                   <span class="col-4-Text"> Other</span>
                </div>    
             </div>->


                <div id="spaymentOther" style="display:none;"> 

                    <input type="text" style="width:80%"  name="spaymentOther1" placeholder="Your Payment Schedule"> 
                    <input type="text" style="width:80%"  name="spaymentOther2" placeholder="Your Payment Schedule">
                    <input type="text" style="width:80%"  name="spaymentOther3" placeholder="Your Payment Schedule">
                    <input type="text" style="width:80%"  name="spaymentOther4" placeholder="Your Payment Schedule">
                </div> 
        </div><!-radio Button->

         <div style="display:block;clear:both;"></div>-->
                  
             
        <!--</div>Payment-->
        <!--<input type="number" style="width:80%" id="down" name="down" placeholder="Your down payment">
        <input type="number" style="width:80%" id="schedulePeriod" name="schedulePeriod" placeholder="Your Schedule Period">
        <input type="number" style="width:80%" id="monthly" name="monthly" placeholder="Your Monthly/Quarterly"> -->

        <!--<div style="display:block;clear:both;"></div>
        <br>-->







           <div >
            <label class="labelForm">Utilities</label><br>

             

            <div class="col-4">
                <div style="width:30%;display:inline;float:left;">
                    <input style="float:right;"type="checkbox" id="autility1" name="autility[]" value="lineWater" >
                </div> 
                <div style="width:70%;display:inline;float:right;">
                   <span class="col-4-Text"> Line Water</span>
                </div>    
             </div>

             <div class="col-4">
                <div style="width:30%;display:inline;float:left;">
                    <input  style="display:inline;" type="checkbox" id="autility2" name="autility[]" value="electricity">
                </div> 
                <div style="width:70%;display:inline;float:right;">
                   <span class="col-4-Text"> Electricity</span>
                </div>    
             </div>

             <div class="col-4">
                <div style="width:30%;display:inline;float:left;">
                    <input  style="display:inline;" type="checkbox" id="autility3" name="autility[]" value="gas">
                </div> 
                <div style="width:70%;display:inline;float:right;">
                   <span class="col-4-Text"> Gas</span>
                </div>    
             </div>

             <!--<br>

               

             

             

             <div  id="sfloorOther" style="display:none;">
                <input type="text" style="width:80%" name="sfloorOther" placeholder="Your other floor">

             </div>-->

            
             <br>


        </div><!--floor Button-->



        <div style="display:block;clear:both;"></div>



        <div>
            <label  class="labelForm">Project Condition</label>
            <input type="text" id="aProject" name="aProject" placeholder="Your Project Condition">
        </div>
        

        <div>
            <label  class="labelForm">Other Details</label>
            <textarea name="aotherDetails" id="aotherDetails" rows="3" placeholder="Your Other Details"></textarea>
    </div>

        


   
    <!-- <div style="display:block;margin-top:15px; width:100%; "> -->
        <input type="button" name="previous" id="availablePrevOne" class="previous action-button" value="Previous" />
        <input type="button" name="next" onclick="availableTwoResult()" class="next action-button" value="Next" />
    <!-- </div> -->
    
  </fieldset>
  <fieldset>
    <h2 class="fs-title">Other Facilities</h2>
    <h3 class="fs-subtitle">* is the mandatory field</h3>

    

    <div>
            <label  class="labelForm">Nearby Location Facilites</label>
            <textarea name="anearby" id="anearby" rows="3" placeholder="Your Nearby Location Facilites"></textarea>
    </div>

    <div>
            <label  class="labelForm">Other Facilities</label>
            <textarea name="aotherFacilites" id="aotherFacilites" rows="3" placeholder="Your Other Facilities"></textarea>
    </div>

    <div>
            <label  class="labelForm">Health Facilites</label>
            <textarea name="ahealthFacilites" id="ahealthFacilites" rows="3" placeholder="Your Health Facilites"></textarea>
    </div>

    <div>
            <label  class="labelForm">Dues</label>
            <input type="number" id="aDues" name="aDues" placeholder="Your Dues">
        </div>



        <!-- <form id="availablePicForm" method='post' action='backend/picUpload.php' enctype='multipart/form-data' >
        <input type="file" name="file[]" id="fileAvailable" multiple class="button">

        <input type="text" name="picName" id="availablePicName" style="display:none">
        <input type="text" name="userId" id="availableUserId" style="display:none">
        <!\-- <input type="button" onclick="" class="button" style="display:none" value="Upload" --

       <input type='submit' name='submit' id="availablePicSubmit" value='Upload' style="display:none">
    </form> -->

    <?php// include 'imageForm.php';?>

    <form id="aPicForm" method='post' action='backend/picUpload.php' enctype='multipart/form-data' >
        <input type="file" name="file[]" id="afileName" multiple class="button">

        <input type="text" name="picName" id="aPicName" style="display:none">
        <input type="text" name="userId" id="aUserId" style="display:none">
       

       <input type='submit' name='submit' id="aPicSubmit" value='Upload' style="display:none">
    </form> 

    

    <!-- <input type="text" name="fname" placeholder="First Name" />
    <input type="text" name="lname" placeholder="Last Name" />
    <input type="text" name="phone" placeholder="Phone" /> -->
    <!-- <textarea name="address" placeholder="Address"></textarea> -->
    <input type="button" name="previous" id="availablePrevTwo" class="previous action-button" value="Previous" />
    <input type="button" onclick="availableInsert();" name="submit" class="submit action-button" value="Submit" />
  </fieldset>
</div>