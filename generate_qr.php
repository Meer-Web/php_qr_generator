<?php
/*
 * Author: F. Bischof (info@meer-web.nl)
 * Version: 1.0
 *
 * More info: https://developers.google.com/chart/infographics/docs/qr_codes
 */

function QR() {
        $URL_ROOT = 'https://chart.googleapis.com/chart';
        $TYPE = 'qr'; // QR
        $SIZE = '250x250'; // Size QR
        $ENCODING = 'UTF-8'; // Encoding
        global $DATA; // Data

        $URL_FULL = "<img src='${URL_ROOT}?cht=${TYPE}&chs=${SIZE}&chl=${DATA}&choe=${ENCODING}'>";
        return $URL_FULL;
}

$DATA = 'Hi Mothergoose';
echo QR();

?>