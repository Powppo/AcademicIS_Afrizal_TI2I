
<?php $__env->startSection('content'); ?>
<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
                Student Detail Data
            </div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><b>Nim : </b><?php echo e($Student->nim); ?></li>
                    <li class="list-group-item"><b>Name : </b><?php echo e($Student->name); ?></li>
                    <li class="list-group-item"><b>Class : </b><?php echo e($Student->class); ?></li>
                    <li class="list-group-item"><b>Major : </b><?php echo e($Student->major); ?></li>
                </ul>
            </div>
            <a href="<?php echo e(route('student.index')); ?>" class="btn btn-success">Back</a>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('student.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Intel\academicIS\resources\views/student/detail.blade.php ENDPATH**/ ?>