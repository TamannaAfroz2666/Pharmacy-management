

<?php $__env->startSection('content'); ?>
  <!-- Orders -->
  <div class="orders">
    <div class="row justify-content-center">
      <div class="col-xl-4">
        <div class="card">
          <div class="card-body">
            <h4 class="box-title">Disease Name </h4>
          </div>
          <div class="card-body--">
            <div class="table-stats order-table ov-h">
              <table class="table ">
                <thead>
                  <tr>
                    <th class="serial">Serial</th>
                    <th>Disease Name</th>

                  </tr>
                </thead>
                <tbody>
                  <?php
                    $serail = 1;
                  ?>
                  <?php $__currentLoopData = $diseases; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $disease): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                      <td class="serial"><?php echo e($serail); ?>.</td>
                      <td>  <span class="name"><?php echo e($disease->disease_name); ?></span> </td>
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

<?php echo $__env->make('backend.adminpanel', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pharmacy\resources\views/backend/disease/disease_show.blade.php ENDPATH**/ ?>