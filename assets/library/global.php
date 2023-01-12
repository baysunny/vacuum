<?php

function cleanInput($input){
 
    $search = array(
        '@<script[^>]*?>.*?</script>@si',   // Strip out javascript
        '@<[\/\!]*?[^<>]*?>@si',            // Strip out HTML tags
        '@<style[^>]*?>.*?</style>@siU',    // Strip style tags properly
        '@<![\s\S]*?--[ \t\n\r]*>@'         // Strip multi-line comments
    );
 
    $output = preg_replace($search, '', $input);
    return $output;
}

function sanitize($input) {
    if (is_array($input)) {
        foreach($input as $var=>$val) {
            $output[$var] = sanitize($val);
        }
    }
    else {
        if (get_magic_quotes_gpc()) {
            $input = stripslashes($input);
        }
        $input  = cleanInput($input);
        $output = mysql_real_escape_string($input);
    }
    return $output;
}


function clean_input($value){
    $search = array("\\",  "\x00", "\n",  "\r",  "'",  '"', "\x1a");
    $replace = array("\\\\","\\0","\\n", "\\r", "\'", '\"', "\\Z");

    return str_replace($search, $replace, $value);
}

function request($data, $url){
    $curl = curl_init();
    $query = http_build_query($data);
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_POSTFIELDS, $query);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($curl);
    if(curl_errno($curl)){
        return curl_error($curl);
    }
    curl_close($curl);

    return $result;
}

function post_validator($array_post, $required){
    foreach ($required as $field) {
        if(!array_key_exists($field, $array_post)){
            return false;
        }
        if(strlen($array_post[$field]) < 1){
            return false;
        }
        if($array_post[$field] == 0){
            continue;
        }
    }return true;
}

function file_validator($fileObject, $allowedExtension){
    $filename = $fileObject['name'];
    $fileError = $fileObject['error'];
    $fileTempDir = $fileObject['tmp_name'];
    $temp = explode('.', $filename);
    $fileExtension = strtolower(end($temp));
    if(!empty($filename) && strlen($filename) != 0){
        if (in_array($fileExtension, $allowedExtension)) {
            if ($fileError === 0) {
                // $filename = $formatFileName . "-" . uniqid('', true) . "." . $fileExtension;
                // return $filename;
                return true;
            }else{
                return false;
            }
        }else{
            return false;
        }
    }
    return false;
}

function display_date($dateVar){
    $year = substr($dateVar, 0, 4);
    $month = substr($dateVar, 5, 2);
    $day = substr($dateVar, 8, 2);
    $month_string = int_to_month($month);

    return $day." ".substr($month_string,0, 3)." ".$year;
    // return $dateVar;
}

function int_to_month($month){
    $month_string = "";
    if($month == 1){
        $month_string = "Januari";
    }else if($month == 2){
        $month_string = "Februari";
    }else if($month == 3){
        $month_string = "Maret";
    }else if($month == 4){
        $month_string = "April";
    }else if($month == 5){
        $month_string = "Mei";
    }else if($month == 6){
        $month_string = "Juni";
    }else if($month == 7){
        $month_string = "Juli";
    }else if($month == 8){
        $month_string = "Agustus";
    }else if($month == 9){
        $month_string = "September";
    }else if($month == 10){
        $month_string = "Oktober";
    }else if($month == 11){
        $month_string = "November";
    }else if($month == 12){
        $month_string = "Desember";
    }
    return $month_string;
}

function getIpAddress(){
    $ipAddress = '';
    if (getenv('HTTP_CLIENT_IP'))
        $ipAddress = getenv('HTTP_CLIENT_IP');
    else if(getenv('HTTP_X_FORWARDED_FOR'))
        $ipAddress = getenv('HTTP_X_FORWARDED_FOR');
    else if(getenv('HTTP_X_FORWARDED'))
        $ipAddress = getenv('HTTP_X_FORWARDED');
    else if(getenv('HTTP_FORWARDED_FOR'))
        $ipAddress = getenv('HTTP_FORWARDED_FOR');
    else if(getenv('HTTP_FORWARDED'))
       $ipAddress = getenv('HTTP_FORWARDED');
    else if(getenv('REMOTE_ADDR'))
        $ipAddress = getenv('REMOTE_ADDR');
    else
        $ipAddress = 'UNKNOWN';
    return $ipAddress;
}

function getContact(){
    require_once $_SERVER['DOCUMENT_ROOT']."/config.php";
    global $CONTACT;
    return $CONTACT;
}

// unused
function safeEncrypt(string $message, string $key): string
{
    if (mb_strlen($key, '8bit') !== SODIUM_CRYPTO_SECRETBOX_KEYBYTES) {
        throw new RangeException('Key is not the correct size (must be 32 bytes).');
    }
    $nonce = random_bytes(SODIUM_CRYPTO_SECRETBOX_NONCEBYTES);
    
    $cipher = base64_encode(
        $nonce.
        sodium_crypto_secretbox(
            $message,
            $nonce,
            $key
        )
    );
    sodium_memzero($message);
    sodium_memzero($key);
    return $cipher;
}


// unused
function safeDecrypt(string $encrypted, string $key): string
{   
    $decoded = base64_decode($encrypted);
    $nonce = mb_substr($decoded, 0, SODIUM_CRYPTO_SECRETBOX_NONCEBYTES, '8bit');
    $ciphertext = mb_substr($decoded, SODIUM_CRYPTO_SECRETBOX_NONCEBYTES, null, '8bit');
    
    $plain = sodium_crypto_secretbox_open(
        $ciphertext,
        $nonce,
        $key
    );
    if (!is_string($plain)) {
        throw new Exception('Invalid MAC');
    }
    sodium_memzero($ciphertext);
    sodium_memzero($key);
    return $plain;
}

function generate_code(){
    $characters = "0123456789";
        $charactersLength = strlen($characters);
        $result = '';
        for ($i = 0; $i < 20; $i++) {

            $result .= $characters[rand(0, $charactersLength - 1)];
            if($i % 3 == 0){
                $result .= "-";
            }
        }
        return $result;
}

