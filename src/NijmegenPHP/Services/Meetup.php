<?php namespace NijmegenPHP\Services;

use DMS\Service\Meetup\MeetupKeyAuthClient;

/**
 * Class Meetup
 * @package NijmegenPHP\Services
 */
class Meetup
{
    protected $key = '32436e56364037511924364334467857';
    protected $client;

    public function __construct()
    {
        $this->client = MeetupKeyAuthClient::factory(['key' => $this->key]);
    }

    public function events()
    {
        return $this->client->getGroup(['urlname' => 'NijmegenPHP', 'fields' => 'next_event']);
    }

    public function nextEvent()
    {
        return $this->event((int) $this->events()['next_event']['id']);
    }

    public function event($id)
    {
        return $this->client->getEvent(['id' => $id]);
    }
}
