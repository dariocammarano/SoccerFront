<?php
/**
 * Created by PhpStorm.
 * User: Dario
 * Date: 30/7/2019
 * Time: 19:22
 */
include ("../functions/callAPI.php");
include_once ("GenericController.php");
include_once ("../models/Team.php");

class TeamController extends GenericController
{

    public function TeamController($object)
    {
        parent::setObject($object);
    }


}
