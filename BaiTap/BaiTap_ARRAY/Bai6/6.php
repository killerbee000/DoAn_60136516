<?php

function hoanVi($arr, $first, $second)
{
   $temp = $arr[$first];
   $arr[$first] = $arr[$second];
   $arr[$second] = $temp;

   return $arr;
}

function sapTang($arr)
{
   for ($i = 0; $i < count($arr) - 1; $i++) {
      for ($j = $i + 1; $j < count($arr); $j++) {
         if ($arr[$j] < $arr[$i]) {
            $arr = hoanVi($arr, $i, $j);
         }
      }
   }
    
   return $arr;
}

function sapGiam($arr)
{
   for ($i = 0; $i < count($arr) - 1; $i++) {
      for ($j = $i + 1; $j < count($arr); $j++) {
         if ($arr[$j] > $arr[$i]) {
            $arr = hoanVi($arr, $i, $j);
         }
      }
   }
    
   return $arr;
}

if(isset($_POST['submit'])){
   $arr = explode(',', $_POST['input']);

   if(count($arr) > 0){
      $tang = sapTang($arr);
      $giam = sapGiam($arr);
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
      <table align="center" bgcolor="#b1dde0">
         <tr>
            <td style="padding: 0px 200px; color: white" colspan="2" bgcolor="#097980">
               <h2>SẮP XẾP MẢNG</h2>
            </td>
         </tr>
         <tr>
            <td>Nhập mảng:</td>
            <td>
               <input type="text" required placeholder="Nhập vào mảng..." name="input" value="<?php if (isset($_POST['submit'])) echo $_POST['input']  ?>" style="width: 90%;">
               <b style="color:red">(*)</b>
            </td>
         </tr>
         <tr>
            <td></td>
            <td>
               <input type="submit" name="submit" value="Sắp xếp tăng/giảm" style="padding: 0 20px;">
            </td>
         </tr>
         <tr>
            <td>
               <b style="color:red">Sau khi sắp xếp</b>
            </td>
            <td></td>
         </tr>
         <tr>
            <td>Tăng dần:</td>
            <td>
               <input type="text" readonly value="<?php if(isset($tang)) foreach($tang as $i) echo $i.' '; ?>" style="width: 90%; background-color: #cbe5e7; border: 1px solid black">
            </td>
         </tr>
         <tr>
            <td>Giảm dần:</td>
            <td>
               <input type="text" readonly value="<?php if(isset($giam)) foreach($giam as $i) echo $i.' '; ?>" style="width: 90%; background-color: #cbe5e7; border: 1px solid black">
            </td>
         </tr>
         <tr>
            <td colspan="2" align="center">
               <b style="color: red">(*)</b> Các số được nhập cách nhau bằng dấu ","
            </td>
         </tr>
      </table>
   </form>
</body>

</html>