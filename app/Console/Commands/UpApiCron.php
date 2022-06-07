<?php

namespace App\Console\Commands;

use COM;
use Illuminate\Console\Command;

class UpApiCron extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'upapi:cron';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command UpGuestApi Cron';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    function get_data($result,$status)
    {
        
    }
       /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        ///limited query 2000 records
       $url ="https://ll.thespacedevs.com/2.0.0/launch/?limit=2000";
       $ch = curl_init( $url);
       curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
       curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
       curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
       
       $result = curl_exec($ch);
       curl_close($ch);
//draft, trash or published
        if($result !== NULL){
            $status = "published";
            $url ="localhost:9999/api/launchers";
            $payload  =  json_encode(array(
                    "status"=> $status,
                    "data" => $result
                   ));        
            
            $ch = curl_init( $url);
            curl_setopt( $ch, CURLOPT_POSTFIELDS, $payload);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
            $result = curl_exec($ch);
            curl_close($ch);
            return $result;

        }else{
            $status = "lixo ";
            $result ='{"message":"No Rocket found"}';
            $url ="localhost:9999/api/launchers";
            $payload  =  json_encode(array(
                    "status"=> $status,
                    "data" => $result
                   ));        
            
            $ch = curl_init( $url);
            curl_setopt( $ch, CURLOPT_POSTFIELDS, $payload);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
            $result = curl_exec($ch);
            curl_close($ch);
            return $result;
        }



    }




}
