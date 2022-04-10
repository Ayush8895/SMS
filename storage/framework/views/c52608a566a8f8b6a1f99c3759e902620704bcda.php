
<?php $__env->startSection('content'); ?>
<div class="card">
  <div class="card-header"><h2>EDIT</h2></div>
  <div class="card-body">
      
      <form action="<?php echo e(url('student/' .$students->id)); ?>" method="post">
        <?php echo csrf_field(); ?>

        <?php echo method_field("PATCH"); ?>
        <input type="hidden" name="id" id="id" value="<?php echo e($students->id); ?>" id="id" />
        <label>Name</label></br>
        <input type="text" name="name" id="name" value="<?php echo e($students->name); ?>" class="form-control"></br>
        <label>Class</label></br>
        <input type="text" name="class" id="class" value="<?php echo e($students->class); ?>" class="form-control"></br>
        <label>Section</label></br>
        <input type="text" name="section" id="section" value="<?php echo e($students->section); ?>" class="form-control"></br>

        <label>Address</label></br>
        <input type="text" name="address" id="address" value="<?php echo e($students->address); ?>" class="form-control"></br>
        <label>Mobile</label></br>
        <input type="text" name="mobile" id="mobile" value="<?php echo e($students->mobile); ?>" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('students.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\StudentManagement\resources\views/students/edit.blade.php ENDPATH**/ ?>