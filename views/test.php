<?php
/**
 * Created by IntelliJ IDEA.
 * User: sumit
 * Date: 12/31/15
 * Time: 7:39 AM
 */
?>
<div class="container">
    <div class="col-lg-2 col-md-2">
        <?php include "sidebar.php"; ?>
    </div>
    <div class="col-lg-10 col-md-10">
        <div class="user-home home-content shadow-effect">
            <div class="row">
                <div class="headline">
                    <h2>Create Test</h2>

                </div>
            </div>
            <form action="/mvc/?rt=test/createTest" method="post">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="col-lg-12">

                            <input type="text" name="testName" placeholder="name of test">
                        </div>
                        <div class="col-lg-12">

                            <input type="text" name="duration" placeholder="test duration">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="row test-info">
                            <table class="test-info-table">
                                <thead>
                                <tr>
                                    <td>subject</td>
                                    <td># of question</td>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>N/A</td>
                                    <td>0</td>
                                </tr>

                                </tbody>
                                <tfoot>
                                <tr>
                                    <td>Total Questions</td>
                                    <td>0</td>
                                </tr>
                                </tfoot>
                            </table>

                        </div>
                    </div>
                </div>


                <table class="table">

                    <tbody>
                    <tr class="createTest">
                        <td class="index">1</td>
                        <td class="tsubject"><select name="subject">
                                <option>Subject</option>
                                <?php
                                foreach ($subjects as $sub) {
                                    echo ' <option name=subjects[] value="' . $sub->id . '">' . $sub->subjectName . '</option>';
                                }
                                ?>
                            </select></td>

                        <td><input name="easy[]" placeholder="easy"/></td>
                        <td><input name="medium[]" placeholder="medium"/></td>
                        <td><input name="hard[]" placeholder="hard"/></td>
                        <td class="taction"><a class="add-test">add</a></td>

                    </tr>

                    </tbody>

                </table>
                <input type="submit" class="button" value="save">
            </form>

        </div>
    </div>
</div>
</div>
<style>
    section {
        width: 100%;
        float: right;

        background: #afd4b4;
        height: 100%;
    }

    /*table panel*/
    .test-info table, .test-info table thead > tr > td {
        background: #DDD none repeat scroll 0% 0%;
        border-bottom: none;
        background: #45FF3D;
    }

    .test-info table thead > tr > td {
        color: white;
    }

    .tsubject {
        width: 30%;

    }

    .taction a, .index {
        color: #45FF3D;
    }
</style>
