<?php
$db=mysqli_connect("127.0.0.1","root","");
mysqli_select_db($db,"datepersoane");
if (isset($_POST['id'])) {
    $id = $_POST['id'];
    echo "The ID you entered is: " . $id;
}
//$id = $_GET['id'];
$sql="SELECT * FROM jobs where id='$id' ;";

$result= mysqli_query($db,$sql);?>
<form method="post" action="update.php">
    <input type="hidden" name="titlu" id="titlu" value="<?php echo $result['titlu']; ?>"><br>
    Title: <input type="text" name="locatie" value="<?php echo $result['locatie']; ?>"><br>
    Description: <textarea name="descriere"><?php echo $result['descriere']; ?></textarea><br>
    Type: <input type="text" name="tip_job" value="<?php echo $result['tip_job']; ?>"><br>
    <!--        Salary: <input type="text" name="id" value="--><?php //echo $result['id']; ?><!--"><br>-->
    <input type="submit" name="submit" value="Update Job">
</form>
?>