<!DOCTYPE html>
<html>
 <head>
  <title>Webslesson Tutorial | How to use Morris.js chart with PHP & Mysql</title>
    <!--chart start-->
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
    <!--chart stop-->
  
 </head>
 <body>
  <br /><br />
  <div class="container" style="width:900px;">
   <h2 align="center">Morris.js chart with PHP & Mysql</h2>
   <h3 align="center">Last 10 Years Profit, Purchase and Sale Data</h3>   
   <br /><br />
<?php
    include 'connection.php';
    $sql="SELECT * FROM members WHERE email='gerdavid7@gmail.com'" ;
   $query=$conn->query($sql);
   $row=$query->fetch_assoc();
   $user= $row['username'];
   $member=$row['memberID'];
$sql4="SELECT * FROM reports WHERE memberid='$member' ORDER BY id " ;
   $query4=$conn->query($sql4);
   $chart_data = '';
  $num=mysqli_num_rows($query4);

while($row4=$query4->fetch_assoc())
{
 $chart_data .= "{ date:'".$row4["date"]."', amt:".$num."},";
}
//$chart_data = substr($chart_data, 0, -2);
?>
      <div id="chart"></div>
<script>
Morris.Bar({
 element : 'chart',
 data:[<?php echo $chart_data; ?>],
 xkey:'date',
 ykeys:['amt'],
 labels:['amt'],
 hideHover:'auto',
 stacked:true
});
</script>
  </div>
 </body>
</html>
