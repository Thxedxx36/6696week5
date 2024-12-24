<!DOCTYPE html>
<html lang="en">
<head>
    <!-- เพิ่มBootstrap -->
    <!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Athiti:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">

<style>
    .athiti-regular {
  font-family: "Athiti", serif;
  font-weight: 400;
  font-style: normal;
}
</style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>สร้างฟอร์ม Bootstrap เขียนโปรแกรม</title>
</head>

<body>
    <h1>โปรแกรมคำนวณ และ เงื่อนไข</h1>
    
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">คะแนนสอบกลางภาค</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" id="inputEmail3"name="score1">
    </div>
  </div>
  <div class="row mb-3">
    <label for="inputPassword3" class="col-sm-2 col-form-label">คะแนนสอบปลายภาค</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" id="inputPassword3"name="score2">
    </div>
  </div>
  
  <button type="submit" class="btn btn-primary">คำนวณคะแนนรวม</button>
  <button type="reset" class="btn btn-danger">ยกเลิก</button>

</form>
    
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $s1=$_POST['score1'];
    $s2=$_POST['score2'];
    $sum=$s1+$s2;
   echo "<br><br> <h3>คุณได้คะแนนรวมเท่ากับ $sum </h3> <br><br>";
   $t = date("H");

if ($t < "50") {
  echo "<h1>สอบผ่านนะจ๊ะ</h1><br>";
} else {
  echo "<h1>สอบตกนะคับบ</h1><br>";
}

   echo "<div class='alert alert-success'>
         <strong>คำนวณสำเร็จ!</strong> ผลคะแนนที่ได้รับ
         </div>";
}
?>
    
</body>
<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</html>