<div class="row">
    <?php
    /**
     * Created by IntelliJ IDEA.
     * User: sumit
     * Date: 11/28/15
     * Time: 2:12 PM
     */

    ?>
    <div class="container">
        <div class="col-lg-3 col-md-2">
            <?php include "sidebar.php"; ?>
        </div>
        <div class="col-lg-9 col-md-10">
            <div class="user-home home-content shadow-effect">
                <div class="row">
                    <div class="headline">
                        <h2>Create Question</h2>

                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <form action="/mvc/question/save" method="post">
                            <div class="col-lg-4"> Subject: <select name="subject">

                                    <?php
                                    foreach ($faculties as $faculty) {
                                        echo ' <option value="' . $faculty->id . '">' . $faculty->subjectName . '</option>';
                                    }

                                    ?>
                                </select>
                            </div>

                            <div class="col-lg-4"></div>
                            <div class="col-lg-4"> Difficulty level: <select name="difficultyLevel">
                                    <option value="1">EASY</option>
                                    <option value="2">HARD</option>
                                    <option value="3">MEDIUM</option>


                                </select>
                            </div>
                            <div class="create-question-box">
                                <input class="question" value="question" name="question">

                                <div class="row">
                                    <div class="col-lg-10">
                                        <div class="row option-box">
                                            <div class="col-lg-1">

                                                <input type="checkbox" class="correctAns" name="answers[]" value="1"/>
                                                <!--                                        <div type="checkbox" class="correctAns" class="check-btn" isChecked="false"></div>-->
                                            </div>
                                            <div class="col-lg-5">

                                                <div class="option-input">
                                                    <input  class="option" name="options[]" value="option 1" ">
                                                </div>
                                            </div>
                                            <div class="col-lg-1">

                                                <input type="checkbox" class="correctAns" name="answers[]" />
                                                <!--                                        <div type="checkbox" class="correctAns" class="check-btn" isChecked="false"></div>-->
                                            </div>
                                            <div class="col-lg-5">

                                                <div class="option-input">
                                                    <input  class="option" name="options[]" value="option 2" ">
                                                </div>
                                            </div>
                                            <div class="col-lg-1">

                                                <input type="checkbox" class="correctAns" name="answers[]" value="1"/>
                                                <!--                                        <div type="checkbox" class="correctAns" class="check-btn" isChecked="false"></div>-->
                                            </div>
                                            <div class="col-lg-5">

                                                <div class="option-input">
                                                    <input   class="option" name="options[]" value="option 3" ">
                                                </div>
                                            </div>
                                            <div class="col-lg-1">

                                                <input type="checkbox" class="correctAns" name="answers[]" value="1"/>
                                                <!--                                        <div type="checkbox" class="correctAns" class="check-btn" isChecked="false"></div>-->
                                            </div>
                                            <div class="col-lg-5">

                                                <div class="option-input">
                                                    <input   class="option" name="options[]" value="option 4" ">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-lg-12">
                                    <button type="submit" class="button add-more">SAVE</button>

                                </div>
                            </div>
                        </form>

                    </div>
                </div>


            </div>
        </div>
    </div>
</div>
<style>

    .create-question-box {

        margin-bottom: 50px;
    }

    .question {
        width: 100%;
    }

    .add-more {
        margin-bottom: 10px;
        margin-top: 10px;
        width: 100%;
        font-size: 1.3em;
        font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
        font-weight: 500;

    }

    .check-btn {
        background: #888d86;
        border: solid 5px rgba(54, 234, 50, 0.9);
        height: 30px;
        width: 30px;
        border-radius: 10px;
        margin-top: 15px;
        font-size: 25px;
        padding-bottom: 0px;
        margin-left: 18px;
    }

    .check-btn:hover {
        cursor: pointer;
    }

    .check-btn i {
        margin-left: 1px;

        z-index: 2;
    }
</style>
<script>



</script>
