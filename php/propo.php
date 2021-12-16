<?php
$data = yaml_parse_file('data/propo.yaml');

     echo "<section id='propo'>";
     echo"<h1>A Propos</h1>"	;
          echo $data["accroche"]."<br>";
          echo $data["tous"]."<br>";
          echo "<img id='photo2'src='https://upload.wikimedia.org/wikipedia/commons/thumb/8/89/USMC-050716-M-1837P-001.jpg/280px-USMC-050716-M-1837P-001.jpg'>";
          echo "<img id='photo2'src='https://images2.minutemediacdn.com/image/upload/c_crop,w_3051,h_1716,x_0,y_120/c_fill,w_720,ar_16:9,f_auto,q_auto,g_auto/images/GettyImages/mmsport/90min_fr_international_web/01fpwqtjd30mmq3m5fw3.jpg'>";
          echo "<img id='photo2'src='https://cdn.shopify.com/s/files/1/2693/0654/files/Thousand_Sunny_1024x1024.png?v=1604844572'>";
     echo"</section>";


?>   