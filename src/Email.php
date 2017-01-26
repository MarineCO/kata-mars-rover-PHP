<?php


final class Email
{
    private $email;
    
    private function __construct(string $email)
    {
        
        $this->email = $email;
    }

    public static function fromString(string $email)
    {
        return new self($email);
    }

    
}