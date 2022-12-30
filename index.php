<?php
   //Create database connection using config file
   include_once("./Database/config.php");

//    //Fetch all users from the database
   $Data = mysqli_query($Dbase, 'SELECT * FROM row ORDER BY id DESC');
?>

<html lang="en">
    <head>
        <link rel="stylesheet" href="./node_modules/bootstrap.min.css">
        <link rel="stylesheet" href="./node_modules/uikit.min.css">
        <style>
            html, body{background: linear-gradient(white, #eca7ee, rgb(230, 230, 141)); }
            main{margin: 0 20px}
        </style>

        <title>Home | Form</title>
    </head>
    <body>
        <main>
            <form style="display:flex;flex-direction:row;margin:1%;padding:1%;">
                <a href="./add.php"><button class="btn btn-success">Add Student</button></a>
                <input style="width: 25%;margin:0 1%;" type="search" class="form-control" name="search[name]" id="search" placeholder="Name search..." />
                <input style="width: 25%;margin:0 1%;" type="search" class="form-control" name="search[code]" id="search" placeholder="Search with Id..." />
                <input type="submit" value="Submit" class="btn btn-primary">
                <input style="margin-left:1%;" type="reset" value="Reset" class="btn btn-warning">
            </form>
            
            <table class="table stripped" border="2">
                <thead class="tr">
                        <th>Index</th>
                        <th>Name</th>
                        <th>Program</th>
                        <th>Semester</th>
                        <th>Mobile</th>
                        <th>Date</th>
                        <th>Lecturer</th>
                        <th>Favourite Course</th>
                        <th>Action</th>
                </thead>

            <?php
                while($row_data = mysqli_fetch_array($Data)){
                    echo "<tbody>";
                    echo "<td>".$row_data['index']."</td>";
                    echo "<td>".$row_data['name']."</td>";
                    echo "<td>".$row_data['program']."</td>";
                    echo "<td>".$row_data['semester']."</td>";
                    echo "<td>".$row_data['mobile']."</td>";
                    echo "<td>".$row_data['classDate']."</td>";
                    echo "<td>".$row_data['lecturer']."</td>";
                    echo "<td>".$row_data['course']."</td>";
                    echo "<td><a href='./edit.php?id=$row_data[id]'>Edit</a> | <a href='./erase.php?id=$row_data[id]'>Delete</a></td>";
                    // if(isset($row_data['perpage'])){
                    //     echo "tr";
                    //     echo "<td colspan='9' align=right>".$row_data['perpage']."</td>";
                    //     "</tr>";
                    // }                    
                    "</tbody>";
                }
            ?>
            </table>
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

    
