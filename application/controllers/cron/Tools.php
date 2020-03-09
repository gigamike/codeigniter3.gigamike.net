<?php

class Tools extends CI_Controller {
    /*
    * php /Users/michaelgerardgalon/Sites/gigamike/codeigniter3.gigamike.net/public_html/index.php cron/tools message
    */
    public function message($to = 'World')
    {
      echo "Hello {$to}!".PHP_EOL;
    }
}
