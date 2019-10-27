<?php

//Hint - Dependency Inversion Principle
interface MailerInterface
{
    public function send();
    public function connect();
}

class Mailer implements MailerInterface
{
    public function send(){
        echo 'sended';
    }
    public function connect(){
        echo 'connected';
    }
}

class SendWelcomeMessage implements MailerInterface
{
    private $mailer;
    public function __construct(MailerInterface $mailer)
    {
        $this->mailer = $mailer;
    }

}

class SendWelcomeGoogle implements MailerInterface
{
    public function send(){
        echo 'sended into Google';
    }
    public function connect(){
        echo 'connected into Google';
    }
}
class SendWelcomeSendgrid implements MailerInterface
{
    public function send(){
        echo 'sended into Sendgrid';
    }
    public function connect(){
        echo 'connected into Sendgrid';
    }
}
class SendWelcomeMailchimp implements MailerInterface
{
    public function send(){
        echo 'sended into Mailchimp';
    }
    public function connect(){
        echo 'connected into Mailchimp';
    }
}
$mailer = new Mailer;
$sender = new SendWelcomeMessage($mailer);
$sender->send();
//SendWelcomeGoolge
//SendWelcomeSendgrid
//SendWelcomeMailchimp
