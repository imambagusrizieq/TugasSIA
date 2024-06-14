





















$exec = mysqli_query($koneksi, $query);
24. $data = mysqli_fetch_array($exec);
25. if(password_verify($password, $data['password'])){
26. if($password_baru == $password_ulang){
27. $password = password_hash($password_baru, PASSWORD_BCRYPT);
28. $query = "UPDATE tbl_pengguna SET password='$password', 
nama_lengkap='$nama_lengkap', email='$email' WHERE username='$username'";
29. $exec = mysqli_query($koneksi, $query);
30. if($exec){
31. $_SESSION['pesan'] = "Data profile telah diperbaharui";
32. header('location:../../dashboard.php?modul=profile');
33. }
34. }else{
35. $_SESSION['pesan'] = "Password baru tidak sesuai";
36. header('location:../../dashboard.php?modul=profile');
37. }
38. }else{
39. $_SESSION['pesan'] = "Password lama tidak sesuai";
40. header('location:../../dashboard.php?modul=profile');
41. }
42. }
43. }else{
44. header('location:../../index.php');
45. }
46. ?>
