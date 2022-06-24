<?php $__env->startSection('content'); ?>

    <h1 class="mt-5">Create Department</h1>

    <form class="create-form" method="post" action="<?php echo e(route('dep.store')); ?>">
        <?php echo csrf_field(); ?>
        <input type="text" class="form-control w-75 d-inline"  placeholder="Department Name" name="department_name">
        <button type="submit" class="btn btn-primary d-inline">Save</button>


    </form>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Nader\students\resources\views/create.blade.php ENDPATH**/ ?>