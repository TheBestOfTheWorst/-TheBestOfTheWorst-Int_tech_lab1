<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Лабораторная работа 1</title>
</head>

<body>

<form method="post">
<p>Выбрать тип центрального процессора:<br>
<select name="procTypes">
<?php
    include 'connection.php';

    $stmt = $db->query("SELECT name FROM Processors");
    while ($proc = $stmt->fetchColumn())
        echo "<option>$proc</option>";
?>
</select><br>

<p>Выбрать установленное ПО:<br>
<select name="softTypes">
<?php
    include 'connection.php';

    $stmt = $db->query("SELECT name FROM Software");
    while ($soft = $stmt->fetchColumn())
        echo "<option>$soft</option>";
?>
</select><br>

<p>Выбрать пункт задания для выполнения:<br>
<select name="mainSelect">
    <option>Task 1</option>;
    <option>Task 2</option>;
    <option>Task 3</option>;
</select>
<br>
  <p><input type="submit" name="SubmButton" value="Выполнить запрос">
 </form>
</body> 
</html>

<?php
if(isset($_POST['SubmButton'])){ // Check if form was submitted
    switch($_POST['mainSelect']) {
    case "Task 1":
        include 'processor.php'; break;
    case "Task 2":
        include 'software.php'; break;
    case "Task 3":
        include 'guarantee.php'; break;
    }
}
?>