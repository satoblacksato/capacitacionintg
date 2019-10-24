<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class Sumar implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $arrayNum;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($arrayNum)
    {
       $this->arrayNum=$arrayNum;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        echo $this->arrayNum['n1']+$this->arrayNum['n2'];
    }
}
