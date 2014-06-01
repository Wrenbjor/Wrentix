<?php


class Users extends \Phalcon\Mvc\Model 
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
    public $firstName;

    /**
     * @var string
     *
     */
    public $lastName;

    /**
     * @var string
     *
     */
    public $address;

    /**
     * @var string
     *
     */
    public $city;

    /**
     * @var string
     *
     */
    public $stateCode;

    /**
     * @var integer
     *
     */
    public $zip;

    /**
     * @var string
     *
     */
    public $phone;

    /**
     * @var string
     *
     */
    public $email;

    /**
     * @var string
     *
     */
    public $password;


    /**
     * Validations and business logic 
     */
    public function validation()
    {        
        $this->validate(new Email(array(
            "field" => "email",
            "required" => true
        )));
        if ($this->validationHasFailed() == true) {
            return false;
        }
    }

}
