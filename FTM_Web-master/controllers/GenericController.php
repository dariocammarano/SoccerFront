<?php
/**
 * Created by PhpStorm.
 * User: Dario
 * Date: 30/7/2019
 * Time: 22:29
 */

abstract class GenericController
{

    protected $object;
    protected $request;

    /**
     * @return mixed
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * @param mixed $request
     */
    public function setRequest($request)
    {
        $this->request = $request;
    }

    /**
     * @return mixed
     */
    public function getObject()
    {
        return $this->object;
    }

    /**
     * @param mixed $object
     */
    public function setObject($object)
    {
        $this->object = $object;
    } //Nombre del objeto

    public function responseToObject($value){
        $object = new $this->object();
        $object->setCountry($value->country);
        $object->setUserCreation($value->user_creation);
        $object->setName($value->name);
        return $object;
    }

    public function getAllTeams(){
        $json = CallAPI("GET", "/api/v1/teams/", false);
        $array = json_decode($json);
        $teams = array();

        foreach ($array as $key => $value){
            $team = $this->responseToObject($value);
            $teams[] = $team;
        }

        return $teams;
    }

    public function create(){
        $object = new $this->object();
        $params = array();
        parse_str($this->request['data'], $params);
        // TODO tomar desde el modulo
        $object->setName($params["_".$this->object."_name"]);
        $json = CallAPI("POST", "/api/v1/teams/", json_encode($object)); //TODO tomar genericamente la url. Desde el controlador
    }

    //TODO sacar hardcode
    public function getAllTeamsView(){
        $objectArray = $this->getAllTeams();
        $html = "";

        foreach ($objectArray as $item) {
            $html .= "Name: ".$item->getName();
            $html .= " Country: ".$item->getCountry();
            $html .= " User Creation: ".$item->getUserCreation();
            $html .= "<br />";
        }

        return $html;
    }

    public function getFormInput(){
        $html = "<form class='_".$this->object."_form'>";
            $html .= "<input type='text' name='_".$this->object."_name'/>";
        $html .= "<div class='_".$this->object."_form_btn btn_send' style='display: block; height: 100px; width: 100px; background: #000;'>";
        $html .= "</form>";
        $html .= '<script src="/FTM_Web/js/teamScript.js"/>'; //TODO arreglar lo de la URL
        return $html;
    }

}