<?php
/**
 * Created by PhpStorm.
 * User: adikr
 * Date: 09-09-2016
 * Time: 04:33 AM
 */
require_once ('../config/config.php');
class Employee extends Emp_Role
{
    protected $emp_id=null;
    protected $emp_name=null;
    protected $skills=null;
    protected $gender=null;
    protected $DOB=null;
    protected $contact=null;

    function __construct($role_id,$emp_id)
    {
        parent::construct($role_id);
        if($emp_id!=null)
        {
            $this->setEmpId($emp_id);
            $this->retrive();
        }

    }

    protected function addInfo($emp_name,$skills,$gender,$DOB,$contact)
    {
        $query="INSERT INTO `Employee_Master` (`Role_ID`,`Emp_ID`,`Emp_Name`,`Skills`.`Gender`,`DOB`,`Contact`) VALUES('$this->role_id','$this->emp_id','$skills'.'$gender','$DOB','$contact')";

        if($db->query(query))
        {
            $this->setEmpName($emp_name);
            $this->setSkills($skills);
            $this->setGender($gender);
            $this->setDOB($DOB);
            $this->setContact($contact);


        }
        else{
            throw new Exception('Failed adding info of Emp ID:'.$this->emp_id);
        }

    }

    protected function editEmp($emp_name,$skills,$gender,$DOB,$contact){
        $query="UPDATE `Employee_Master` SET `Role_ID`='$this->role_id',`Emp_ID`=`$this->emp_id`,`Emp_Name`='$emp_name',`Skills`='$skills',`GENDER`='$gender',`DOB`='$DOB',`Contact`='$contact'";
        if($db->query($query))
        {

        }
        else{
            throw new Exception("failed to edit emp_id:".$this->emp_id);
        }
    }

    protected function retrieve()
    {
        $query = "SELECT * FROM `Employee_Master` WHERE `Emp_ID` = '$this->emp_id'";

        if($res = $db->get_row($query)){
            $this->setEmpId($res->Emp_ID);
            $this->setEmpName($res->Emp_Name);
            $this->setSkills($res->Skills);
            $this->setGender($res->Gender);
            $this->setDOB($res->Contact);
        }
        else{
            throw new Exception('Unable to retrieve Asset information with Emp ID:' . $this->emp_id);
        }
    }

    protected function retrieveAll()
    {
        $query = "SELECT * FROM `Employee_Master`";

        if($res = $db->get_results($query)){
            return $res;
        }
        else{
            throw new Exception('Unable to retrieve Project information with Asset ID:' . $this->asset_id);
        }
    }


    /**
     * @param null $emp_id
     */
    public function setEmpId($emp_id)
    {
        $this->emp_id = $emp_id;
    }

    /**
     * @param null $emp_name
     */
    public function setEmpName($emp_name)
    {
        $this->emp_name = $emp_name;
    }

    /**
     * @param null $skills
     */
    public function setSkills($skills)
    {
        $this->skills = $skills;
    }

    /**
     * @param null $gender
     */
    public function setGender($gender)
    {
        $this->gender = $gender;
    }

    /**
     * @param null $DOB
     */
    public function setDOB($DOB)
    {
        $this->DOB = $DOB;
    }

    /**
     * @param null $contact
     */
    public function setContact($contact)
    {
        $this->contact = $contact;
    }

    /**
     * @return null
     */
    public function getEmpId()
    {
        return $this->emp_id;
    }

    /**
     * @return null
     */
    public function getEmpName()
    {
        return $this->emp_name;
    }

    /**
     * @return null
     */
    public function getSkills()
    {
        return $this->skills;
    }

    /**
     * @return null
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * @return null
     */
    public function getDOB()
    {
        return $this->DOB;
    }

    /**
     * @return null
     */
    public function getContact()
    {
        return $this->contact;
    }
}
