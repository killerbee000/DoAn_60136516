<?php 

$mang_can = array("Quý","Giáp", "Ất", "Bính", "Đinh", "Mậu", "Kỷ", "Canh", "Tân", "Nhâm");
$mang_chi = array("Hợi", "Tý", "Sửu", "Dần", "Mão", "Thìn", "Tỵ", "Ngọ", "Mùi", "Thân", "Dậu", "Tuẩt");
$mang_hinh = array("hoi.png", "tt.png", "suu.png", "dan.png", "mao.png", "thin.png", "ty.png", "ngo.png", "mui.png", "than.png", "dau.png", "tuat.png");

if(isset($_POST['submit'])){
   $nam = $_POST['input'];

   if(is_numeric($nam) && $nam > 0  && $nam >= 3){
      $nam -= 3;
      $can = $nam % 10;
      $chi = $nam % 12;
      $nam_al = $mang_can[$can].' '.$mang_chi[$chi];
      $hinh = $mang_hinh[$chi];
   } else {
      header('location: 7_mang_nam_am_lich.php');
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
            <td style="padding: 0px 100px; color: white" colspan="3" bgcolor="blue">
               <h2>TÍNH NĂM ÂM LỊCH</h2>
            </td>
         </tr>  
         <tr>
            <td align="center">Năm dương lịch</td>            
            <td></td>
            <td align="center">Năm âm lịch</td>     
         </tr>     
         <tr>
            <td align="center">
               <input type="text" required name="input" value="<?php echo isset($_POST['submit'])? $_POST['input'] : ''; ?>" placeholder="Nhập vào năm ...">
            </td>
            <td align="center">
               <input type="submit" name="submit" value="=>">
            </td>
            <td align="center">
               <input type="text" readonly value="<?php echo isset($nam_al) ? $nam_al : ''; ?>" style="color: red">
            </td>
         </tr>  
         <tr>
            <td align="center" colspan="3">
               <img src="./7_image/<?php echo isset($hinh) ? $hinh : ''?>" alt="">
            </td>
         </tr>         
      </table>
   </form>
</body>

</html>