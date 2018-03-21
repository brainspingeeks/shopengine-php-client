<?php namespace SSB\Api\Event;

class End
{
    public function __construct(string $url)
    {
        $this->url = $url;
    }
}