<?php namespace SSB\Api\Event;

class Start
{
    public function __construct(string $url)
    {
        $this->url = $url;
    }
}