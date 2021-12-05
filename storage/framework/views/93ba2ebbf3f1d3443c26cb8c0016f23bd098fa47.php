

<?php $__env->startSection('content'); ?>
  <!-- Orders -->
  <div class="orders">
    <div class="row">
      <div class="col-xl-12">
        <div class="card">
          <div class="card-body">
            <h4 class="box-title">Medicine List </h4>
          </div>
          <div class="card-body--">
            <div class="table-stats order-table ov-h">
              <table class="table ">
                <thead>
                  <tr>
                    <th class="serial">Serial</th>
                    <th class="avatar">Image</th>
                    <th>Medicine Name</th>
                    <th>Medicine Quantity</th>
                    <th>Description</th>
                    <th>Company Name</th>
                    <th>Disease Name</th>
                    <th>reserve Name</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    $serail = 1;
                  ?>
                  <?php $__currentLoopData = $medicines; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $medicine): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                      <td class="serial"><?php echo e($serail); ?>.</td>
                      <td class="avatar">
                        <div class="round-img">
                          <a href="#"><img class="rounded-circle" src="<?php echo e(asset('/storage')); ?>/<?php echo e($medicine->medicine_image); ?>" alt=""></a>
                        </div>
                      </td>

                      <td>  <span class="name"><?php echo e($medicine->medicine_name); ?></span> </td>
                      <td>  <span class="name"><?php echo e($medicine->medicine_quantity); ?></span> </td>
                      <td> <span class="name"><?php echo e($medicine->medicine_description); ?></span> </td>
                      <td><span class="name"><?php echo e($medicine->company_id); ?></span></td>
                      
                      <td><span class="name"><?php echo e($medicine->disease_id); ?></span></td>
                      <td>
                        <span class="badge badge-complete"><?php echo e($medicine->medicine_name); ?></span>
                      </td>
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

<?php echo $__env->make('backend.adminpanel', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pharmacy\resources\views/backend/medicine/medicine_show.blade.php ENDPATH**/ ?>