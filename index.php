<form action="index.php" method="get">
    <input type="text" name="dulieu">
    <input type="submit">
</form>



<?php  
// đây là để in ra màn hình
  echo"thành vinh <br> <h1>Thành Vinh</h1>";


//   đây là cách đặt tên biến
  $a="vinh <br>" ;
  $b= "quỳnh";
  echo $a;
  echo $b;
// đây là cách đặt tên hằng
// define( tên hằng , giá trị , true( đề ko phân biệt in hoa))
 define("hang","10");
 echo hang;



// phân biệt "" và '' 
// lúc echo "" thì nó sẽ nhận dạng tên biến  , còn '' ko nhận dạng tên biến 


$c=5;
if($a>1) echo"đúng ";

echo "<br>". "nguyễn thành vinh";

// hàm strlen(): lấy độ dài của chuỗi có dấu thì nó sẽ tính nhìu hơn tý
echo strlen("nguyễn thành vinh");

// hàm str_word_count đếm xem có bao nhiu từ ( not ký tự )
echo str_word_count(" nguyen thanh vinh");

//  hàm strrev : dùng để đảo ngược chuỗi( như gương , đảo ngược như gương)
echo strrev("nguyen thanh vinh");

// hàm strpos : dùng để tìm từ . nó sẽ trả về vị trí
echo strpos("nguyen thanh vinh","vinh");
//  hàm str_replace : dùng để thay trong chuỗi

echo str_replace("vinh","VINH","nguyen thanh vinh");


//  hàm var_dump(): dùng để ktra kiểu dử liệu nó là j .
$a=5;
var_dump($a);


// vòng lặp for()
for( $i=0;$i<=5;$i++) echo $i;

// array 
$mang= array("vinh ", " binh",5);
foreach($mang as $value){
  echo $value ."<br>";
}

echo "<br>";


for($i=0;$i<count($mang);$i++)
{
  echo $mang[$i];
}


// hàm isset dùng để ktra xem biến có tòn tại hay ko 
 
 if(isset($vi)) echo"1"."<br>";
 else echo"0"."<br>";




//   phương thức get và post 

 echo $_REQUEST["dulieu"];




//   gộp code từ file xuly.php 

 require "xuly.php";

// require_once cái này là nó chỉ hiển thị đúng 1 lần . có chữ once nghĩa là đã gộp r thì ko làm lại nx
 require_once "xuly.php";
?>