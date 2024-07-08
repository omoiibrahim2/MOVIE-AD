<?php
require_once("includes/db2_connect.php");
?>

<body style="background-color:  rgb(230, 210, 220);">
    <?php include_once("template/nav.php"); ?>

    <?php

    $userid = $_GET["userid"];
    echo ($userid);
    $spot_msg = "SELECT * FROM users WHERE userid = 'userid' LIMIT 1";
    $sel_msg_res = $conn->query($spot_msg);

    if ($sel_msg_res->num_rows > 0) {
        // output data of each row
        while ($sel_msg_row = $sel_msg_res->fetch_assoc()) {
            $sub = $sel_msg_row["email"];
            echo ($sub);
        }
    }
    if (isset($_POST["update_message"])) {
        $fullname = mysqli_real_escape_string($conn, $_POST["fullname"]);
        $email = mysqli_real_escape_string($conn, $_POST["email"]);
        $subject = mysqli_real_escape_string($conn, $_POST["subject"]);
        $message = mysqli_real_escape_string($conn, $_POST["message"]);
        $userid = mysqli_real_escape_string($conn, $_POST["userid"]);

        $update_message = "UPDATE hire SET fullname='$fullname', 
    email='$email',subject='$subject', message='$message' WHERE userid='$userid' LIMIT 1";


        if ($conn->query($update_message) === TRUE) {
            header("Location: View_Messages.php");
            exit();
        } else {
            echo "Error: " . $update_message . "<br>" . $conn->error;
        }
    }
    ?>


    <div class="row">
        <div class="content">
            <div class="side-bar">
                <h1>update message</h1>
                <form action="<?php print htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                    <label for="fn">fullname:</label><br>
                    <input type="text" id="fn" placeholder="fullname" name="fullname" required><br><br>
                    <label for="em">Email:</label><br>
                    <input type="email" id="email" placeholder="email" name="email" required value="<?php print $spot_msg_row["email"]; ?>"><br><br>

                    <label for="sb">Subject:</label><br>
                    <select name="subject" id="sb" required value="<?php print $sel_msg_row["subject"]; ?>">
                        <option value="">--Select Subject--</option>
                        <option value="Portrait Photography">Portrait Photography</option>
                        <option value="Sports Photography">Sports Photography</option>
                        <option value="Wedding Photography">Wedding Photography</option>
                    </select><br><br>

                    <label for="sb">Message:</label><br>
                    <textarea name="message" id="" cols="30" rows="5" required value="<?php print $spot_msg_row["message"]; ?>"></textarea><br><br>

                    <input type="submit" name="update_message" value="update Message">
                    <input type="hidden" name="userid" value="<?php print $spot_msg_row["userid"]; ?>">
                </form>