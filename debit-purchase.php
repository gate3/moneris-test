<?php

    require "./mpgClasses.php";

    $store_id=$_ENV["STORE_ID"];
    $api_token=$_ENV["API_TOKEN"];
    $orderid= 'ord-'.date("dmy-G:i:s"); // Sample

    $txnArray=array(
        'type'=>'idebit_purchase',
        'order_id'=>$orderid,
        'cust_id'=>$_GET['customerId'],
        'amount'=>$_GET['amount'],
        'idebit_track2'=>$_GET['IdebitTrack2']
    );

    $mpgTxn = new mpgTransaction($txnArray);

    $mpgRequest = new mpgRequest($mpgTxn);
    $mpgRequest->setProcCountryCode("CA");
    $mpgRequest->setTestMode(true); 

    $mpgHttpPost  =new mpgHttpsPost($store_id,$api_token,$mpgRequest);

    $mpgResponse=$mpgHttpPost->getMpgResponse();

    /*

    // Response retrieved from interac debit purchase

        echo("\nCardType = " . $mpgResponse->getCardType());
        echo("\nTransAmount = " . $mpgResponse->getTransAmount());
        echo("\nTxnNumber = " . $mpgResponse->getTxnNumber());
        echo("\nReceiptId = " . $mpgResponse->getReceiptId());
        echo("\nTransType = " . $mpgResponse->getTransType());
        echo("\nReferenceNum = " . $mpgResponse->getReferenceNum());
        echo("\nResponseCode = " . $mpgResponse->getResponseCode());
        echo("\nISO = " . $mpgResponse->getISO());
        echo("\nMessage = " . $mpgResponse->getMessage());
        echo("\nAuthCode = " . $mpgResponse->getAuthCode());
        echo("\nComplete = " . $mpgResponse->getComplete());
        echo("\nTransDate = " . $mpgResponse->getTransDate());
        echo("\nTransTime = " . $mpgResponse->getTransTime());
        echo("\nTicket = " . $mpgResponse->getTicket());
        echo("\nTimedOut = " . $mpgResponse->getTimedOut());
    
    */
?>

