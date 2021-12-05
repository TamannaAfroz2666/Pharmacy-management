
<?php $__env->startSection('content'); ?>
  <!-- Orders -->
  <div class="orders">
    <div class="row justify-content-center">
      <div class="col-xl-10">
        <div class="card">
          <div class="card-body">
            <h4 class="box-title">Medicine List </h4>
          </div>
          <div class="card-body--">
            <div class="table-stats order-table ov-h">
              <table class="table " id="example">
                <thead>
                  <tr>
                    <th class="serial">Serial</th>
                    <th>Medicine Name</th>
                    <th>Medicine Quantity</th>
                    <th>input</th>
                    <th>Add</th>

                  </tr>
                </thead>
                <tbody>
                  <?php
                    $serail = 1;
                  ?>
                  <?php $__currentLoopData = $medicines; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $medicine): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                      <td class="serial"><?php echo e($serail); ?>.</td>
                      <td>  <span class="name"><?php echo e($medicine->medicine_name); ?></span> </td>
                      <td>  <span class="name"><?php echo e($medicine->medicine_quantity); ?></span> </td>
                      <td>  <span class="name"><input type="text" name="" id="<?php echo e($medicine->id); ?>"> </span> </td>

                      <td>  <span class="name"><button type="submit" name="button" class="btn btn-warning add_button" value="<?php echo e($medicine->id); ?>">Add</button></span> </td>


                    </tr>
                    <?php
                      $serail++;
                    ?>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                </tbody>
              </table>

            </div> <!-- /.table-stats -->
          </div>
        </div> <!-- /.card -->
      </div>  <!-- /.col-lg-8 -->


    </div>
  </div>
  <!-- /.orders -->
<?php $__env->stopSection(); ?>


<?php $__env->startSection('footer_scripts'); ?>
  <script>
    $(document).ready(function(){
      $('.add_button').click(function(){
       var idwehave = $(this).val();
       var quantity = $('#'+idwehave).val();
      // var price_from_table = $(this).closest('tr').find('.price_from_table').html();

       if(quantity==''){
         alert("Kiccu Nai!!");
       }
       else{
         var link = '/addmedicine/'+idwehave+'/'+quantity;
         window.location.href = link;
       }
      });
    });
    
  </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.adminpanel', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pharmacy\resources\views/backend/sells/sells.blade.php ENDPATH**/ ?>