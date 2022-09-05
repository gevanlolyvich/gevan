<?php
require 'function.php';
?>*<?php
$ambilnama= mysqli_query($conn,"select * from datauser");
while($data=mysqli_fetch_array($ambilnama)){$nama = $data['idcard'];?><?=$nama;?>,<?php
};
?>
#&<?php
$ambilid = mysqli_query($conn,"select * from datauser");
while($dataid=mysqli_fetch_array($ambilid)){$namaid = $dataid['user'];?><?=$namaid;?>,<?php
};
?>$

