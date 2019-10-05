 <?php
 include  'config.php';

 $count_car = array(); // ตัวแปรแกน x
 $date = array(); //ตัวแปรแกน y
 $chart = 'SELECT  count(car_num),date from work group by date;'
 $result = mysqli_query($connect, $chart);
 while($row=mysqli_fetch_array($result)) {
 array_push($date,$row[date]);
 array_push($count_car,$row[car_num]);
 }
 

 mysqli_close($connect);
        
 ?> 
