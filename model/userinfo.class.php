<?php
/**
 * Created by IntelliJ IDEA.
 * User: sumit
 * Date: 11/12/15
 * Time: 10:04 PM
 */

 class userInfo extends model{
     protected $registry;
     private $id;
     private $name;
     private $isMale;
     private $Dob;
     private $address;
     private $joinedDate;
     private $user_id;

     public function __construct($registry=null)
     {
         $this->registry = $registry;
         parent::__construct($this->registry);

     }
     public function __set($property, $value)
     {
         $this->$property = $value;
     }

     public function __get($property)
     {
         return $this->$property;
     }
     public function getClass()
     {
         return __CLASS__;
     }

     public function getTableName()
     {
         return 'user_info';
     }
 }