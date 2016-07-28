<?php

/**
 * Created by IntelliJ IDEA.
 * User: sumit
 * Date: 12/6/15
 * Time: 1:59 PM
 */
class QuestionDao extends AbstractDao
{

    public function __construct($registry)
    {
        parent::__construct($registry);

    }
    public function getQuestionForAdmin(){
        $query="SELECT q.id ,q.name,q.difficultyLevel,s.name FROM questions as q JOIN subjects AS s ON q.subject=s.id ";

}


    public function getClass()
    {
        return 'question';
    }

    public function getTableName()
    {
        return 'question';
    }

    public function getQuestionWithAnswer()
    {

    }
}