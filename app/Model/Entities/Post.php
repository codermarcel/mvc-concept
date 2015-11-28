<?php namespace App\Model\Entities;

/**
* Post
*/
class Post
{
    public $id;
    public $title;
    public $body;

    public function __construct($title, $body)
    {
        $this->title = strrev($title);
        $this->body  = strrev($body);
    }
}