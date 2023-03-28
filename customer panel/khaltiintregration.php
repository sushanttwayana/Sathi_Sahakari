<?php
//esewa integration
        $token = 'test_public_key_a0be0d3c1a764e27b5ee503586a00518'; // Your Khalti merchant token
        $amount = 100; // The amount to be loaded
        $transaction_id = rand(10000,9999); // A unique identifier for the transaction

        $data = array(
            'token' => $token,
            'amount' => $amount,
            'transaction_id' => $transaction_id
        );

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://khalti.com/api/v2/payment/confirm/');
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec($ch);
        curl_close($ch);

        // Handle the response
        if ($response) {
            $response = json_decode($response, true);
            if ($response['state']['name'] === 'Completed') {
                // The transaction was successful
                alert("The transaction was successful");
            } else {
                // The transaction failed
                alert("The transaction was failed");
            }
        } else {
            // There was an error processing the request
            alert("The transaction has some error");
        }
?>