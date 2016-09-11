<?php

/**
 * Created by PhpStorm.
 * User: Omkar Dubas
 * Date: 11-09-2016
 * Time: 15:39
 */
require_once ("../config/config.php");

class Task extends SubDepartment
{
    protected $task_id = null;
    protected $t_start_date = null;
    protected $t_end_date = null;
    protected $total_time = null;
    protected $version = null;
    protected $emp_id = null;

    public function create($task_id, $t_start_date, $t_end_date, $total_time, $version){

        $query = "INSERT INTO `Task_Master`(`Task_ID`,`Start_Date`,`End_Date`,`Total_Time`,`Version`) VALUES(`$task_id`,`$t_start_date`,`$t_end_date`,`$total_time`,`$version`)";

        if($db->query($query)){
            $this->setTaskId($task_id);
            $this->setTStartDate($t_start_date);
            $this->setTEndDate($t_end_date);
            $this->setTotalTime($total_time);
            $this->setVersion($version);
        }else{
            throw new Exception('Unable to create new Task with ID:' . $task_id);
        }
    }

    public function delete(){
        $query = "DELETE FROM `Task_Master` WHERE `Task_ID` = `$this->task_id`";

        if($db->query($query)){
            return true;
        }else{
            throw new Exception('Unable to delete Task with ID:' . $this->task_id);
        }
    }

    public function update($task_id, $t_start_date, $t_end_date, $total_time, $version){
        $query = "UPDATE `Task_Master` SET `Task_ID` = '$task_id', `Start_Date` = '$t_start_date',`End_Date` = `$t_end_date`, `Total_Time` = `$total_time`, `Version` = `$version`A");

        if($db->query($query)){
            return true;
    }else{
            throw new Exception('Unable to update Task with ID:' . $this->task_id);
        }
    }

    public function task_status($task_id, $emp_id){

        $query = "UPDATE `Task_Master` SET `Task_ID` = `$task_id` WHERE `Employee_ID` = `$emp_id`";

        if($db->query($query)){
            return true;
        }else{
            throw new Exception("Failed to update the status with Task ID".$task_id."and Employee ID".$emp_id);
        }
    }
    public function task_assign($task_id, $emp_id){

        $query = "INSERT INTO `Task_Master`(`Task_ID`) VALUES (`$task_id`) WHERE `Task_ID` = `$this->task_id`, `Employee_ID` = `$this->emp_id` ";

        if($db->query($query)){
            return true;
        }else{
            throw new Exception("Failed to assign task with Task ID".$task_id." to the employee with Employee ID".$emp_id);
        }
    }

    /**
     * @return null
     */
    public function getTaskId()
    {
        return $this->task_id;
    }

    /**
     * @return null
     */
    public function getTStartDate()
    {
        return $this->t_start_date;
    }

    /**
     * @return null
     */
    public function getTEndDate()
    {
        return $this->t_end_date;
    }

    /**
     * @return null
     */
    public function getTotalTime()
    {
        return $this->total_time;
    }

    /**
     * @return null
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * @param null $task_id
     */
    public function setTaskId($task_id)
    {
        $this->task_id = $task_id;
    }

    /**
     * @param null $t_start_date
     */
    public function setTStartDate($t_start_date)
    {
        $this->t_start_date = $t_start_date;
    }

    /**
     * @param null $t_end_date
     */
    public function setTEndDate($t_end_date)
    {
        $this->t_end_date = $t_end_date;
    }

    /**
     * @param null $total_time
     */
    public function setTotalTime($total_time)
    {
        $this->total_time = $total_time;
    }

    /**
     * @param null $version
     */
    public function setVersion($version)
    {
        $this->version = $version;
    }


}
