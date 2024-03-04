<?php
  include 'connect.php';
  //about
  if(isset($_POST['submit-about']))
  {
    $text = $_POST['about'];
    $sql = "insert into `aboutDb` (about)
    values ('$text') ";
    $request = mysqli_query($con,$sql);
    if(!$request)
    {
      die(mysqli_error($con));
    }
  }
  //experience
  if(isset($_POST['submit-experience']))
  {
    $experienceType = $_POST['experience_type'];
    $experienceIn = $_POST['experience_in'];
    $experienceLevel = $_POST['experience_level'];
    $sql = "insert into `experienccedb` (experience_type , experience_in , experience_level)
    values('$experienceType','$experienceIn','$experienceLevel') ";
    $request = mysqli_query($con,$sql);
    if(!$request)
    {
      die(mysqli_error($con));
    }
  }
  //timeline
  if(isset($_POST['submit-timeline']))
  {
    $year = $_POST['timeline_year'];
    $title = $_POST['timeline_title'];
    $inst = $_POST['timeline_inst'];
    $sql = "insert into `timlinedb` (year , title , inst)
    values('$year','$title','$inst') ";
    $request = mysqli_query($con,$sql);
    if(!$request)
    {
      die(mysqli_error($con));
    }
  }
  //project 
  if(isset($_POST['submit-project']))
  {
    $name = $_POST['project_name'];
    $link = $_POST['project_link'];
    $sql = "insert into `projectdb` (name , link )
    values('$name','$link') ";
    $request = mysqli_query($con,$sql);
    if(!$request)
    {
      die(mysqli_error($con));
    }
  }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="./css/admin.css">
</head>
<body>
    <nav id="desktop-nav">
        <div class="logo">Admin Panel</div>
        <div>
            <ul class="nav-links">
                <li> <a href="#about">About</a></li>
                <li> <a href="#experience">Experience</a></li>
                <li> <a href="#project">Project</a></li>
                <li> <a href="#contact">Contact</a></li>
                <li> <a href="#timeline">Timeline</a></li>

            </ul>
        </div>
    </nav>
    <section id="about">
        <h1>About</h1>
        <div class="form-container">
            <form class="form" method="post">
              <div class="form-group">
                <label for="textarea">Update About</label>
                <input name="about" type="text">
              </div>
              <button name="submit-about" type="submit" class="form-submit-btn">Submit</button>
            </form>
          </div>
    </section>
    <section id="experience">
        <h1>Experience</h1>
        <div class="form-container">
            <form class="form" method="post">
              <div class="form-group">
                <label for="textarea">Experience Type</label>
                <input name="experience_type" type="text">
              </div>
              <div class="form-group">
                <label for="textarea">Experience In</label>
                <input name="experience_in" type="text">
              </div>
              <div class="form-group">
                <label for="textarea">Experience Level</label>
                <input name="experience_level" type="text">
              </div>
              <button name="submit-experience" type="submit" class="form-submit-btn">Submit</button>
            </form>
          </div>
    </section>
    <section id="timeline">
    <h1>Timeline</h1>
        <div class="form-container">
            <form class="form" method="post">
              <div class="form-group">
                <label for="textarea">Year</label>
                <input name="timeline_year" type="text">
              </div>
              <div class="form-group">
                <label for="textarea">Title</label>
                <input name="timeline_title" type="text">
              </div>
              <div class="form-group">
                <label for="textarea">Institution</label>
                <input name="timeline_inst" type="text">
              </div>
              <button name="submit-timeline" type="submit" class="form-submit-btn">Submit</button>
            </form>
          </div>

    </section>
    <section id="project">
        <h1>Project</h1>
        <div class="form-container">
            <form class="form" method="post">
              <div class="form-group">
                <label for="textarea">Project Name</label>
                <input name="project_name" type="text">
              </div>
              <div class="form-group">
                <label for="textarea">Project Link</label>
                <input name="project_link" type="text">
              </div>
              <button name="submit-project" type="submit" class="form-submit-btn">Submit</button>
            </form>
          </div>

    </section>
    <section id="contact">
      <h1>Messages</h1>
      <table>
        <thead>
          <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Messages</th>
          </tr>
        </thead>
        <tbody>
          <?php
              $sql = "select * from `contactdb`";
              $result = mysqli_query($con,$sql);
              if($result)
              {
                while($row = mysqli_fetch_assoc($result))
                {
                  $name = $row['name'];
                  $email = $row['email'];
                  $messages = $row['messages'];
                  ?>
                  <tr>
                    <td><?php echo $name ?> </td>
                    <td><?php echo $email ?> </td>
                    <td><?php echo $messages ?> </td>
                  </tr>
                  <?php
                }
              }
          ?>
          
        </tbody>
      </table>
    </section>
</body>
</html>