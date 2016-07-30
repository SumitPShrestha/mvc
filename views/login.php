<link rel="stylesheet"
      href="/mvc/static/js/lib/Highly-Customizable-jQuery-Datepicker-Plugin-Datepicker/dist/datepicker.min.css"
      xmlns="http://www.w3.org/1999/html">
<? /**
 * Created by PhpStorm.
 * User: sumit
 * Date: 10/3/15
 * Time: 1:07 AM
 */
?>

<link href="../static/app.css" rel="stylesheet">
<link href="../static/css/grid.css" rel="stylesheet">
<div class="container">
    <div class="row " id="login">
        <div class="col-lg-4 col-md-4 col col-sm-3"></div>
        <div class="login-page col-lg-4 col-md-4 col col-sm-6">

            <div class="row tab">

                <h2 class="tab-headline"><span class="green">L</span>ogin</h2>
                <p class="message"><?php
                    if ($message != null) {
                        echo $message;
                    }
                    ?></p>

            </div>
            <div class="col-lg-12 col-md-12 col col-sm-12">
                <form action="/mvc/auth/login" method="post">
                    <input type="text" id="username" data-pattern="^[A-Z0-9._%+-]+@[A-Z0-9.-]+.[A-Z]{2,4}"
                           placeholder="username" name="username" value="" autocomplete="off"/>
                    <span class="errorMsg">not a valid username. shoulb me same as your email.. </span>
                    <input autocomplete="off" type="text" id="password" placeholder="password" name="password" value=""
                           maxlength="20"/>
                    <span class="errorMsg">password should contain 8 or more character.. </span>

                    <div id="message"></div>

                    <input class="button" type="submit" value="Login"/>


                    <a href="/mvc/auth#" class="signupLogin">not a user yet ? Register Here !! </a>
                </form>
            </div>
        </div>

        <div class="col-lg-4 col-md-4 col col-sm-3"></div>
    </div>

    <div id="register" class="row">
        <div class="col-lg-4 col-md-4 col col-sm-3"></div>
        <div class="col-lg-4 col-md-4 col col-sm-6 login-page">
            <!--            <span class="message">Welcone -->
            <?php //echo $name ?><!--!! You are a registered user now. </span>-->

            <div class="row tab">
                <h2 class="tab-headline"><span class="green">R</span>egister</h2>
            </div>
            <form action="/mvc/user/register" method="post">


                <input type="text" id="name" placeholder="name" name="name" value="" autocomplete="off"/>
                <span class="errorMsg">name is too short! please insert full name.</span>

                <div class="row">

                    <div class="col-2 green">Male</div>
                    <div class="col-1">

                        <input type="radio" name="gender" value="male" checked>
                    </div>
                    <div class="col-2 green">Female</div>
                    <div class="col-1">
                        <input type="radio" name="gender" value="female">
                    </div>
                    <div class="col-6">
                        <input type="text" id="Dob" name="Dob" placeholder="date-of-birth" datepicker>
                        <span class="errorMsg"></span></div>
                </div>


                <input type="text" id="asdress" name="address" placeholder="address">
                <span class="errorMsg"></span>

                <input type="text" id="email" name="username" data-pattern="^[A-Z0-9._%+-]+@[A-Z0-9.-]+.[A-Z]{2,4}"
                       placeholder="e-mail" value="" autocomplete="off">
                <span class="errorMsg">not a valid email</span>

                <input type="password" name="password" id="password" value="" placeholder="password" autocomplete="off">
                <span class="errorMsg">password should contain 8 or more password..</span>

                <input class="button" type="submit" value="Submit"/>


                <a href="/mvc/auth#" class="signupLogin">already registered ? login here</a>
            </form>

        </div>
        <div class="col-lg-4 col-md-4 col col-sm-3"></div>

    </div>
</div>
<?php if ($name !== null) { ?>
    <script type="application/javascript">
        $(function () {
            $('.message').toggle();
            $('.message').fadeIn('fast').delay(1000).fadeOut('fast')
        })
    </script>

<?php } ?>