<?php

/**
 * Created by PhpStorm.
 * User: Omkar Dubas
 * Date: 09-09-2016
 * Time: 03:30
 */
class Sequence extends Project
{
    protected $seq_id = null;
    protected $seq_name = null;

    public function create($dept_id, $dept_name, $dept_desc){

        $query = "INSERT INTO `Sequence_Master`(`Sequence_ID`, `Sequence_Name`)".
            "VALUES('$seq_id', '$seq_name')";

        if($db->query($query)){

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
     * @return null
     */
    public function getSeqId()
    {
        return $this->seq_id;
    }

    /**
     * @return null
     */
    public function getSeqName()
    {
        return $this->seq_name;
    }

    /**
     * @param null $seq_id
     */
    public function setSeqId($seq_id)
    {
        $this->seq_id = $seq_id;
    }

    /**
     * @param null $seq_name
     */
    public function setSeqName($seq_name)
    {
        $this->seq_name = $seq_name;
    }
}