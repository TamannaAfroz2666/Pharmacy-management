
<?php $__env->startSection('content'); ?>
  <!-- Orders -->
  <div class="row justify-content-center">
    <div class="col-md-10">
      <div class="card">
        <div class="card-body">
      <h1>Company Add</h1>
        <form action="<?php echo e(route('company_create')); ?>" method="post">
          <?php echo csrf_field(); ?>
        <div class="form-group">
          <label for="company_name">Company Name</label>
          <input type="text" class="form-control" id="company_name"  placeholder="Enter Company Name" name="company_name">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
      </div> <!-- /.table-stats -->
    </div>
  </div> <!-- /.card -->
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.adminpanel', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pharmacy\resources\views/backend/company/company_add.blade.php ENDPATH**/ ?>