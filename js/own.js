//const Api="http://1sourceestate.com/inquiry_demo/";
const Api = "http://localhost/inquiry_demo/";

//   function show2(){
//     document.getElementById('div1').style.display = 'block';
//   }

var uid = '';

$("input[name='type']").click(function () {
    $('#typeOther').css('display', ($(this).val() === 'other') ? 'block' : 'none');
});


$(document).ready(function () {
    $('#floorCheck').change(function () {
        if (this.checked)
            //  ^
            $('#floorOther').fadeIn();
        else
            $('#floorOther').fadeOut();
    });
});

$(document).ready(function () {
    $('#room6').change(function () {
        if (this.checked)
            //  ^
            $('#roomOther').fadeIn();
        else
            $('#roomOther').fadeOut();
    });
});

$("#floorDrop").change(function () {
    $('#floorOther').css('display', ($(this).val() === 'other') ? 'block' : 'none');
    // alert($(this).val());
});

$("#sfloorDrop").change(function () {
    $('#sfloorOther').css('display', ($(this).val() === 'other') ? 'block' : 'none');
    // alert($(this).val());
});

$("#rfloorDrop").change(function () {
    $('#rfloorOther').css('display', ($(this).val() === 'other') ? 'block' : 'none');
    // alert($(this).val());
});

$("#afloorDrop").change(function () {
    $('#afloorOther').css('display', ($(this).val() === 'other') ? 'block' : 'none');
    // alert($(this).val());
});


$("input[name='stype']").click(function () {
    $('#stypeOther').css('display', ($(this).val() === 'other') ? 'block' : 'none');
});

$(document).ready(function () {
    $('#sfloorCheck').change(function () {
        if (this.checked)
            //  ^
            $('#sfloorOther').fadeIn();
        else
            $('#sfloorOther').fadeOut();
    });
});

$(document).ready(function () {
    $('#sroom6').change(function () {
        if (this.checked)
            //  ^
            $('#sroomOther').fadeIn();
        else
            $('#sroomOther').fadeOut();
    });
});

// $(document).ready(function () {
//     $('#sdocumentCheck').change(function () {
//         if (this.checked) 
//         //  ^
//            $('#sdocumentOther').fadeIn();
//         else 
//             $('#sdocumentOther').fadeOut();
//     });
// });


// $(document).ready(function () {
//     $('#sauthorityCheck').change(function () {
//         if (this.checked) 
//         //  ^
//            $('#sauthorityOther').fadeIn();
//         else 
//             $('#sauthorityOther').fadeOut();
//     });
// });

$("input[name='sdocument']").click(function () {
    $('#sdocumentOther').css('display', ($(this).val() === 'other') ? 'block' : 'none');
});

$("input[name='sauthority']").click(function () {
    $('#sauthorityOther').css('display', ($(this).val() === 'other') ? 'block' : 'none');
});

$("input[name='spayment']").click(function () {
    $('#spaymentOther').css('display', (($(this).val() === 'bookingPlan') || ($(this).val() === 'installment')) ? 'block' : 'none');
});






$("input[name='rtype']").click(function () {
    $('#rtypeOther').css('display', ($(this).val() === 'other') ? 'block' : 'none');
});


$(document).ready(function () {
    $('#rfloorCheck').change(function () {
        if (this.checked)
            //  ^
            $('#rfloorOther').fadeIn();
        else
            $('#rfloorOther').fadeOut();
    });
});

$(document).ready(function () {
    $('#rroom6').change(function () {
        if (this.checked)
            //  ^
            $('#rroomOther').fadeIn();
        else
            $('#rroomOther').fadeOut();
    });
});








$("input[name='atype']").click(function () {
    $('#atypeOther').css('display', ($(this).val() === 'other') ? 'block' : 'none');
});

$(document).ready(function () {
    $('#afloorCheck').change(function () {
        if (this.checked)
            //  ^
            $('#afloorOther').fadeIn();
        else
            $('#afloorOther').fadeOut();
    });
});

$(document).ready(function () {
    $('#aroom6').change(function () {
        if (this.checked)
            //  ^
            $('#aroomOther').fadeIn();
        else
            $('#aroomOther').fadeOut();
    });
});



$("input[name='adocument']").click(function () {
    $('#adocumentOther').css('display', ($(this).val() === 'other') ? 'block' : 'none');
});

$("input[name='aauthority']").click(function () {
    $('#aauthorityOther').css('display', ($(this).val() === 'other') ? 'block' : 'none');
});






//  $("input[name='spayment']").click(function () {
//     $('#spaymentOther').css('display', ($(this).val() === 'installment') ? 'block':'none');
// });


// function showRoom(){
//      document.getElementById('roomOther').style.display ='block';


//     // if(document.getElementById('roomOther').style.display ='block')
//     // {
//     //     document.getElementById('roomOther').style.display ='none';
//     // }
//     // else{
//     //     document.getElementById('roomOther').style.display ='block';
//     // }    

//   }

// $("#floorCheck").click(function () {
//     $('#floorOther').css('display', ($(this).val() === 'other') ? 'block':'none');
//     // $('#floorOther').css('display', ($(this).val() === 'other') ? 'none':'block');
// });

// $("input[name='room']").click(function () {
//     $('#roomOther').css('display', ($(this).val() === 'other') ? 'block':'none');
// });




function purchaseOneResult() {
    var name = document.getElementById('name').value;
    var phoneNumber = document.getElementById('phoneNumber').value;
    // console.log('reached purchase');

    if (name === null || name === undefined || name === '') {
        alert('Kindly Fill the Name Field');
        document.getElementById('purchasePrevOne').click();
    }

    else if (phoneNumber === null || phoneNumber === undefined || phoneNumber === '') {
        alert('Kindly Fill the Phone Number Field');
        document.getElementById('purchasePrevOne').click();
    }

}

function purchaseTwoResult() {
    var range = document.getElementById('range').value;
    var societyName = document.getElementById('societyName').value;
    // console.log('reached purchase');

    if (range === null || range === undefined || range === '') {
        alert('Kindly Fill the Range Field');
        document.getElementById('purchasePrevTwo').click();
    }

    else if (societyName === null || societyName === undefined || societyName === '') {
        alert('Kindly Fill the Society Name Field');
        document.getElementById('purchasePrevTwo').click();
    }

}


function saleOneResult() {
    var name = document.getElementById('sname').value;
    var phoneNumber = document.getElementById('sphoneNumber').value;
    // console.log('reached purchase');

    if (name === null || name === undefined || name === '') {
        alert('Kindly Fill the Name Field');
        document.getElementById('salePrevOne').click();
    }

    else if (phoneNumber === null || phoneNumber === undefined || phoneNumber === '') {
        alert('Kindly Fill the Phone Number Field');
        document.getElementById('salePrevOne').click();
    }

}

function saleTwoResult() {
    var scompleteAddress = document.getElementById('scompleteAddress').value;
    var SsocietyName = document.getElementById('SsocietyName').value;

    var sDemand = document.getElementById('sDemand').value;

    // console.log('reached purchase');

    if (scompleteAddress === null || scompleteAddress === undefined || scompleteAddress === '') {
        alert('Kindly Fill the Complete Address Field');
        document.getElementById('salePrevTwo').click();
    }

    else if (SsocietyName === null || SsocietyName === undefined || SsocietyName === '') {
        alert('Kindly Fill the Society Name Field');
        document.getElementById('salePrevTwo').click();
    }
    else if (sDemand === null || sDemand === undefined || sDemand === '') {
        alert('Kindly Fill the Demand Field');
        document.getElementById('salePrevTwo').click();
    }


}





function requireOneResult() {
    var name = document.getElementById('rname').value;
    var phoneNumber = document.getElementById('rphoneNumber').value;
    // console.log('reached purchase');

    if (name === null || name === undefined || name === '') {
        alert('Kindly Fill the Name Field');
        document.getElementById('requirePrevOne').click();
    }

    else if (phoneNumber === null || phoneNumber === undefined || phoneNumber === '') {
        alert('Kindly Fill the Phone Number Field');
        document.getElementById('requirePrevOne').click();
    }

}

function requireTwoResult() {
    var rrange = document.getElementById('rrange').value;
    var rsocietyName = document.getElementById('rsocietyName').value;



    // console.log('reached purchase');

    if (rrange === null || rrange === undefined || rrange === '') {
        alert('Kindly Fill the Range Field');
        document.getElementById('requirePrevTwo').click();
    }

    else if (rsocietyName === null || rsocietyName === undefined || rsocietyName === '') {
        alert('Kindly Fill the Society Name Field');
        document.getElementById('requirePrevTwo').click();
    }
}



function availableOneResult() {
    var name = document.getElementById('aname').value;
    var phoneNumber = document.getElementById('aphoneNumber').value;
    // console.log('reached purchase');

    if (name === null || name === undefined || name === '') {
        alert('Kindly Fill the Name Field');
        document.getElementById('availablePrevOne').click();
    }

    else if (phoneNumber === null || phoneNumber === undefined || phoneNumber === '') {
        alert('Kindly Fill the Phone Number Field');
        document.getElementById('availablePrevOne').click();
    }

}

function availableTwoResult() {
    var acompleteAddress = document.getElementById('acompleteAddress').value;
    var asocietyName = document.getElementById('asocietyName').value;



    // console.log('reached purchase');

    if (acompleteAddress === null || acompleteAddress === undefined || acompleteAddress === '') {
        alert('Kindly Fill the Complete Address Field');
        document.getElementById('availablePrevTwo').click();
    }

    else if (asocietyName === null || asocietyName === undefined || asocietyName === '') {
        alert('Kindly Fill the Society Name Field');
        document.getElementById('availablePrevTwo').click();
    }
}


function purchaseInsert() {
    
    var date = new Date();
    date = date.getDate() + "/" + (date.getMonth()+1) + "/" + date.getFullYear();


    // var purchaseIdd = localStorage.getItem('purchaseIdJavascript');
    // var p_id='2';
    //var p_id=document.getElementById('purchaseUserId').innerHTML;
    var name = document.getElementById("name").value;
    var phoneNumber = document.getElementById("phoneNumber").value;
    var careOf = document.getElementById("careOf").value;
    var range = document.getElementById("range").value;
    var societyName = document.getElementById("societyName").value;


    var type = '';

    for (var i = 1; i < 8; i++) {
        // var valueId="ptypeRadio"
        if (document.getElementById("type" + i).checked) {
            type = document.getElementById("type" + i).value;
            // radioTypeFlag=true;
        }
    }

    if (type === 'other') {
        type = document.getElementById('typeOtherText').value;
    }

    var nature = '';

    for (var i = 1; i < 3; i++) {
        if (document.getElementById("nature" + i).checked) {
            nature = document.getElementById("nature" + i).value;
        }
    }

    var area = document.getElementById("area").value;


    var areaDrop = document.getElementById("areaDrop");
    var areaValue = areaDrop.options[areaDrop.selectedIndex].value;

    var payment = '';

    for (var i = 1; i < 3; i++) {
        if (document.getElementById("payment" + i).checked) {
            payment = document.getElementById("payment" + i).value;
        }
    }


    var down = document.getElementById("down").value;
    var schedulePeriod = document.getElementById("schedulePeriod").value;
    var monthly = document.getElementById("monthly").value;


    var floorDrop = document.getElementById("floorDrop");
    var floorValue = floorDrop.options[floorDrop.selectedIndex].value;
    var floorOther = '';

    if (floorValue === 'other') {
        floorOther = document.getElementById("floorCheckOther").value;
    }


    var room = [];
    var roomOther = '';

    for (var i = 1; i < 7; i++) {
        // var valueId="ptypeRadio"
        if (document.getElementById("room" + i).checked) {
            room.push(document.getElementById("room" + i).value);
            // radioTypeFlag=true;
        }
    }
    //  if(checkRoom.includes(document.getElementById("proomCheckbox"+i).value)){
    if (room.includes('other')) {
        roomOther = document.getElementById('roomCheckOther').value;
    }

    var otherDetails = document.getElementById("otherDetails").value;
    var nearby = document.getElementById("nearby").value;
    var otherFacilites = document.getElementById("otherFacilites").value;
    var healthFacilites = document.getElementById("healthFacilites").value;
    var picName='';

    if((document.getElementById("pfileName").value === null) || (document.getElementById("pfileName").value === undefined)){
        picName = '';
    }   
    else{
        picName = "pur_"+name+phoneNumber;
    }



    // alert(picName);

    document.getElementById("pPicName").value = picName;
    document.getElementById("pUserId").value = uid;
    var picNumber = document.getElementById("pfileName").files.length;

    
    // console.log("asd "+purchaseIdd);
    // console.log(proom);
    room = JSON.stringify(room);
    // console.log(proom);
    //alert(uid);
    fetch(Api + 'backend/bpurchaseJava.php', {
        method: 'POST',
        body: JSON.stringify({
            //   p_id: p_id,
            date:date,
            name: name,
            phoneNumber: phoneNumber,
            careOf: careOf,
            range: range,
            societyName: societyName,
            type: type,
            nature: nature,
            area: area,
            areaValue: areaValue,
            payment: payment,
            down: down,
            schedulePeriod: schedulePeriod,
            monthly: monthly,
            floorValue: floorValue,
            floorOther: floorOther,
            room: room,
            roomOther: roomOther,
            otherDetails: otherDetails,
            nearby: nearby,
            otherFacilites: otherFacilites,
            healthFacilites: healthFacilites,
            uid:uid,
            picName:picName,
            picNumber:picNumber,

            // pass: pass,
            // fullname: fullname,
        }),
        headers: new Headers({
            'Content-Type': 'application/json',
        })

    })
        .then((response) => response.json())
        .then((responseJson) => {
            
            alert("Successfully Inserted");
           // alert(picName + uid + picNumber);
           // document.getElementById("purchasePicForm").submit();
             document.getElementById("pPicSubmit").click();
           // setTimeout(timeoutFunction() , 2000);
            


            // console.log(responseJson);
        })
        .catch((error) => {
            alert("Not Updated");
            //window.location.href = "/onesource_admin/viewDetails.php";
            // console.error(error);
        });


}





function availableInsert() {
    // var purchaseIdd = localStorage.getItem('purchaseIdJavascript');
    // var p_id='2';
    //var p_id=document.getElementById('purchaseUserId').innerHTML;
    var date = new Date();
    date = date.getDate() + "/" + (date.getMonth()+1) + "/" + date.getFullYear();

    var aname = document.getElementById("aname").value;
    var aphoneNumber = document.getElementById("aphoneNumber").value;
    var acareOf = document.getElementById("acareOf").value;
    var acompleteAddress = document.getElementById("acompleteAddress").value;
    var asocietyName = document.getElementById("asocietyName").value;


    var atype = '';

    for (var i = 1; i < 8; i++) {
        // var valueId="ptypeRadio"
        if (document.getElementById("atype" + i).checked) {
            atype = document.getElementById("atype" + i).value;
            // radioTypeFlag=true;
        }
    }

    if (atype === 'other') {
        atype = document.getElementById('atypeOtherText').value;
    }

    var aDemand = document.getElementById("aDemand").value;



    var anature = '';

    for (var i = 1; i < 3; i++) {
        if (document.getElementById("anature" + i).checked) {
            anature = document.getElementById("anature" + i).value;
        }
    }

    var aarea = document.getElementById("aarea").value;


    var aareaDrop = document.getElementById("aareaDrop");
    var aareaValue = aareaDrop.options[aareaDrop.selectedIndex].value;


    var aDirection = document.getElementById("aDirection");
    var aDirectionValue = aDirection.options[aDirection.selectedIndex].value;


    var afloorDrop = document.getElementById("afloorDrop");
    var afloorValue = afloorDrop.options[afloorDrop.selectedIndex].value;
    var afloorOther = '';

    if (afloorValue === 'other') {
        afloorOther = document.getElementById("afloorCheckOther").value;
    }


    var aroom = [];
    var aroomOther = '';

    for (var i = 1; i < 7; i++) {
        // var valueId="ptypeRadio"
        if (document.getElementById("aroom" + i).checked) {
            aroom.push(document.getElementById("aroom" + i).value);
            // radioTypeFlag=true;
        }
    }
    //  if(checkRoom.includes(document.getElementById("proomCheckbox"+i).value)){
    if (aroom.includes('other')) {
        aroomOther = document.getElementById('aroomCheckOther').value;
    }
    var adocument = '';

    for (var i = 1; i < 5; i++) {
        // var valueId="ptypeRadio"
        if (document.getElementById("adocument" + i).checked) {
            adocument = document.getElementById("adocument" + i).value;
            // radioTypeFlag=true;
        }
    }


    if (adocument === 'other') {
        adocument = document.getElementById('adocumentCheck').value;
    }


    var aauthority = '';

    for (var i = 1; i < 7; i++) {
        // var valueId="ptypeRadio"
        if (document.getElementById("aauthority" + i).checked) {
            aauthority = document.getElementById("aauthority" + i).value;
            // radioTypeFlag=true;
        }
    }

    if (aauthority === 'other') {
        aauthority = document.getElementById('aauthorityCheckOther').value;
    }


    var autility = [];


    for (var i = 1; i < 4; i++) {
        // var valueId="ptypeRadio"
        if (document.getElementById("autility" + i).checked) {
            autility.push(document.getElementById("autility" + i).value);
            // radioTypeFlag=true;
        }
    }



    var aProject = document.getElementById("aProject").value;


    var aotherDetails = document.getElementById("aotherDetails").value;
    var anearby = document.getElementById("anearby").value;
    var aotherFacilites = document.getElementById("aotherFacilites").value;
    var ahealthFacilites = document.getElementById("ahealthFacilites").value;
    var aDues = document.getElementById("aDues").value;

    var picName='';
    var picNumber='';

    if((document.getElementById("afileName").value === null) || (document.getElementById("afileName").value === undefined)){
        picName = '';
        
    }   
    else{
        picName = "avai_"+aname+aphoneNumber;
    }



    // alert(picName);

    document.getElementById("aPicName").value = picName;
    document.getElementById("aUserId").value = uid;
    picNumber = document.getElementById("afileName").files.length;

    

    
    // console.log("asd "+purchaseIdd);
    // console.log(proom);
    aroom = JSON.stringify(aroom);
    autility = JSON.stringify(autility);
    // console.log(proom);

    fetch(Api + 'backend/bavailableJava.php', {
        method: 'POST',
        body: JSON.stringify({
            //   p_id: p_id,
            date: date,
            aname: aname,
            aphoneNumber: aphoneNumber,
            acareOf: acareOf,
            acompleteAddress: acompleteAddress,
            asocietyName: asocietyName,
            atype: atype,
            aDemand: aDemand,
            anature: anature,
            aarea: aarea,
            aareaValue: aareaValue,
            aDirectionValue: aDirectionValue,
            afloorValue: afloorValue,
            afloorOther: afloorOther,
            aroom: aroom,
            aroomOther: aroomOther,
            adocument: adocument,
            aauthority: aauthority,
            autility: autility,
            aProject: aProject,
            aotherDetails: aotherDetails,
            anearby: anearby,
            aotherFacilites: aotherFacilites,
            ahealthFacilites: ahealthFacilites,
            aDues: aDues,
            uid:uid,
            picName:picName,
            picNumber:picNumber,

            // pass: pass,
            // fullname: fullname,
        }),
        headers: new Headers({
            'Content-Type': 'application/json',
        })

    })
        .then((response) => response.json())
        .then((responseJson) => {

            alert("Successfully Inserted");
            alert(picName + uid + picNumber);
            document.getElementById("aPicSubmit").click();
            // var result = confirm("Would youlike to refill the Form");
            // afterSubmission(result);

            // var url="/onesource_admin/viewDetails.php?purchaseIdd="+idd;//+"&page="+pageId+"&rec_per_page="+recPerPageId;
            //window.location.href = "/onesource_admin/viewDetails.php";


            // console.log(responseJson);
        })
        .catch((error) => {
            alert("Not Updated");
         //   window.location.href = "/onesource_admin/viewDetails.php";
            // console.error(error);
        });


}






function saleInsert() {
    // var purchaseIdd = localStorage.getItem('purchaseIdJavascript');
    // var p_id='2';
    //var p_id=document.getElementById('purchaseUserId').innerHTML;
    var date = new Date();
    date = date.getDate() + "/" + (date.getMonth()+1) + "/" + date.getFullYear();

    var sname = document.getElementById("sname").value;
    var sphoneNumber = document.getElementById("sphoneNumber").value;
    var scareOf = document.getElementById("scareOf").value;
    var scompleteAddress = document.getElementById("scompleteAddress").value;
    var SsocietyName = document.getElementById("SsocietyName").value;


    var stype = '';

    for (var i = 1; i < 8; i++) {
        // var valueId="ptypeRadio"
        if (document.getElementById("stype" + i).checked) {
            stype = document.getElementById("stype" + i).value;
            // radioTypeFlag=true;
        }
    }

    if (stype === 'other') {
        stype = document.getElementById('stypeCheckOther').value;
    }

    var sDemand = document.getElementById("sDemand").value;



    var snature = '';

    for (var i = 1; i < 3; i++) {
        if (document.getElementById("snature" + i).checked) {
            snature = document.getElementById("snature" + i).value;
        }
    }

    var sarea = document.getElementById("sarea").value;


    var sareaDrop = document.getElementById("sareaDrop");
    var sareaDropValue = sareaDrop.options[sareaDrop.selectedIndex].value;


    var sDirection = document.getElementById("sDirection");
    var sDirectionValue = sDirection.options[sDirection.selectedIndex].value;


    var sfloorDrop = document.getElementById("sfloorDrop");
    var sfloorDropValue = sfloorDrop.options[sfloorDrop.selectedIndex].value;
    var sfloorCheckOther = '';

    if (sfloorDropValue === 'other') {
        sfloorCheckOther = document.getElementById("sfloorCheckOther").value;
    }


    var sroom = [];
    var sroomOther = '';

    for (var i = 1; i < 7; i++) {
        // var valueId="ptypeRadio"
        if (document.getElementById("sroom" + i).checked) {
            sroom.push(document.getElementById("sroom" + i).value);
            // radioTypeFlag=true;
        }
    }
    //  if(checkRoom.includes(document.getElementById("proomCheckbox"+i).value)){
    if (sroom.includes('other')) {
        sroomOther = document.getElementById('sroomCheck').value;
    }
    var sdocument = '';

    for (var i = 1; i < 5; i++) {
        // var valueId="ptypeRadio"
        if (document.getElementById("sdocument" + i).checked) {
            document = document.getElementById("sdocument" + i).value;
            // radioTypeFlag=true;
        }
    }


    if (sdocument === 'other') {
        sdocument = document.getElementById('sdocumentOtherCheck').value;
    }


    var sauthority = '';

    for (var i = 1; i < 7; i++) {
        // var valueId="ptypeRadio"
        if (document.getElementById("sauthority" + i).checked) {
            sauthority = document.getElementById("sauthority" + i).value;
            // radioTypeFlag=true;
        }
    }

    if (sauthority === 'other') {
        sauthority = document.getElementById('sauthorityCheckOther').value;
    }


    var spayment = '';

    for (var i = 1; i < 4; i++) {
        // var valueId="ptypeRadio"
        if (document.getElementById("spayment" + i).checked) {
            spayment = document.getElementById("spayment" + i).value;
            // radioTypeFlag=true;
        }
    }

    spaymentOtherText = document.getElementById('spaymentOtherText').value;
    // if(sauthority==='other'){
    //     sauthority=document.getElementById('sauthorityCheckOther').value;
    // }


    var sutility = [];


    for (var i = 1; i < 4; i++) {
        // var valueId="ptypeRadio"
        if (document.getElementById("sutility" + i).checked) {
            id = sutility.push(document.getElementById("sutility" + i).value);
            // radioTypeFlag=true;
        }
    }



    var sProject = document.getElementById("sProject").value;


    var sotherDetails = document.getElementById("sotherDetails").value;
    var snearby = document.getElementById("snearby").value;
    var sotherFacilites = document.getElementById("sotherFacilites").value;
    var shealthFacilites = document.getElementById("shealthFacilites").value;
    //var aDues=document.getElementById("aDues").value;



    var picName='';

    if((document.getElementById("sfileName").value === null) || (document.getElementById("pfileName").value === undefined)){
        picName = '';
    }   
    else{
        picName = "sale_"+sname+sphoneNumber;
    }



    // alert(picName);

    document.getElementById("sPicName").value = picName;
    document.getElementById("sUserId").value = uid;
    var picNumber = document.getElementById("sfileName").files.length;


    // console.log("asd "+purchaseIdd);
    // console.log(proom);
    sroom = JSON.stringify(sroom);
    sutility = JSON.stringify(sutility);
    // console.log(proom);

    fetch(Api + 'backend/bsaleJava.php', {
        method: 'POST',
        body: JSON.stringify({
            //   p_id: p_id,
            date: date,
            sname: sname,
            sphoneNumber: sphoneNumber,
            scareOf: scareOf,
            scompleteAddress: scompleteAddress,
            SsocietyName: SsocietyName,
            stype: stype,
            sDemand: sDemand,
            snature: snature,
            sarea: sarea,
            sareaDropValue: sareaDropValue,
            sDirectionValue: sDirectionValue,
            sfloorDropValue: sfloorDropValue,
            sfloorCheckOther: sfloorCheckOther,
            sroom: sroom,
            sroomOther: sroomOther,
            sdocument: sdocument,
            sauthority: sauthority,
            spayment: spayment,
            spaymentOtherText: spaymentOtherText,
            sutility: sutility,
            sProject: sProject,
            sotherDetails: sotherDetails,
            snearby: snearby,
            sotherFacilites: sotherFacilites,
            shealthFacilites: shealthFacilites,
            uid:uid,
            picName:picName,
            picNumber:picNumber,
            //aDues:aDues,

            // pass: pass,
            // fullname: fullname,
        }),
        headers: new Headers({
            'Content-Type': 'application/json',
        })

    })
        .then((response) => response.json())
        .then((responseJson) => {

            
            alert("Successfully Inserted");
            document.getElementById("sPicSubmit").click();


            // console.log(responseJson);
        })
        .catch((error) => {
            alert("Not Updated");
          //  window.location.href = "/onesource_admin/viewDetails.php";
            // console.error(error);
        });


}



function requireInsert() {

    var date = new Date();
    date = date.getDate() + "/" + (date.getMonth()+1) + "/" + date.getFullYear();


    // var purchaseIdd = localStorage.getItem('purchaseIdJavascript');
    // var p_id='2';
    //var p_id=document.getElementById('purchaseUserId').innerHTML;
    var rname = document.getElementById("rname").value;
    var rphoneNumber = document.getElementById("rphoneNumber").value;
    var rcareOf = document.getElementById("rcareOf").value;
    var rrange = document.getElementById("rrange").value;
    var rsocietyName = document.getElementById("rsocietyName").value;


    var rtype = '';

    for (var i = 1; i < 8; i++) {
        // var valueId="ptypeRadio"
        if (document.getElementById("rtype" + i).checked) {
            rtype = document.getElementById("rtype" + i).value;
            // radioTypeFlag=true;
        }
    }

    if (rtype === 'other') {
        rtype = document.getElementById('rtypeOtherCheck').value;
    }


    var rarea = document.getElementById("rarea").value;


    var rareaDrop = document.getElementById("rareaDrop");
    var rareaValue = rareaDrop.options[rareaDrop.selectedIndex].value;




    var rfloorDrop = document.getElementById("rfloorDrop");
    var rfloorValue = rfloorDrop.options[rfloorDrop.selectedIndex].value;
    var rfloorOther = '';

    if (rfloorValue === 'other') {
        rfloorOther = document.getElementById("rfloorCheckOther").value;
    }


    var rroom = [];
    var rroomOtherText = '';

    for (var i = 1; i < 7; i++) {
        // var valueId="ptypeRadio"
        if (document.getElementById("rroom" + i).checked) {
            rroom.push(document.getElementById("rroom" + i).value);
            // radioTypeFlag=true;
        }
    }
    //  if(checkRoom.includes(document.getElementById("proomCheckbox"+i).value)){
    if (rroom.includes('other')) {
        rroomOtherText = document.getElementById('rroomOtherText').value;
    }

    var rotherDetails = document.getElementById("rotherDetails").value;
    var rnearby = document.getElementById("rnearby").value;
    var rotherFacilites = document.getElementById("rotherFacilites").value;
    var rhealthFacilites = document.getElementById("rhealthFacilites").value;

    var picName='';

    if((document.getElementById("rfileName").value === null) || (document.getElementById("rfileName").value === undefined)){
        picName = '';
    }   
    else{
        picName = "rent_"+rname+rphoneNumber;
    }



    // alert(picName);

    document.getElementById("rPicName").value = picName;
    document.getElementById("rUserId").value = uid;
    var picNumber = document.getElementById("rfileName").files.length;


    
    // console.log("asd "+purchaseIdd);
    // console.log(proom);
    rroom = JSON.stringify(rroom);
    // console.log(proom);

    fetch(Api + 'backend/brequireJava.php', {
        method: 'POST',
        body: JSON.stringify({
            //   p_id: p_id,
            date:date,
            rname: rname,
            rphoneNumber: rphoneNumber,
            rcareOf: rcareOf,
            rrange: rrange,
            rsocietyName: rsocietyName,
            rtype: rtype,
            rarea: rarea,
            rareaValue: rareaValue,
            rfloorValue: rfloorValue,
            rfloorOther: rfloorOther,
            rroom: rroom,
            rroomOtherText: rroomOtherText,
            rotherDetails: rotherDetails,
            rnearby: rnearby,
            rotherFacilites: rotherFacilites,
            rhealthFacilites: rhealthFacilites,
            uid:uid,
            picName:picName,
            picNumber:picNumber,
            // roomOther:roomOther,
            // otherDetails:otherDetails,
            // nearby:nearby,
            // otherFacilites:otherFacilites,
            // healthFacilites:healthFacilites,

            // pass: pass,
            // fullname: fullname,
        }),
        headers: new Headers({
            'Content-Type': 'application/json',
        })

    })
        .then((response) => response.json())
        .then((responseJson) => {

            alert("Successfully Inserted");
            document.getElementById("rPicSubmit").click();
            // var result = confirm("Would youlike to refill the Form");
            // afterSubmission(result);


            // console.log(responseJson);
        })
        .catch((error) => {
            alert("Not Updated");
        //    window.location.href = "/onesource_admin/viewDetails.php";
            // console.error(error);
        });


}

function onLoadFunction(){
    uid = document.getElementById("uid").value;
}
function timeoutFunction(){
   // alert("reached timeut");
  
    var result = confirm("Would youlike to refill the Form");
            afterSubmission(result);
}
function afterSubmission(result){
    if(result){
        window.location.href = "http://1sourceestate.com/inquiry_demo?uid="+uid;
    }
    else{
        window.location.href = "http://1sourceestate.com/";
    }
}