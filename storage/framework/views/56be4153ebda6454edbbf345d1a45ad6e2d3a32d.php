

<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-12">
            <h2>Editar Tópico</h2>
            <hr>
            <div class="col-12">
                <form action="" method="post">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PUT'); ?>
                    <div class="form-group">
                        <label>Conteúdo Tópico</label>
                        <textarea name="body" id="" cols="160" rows="3"><?php echo e($thread->body); ?></textarea>
                    </div>

                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\forum\resources\views/threads/edit.blade.php ENDPATH**/ ?>