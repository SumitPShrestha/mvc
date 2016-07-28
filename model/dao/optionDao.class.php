<?php
/**
 * Created by IntelliJ IDEA.
 * User: sumit
 * Date: 12/14/15
 * Time: 7:35 PM
 */

 class optionDao extends abstractDao{



     public function __construct($registry)
     {
         parent::__construct($registry);

     }
     public function getTableName()
     {
         return 'options';
     }

     public function getClass()
     {
         return 'options';
     }
 }