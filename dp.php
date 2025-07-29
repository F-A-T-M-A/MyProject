
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
            {
            direction: rtl;
            font-family: Arial, sans-serif;
            
        }
        label, input {
            display: block;
            margin: 10px 0;
        }
        
    </style>
</head>
<body>
<form action="" method="post">
        <label>رقم المشترك</label>
        <input type="text" name="number" required>

        <label>اسم المشترك</label>
        <input type="text" name="name" required>

        <label>سعر الفاتورة الحالية</label>
        <input type="number" name="pri1" required>

        <label>سعر الفاتورة السابقة</label>
        <input type="number" name="pri2" required>

        <input type="submit" value="ارسال" name="send">
        <input type="submit" value="طباعة" name="print">
    </form>
    <?php
    if(isset($_POST["send"]))
    {
        echo"تم ارسال البايانات";
    }
    if (isset($_POST['print'])) {
       $a=htmlspecialchars($_POST["number"]);
       $b=htmlspecialchars($_POST["name"]);
       $c=htmlspecialchars($_POST['pri1']);
       $d=htmlspecialchars($_POST["pri2"]);
       $z = $c - $d; // حساب فارق السعر

       echo"<p> تفاصيل الفاتوره</p>"."<br>";
       echo" رقم المشترك:".$a ."<br>";
       echo"اسم المشترك".$b ."<br>";
       echo" السعر الاول ".$c."<br>";
       echo" السعر الباقي".$d."<br>";
       echo" فارق السعر".$z."<br>";

       echo '<h2>تفاصيل الفاتورة:</h2>';
       echo '<p><b>رقم المشترك:</b> ' . $a . '</p>';
       echo '<p><b>اسم المشترك:</b> ' . $b . '</p>';
       echo '<p><b>سعر الفاتورة الحالية:</b> ' . $c . '</p>';
       echo '<p><b>سعر الفاتورة السابقة:</b> ' . $d . '</p>';
       echo '<p><b>فارق السعر:</b> ' . $z . '</p>';
    }
?>
</body>
</html>