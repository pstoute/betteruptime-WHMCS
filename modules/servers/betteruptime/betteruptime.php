<?php
if (!defined('WHMCS')) {
	die('This file cannot be accessed directly');
}

use WHMCS\Database\Capsule;


function betteruptime_MetaData()
{
	return array(
		'DisplayName'		=> 'Better Uptime',
		'APIVersion'		=> '1.1',
		'RequiresServer'	=> false,
	);
}

// Service Options
function betteruptime_ConfigOptions()
{
	return array(
        // configoption1 = Monitor Type |
		'Alert us when the URL'			=> array(
			'Type'			=> 'dropdown',
			'Options'		=> [
				'status'                => 'Becomes unavailable',
				'keyword'               => 'Contains keyword',
				'keyword_absence'       => 'Doesn\'t contain keyword',
			],
			'Description'	=> 'Select your preferred monitor type',
			'Default'		=> 'status',
			'SimpleMode'	=> true
		),
        // configoption2 = Required Keyword |
        'Keyword to find on the page'      => array(
            'Type'          => 'text',
            'Description'   => 'Used with Keyword triggered alerts. We will create a new incident if this keyword is missing on your page.',
            'SimpleMode'    => true,
        ),
		// configoption3 = Check frequency | Accepted options: 1 2 3 7 14 30 60
		'Check Frequency'			=> array(
			'Type'			=> 'dropdown',
			'Options'		=> [
				'30'		=> '30 Seconds',
				'45'		=> '45 Seconds',
				'60'		=> '1 Minute',
				'120'		=> '2 Minutes',
				'180'		=> '3 Minutes',
				'300'		=> '5 Minutes',
                '600'       => '10 Minutes',
                '900'       => '15 Minutes',
                '1800'      => '30 Minutes',
			],
			'Description'	=> 'How frequently should we check the URL?',
			'Default'		=> '300',
			'SimpleMode'	=> true
		),
		// configoption4 = Recovery Period | Accepted options: 1 2 3 7 14 30 60
		'Recovery Period'			=> array(
			'Type'			=> 'dropdown',
			'Options'		=> [
				'0'		=> 'Immediate recovery',
				'60'		=> '1 Minute',
				'180'		=> '3 Minutes',
				'300'		=> '5 Minutes',
                '900'       => '15 Minutes',
                '1800'      => '30 Minutes',
                '3600'      => '1 Hour',
                '7200'      => '2 Hours',
			],
			'Description'	=> 'How long the monitor must be up to automatically mark an incident as resolved.',
			'Default'		=> '900',
			'SimpleMode'	=> true
		),
        // configoption5 = Maintenance Window Start | 
        'Maintenance Window Start'  => array(
            'Type'          => 'dropdown',
            'Options'       => [
                '00:00:00'  => '00:00:00',
                '00:15:00'  => '00:15:00',
                '00:30:00'  => '00:30:00',
                '00:45:00'  => '00:45:00',
                '01:00:00'  => '01:00:00',
                '01:15:00'  => '01:15:00',
                '01:30:00'  => '01:30:00',
                '01:45:00'  => '01:45:00',
                '02:00:00'  => '02:00:00',
                '02:15:00'  => '02:15:00',
                '02:30:00'  => '02:30:00',
                '02:45:00'  => '02:45:00',
                '03:00:00'  => '03:00:00',
                '03:15:00'  => '03:15:00',
                '03:30:00'  => '03:30:00',
                '03:45:00'  => '03:45:00',
                '04:00:00'  => '04:00:00',
                '04:15:00'  => '04:15:00',
                '04:30:00'  => '04:30:00',
                '04:45:00'  => '04:45:00',
                '05:00:00'  => '05:00:00',
                '05:15:00'  => '05:15:00',
                '05:30:00'  => '05:30:00',
                '05:45:00'  => '05:45:00',
                '06:00:00'  => '06:00:00',
                '06:15:00'  => '06:15:00',
                '06:30:00'  => '06:30:00',
                '06:45:00'  => '06:45:00',
                '07:00:00'  => '07:00:00',
                '07:15:00'  => '07:15:00',
                '07:30:00'  => '07:30:00',
                '07:45:00'  => '07:45:00',
                '08:00:00'  => '08:00:00',
                '08:15:00'  => '08:15:00',
                '08:30:00'  => '08:30:00',
                '08:45:00'  => '08:45:00',
                '09:00:00'  => '09:00:00',
                '09:15:00'  => '09:15:00',
                '09:30:00'  => '09:30:00',
                '09:45:00'  => '09:45:00',
                '10:00:00'  => '10:00:00',
                '10:15:00'  => '10:15:00',
                '10:30:00'  => '10:30:00',
                '10:45:00'  => '10:45:00',
                '11:00:00'  => '11:00:00',
                '11:15:00'  => '11:15:00',
                '11:30:00'  => '11:30:00',
                '11:45:00'  => '11:45:00',
                '12:00:00'  => '12:00:00',
                '12:15:00'  => '12:15:00',
                '12:30:00'  => '12:30:00',
                '12:45:00'  => '12:45:00',
                '13:00:00'  => '13:00:00',
                '13:15:00'  => '13:15:00',
                '13:30:00'  => '13:30:00',
                '13:45:00'  => '13:45:00',
                '14:00:00'  => '14:00:00',
                '14:15:00'  => '14:15:00',
                '14:30:00'  => '14:30:00',
                '14:45:00'  => '14:45:00',
                '15:00:00'  => '15:00:00',
                '15:15:00'  => '15:15:00',
                '15:30:00'  => '15:30:00',
                '15:45:00'  => '15:45:00',
                '16:00:00'  => '16:00:00',
                '16:15:00'  => '16:15:00',
                '16:30:00'  => '16:30:00',
                '16:45:00'  => '16:45:00',
                '17:00:00'  => '17:00:00',
                '17:15:00'  => '17:15:00',
                '17:30:00'  => '17:30:00',
                '17:45:00'  => '17:45:00',
                '18:00:00'  => '18:00:00',
                '18:15:00'  => '18:15:00',
                '18:30:00'  => '18:30:00',
                '18:45:00'  => '18:45:00',
                '19:00:00'  => '19:00:00',
                '19:15:00'  => '19:15:00',
                '19:30:00'  => '19:30:00',
                '19:45:00'  => '19:45:00',
                '20:00:00'  => '20:00:00',
                '20:15:00'  => '20:15:00',
                '20:30:00'  => '20:30:00',
                '20:45:00'  => '20:45:00',
                '21:00:00'  => '21:00:00',
                '21:15:00'  => '21:15:00',
                '21:30:00'  => '21:30:00',
                '21:45:00'  => '21:45:00',
                '22:00:00'  => '22:00:00',
                '22:15:00'  => '22:15:00',
                '22:30:00'  => '22:30:00',
                '22:45:00'  => '22:45:00',
                '23:00:00'  => '23:00:00',
                '23:15:00'  => '23:15:00',
                '23:30:00'  => '23:30:00',
                '23:45:00'  => '23:45:00',
            ],
            'SimpleMode'    => true,
        ),
        // configoption6 = Maintenance Window End |
        'Maintenance Window End'    => array(
            'Type'          => 'dropdown',
            'Options'       => [
                '00:00:00'  => '00:00:00',
                '00:15:00'  => '00:15:00',
                '00:30:00'  => '00:30:00',
                '00:45:00'  => '00:45:00',
                '01:00:00'  => '01:00:00',
                '01:15:00'  => '01:15:00',
                '01:30:00'  => '01:30:00',
                '01:45:00'  => '01:45:00',
                '02:00:00'  => '02:00:00',
                '02:15:00'  => '02:15:00',
                '02:30:00'  => '02:30:00',
                '02:45:00'  => '02:45:00',
                '03:00:00'  => '03:00:00',
                '03:15:00'  => '03:15:00',
                '03:30:00'  => '03:30:00',
                '03:45:00'  => '03:45:00',
                '04:00:00'  => '04:00:00',
                '04:15:00'  => '04:15:00',
                '04:30:00'  => '04:30:00',
                '04:45:00'  => '04:45:00',
                '05:00:00'  => '05:00:00',
                '05:15:00'  => '05:15:00',
                '05:30:00'  => '05:30:00',
                '05:45:00'  => '05:45:00',
                '06:00:00'  => '06:00:00',
                '06:15:00'  => '06:15:00',
                '06:30:00'  => '06:30:00',
                '06:45:00'  => '06:45:00',
                '07:00:00'  => '07:00:00',
                '07:15:00'  => '07:15:00',
                '07:30:00'  => '07:30:00',
                '07:45:00'  => '07:45:00',
                '08:00:00'  => '08:00:00',
                '08:15:00'  => '08:15:00',
                '08:30:00'  => '08:30:00',
                '08:45:00'  => '08:45:00',
                '09:00:00'  => '09:00:00',
                '09:15:00'  => '09:15:00',
                '09:30:00'  => '09:30:00',
                '09:45:00'  => '09:45:00',
                '10:00:00'  => '10:00:00',
                '10:15:00'  => '10:15:00',
                '10:30:00'  => '10:30:00',
                '10:45:00'  => '10:45:00',
                '11:00:00'  => '11:00:00',
                '11:15:00'  => '11:15:00',
                '11:30:00'  => '11:30:00',
                '11:45:00'  => '11:45:00',
                '12:00:00'  => '12:00:00',
                '12:15:00'  => '12:15:00',
                '12:30:00'  => '12:30:00',
                '12:45:00'  => '12:45:00',
                '13:00:00'  => '13:00:00',
                '13:15:00'  => '13:15:00',
                '13:30:00'  => '13:30:00',
                '13:45:00'  => '13:45:00',
                '14:00:00'  => '14:00:00',
                '14:15:00'  => '14:15:00',
                '14:30:00'  => '14:30:00',
                '14:45:00'  => '14:45:00',
                '15:00:00'  => '15:00:00',
                '15:15:00'  => '15:15:00',
                '15:30:00'  => '15:30:00',
                '15:45:00'  => '15:45:00',
                '16:00:00'  => '16:00:00',
                '16:15:00'  => '16:15:00',
                '16:30:00'  => '16:30:00',
                '16:45:00'  => '16:45:00',
                '17:00:00'  => '17:00:00',
                '17:15:00'  => '17:15:00',
                '17:30:00'  => '17:30:00',
                '17:45:00'  => '17:45:00',
                '18:00:00'  => '18:00:00',
                '18:15:00'  => '18:15:00',
                '18:30:00'  => '18:30:00',
                '18:45:00'  => '18:45:00',
                '19:00:00'  => '19:00:00',
                '19:15:00'  => '19:15:00',
                '19:30:00'  => '19:30:00',
                '19:45:00'  => '19:45:00',
                '20:00:00'  => '20:00:00',
                '20:15:00'  => '20:15:00',
                '20:30:00'  => '20:30:00',
                '20:45:00'  => '20:45:00',
                '21:00:00'  => '21:00:00',
                '21:15:00'  => '21:15:00',
                '21:30:00'  => '21:30:00',
                '21:45:00'  => '21:45:00',
                '22:00:00'  => '22:00:00',
                '22:15:00'  => '22:15:00',
                '22:30:00'  => '22:30:00',
                '22:45:00'  => '22:45:00',
                '23:00:00'  => '23:00:00',
                '23:15:00'  => '23:15:00',
                '23:30:00'  => '23:30:00',
                '23:45:00'  => '23:45:00',
            ],
            'SimpleMode'    => true,
        ),
        // configoption7 = Maintenance Window Timezone |
        'Maintenance Timezone'      => array(
            'Type'          => 'dropdown',
            'Options'       => [
                'Etc/GMT+12'                        => 'International Date Line West',
                'Pacific/Midway'                    =>'Midway Island',
                'Pacific/Pago_Pago'                 =>'American Samoa',
                'Pacific/Honolulu'                  =>'Hawaii',
                'America/Juneau'                    =>'Alaska',
                'America/Los_Angeles'               =>'Pacific Time (US & Canada)',
                'America/Tijuana'                   =>'Tijuana',
                'America/Denver'                    =>'Mountain Time (US & Canada)',
                'America/Phoenix'                   =>'Arizona',
                'America/Chihuahua'                 =>'Chihuahua',
                'America/Mazatlan'                  =>'Mazatlan',
                'America/Chicago'                   =>'Central Time (US & Canada)',
                'America/Regina'                    =>'Saskatchewan',
                'America/Mexico_City'               =>'Mexico City',
                'America/Monterrey'                 =>'Monterrey',
                'America/Guatemala'                 =>'Central America',
                'America/New_York'                  =>'Eastern Time (US & Canada)',
                'America/Indiana/Indianapolis'      =>'Indiana (East)',
                'America/Bogota'                    =>'Bogota',
                'America/Lima'                      =>'Quito',
                'America/Halifax'                   =>'Atlantic Time (Canada)',
                'America/Caracas'                   =>'Caracas',
                'America/La_Paz'                    =>'La Paz',
                'America/Santiago'                  =>'Santiago',
                'America/St_Johns'                  =>'Newfoundland',
                'America/Sao_Paulo'                 =>'Brasilia',
                'America/Argentina/Buenos_Aires'    =>'Buenos Aires',
                'America/Montevideo'                =>'Montevideo',
                'America/Guyana'                    =>'Georgetown',
                'America/Puerto_Rico'               =>'Puerto Rico',
                'America/Godthab'                   =>'Greenland',
                'Atlantic/South_Georgia'            =>'Mid-Atlantic',
                'Atlantic/Azores'                   =>'Azores',
                'Atlantic/Cape_Verde'               =>'Cape Verde Is.',
                'Europe/Dublin'                     =>'Dublin',
                'Europe/London'                     =>'London',
                'Europe/Lisbon'                     =>'Lisbon',
                'Africa/Casablanca'                 =>'Casablanca',
                'Africa/Monrovia'                   =>'Monrovia',
                'Etc/UTC'                           =>'UTC',
                'Europe/Belgrade'                   =>'Belgrade',
                'Europe/Bratislava'                 =>'Bratislava',
                'Europe/Budapest'                   =>'Budapest',
                'Europe/Ljubljana'                  =>'Ljubljana',
                'Europe/Prague'                     =>'Prague',
                'Europe/Sarajevo'                   =>'Sarajevo',
                'Europe/Skopje'                     =>'Skopje',
                'Europe/Warsaw'                     =>'Warsaw',
                'Europe/Zagreb'                     =>'Zagreb',
                'Europe/Brussels'                   =>'Brussels',
                'Europe/Copenhagen'                 =>'Copenhagen',
                'Europe/Madrid'                     =>'Madrid',
                'Europe/Paris'                      =>'Paris',
                'Europe/Amsterdam'                  =>'Amsterdam',
                'Europe/Berlin'                     =>'Berlin',
                'Europe/Zurich'                     =>'Zurich',
                'Europe/Rome'                       =>'Rome',
                'Europe/Stockholm'                  =>'Stockholm',
                'Europe/Vienna'                     =>'Vienna',
                'Africa/Algiers'                    =>'West Central Africa',
                'Europe/Bucharest'                  =>'Bucharest',
                'Africa/Cairo'                      =>'Cairo',
                'Europe/Helsinki'                   =>'Helsinki',
                'Europe/Kiev'                       =>'Kyiv',
                'Europe/Riga'                       =>'Riga',
                'Europe/Sofia'                      =>'Sofia',
                'Europe/Tallinn'                    =>'Tallinn',
                'Europe/Vilnius'                    =>'Vilnius',
                'Europe/Athens'                     =>'Athens',
                'Europe/Istanbul'                   =>'Istanbul',
                'Europe/Minsk'                      =>'Minsk',
                'Asia/Jerusalem'                    =>'Jerusalem',
                'Africa/Harare'                     =>'Harare',
                'Africa/Johannesburg'               =>'Pretoria',
                'Europe/Kaliningrad'                =>'Kaliningrad',
                'Europe/Moscow'                     =>'St. Petersburg',
                'Europe/Volgograd'                  =>'Volgograd',
                'Europe/Samara'                     =>'Samara',
                'Asia/Kuwait'                       =>'Kuwait',
                'Asia/Riyadh'                       =>'Riyadh',
                'Africa/Nairobi'                    =>'Nairobi',
                'Asia/Baghdad'                      =>'Baghdad',
                'Asia/Tehran'                       =>'Tehran',
                'Asia/Muscat'                       =>'Muscat',
                'Asia/Baku'                         =>'Baku',
                'Asia/Tbilisi'                      =>'Tbilisi',
                'Asia/Yerevan'                      =>'Yerevan',
                'Asia/Kabul'                        =>'Kabul',
                'Asia/Yekaterinburg'                =>'Ekaterinburg',
                'Asia/Karachi'                      =>'Karachi',
                'Asia/Tashkent'                     =>'Tashkent',
                'Asia/Kolkata'                      =>'New Delhi',
                'Asia/Kathmandu'                    =>'Kathmandu',
                'Asia/Dhaka'                        =>'Dhaka',
                'Asia/Colombo'                      =>'Sri Jayawardenepura',
                'Asia/Almaty'                       =>'Almaty',
                'Asia/Novosibirsk'                  =>'Novosibirsk',
                'Asia/Rangoon'                      =>'Rangoon',
                'Asia/Bangkok'                      =>'Hanoi',
                'Asia/Jakarta'                      =>'Jakarta',
                'Asia/Krasnoyarsk'                  =>'Krasnoyarsk',
                'Asia/Shanghai'                     =>'Beijing',
                'Asia/Chongqing'                    =>'Chongqing',
                'Asia/Hong_Kong'                    =>'Hong Kong',
                'Asia/Urumqi'                       =>'Urumqi',
                'Asia/Kuala_Lumpur'                 =>'Kuala Lumpur',
                'Asia/Singapore'                    =>'Singapore',
                'Asia/Taipei'                       =>'Taipei',
                'Australia/Perth'                   =>'Perth',
                'Asia/Irkutsk'                      =>'Irkutsk',
                'Asia/Ulaanbaatar'                  =>'Ulaanbaatar',
                'Asia/Seoul'                        =>'Seoul',
                'Asia/Tokyo'                        =>'Tokyo',
                'Asia/Yakutsk'                      =>'Yakutsk',
                'Australia/Darwin'                  =>'Darwin',
                'Australia/Adelaide'                =>'Adelaide',
                'Australia/Melbourne'               =>'Melbourne',
                'Australia/Sydney'                  =>'Sydney',
                'Australia/Brisbane'                =>'Brisbane',
                'Australia/Hobart'                  =>'Hobart',
                'Asia/Vladivostok'                  =>'Vladivostok',
                'Pacific/Guam'                      =>'Guam',
                'Pacific/Port_Moresby'              =>'Port Moresby',
                'Asia/Magadan'                      =>'Magadan',
                'Asia/Srednekolymsk'                =>'Srednekolymsk',
                'Pacific/Guadalcanal'               =>'Solomon Is.',
                'Pacific/Noumea'                    =>'New Caledonia',
                'Pacific/Fiji'                      =>'Fiji',
                'Asia/Kamchatka'                    =>'Kamchatka',
                'Pacific/Majuro'                    =>'Marshall Is.',
                'Pacific/Auckland'                  =>'Wellington',
                'Pacific/Tongatapu'                 =>'Nuku\'alofa',
                'Pacific/Fakaofo'                   =>'Tokelau Is.',
                'Pacific/Chatham'                   =>'Chatham Is.',
                'Pacific/Apia'                      =>'Samoa'
            ],
            'Description'   => 'The timezone to use for the maintenance window each day. Defaults to UTC.',
            'Default'       => 'Etc/UTC',
            'SimpleMode'    => true
        ),
        // configoption8 = SSL Expiration | Accepted options: 1 2 3 7 14 30 60
		'SSL Expiration'			=> array(
			'Type'			=> 'dropdown',
			'Options'		=> [
				'1'			=> '1',
				'2'			=> '2',
				'3'			=> '3',
				'7'			=> '7',
				'14'		=> '14',
				'30'		=> '30',
                '60'        => '60',
			],
			'Description'	=> 'How many days before the SSL certificate expires do you want to be alerted?',
			'Default'		=> '7',
			'SimpleMode'	=> true
		),
		// configoption9 = Domain Expiration | Accepted options: 1 2 3 7 14 30 60
		'Domain Expiration'			=> array(
			'Type'			=> 'dropdown',
			'Options'		=> [
				'1'			=> '1',
				'2'			=> '2',
				'3'			=> '3',
				'7'			=> '7',
				'14'		=> '14',
				'30'		=> '30',
                '60'        => '60',
			],
			'Description'	=> 'How many days before the domain expires do you want to be alerted?',
			'Default'		=> '14',
			'SimpleMode'	=> true
		),
        // configoption10 = Check from US Region
        'Check from US Region'             => array(
            'Type'          => 'yesno',
            'Description'   => 'Enable US Regional Checks',
			'SimpleMode'	=> true
        ),
        // configoption11 = Check from EU Region
        'Check from EU Region'             => array(
            'Type'          => 'yesno',
            'Description'   => 'Enable EU Regional Checks',
			'SimpleMode'	=> true
        ),
        // configoption12 = Check from AS Region
        'Check from AS Region'             => array(
            'Type'          => 'yesno',
            'Description'   => 'Enable AS Regional Checks',
			'SimpleMode'	=> true
        ),
        // configoption13 = Check from AU Region
        'Check from AU Region'             => array(
            'Type'          => 'yesno',
            'Description'   => 'Enable AU Regional Checks',
			'SimpleMode'	=> true
        )
    );
};

// Create Site
function betteruptime_CreateAccount(array $params)
{
	try {
        require_once('license.php');
		
        // Set the Regional Array
        $regions = [];
        if($params['configoption10']){$regions[]="us";}
        if($params['configoption11']){$regions[]="eu";}
        if($params['configoption12']){$regions[]="as";}
        if($params['configoption13']){$regions[]="au";}
	    // Define Data
        $createData = [];
        $createData['url']                  = $params['domain'];
        $createData['monitor_type']         = $params['configoption1'];
        if ($createData['monitor_type'] != 'status') // if keyword is not required skip
        {
            $createData['required_keyword']     = $params['configoption2'];
        }
	    $createData['check_frequency']      = $params['configoption3'];
	    $createData['recovery_period'] 	    = $params['configoption4'];
	    $createData['maintenance_from'] 	= $params['configoption5'];
		$createData['maintenance_to']       = $params['configoption6'];
        $createData['maintenance_timezone'] = $params['configoption7'];
	    $createData['domain_expiration'] 	= $params['configoption8'];
		$createData['ssl_expiration']		= $params['configoption9'];
        $createData['regions']              = $regions;

        //encode array into proper json
        $createData = json_encode($createData);

        // Create Uptime Monitor using array
		$curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, 'https://betteruptime.com/api/v2/monitors');
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl, CURLOPT_POST, 1);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $createData);
        $headers = array();
        $headers[] = 'Authorization: Bearer '.$token;
        $headers[] = 'Content-Type: application/json';
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

		$response = curl_exec($curl);
		curl_close($curl);
		$site_info = json_decode($response);
		$decoded_site_info = json_decode($response, true);

        if  (curl_errno($curl))
        {
            return 'Error: '.curl_error($curl);
        }

        if (isset($site_info->errors))
		{
            // Log the response in the WHMCS logs
		    logModuleCall(
                'betteruptime',
                __FUNCTION__.' ERROR '.date('H:i:s'),
                $createData,
                $site_info,
                $decoded_site_info
		    );
			return $site_info->errors;
		}

        // Log the response in the WHMCS logs
        logModuleCall(
            'betteruptime',
            __FUNCTION__.' SUCCESS '.date('H:i:s'),
            $createData,
            $site_info,
            $decoded_site_info
        );

        // Update the custom field to insert the BetterUptime Monitor ID so we can use that to modify it in the future.

        // Grab the custom field ID from the database
        $monitor_id = Capsule::table("tblcustomfields")
            ->where("fieldname", 'Monitor ID')
            ->where("relid", $params['pid'])
            ->first();

        $command    = 'UpdateClientProduct';
        $postData   = array(
            'serviceid' => $params['serviceid'],
            'customfields' => base64_encode(serialize(array(
                $monitor_id->id => $decoded_site_info['data']['id'],
            ))),
        );
        $results = localAPI($command, $postData);
        
        // Log the response in the WHMCS logs
        logModuleCall(
            'betteruptime',
            __FUNCTION__.' '.$command.' '.date('H:i:s'),
            $postData,
            '',
            $results
        );

        return 'success';
	} catch (Exception $e) {
		// Log error in module log
		logModuleCall(
			'betteruptime',
			__FUNCTION__,
			$params,
			$e->getMessage(),
			$e->getTraceAsString()
		);
		return $e->getMessage();
	}
}

// Terminate the monitor
function betteruptime_TerminateAccount(array $params)
{
    try {
        require_once('license.php');

        $service_id = $params['serviceid'];

        // Grab the monitorID field ID
        $monitor_field_id = Capsule::table("tblcustomfields")
            ->where("fieldname", 'Monitor ID')
            ->where("relid", $params['pid'])
            ->first();

        // Find the betteruptime monitor ID
        $monitor_id = Capsule::table("tblcustomfieldsvalues")
            ->where("relid", $service_id)
            ->where("fieldid", $monitor_field_id->id)
            ->first();

        // Use the located ID to terminate the monitor.

        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, 'https://betteruptime.com/api/v2/monitors/'.$monitor_id->value);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'DELETE');

        $headers = array();
        $headers[] = 'Authorization: Bearer '.$token;
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
        $result = curl_exec($curl);
        
        if(curl_errno($curl))
        {
            return 'Error: '.curl_error($curl);
        }

        return 'success';
	} catch (Exception $e) {
		// Log error in module log
		logModuleCall(
			'betteruptime',
			__FUNCTION__,
			$params,
			$e->getMessage(),
			$e->getTraceAsString()
		);
		return $e->getMessage();
	}
}
function betteruptime_seconds2human($ss) {
    $s = $ss%60;
    $m = floor(($ss%3600)/60);
    $h = floor(($ss%86400)/3600);
    $d = floor(($ss%2592000)/86400);
    $M = floor($ss/2592000);
    
    $string = '';
    if($M != '0'){ $string .= $M.' months, '; }
    if($d != '0'){ $string .= $d.' days, '; }
    if($h != '0'){ $string .= $h.' hours, '; }
    if($m != '0'){ $string .= $m.' minutes, '; }
    $string .= $s.' seconds';

    return $string;
}

function betteruptime_ClientArea(array $params)
{
    require_once('license.php');

    // Get the details of the uptime monitor
    $service_id = $params['serviceid'];

    // Grab the monitorID field ID
    $monitor_field_id = Capsule::table("tblcustomfields")
        ->where("fieldname", 'Monitor ID')
        ->where("relid", $params['pid'])
        ->first();

    // Find the betteruptime monitor ID
    $monitor_id = Capsule::table("tblcustomfieldsvalues")
        ->where("relid", $service_id)
        ->where("fieldid", $monitor_field_id->id)
        ->first();

    $monitor_id = $monitor_id->value;

    // Define date range
    $to     = date('Y-m-d');
    $from   = date('Y-m-d',strtotime("-1 day"));

    // Grab data from today
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://betteruptime.com/api/v2/monitors/'.$monitor_id.'/sla?from='.$from.'&to='.$to);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
    $headers = array();
    $headers[] = 'Authorization: Bearer '.$token;
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    $day = curl_exec($ch);
    if (curl_errno($ch)) {
        echo 'Error:' . curl_error($ch);
    }
    curl_close($ch);

    $day = json_decode($day, true);

    $day_availability = $day['data']['attributes']['availability'].'%';
    if($day['data']['attributes']['total_downtime'] == '0')
    {
        $day_downtime = 'none';
    } else {
        $day_downtime = betteruptime_seconds2human($day['data']['attributes']['total_downtime']);
    }
    $day_incidents = $day['data']['attributes']['number_of_incidents'];
    if($day['data']['attributes']['longest_incident'] == '0')
    {
        $day_longest_incident = 'none';
    } else {
        $day_longest_incident = betteruptime_seconds2human($day['data']['attributes']['longest_incident']);
    }
    if($day['data']['attributes']['average_incident'] == '0')
    {
        $day_avg_incident = 'none';
    }else{
        $day_avg_incident = betteruptime_seconds2human($day['data']['attributes']['average_incident']);      
    }

    // Define date range
    $from   = date('Y-m-d',strtotime("-1 week"));

    // Grab data from the past 7 days
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://betteruptime.com/api/v2/monitors/'.$monitor_id.'/sla?from='.$from.'&to='.$to);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
    $headers = array();
    $headers[] = 'Authorization: Bearer '.$token;
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    $week = curl_exec($ch);
    if (curl_errno($ch)) {
        echo 'Error:' . curl_error($ch);
    }
    curl_close($ch);

    $week = json_decode($week, true);

    $week_availability = $week['data']['attributes']['availability'].'%';
    if($week['data']['attributes']['total_downtime'] == '0')
    {
        $week_downtime = 'none';
    } else {
        $week_downtime = betteruptime_seconds2human($week['data']['attributes']['total_downtime']);
    }
    $week_incidents = $week['data']['attributes']['number_of_incidents'];
    if($week['data']['attributes']['longest_incident'] == '0')
    {
        $week_longest_incident = 'none';
    } else {
        $week_longest_incident = betteruptime_seconds2human($week['data']['attributes']['longest_incident']);
    }
    if($week['data']['attributes']['average_incident'] == '0')
    {
        $week_avg_incident = 'none';
    }else{
        $week_avg_incident = betteruptime_seconds2human($week['data']['attributes']['average_incident']);      
    }

    // Define date range
    $from   = date('Y-m-d',strtotime("-1 month"));
    
    // Grab data from the last 30-days
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://betteruptime.com/api/v2/monitors/'.$monitor_id.'/sla?from='.$from.'&to='.$to);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
    $headers = array();
    $headers[] = 'Authorization: Bearer '.$token;
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    $month = curl_exec($ch);
    if (curl_errno($ch)) {
        echo 'Error:' . curl_error($ch);
    }
    curl_close($ch);

    $month = json_decode($month, true);

    $month_availability = $month['data']['attributes']['availability'].'%';
    if($month['data']['attributes']['total_downtime'] == '0')
    {
        $month_downtime = 'none';
    } else {
        $month_downtime = betteruptime_seconds2human($month['data']['attributes']['total_downtime']);
    }
    $month_incidents = $month['data']['attributes']['number_of_incidents'];
    if($month['data']['attributes']['longest_incident'] == '0')
    {
        $month_longest_incident = 'none';
    } else {
        $month_longest_incident = betteruptime_seconds2human($month['data']['attributes']['longest_incident']);
    }
    if($month['data']['attributes']['average_incident'] == '0')
    {
        $month_avg_incident = 'none';
    }else{
        $month_avg_incident = betteruptime_seconds2human($month['data']['attributes']['average_incident']);      
    }

    // Define date range
    $from   = date('Y-m-d',strtotime("-1 year"));
    
    // Grab data from the last 365-days
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://betteruptime.com/api/v2/monitors/'.$monitor_id.'/sla?from='.$from.'&to='.$to);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
    $headers = array();
    $headers[] = 'Authorization: Bearer '.$token;
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    $year = curl_exec($ch);
    if (curl_errno($ch)) {
        echo 'Error:' . curl_error($ch);
    }
    curl_close($ch);

    $year = json_decode($year, true);

    $year_availability = $year['data']['attributes']['availability'].'%';
    if($year['data']['attributes']['total_downtime'] == '0')
    {
        $year_downtime = 'none';
    } else {
        $year_downtime = betteruptime_seconds2human($year['data']['attributes']['total_downtime']);
    }
    $year_incidents = $year['data']['attributes']['number_of_incidents'];
    if($year['data']['attributes']['longest_incident'] == '0')
    {
        $year_longest_incident = 'none';
    } else {
        $year_longest_incident = betteruptime_seconds2human($year['data']['attributes']['longest_incident']);
    }
    if($year['data']['attributes']['average_incident'] == '0')
    {
        $year_avg_incident = 'none';
    }else{
        $year_avg_incident = betteruptime_seconds2human($year['data']['attributes']['average_incident']);      
    }

    // Grab all time data
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://betteruptime.com/api/v2/monitors/'.$monitor_id.'/sla');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
    $headers = array();
    $headers[] = 'Authorization: Bearer '.$token;
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    $all_time = curl_exec($ch);
    if (curl_errno($ch)) {
        echo 'Error:' . curl_error($ch);
    }
    curl_close($ch);

    $all_time = json_decode($all_time, true);

    $all_time_availability = $all_time['data']['attributes']['availability'].'%';
    if($all_time['data']['attributes']['total_downtime'] == '0')
    {
        $all_time_downtime = 'none';
    } else {
        $all_time_downtime = betteruptime_seconds2human($all_time['data']['attributes']['total_downtime']);
    }
    $all_time_incidents = $all_time['data']['attributes']['number_of_incidents'];
    if($all_time['data']['attributes']['longest_incident'] == '0')
    {
        $all_time_longest_incident = 'none';
    } else {
        $all_time_longest_incident = betteruptime_seconds2human($all_time['data']['attributes']['longest_incident']);
    }
    if($all_time['data']['attributes']['average_incident'] == '0')
    {
        $all_time_avg_incident = 'none';
    }else{
        $all_time_avg_incident = betteruptime_seconds2human($all_time['data']['attributes']['average_incident']);      
    }

    // return the statistics to the new page view area
    return array(
        'tabOverviewReplacementTemplate'  => 'templates/clientarea.tpl',
        'vars'          => array(
            'day_availability'          => $day_availability,
            'day_downtime'              => $day_downtime,
            'day_incidents'             => $day_incidents,
            'day_longest_incident'      => $day_longest_incident,
            'day_avg_incident'          => $day_avg_incident,
            'week_availability'         => $week_availability,
            'week_downtime'             => $week_downtime,
            'week_incidents'            => $week_incidents,
            'week_longest_incident'     => $week_longest_incident,
            'week_avg_incident'         => $week_avg_incident,
            'month_availability'        => $month_availability,
            'month_downtime'            => $month_downtime,
            'month_incidents'           => $month_incidents,
            'month_longest_incident'    => $month_longest_incident,
            'month_avg_incident'        => $month_avg_incident,
            'year_availability'         => $year_availability,
            'year_downtime'             => $year_downtime,
            'year_incidents'            => $year_incidents,
            'year_longest_incident'     => $year_longest_incident,
            'year_avg_incident'         => $year_avg_incident,
            'all_time_availability'     => $all_time_availability,
            'all_time_downtime'         => $all_time_downtime,
            'all_time_incidents'        => $all_time_incidents,
            'all_time_longest_incident' => $all_time_longest_incident,
            'all_time_avg_incident'     => $all_time_avg_incident,
        ),
    );
}