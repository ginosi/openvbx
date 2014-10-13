<?php
    $press9 = [
	"+13234645488", //CHS
        "+13234630229", //HS & CHS
        "+13234637046", //HV
        "+13234606024", //Rubix
        "+13234606862", //Rubix
        "+13238757245", //Seattle
        "+12066821474", //Seattle2
        "+12028984721", //VCP
	"+266696687",

    ];
    $press9twice = [ 
	"+12132217960", //HollandBack
        "+12132217953", //HollandFront
    ];
    if(in_array($_POST['From'], $press9)) {
    	$ID = 9;
    } 
    elseif(in_array($_POST['From'], $press9twice)) {
    	$ID = '9ww9';
    }
    else { 
    	$ID = 6;
    }
 
    header("content-type: text/xml");
    echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
?>
<Response>
    <Say>Hello</Say>
    <Play digits="ww<?= $ID ?>" />
    <Hangup />
</Response>
