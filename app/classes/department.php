<?php

/**
 * Created by PhpStorm.
 * User: itssu
 * Date: 09-Sep-16
 * Time: 3:05 AM
 */

require_once('config.php');

class Department
{
    protected $dept_id      = '';
    protected $dept_name    = '';
    protected $dept_desc    = '';

    function __construct($dept_id)
    {
        if($dept_id != null){
            $this->setDeptId($dept_id);
            $this->retrieve();
        }
    }

    public function create($dept_id, $dept_name, $dept_desc){

        $query = "INSERT INTO `Department_Master`(`Dept_ID`, `Dept_Name`, `Dept_Description`)".
            "VALUES('$dept_id', '$dept_name', '$dept_desc')";

        if($db->query($query)){
            $this->setDeptId($dept_id);
            $this->setDeptName($dept_name);
            $this->setDeptDesc($dept_desc);
        }
        else{
            throw new Exception('Unable to create new Department with Dept ID:' . $dept_id);
        }

    }

    public function delete(){

        $query = "DELETE FROM `Department_Master` WHERE `Dept_ID` = '$this->dept_id'";

        if($db->query($query)){
            return true;
        }
        else{
            throw new Exception('Unable to delete Department with Dept ID:' . $this->dept_id);
        }
    }

    public function update($dept_name, $dept_desc){



        $query = "UPDATE `Department_Master` SET `Dept_Name` = '$dept_name', `Dept_Description` = '$dept_desc' WHERE `Dept_ID` = '$this->dept_id'";

        if($db->query($query)){
            return true;
        }
        else{
            throw new Exception('Unable to update Department with Dept ID:' . $this->dept_id);
        }
    }

    /**
     * @return string
     */
    public function getDeptId()
    {
        return $this->dept_id;
    }

    /**
     * @return string
     */
    public function getDeptName()
    {
        return $this->dept_name;
    }

    /**
     * @return string
     */
    public function getDeptDesc()
    {
        return $this->dept_desc;
    }

    /**
     * @param string $dept_id
     */
    public function setDeptId($dept_id)
    {
        $this->dept_id = $dept_id;
    }

    /**
     * @param string $dept_name
     */
    public function setDeptName($dept_name)
    {
        $this->dept_name = $dept_name;
    }

    /**
     * @param string $dept_desc
     */
    public function setDeptDesc($dept_desc)
    {
        $this->dept_desc = $dept_desc;
    }

    private function retrieve(){

        $query = "SELECT * FROM `Department_Master` WHERE `Dept_ID` = '$this->dept_id'";

        if($res = $db->get_row($query)){
            $this->setDeptName($res->Dept_Name);
            $this->setDeptDesc($res->Dept_Descritption);
        }
        else{
            throw new Exception('Unable to retrieve Department information with Dept ID:' . $this->dept_id);
        }
    }

    public function retrieveall(){

        $query = "SELECT * FROM `Department_Master`";

        if($res = $db->get_results($query)){
            return $res;
        }
        else{
            throw new Exception('Unable to retrieve Department information with Dept ID:' . $this->dept_id);
        }
    }

}