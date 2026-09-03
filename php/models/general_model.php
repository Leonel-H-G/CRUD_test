<?php

class generalModel
{
    public function getStatusTypes()
    {
        include_once('php/models/petitions.php');
        $queries = new Queries;
        $sql_request = "SELECT usst.*
        FROM asteleco_test.users_status AS usst
        ";

        $getData = $queries->getData($sql_request);

        return ($getData);
    }
    public function getAllUsers()
    {
        include_once('php/models/petitions.php');
        $queries = new Queries;
        $sql_request = "SELECT usst.*, usr.*
        FROM asteleco_test.users AS usr
        INNER JOIN asteleco_test.users_status AS usst ON usr.id_users_status = usst.id_users_status
        ";

        $getData = $queries->getData($sql_request);

        return ($getData);
    }

}