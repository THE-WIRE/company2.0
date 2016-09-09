<?php

/**
 * Created by PhpStorm.
 * User: Omkar Dubas
 * Date: 09-09-2016
 * Time: 03:30
 */
require_once ('../config/config.php');
require_once ('Project.php');
class Sequence extends Project
{
    protected $seq_id = null;
    protected $seq_name = null;


    function __construct($seq_id = null)
    {
        if($seq_id != null){
            $this->retrieve();
        }
    }

    public function create($seq_id, $seq_name){

        $query = "INSERT INTO `Sequence_Master`(`Sequence_ID`, `Sequence_Name`)"." VALUES(`$seq_id`, `$seq_name`)";

        if($db->query($query)){
            $this->setSeqId($seq_id);
            $this->setSeqName($seq_name);
        }
        else{
            throw new Exception('Unable to create new Sequence with Seq ID:' . $seq_id);
        }

    }

    public function delete(){

        $query = "DELETE FROM `Sequence_Master` WHERE `Seq_ID` = '$this->seq_id'";

        if($db->query($query)){
            return true;
        }
        else{
            throw new Exception('Unable to delete Sequence with Seq ID:' . $this->seq_id);
        }
    }

    public function update($seq_id, $seq_name){

        $query = "UPDATE `Sequence_Master` SET `Sequence_Name` = '$seq_name' WHERE `Sequence_ID` = '$this->seq_id'";

        if($db->query($query)){
            return true;
        }
        else{
            throw new Exception('Unable to update Sequence with Seq ID:' . $this->seq_id);
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


    private function retrieve($seq_id, $seq_name){

            $query = "SELECT * FROM `Sequence_Master` WHERE `Sequence_ID` = `$this->seq_id`";

            if($res = $db->get_row($query)){
                $this->setSeqId($res->Sequence_ID);
                $this->setSeqName($res->Sequence_Name);
            }else{
                throw new Exception("Unable to retrieve Sequence with ID".$seq_id);
            }
    }

    public function retrieveall()
    {
        $query = "SELECT * FROM `Sequence_Master`";

        if($res = $db->get_results($query)){
            return $res;
        }
        else{
            throw new Exception("Unable to retrieve Sequence with ID".$seq_id);
        }
    }
}