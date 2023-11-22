<div id="ordersBtn" >
  <h2>Books Details</h2>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>NIK</th>
        <th>Nama Lengkap</th>
        <th>Usia</th>
        <th>Alamat</th>
        <th>Nomor Telepon</th>
        <th>Email</th>
        <th>Tanggal Booking</th>
        <th>Tiket</th>
        <th colspan="2">Action</th>
     </tr>
    </thead>
     <?php
      include_once "../connection.php";
      $sql="SELECT * from tiket_wisata";
      $result=$koneksi-> query($sql);
      
      if ($result-> num_rows > 0){
        while ($row=$result-> fetch_assoc()) {
    ?>
       <tr>
          <td><?=$row["NIK"]?></td>
          <td><?=$row["nama_lengkap"]?></td>
          <td><?=$row["usia"]?></td>
          <td><?=$row["alamat"]?></td>
          <td><?=$row["nomor_telefon"]?></td>
          <td><?=$row["email"]?></td>
          <td><?=$row["tanggal_booking"]?></td>
          <td><?=$row["tiket"]?></td>
          <td><button class="btn btn-primary" style="height:40px" onclick="itemEditForm('<?=$row['NIK']?>')">Edit</button></td>
          <td><button class="btn btn-danger" style="height:40px" onclick="BookingDelete('<?=$row['NIK']?>')">Delete</button></td>

        </tr>
    <?php
            
        }
      }
    ?>
     
  </table>
     <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-secondary" style="height:40px" data-toggle="modal" data-target="#myModal">
    Add Booking
  </button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">New  Booking</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <form  enctype='multipart/form-data' action="./controller/addItemController.php" method="POST">
            <div class="form-group">
              <label for="NIK">NIK:</label>
              <input type="text" class="form-control" name="NIK" required>
            </div>
            <div class="form-group">
              <label for="nama_lengkap">Nama:</label>
              <input type="text" class="form-control" name="nama_lengkap" required>
            </div>
            <div class="form-group">
              <label for="usia">Usia:</label>
              <input type="text" class="form-control" name="usia" required>
            </div>
            <div class="form-group">
              <label for="alamat">Alamat:</label>
              <input type="text" class="form-control" name="alamat" required>
            </div>
            <div class="form-group">
              <label for="nomor_telefon">Nomor telepon:</label>
              <input type="text" class="form-control" name="nomor_telefon" required>
            </div>
            <div class="form-group">
              <label for="email">email:</label>
              <input type="text" class="form-control" name="email" required>
            </div>
            <div class="form-group">
              <label for="tanggal_booking">Tanggal Booking:</label>
              <input type="text" class="form-control" name="tanggal_booking" required>
            </div>
            <div class="form-group">
              <label for="tiket">Tiket:</label>
              <input type="text" class="form-control" name="tiket" required>
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-secondary" name="upload" style="height:40px">Add Booking</button>
            </div>
          </form>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal" style="height:40px">Close</button>
        </div>
      </div>
      
    </div>
  </div>

  
</div>
<!-- Modal
<div class="modal fade" id="viewModal" role="dialog">
    <div class="modal-dialog modal-lg">
      Modal content
      <div class="modal-content">
        <div class="modal-header">
          
          <h4 class="modal-title">Order Details</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="order-view-modal modal-body">
        
        </div>
      </div>-->
    </div><!-- /Modal dialog-->
  </div>
<!-- <script>
     //for view order modal  
    $(document).ready(function(){
      $('.openPopup').on('click',function(){
        var dataURL = $(this).attr('data-href');
    
        $('.order-view-modal').load(dataURL,function(){
          $('#viewModal').modal({show:true});
        });
      });
    });
 </script> --> 