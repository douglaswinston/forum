

<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-12">
            <h2>Tópicos</h2>
            <hr>
        </div>

        <div class="col-12">


            <?php $__empty_1 = true; $__currentLoopData = $threads; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $thread): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <div class="list-group">
                    <a href="<?php echo e(route('threads.show',$thread->slug)); ?>" class="list-group-item list-group-action">
                        <h5><?php echo e($thread->title); ?></h5>
                        <small>Criado em <?php echo e($thread->created_at->diffforhumans()); ?></small>
                    </a>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <div class="alert alert-warning">
                    Nenhum tópico encontrado!
                </div>

            <?php endif; ?>

            <?php echo e($threads->links('pagination::bootstrap-4')); ?>


        </div>

    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\forum\resources\views/threads/index.blade.php ENDPATH**/ ?>