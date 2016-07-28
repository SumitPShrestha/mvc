<?php

/**
 * Created by IntelliJ IDEA.
 * User: sumit
 * Date: 10/28/15
 * Time: 7:14 PM
 */
class SecurityUtils implements ISecurityUtils
{

    private static function getDB()
    {

        return db::getInstance();
    }

    public function authenticateUser(User $user)
    {
        $statement = 'SELECT * FROM user INNER JOIN user_info ON user.id=Customers.CustomerID';

        $query = self::getDB()->prepare($statement);


//            print_r($this->_query);
        try {
            $query->execute();

            return $query->fetchAll(PDO::FETCH_OBJ);


        } catch (PDOException $ex) {

            echo $ex;
        }


}

public
function getRoleOfUser($userID)
{

}

public
function authorizeUser(User $user)
{
    // TODO: Implement authorizeUser() method.

}


}

?>

