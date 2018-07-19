<?php
class Log
{
    public function lwrite($message)
    {
        $date = Date("Y-M-D-d h:i:s");
        $day = Date("Y-M-d");
        $log_file = "/var/www/html/PHPPROGRAM" . $day . ".log";
        error_log($message, 3, $log_file);
    }

}
