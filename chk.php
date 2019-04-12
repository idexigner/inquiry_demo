<?php


 $aname =  $_POST['aname'];
        $aphoneNumber =  $_POST['aphoneNumber'];
        $acareOf =  $_POST['acareOf'];

        $acompleteAddress =  $_POST['acompleteAddress'];
        $asocietyName =  $_POST['asocietyName'];
        $atype =  $_POST['atype'];
        if($atype==='other'){
            $atype =  $_POST['atypeOther'];         
        }
        $aDemand =  $_POST['aDemand'];
        $anature =  $_POST['anature'];
        $aarea =  $_POST['aarea'];
        $aareaDrop =  $_POST['aareaDrop'];
        $aDirection =  $_POST['aDirection'];
        $afloor =  implode(',', $_POST['afloor']);
        $afloorOther =  $_POST['afloorOther'];
        $aroom =  implode(',', $_POST['aroom']);
        $aroomOther =  $_POST['aroomOther'];
        $adocument =  $_POST['adocument'];
        $adocumentOther =  $_POST['adocumentOther'];
        $aauthority =  $_POST['aauthority'];
        $aauthorityOther =  $_POST['aauthorityOther'];
        // $spayment =  $_POST['spayment'];
        // $spaymentOther1 =  $_POST['spaymentOther1'];
        // $spaymentOther2 =  $_POST['spaymentOther2'];
        // $spaymentOther3 =  $_POST['spaymentOther3'];
        // $spaymentOther4 =  $_POST['spaymentOther4'];
        $autility =  implode(',', $_POST['autility']);
        $aProject =  $_POST['aProject'];
        $aotherDetails =  $_POST['aotherDetails'];
        $anearby =  $_POST['anearby'];
        $aotherFacilites =  $_POST['aotherFacilites'];
        $ahealthFacilites =  $_POST['ahealthFacilites'];

create table required_rent(r_id int auto_increment primary key, rname,rphoneNumber,rcareOf,rrange,rsocietyName,rarea,rareaDrop,rtype,rfloor,rfloorOther,rroom,rroomOther,rOtherDetails,rnearby,rotherFacilities,rhealthFacilities,u_id)


create table available_rent(a_id int auto_increment primary key,aname,aphoneNumber,acareOf,acompleteAddress,asocietyName,atype,aDemand,anature,aarea,aareaDrop,aDirection,afloor,afloorOther,aroom,aroomOther,adocument,adocumentOther,aauthority,aauthorityOther,autility,aProject,aotherDetails,anearby,aotherFacilities,ahealthFacilities,u_id )