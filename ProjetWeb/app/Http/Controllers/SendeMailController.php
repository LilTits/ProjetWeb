<?php

namespace App\Http\Controllers;
use Mail;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Http\Request;
use App\User;

class SendeMailController extends Controller
{

    use Queueable, SerializesModels;
    public function sendemail()
    {
        
        $user = User::select('email')->where('role_id', 4)->get();
        $nb = $user->count();
        foreach($user as $user2)
        {
            $a=0;
            $b=0;
            for($i = 1; $i <= $nb; $i++ )
                    {
           $user2 = $user->get($a)->email; 
           $emails[$b] =$user2;
           $b++;
           $a++;
                    }
        };
        
        
        
        $title = "Contenu inapproprié";
        $content = "je suis le contenu du mail";
        $user_name = "nom du destinataire";
        
        try
        {
                   
            $data = ['name'=> $user_name,'subject' => $title, 'content' => $content];

            Mail::send('emails/email', $data, function($message) use ($emails, $data) {
            $subject=$data['subject'];
            $message->from('matheo.brise17@gmail.com');
            $message->to($emails);
            $message->subject($subject);
             });
             
            return redirect('/')->with ('success', $user2);
        }
        catch (\Exception $e)
        {
            dd($e->getMessage());
        }
    }
}
