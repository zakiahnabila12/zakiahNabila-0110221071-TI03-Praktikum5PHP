<?php
require_once 'class_account.php';

$ac1 = new Account("C001",6000000);
$ac2 = new Account("C002",5350000);
$ac3 = new Account("C003",2500000);

$ac1->cetak();
$ac1->deposit(1000000);
echo '<br/> Menabung : 1000000<br/>';
$ac1->cetak();
echo'<hr>';

$ac1->cetak();
$ac1->witdrawl(1500000);
echo '<br/>Transfer ke C003 : 1500000<br/>';
$ac1->cetak();
echo '<hr>';

$ac1->cetak();
$ac1->witdrawl(500000);
echo '<br/>Transfer ke C002 : 500000<br/>';
$ac1->cetak();
echo '<hr>';

echo'<h2/></h2>';
$ac2->cetak();
$ac2->deposit(500000);
echo '<br/> Terima Uang dari C001 : 500000<br/>';
$ac2->cetak();
echo'<hr>';

echo'<h2/></h2>';
$ac3->cetak();
$ac3->deposit(1500000);
echo '<br/> Terima Uang dari C001 : 1500000<br/>';
$ac3->cetak();
echo'<hr>';

echo'<h2/></h2>';
$ac2->cetak();
$ac2->witdrawl(2500000);
echo '<br/> Tarik Saldo : 2500000<br/>';
$ac2->cetak();
echo'<hr>';

?>