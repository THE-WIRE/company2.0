<?php

/**
 * Created by PhpStorm.
 * User: Omkar Dubas
 * Date: 09-09-2016
 * Time: 01:17
 */

require_once (../config/config.php);
class Shot extends Sequence
{
    protected $shot_name = null;
    protected $shot_id = null;
    protected $shot_desc = null;
    protected $shot_leng = null;
    protected $frames = null;
    protected $seconds = null;
    protected $char = null;
    protected $prop = null;
    protected $complexity = null;


    function ___construct($shot_name, $shot_id = null){
        if($shot_id == null){
            //retreive all
        }else{
            $this->shot_id = $shot_id;
            $this->retrieve();
        }
    }

    public function create($shot_name, $shot_id, $shot_desc, $shot_leng, $frames, $seconds, $char, $prop, $complexity){
        $query = "INSERT INTO `Shot_Master`() VALUES('$shot_name, $shot_id, $shot_desc, $shot_leng, $frames, $seconds, $char, $prop, $complexity')";

        if($db->query($query)){
            $this->setShotId($shot_id);
            $this->setShotName($shot_name);
            $this->setShotDesc($shot_desc);
            $this->setShotLeng($shot_leng);
            $this->setFrames($frames);
            $this->setSeconds($seconds);
            $this->setChar($char);
            $this->setProp($prop);
            $this->setComplexity($complexity);
        }else{
            throw new Exception("Failed to create Shot with.'.$shot_id.' ID. Database Error");
        }

    }

    public function delete($shot_id){
        $query = "DELETE FROM `Shot_Master` WHERE(`shot_id = $shot_id`)";

        if($db->query($query)){

        }else{
            throw new Exception("Failed to delete Shot with '.$shot_id.' ID. Database Error ");
        }
    }

    public function update($shot_name, $shot_id, $shot_desc, $shot_leng, $frames, $seconds, $char, $prop, $complexity){
        $query = "UPDATE `Shot_Master` SET('this->$shot_name, this->$shot_id, this->$shot_desc, this->$shot_leng, this->$frames, this->$seconds, this->$char, this->$prop, this->$complexity')";

        if($db->query($query)){

        }else{
            throw new Exception("Failed to update with '.$shot_id.' ID. Database Error");
        }


    }

   /**
     * @return null
     */
    public function getShotId()
    {
        return $this->shot_id;
    }

    /**
     * @return null
     */
    public function getShotName()
    {
        return $this->shot_name;
    }

    /**
     * @return null
     */
    public function getShotDesc()
    {
        return $this->shot_desc;
    }

    /**
     * @return null
     */
    public function getShotLeng()
    {
        return $this->shot_leng;
    }

    /**
     * @return null
     */
    public function getFrames()
    {
        return $this->frames;
    }

    /**
     * @return null
     */
    public function getSeconds()
    {
        return $this->seconds;
    }

    /**
     * @return null
     */
    public function getChar()
    {
        return $this->char;
    }

    /**
     * @return null
     */
    public function getProp()
    {
        return $this->prop;
    }

    /**
     * @return null
     */
    public function getComplexity()
    {
        return $this->complexity;
    }

    /**
     * @param null $shot_id
     */
    public function setShotId($shot_id)
    {
        $this->shot_id = $shot_id;
    }

    /**
     * @param null $shot_name
     */
    public function setShotName($shot_name)
    {
        $this->shot_name = $shot_name;
    }

    /**
     * @param null $shot_desc
     */
    public function setShotDesc($shot_desc)
    {
        $this->shot_desc = $shot_desc;
    }

    /**
     * @param null $shot_leng
     */
    public function setShotLeng($shot_leng)
    {
        $this->shot_leng = $shot_leng;
    }

    /**
     * @param null $frames
     */
    public function setFrames($frames)
    {
        $this->frames = $frames;
    }

    /**
     * @param null $seconds
     */
    public function setSeconds($seconds)
    {
        $this->seconds = $seconds;
    }

    /**
     * @param null $char
     */
    public function setChar($char)
    {
        $this->char = $char;
    }

    /**
     * @param null $prop
     */
    public function setProp($prop)
    {
        $this->prop = $prop;
    }

    /**
     * @param null $complexity
     */
    public function setComplexity($complexity)
    {
        $this->complexity = $complexity;
    }

    private function retrieve(){

        $query = "SELECT * FROM `Shot_Master`";
        if($res = db->get_row($query)){
            $this->shot_name = $res->shot_name;
            $this->shot_id = $res->shot_id;
            $this->shot_desc = $res->shot_desc;
            $this->shot_leng = $res->shot_leng;
            $this->frames = $res->frames;
            $this->seconds = $res->seconds;
            $this->char = $res->char;
            $this->prop = $res->prop;
            $this->complexity = $res->complexity;
        }else{
            throw new Exception("Failed to retrive information. Database Error");
        }
    }

    private function retrieve_all(){
        $query = "SELECT * FROM `Shot_Master`";

        if($res = $db->get_results($query)){
            return $res;
        }else{
            throw new Exception("Failed to retrive all information. Database Error");
        }
    }





}