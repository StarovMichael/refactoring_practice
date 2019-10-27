<?php

abstract class connect
{
    private $settings;

    public function setConnection($settings)
    {
        $this->settings = $settings;
    }
}

abstract class configure
{
    private $configuration;

    public function configure($settings)
    {
        foreach ($settings as $set){
            $this->configuration = $this->settings[$set];
        }
        
    }
}
class MailConfigurator
{

    public function __construct($settings){
        $this->setConnection();
        $this->configure($settings);
    }

    public function getSender()
    {
        return 'mail sender';
    }

}

class DatabaseConfigurator
{

    public function __construct($settings){
        $this->setConnection();
        $this->configure($settings);
    }

    public function getDriver()
    {
        return 'get some db driver';
    }

}

class CacheConfigurator
{

    public function __construct($settings){
        $this->setConnection();
        $this->configure($settings);
    }
    
    public function getStorage()
    {
        return 'get some cache storage';
    }

}
