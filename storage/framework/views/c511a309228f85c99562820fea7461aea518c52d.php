
<?php $__env->startSection('content'); ?>
    <div class="col-md-12 mx-auto" style="width:1000px;margin-top:100px;">
        <div class="row mx-auto">
            <div class="mx-auto">
                <div class="col-md-12">
                    <div class="row">
                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <!----cat start------>
                        <div class="col-md-3" style="width: 300px;margin-bottom:30px;">
                            <a href="<?php echo e(env('BASE_URL') . 'listing/select-subcategory/' . $category->id); ?>" class="text-dark">
                                <div class="inner-div" style="text-align:center;box-shadow: 0 2px 8px 0 rgba(0,0,0,.1);
            transition: background-color .3s;border-radius: 6px;height: 148px;padding-top:40px;">
                                    <img src="<?php echo e($category->image_url); ?>" alt="" width="40">
                                    <h6><?php echo e($category->name); ?></h6>
                                </div>
                            </a>
                        </div>
                        <!----cat  end------>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('listing-layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\bussinesshup\bh3\businesshub-web\resources\views/listings/select-category.blade.php ENDPATH**/ ?>