


<?php $__env->startSection('content'); ?>
  <div class="content">
    <!-- Animated -->
    <div class="animated fadeIn">


      <!-- All Information  -->
      <div class="row justify-content-center">
        <div class="col-md-6">
          <div class="card">
            <div class="card-body">
              <h1 class="text-center">Medicine Add</h1>
              <form  action="<?php echo e(route('medicine_create')); ?>" method="post" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <div class="form-group">
                  <label for="medicine_name">Medicine Name</label>
                  <input type="text" class="form-control" id="medicine_name"  placeholder="Enter Medicine Name" name="medicine_name">
                </div>
                <div class="form-group">
                  <label for="medicine_quantity">Medicine Quantity</label>
                  <input type="text" class="form-control" id="medicine_quantity"  placeholder="Enter Medicine Quantity" name="medicine_quantity">
                </div>
                <div class="form-group">
                  <label for="medicine_description">Medicine Description(optional)</label>
                  <input type="text" class="form-control" id="medicine_description"  placeholder="Enter Medicine Description" name="medicine_description">
                </div>
                <div class="form-group">
                  <label for="company_id">Company Name</label>
                  <select class="form-control" name="company_id">
                    <option value="">---select one---</option>
                    <?php $__currentLoopData = $companies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $company): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <option value="<?php echo e($company->id); ?>"><?php echo e($company->company_name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </select>
                  
                </div>
                <div class="form-group">
                  <label for="disease_id">Disease Name</label>
                  <select class="form-control js-example-basic-single" name="disease_id">
                    <option value="">---select one---</option>
                    <?php $__currentLoopData = $diseases; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $disease): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <option value="<?php echo e($disease->id); ?>"><?php echo e($disease->disease_name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </select>
                  
                </div>
                <div class="form-group">
                  <label for="medicine_image">Packet Image(optional)</label>
                  <input type="file" class="form-control" id="medicine_image"  name="medicine_image">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
            </div>
          </div>
        </div>


      </div>
      <!-- /All Information -->

      <div class="clearfix"></div>

    </div>
    <!-- .animated -->
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.adminpanel', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pharmacy\resources\views/backend/medicine/medicine_add.blade.php ENDPATH**/ ?>