<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="mother">
    <form method="POST">
    <aside>
        <div class="div">
        <img src="pic/student.png" alt="لوقو الموقع" srcset="" width="200px">
        <h3>لوحة المدير</h3>
            <label>  رقم الطالب   </label><br>
            <input type="text" name="id" id="id"><br>
            <label>  اسم الطالب   </label><br>
            <input type="text" name="name" id="name"><br>
            <label>  عنوان الطالب </label><br>
            <input type="text" name="address" id="address"><br>
            <button name="add">اضافة طالب</button>
            <button name="add">حذف طالب</button>
        </div>
    </aside>
    </form>
        <main>
            <table>
                <tr>
                    <th>عنوان الطالب</th>
                    <th>اسم الطالب</th>
                    <th>الرقم التسلسلي</th>
                </tr>
            </table>
        </main>
    </div>
</body>
</html>