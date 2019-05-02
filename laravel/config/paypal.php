<?php
return array(
    // set your paypal credential
    'client_id' => 'AapExIG5uBrZ4I14Q6oV-yL6NEh8V7gVjtL8xyIkP1jYOnYzKNdmZp89QEag850DhAr5zQFju-EFv8Ur',
    'secret' => 'EDDOUS6jcUL8TqqUTEgSoFb72ctEPSUFulJCUis3j2cd5YOw6IpChh6RAQejnKCauylR4X4jJKaJ_joT',
    /**
     * SDK configuration 
     */
    'settings' => array(
        /**
         * Available option 'sandbox' or 'live'
         */
        'mode' => 'sandbox',
        /**
         * Specify the max request time in seconds
         */
        'http.ConnectionTimeOut' => 30,
        /**
         * Whether want to log to a file
         */
        'log.LogEnabled' => true,
        /**
         * Specify the file that want to write on
         */
        'log.FileName' => storage_path() . '/logs/paypal.log',
        /**
         * Available option 'FINE', 'INFO', 'WARN' or 'ERROR'
         *
         * Logging is most verbose in the 'FINE' level and decreases as you
         * proceed towards ERROR
         */
        'log.LogLevel' => 'FINE'
    ),
);