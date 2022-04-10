	

<?php $__env->startSection('content'); ?>

<div class="card">
  <div class="card-header"><h2>Student's Detail</h2></div>
  <hr>
  
  <div class="card-body">
  
        <div class="card-body">
        <h5 class="card-title">Name : <?php echo e($students->name); ?></h5>
        <p class="card-text">Class: <?php echo e($students->class); ?></p>
        <p class="card-text">Section : <?php echo e($students->section); ?></p>
        <p class="card-text">Address : <?php echo e($students->address); ?></p>
        <p class="card-text">Mobile : <?php echo e($students->mobile); ?></p>
  </div>
      
    </hr>
  
  </div>
</div>
<?php echo $__env->make('students.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\StudentManagement\resources\views/students/show.blade.php ENDPATH**/ ?>