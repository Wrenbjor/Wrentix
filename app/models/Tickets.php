<?php


class Tickets extends \Phalcon\Mvc\Model 
{

    /**
     * @var integer
     *
     */
    public $id;

    /**
     * @var string
     *
     */
    public $code;

    /**
     * @var integer
     *
     */
    public $eventId;

    /**
     * @var integer
     *
     */
    public $userId;

    /**
     * @var string
     *
     */
    public $paid;

    /**
     * @var string
     *
     */
    public $scaned;


}
