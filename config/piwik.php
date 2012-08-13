<?php

defined('SYSPATH') OR exit('No direct script access allowed');


return array(
// Base URL to the Piwik Install
        'url' => 'http://stats.example.com',
// HTTPS Base URL to the Piwik Install (not required)
        'url_ssl' => 'https://stats.example.com',
// Piwik Site ID for the website you want to retrieve stats for
        'site_id' => 1,
// Piwik API token, you can find this on the API page by going to the API link from the Piwik Dashboard
        'token' => '0b3b2sdgsd7e82385avdfgde44dsfgd5g',
// To turn geoip on, you will need to set to TRUE  and GeoLiteCity.dat will need to be in helpers/geoip
        'geoip_on' => FALSE,
// Controls whether piwik_tag helper function outputs tracking tag (for production, set to TRUE)
        'tag_on' => FALSE,
);