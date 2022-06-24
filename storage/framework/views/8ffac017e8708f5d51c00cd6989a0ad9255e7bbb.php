<?php $__env->startSection('content'); ?>

    <h1 class="mt-5">Edit Department</h1>
<?php $__currentLoopData = $department; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <form class="create-form" method="post" action="<?php echo e(route('dep.update',$item->id)); ?>">
        <?php echo csrf_field(); ?>
        <?php echo method_field('put'); ?>
        <input type="text" class="form-control w-75 d-inline"  placeholder="Department Name" name="department_name" value="<?php echo e($item->department_name); ?>">
        <button type="submit" class="btn btn-primary d-inline">Save</button>


    </form>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Nader\students\resources\views/edit.blade.php ENDPATH**/ ?>