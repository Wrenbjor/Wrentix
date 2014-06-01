<?php


class Prices extends \Phalcon\Mvc\Model 
{

    /**
     * @var integer
     *
     */
    public $id;

    /**
     * @var integer
     *
     */
    public $eventId;

    /**
     * @var double
     *
     */
    public $baseCost;

    /**
     * @var integer
     *
     */
    public $firstTier;

    /**
     * @var integer
     *
     */
    public $secondTier;

    /**
     * @var integer
     *
     */
    public $thirdTier;


}
