<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Day 1 : Arth Internship</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
          rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }

    </style>

</head>

<body class="w-1/2 mx-auto bg-gray-50">

    <?php
    $TimeZone = [
        'Pacific/Midway',
        'US/Hawaii',
        'US/Alaska',
        'US/Pacific',
        'America/Tijuana',
        'US/Arizona',
        'US/Mountain',
        'America/Chihuahua',
        'America/Mazatlan',
        'America/Mexico_City',
        'America/Monterrey',
        'Canada/Saskatchewan',
        'US/Central',
        'America/Bogota',
        'America/Lima',
        'America/Caracas',
        'Canada/Atlantic',
        'America/La_Paz',
        'America/Santiago',
        'Canada/Newfoundland',
        'America/Buenos_Aires',
        'Atlantic/Stanley',
        'Atlantic/Azores',
        'Atlantic/Cape_Verde',
        'Africa/Casablanca',
        'Europe/Dublin',
        'Europe/Lisbon',
        'Europe/London',
        'Africa/Monrovia',
        'Europe/Amsterdam',
        'Europe/Belgrade',
        'Europe/Berlin',
        'Europe/Bratislava',
        'Europe/Brussels',
        'Europe/Budapest',
        'Europe/Copenhagen',
        'Europe/Ljubljana',
        'Europe/Madrid',
        'Europe/Paris',
        'Europe/Prague',
        'Europe/Rome',
        'Europe/Sarajevo',
        'Europe/Skopje',
        'Europe/Stockholm',
        'Europe/Vienna',
        'Europe/Warsaw',
        'Europe/Zagreb',
        'Europe/Athens',
        'Europe/Bucharest',
        'Africa/Cairo',
        'Africa/Harare',
        'Europe/Helsinki',
        'Europe/Istanbul',
        'Asia/Jerusalem',
        'Europe/Kiev',
        'Europe/Minsk',
        'Europe/Riga',
        'Europe/Sofia',
        'Europe/Tallinn',
        'Europe/Vilnius',
        'Asia/Baghdad',
        'Asia/Kuwait',
        'Africa/Nairobi',
        'Asia/Riyadh',
        'Europe/Moscow',
        'Asia/Tehran',
        'Asia/Baku',
        'Europe/Volgograd',
        'Asia/Muscat',
        'Asia/Tbilisi',
        'Asia/Yerevan',
        'Asia/Kabul',
        'Asia/Karachi',
        'Asia/Tashkent',
        'Asia/Kolkata',
        'Asia/Kathmandu',
        'Asia/Yekaterinburg',
        'Asia/Almaty',
        'Asia/Dhaka',
        'Asia/Novosibirsk',
        'Asia/Bangkok',
        'Asia/Jakarta',
        'Asia/Krasnoyarsk',
        'Asia/Chongqing',
        'Asia/Hong_Kong',
        'Asia/Kuala_Lumpur',
        'Australia/Perth',
        'Asia/Singapore',
        'Asia/Taipei',
        'Asia/Ulaanbaatar',
        'Asia/Urumqi',
        'Asia/Irkutsk',
        'Asia/Seoul',
        'Asia/Tokyo',
        'Australia/Adelaide',
        'Australia/Darwin',
        'Asia/Yakutsk',
        'Australia/Brisbane',
        'Australia/Canberra',
        'Pacific/Guam',
        'Australia/Hobart',
        'Australia/Melbourne',
        'Pacific/Port_Moresby',
        'Australia/Sydney',
        'Asia/Vladivostok',
        'Asia/Magadan',
        'Pacific/Auckland',
        'Pacific/Fiji',
    ];
    
    ?>

    <div
         class="tracking-wide text-2xl mt-10 mx-auto px-14 my-10  border-2 rounded-xl blue-500 shadow-lg shadow-blue-500">

        <h1 class='tracking-wider text-red-400 text-4xl text-center pt-5 pb-10 font-bold '>DAY 1: TimeZone</h1>
        <div class="text-base font-light">
            <?php
            
            // Current Kolkata time:
            echo '<div class="flex justify-between">';
            echo '<h1>';
            echo date('d-m-Y h:i:s');
            echo '</h1>';
            echo 'asia/kolkata ';
            echo '</div>';
            echo '<br>';
            echo '<br>';
            echo '<br>';
            
            //    PrintList of Time around world
            foreach ($TimeZone as $Time) {
                // echo "$value <br>";
                echo '<div class="flex justify-between">' . config(['app.timezone' => $Time]);
                $value = config('app.timezone');
                $date = new DateTime();
                $tz = new DateTimeZone($value);
                $date->setTimeZone($tz);
                echo $date->format('F-j-Y g:i:s A');
                echo '<h1 class="">' . $value . '</h1>';
                echo '</div>';
                echo '<br>';
            }
            ?>

        </div>
    </div>
</body>

</html>
