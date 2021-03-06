<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 *
 * @license see /license.txt
 * @author autogenerated
 */
class RoleGroup extends \CourseEntity
{
    /**
     * @return \Entity\Repository\RoleGroupRepository
     */
     public static function repository(){
        return \Entity\Repository\RoleGroupRepository::instance();
    }

    /**
     * @return \Entity\RoleGroup
     */
     public static function create(){
        return new self();
    }

    /**
     * @var integer $id
     */
    protected $id;

    /**
     * @var integer $c_id
     */
    protected $c_id;

    /**
     * @var integer $group_id
     */
    protected $group_id;

    /**
     * @var integer $role_id
     */
    protected $role_id;

    /**
     * @var string $scope
     */
    protected $scope;


    /**
     * Set id
     *
     * @param integer $value
     * @return RoleGroup
     */
    public function set_id($value)
    {
        $this->id = $value;
        return $this;
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function get_id()
    {
        return $this->id;
    }

    /**
     * Set c_id
     *
     * @param integer $value
     * @return RoleGroup
     */
    public function set_c_id($value)
    {
        $this->c_id = $value;
        return $this;
    }

    /**
     * Get c_id
     *
     * @return integer 
     */
    public function get_c_id()
    {
        return $this->c_id;
    }

    /**
     * Set group_id
     *
     * @param integer $value
     * @return RoleGroup
     */
    public function set_group_id($value)
    {
        $this->group_id = $value;
        return $this;
    }

    /**
     * Get group_id
     *
     * @return integer 
     */
    public function get_group_id()
    {
        return $this->group_id;
    }

    /**
     * Set role_id
     *
     * @param integer $value
     * @return RoleGroup
     */
    public function set_role_id($value)
    {
        $this->role_id = $value;
        return $this;
    }

    /**
     * Get role_id
     *
     * @return integer 
     */
    public function get_role_id()
    {
        return $this->role_id;
    }

    /**
     * Set scope
     *
     * @param string $value
     * @return RoleGroup
     */
    public function set_scope($value)
    {
        $this->scope = $value;
        return $this;
    }

    /**
     * Get scope
     *
     * @return string 
     */
    public function get_scope()
    {
        return $this->scope;
    }
}