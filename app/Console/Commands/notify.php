<?php

namespace App\Console\Commands;

use App\Mail\NotifyEmail as MailNotifyEmail;
use App\User;
use Illuminate\Console\Command;

use  Illuminate\Support\Facades\Mail;
class notify extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature ='notify:email';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'send email for all user everyday';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
      // $users = User::select('email')->get();


       $emails =User::pluck('email')->toArray();
$data =['title'=>'programming', 'body'=>'php'];
       foreach( $emails as  $email){
//how to send emails in laravel
Mail::To($email)->send(new MailNotifyEmail($data));

       }
    }
}
