 <!-- multistep form -->
<!-- <form id="msform" action="backend/brequiredForm.php" method="POST" onSubmit="alert('Successfully Submit')"> -->
<div id="msform">
  <!-- progressbar -->
  <ul id="progressbar">
    <li class="active">Basic Info</li>
    <li>Main Features</li>
    <li>Other Facilities</li>
  </ul>
  <!-- fieldsets -->
  <fieldset>
    <h2 class="fs-title">Required Rent Form</h2>
    <h3 class="fs-subtitle">* is the mandatory field</h3>
    
        <div>
            <label  class="labelForm">Name*</label>
            <input type="text" id="rname" name="rname" placeholder="Your name" required>
        </div>

        <div>
            <label class="labelForm">Phone Number*</label>
            <input type="number" id="rphoneNumber" name="rphoneNumber" placeholder="Your phone number" required>
        </div>

        <div>
            <label class="labelForm">Care of</label>
            <input type="text" id="rcareOf" name="rcareOf" placeholder="Care of">
        </div>
   
    <!-- <input type="password" name="pass" placeholder="Password" />
    <input type="password" name="cpass" placeholder="Confirm Password" /> -->
    <input type="button" name="next" onclick="requireOneResult()" class="next action-button" value="Next" />
  </fieldset>
  <fieldset>
    <h2 class="fs-title">Main Features</h2>
    <h3 class="fs-subtitle">* is the mandatory field</h3>

        <div>
            <label  class="labelForm">Range*</label>
            <input type="number" id="rrange" name="rrange" placeholder="Your range" required>
        </div>

        <div>
            <label class="labelForm">Society Name*</label>
            <input type="text" id="rsocietyName" name="rsocietyName" placeholder="Your Society Name" required>
        </div>





          <div>
            <label class="labelForm">Area</label><br>
            <div class="col-8">
                <input type="text" id="rarea" name="rarea" placeholder="Your area">
            </div>
            <div class="col-4">
                <select class="drop" id="rareaDrop" name="rareaDrop">
                    <option value="sqfeet">SQ Feet</option>
                    <option value="sqyards">SQ Yards</option>
                    <option value="acre">Acre</option> 
                </select>
            </div>

        </div><!--area-->

        <div style="display:block;clear:both;"></div>





        <div >
            <label class="labelForm">Type*</label><br>

            <div class="col-4">
                <div style="width:30%;display:inline;float:left;">
                    <input style="float:right;"type="radio" id="rtype1" name="rtype" value="plot" checked>
                </div> 
                <div style="width:70%;display:inline;float:right;">
                   <span class="col-4-Text"> Plot</span>
                </div>    
             </div>

             <div class="col-4">
                <div style="width:30%;display:inline;float:left;">
                    <input  style="display:inline;" type="radio" id="rtype2" name="rtype" value="banglow" >
                </div> 
                <div style="width:70%;display:inline;float:right;">
                   <span class="col-4-Text"> Banglow</span>
                </div>    
             </div>

             <div class="col-4">
                <div style="width:30%;display:inline;float:left;">
                    <input  style="display:inline;" type="radio" id="rtype3" name="rtype" value="house">
                </div> 
                <div style="width:70%;display:inline;float:right;">
                   <span class="col-4-Text"> House</span>
                </div>    
             </div>

             <br>

               <div class="col-4">
                <div style="width:30%;display:inline;float:left;">
                    <input style="float:right;"type="radio" id="rtype4" name="rtype" value="portion">
                </div> 
                <div style="width:70%;display:inline;float:right;">
                   <span class="col-4-Text"> Portion</span>
                </div>    
             </div>

             <div class="col-4">
                <div style="width:30%;display:inline;float:left;">
                    <input  style="display:inline;" type="radio" id="rtype5" name="rtype" value="flat">
                </div> 
                <div style="width:70%;display:inline;float:right;">
                   <span class="col-4-Text"> Flat</span>
                </div>    
             </div>

             <div class="col-4">
                <div style="width:30%;display:inline;float:left;">
                    <input  style="display:inline;" type="radio" id="rtype6" name="rtype" value="shop">
                </div> 
                <div style="width:70%;display:inline;float:right;">
                   <span class="col-4-Text"> Shop</span>
                </div>    
             </div>

             <br>

              <div class="col-4">
                <div style="width:30%;display:inline;float:left;">
                    <input style="display:inline;" type="radio" id="rtype7"  name="rtype" value="other">
                </div> 
                <div style="width:70%;display:inline;float:right;">
                   <span class="col-4-Text"> Other</span>
                </div>    
             </div>
                <div id="rtypeOther" style="display:none;"> 
                    <input type="text" style="width:80%"  id="rtypeOtherCheck" name="typeOther" placeholder="Your other Type"> 
                </div> 
        </div><!--radio Button-->

    <div style="display:block;clear:both;"></div>







        <!--<div >
            <label class="labelForm">Nature</label><br>

            <div class="col-4">
                <div style="width:30%;display:inline;float:left;">
                    <input style="float:right;"type="radio" name="nature" value="residential" checked>
                </div> 
                <div style="width:70%;display:inline;float:right;">
                   <span class="col-4-Text"> Residential</span>
                </div>    
             </div>

             <div class="col-4">
                <div style="width:30%;display:inline;float:left;">
                    <input  style="display:inline;" type="radio" name="nature" value="commercial">
                </div> 
                <div style="width:70%;display:inline;float:right;">
                   <span class="col-4-Text"> Commercial</span>
                </div>    
             </div>

             <div class="col-4">
                
             </div>

             <br>

        </div><!-radio Button-

        <div style="display:block;clear:both;"></div>-->

      



        
         <!--<div >
            <label class="labelForm" style="display:block !important;">Payment</label>
            <div style="display:block;margin-top:25px; background-color:red !important;">
                <div class="col-4">
                    <div style="width:30%;display:inline;float:left;">
                        <input style="float:right;"type="radio" name="payment" value="cash" checked>
                    </div> 
                    <div style="width:70%;display:inline;float:right;">
                    <span class="col-4-Text"> Cash</span>
                    </div>    
                </div>

                <div class="col-4">
                    <div style="width:30%;display:inline;float:left;">
                        <input  style="display:inline;" type="radio" name="payment" value="cheque">
                    </div> 
                    <div style="width:70%;display:inline;float:right;">
                    <span class="col-4-Text"> Cheque</span>
                    </div>    
                </div>

                <div class="col-4">
                    
                </div>
             </div>

             <br> 
                  
             
        </div>< -Payment-
        <input type="text" style="width:80%" id="down" name="down" placeholder="Your down payment">
        <input type="text" style="width:80%" id="schedulePeriod" name="schedulePeriod" placeholder="Your Schedule Period">
        <input type="text" style="width:80%" id="monthly" name="monthly" placeholder="Your Monthly/Quarterly"> 

        <div style="display:block;clear:both;"></div>
        <br>-->






         
             



             <div >
            <label class="labelForm">Floor</label><br>
            <select class="drop" name="afloorDrop" id="rfloorDrop" class="form-control">
                                                                                    <!--<option  > Select Any</option>-->
                                                                                        <option value="ground"> Ground</option>
                                                                                        <option value="1"> 1</option>
                                                                                        <option value="2"> 2</option>
                                                                                        <option value="3"> 3</option>
                                                                                        <option value="4"> 4</option>
                                                                                        <option value="other"> other</option>
                                                                                    </select>

             
       

             <div  id="rfloorOther" style="display:none;">
                <input type="text" style="width:80%" id="rfloorCheckOther" name="rfloorOther" placeholder="Your other floor">

             </div>

            
             <br>


        </div><!--floor Button-->



        <div style="display:block;clear:both;"></div>

             



             <div >
            <label class="labelForm">Room</label><br>

            
            <div class="col-4">
                <div style="width:30%;display:inline;float:left;">
                    <input style="float:right;"type="checkbox" name="rroom[]" id="rroom1" value="1bedl">
                </div> 
                <div style="width:70%;display:inline;float:right;">
                   <span class="col-4-Text"> 1 Bed L</span>
                </div>    
             </div>

             <div class="col-4">
                <div style="width:30%;display:inline;float:left;">
                    <input  style="display:inline;" type="checkbox" id="rroom2" name="rroom[]" value="2bedl">
                </div> 
                <div style="width:70%;display:inline;float:right;">
                   <span class="col-4-Text"> 2 Bed L</span>
                </div>    
             </div>

             <div class="col-4">
                <div style="width:30%;display:inline;float:left;">
                    <input  style="display:inline;" type="checkbox" id="rroom3" name="rroom[]" value="2beddd">
                </div> 
                <div style="width:70%;display:inline;float:right;">
                   <span class="col-4-Text"> 2 Bed DD</span>
                </div>    
             </div>

             <br>

               <div class="col-4">
                <div style="width:30%;display:inline;float:left;">
                    <input style="float:right;"type="checkbox" id="rroom4" name="rroom[]" value="3bedl">
                </div> 
                <div style="width:70%;display:inline;float:right;">
                   <span class="col-4-Text"> 3 Bed L</span>
                </div>    
             </div>

             <div class="col-4">
                <div style="width:30%;display:inline;float:left;">
                    <input  style="display:inline;" type="checkbox" id="rroom5" name="rroom[]" value="3beddd">
                </div> 
                <div style="width:70%;display:inline;float:right;">
                   <span class="col-4-Text"> 3 Bed DD</span>
                </div>    
             </div>

             <div class="col-4">
                <div style="width:30%;display:inline;float:left;">
                    <input style="display:inline;" type="checkbox" name="rroom[]" id="rroom6" value="other">
                </div> 
                <div style="width:70%;display:inline;float:right;">
                   <span class="col-4-Text"> Other</span>
                </div>    
             </div>
            <div id="rroomOther" style="display:none;">
                <input type="text" style="width:80%" id="rroomOtherText" name="rroomOther" placeholder="Your other Room">
            </div>
             
             <br>


        </div><!--room Button-->

        <div style="display:block;clear:both;"></div>


<br>
        <div>
            <label  class="labelForm">Other Details</label>
            <textarea name="rotherDetails" id="rotherDetails" rows="3" placeholder="Your Other Details"></textarea>
    </div>


<br>
       



        

        


   
    <!-- <div style="display:block;margin-top:15px; width:100%; "> -->
        <input type="button" name="previous" id="requirePrevOne" class="previous action-button" value="Previous" />
        <input type="button" name="next" onclick="requireTwoResult()" class="next action-button" value="Next" />
    <!-- </div> -->
    
  </fieldset>
  <fieldset>
    <h2 class="fs-title">Other Facilities</h2>
    <h3 class="fs-subtitle">* is the mandatory field</h3>

    
    <div>
            <label  class="labelForm">Nearby Location Facilites</label>
            <textarea name="rnearby" id="rnearby" rows="3" placeholder="Your Nearby Location Facilites"></textarea>
    </div>

    <div>
            <label  class="labelForm">Other Facilities</label>
            <textarea name="rotherFacilites" id="rotherFacilites" rows="3" placeholder="Your Other Facilities"></textarea>
    </div>

    <div>
            <label  class="labelForm">Health Facilites</label>
            <textarea name="rhealthFacilites" id="rhealthFacilites" rows="3" placeholder="Your Health Facilites"></textarea>
    </div>


    <!-- <form id="rentPicForm" method='post' action='backend/picUpload.php' enctype='multipart/form-data' >
        <input type="file" name="file[]" id="fileRent" multiple class="button">

        <input type="text" name="picName" id="rentPicName" style="display:none">
        <input type="text" name="userId" id="rentUserId" style="display:none">
        <-- <input type="button" onclick="" class="button" style="display:none" value="Upload" --

       <input type='submit' name='submit' id="rentPicSubmit" value='Upload' style="display:none">
    </form> -->
    <form id="rPicForm" method='post' action='backend/picUpload.php' enctype='multipart/form-data' >
        <input type="file" name="file[]" id="rfileName" multiple class="button">

        <input type="text" name="picName" id="rPicName" style="display:none">
        <input type="text" name="userId" id="rUserId" style="display:none">
        <!-- <input type="button" onclick="" class="button" style="display:none" value="Upload" -->

       <input type='submit' name='submit' id="rPicSubmit" value='Upload' style="display:none">
    </form>
    <!-- <input type="text" name="fname" placeholder="First Name" />
    <input type="text" name="lname" placeholder="Last Name" />
    <input type="text" name="phone" placeholder="Phone" /> -->
    <!-- <textarea name="address" placeholder="Address"></textarea> -->
    <input type="button" name="previous" id="requirePrevTwo" class="previous action-button" value="Previous" />
    <input type="button" name="submit" onclick="requireInsert()" class="submit action-button" value="Submit" />
  </fieldset>
</div>