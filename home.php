<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Tajawal&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body dir="rtl">
    <?php
//الاتصال بقاعدة البيانات 
$host='localhost';
$user='root';
$pass='';
$db='student';

$conn = mysqli_connect($host,$user,$pass,$db);
$req = mysqli_query($conn,"SELECT * FROM student1");

#button variable -->
$id='';
$name='';
$address='';
if(isset($_POST['id'])){
    $id=$_POST['id'];
}
if(isset($_POST['name'])){
    $name=$_POST['name'];
}
if(isset($_POST['address'])){
    $address= $_POST['address'];
}
$sqls='';
if(isset($_POST['add'])){
    $sqls = "insert into student1 value ($id,'$name','$address')";
    mysqli_query($conn, $sqls);
    echo "inset";
    header("location: home.php");
}
if(isset($_POST['del'])){
    $sqls = "delete from student1 where name = '$name'";
    mysqli_query($conn, $sqls);
    header("location: home.php");
}
?>
    <div class="mother">
        <form action="" method="POST">
            <!-- لوحة التحكم -->
            <aside>
                <div id="div">
                    <img src="pic/student.png" alt="لوقو الموقع" srcset="" width="200px">
                    <h3>لوحة المدير</h3>
                    <label>: رقم الطالب </label><br>
                    <input type="text" name="id" id="id"><br/>
                    <label>  : اسم الطالب</label><br>
                    <input type="text" name="name" id="name"><br/>
                    <label> : عنوان الطالب</label><br>
                    <input type="text" name="address" id="address"><br/>
                    <button name="add">اضافة طالب</button>
                    <button name="del">حذف طالب</button>
                </div> 
            </aside>
            <!--  عرض بيانات الطلاب  -->
            <main>
                <table class="tbl">
                    <tr>
                        <th>الرقم التسلسلي</th>
                        <th>اسم الطالب</th>
                        <th>عنوان الطالب</th>
                    </tr>
                    <?php
                    while ($row = mysqli_fetch_array($req)){
                        echo "<tr>";
                        echo "<td>".$row['id']."</td>";
                        echo "<td>".$row['name']."</td>";
                        echo "<td>".$row['address']."</td>";
                        echo "</tr>";   
                    }
                    ?>
                </table>
            </main>
        </form>
    </div>
</body>
</html>