<?php
/**
 * Created by PhpStorm.
 * User: adikr
 * Date: 09-09-2016
 * Time: 01:30 AM
 */
require_once ('../config/config.php');
class Asset extends Project
{
    public $asset_id=null;
    public $asset_name=null;
    public $asset_code=null;
    public $asset_desc=null;
    public $asset_type=null;
    public $complexity=null;

    function __construct($project_id,$asset_id=null)
    {
        parent::__construct($project_id);
        if($asset_id==null)
        {
            //this->retrieveAll();
        }
        else{
            $this->setAssetId($asset_id);
            retrieve();
        }
    }


    public function create($asset_id,$asset_name,$asset_code,$asset_desc,$asset_type,$complexity)
    {
        $query="INSERT INTO `Asset_Master`(`Project_ID`,`Asset_ID`,`Asset_Name`,`Asset_Code`,`Asset_Desc`,`Asset_Type`,`Complexity`) VALUES('$this->project_id','$asset_id','$asset_name','$asset_code','$asset_desc','$asset_type','$complexity')";
        if($db->query($query)){
            $this->setAssetId($asset_id);
            $this->setAssetName($asset_name);
            $this->setAssetCode($asset_code);
            $this->setAssetDesc($asset_desc);
            $this->setAssetType($asset_type);
            $this->setComplexity($complexity);
        }else{
            throw new Exception('Failed adding new Asset. Database Error.Asset Id:'.$this->asset_id);
        }

    }


    public function delete($asset_id)
    {
        $query = "DELETE FROM `Asset_Master` WHERE `Asset_ID` = '$asset_id'";

        if($db->query($query)){

        }else{
            throw new Exception('Failed deleting Asset. Database Error. Asset ID:'.$this->asset_id);
        }
    }


    public function update($asset_name,$asset_code,$asset_desc,$asset_type,$complexity)
    {
        $query = "UPDATE `Asset_Master` SET `Asset_Name`='$asset_name',`Asset_Code`='$asset_code',`Asset_Description`='$asset_desc',`Asset_Type`='$asset_type',`Complexity`='$complexity' WHERE `Asset_ID`='$this->asset_id'";
        if($db->query($query))
        {
            return true;
        }
        else{
            throw new Exception('Unable to update Project with Asset ID:' . $this->asset_id);
        }
    }

    public function retrieve()
    {
        $query = "SELECT * FROM `Asset_Master` WHERE `Asset_ID` = '$this->asset_id'";

        if($res = $db->get_row($query)){
            $this->setAssetId($res->Asset_ID);
            $this->setAssetName($res->Asset_Name);
            $this->setAssetCode($res->Asset_Code);
            $this->setAssetDesc($res->Asset_Description);
            $this->setAssetType($res->Asset_Type);
            $this->setComplexity($res->Complexity);

        }
        else{
            throw new Exception('Unable to retrieve Asset information with Asset ID:' . $this->asset_id);
        }
    }

    public function retriveAll(){
        $query = "SELECT * FROM `Asset_Master`";

        if($res = $db->get_results($query)){
            return $res;
        }
        else{
            throw new Exception('Unable to retrieve Project information with Asset ID:' . $this->asset_id);
        }
    }


    /**
     * @param null $asset_id
     */
    public function setAssetId($asset_id)
    {
        $this->asset_id = $asset_id;
    }

    /**
     * @param null $asset_name
     */
    public function setAssetName($asset_name)
    {
        $this->asset_name = $asset_name;
    }

    /**
     * @param null $asset_code
     */
    public function setAssetCode($asset_code)
    {
        $this->asset_code = $asset_code;
    }

    /**
     * @param null $asset_desc
     */
    public function setAssetDesc($asset_desc)
    {
        $this->asset_desc = $asset_desc;
    }

    /**
     * @param null $asset_type
     */
    public function setAssetType($asset_type)
    {
        $this->asset_type = $asset_type;
    }

    /**
     * @param null $complexity
     */
    public function setComplexity($complexity)
    {
        $this->complexity = $complexity;
    }

    /**
     * @return null
     */
    public function getAssetId()
    {
        return $this->asset_id;
    }

    /**
     * @return null
     */
    public function getAssetName()
    {
        return $this->asset_name;
    }

    /**
     * @return null
     */
    public function getAssetCode()
    {
        return $this->asset_code;
    }

    /**
     * @return null
     */
    public function getAssetDesc()
    {
        return $this->asset_desc;
    }

    /**
     * @return null
     */
    public function getAssetType()
    {
        return $this->asset_type;
    }

    /**
     * @return null
     */
    public function getComplexity()
    {
        return $this->complexity;
    }
}