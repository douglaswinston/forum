

<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <small>Criado por <?php echo e($thread->user->name); ?> a <?php echo e($thread->created_at->diffforhumans()); ?></small>
                </div>
                <div class="card-body">
                    <?php echo e($thread->body); ?>

                </div>
                <div class="card-footer">
                    <a href="<?php echo e(route('threads.edit',$thread->slug)); ?>" class="btn btn-sm btn-primary">EDITAR</a>
                    <a href="" class="btn btn-sm btn-danger">REMOVER</a>
                </div>
            </div>
            <hr>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\forum\resources\views/threads/show.blade.php ENDPATH**/ ?>