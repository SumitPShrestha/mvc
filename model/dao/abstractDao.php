<?php

/**
 * Created by IntelliJ IDEA.
 * User: sumit
 * Date: 11/12/15
 * Time: 10:21 PM
 */
abstract class AbstractDao implements IAbstractDao
{


    protected $_error = false, $_count = 0, $_query, $_pdo, $_result;

    public function __construct($registry)
    {
        $this->_pdo = $registry->db;
    }

    public function findOne($property, $value)
    {

        try {

            $table = $this->getTableName();
            $stmt = 'SELECT * FROM ' . $table . ' WHERE ' . $property . ' =?';
            print_r($stmt);
            $this->query($stmt, array($value));
            if (!$this->error()) {
                return $this->getObject($this->_result);

            }
        } catch (Exception $ex) {

            print $ex;
        }


    }

    public function findAll()
    {
        $stmt = 'SELECT * FROM  ' . $this->getTableName();
        $rows = $this->query($stmt);



        /*  foreach ($this->_result as $row) {
              print_r($object->question);
          }*/

        $object = $this->getObject($this->_result);
        return $object;
    }

    public function create($fields = array())
    {

        if (count($fields)) {
            $values = '';
            $keys = array_keys($fields);
            $i = 1;
            foreach ($fields as $field) {
                $values .= '?';
                if ($i < count($fields)) {
                    $values .= ', ';
                }
                $i++;
            }
            $stmt = "INSERT INTO " . $this->getTableName() . "(`" . implode("` , `", $keys) . "`) VALUES (" . $values . ")";
            print_r($stmt);
            if (!$this->query($stmt, $fields)->error()) {
                return $this->findOne('id', $this->_pdo->lastInsertId());
            } else {
                return false;
            }
        }

    }

    public function update($property, $arrayOfProperties)
    {
        // TODO: Implement update() method.
    }


    public function delete($property, $value)
    {
        // TODO: Implement delete() method.
    }


    protected function getObject($rows)
    {
//        print_r($rows);
        $objects = Array();
            for ($i = 0; $i < count($rows); $i++) {



            $class = $this->getClass();
            $object = new $class();

            $model = $object->getProperties();
            foreach ($model as $mo) {
                $property = $mo->name;
//print_r($property);


                if ($rows[$i]->$property) {


                    $object->$property = $rows[$i]->$property;

                }
            }
            $objects[$i] = $object;
        }

        return count($objects) > 1 ? $objects : $objects[0];
    }

    protected function query($statement, $params = null)
    {


        $this->_error = false;
        if ($this->_query = $this->_pdo->prepare($statement)) {
            if (count($params)) {
                $x = 1;
                foreach ($params as $param) {

                    $this->_query->bindValue($x, $param);
                    $x++;
                }
            }
//            print_r($this->_query);
            try {

                $this->_query->execute();
                $this->_count = $this->_query->rowCount();
                if (preg_match('/SELECT/', $statement)) {
                    $this->_result = $this->_query->fetchAll(PDO::FETCH_OBJ);
                }

            } catch (PDOException $ex) {

                echo $ex;
                $this->_error = true;
            }


        }

        return $this;
    }

    public function error()
    {
        return $this->_error;
    }

        public abstract function getTableName();
        public abstract function getClass();

}
