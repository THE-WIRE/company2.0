<?php

/**
 * Created by PhpStorm.
 * User: Omkar Dubas
 * Date: 11-09-2016
 * Time: 14:58
 */
require_once ("../config/config.php");
require_once ("Employee.php");
class Notes extends Employee
{
    protected $note_id  = null;
    protected $note = null;
    protected $date = null;
    protected $status = null;



    public function create($note_id, $note, $date, $status){
        $query = "INSERT INTO `Notes`(`Note_ID`,`Note`,`Date`,`Status`) VALUES(`$note_id`,`$note`,`$date`,`$status`)";

        if($db->query($query)){
            $this->setNoteId($note_id);
            $this->setNote($note);
            $this->setDate($date);
            $this->setStatus($status);
        }else{
            throw new Exception("Falied to insert note with ID".$note_id);
        }
    }

    public function delete(){
        $query = "DELETE FROM `Notes` WHERE `Note_ID` = `this->note_id`";

        if($db->query($query)){
            return true;
        }else{
            throw new Exception("Failed to delete note with ID ".$this->note_id);
        }
    }

    /**
     * @return null
     */
    public function getNoteId()
    {
        return $this->note_id;
    }

    /**
     * @return null
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * @return null
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @return null
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param null $note_id
     */
    public function setNoteId($note_id)
    {
        $this->note_id = $note_id;
    }

    /**
     * @param null $note
     */
    public function setNote($note)
    {
        $this->note = $note;
    }

    /**
     * @param null $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * @param null $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }



}