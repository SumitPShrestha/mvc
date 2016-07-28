<?php

/**
 * Created by IntelliJ IDEA.
 * User: sumit
 * Date: 12/13/15
 * Time: 10:50 AM
 */
class facultyDao extends abstractDao
{


    public function getTableName()
    {
        return 'subjects';
    }

    public function getClass()
    {
        return 'subjects';
    }

    public static function getFaculties($facultiesObject)
    {
        $i = 0;
        foreach ($facultiesObject as $faculty) {
            $fName[$i] = $faculty->facultyName;
            $i++;
        }
        return $fName;
    }


}