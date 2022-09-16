<?php $__env->startSection('content'); ?>

<?php if(session()->has('success')): ?>
    <?php echo $__env->make('layouts.partials.messages.success', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php endif; ?>

<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <font size='4'><b>APPLICATION MODULE:</b> <?php echo e($applicationmodules->applicationmodulename, false); ?></font>
            </div>

            <div class="box-header">
                <h3 class="box-title">APPLICATION FUNCTION GROUPS</h3>
                <div class="box-tools">
                    <a href="<?php echo e(route('applicationfunctiongroups-add', ['applicationmoduleid' => $applicationmoduleid]), false); ?>" class="btn btn-default"><i class="fa fa-plus" aria-hidden="true"></i> Tạo mới</a>
                </div>
            </div>

            <div class="box-footer">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th width="5%" style="text-align: center;">STT</th>
                            <th width="35%" style="text-align: center;">Nhóm menu</th>
                            <th width="10%" style="text-align: center;">Thứ tự</th>
                            <th width="15%" style="text-align: center;">Image</th>
                            <th width="25%" style="text-align: center;">File name</th>
                            <th width="20%" style="text-align: center;">Chức năng</th>
                            <th style="text-align: center;">Thao tác</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php if($collections->count() === 0): ?>
                            <tr>
                                <td colspan="8"><b>Không có dữ liệu</b></td>
                            </tr>
                        <?php endif; ?>
                        <?php
                            $i = 1
                        ?>
                        <?php $__currentLoopData = $collections; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $model): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td style="text-align: center;"><?php echo e($i++, false); ?></td>
                                <td style="text-align: left;"><?php echo e($model->name, false); ?></td>
                                <td style="text-align: center;"><?php echo e($model->displayorder, false); ?></td>
                                <td style="text-align: center;"><?php echo e($model->image, false); ?></td>
                                <td style="text-align: left;"><?php echo e($model->applicationresources()->first() == null ? '' : $model->applicationresources()->first()->filename, false); ?></td>
                                <td style="text-align: center;"><a href="<?php echo e(route('functionassignment-index', ['applicationmoduleid'=> $applicationmoduleid, 'applicationfunctiongroupid'=> $model->id]), false); ?>">Chức năng</a></td>
                                <td style="text-align: center;">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Thao tác <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li><a href="<?php echo e(route('applicationfunctiongroups-edit', ['applicationmoduleid' => $applicationmoduleid, 'id'=> $model->id]), false); ?>"><i class="fas fa-pencil-alt" style="margin-right: 10px;"></i> Chỉnh sửa</a></li>
                                            <li><a href="javascript:void(0)" data-id="<?php echo e($model->id, false); ?>" class="btn-delete"><i class="fa fa-trash" aria-hidden="true"></i> Xóa</a>
                                                <form style="margin: 0;" name="form-delete-<?php echo e($model->id, false); ?>" method="post" action="<?php echo e(route('applicationfunctiongroups-delete', ['applicationmoduleid' => $applicationmoduleid, 'id' => $model->id]), false); ?>">
                                                    <?php echo e(csrf_field(), false); ?>

                                                    <?php echo e(method_field('delete'), false); ?>

                                                </form>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>
<div>
    <a href="<?php echo e(route('applicationmodules-index'), false); ?>" class="btn btn-default btn-cancel" style="width: 8%;"><i class="fa fa-arrow-left"></i> Quay lại</a>   
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<?php echo $__env->make('company-manage.applicationfunctiongroups.partials.script', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>