<div >
  <h2>All Users</h2>
  <table class="table ">
    <thead>
      <tr>
        <th class="text-center">S.N.</th>
        <th class="text-center">Name</th>
        <th class="text-center">Email</th>
        <th class="text-center">Registration Date</th>
      </tr>
    </thead>
    <?php
      include_once "../connection.php";
      $sql="SELECT Nama, Email, RegistrationDate from user";
      $result=$koneksi-> query($sql);
      $count=1;
      if ($result-> num_rows > 0){
        while ($row=$result-> fetch_assoc()) {
           
    ?>
    <tr>
      <td><?=$count?></td>
      <td><?=$row["Nama"]?></td>
      <td><?=$row["Email"]?></td>
      <td><?=$row["RegistrationDate"]?></td>
    </tr>
    <?php
            $count=$count+1;
           
        }
    }
    ?>
  </table>