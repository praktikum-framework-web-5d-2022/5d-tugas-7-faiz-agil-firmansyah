<?php $__env->startSection('content'); ?>
<div class="row mb-4">
    <div class="col-md-12">
        <div class="card p-4 bg-dark text-white">
            <h3 class="fw-bold">Data Rental</h3>
        </div>
    </div>
</div>
<div class="row mb-4">
    <?php $__currentLoopData = $rentals; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rental): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-md-6 mb-4">
            <div class="card p-4">
                <h5 class="fw-bold"><?php echo e($rental->tipe); ?></h5>
                <div class="card-body">
                    <ol class="list-group list-group-numbered">
                        <?php $__currentLoopData = $rental->customers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><?php echo e($item->tipe); ?> <code><?php echo e($item->pivot->created_at); ?></code></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ol>
                </div>
            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravel\src\tugas7\resources\views/rental.blade.php ENDPATH**/ ?>