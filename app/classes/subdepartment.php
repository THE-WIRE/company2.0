<?php

/**
 * Created by PhpStorm.
 * User: itssu
 * Date: 09-Sep-16
 * Time: 3:24 AM
 */

require_once('department.php');

class SubDepartment extends Department
{

    protected $subdept_id      = '';
    protected $subdept_name    = '';
    protected $subdept_desc    = '';

    function __construct($dept_id, $subdept_id)
    {
        parent::__construct($dept_id);

        if($subdept_id != null){
            $this->setsubdeptId($subdept_id);
            $this->retrieve();
        }
    }

    public function create($subdept_id, $subdept_name, $subdept_desc){

        $query = "INSERT INTO `Sub_Department`(`Dept_ID`, `Sub_Dept_ID`, `Sub_Dept_Name`, `Sub_Dept_Desc`) ".
                "VALUES('$this->dept_id', '$subdept_id', '$subdept_name', '$subdept_desc')";

        if($db->query($query)){
            $this->setsubdeptId($subdept_id);
            $this->setsubdeptName($subdept_name);
            $this->setsubdeptDesc($subdept_desc);
        }
        else{
            throw new Exception('Unable to create new Sub Department with SubDept ID:' . $subdept_id);
        }

    }

    public function delete(){

        $query = "DELETE FROM `Sub_Department` WHERE `Sub_Dept_ID` = '$this->subdept_id'";

        if($db->query($query)){
            return true;
        }
        else{
            throw new Exception('Unable to delete Sub Department with SubDept ID:' . $this->subdept_id);
        }
    }

    public function update($subdept_name, $subdept_desc){



        $query = "UPDATE `Sub_Department` SET `Sub_Dept_Name` = '$subdept_name', `Sub_Dept_Desc` = '$subdept_desc' WHERE `Sub_Dept_ID` = '$this->subdept_id'";

        if($db->query($query)){
            return true;
        }
        else{
            throw new Exception('Unable to update Sub Department with SubDept ID:' . $this->subdept_id);
        }
    }

    /**
     * @return string
     */
    public function getsubdeptId()
    {
        return $this->subdept_id;
    }

    /**
     * @return string
     */
    public function getsubdeptName()
    {
        return $this->subdept_name;
    }

    /**
     * @return string
     */
    public function getsubdeptDesc()
    {
        return $this->subdept_desc;
    }

    /**
     * @param string $subdept_id
     */
    public function setsubdeptId($subdept_id)
    {
        $this->subdept_id = $subdept_id;
    }

    /**
     * @param string $subdept_name
     */
    public function setsubdeptName($subdept_name)
    {
        $this->subdept_name = $subdept_name;
    }

    /**
     * @param string $subdept_desc
     */
    public function setsubdeptDesc($subdept_desc)
    {
        $this->subdept_desc = $subdept_desc;
    }

    private function retrieve(){

        $query = "SELECT * FROM `Sub_Department` WHERE `subdept_ID` = '$this->subdept_id'";

        if($res = $db->get_row($query)){
            $this->setsubdeptName($res->subdept_Name);
            $this->setsubdeptDesc($res->subdept_Descritption);
        }
        else{
            throw new Exception('Unable to retrieve Sub Department information with SubDept ID:' . $this->subdept_id);
        }
    }

    public function retrieveall(){

        $query = "SELECT * FROM `Sub_Department`";

        if($res = $db->get_results($query)){
            return $res;
        }
        else{
            throw new Exception('Unable to retrieve Sub Department information with SubDept ID:' . $this->subdept_id);
        }
    }

}