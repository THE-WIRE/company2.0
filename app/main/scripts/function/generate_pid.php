<?php
/**
 * Created by PhpStorm.
 * User: itssu
 * Date: 12-Sep-16
 * Time: 4:15 PM
 */


include_once('../../../config/config.php');
require_once('../ezSQL/shared/ez_sql_core.php');
require_once('../ezSQL/mysqli/ez_sql_mysqli.php');



function get_PID($type){

    $db = new ezSQL_mysqli(DBUSER, DBPASS, DBNAME, DBHOST);

    if($res = $db->get_row("SELECT * FROM `Project_Type_Master` WHERE `Project_Type_ID` = '$type'")){
        $id = $res->Project_Type_Abbr.'-'.($res->Last_Project+1);
    }
    else{
        throw new Exception('Unable to retrieve Project Type details.');
    }

    return $id;
}

function get_Asset_ID($p, $type){

    $db = new ezSQL_mysqli(DBUSER, DBPASS, DBNAME, DBHOST);

    if($res = $db->get_row("SELECT * FROM `Asset_Type_Master` WHERE `Asset_Type_ID` = '$type'")){
        $id = $p.'-'.$res->Asset_Type_Abbr.'-'.($res->Last_Asset+1);
    }
    else{
        throw new Exception('Unable to retrieve Asset Type details.');
    }

    return $id;
}

function get_Shot_ID($p, $type){

    $db = new ezSQL_mysqli(DBUSER, DBPASS, DBNAME, DBHOST);

    if($res = $db->get_row("SELECT * FROM `Shot_Type_Master` WHERE `Shot_Type_ID` = '$type'")){
        $id = $p.'-'.$res->Shot_Type_Abbr.'-'.($res->Last_Shot+1);
    }
    else{
        throw new Exception('Unable to retrieve Shot Type details.');
    }

    return $id;
}