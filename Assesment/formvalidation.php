<!DOCTYPE html>
<html>
    <head>
         <style>
        .error {
            color: #fd0000ff;
        }
       
    </style>
    </head>

    <body>
        <?php
        $nameErr = $emailErr = $dobErr = $genderErr = $degreeErr = $bloodgroupErr = "";
        $name=$email=$dob=$gender=$degree = $bloodgroup = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST"){
        
        if (isset($_POST["submit1"])){
        if (empty($_POST["name"])){
                $nameErr = "Name is required";
        }
        else {
            $name = test_input($_POST["name"]);
            if (!preg_match("/^[a-zA-Z-' ]*$/", $name)){
                $nameErr = "Only letters and white space is allowed";
            }
        }}

       if (isset($_POST["submit2"])){
        if (empty($_POST["email"])){
        $emailErr = "Email is Required";
         }
        else{
        $email = test_input($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $emailErr = "Invalid email format";}
         }}

         if (isset($_POST["submit3"])){

       if (empty($_POST["dd"]) || empty($_POST["mm"]) || empty($_POST["yyyy"])) {
            $dobErr = "Date of Birth is required";
          }
        else {
           $dd = $_POST["dd"];
           $mm = $_POST["mm"];
        $yyyy = $_POST["yyyy"];

    if ($dd < 1 || $dd > 31 || $mm < 1 || $mm > 12 || $yyyy < 1900 || $yyyy > 2025) {
        $dobErr = "Invalid Date of Birth";
    }
}}

        if (isset($_POST["submit4"])){
        if (empty($_POST["gender"])) {
          $genderErr = "At least select one";
        } else {
          $gender = test_input($_POST["gender"]);
        }
    }
       if (isset($_POST["submit5"])){
if (!isset($_POST["degree"]) || !is_array($_POST["degree"]) || count($_POST["degree"]) < 2) {
            $degreeErr = "Select at least 2 degrees";
        }
        }

        if (isset($_POST["submit6"])){
            if(empty ($_POST["bloodgroup"]) ){
                $bloodgroupErr = "Must be selected";}
                else{
                    $bloodgroup = test_input($_POST["bloodgroup"]);}
                }
}
        function test_input($data){
            $data = trim ($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);

        return $data;
        }
        ?>

    <h2>PHP Form Validation</h2>
    <p><span class="error">* required field</span></p>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        Name : <input type = "text" name = "name">
        <span class = "error">*
            <?php echo $nameErr;?>
        </span><br><br>
        <input type="submit" name="submit1" value="Submit">
        <br><br><hr></form>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
  
        Email : <input type = "email" name = "email">
        <span class = "error">*
            <?php echo $emailErr;?>
        </span><br><br>
        <input type="submit" name="submit2" value="Submit"><br><br><hr></form>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        Date Of Birth : dd: <input type="text" name="dd" size="2">
                        mm: <input type="text" name="mm" size="2">
                    yyyy: <input type="text" name="yyyy" size="4">
        <span class = "error">*
            <?php echo $dobErr; ?>
        </span><br><br>
        <input type="submit" name="submit3" value="Submit">
        
        <br><br><hr></form>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
         Gender:
        <input type="radio" name="gender" value="female">Female
        <input type="radio" name="gender" value="male">Male
        <input type="radio" name="gender" value="other">Other
        <span class="error">*
            <?php echo $genderErr;?>
        </span> <br>     <br>
        <input type="submit" name="submit4" value="Submit">
        <br><br><hr></form>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        Degree :
        <input type = "checkbox" name="degree[]" value="ssc">SSC
        <input type="checkbox" name="degree[]" value="hsc">HSC
        <input type="checkbox" name="degree[]" value="bsc">BSc
        <input type="checkbox" name="degree[]" value="msc">MSc
        <span class="error">*
            <?php echo $degreeErr;?>
        </span><br><br>
        <input type="submit" name="submit5" value="Submit">
        <br><br><hr></form>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

        Blood Group :
        <select name="bloodgroup">
            <option value="op1">B+</option>
            <option value="op2">B-</option>
            <option value="op3">O+</option>
            <option value="op4">O-</option>
            <option value="op5">AB+</option>
            <option value="op6">AB-</option>

        </select>
        <span class = "error">*
            <?php echo $bloodgroupErr;?>
        </span><br><br>
    <input type="submit" name="submit6" value="Submit"><br><br><hr></form>




</body>
</html>