

<div class="row">
    <?php
    /**
     * Created by IntelliJ IDEA.
     * User: sumit
     * Date: 11/28/15
     * Time: 2:12 PM
     *
     *    <div class="row">
     * <div class="col-lg-12 shadow-effect">
     * <?php
     *
     * $df = '';
     * foreach ($question as $q) {
     *
     * echo '<div class="col-lg-10"><div class="question-box">' . $q->id . "-" . $q->question . '<div class="row">';
     * foreach ($q->options as $o) {
     * echo isAnswer($o);
     * }
     *
     * echo '</div><div class="question-info">' .getDifficultyLevel($q->difficultyLevel) . '</div></div></div>';
     * } ?>
     *
     * </div>
     * </div>
     */
    function getSubject($sub)
    {

    }
    function getDifficultyLevel($df)
    {
        switch ($df) {
            case 1:
                return 'easy';
            case 2:
                return 'hard';
            case 3:
                return 'medium';
            default:
                return '';
        }
    }


    function printQuestion($index, $q)
    {
        $question = '<div class="q-box row panel-heading">' .
            '<div class="col-lg-1">' . $index . '</div>' .
            '<div class="col-lg-9"><a class="qLink" id="q'.$q->id.'">' . $q->question . '</a></div>' .
            '<div class="col-lg-2">+</div>' .
            '</div>';

        return $question;
    }
    function printAnswer($o)
    {


        if ($o->isAnswer) {
            return '<div class="col-lg-1"></div><div class="col-lg-5 correct"><div class="option-box green"> ' . $o->option . '</div></div>';
        } else {
            return '<div class="col-lg-1"></div><div class="col-lg-5 "><div class="option-box">' . $o->option . '</div></div>';
        }
    }
    ?>
    <div class="container">
        <div class="col-lg-2 col-md-2">
            <?php include "sidebar.php"; ?>
        </div>
        <div class="col-lg-10 col-md-10">
            <div class="user-home home-content shadow-effect">
                <div class="row">
                    <div class="headline">
                        <h2>View Questions:</h2>

                    </div>
                </div>
                <div class="panel panel-green margin-bottom-40">
                    <div class="panel-heading">
                        <h3 class="panel-title"><i class="fa fa-tasks"></i> Search:</h3>
                    </div>
                </div>



                <?php
                $i = 1;
                foreach ($question as $q) {

                    echo '<div class="row question-wrapper">'.printQuestion($i, $q);
                    echo '<div class="row o-box">';

                    foreach ($q->options as $o) {
                        echo printAnswer($o);
                    }
                    echo '</div>';
                    echo '<div class="row q-footer"><div  class="col-md-8"></div><div  class="col-md-2">' . getDifficultyLevel($q->difficultyLevel) . '</div>' .
                        '<div  class="col-md-2">subject</div></div></div>';
                    $i++;
                }
                ?>
            </div>


        </div>
    </div>
</div>
<script src="/mvc/static/js/question.js"></script>
<style>
    .wrapper {
        width: 100%;
        float: right;
        color:#515151 ;
        height: 100%;
    }

    /*table panel*/
    .panel {
        margin-bottom: 20px;
        background-color: #FFF;
        border: 1px solid transparent;
        border-radius: 4px;
        box-shadow: 0px 1px 1px rgba(0, 0, 0, 0.05);
    }

    .panel-green > .panel-heading {
        background: #55FF6C none repeat scroll 0% 0%;
    }

    .panel-heading {
        color: #FFF;
        padding: 5px 15px;
    }

    .panel-heading {
        padding: 10px 15px;
        border-bottom: 1px solid transparent;
        border-top-left-radius: 3px;
        border-top-right-radius: 3px;
    }

    .panel-title {
        margin-top: 0px;
        margin-bottom: 0px;
        font-size: 16px;
        color: inherit;
    }

    .panel-heading {
        margin-bottom: inherit;
    }
    .question-wrapper {
        margin-top: 20px;
        border: 1px solid #55FF6C;
    }

    .qLink {
        color: #515151;
        line-height: 30px;
    }
    .qLink:hover {
        color: #6c6c6c;
    }
    .q-box {
        padding: 3px;
        color: #515151;
        background: #55FF6C;

    }
    .o-box {
        display: none;
    }
    .option-box {

        height: 46px;
        padding: 10px;
        text-align: left;
        background: #DDE1DB none repeat scroll 0% 0%;
        margin: 7px;

        left: -35px;
        position: relative;
    }

    .q-footer {

        background: #a9dda5;
        color: #515151;
        font-size: 0.8em;
        margin-top: -5px;
        margin-bottom: -5px;
    }
</style>
