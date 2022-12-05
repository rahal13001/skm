<?php

namespace App\Jobs;

use App\Mail\HasilsurveiEmail;
use App\Models\Datasurvei;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class HasilsurveiJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */

    public $datasurvei;

    public function __construct(Datasurvei $datasurvei)
    {
        $this->datasurvei = $datasurvei;
        
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $datasurvei = Datasurvei::with('respondence')->whereKey($this->datasurvei->id)->first();
        
        Mail::to($this->datasurvei->respondence->email)->send(new HasilsurveiEmail($datasurvei));
    }
}
