<?php
if (isset($_REQUEST['submit'])) {
    $bloodGroup = $_REQUEST['bloodGroup'];
    echo $bloodGroup . ' is selected';
}
?>

<html>

<head>
    <title>Blood Group</title>
</head>

<body>
    <form method="get" action="#">
        Blood Group
        <select name="bloodGroup">
            <option value="A+">A+</option>
            <option value="A-">A-</option>
            <option value="B+">B+</option>
            <option value="B-">B-</option>
            <option value="O+">O+</option>
            <option value="O-">O-</option>
            <option value="AB+">AB+</option>
            <option value="AB-">AB-</option>
        </select>
        <hr>
        <input type="submit" name="submit" value="Submit">
    </form>
</body>

</html>