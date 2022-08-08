<?php
    require_once('config.inc.php');
    $conn_str = DB_SYS.':host='.DB_HOST.';dbname='.DB_NAME;
    try {
        $pdo = new PDO($conn_str,DB_USER,DB_PASS);
?>
<!DOCTYPE html>
<html>

<head>
    <title>Profile Form</title>
    <link rel="stylesheet" href="cssfile.css?v=<?php echo time(); ?>">
</head>

<body>
    <?php include_once('header.php'); ?>
    <!-- <h3>New Profile</h3> -->

    <form method="post" action="add_profile_action.php">

        <fieldset>
            <legend class="class2">Add Personal Information </legend>
            <table>

                <tr>
                    <td> <label class="class2"> Name: </label></td>
                    <td><input type="text" name="name" placeholder="First Last" id="myname"></td>
                    <td>
                        <div id="myid1"></div>
                    </td>
                </tr>
                <tr>
                    <td> <br> </td>
                </tr>

                <tr>
                    <td> <label class="class2"> City: </label></td>
                    <td><input type="text" name="city" id="mycity"></td>
                    <td>
                        <div id="myid3"></div>
                    </td>
                </tr>
                <tr>
                    <td> <br> </td>
                </tr>


                <tr>
                    <td> <label class="class2"> Gender: </label></td>
                    <td><input type="radio" name="gender" value="male"><label> Male </label>
                        <input type="radio" name="gender" value="female"><label> Female </label>
                    </td>
                </tr>
                <tr>
                    <td> <br> </td>
                </tr>

                <tr>
                    <td> <label class="class2"> Email: </label></td>
                    <td><input type="text" name="email" placeholder="email@example.com" id="myemail"></td>
                    <td>
                        <div id="myid2"></div>
                    </td>
                </tr>
                <tr>
                    <td> <br> </td>
                </tr>

                <tr>
                    <td> <label class="class2"> Phone Number: </label></td>
                    <td><input type="number" name="phonenumber" id="myphone"></td>
                    <td>
                        <div id="myid4"></div>
                    </td>
                </tr>
                <tr>
                    <td> <br> </td>
                </tr>

                <tr>
                    <td> <label class="class2"> DOB: </label></td>
                    <td><input type="date" name="dob" id="mydate"></td>
                    <td>
                        <div id="myid5"></div>
                    </td>
                </tr>
                <tr>
                    <td> <br> </td>
                </tr>

                <tr>
                    <td> <label class="class2"> Address: </label></td>
                    <td><input type="text" name="address" id="myaddress"></td>
                    <td>
                        <div id="myid6"></div>
                    </td>
                </tr>
                <tr>
                    <td> <br> </td>
                </tr>


                <tr>
                    <td> <label class="class2"> Qualification: </label></td>
                </tr>

                <tr>
                    <td> <input type="checkbox" name="qualification[]" value="Diploma"> Diploma </td>
                </tr>

                <tr>
                    <td> <input type="checkbox" name="qualification[]" value="Bachelors"> Bachelor's </td>
                </tr>
                <tr>
                    <td> <br> </td>
                </tr>


                <tr>
                    <td> <label class="class2"> Hobbies and Interests: </label></td>
                </tr>

                <tr>
                    <td> <input type="checkbox" name="hobbies[]" value="reading"> Reading </td>
                </tr>

                <tr>
                    <td> <input type="checkbox" name="hobbies[]" value="writing"> Writing </td>
                </tr>

                <tr>
                    <td> <input type="checkbox" name="hobbies[]" value="playing sports"> Playing Sports </td>
                </tr>

                <tr>
                    <td> <input type="checkbox" name="hobbies[]" value="travelling"> Travelling </td>
                </tr>
                <tr>
                    <td> <br> </td>
                </tr>


                <tr>
                    <td> <label class="class2"> Skills: </label></td>
                </tr>

                <tr>
                    <td> <input type="checkbox" name="skills[]" value="Communication Skills"> Communication Skills </td>
                </tr>

                <tr>
                    <td> <input type="checkbox" name="skills[]" value="ProblemSolving Abilities"> Problem-solving
                        Abilities </td>
                </tr>

                <tr>
                    <td> <input type="checkbox" name="skills[]" value="Leadership qualities"> Leadership qualities </td>
                </tr>

                <tr>
                    <td> <input type="checkbox" name="skills[]" value="Collaboration Talent"> Collaboration Talent </td>
                </tr>

            </table>

            <br>
            <br>
            <br>
            <button class="class3" type="submit"> Submit </button>
            <button class="class3" type="reset"> Reset </button>
        </fieldset>
    </form>
    <?php
    } catch (PDOException $e) {
        die($e->getMessage());
    }
?>
    <script src="newfile.js" lang="javascript"></script>
</body>
</html>