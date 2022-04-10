
<?php $__env->startSection('content'); ?>
<div class="card">
  <div class="card-header"><h2>Add New Details</div>
  <div class="card-body">
      
      <form action="<?php echo e(url('student')); ?>" method="post">
        <?php echo csrf_field(); ?>

        <label><b>Name</label></br>
        <input type="text" name="name" id="name" class="form-control"></br>
        <label>Class</label></br>
        <input type="text" name="class" id="class" class="form-control"></br>
        <label>Section</label></br>
        <input type="text" name="section" id="section" class="form-control"></br>
        <label>Address</label></br>
        <input type="text" name="address" id="address" class="form-control"></br>
        <label>Mobile</label></br>
        <input type="text" name="mobile" id="mobile" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-primary"></br>
    </form>
  
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('students.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\StudentManagement\resources\views/students/create.blade.php ENDPATH**/ ?>