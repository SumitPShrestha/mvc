<?php

/**
 * Created by IntelliJ IDEA.
 * User: sumit
 * Date: 12/23/15
 * Time: 7:59 AM
 */
class testController extends baseController
{

    public function createTest()
    {
        $test = RequestMethod::post('testName');
        $duration = RequestMethod::post('duration');
        $subjects = RequestMethod::post('discription');
        $easy = RequestMethod::post('easy');
        $medium = RequestMethod::post('medium');
        $hard = RequestMethod::post('hard');


        $dao = DaoFactory::getDao('test');

        $this->registry->template->show('test');
    }


    /**
     * @all controllers must contain an index method
     */
    public function index()
    {
        $subjectDao = DaoFactory::getDao('subject');

        $this->registry->template->subjects = $subjectDao->findAll();
        $this->registry->template->show('test');

    }
}