<?php

namespace App\Http\Controllers;
use Mail;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Http\Request;
use App\User;
use App\Cart as myCart;

class SendeMailController extends Controller
{

    use Queueable, SerializesModels;
    public function sendemail()                                        
    {
        $user = User::select('email')->where('role_id', 4)->get();    /*We take all email of member BDE*/ 
        $nb = $user->count();
        foreach($user as $user2){
            $a=0;
            $b=0;
        for($i = 1; $i <= $nb; $i++ ){
            $user2 = $user->get($a)->email; 
            $emails[$b] =$user2;
            $b++;
            $a++;
        }
        };
        
        $title = "Contenu inapproprié";
       
        
        try                                                         /*We try to send mail*/
        {       
            $data = ['subject' => $title];
            Mail::send('emails/email', $data, function($message) use ($emails, $data) {
            $subject=$data['subject'];
            $message->from('matheo.brise17@gmail.com');
            $message->to($emails);
            $message->subject($subject);
             });
             
            return redirect('/')->with ('success', 'Votre Mail a bien été envoyé.');
        }
        catch (\Exception $e)                                       
        {
            dd($e->getMessage());
        }
    }


    public function sendemailproduct()
    {

        $cart = myCart::all();

        $user = User::select('email')->where('role_id', 4)->get();     /*We take all email of member BDE*/ 
        $nb = $user->count();
        foreach($user as $user2){
            $a=0;
            $b=0;
        for($i = 1; $i <= $nb; $i++ ){
           $user2 = $user->get($a)->email; 
           $emails[$b] =$user2;
           $b++;
           $a++;
        }
        };
        
        $title = "Une commande";
        
        try                                                             /*We try to send mail*/
        {     
            $data = ['subject' => $title];
            Mail::send('carts/emailProduct', $data, function($message) use ($emails, $data, $cart) {
            $subject=$data['subject'];
            $message->from('matheo.brise17@gmail.com');
            $message->to($emails);
            $message->subject($subject);
             });
             
            return redirect('/')->with('success', 'Votre commande.');
        }
        catch (\Exception $e)
        {
            dd($e->getMessage());
        }
    }
}
