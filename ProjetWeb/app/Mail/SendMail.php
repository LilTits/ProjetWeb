<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('view.name');
    }

    public function sendemail()
    {
        $title = "Contenu inapproprié";
        $content = "je suis le contenu du mail";
        $user_email = "matheo.brise@viacesi.fr";
        $user_name = "nom du destinataire";
        
        try
        {
            $emails = ['test1@hotmail.com','test2@hotmail.com','test3@hotmail.com'];
            $data = ['email'=> $user_email,'name'=> $user_name,'subject' => $title, 'content' => $content];

            Mail::queue('emails/email', $data, function($message) use ($emails, $data) {
            $subject=$data['subject'];
            $message->from('info@test.ch', 'test.ch');
            $message->to($emails);
            $message->subject($subject);
             });
            /*$data = ['email'=> $user_email,'name'=> $user_name,'subject' => $title, 'content' => $content];
            Mail::send('emails/email', $data, function($message) use($data)
            {
                $subject=$data['subject'];
                $message->from('info@test.ch');
                $message->to($data['email'], 'test.ch')->subject($subject);
            });*/
            return redirect('/')->with ('success', 'Mail bien envoyé');
        }
        catch (\Exception $e)
        {
            dd($e->getMessage());
        }
    }
}
