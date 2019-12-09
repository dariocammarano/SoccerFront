<?php
/**
 * Created by PhpStorm.
 * User: Dario
 * Date: 30/7/2019
 * Time: 19:22
 */

class Team implements JsonSerializable
{
    protected $_id;
    protected $name;
    protected $country;
    protected $user_creation;

    /**
     * Team constructor.
     * @param $_id
     * @param $name
     * @param $country
     * @param $user_creation
     */



    public function __construct(){}

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->_id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->_id = $id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param mixed $country
     */
    public function setCountry($country)
    {
        $this->country = $country;
    }

    /**
     * @return mixed
     */
    public function getUserCreation()
    {
        return $this->user_creation;
    }

    /**
     * @param mixed $user_creation
     */
    public function setUserCreation($user_creation)
    {
        $this->user_creation = $user_creation;
    }


    public function jsonSerialize() {
//        return array($this->_id, $this->name, $this->user_creation, $this->country);
            return [
                '_id' => $this->_id,
                'name' => $this->name,
                'user_creation' => $this->user_creation,
                'country' => $this->country,
            ];

    }



}