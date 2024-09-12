<?php
    $url = 'API URL Here';

    $urlWithParams = $url;
    //initialize the url session
    $session = curl_init();
    //Set the session options 
    curl_setopt($session, CURLOPT_URL, $urlWithParams); //EndPoint
    curl_setopt($session, CURLOPT_RETURNTRANSFER, $true); //Return a Response

    //Execute the request
    $response = curl_exec($session);
    //Catch errors
    if ($response === false) {
        echo 'Error ' . curl_error($session);
    } else {
        //Return JSON
        $responseData = json_decode($response, true);
        //header('Content-Type: application/json');
        echo json_encode($responseData);
    }

    //Close Session
    curl_close($session);

?>