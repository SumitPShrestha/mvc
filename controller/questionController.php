<?php

/**
 * Created by IntelliJ IDEA.
 * User: sumit
 * Date: 11/28/15
 * Time: 1:17 PM
 */

/**
 * @Secured('ROLE_TEACHER')
 * */
class questionController extends baseController
{
    private $questionDao;

    /**
     * questionController constructor.
     * @param $questionDao
     */
    public function __construct($registry)

    {
        parent::__construct($registry);
    }


    public function getSavePage()
    {
        /**
         * Load the respective faculties of user .
         */
        $facultiesDao = DaoFactory::getDao('subject');
//        if (in_array('ROLE_ADMIN', $this->session->userRole) && in_array('ROLE_FSTAFF', $this->session->userRole)
//        ) {
            $this->registry->template->faculties = $facultiesDao->findAll();
//        } else if ((!in_array('ROLE_ADMIN', $this->session->userRole)) && in_array('ROLE_FSTAFF', $this->session->userRole)
//        ) {
            $faculties = $facultiesDao->findAll();

//            print_r($faculties);
            $this->registry->template->faculties = $faculties;
//        }
        $this->registry->template->show('create_question');
    }


    public function save()
    {
        $questionDao = DaoFactory::getDao('Question');
        $savedQuestion = $questionDao->create(array(
            'question' => RequestMethod::post('question'), 'type' => 'MCQ',
            'subject' => RequestMethod::post('subject'),
            'difficultyLevel' => RequestMethod::post('difficultyLevel')));
        $optionDao = DaoFactory::getDao('option');
        $options = RequestMethod::post('options');
        $answers = RequestMethod::post('answers');
        for ($i = 0; $i < count($options); $i++) {
            $optionDao->create(array(
                                     'option' => $options[$i],
                                      'isAnswer' => in_array($options[$i], $answers) ? true : false,
                                      'question_id' => $savedQuestion->id));
        }
        $this->registry->template->show('create_question');
    }

    public function getQuestion()
    {

        $this->questionDao->findOne('id', RequestMethod::post("questionId"));


    }

    public function getOption()
    {
        $optionsDao = DaoFactory::getDao('option');
        $optionsDao->findOne('question_id',1);



    }

    /**
     * @all controllers must contain an index method
     */
    public function index()
    {
        $optionsDao = DaoFactory::getDao('option');
        $questionDao = DaoFactory::getDao('Question');
        $questions = $questionDao->findAll();
        $questionArray = array();
        $x = 0;
        foreach ($questions as $question) {
            $options = $optionsDao->findOne('question_id', $question->id);
            $question->options = $options;
            $questionArray[$x] = $question;
            $x++;
        }
        $this->registry->template->question = $questionArray;
        $this->registry->template->show('question');

    }
}