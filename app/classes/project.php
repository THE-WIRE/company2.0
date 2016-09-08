<?php

/**
 * Created by PhpStorm.
 * User: itssu
 * Date: 09-Sep-16
 * Time: 1:05 AM
 */

require_once('../config/config.php');

class Project
{

    protected $project_id   = '';
    protected $project_name = '';
    protected $project_desc = '';
    protected $p_start_date = '';
    protected $p_end_date   = '';

    function __construct($project_id = null)
    {
        if($project_id != null){
            $this->retrieve();
        }
    }

    public function create($project_id, $project_name, $project_desc, $p_start_date, $p_end_date = null){

        $query = "INSERT INTO `Project_Master`(`Project_ID`, `Project_Name`, `Project_Description`, `Start_Date`, `End_Date`)".
                 "VALUES('$project_id', '$project_name', '$project_desc', '$p_start_date', '$p_end_date')";

        if($db->query($query)){
            $this->setProjectId($project_id);
            $this->setProjectName($project_name);
            $this->setProjectDesc($project_desc);
            $this->setPStartDate($p_start_date);
            $this->setPEndDate($p_end_date);
        }
        else{
            throw new Exception('Unable to create new Project with Project ID:' . $project_id);
        }

    }

    public function delete(){

        $query = "DELETE FROM `Project_Master` WHERE `Project_ID` = '$this->project_id'";

        if($db->query($query)){
            return true;
        }
        else{
            throw new Exception('Unable to delete Project with Project ID:' . $this->project_id);
        }
    }

    public function update($project_name, $project_desc, $p_start_date, $p_end_date){



        $query = "UPDATE `Project_Master` SET `Project_Name` = '$project_name', `Project_Description` = '$project_desc',`Start_Date` = '$p_start_date', `End_Date` = '$p_end_date' WHERE `Project_ID` = '$this->project_id'";

        if($db->query($query)){
            return true;
        }
        else{
            throw new Exception('Unable to update Project with Project ID:' . $this->project_id);
        }
    }

    /**
     * @return string
     */
    public function getProjectId()
    {
        return $this->project_id;
    }

    /**
     * @return string
     */
    public function getProjectName()
    {
        return $this->project_name;
    }

    /**
     * @return string
     */
    public function getProjectDesc()
    {
        return $this->project_desc;
    }

    /**
     * @return string
     */
    public function getPStartDate()
    {
        return $this->p_start_date;
    }

    /**
     * @return string
     */
    public function getPEndDate()
    {
        return $this->p_end_date;
    }

    /**
     * @param string $project_id
     */
    public function setProjectId($project_id)
    {
        $this->project_id = $project_id;
    }

    /**
     * @param string $project_name
     */
    public function setProjectName($project_name)
    {
        $this->project_name = $project_name;
    }

    /**
     * @param string $project_desc
     */
    public function setProjectDesc($project_desc)
    {
        $this->project_desc = $project_desc;
    }

    /**
     * @param string $p_start_date
     */
    public function setPStartDate($p_start_date)
    {
        $this->p_start_date = $p_start_date;
    }

    /**
     * @param string $p_end_date
     */
    public function setPEndDate($p_end_date)
    {
        $this->p_end_date = $p_end_date;
    }

    private function retrieve(){

        $query = "SELECT * FROM `Project_Master` WHERE `Project_ID` = '$this->project_id'";

        if($res = $db->get_row($query)){
            $this->setProjectId($res->Project_ID);
            $this->setProjectName($res->Project_Name);
            $this->setProjectDesc($res->Project_Description);
            $this->setPStartDate($res->Start_Date);
            $this->setPEndDate($res->End_Date);
        }
        else{
            throw new Exception('Unable to retrieve Project information with Project ID:' . $this->project_id);
        }

    }

    public function retrieveall(){

        $query = "SELECT * FROM `Project_Master`";

        if($res = $db->get_results($query)){
            return $res;
        }
        else{
            throw new Exception('Unable to retrieve Project information with Project ID:' . $this->project_id);
        }
    }

}