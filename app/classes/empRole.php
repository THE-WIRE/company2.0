<?php
/**
 * Created by PhpStorm.
 * User: adikr
 * Date: 09-09-2016
 * Time: 05:38 AM
 */
require_once ('../config/config.php');
class Emp_Role
{
    protected $role_id=null;
    protected $role_name=null;
    protected $role_desc=null;

    function __construct($role_id)
    {

        if($role_id!=null)
        {
            $this->setRoleId($role_id);
            $this->retrive();
        }

    }

    protected function add($role_name,$role_desc)
    {
        $query="INSERT INTO `Employee_Role_Master` (`Role_ID`,`Role_Name`,`Role_Description`) VALUES('$this->role_id','$role_name','$role_desc')";

        if($db->query(query))
        {
            $this->setRoleName($role_name);
            $this->setRoleDesc($role_desc);


        }
        else{
            throw new Exception('Failed adding role of role ID:'.$this->role_id);
        }

    }

    protected function update($role_name,$role_desc){
        $query="UPDATE `Employee_Role_Master` SET `Role_ID`='$this->role_id',`Role_Name`=`$role_name`,`Role_Description`='$role_desc'";
        if($db->query($query))
        {

        }
        else{
            throw new Exception("failed to edit role_id:".$this->role_id);
        }
    }

    public function delete($role_id)
    {
        $query = "DELETE FROM `Employee_Role_Master` WHERE `Role_ID` = '$role_id'";

        if($db->query($query)){

        }else{
            throw new Exception('Failed deleting role. Database Error. role ID:'.$this->role_id);
        }
    }


    protected function retrieve()
    {
        $query = "SELECT * FROM `Employee_Role_Master` WHERE `Role_ID` = '$this->role_id'";

        if($res = $db->get_row($query)){
            $this->setRoleId($res->Role_ID);
            $this->setRoleName($res->Role_Name);
            $this->setRoleDesc($res->Role_Description);
        }
        else{
            throw new Exception('Unable to retrieve roles information with role ID:' . $this->role_id);
        }
    }

    protected function retrieveAll()
    {
        $query = "SELECT * FROM `Employee_Role_Master`";

        if($res = $db->get_results($query)){
            return $res;
        }
        else{
            throw new Exception('Unable to retrieve Role information with role ID:' . $this->role_id);
        }
    }

    /**
     * @param null $role_id
     */
    public function setRoleId($role_id)
    {
        $this->role_id = $role_id;
    }

    /**
     * @param null $role_name
     */
    public function setRoleName($role_name)
    {
        $this->role_name = $role_name;
    }

    /**
     * @param null $role_desc
     */
    public function setRoleDesc($role_desc)
    {
        $this->role_desc = $role_desc;
    }

    /**
     * @return null
     */
    public function getRoleId()
    {
        return $this->role_id;
    }

    /**
     * @return null
     */
    public function getRoleName()
    {
        return $this->role_name;
    }

    /**
     * @return null
     */
    public function getRoleDesc()
    {
        return $this->role_desc;
    }