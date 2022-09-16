<?php $__env->startSection('head'); ?>
<link rel="stylesheet" href="<?php echo e(asset('bower_components/select2/dist/css/select2.min.css'), false); ?>">
<link rel="stylesheet" href="<?php echo e(asset('plugins/iCheck/all.css'), false); ?>">
<link rel="stylesheet" href="<?php echo e(asset('css/pages/products.css'), false); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<?php if(session()->has('success')): ?>
    <?php echo $__env->make('layouts.partials.messages.success', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php endif; ?>
<?php if(session()->has('errors')): ?>
    <?php echo $__env->make('layouts.partials.messages.errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php endif; ?>

<?php echo $__env->make('user-employees.user.user_account_customer.partials.search-form', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">
                    Danh sách
                    <small>(Hiển thị <?php echo e($filter['limit'], false); ?> dòng / trang) </small>
                </h3>
                <div class="box-tools">
                    <div class="btn-group btn-group-sm">
                        <a class="btn btn-default clearfix" href="<?php echo e(route('usercustomers-add'), false); ?>"><i class="fa fa-plus" aria-hidden="true"></i> Tạo mới</a>
                    </div>
                    <div class="btn-group btn-group-sm">
                        <div class="btn-group" role="group">
                            <button type="button" class="btn btn-default dropdown-toggle btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-window-maximize" aria-hidden="true"></i> Hiển thị
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-right">
                                <li><a href="<?php echo e(route('usercustomers-index', filter_data($filter, 'limit', 10)), false); ?>">10 dòng / trang</a></li>
                                <li><a href="<?php echo e(route('usercustomers-index', filter_data($filter, 'limit', 25)), false); ?>">25 dòng / trang</a></li>
                                <li><a href="<?php echo e(route('usercustomers-index', filter_data($filter, 'limit', 50)), false); ?>">50 dòng / trang</a></li>
                                <li><a href="<?php echo e(route('usercustomers-index', filter_data($filter, 'limit', 100)), false); ?>">100 dòng / trang</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="btn-group btn-group-sm">
                        <a class="btn btn-default" href="<?php echo e(route('usercustomers-export'), false); ?>"><i class="fa fa-download"></i> Xuất excel</a>
                    </div>
                </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th width="1%">
                                <label>
                                    <input type="checkbox" class="minimal checkbox-all">
                                </label>
                            </th>
                            <th>#</th>
                            <th class="text-nowrap">Tên</th>
                            <th class="text-nowrap">Email</th>
                            <th class="text-nowrap">Quyền truy cập</th>
                            <th class="text-nowrap">Ngày khởi tạo</th>
                            <th class="text-nowrap">Ngày chỉnh sửa</th>
                            <th class="text-nowrap">
                                <span class="lbl-action">Chức năng</span>
                                <button class="btn btn-danger btn-xs btn-block hide btn-delete-selected">Xóa <span class="lbl-selected-rows-count">0</span> đã chọn</button>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if($collections->count() === 0): ?>
                        <tr>
                            <td colspan="8"><b>Không có dữ liệu!!!</b></td>
                        </tr>
                        <?php endif; ?>
                        <?php
                            $i = 1
                        ?>
                        <?php $__currentLoopData = $collections; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td>
                                    <label>
                                        <input type="checkbox" class="minimal checkbox-item">
                                    </label>
                                </td>
                                <td><?php echo e($i, false); ?></td>
                                <td><?php echo e($user->name, false); ?></td>
                                <td><?php echo e($user->email, false); ?></td>
                                <td><?php echo e($user->role, false); ?></td>
                                <td><?php echo e($user->created_at == null ? "" : ConvertSQLDate($user->created_at, 1), false); ?></td>
                                <td><?php echo e($user->updated_at == null ? "" : ConvertSQLDate($user->updated_at, 1), false); ?></td>
                                <td>
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Thao tác <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li><a href="<?php echo e(route('usercustomers-edit', ['id' => $user->id]), false); ?>"><i class="fas fa-pencil-alt"></i> Chỉnh sửa</a></li>
                                            <li>
                                                <a href="javascript:void(0)" data-id="<?php echo e($user->id, false); ?>" class="btn-delete"><i class="fa fa-trash" aria-hidden="true"></i> Xóa</a>
                                                <form name="form-delete-<?php echo e($user->id, false); ?>" method="post" action="<?php echo e(route('usercustomers-delete', ['id'=> $user->id]), false); ?>">
                                                    <?php echo e(csrf_field(), false); ?>

                                                    <?php echo e(method_field('delete'), false); ?>

                                                </form>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                        <?php
                            $i++
                        ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix text-right">
                <?php echo e($collections->appends(array('searchField'=>$searchField,'searchValue'=>$searchValue))->links(), false); ?>

            </div>
        </div>
        <!-- /.box -->
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<script>
    $(function() {
        $('.btn-delete').click(function(){
            var id = $(this).data('id');
            if(confirm('Bạn có muốn xóa không?')){
                document.forms['form-delete-'+ id].submit();
            }
        });

        <?php if(!empty($filter['searchFields'])): ?>
        $('#searchFields').val('<?php echo e($filter['searchFields'], false); ?>').trigger('change');
        <?php endif; ?>
    });
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>