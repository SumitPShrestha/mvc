<?php
/**
 * Created by IntelliJ IDEA.
 * User: sumit
 * Date: 10/31/15
 * Time: 10:02 AM
 */
function getAuthorizedNavPanel()
{

    $navigationAndAuthority = Array(
   new NavigationPanel('View Activity','/mvc/user/activity','ROLE_USER'),
    new NavigationPanel('View QUESTIONS','/mvc/question','ROLE_FSTAFF'),
    new NavigationPanel('CREATE QUESTIONS','/mvc/question/getSavePage','ROLE_FSTAFF'),
    new NavigationPanel('CREATE TEST','/mvc/test/creattest','ROLE_FSTAFF'));
//    $navigationAndAuthority['test/createQuestions']='ROLE_TEACHER';
//    $navigationAndAuthority['test/createTest']='ROLE_TEACHER';
    return $navigationAndAuthority;
}

?>
<div class="sidebar">
    <div class="sidebar-heading">
<h3 class="heading"><?php echo $this->session->userName?></h3>
    </div>
    <div class="sidebar-body">

<ul class="sidebar-items">
<?php
    $links = '';
    foreach (getAuthorizedNavPanel() as $navigation) {
  //      print_r($this->session->userRole);
        if (in_array($navigation->authority,$this->session->userRole)) {

           $links =$links . '<li class="sidebar-item"><a href="'.$navigation->link.'">'.$navigation->displayName.'</a></li>';
        }


    }
    echo $links;
    ?>
</ul>
    </div>
</div>

<style>

    .sidebar{
        border:1px solid #72C02C;
        padding: 0;

    }
    .sidebar-heading{
        margin: 0;
        background:  #717984 none repeat scroll 0% 0%;
        height: 9%;
    }
    .sidebar-heading h3 {
        margin: 0;
        padding: 10px 0 0 5px;
        color: #55FF6C;

    }
    .sidebar-item {
        margin:8px 20px 10px 20px;
        list-style: none;
        border-bottom:1px solid #72C02C ;
    }
    .sidebar-item a{
        color: #72C02C;
        height: 40px;
        font-family: "Open Sans", sans-serif;
        font-size: 15px;
        font-weight: 400;
        text-transform: uppercase;
        text-decoration: none;
    }
    .sidebar-item a:hover{
        color: #49c011;
    }



</style>
