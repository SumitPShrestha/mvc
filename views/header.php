<header>
    <div class="topbar">
        <div class="container">
            <h1 class="app-heading"><span class="green"> O</span>nline<span class="green">T</span>est <span
                    class="green">A</span>pplication</h1>
        </div>
    </div>
    <div class="nav-wrapper ">
        <div class="container">

            <nav>
                <ul class="nav  navbar-nav">
                    <li class=" "><a class="nav-item-link" href="
                <?php
                        echo $this->session->isLoggedIn ? '/mvc/auth/logout' : '/mvc/auth'; ?>">
                            <?php
                            echo $this->session->isLoggedIn ? 'Logout' : 'Login'; ?></a></li>
                    <li class="nav-item"><a class="nav-item-link">Exams</a></li>
                    <li class="nav-item"><a class="nav-item-link" href="/mvc/#about-us">About Us</a></li>
                    <li class="nav-item"><a class="nav-item-link" href=" <?php
                        echo $this->session->isLoggedIn ? '/mvc/user/home' : '/mvc/index';


                        ?>">Home</a></li>
                </ul>
            </nav>
        </div>
    </div>
</header>
<?php
/**
 * Created by IntelliJ IDEA.
 * User: sumit
 * Date: 11/23/15
 * Time: 7:44 PM
 */
