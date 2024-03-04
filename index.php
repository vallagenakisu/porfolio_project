<?php
include 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="general.css">
    <link rel="stylesheet" href="mediaqueries.css">
    <link rel="stylesheet" href="tooltip.css">
    <script src="script.js"></script>
</head>

<body>
    <nav id="desktop-nav">
        <div class="logo">Tanzir Mannan Turzo </div>
        <div>
            <ul class="nav-links">
                <li> <a href="#about">About</a></li>
                <li> <a href="#experience">Experience</a></li>
                <li> <a href="#project">Project</a></li>
                <li> <a href="#contact">Contact</a></li>
                <li> <a href="#timeline">Timeline</a></li>
                <li><a href="http://localhost/portfolio/login.php">Admin</a></li>
            </ul>
        </div>
    </nav>

    <!-- hamburger-nav -->
    <nav id="hamburger-nav">
        <div class="logo">Tanzir Mannan Turzo</div>
        <div class="hamburger-menu">
            <div class="hamburger-icon" onclick="toggleMenu()">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <div class="menu-links">
                <li> <a href="#about" onclick="toggleMenu()">About</a></li>
                <li> <a href="#experience" onclick="toggleMenu()">Experience</a></li>
                <li> <a href="#project" onclick="toggleMenu()">Project</a></li>
                <li> <a href="#contact" onclick="toggleMenu()">Contact</a></li>
                <li> <a href="#timeline" onclick="toggleMenu()">Timeline</a></li>
                <li><a href="http://localhost/portfolio/login.php">Admin</a></li>
            </div>
        </div>
    </nav>
    <!-- profile section -->
    <section id="profile">
        <div class="section-container">
            <div class="section__pic-container">
                <img src="./resources/profile-picture.png" alt="My Profile Picture">
            </div>

            <div class="section__text">
                <p class="section__text__p1">Hello, I'm</p>
                <h1 class="title">Tanzir Mannan Turzo</h1>
                <p class="section__text_p2">Tech Enthusiast</p>
                <div class="btn-container">
                    <button class="btn btn-color-1" onclick="window.open('./resources/profile-picture.png')">Download CV</button>
                    <button class="btn btn-color-2" onclick="window.location.href('#contact')">Contact Info</button>
                </div>
                <div id="socials-container">
                    <!-- linkedin image -->
                    <img src="./resources/linkedin.png" alt="my Linkedin" class="icon" onclick="location.href='https://www.linkedin.com/in/tanzir-mannan-turzo-b3b372227/' ">
                    <img src="./resources/facebook.png" alt="my facebook" class="icon" onclick="location.href='https://www.facebook.com/tanzirmannan.turzo' ">
                    <img src="./resources/github.png" alt="my github" class="icon" onclick="location.href='https://github.com/vallagenakisu'">


                    <!-- facebook image -->

                </div>
            </div>
        </div>
    </section>
    <section id="about">
        <p class="section__text__p1">Get To Know More</p>
        <h1 class="title">About Me</h1>
        <div class="section-container">
            <div class="section__pic-container section__pic-container-about">
                <img src="./resources/aboutpic.jpg" alt="aboutpic" class="about-pic">
            </div>
            <div class="about-grid">
                <div class="about-details-container">
                    <!-- 
                    <div class="about-containers">
                        <div class="details-container">
                            <img src="./resources/medal-.png" alt="icon">
                            <h2>Experience</h2>
                            <p>Android Development <br> Android Native</p>
                        </div>
                        <div class="details-container">
                            <img src="./resources/mortarboard.png" alt="education">
                            <h2>Education</h2>
                            <p>Bsc : Computer Science and Engineering</p>
                        </div>
                    </div> -->
                </div>
                <?php
                $sql = "select * from `aboutDb`";
                $result = mysqli_query($con, $sql);
                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $text = $row['about'];
                    }
                    echo '<div class="text-container">' . $text . '</div>';
                }
                ?>




            </div>
        </div>

    </section>
    <section id="timeline">
        <p class="section__text__p1">My Journey</p>
        <h1 class="title">Timeline</h1>
        <?php
        $sql = "select * from `timlinedb`";
        $result = mysqli_query($con, $sql);
        if ($result) {
            while ($row = mysqli_fetch_assoc($result)) {
                $year = $row['year'];
                $title = $row['title'];
                $inst = $row['inst'];
        ?>
                <div class="timeline-box">
                    <div class="card">
                        <a class="card1" href="#">
                            <p><?php echo $year ?></p>
                            <h2><?php echo $title ?></h2>
                            <p class="small"><?php echo $inst ?></p>
                            <div class="go-corner" href="#">
                                <div class="go-arrow">
                                    →
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
        <?php
            }
        }
        ?>
    </section>
    <section id="experience">
        <p class="section__text__p1"> Explore My</p>
        <h1 class="title"> Experience</h1>
        <div class="efty">


            <div class="experience-details-container">
                <div class="about-containerss">
                    <div class="details-container">
                        <h2 class="experience-sub-title"> Frontend Development </h2>
                        <div class="article-container">
                            <article>
                                <?php
                                $sql = "select * from `experienccedb`";
                                $result = mysqli_query($con, $sql);
                                if ($result) {
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        $experienceType = $row['experience_type'];
                                        $experienceIn = $row['experience_in'];
                                        $experienceLevel = $row['experience_level'];
                                        if ($experienceType == 'Frontend Development') {
                                ?>

                                            <div class="experiences">


                                                <img src="./resources/checked.png" alt="checkbox" class="icon">
                                    <?php
                                            echo '<div>
                                                <h3>' . $experienceIn . '</h3>
                                                <p>' . $experienceLevel . '</p>
                                            </div>';
                                        }
                                    }
                                }
                                    ?>
                                            </div>

                            </article>
                        </div>
                    </div>
                    <div class="details-container">
                        <h2 class="experience-sub-title">Backend Development</h2>
                        <div class="article-container">
                            <article>
                                <?php
                                $result1 = mysqli_query($con, $sql);
                                if ($result1) {
                                    while ($row = mysqli_fetch_assoc($result1)) {
                                        $experienceType = $row['experience_type'];
                                        $experienceIn = $row['experience_in'];
                                        $experienceLevel = $row['experience_level'];
                                        if ($experienceType == 'Backend Development') {
                                ?>
                                            <div class="experiences">
                                                <img src="./resources/checked.png" alt="checkbox" class="icon">
                                    <?php

                                            echo '<div>
                                                    <h3>' . $experienceIn . '</h3>
                                                    <p>' . $experienceLevel . '</p>
                                                </div>';
                                        }
                                    }
                                }
                                    ?>
                                            </div>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="project">
        <p class="section__text__p1"> Browser My Recent</p>
        <h1 class="title"> Projects</h1>
        <div class="naveed">
        <?php
                $sql = "select * from `projectdb`";
                $result = mysqli_query($con, $sql);
                if ($result) 
                {
                    while ($row = mysqli_fetch_assoc($result)) 
                    {
                        $name = $row['name'];
                        $link = $row['link'];
        ?>
            <div class="experience-details-container1">
                <div class="details-container1 color-container">
                    <div class="section__pic-container">
                        <img src="./resources/project-1.png" alt="" class="project-img">
                    </div>
                    <div>
                    <h2 class="experience-sub-title project-title"><?php echo $name ?></h2>
                    </div>
                    
                    <div class="btn-container">
                        <button class="btn btn-color-2 project-btn" onclick="location.href='https://github.com/vallagenakisu/Android-app'">
                            Github
                        </button>
                    </div>
                </div>
            </div>
            <?php
                    }
                }
            ?>
        </div>

    </section>
    <section id="contact">
        <?php
        if (isset($_POST["submit-contact"])) {
            $name = $_POST["name"];
            $email = $_POST["email"];
            $messages = $_POST["messages"];
            $sql = "insert into `contactdb`(name , email , messages)
                values('$name','$email','$messages')";
            $result = mysqli_query($con, $sql);
            if (!$result) {
                die(mysqli_error($con));
            }
        }
        ?>
        <p class="section__text__p1"> Contact Me </p>
        <div class="contact-me">
            <div class="container-contact">
                <img src="./resources/email.png" alt="email" class="icon">
                <h3>Email</h3>
                <p>tanzirmannanturzo@gmail.com</p>
                <img src="./resources/telephone.png" alt="email" class="icon">
                <h3>Number</h3>
                <p>12345689</p>
            </div>
        </div>
        <h1 class="title"> Contact Form</h1>
        <div class="contact">
            <form method="post" class="form">
                <label for="textarea">Name</label>
                <input name="name" class="input-form name" placeholder="Name">
                <label for="textarea">Email</label>
                <input name="email" class="input-form email" placeholder="Email">
                <label for="textarea">Message</label>
                <input name="messages" class="input-form messages" placeholder="Messages">
                <button name="submit-contact" type="submit" class="btn">Submit</button>
            </form>
        </div>
    </section>
</body>

</html>