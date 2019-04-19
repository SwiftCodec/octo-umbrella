<?php
/**
 * Created by PhpStorm.
 * User: DMaier
 * Date: 15.03.2019
 * Time: 0:47
 */

class Controller {

    public $model;
    public $view;

    function __construct()
    {
        $this->view = new View();
    }

    /**
     * Действие, вызываемое по умолчанию, его мы перекроем при реализации классов потомков
     */
    function action_index()
    {
    }
}