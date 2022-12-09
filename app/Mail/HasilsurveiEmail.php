<?php

namespace App\Mail;

use App\Models\Datasurvei;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Address;

class HasilsurveiEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    
    public $datasurvei;



    public function __construct(Datasurvei $datasurvei)
    {
        $this->datasurvei = $datasurvei;   

    }

    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function envelope()
    {
        return new Envelope(
            subject: 'Hasil Survei Kepuasan Masyarakat Triwulan '.$this->datasurvei->tw.' Tahun '.$this->datasurvei->tahun,
            to : $this->datasurvei->respondence->email,
        );
    }

    /**
     * Get the message content definition.
     *
     * @return \Illuminate\Mail\Mailables\Content
     */
    public function content()
    {
        return new Content(
            view: 'email.email',
            with : [
                'nama' => $this->datasurvei->respondence->nama,
                'dataid' => $this->datasurvei->id,
                'tahun' => $this->datasurvei->tahun,
                'triwulan' => $this->datasurvei->tw,
                'linkpdf' => 'https://skm.timurbersinar.com/pdf'
            ]


        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array
     */
    public function attachments()
    {
        return [];
    }
}
