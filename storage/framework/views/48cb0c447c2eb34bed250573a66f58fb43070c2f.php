<?php $__env->startSection('content'); ?>

<h1 class="mt-5">Create Student</h1>


<form class="create-form" method="post" action="<?php echo e(route('student.store')); ?>">
    <?php echo csrf_field(); ?>
    <input type="text" class="form-control w-75 d-inline"  placeholder="Student Name" name="student_name">
    <input type="text" class="form-control w-75 d-inline"  placeholder="Level" name="level">

<?php $__currentLoopData = $department; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <input  type="number" class="form-control w-75 visually-hidden"  value="<?php echo e($item->id); ?>" name="department_id">
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <button type="submit" class="btn btn-primary d-inline">Save</button>


</form>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Nader\students\resources\views/create-student.blade.php ENDPATH**/ ?>