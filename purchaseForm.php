 <!-- multistep form -->
<!-- <form id="msform" action="backend/bpurchase.php" method="POST" onSubmit="alert('Successfully Submit')"> -->
<div id="msform">
  <!-- progressbar -->
  <ul id="progressbar">
    <li class="active">Basic Info</li>
    <li>Main Features</li>
    <li>Other Facilities</li>
  </ul>
  <!-- fieldsets -->
  <fieldset>
    <h2 class="fs-title">Purchase/Requirement Form</h2>
    <h3 class="fs-subtitle">* is the mandatory field</h3>
    
        <div>
            <label  class="labelForm">Name*</label>
            <input type="text" id="name" name="name" placeholder="Your name" required>
        </div>

        <div>
            <label class="labelForm">Phone Number*</label>
            <input type="number" id="phoneNumber" name="phoneNumber" placeholder="Your phone number" required>
        </div>

        <div>
            <label class="labelForm">Care of</label>
            <input type="text" id="careOf" name="careOf" placeholder="Care of">
        </div>
   
    <!-- <input type="password" name="pass" placeholder="Password" />
    <input type="password" name="cpass" placeholder="Confirm Password" /> -->
    <input type="button" name="next" onclick="purchaseOneResult()" class="next action-button" id="purchaseOne" value="Next" />
  </fieldset>
  <fieldset>
    <h2 class="fs-title">Main Features</h2>
    <h3 class="fs-subtitle">* is the mandatory field</h3>

        <div>
            <label  class="labelForm">Range*</label>
            <input type="number" id="range" name="range" placeholder="Your range" required>
        </div>

        <div>
            <label class="labelForm">Society Name*</label>
            <input type="text" id="societyName" name="societyName" placeholder="Your Society Name" required>
        </div>

        <div >
            <label class="labelForm">Type*</label><br>

            <div class="col-4">
                <div style="width:30%;display:inline;float:left;">
                    <input style="float:right;"type="radio" id="type1" name="type" value="plot" checked>
                </div> 
                <div style="width:70%;display:inline;float:right;">
                   <span class="col-4-Text"> Plot</span>
                </div>    
             </div>

             <div class="col-4">
                <div style="width:30%;display:inline;float:left;">
                    <input  style="display:inline;" type="radio" id="type2" name="type" value="banglow">
                </div> 
                <div style="width:70%;display:inline;float:right;">
                   <span class="col-4-Text"> Banglow</span>
                </div>    
             </div>

             <div class="col-4">
                <div style="width:30%;display:inline;float:left;">
                    <input  style="display:inline;" type="radio" id="type3" name="type" value="house">
                </div> 
                <div style="width:70%;display:inline;float:right;">
                   <span class="col-4-Text"> House</span>
                </div>    
             </div>

             <br>

               <div class="col-4">
                <div style="width:30%;display:inline;float:left;">
                    <input style="float:right;"type="radio" id="type4" name="type" value="portion">
                </div> 
                <div style="width:70%;display:inline;float:right;">
                   <span class="col-4-Text"> Portion</span>
                </div>    
             </div>

             <div class="col-4">
                <div style="width:30%;display:inline;float:left;">
                    <input  style="display:inline;" type="radio" id="type5" name="type" value="flat">
                </div> 
                <div style="width:70%;display:inline;float:right;">
                   <span class="col-4-Text"> Flat</span>
                </div>    
             </div>

             <div class="col-4">
                <div style="width:30%;display:inline;float:left;">
                    <input  style="display:inline;" type="radio" id="type6" name="type" value="shop">
                </div> 
                <div style="width:70%;display:inline;float:right;">
                   <span class="col-4-Text"> Shop</span>
                </div>    
             </div>

             <br>

              <div class="col-4">
                <div style="width:30%;display:inline;float:left;">
                    <input style="display:inline;" type="radio" id="type7" name="type" value="other">
                </div> 
                <div style="width:70%;display:inline;float:right;">
                   <span class="col-4-Text"> Other</span>
                </div>    
             </div>
                <div id="typeOther" style="display:none;"> 
                    <input type="text" style="width:80%"  id="typeOtherText" name="typeOther" placeholder="Your other Type"> 
                </div> 
        </div><!--radio Button-->

    <div style="display:block;clear:both;"></div>







        <div >
            <label class="labelForm">Nature</label><br>

            <div class="col-4">
                <div style="width:30%;display:inline;float:left;">
                    <input style="float:right;"type="radio" id="nature1" name="nature" value="residential">
                </div> 
                <div style="width:70%;display:inline;float:right;">
                   <span class="col-4-Text"> Residential</span>
                </div>    
             </div>

             <div class="col-4">
                <div style="width:30%;display:inline;float:left;">
                    <input  style="display:inline;" type="radio" id="nature2" name="nature" value="commercial">
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
            <label class="labelForm">Area</label><br>
            <div class="col-8">
                <input type="text" id="area" name="area" placeholder="Your area">
            </div>
            <div class="col-4">
                <select class="drop" id="areaDrop" name="areaDrop">
                    <option value="sqfeet">SQ Feet</option>
                    <option value="sqyards">SQ Yards</option>
                    <option value="acre">Acre</option> 
                </select>
            </div>

        </div><!--area-->

        <div style="display:block;clear:both;"></div>



        
         <div >
            <label class="labelForm" style="display:block !important;">Payment</label>
            <div style="display:block;margin-top:25px; background-color:red !important;">
                <div class="col-4">
                    <div style="width:30%;display:inline;float:left;">
                        <input style="float:right;"type="radio" id="payment1" name="payment" value="cash">
                    </div> 
                    <div style="width:70%;display:inline;float:right;">
                    <span class="col-4-Text"> Cash</span>
                    </div>    
                </div>

                <div class="col-4">
                    <div style="width:30%;display:inline;float:left;">
                        <input  style="display:inline;" type="radio" id="payment2" name="payment" value="cheque">
                    </div> 
                    <div style="width:70%;display:inline;float:right;">
                    <span class="col-4-Text"> Cheque</span>
                    </div>    
                </div>

                <div class="col-4">
                    
                </div>
             </div>

             <br> 
                  
             
        </div><!--Payment-->
        <input type="number" style="width:80%" id="down" name="down" placeholder="Your down payment">
        <input type="number" style="width:80%" id="schedulePeriod" name="schedulePeriod" placeholder="Your Schedule Period">
        <input type="number" style="width:80%" id="monthly" name="monthly" placeholder="Your Monthly/Quarterly"> 

        <div style="display:block;clear:both;"></div>
        <br>






         
             



             <div >
            <label class="labelForm">Floor</label><br>

             <!--<span style="display:none">
                <input style="float:right;" type="checkbox" id="floor1" name="floor[]" value="dummy" checked>
             </span>-->

            <!--<div class="col-4">
                <div style="width:30%;display:inline;float:left;">
                    <input style="float:right;"type="checkbox" id="floor1" name="floor[]" value="ground">
                </div> 
                <div style="width:70%;display:inline;float:right;">
                   <span class="col-4-Text"> Ground</span>
                </div>    
             </div>

             <div class="col-4">
                <div style="width:30%;display:inline;float:left;">
                    <input  style="display:inline;" type="checkbox" id="floor2" name="floor[]" value="1">
                </div> 
                <div style="width:70%;display:inline;float:right;">
                   <span class="col-4-Text"> 1</span>
                </div>    
             </div>

             <div class="col-4">
                <div style="width:30%;display:inline;float:left;">
                    <input  style="display:inline;" type="checkbox" name="floor[]" value="2">
                </div> 
                <div style="width:70%;display:inline;float:right;">
                   <span class="col-4-Text"> 2</span>
                </div>    
             </div>

             <br>

               <div class="col-4">
                <div style="width:30%;display:inline;float:left;">
                    <input style="float:right;"type="checkbox" name="floor[]" value="3">
                </div> 
                <div style="width:70%;display:inline;float:right;">
                   <span class="col-4-Text"> 3</span>
                </div>    
             </div>

             <div class="col-4">
                <div style="width:30%;display:inline;float:left;">
                    <input  style="display:inline;" type="checkbox" name="floor[]" value="4">
                </div> 
                <div style="width:70%;display:inline;float:right;">
                   <span class="col-4-Text"> 4</span>
                </div>    
             </div>

             <div class="col-4">
                <div style="width:30%;display:inline;float:left;">
                    <input  style="display:inline;" type="checkbox" id="floorCheck" name="floor[]" value="other">
                </div> 
                <div style="width:70%;display:inline;float:right;">
                   <span class="col-4-Text"> Other</span>
                </div>    
             </div>-->



             <select class="drop" name="floorDrop" id="floorDrop" class="form-control">
                                                                                    <!--<option  > Select Any</option>-->
                                                                                        <option value="ground"> Ground</option>
                                                                                        <option value="1"> 1</option>
                                                                                        <option value="2"> 2</option>
                                                                                        <option value="3"> 3</option>
                                                                                        <option value="4"> 4</option>
                                                                                        <option value="other"> other</option>
                                                                                    </select>
             <div  id="floorOther" style="display:none;">
                <input type="text" style="width:80%" id="floorCheckOther" name="floorOther" placeholder="Your other floor">

             </div>

            
             <br>


        </div><!--floor Button-->



        <div style="display:block;clear:both;"></div>

             



             <div >
            <label class="labelForm">Room</label><br>
            
            <!--<span style="display:none">
                <input style="float:right;" type="checkbox" id="room1" name="room[]" value="dummy" checked>-->
             </span>

            <div class="col-4">
                <div style="width:30%;display:inline;float:left;">
                    <input style="float:right;"type="checkbox" id="room1" name="room[]" value="1bedl">
                </div> 
                <div style="width:70%;display:inline;float:right;">
                   <span class="col-4-Text"> 1 Bed L</span>
                </div>    
             </div>

             <div class="col-4">
                <div style="width:30%;display:inline;float:left;">
                    <input  style="display:inline;" type="checkbox" id="room2" name="room[]" value="2bedl">
                </div> 
                <div style="width:70%;display:inline;float:right;">
                   <span class="col-4-Text"> 2 Bed L</span>
                </div>    
             </div>

             <div class="col-4">
                <div style="width:30%;display:inline;float:left;">
                    <input  style="display:inline;" type="checkbox" id="room3" name="room[]" value="2beddd">
                </div> 
                <div style="width:70%;display:inline;float:right;">
                   <span class="col-4-Text"> 2 Bed DD</span>
                </div>    
             </div>

             <br>

               <div class="col-4">
                <div style="width:30%;display:inline;float:left;">
                    <input style="float:right;"type="checkbox" id="room4" name="room[]" value="3bedl">
                </div> 
                <div style="width:70%;display:inline;float:right;">
                   <span class="col-4-Text"> 3 Bed L</span>
                </div>    
             </div>

             <div class="col-4">
                <div style="width:30%;display:inline;float:left;">
                    <input  style="display:inline;" type="checkbox" id="room5" name="room[]" value="3beddd">
                </div> 
                <div style="width:70%;display:inline;float:right;">
                   <span class="col-4-Text"> 3 Bed DD</span>
                </div>    
             </div>

             <div class="col-4">
                <div style="width:30%;display:inline;float:left;">
                    <input style="display:inline;" type="checkbox" id="room6" name="room[]" id="roomCheck" value="other">
                </div> 
                <div style="width:70%;display:inline;float:right;">
                   <span class="col-4-Text"> Other</span>
                </div>    
             </div>
            <div id="roomOther" style="display:none;">
                <input type="text" style="width:80%" id="roomCheckOther" name="roomOther" placeholder="Your other Room">
            </div>
             
             <br>


        </div><!--room Button-->

        <div style="display:block;clear:both;"></div>

<br>

  <div>
            <label  class="labelForm">Other Details</label>
            <textarea name="oherDetails" id="otherDetails" rows="3" placeholder="Your Other Details"></textarea>
    </div>



<br>
       



        

        


   
    <!-- <div style="display:block;margin-top:15px; width:100%; "> -->
        <input type="button" id="purchasePrevOne" name="previous" class="previous action-button" value="Previous" />
        <input type="button" name="next" onclick="purchaseTwoResult()" class="next action-button" value="Next" />
    <!-- </div> -->
    
  </fieldset>
  <fieldset>
    <h2 class="fs-title">Other Facilities</h2>
    <h3 class="fs-subtitle">* is the mandatory field</h3>

  
    <div>
            <label  class="labelForm">Nearby Location Facilites</label>
            <textarea name="nearby" id="nearby" rows="3" placeholder="Your Nearby Location Facilites"></textarea>
    </div>

    <div>
            <label  class="labelForm">Other Facilities</label>
            <textarea name="otherFacilites" id="otherFacilites" rows="3" placeholder="Your Other Facilities"></textarea>
    </div>

    <div>
            <label  class="labelForm">Health Facilites</label>
            <textarea name="healthFacilites" id="healthFacilites" rows="3" placeholder="Your Health Facilites"></textarea>
    </div>

    <!-- <form id="purchasePicForm" method='post' action='backend/picUpload.php' enctype='multipart/form-data' >
        <input type="file" name="file[]" id="filePurchase" multiple class="button">

        <input type="text" name="picName" id="purchasePicName" style="display:none">
        <input type="text" name="userId" id="purchaseUserId" style="display:none">
        <-- <input type="button" onclick="" class="button" style="display:none" value="Upload" ->

       <input type='submit' name='submit' id="purchasePicSubmit" value='Upload' style="display:none">
    </form> -->

    <form id="pPicForm" method='post' action='backend/picUpload.php' enctype='multipart/form-data' >
        <input type="file" name="file[]" id="pfileName" multiple class="button">

        <input type="text" name="picName" id="pPicName" style="display:none">
        <input type="text" name="userId" id="pUserId" style="display:none">
        <!-- <input type="button" onclick="" class="button" style="display:none" value="Upload" -->

       <input type='submit' name='submit' id="pPicSubmit" value='Upload' style="display:none">
    </form>
   
    <input type="button" name="previous" id="purchasePrevTwo" class="previous action-button" value="Previous" />
    <input type="button" name="submit" onclick="purchaseInsert();" class="submit action-button" value="Submit" />
  </fieldset>
<!-- </form> -->
</div>