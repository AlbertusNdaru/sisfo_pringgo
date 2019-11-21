<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    if ( ! function_exists('curl_api_post')) {
        function curl_api_post($url, $postfields, $header) {
            $curl = curl_init();
            curl_setopt_array($curl, array(
              CURLOPT_URL => $url,
              CURLOPT_RETURNTRANSFER => true,
              CURLOPT_MAXREDIRS => 10,
              CURLOPT_TIMEOUT => 30,
              CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
              CURLOPT_CUSTOMREQUEST => 'POST',
              CURLOPT_POSTFIELDS => $postfields,
              CURLOPT_HTTPHEADER => $header,
            ));
            $result = curl_exec($curl);
            curl_close($curl);
            return $result;
        }
    }

    if ( ! function_exists('curl_api_get')) {
        function curl_api_get($url, $header) {
            $curl = curl_init();
            curl_setopt_array($curl, array(
              CURLOPT_URL => $url,
              CURLOPT_RETURNTRANSFER => true,
              CURLOPT_MAXREDIRS => 10,
              CURLOPT_TIMEOUT => 30,
              CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
              CURLOPT_CUSTOMREQUEST => 'GET',
              CURLOPT_HTTPHEADER => $header,
            ));
            $result = curl_exec($curl);
            curl_close($curl);
            return $result;
        }
    }