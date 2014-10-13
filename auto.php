<?php 
    $press9 = [
        "+13234645488", //CHS
	"+12132217960", //HollandBack
	"+12132217953", //HollandFront
	"+13234630229", //HS & CHS
	"+13234637046", //HV
	"+13234606024", //Rubix
	"+13234606862", //Rubix
	"+13238757245", //Seattle
	"+12066821474", //Seattle2
	"+12028984721", //VCP
    ];

    if(in_array($_REQUEST['From'], $press9)) {
    	$ID = 9;
    } else {
    	$ID = 6;
    }
 
    header("content-type: text/xml");
    echo '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
?>
<Response>
    <Say>Hello</Say>
    <Play digits="ww<?= $ID ?>" />
    <Hangup />
</Response>
