
<?php $__env->startSection('content'); ?>
    <div class="col-md-5 mx-auto text-center" >
        <h4 style="font-size: 24px;font-weight:bold;">Choose the Category of your Business!</h4>
    </div>
    <div class="col-md-5 mx-auto" >
        <ul style="list-style-type:none;">
            <li style="width:350px;border-bottom:1px solid #eee;padding:5px;text-decoration: none;width:450px;">
                <a href="<?php echo e(env('BASE_URL') . 'listing/select-category'. ''); ?>" >...</a> >
                <b class="text-muted"><?php echo e($category->name); ?></b>
            </li>
        </ul>
        <ul style="list-style-type:none;" style="border: 1px solid red;padding:;">
            <?php $__currentLoopData = $subcategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subcategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li style="width:350px;border-bottom:1px solid #eee;padding:15px;text-decoration: none;width:450px;">
                <a href="<?php echo e(env('BASE_URL') . 'listing/' . $category_id . '/listing-title/' . $subcategory->id); ?>" class="text-dark"><?php echo e($subcategory->name); ?>

                    <i class="fa fa-chevron-right" style="float: right;text-decoration: none;"></i>
                </a>
            </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('listing-layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\bussinesshup\bh3\businesshub-web\resources\views/listings/select-subcategory.blade.php ENDPATH**/ ?>