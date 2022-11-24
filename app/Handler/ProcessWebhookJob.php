<?php
namespace App\Handler;

use Spatie\WebhookClient\Jobs\ProcessWebhookJob as SpatieProcessWebhookJob;

class ProcessWebhookJob extends SpatieProcessWebhookJob
{
    public function handle()
    {


        logger($this->webhookCall);
        $data = json_decode($this->webhookCall, true);
        //Do something with the event
         logger($data);
        // $this->webhookCall // contains an instance of `WebhookCall`

        // perform the work here
    }
}