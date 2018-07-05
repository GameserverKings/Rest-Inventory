<?php
/**
 * Addon file provided by gameserverkings.com, your source for ALL your gaming needs.
 * This enables this script to operate using curl versus file_gets as not all web hosts will allow this
 */

function readUrl($url, $timeout=5, $showErrors=false) {
    if($showErrors) {
        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);
    }

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
    $data = curl_exec($ch);
    curl_close($ch);
    return $data;
}