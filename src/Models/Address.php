<?php

namespace TurboShip\Locations\Models;


use TurboShip\Locations\Models\Contracts\AddressContract;
use jamesvweston\Utilities\ArrayUtil AS AU;

class Address extends StreetAddress implements AddressContract, \JsonSerializable
{

    /**
     * @var int
     */
    protected $id;

    /**
     * @var string
     */
    protected $firstName;

    /**
     * @var string
     */
    protected $lastName;

    /**
     * @var string|null
     */
    protected $company;

    /**
     * @var string|null
     */
    protected $phone;

    /**
     * @var string|null
     */
    protected $email;


    public function __construct($data = null)
    {
        parent::__construct($data);
        
        if (is_array($data))
        {
            $this->id               = AU::get($data['id']);
            $this->firstName        = AU::get($data['firstName']);
            $this->lastName         = AU::get($data['lastName']);
            $this->company          = AU::get($data['company']);
            $this->phone            = AU::get($data['phone']);
            $this->email            = AU::get($data['email']);
        }
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $object['firstName']        = $this->firstName;
        $object['lastName']         = $this->lastName;
        $object['company']          = $this->company;
        $object['phone']            = $this->phone;
        $object['email']            = $this->email;
        $object                     = array_merge($object, parent::jsonSerialize());

        return $object;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param string $firstName
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    /**
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @param string $lastName
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    /**
     * @return null|string
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * @param null|string $company
     */
    public function setCompany($company)
    {
        $this->company = $company;
    }

    /**
     * @return null|string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param null|string $phone
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    /**
     * @return null|string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param null|string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }
    
    
}