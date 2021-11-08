<?php

function thayThe($arr, $old, $new)
{
   for ($i = 0; $i < count($arr); $i++) {
      if ($arr[$i] == $old) {
         $arr[$i] = $new;
      }
   }

   return $arr;
}

if(isset($_POST['submit'])){
   $arr = explode(',', $_POST['input']);
   $oldVal = $_POST['oldVal'];
   $newVal = $_POST['newVal'];

   if(!is_numeric($oldVal) || !is_numeric($newVal) || count($arr) == 0) {
      header('location: 5_mang_thay_the.php');
   } else {
      $newArr = thayThe($arr, $oldVal, $newVal);
   }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>

<body>
   <form method="post">
      <table align="center">
         <tr>
            <td colspan="2" bgcolor="#61176f" style="color: white; padding: 0px 200px">
               <h2>THAY THẾ</h2>
            </td>
         </tr>
         <tr>
            <td bgcolor="#f4bef2">Nhập vào số phần tử: </td>
            <td bgcolor="#f4bef2"><input style="width: 90%" type="text" name="input" value="<?php echo isset($arr) ? $_POST['input'] : ''; ?>" required></td>
         </tr>
         <tr>
            <td bgcolor="#f4bef2">Giá trị cần thay thế: </td>
            <td bgcolor="#f4bef2"><input style="width: 40%" type="text" name="oldVal" value="<?php echo isset($oldVal) ? $oldVal : ''; ?>" required></td>
         </tr>
         <tr>
            <td bgcolor="#f4bef2">Giá trị thay thế: </td>
            <td bgcolor="#f4bef2"><input style="width: 40%" type="text" name="newVal" value="<?php echo isset($newVal) ? $newVal : ''; ?>" required></td>
         </tr>
         <tr>
            <td bgcolor="#f4bef2"></td>
            <td bgcolor="#f4bef2"><input style="width: 30%;" type="submit" name="submit" value="Thay thế"></td>
         </tr>
         <tr>
            <td>Mảng cũ:</td>
            <td><input type="text" value="<?php if(isset($arr)) foreach($arr as $i) echo $i.' '; ?>" readonly style="width: 90%; background-color:pink; border: solid 1px"></td>
         </tr>
         <tr>
            <td>Mảng mới:</td>
            <td><input type="text" value="<?php if(isset($newArr)) foreach($newArr as $i) echo $i.' '; ?>" readonly style="width: 90%; background-color:pink; border: solid 1px"></td>
         </tr>
         <tr>
            <td colspan="2" align="center">
               (<b style="color: red">Ghi chú:</b> Các phần tử trong mảng sẽ cách nhau bằng dấu ",")
            </td>
         </tr>
      </table>
   </form>
</body>

</html>