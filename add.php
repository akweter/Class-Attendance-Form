
<?php


        // Check if form submitted, insert form date into users table
        if(isset($_POST['submit'])){
            $index = $_POST['index'];
            $name = $_POST['name'];
            $program = $_POST['program'];
            $semester = $_POST['semester'];
            $mobile = $_POST['mobile'];
            $classDate = $_POST['date'];
            $course = $_POST['course'];
            $lecturer = $_POST['lecturer'];

        // include database connection file
        include_once("./Database/config.php");

        //Fetch the data in the database and display it in tabular form.
        $Data = mysqli_query($Dbase, "INSERT INTO row(`index`, `name`, `program`, `semester`, `mobile`, `classDate`, `lecturer`, `course`) VALUES('$index', '$name', '$program', '$semester', '$mobile', '$classDate', '$course', '$lecturer')");

        //Show message when form is filled.
        echo('<script type="text/javascript">alert("Form recorded successfully.")</script>');
        }
        else{
            echo('');
        }
        
    ?>
        
<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="PHP Web Project">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./node_modules/bootstrap.min.css">
        <link rel="stylesheet" href="./node_modules/uikit.min.css">
        <title>Sign Up</title>

        <style>
            .home-btn{text-align: center;}
            body{background: rgb(31, 80, 9);}
            main{margin: 0 5%}
            label{font-weight: bolder; font-size: large;}
        </style>
    </head>
    <body>
        <main>
            <a href="index.php" class="home-btn"><button class="btn btn-primary btn-lg mt-3 ">Back Home</button></a>
            <p/>

            <form action="add.php" method="post" name="signUpForm">
                <div  id="flex">
                    <div class="form-group">
                        <label for="roll">Roll #</label>
                        <input type="text" placeholder="3006227624" class="form-control" required id="roll" name="index">
                    </div>
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" required id="name" placeholder="Frank Adu Poku" name="name">
                    </div>
                </div>
                <div  id="flex">
                    <div class="form-group">
                        <label for="program">Program</label>
                        <input type="text"  placeholder="BScIT"  class="form-control" required id="program" name="program">
                    </div>
                    <div class="form-group">
                        <label for="semester">Semester</label>
                        <input type="number"   placeholder="3" class="form-control" required id="semester" name="semester">
                    </div>
                </div>
                </div>
                <div  id="flex">
                    <div class="form-group">
                        <label for="mobile">Telephone</label>
                        <input type="tel"  class="form-control" placeholder="0540544210"  required id="mobile" name="mobile">
                    </div>
                    <div class="form-group">
                        <label for="date">Date</label>
                        <input type="date"  class="form-control" required id="date" name="date">
                    </div>
                </div>
                <div  id="flex">
                    <div class="form-group">
                        <label for="lecturer">Lecturer</label>
                        <input type="text"  class="form-control"  placeholder="Selorm Zu" required id="lecturer" name="lecturer">
                    </div>
                    <div class="form-group">
                        <label for="course">Favourite Course</label>
                        <input type="text" class="form-control"  placeholder="Introduction to Computing" required id="course" name="course">
                    </div>
                </div>
                <p/>
                    <div class="form-group">
                        <input type="submit" name="submit" class="btn btn-warning" value="Submit">
                    </div>
            </form>
        </main>
        

        <footer style="background: #1A1110; color: white;" class="mt-5">
            <div class="row">
                <div class="col col-md-2"></div>
                <div style="display:flex; flex-direction:row;" class="col col-md-8">
                    <a href="https://github.com/john-BAPTIS?tab=repositories" target="_blank"><img style="border-radius: 50%; padding:50% 0" width="50px" height=}50ox" src="https://avatars.githubusercontent.com/u/71665600?v=4" alt="Logo"></a>
                    <p style=" padding:15px 0 15px 10px;">Copyright  © 2023 (Angel Development Team). <strong>Powered by: <a style="text-decoration:none" href="mailto:jamesakweter@gmail.com">Akweter</a></strong></p>
                </div>
                <div class="col col-md-2"></div>
            </div>
        </footer>
    </body>
    </html>
    