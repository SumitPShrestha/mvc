<?php

/*** include session class***/
include __SITE_PATH . '/application/session.class.php';
/*** in clude securityUtils class***/
include __SITE_PATH . '/application/Security/ISecurityUtils.php';
include __SITE_PATH . '/application/Security/SecurityUtils.php';


/*** include the controller class ***/
include __SITE_PATH . '/application/' . 'controller_base.class.php';

/*** include the registry class ***/
include __SITE_PATH . '/application/' . 'registry.class.php';

/*** include the router class ***/
include __SITE_PATH . '/application/' . 'router.class.php';

/*** include the template class ***/
include __SITE_PATH . '/application/' . 'template.class.php';

include __SITE_PATH . '/application/' . 'requestMethod.class.php';
include __SITE_PATH . '/model/dao/' . 'IAbstractDao.php';
include __SITE_PATH . '/model/dao/' . 'abstractDao.php';
//include __SITE_PATH . '/model/dao/' . 'QuestionDao.class.php';
include __SITE_PATH . '/model/dao/' . 'DaoFactory.class.php';

//

 /*** auto load model classes ***/
function __autoload($class_name)
{
    $filename = strtolower($class_name) . '.class.php';
    $file = __SITE_PATH . '/model/' . $filename;

    if (file_exists($file) == false) {
        return false;
    }
    include($file);
}

/*** a new registry object ***/
$registry = new registry;


/*** create the database registry object ***/
$registry->db = db::getInstance();
$registry->session = session::getInstance();
DaoFactory::setRegistry($registry);

?>
