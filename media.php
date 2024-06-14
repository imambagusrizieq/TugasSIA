<?php
2. if(!isset($_GET['modul'])){
3. include_once('modul/home/index.php');
4. }else{
5. if($_GET['modul']=="transaksi"){
6. include_once('modul/transaksi/index.php');
7. }elseif($_GET['modul']=="akun"){
8. include_once('modul/akun/index.php');
9. }elseif($_GET['modul']=="pembelian"){
10. include_once('modul/pembelian/index.php');
11. }elseif($_GET['modul']=="pembayaran"){
12. include_once('modul/pembayaran/index.php');
13. }elseif($_GET['modul']=="penjualan"){
14. include_once('modul/penjualan/index.php');
15. }elseif($_GET['modul']=="pelanggan"){
16. include_once('modul/pelanggan/index.php');
17. }elseif($_GET['modul']=="barang"){
18. include_once('modul/barang/index.php');
19. }elseif($_GET['modul']=="suplier"){
20. include_once('modul/suplier/index.php');
21. }elseif($_GET['modul']=="pengguna"){
22. include_once('modul/pengguna/index.php');
23. }elseif($_GET['modul']=="jurnal"){
24. include_once('modul/jurnal/index.php');
25. }elseif($_GET['modul']=="profile"){
26. include_once('modul/profile/index.php');
27. }else{
28. ?>
29.     <div class="alert alert-info">
30.         <strong>Perhatian : </strong>
31.         Modul yang anda request tidak ada!!!
32.         </div>
33.       <?php
34.     }
35.   }
36.?>