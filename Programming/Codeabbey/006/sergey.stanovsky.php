<!-- Author sergey.stanovsky -->
<?php
$myArr=[[5947072, 439],
[-9110202, 4925036],
[12423, 1402],
[-1791092, 349813],
[-4059918, -1354347],
[71378, 3939979],
[7211, 1050],
[7728899, 101],
[1110818, 913],
[7168298, 957],
[18209, 1210],
[-369998, 512816],
[-6656012, -4223439],
[13137, 1180],
[-7074547, 2851055]];
for ($i=0;$i<15;$i++){
  $devide = $myArr[$i][0]/$myArr[$i][1];
   if(abs($devide-floor($devide))<0.5) $rezult [$i] = floor ($devide);
   else $rezult [$i] = ceil ($devide);
   echo "$rezult[$i] ";
   }
