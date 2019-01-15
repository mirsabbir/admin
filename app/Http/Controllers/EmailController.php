<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmailController extends Controller
{
    public function index(){
       
        $mailbox = new \PhpImap\Mailbox('{realitydaily.net:993/imap/ssl}INBOX', 'yusuf@realitydaily.net', 'AdminYusuf#1', __DIR__);

        // Read all messaged into an array:
        $mailsIds = $mailbox->searchMailbox('ALL');
        if(!$mailsIds) {
            die('Mailbox is empty');
        }

        // Get the first message and save its attachment(s) to disk:
         $mail = $mailbox->getMail($mailsIds[1]);

        dd($mail);
        // echo "\n\nAttachments:\n";
        // dd($mail->getAttachments());
         return view('email')->with(['m'=>$mail]);
    }
    public function composeIndex(){
       
        $mailbox = new \PhpImap\Mailbox('{realitydaily.net:993/imap/ssl}INBOX', 'yusuf@realitydaily.net', 'AdminYusuf#1', __DIR__);

        // Read all messaged into an array:
        // $mailsIds = $mailbox->searchMailbox('ALL');
        // if(!$mailsIds) {
        //     die('Mailbox is empty');
        // }

        // // Get the first message and save its attachment(s) to disk:
        //  $mail = $mailbox->getMail($mailsIds[1]);

        // dd($mail);
        // echo "\n\nAttachments:\n";
        // dd($mail->getAttachments());
         return view('email-compose');
    }
    public function sentIndex(){
       
        $mailbox = new \PhpImap\Mailbox('{realitydaily.net:993/imap/ssl}INBOX', 'yusuf@realitydaily.net', 'AdminYusuf#1', __DIR__);

        // Read all messaged into an array:
        // $mailsIds = $mailbox->searchMailbox('ALL');
        // if(!$mailsIds) {
        //     die('Mailbox is empty');
        // }

        // // Get the first message and save its attachment(s) to disk:
        //  $mail = $mailbox->getMail($mailsIds[1]);

        // dd($mail);
        // echo "\n\nAttachments:\n";
        // dd($mail->getAttachments());
         return view('email-sent');
    }
    public function draftIndex(){
       
        $mailbox = new \PhpImap\Mailbox('{realitydaily.net:993/imap/ssl}INBOX', 'yusuf@realitydaily.net', 'AdminYusuf#1', __DIR__);

        // Read all messaged into an array:
        // $mailsIds = $mailbox->searchMailbox('ALL');
        // if(!$mailsIds) {
        //     die('Mailbox is empty');
        // }

        // // Get the first message and save its attachment(s) to disk:
        //  $mail = $mailbox->getMail($mailsIds[1]);

        // dd($mail);
        // echo "\n\nAttachments:\n";
        // dd($mail->getAttachments());
         return view('email-draft');
    }
    public function mailIndex(){
       
        $mailbox = new \PhpImap\Mailbox('{realitydaily.net:993/imap/ssl}INBOX', 'yusuf@realitydaily.net', 'AdminYusuf#1', __DIR__);

        // Read all messaged into an array:
        // $mailsIds = $mailbox->searchMailbox('ALL');
        // if(!$mailsIds) {
        //     die('Mailbox is empty');
        // }

        // // Get the first message and save its attachment(s) to disk:
        //  $mail = $mailbox->getMail($mailsIds[1]);

        // dd($mail);
        // echo "\n\nAttachments:\n";
        // dd($mail->getAttachments());
         return view('email-mail');
    }
}
