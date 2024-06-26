<?php

include('connect.php');


if (isset($_POST['submit'])) {
    $training_program_id = $_POST['training_program_id'];

    header("Location: form_creator.php?training_program_id=" . $training_program_id);

}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/manage_dept.css">
    <title>questionnaire</title>
</head>

<body>
    <?php require_once("navbar.html") ?>
    <?php require_once("sidebartr.html") ?>

    <div class="container">

        <div class="wrapper" id="">
            <section class="pst">
                <header>
                    Create Question
                </header>
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="pdetail">

                        <div class="fld">
                            <label for="">Training</label>
                            <select name="training_program_id">
                                <option value="">Select Training</option>

                                <?php

                                $select_query = "SELECT * FROM create_training_programs";
                                $result_query = pg_query($conn, $select_query);

                                while ($row = pg_fetch_assoc($result_query)) {
                                    $training_program_id = $row['training_program_id'];
                                    $training_name = $row['name'];

                                    echo "<option value='$training_program_id'>$training_name</option>";
                                }

                                ?>
                            </select>
                        </div>


                    </div>
                    <div class="fld btn">
                        <input type="submit" value="Create Question Paper" name="submit" id="submit">
                    </div>
        </div>
        </form>

        </section>
    </div>

    </div>

    <script src="manage.js"></script>
</body>

</html>