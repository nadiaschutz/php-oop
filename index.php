<?php


interface Newsletter
{
    public function subscribe($email);
}

class CampaignMonitor implements Newsletter
{
    public function subscribe($email)
    {
        die('subscribing with campaign monitor');
    }

}

class Drip implements Newsletter
{
    public function subscribe($email)
    {
        die('subscribing with drip');
    }
}

class NewsLetterSubscriptionsController
{
    public function store(Newsletter $newsletter)
    {
        $email = 'daria@gmail.com';
        $newsletter->subscribe($email);
    }
}


$controller = new NewsLetterSubscriptionsController();
$controller -> store(new Drip());


