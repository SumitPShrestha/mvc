<?php
/**
 * Created by IntelliJ IDEA.
 * User: sumit
 * Date: 1/3/16
 * Time: 11:42 AM
 */


/*** define the site path ***/
$site_path = realpath(dirname(__FILE__));
define('__SITE_PATH', $site_path);

$id = $_GET['action'];
include __SITE_PATH . '/includes/init.php';
$dao=DaoFactory::getDao('option');
$question = new question();
$question->question='hello';
echo json_encode($question);
/*foreach ($dao->findOne('question_id',1) as $o) {
echo json_encode($o->option);
}*/


///*class router
//{
//    /*
//    * @the registry
//    */
//    private $registry;
//
//    /*
//    * @the controller path
//    */
//    private $path;
//
//    private $args = array();
//
//    public $file;
//
//    public $controller;
//
//    public $action;
//
//    public function __construct($registry)
//    {
//        $this->registry = $registry;
//    }
//
//    /**
//     *
//     *
//     * @set controller directory path
//     *
//     * @param string $path
//     *
//     * @throws Exception
//     */
//    public function setPath($path)
//    {
//
//        /*** check if path i sa directory ***/
//        if (is_dir($path) == false) {
//            throw new Exception ('Invalid controller path: `' . $path . '`');
//        }
//        /*** set the path ***/
//        $this->path = $path;
//    }
//
//
//    /**
//     *
//     * @load the controller
//     *
//     * @access public
//     *
//     * @return void
//     *
//     */
//    public function loader()
//    {
//        /*** check the route ***/
//        $this->getController();
//
//        /*** if the file is not there diaf ***/
//        if (is_readable($this->file) == false) {
//            $this->file = $this->path . '/error404.php';
//            $this->controller = 'error404';
//        }
//
//        /*** include the controller ***/
//        include $this->file;
//
//        /*** a new controller class instance ***/
//        $class = $this->controller . 'Controller';
//
//        $controller = new $class($this->registry);
//
//        /*** check if the action is callable ***/
//
//
//        if (is_callable(array($controller, $this->action)) == false) {
//            $action = 'index';
//        } else {
//            $action = $this->action;
//        }
//
//        /***
//         * check if user is trying to login
//         */
//        if ($this->registry->session->isLoggedIn) {
//            if (0 == strcmp($class, "authController") && 0 == strcmp($action, "login")) {
//                $controller = new authController($this->registry);
//                $controller->success();
//            } else {
//
//
//                $controller->$action();
//            }
//
//        } else {
//
//            /*** run the action ***/
//            $controller->$action();
//        }
//
//    }
//
//
//    /**
//     *
//     * @get the controller
//     *
//     * @access private
//     *
//     * @return void
//     *
//     */
//    private function getController()
//    {
//        if (isAjax()) {
//            /*** get the route from the url ***/
//            $route = (empty($_GET['action'])) ? '' : $_GET['action'];
////        print_r($route."-----");
//            if (empty($route)) {
//                $route = 'index';
//            } else {
//                /*** get the parts of the route ***/
//                $parts = explode('/', $route);
//                $this->controller = $parts[0];
//                if (isset($parts[1])) {
//                    $this->action = $parts[1];
//                }
//
//            }
//
//        }
//
//
//
//    }
//
//    private function is_ajax() {
//        return isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest';
//    }
//
//}
//
//*/?>
