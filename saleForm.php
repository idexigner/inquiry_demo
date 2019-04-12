 <!-- multistep form -->
<!-- <form id="msform" action="backend/bsale.php" method="POST" onSubmit="alert('Successfully Submit')"> -->
  <div id="msform">
  <!-- progressbar -->
  <ul id="progressbar">
    <li class="active">Basic Info</li>
    <li>Main Features</li>
    <li>Other Facilities</li>
  </ul>
  <!-- fieldsets -->
  <fieldset>
    <h2 class="fs-title">Sale/Available Form</h2>
    <h3 class="fs-subtitle">* is the mandatory field</h3>
    
        <div>
            <label  class="labelForm">Name*</label>
            <input type="text" id="sname" name="sname" placeholder="Your name" required>
        </div>

        <div>
            <label class="labelForm">Phone Number*</label>
            <input type="number" id="sphoneNumber" name="sphoneNumber" placeholder="Your phone number" required>
        </div>

        <div>
            <label class="labelForm">Care of</label>
            <input type="text" id="scareOf" name="scareOf" placeholder="Care of">
        </div>
   
    <!-- <input type="password" name="pass" placeholder="Password" />
    <input type="password" name="cpass" placeholder="Confirm Password" /> -->
    <input type="button" name="next" onclick="saleOneResult()" class="next action-button" value="Next" />
  </fieldset>
  <fieldset>
    <h2 class="fs-title">Main Features</h2>
    <h3 class="fs-subtitle">* is the mandatory field</h3>

        <div>
            <label class="labelForm">Complete Address*</label>
            <input type="text" id="scompleteAddress" name="scompleteAddress" placeholder="Your Complete Address" required>
        </div>

        <div>
            <label class="labelForm">Society Name*</label>
            <input type="text" id="SsocietyName" name="SsocietyName" placeholder="Your Society Name" required>
        </div>

       

        

        <div >
            <label class="labelForm">Type*</label><br>

            <div class="col-4">
                <div style="width:30%;display:inline;float:left;">
                    <input style="float:right;"type="radio" id="stype1" name="stype" value="plot" checked>
                </div> 
                <div style="width:70%;display:inline;float:right;">
                   <span class="col-4-Text"> Plot</span>
                </div>    
             </div>

             <div class="col-4">
                <div style="width:30%;display:inline;float:left;">
                    <input  style="display:inline;" type="radio" id="stype2" name="stype" value="banglow">
                </div> 
                <div style="width:70%;display:inline;float:right;">
                   <span class="col-4-Text"> Banglow</span>
                </div>    
             </div>

             <div class="col-4">
                <div style="width:30%;display:inline;float:left;">
                    <input  style="display:inline;" type="radio" id="stype3" name="stype" value="house">
                </div> 
                <div style="width:70%;display:inline;float:right;">
                   <span class="col-4-Text"> House</span>
                </div>    
             </div>

             <br>

               <div class="col-4">
                <div style="width:30%;display:inline;float:left;">
                    <input style="float:right;"type="radio" id="stype4" name="stype" value="portion">
                </div> 
                <div style="width:70%;display:inline;float:right;">
                   <span class="col-4-Text"> Portion</span>
                </div>    
             </div>

             <div class="col-4">
                <div style="width:30%;display:inline;float:left;">
                    <input  style="display:inline;" type="radio" id="stype5" name="stype" value="flat">
                </div> 
                <div style="width:70%;display:inline;float:right;">
                   <span class="col-4-Text"> Flat</span>
                </div>    
             </div>

             <div class="col-4">
                <div style="width:30%;display:inline;float:left;">
                    <input  style="display:inline;" type="radio" id="stype6" name="stype" value="shop">
                </div> 
                <div style="width:70%;display:inline;float:right;">
                   <span class="col-4-Text"> Shop</span>
                </div>    
             </div>

             <br>

              <div class="col-4">
                <div style="width:30%;display:inline;float:left;">
                    <input style="display:inline;" type="radio" id="stype7" name="stype" value="other">
                </div> 
                <div style="width:70%;display:inline;float:right;">
                   <span class="col-4-Text"> Other</span>
                </div>    
             </div>
                <div id="stypeOther" style="display:none;"> 
                    <input type="text" style="width:80%"  id="stypeCheckOther" name="stypeOther" placeholder="Your other Type"> 
                </div> 
        </div><!--radio Button-->

    <div style="display:block;clear:both;"></div>

         <div>
            <label  class="labelForm">Demand*</label>
            <input type="number" id="sDemand" name="sDemand" placeholder="Your DEmand" required>
        </div>





        <div >
            <label class="labelForm">Nature</label><br>

            <div class="col-4">
                <div style="width:30%;display:inline;float:left;">
                    <input style="float:right;"type="radio" id="snature1" name="snature" value="residential">
                </div> 
                <div style="width:70%;display:inline;float:right;">
                   <span class="col-4-Text"> Residential</span>
                </div>    
             </div>

             <div class="col-4">
                <div style="width:30%;display:inline;float:left;">
                    <input  style="display:inline;" type="radio" id="snature2" name="snature" value="commercial">
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
                <input type="text" id="sarea" name="sarea" placeholder="Your area" required>
            </div>
            <div class="col-4">
                <select class="drop" name="sareaDrop" id="sareaDrop">
                    <option value="sqfeet">SQ Feet</option>
                    <option value="sqyards">SQ Yards</option>
                    <option value="acre">Acre</option> 
                </select>
            </div>

        </div><!--area-->

        <div style="display:block;clear:both;"></div>


         <div>
            <label  class="labelForm">Direction*</label>
            <select class="drop" id="sDirection" name="sDirection">
                    <option value="westOpen">West Open</option>
                    <option value="eastOpen">East Open</option>
                    <option value="corner">Corner</option> 
            </select>
            
        </div>



             <div >
            <label class="labelForm">Floor</label><br>
            <select class="drop" name="sfloorDrop" id="sfloorDrop" class="form-control">
                                                                                    <!--<option  > Select Any</option>-->
                                                                                        <option value="ground"> Ground</option>
                                                                                        <option value="1"> 1</option>
                                                                                        <option value="2"> 2</option>
                                                                                        <option value="3"> 3</option>
                                                                                        <option value="4"> 4</option>
                                                                                        <option value="other"> other</option>
                                                                                    </select>

             
            

             <div  id="sfloorOther" style="display:none;">
                <input type="text" style="width:80%" id="sfloorCheckOther" name="sfloorOther" placeholder="Your other floor">

             </div>

            
             <br>


        </div><!--floor Button-->



        <div style="display:block;clear:both;"></div>

             



             <div >
            <label class="labelForm">Room</label><br>
            

            <div class="col-4">
                <div style="width:30%;display:inline;float:left;">
                    <input style="float:right;"type="checkbox" id="sroom1" name="sroom[]" value="1bedl">
                </div> 
                <div style="width:70%;display:inline;float:right;">
                   <span class="col-4-Text"> 1 Bed L</span>
                </div>    
             </div>

             <div class="col-4">
                <div style="width:30%;display:inline;float:left;">
                    <input  style="display:inline;" type="checkbox" id="sroom2" name="sroom[]" value="2bedl">
                </div> 
                <div style="width:70%;display:inline;float:right;">
                   <span class="col-4-Text"> 2 Bed L</span>
                </div>    
             </div>

             <div class="col-4">
                <div style="width:30%;display:inline;float:left;">
                    <input  style="display:inline;" type="checkbox" id="sroom3" name="sroom[]" value="2beddd">
                </div> 
                <div style="width:70%;display:inline;float:right;">
                   <span class="col-4-Text"> 2 Bed DD</span>
                </div>    
             </div>

             <br>

               <div class="col-4">
                <div style="width:30%;display:inline;float:left;">
                    <input style="float:right;"type="checkbox" id="sroom4" name="sroom[]" value="3bedl">
                </div> 
                <div style="width:70%;display:inline;float:right;">
                   <span class="col-4-Text"> 3 Bed L</span>
                </div>    
             </div>

             <div class="col-4">
                <div style="width:30%;display:inline;float:left;">
                    <input  style="display:inline;" type="checkbox" id="sroom5" name="sroom[]" value="3beddd">
                </div> 
                <div style="width:70%;display:inline;float:right;">
                   <span class="col-4-Text"> 3 Bed DD</span>
                </div>    
             </div>

             <div class="col-4">
                <div style="width:30%;display:inline;float:left;">
                    <input style="display:inline;" type="checkbox" id="sroom6" name="sroom[]" id="sroomCheck" value="other">
                </div> 
                <div style="width:70%;display:inline;float:right;">
                   <span class="col-4-Text"> Other</span>
                </div>    
             </div>
            <div id="sroomOther" style="display:none;">
                <input type="text" style="width:80%" id="sroomCheckOther" name="sroomOther" placeholder="Your other Room">
            </div>
             
             <br>


        </div><!--room Button-->

        <div style="display:block;clear:both;"></div>





<br>


        <div >
            <label class="labelForm">Document Details*</label><br>

            <div class="col-4">
                <div style="width:30%;display:inline;float:left;">
                    <input style="float:right;"type="radio" id="sdocument1" name="sdocument" value="30yearLease" checked>
                </div> 
                <div style="width:70%;display:inline;float:right;">
                   <span class="col-4-Text"> 30 Year Lease</span>
                </div>    
             </div>

             <div class="col-4">
                <div style="width:30%;display:inline;float:left;">
                    <input  style="display:inline;" type="radio" id="sdocument2" name="sdocument" value="90yearLease">
                </div> 
                <div style="width:70%;display:inline;float:right;">
                   <span class="col-4-Text"> 90 Year Lease</span>
                </div>    
             </div>

             <div class="col-4">
                <div style="width:30%;display:inline;float:left;">
                    <input  style="display:inline;" type="radio" id="sdocument3" name="sdocument" value="transfer">
                </div> 
                <div style="width:70%;display:inline;float:right;">
                   <span class="col-4-Text"> Transfer</span>
                </div>    
             </div>

             <br>

               

            

              <div class="col-4">
                <div style="width:30%;display:inline;float:left;">
                    <input style="display:inline;" type="radio" id="sdocument4" name="sdocument"  value="other">
                </div> 
                <div style="width:70%;display:inline;float:right;">
                   <span class="col-4-Text"> Other</span>
                </div>    
             </div>
                <div id="sdocumentOther" style="display:none;"> 
                    <input type="text" style="width:80%"  id="sdocumentOtherCheck" name="sdocumentOther" placeholder="Your other document"> 
                </div> 
        </div><!--radio Button-->

         <div style="display:block;clear:both;"></div>

         

<br>


        <div >
            <label class="labelForm">Authority*</label><br>

            <div class="col-4">
                <div style="width:30%;display:inline;float:left;">
                    <input style="float:right;"type="radio" id="sauthority1" name="sauthority" value="kda" checked>
                </div> 
                <div style="width:70%;display:inline;float:right;">
                   <span class="col-4-Text"> KDA</span>
                </div>    
             </div>

             <div class="col-4">
                <div style="width:30%;display:inline;float:left;">
                    <input  style="display:inline;" type="radio" id="sauthority2" name="sauthority" value="mda">
                </div> 
                <div style="width:70%;display:inline;float:right;">
                   <span class="col-4-Text"> MDA</span>
                </div>    
             </div>

             <div class="col-4">
                <div style="width:30%;display:inline;float:left;">
                    <input  style="display:inline;" type="radio" id="sauthority3" name="sauthority" value="dc">
                </div> 
                <div style="width:70%;display:inline;float:right;">
                   <span class="col-4-Text"> DC</span>
                </div>    
             </div>

             <br>

             <div class="col-4">
                <div style="width:30%;display:inline;float:left;">
                    <input  style="display:inline;" type="radio" id="sauthority4" name="sauthority" value="builder">
                </div> 
                <div style="width:70%;display:inline;float:right;">
                   <span class="col-4-Text"> Builder</span>
                </div>    
             </div>

             <div class="col-4">
                <div style="width:30%;display:inline;float:left;">
                    <input  style="display:inline;" type="radio" id="sauthority5" name="sauthority" value="cantonment">
                </div> 
                <div style="width:70%;display:inline;float:right;">
                   <span class="col-4-Text"> Cantonment</span>
                </div>    
             </div>

               
            

              <div class="col-4">
                <div style="width:30%;display:inline;float:left;">
                    <input style="display:inline;" type="radio" id="sauthority6" name="sauthority" value="other">
                </div> 
                <div style="width:70%;display:inline;float:right;">
                   <span class="col-4-Text"> Other</span>
                </div>    
             </div>
                <div id="sauthorityOther" style="display:none;"> 
                    <input type="text" style="width:80%"  id="sauthorityCheckOther" name="sauthorityOther" placeholder="Your other authority"> 
                </div> 
        </div><!--radio Button-->

         <div style="display:block;clear:both;"></div>


<br>


        <div >
            <label class="labelForm">Payment</label><br>

            <div class="col-4">
                <div style="width:30%;display:inline;float:left;">
                    <input style="float:right;"type="radio" id="spayment1" name="spayment" value="installment">
                </div> 
                <div style="width:70%;display:inline;float:right;">
                   <span class="col-4-Text"> Installment</span>
                </div>    
             </div>

             <div class="col-4">
                <div style="width:30%;display:inline;float:left;">
                    <input  style="display:inline;" type="radio" id="spayment2" name="spayment" value="cash">
                </div> 
                <div style="width:70%;display:inline;float:right;">
                   <span class="col-4-Text"> Cash</span>
                </div>    
             </div>

             <div class="col-4">
                <div style="width:30%;display:inline;float:left;">
                    <input  style="display:inline;" type="radio" id="spayment3" name="spayment" value="bookingPlan">
                </div> 
                <div style="width:70%;display:inline;float:right;">
                   <span class="col-4-Text"> Booking Plan</span>
                </div>    
             </div>

             <br>


              <!--<div class="col-4">
                <div style="width:30%;display:inline;float:left;">
                    <input style="display:inline;" type="radio" name="sauthority" value="other">
                </div> 
                <div style="width:70%;display:inline;float:right;">
                   <span class="col-4-Text"> Other</span>
                </div>    
             </div>-->


                <div id="spaymentOther" style="display:none;"> 

                    <input type="text" style="width:80%"  name="spaymentOther1" id="spaymentOtherText" placeholder="Your Payment Schedule"> 
                    <!-- <input type="text" style="width:80%"  name="spaymentOther2" placeholder="Your Payment Schedule">
                    <input type="text" style="width:80%"  name="spaymentOther3" placeholder="Your Payment Schedule">
                    <input type="text" style="width:80%"  name="spaymentOther4" placeholder="Your Payment Schedule"> -->
                </div> 
        </div><!--radio Button-->

         <div style="display:block;clear:both;"></div>
                  
             
        <!--</div>Payment-->
        <!--<input type="number" style="width:80%" id="down" name="down" placeholder="Your down payment">
        <input type="number" style="width:80%" id="schedulePeriod" name="schedulePeriod" placeholder="Your Schedule Period">
        <input type="number" style="width:80%" id="monthly" name="monthly" placeholder="Your Monthly/Quarterly"> -->

        <!--<div style="display:block;clear:both;"></div>-->
        <br>







           <div >
            <label class="labelForm">Utilities</label><br>

            

            <div class="col-4">
                <div style="width:30%;display:inline;float:left;">
                    <input style="float:right;"type="checkbox" id="sutility1" name="sutility[]" value="lineWater" >
                </div> 
                <div style="width:70%;display:inline;float:right;">
                   <span class="col-4-Text"> Line Water</span>
                </div>    
             </div>

             <div class="col-4">
                <div style="width:30%;display:inline;float:left;">
                    <input  style="display:inline;" type="checkbox" id="sutility2" name="sutility[]" value="electricity">
                </div> 
                <div style="width:70%;display:inline;float:right;">
                   <span class="col-4-Text"> Electricity</span>
                </div>    
             </div>

             <div class="col-4">
                <div style="width:30%;display:inline;float:left;">
                    <input  style="display:inline;" type="checkbox" id="sutility3" name="sutility[]" value="gas">
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
            <input type="text" id="sProject" name="sProject" placeholder="Your Project Condition">
        </div>


        <div>
            <label  class="labelForm">Other Details</label>
            <textarea id="sotherDetails" name="sotherDetails" id="sotherDetails" rows="3" placeholder="Your Other Details"></textarea>
    </div>
        

        


   
    <!-- <div style="display:block;margin-top:15px; width:100%; "> -->
        <input type="button" name="previous" id="salePrevOne" class="previous action-button" value="Previous" />
        <input type="button" name="next" onclick="saleTwoResult()" class="next action-button" value="Next" />
    <!-- </div> -->
    
  </fieldset>
  <fieldset>
    <h2 class="fs-title">Other Facilities</h2>
    <h3 class="fs-subtitle">* is the mandatory field</h3>

    

    <div>
            <label  class="labelForm">Nearby Location Facilites</label>
            <textarea name="snearby" id="snearby" rows="3" placeholder="Your Nearby Location Facilites"></textarea>
    </div>

    <div>
            <label  class="labelForm">Other Facilities</label>
            <textarea name="sotherFacilites" id="sotherFacilites" rows="3" placeholder="Your Other Facilities"></textarea>
    </div>

    <div>
            <label  class="labelForm">Health Facilites</label>
            <textarea name="shealthFacilites" id="shealthFacilites" rows="3" placeholder="Your Health Facilites"></textarea>
    </div>

    <form id="sPicForm" method='post' action='backend/picUpload.php' enctype='multipart/form-data' >
        <input type="file" name="file[]" id="sfileName" multiple class="button">

        <input type="text" name="picName" id="sPicName" style="display:none">
        <input type="text" name="userId" id="sUserId" style="display:none">
       

       <input type='submit' name='submit' id="sPicSubmit" value='Upload' style="display:none">
    </form> 


    <!-- <input type="text" name="fname" placeholder="First Name" />
    <input type="text" name="lname" placeholder="Last Name" />
    <input type="text" name="phone" placeholder="Phone" /> -->
    <!-- <textarea name="address" placeholder="Address"></textarea> -->
    <input type="button" name="previous" id="salePrevTwo" class="previous action-button" value="Previous" />
    <input type="button" name="submit" onclick="saleInsert();" class="submit action-button" value="Submit" />
  </fieldset>
</div>



