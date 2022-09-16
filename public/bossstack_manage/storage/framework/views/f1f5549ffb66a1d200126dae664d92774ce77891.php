<?php $__env->startSection('head'); ?>
<link rel="stylesheet" href="<?php echo e(asset('css/pages/products.css'), false); ?>">

<style type="text/css">
    .synthetic-table{
        height: 213px;
        overflow-y: auto;
    }

    .synthetic-table table{
        min-height: 100%;
        margin-bottom: 0;
    }

    .cash-analysis{
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        justify-content: space-between;
    }

    .cash-analysis .item:first-child{
        flex-basis: calc(18% - 5px);
    }

    .cash-analysis .item:nth-child(3){
        flex-basis: calc(5% - 5px);
        text-align: center;
    }

    .cash-analysis .item:nth-child(2n + 2){
        flex-basis: calc(calc(47% / 2) - 5px);
    }

    .cash-analysis .item:last-child{
        display: flex;
        flex-basis: calc(30% - 5px);
        justify-content: space-between;
    }

    .cash-analysis .item:last-child button{
        flex-basis: calc(calc(100% / 2) - 5px);
    }

    table tbody .table-cashasset td{
        vertical-align: middle;
    }

    .cash-progress,
    .planned-cash{
        table-layout: fixed;
    }

    .cash-progress thead tr .target-name,
    .planned-cash thead tr .target-name{
        border-right: 2px solid #a6a6a6;
        width: 115px;
    }

    .cash-progress thead tr:first-child th:nth-child(6),
    .cash-progress thead tr:nth-child(2) th:first-child,
    .cash-progress thead tr:nth-child(3) th:first-child,
    .cash-progress thead tr:last-child th:first-child,
    .planned-cash thead tr:first-child th:nth-child(6),
    .planned-cash thead tr:nth-child(2) th:first-child,
    .planned-cash thead tr:nth-child(3) th:first-child,
    .planned-cash thead tr:last-child th:first-child{
        border-left: 2px solid #a6a6a6;
    }

    .cash-progress thead tr:nth-child(2) th:last-child,
    .cash-progress thead tr:nth-child(3) th:last-child,
    .cash-progress thead tr:last-child th:last-child,
    .planned-cash thead tr:nth-child(2) th:last-child,
    .planned-cash thead tr:nth-child(3) th:last-child,
    .planned-cash thead tr:last-child th:last-child{
        border-right: 2px solid #a6a6a6;
    }

    .cash-progress tbody tr td:last-child,
    .planned-cash tbody tr td:last-child{
        border-right: 1px solid #a6a6a6;
    }

    .cash-progress tfoot,
    .planned-cash tfoot{
        border-right: 1px solid #a6a6a6;
        border-left: 1px solid #a6a6a6;
        border-bottom: 2px solid #a6a6a6;
    }

    .cash-progress tfoot tr th:first-child,
    .planned-cash tfoot tr th:first-child{
        border-left: none;
    }

    .cash-progress tfoot tr th:last-child{
        border-right: none;
    }

    .planned-cash tfoot tr th:last-child{
        border-right: 1px solid #a6a6a6;
    }

    .cash-progress tbody tr td,
    .planned-cash tbody tr td{
        border-bottom: 1px solid #a6a6a6; 
        vertical-align: middle;
    }

    .tabledit-toolbar-column{
        display: none;
    }

    .ability-assessment-wrap{
        max-height: 575px;
        height: 100%;
        overflow-y: auto;
    }

    .ability-assessment-wrap #ability-assessment thead tr th{
        color: #2d3194;
    }

    .ability-assessment-wrap #ability-assessment tbody tr td,
    .ability-assessment-wrap #ability-assessment tfoot tr td{
        vertical-align: middle;
    }

    .ability-assessment-wrap #ability-assessment tfoot tr td{
        border: 1px solid #a6a6a6;
    }

    .square{
        display: inline-block;
        width: 10px;
        height: 10px;
        border-radius: 3px;
        margin-right: 5px;
    }

    .square.success{
        background-color: #00a65a;
    }

    .square.danger{
        background-color: #dd4b39;
    }

    @media  only screen and (min-width: 1201px){

    }

    @media  only screen and (min-width: 993px) and (max-width: 1200px){
        .cash-analysis .item:first-child{
            flex-basis: calc(18% - 5px);
        }

        .cash-analysis .item:nth-child(3){
            flex-basis: calc(5% - 5px);
        }

        .cash-analysis .item:nth-child(2n + 2){
            flex-basis: calc(calc(47% / 2) - 5px);
        }

        .cash-analysis .item:last-child{
            flex-basis: calc(30% - 5px); 
        }
    }

    @media  only screen and (min-width: 992px){
        .cash-analysis .item:last-child button .text{
            display: block;
        }

        .cash-analysis .item:last-child button .icon{
            display: none;
        }
    }

    @media  only screen and (max-width: 992px){
        .cash-analysis .item:last-child button .text{
            display: none;
        }

        .cash-analysis .item:last-child button .icon{
            display: block;
        }
    }

    @media  only screen and (min-width: 769px) and (max-width: 992px){
        .cash-analysis .item:first-child{
            flex-basis: calc(26% - 5px);
        }

        .cash-analysis .item:nth-child(3){
            flex-basis: calc(5% - 5px);
        }

        .cash-analysis .item:nth-child(2n + 2){
            flex-basis: calc(calc(39% / 2) - 5px);
        }

        .cash-analysis .item:last-child{
            flex-basis: calc(30% - 5px); 
        }
    }

    @media  only screen and (max-width: 768px){
        .content-wrapper .content-header > h1{
            font-size: 22px;
        }

        .ability-assessment-wrap{
            height: 500px;
            overflow: auto;
        }

        .ability-assessment-wrap #ability-assessment{
            width: 1000px;
        }
    }

    @media  only screen and (min-width: 426px) and (max-width: 768px){
        .cash-analysis .item:first-child{
            flex-basis: calc(28% - 5px);
        }

        .cash-analysis .item:nth-child(3){
            flex-basis: calc(5% - 5px);
        }

        .cash-analysis .item:nth-child(2n + 2){
            flex-basis: calc(calc(37% / 2) - 5px);
        }

        .cash-analysis .item:last-child{
            flex-basis: calc(30% - 10px); 
        }
    }

    @media  only screen and (min-width: 320px) and (max-width: 425px){
        .synthetic-table table{
            margin-bottom: 20px;
        }

        .cash-analysis .item:first-child{
            flex-basis: calc(40% - 5px);
        }

        .cash-analysis .item:nth-child(3){
            flex-basis: calc(40% - 5px);
            text-transform: capitalize;
            text-align: left;
        }

        .cash-analysis .item:nth-child(2n + 2){
            margin-bottom: 10px;
            flex-basis: calc(calc(120% / 2) - 5px);
        }

        .cash-analysis .item:last-child{
            flex-basis: 100%;
        }

        .cash-analysis .item:last-child button .text{
            display: block;
        }

        .cash-analysis .item:last-child button .icon{
            display: none;
        }
    }
</style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<?php if(session()->has('success')): ?>
    <?php echo $__env->make('layouts.partials.messages.success', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php endif; ?>

<form role="form" action="<?php echo e(route('cash-processPlan'), false); ?>" method="post" id="frm" name="frm">
<?php echo e(csrf_field(), false); ?>

<input type='hidden' name='typereport' value=''>

<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <br>
            <p style="margin-left:3px;font-size:11pt;">
                Chức năng phân tích dòng tiền cá nhân là công cụ kiểm soát dòng tiền thu chi, dòng tiền đầu tư,... Đồng thời hệ thống Fiinves hỗ trợ bạn đánh giá lại tất cả các dòng tiền hiện tại có theo sát các mục tiêu tài chính mà bạn đã đặt ra hay không.
            </p>

            <div class="cash-analysis">
                <div class="item" style="align-self: center;">
                    <label style="color: #2d3194;">Thời gian từ tháng:</label>
                </div>
                <div class="item">
                    <input type='text' class="form-control" name="fromdate" id='fromdate' value="<?php echo e($fromdate, false); ?>"/>
                    <?php if($errors->has('fromdate')): ?><span class="text-danger"><?php echo e($errors->first('fromdate'), false); ?></span><?php endif; ?>
                </div>
                <div class="item" style="align-self: center;">
                    <label style="color: #2d3194;">đến:</label>
                </div>
                <div class="item">
                    <input type='text' class="form-control" name="todate" id='todate' value="<?php echo e($todate, false); ?>"/>
                    <?php if($errors->has('todate')): ?><span class="text-danger"><?php echo e($errors->first('todate'), false); ?></span><?php endif; ?>
                </div>
                <div class="item">
                    <button class="btn btn-primary btn-search" style="background-color: #ff7f0e; border: 1px solid #ff7f0e;">
                        <span class="text">Phân tích</span>
                        <span class="icon"><i class="fa fa-line-chart" aria-hidden="true"></i></span>
                    </button>
                    <button class="btn btn-primary" style="background-color: #ff7f0e; border: 1px solid #ff7f0e;">
                        <span class="text">Xuất báo cáo</span>
                        <span class="icon"><i class="fa fa-download" aria-hidden="true"></i></span>
                    </button>
                </div>
            </div>

            <br>
            <!-- <p style="margin-left:0px;font-size:18pt;margin-top:20px;font-weight:bold;color:#ff0000;">TỔNG QUAN VỀ CHI TIÊU</p>
            <p style="text-align: right;margin-right:20px;font-size:10pt;font-weight:bold;color:#000000;">Đơn vị tính: đồng</p> -->

            <div class="row" style="margin-bottom: 20px;">
                <div class="col-md-4 col-xs-12">
                    <!-- <p style="margin-left:1px;font-size:14pt;color:#312f90;"><b>SỐ TIỀN CÁC VÍ:</b> <span>11,000,000</span> VND</p> -->
                    <div class="row synthetic" style="display: none;">
                        <div class="col-md-12">
                            <div class="synthetic-table">
                                <table class="table">
                                    <tbody>
                                        <?php
                                            $i = 1; $total = 0;
                                        ?>                        
                                        <?php $__currentLoopData = $listaccounts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php
                                                $total += $item->amount;
                                            ?>                        
                                            <tr class="table-cashasset">
                                                <td style="text-align: left;" class="text-nowrap"><?php echo e($item->accountname, false); ?> <br> <?php echo e($item->accountno, false); ?></td>
                                                <td style="text-align: right;" class="text-nowrap"><?php echo formatNumberColor($item->amount, 1, 0, 1); ?></td>
                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                    <tfoot style="border: 1px solid #a6a6a6;">
                                        <tr>
                                            <td style="text-align: left;" class="text-nowrap" width="50%"><b>Tổng cộng</b></td>
                                            <td style="text-align: right;" class="text-nowrap" width="50%"><b><?php echo formatNumberColor($total, 1, 0, 1); ?></b></td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <table style="width: 100%;">
                                <tbody>
                                    <tr>
                                        <td style="text-align: left; font-size: 14pt; color: #312f90;" class="text-nowrap"><b>SỐ TIỀN CÁC VÍ:</b></td>
                                        <td style="text-align: right; font-size: 15px; color: #10aa25;" class="text-nowrap"><b><?php echo formatNumberColor($total, 1, 0, 0); ?></b></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-xs-12">
                    <!-- <p style="margin-left:1px;font-size:14pt;color:#312f90;"><b>TỔNG TÀI SẢN:</b> <span>11,000,000</span> VND</p> -->
                    <div class="row synthetic" style="display: none;">
                        <div class="col-md-12">
                            <div class="synthetic-table">
                                <table class="table">
                                    <tbody>
                                        <?php if($asset_1->count() === 0): ?>
                                        <tr class="table-cashasset">
                                            <td><b>Không có dữ liệu!!!</b></td>
                                            <td><b>Không có dữ liệu!!!</b></td>
                                        </tr>
                                        <?php endif; ?>
                                        <?php
                                            $i = 1; $total = 0;
                                        ?>                        
                                        <?php $__currentLoopData = $asset_1; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cashasset): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php
                                                $total += $cashasset->amount;
                                            ?>                        
                                            <tr class="table-cashasset">
                                                <td style="text-align: left;" class="text-nowrap"><?php echo e($i++, false); ?>. <?php echo e($cashasset->assetname, false); ?></td>
                                                <td style="text-align: right;" class="text-nowrap"><?php echo formatNumberColor($cashasset->amount, 1, 0, 1); ?></td>
                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                    <tfoot style="border: 1px solid #a6a6a6;">
                                        <tr>
                                            <td style="text-align: left;" class="text-nowrap" width="50%"><b>Tổng cộng</b></td>
                                            <?php if($asset_1->count() === 0): ?>
                                            <td style="text-align: right;" class="text-nowrap" width="50%"><b>0</b></td>
                                            <?php else: ?>
                                            <td style="text-align: right;" class="text-nowrap" width="50%"><b><?php echo formatNumberColor($total, 1, 0, 1); ?></b></td>
                                            <?php endif; ?>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <table style="width: 100%;">
                                <tbody>
                                    <tr>
                                        <td style="text-align: left; font-size: 14pt; color: #312f90;" class="text-nowrap"><b>TỔNG TÀI SẢN:</b></td>
                                        <td style="text-align: right; font-size: 15px; color: #10aa25;" class="text-nowrap"><b><?php echo formatNumberColor($total + $totallistaccounts->sum('amount'), 1, 0, 0); ?></b></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-xs-12">
                    <!-- <p style="margin-left:1px;font-size:14pt;color:#312f90;;"><b>TỔNG NỢ:</b> <span>11,000,000</span> VND</p> -->
                    <div class="row synthetic" style="display: none;">
                        <div class="col-md-12">
                            <div class="synthetic-table">
                                <table class="table">
                                    <tbody>
                                        <?php if($asset_0->count() === 0): ?>
                                        <tr class="table-cashasset">
                                            <td><b>Không có dữ liệu!!!</b></td>
                                            <td><b>Không có dữ liệu!!!</b></td>
                                        </tr>
                                        <?php endif; ?>
                                        <?php
                                            $i = 1; $total = 0;
                                        ?>                        
                                        <?php $__currentLoopData = $asset_0; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cashasset): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php
                                                $total += $cashasset->remainamount;
                                            ?>                        
                                            <tr class="table-cashasset">
                                                <td style="text-align: left;" class="text-nowrap"><?php echo e($i++, false); ?>. <?php echo e($cashasset->assetname, false); ?></td>
                                                <td style="text-align: right;" class="text-nowrap"><?php echo formatNumberColorCustom($cashasset->remainamount, 1, 0, 0, 1); ?></td>
                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                    <tfoot style="border: 1px solid #a6a6a6;">
                                        <tr>
                                            <td style="text-align: left;" class="text-nowrap" width="50%"><b>Tổng cộng</b></td>
                                            <?php if($asset_1->count() === 0): ?>
                                            <td style="text-align: right;" class="text-nowrap" width="50%"><b>0</b></td>
                                            <?php else: ?>
                                            <td style="text-align: right;" class="text-nowrap" width="50%"><b><?php echo formatNumberColorCustom($total, 1, 0, 0, 1); ?></b></td>
                                            <?php endif; ?>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <table style="width: 100%;">
                                <tbody>
                                    <tr>
                                        <td style="text-align: left; font-size: 14pt; color: #312f90;" class="text-nowrap"><b>TỔNG NỢ:</b></td>
                                        <td style="text-align: right; font-size: 15px; color: #ff423e;" class="text-nowrap"><b><?php echo formatNumberColorCustom($total, 1, 0, 0, 1); ?></b></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            

            <p style="margin-left:1px;font-size:14pt;color:#312f90;"><b>DÒNG TIỀN CÁ NHÂN THEO KẾ HOẠCH</b></p>
            <div class="form-group">
                <div class="row">
                    <div class="box-header" style="padding: 10px 15px;">
                        <ul class="nav nav-pills">
                            <?php for($i=0; $i<count($yearArray); $i++): ?>
                            <li class="<?php echo e($i==0?"active":"", false); ?>">
                                <a data-toggle="pill" class="hash-tab" href="#schedulemonth_<?php echo e($i, false); ?>"><b>Năm thứ <?php echo e(($i+1), false); ?></b></a>
                            </li>
                            <?php endfor; ?>                            
                        </ul>
                    </div>
                    <div class="box-body" style="padding: 10px 15px;">            
                        <div class="tab-content">
                            <?php for($i=0; $i<count($yearArray); $i++): ?>                            
                            <div id="schedulemonth_<?php echo e($i, false); ?>" class="tab-pane fade <?php echo e($i==0?"in active":"", false); ?>" style="min-height: 300px; overflow: auto;">
                                <table class="table table-hover planned-cash" id="tablecashkehoach_<?php echo e($i, false); ?>">
                                    <thead>
                                        <?php
                                            $icash = 1;
                                        ?>
                                        <tr>
                                            <th rowspan="4" style="text-align: center;vertical-align: center; background: #dddddd;color: #2d3194; width: 90px;" class="text-nowrap">STT</th>
                                            <th rowspan="4" style="text-align: center;vertical-align: center; background: #dddddd;color: #2d3194; width: 90px;" class="text-nowrap">Tháng</th>
                                            <th rowspan="4" style="text-align: center;vertical-align: center; background: #dddddd;color: #2d3194; width: 110px;" class="text-nowrap">Thu Nhập</th>
                                            <th rowspan="4" style="text-align: center;vertical-align: center; background: #dddddd;color: #2d3194; width: 110px;" class="text-nowrap">Chi Phí</th>
                                            <th rowspan="4" style="text-align: center;vertical-align: center; background: #dddddd;color: #2d3194; width: 130px;" class="text-nowrap">Chi Trả Nợ</th>
                                            <?php $__currentLoopData = $listcashplan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cashplan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <th style="text-align: center; background: #dddddd;vertical-align: center;color: #2d3194;text-transform: capitalize;" class="text-nowrap target-name">Mục tiêu <?php echo e($icash++, false); ?></th>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <th rowspan="4" colspan="2" style="text-align: center;vertical-align: center; background: #dddddd;color: #2d3194; border-right: 1px solid #a6a6a6; width: 155px;" class="text-nowrap">Chênh Lệch Dòng Tiền <br>(dự kiến)</th>
                                        </tr>
                                        
                                        <tr>
                                            <?php $__currentLoopData = $listcashplan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cashplan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <th style="text-align: left; background: #dddddd;vertical-align: center;;color: #10aa25;" class="text-nowrap"><?php echo e($cashplan->planname, false); ?> <br> <?php echo e($cashplan->description, false); ?> <br>Ngày lập: <?php echo e($cashplan->plandate == null ? "" : ConvertSQLDate($cashplan->plandate), false); ?></th>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </tr>

                                        <tr>
                                            <?php $__currentLoopData = $listcashplan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cashplan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <th style="text-align: right; background: #dddddd;vertical-align: center;font-weight: 500;color: #10aa25;" class="text-nowrap"><?php echo e(formatNumber($cashplan->requireamount, 1, 0, 0), false); ?></th>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </tr>

                                        <tr>
                                            <?php $__currentLoopData = $listcashplan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cashplan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <th style="text-align: left; background: #dddddd;vertical-align: center;font-weight: 500;color: #10aa25;" class="text-nowrap">Kế hoạch: <?php echo e(formatNumber(($cashplan->planage-$cashplan->currentage), 1, 0, 0), false); ?> năm</th>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </tr>

                                        <!-- <tr>
                                            <th style="text-align: center;vertical-align: top; background: #dddddd;" class="text-nowrap" width="1%">STT</th>
                                            <th style="text-align: center;vertical-align: top; background: #dddddd;" class="text-nowrap" width="12%">Tháng</th>
                                            <th style="text-align: center;vertical-align: top; background: #dddddd;" class="text-nowrap" width="12%">Thu nhập</th>
                                            <th style="text-align: center;vertical-align: top; background: #dddddd;" class="text-nowrap" width="12%">Chi phí</th>
                                            <th style="text-align: center;vertical-align: top; background: #dddddd;" class="text-nowrap" width="12%">Chi phí trả các khoản nợ</th>
                                            <?php $__currentLoopData = $listcashplan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cashplan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <th style="text-align: left; background: #dddddd;" class="text-nowrap" width="15%">Mục tiêu tài chính <?php echo e($icash++, false); ?><br><?php echo e($cashplan->planname, false); ?>: <?php echo e(formatNumber($cashplan->requireamount, 1, 0, 0), false); ?><br>Kế hoạch: <?php echo e(formatNumber(($cashplan->planage-$cashplan->currentage), 1, 0, 0), false); ?> năm</th>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                            
                                            <th style="text-align: center;vertical-align: top; background: #dddddd;" class="text-nowrap">Chênh lệch dòng tiền <br>(dự kiến)</th>
                                            <th style="text-align: center;vertical-align: top; background: #ffffff;" class="text-nowrap" width="4%">&nbsp;</th>
                                        </tr> -->
                                    </thead>
                                    <tbody>
                                        <?php
                                            $stt = 1;
                                        ?>                              
                                        <?php $__currentLoopData = $monthArray; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if($yearArray[$i] == $value): ?>
                                            <tr>
                                                <td style="text-align: center;" class="text-nowrap"><?php echo e($stt++, false); ?></td>
                                                <td style="text-align: center;" class="text-nowrap"><?php echo e(str_replace('_', '/', $key), false); ?></td>
                                                <td style="text-align: right;" class="text-nowrap"><?php echo formatNumberColorCustom($dataArray[$key]["income"], 1, 0, 0, 0); ?></td>
                                                <td style="text-align: right;" class="text-nowrap"><?php echo formatNumberColorCustom($dataArray[$key]["expense"], 1, 0, 0, 1); ?></td>
                                                <td style="text-align: right;" class="text-nowrap"><?php echo formatNumberColorCustom($dataArray[$key]["bank"], 1, 0, 0, 1); ?></td>
                    
                                                <?php $__currentLoopData = $listcashplan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cashplan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <td style="text-align: right;" class="text-nowrap"><?php echo formatNumberColorCustom($dataArray[$key][$cashplan->id . "_planamount"], 1, 0, 0, 1); ?></td>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                                                        
                    
                                                <?php
                                                    $color = "#000000";
                                                    if ($dataArray[$key]["process_planamount"] < 0){
                                                        $color = "#ff0000";
                                                    }
                                                ?> 
                                                <td colspan="2" style="text-align: right;color: <?php echo e($color, false); ?>;" class="text-nowrap"><?php echo formatNumber($dataArray[$key]["process_planamount"], 1, 0, 0); ?></td>
                                            </tr>
                                            <?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                            
                                    </tbody>

                                    <?php if(($i+1) == count($yearArray)): ?>
                                    <tfoot>
                                        <tr>
                                            <th style="text-align: left;" class="text-nowrap" colspan='2'>Tổng cộng</th>
                                            <th style="text-align: right;" class="text-nowrap"><?php echo formatNumberColorCustom($sumArray["income"], 1, 0, 0, 0); ?></th>
                                            <th style="text-align: right;" class="text-nowrap"><?php echo formatNumberColorCustom($sumArray["expense"], 1, 0, 0, 1); ?></th>
                                            <th style="text-align: right;" class="text-nowrap"><?php echo formatNumberColorCustom($sumArray["bank"], 1, 0, 0, 1); ?></th>
                
                                            <?php $__currentLoopData = $listcashplan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cashplan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <th style="text-align: right;" class="text-nowrap"><?php echo formatNumberColorCustom($sumArray[$cashplan->id . "_planamount"], 1, 0, 0, 1); ?></th>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                                                        
                
                                            <?php
                                                $color = "#000000";
                                                if ($sumArray["process_planamount"] < 0){
                                                    $color = "#ff0000";
                                                }
                                            ?> 
                                            <th colspan="2" style="text-align: right;color: <?php echo e($color, false); ?>" class="text-nowrap"><?php echo formatNumber($sumArray["process_planamount"], 1, 0, 0); ?></th>
                                        </tr>
                                    </tfoot>
                                    <?php endif; ?>
                                </table>
                            </div>
                            <?php endfor; ?>
                        </div>
                     </div>
                 </div>
             </div>
                     
            <!-- /Dong tien du kien -->

            <p style="margin-left:1px;font-size:14pt;color:#312f90;"><b>DÒNG TIỀN CÁ NHÂN ĐANG THỰC HIỆN</b></p>
            
            <!-- /Dong tien thuc te -->
            <div class="form-group">
                <div class="row">         
                    <div class="box-header" style="padding: 10px 15px;">
                        <ul class="nav nav-pills">
                            <?php for($i=0; $i<count($yearArray); $i++): ?>
                            <li class="<?php echo e($i==0?"active":"", false); ?>">
                                <a data-toggle="pill" class="hash-tab" href="#schedulemonthreal_<?php echo e($i, false); ?>"><b>Năm thứ <?php echo e(($i+1), false); ?></b></a>
                            </li>
                            <?php endfor; ?>                            
                        </ul>
                    </div>
                    <div class="box-body" style="padding: 10px 15px;">            
                        <div class="tab-content">
                            <?php for($i=0; $i<count($yearArray); $i++): ?>                            
                            <div id="schedulemonthreal_<?php echo e($i, false); ?>" class="tab-pane fade <?php echo e($i==0?"in active":"", false); ?>" style="min-height: 300px; overflow: auto;">
                                <table class="table table-hover cash-progress" id="tablecash_<?php echo e($i, false); ?>">
                                    <thead>
                                        <?php
                                            $icash = 1;
                                        ?>
                                        <tr>
                                            <th rowspan="4" style="text-align: center;vertical-align: center; background: #dddddd;color: #2d3194; width: 90px;" class="text-nowrap">STT</th>
                                            <th rowspan="4" style="text-align: center;vertical-align: center; background: #dddddd;color: #2d3194; width: 90px;" class="text-nowrap">Tháng</th>
                                            <th rowspan="4" style="text-align: center;vertical-align: center; background: #dddddd;color: #2d3194; width: 110px;" class="text-nowrap">Thu Nhập</th>
                                            <th rowspan="4" style="text-align: center;vertical-align: center; background: #dddddd;color: #2d3194; width: 110px;" class="text-nowrap">Chi Phí</th>
                                            <th rowspan="4" style="text-align: center;vertical-align: center; background: #dddddd;color: #2d3194; width: 130px;" class="text-nowrap">Chi Trả Nợ</th>
                                            <?php $__currentLoopData = $listcashplan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cashplan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <th style="text-align: center; background: #dddddd;vertical-align: center;color: #2d3194;text-transform: capitalize;" class="text-nowrap target-name">Mục tiêu <?php echo e($icash++, false); ?></th>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <th rowspan="4" style="text-align: center;vertical-align: center; background: #dddddd;color: #2d3194; border-right: 1px solid #a6a6a6; width: 155px;" class="text-nowrap">Chênh Lệch Dòng Tiền</th>
                                        </tr>
                                        
                                        <tr>
                                            <?php $__currentLoopData = $listcashplan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cashplan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <th style="text-align: left; background: #dddddd;vertical-align: center;color: #10aa25;" class="text-nowrap"><?php echo e($cashplan->planname, false); ?>  <br> <?php echo e($cashplan->description, false); ?> <br>Ngày lập: <?php echo e($cashplan->plandate == null ? "" : ConvertSQLDate($cashplan->plandate), false); ?></th>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </tr>

                                        <tr>
                                            <?php $__currentLoopData = $listcashplan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cashplan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <th style="text-align: right; background: #dddddd;vertical-align: center;font-weight: 500;color: #10aa25;" class="text-nowrap"><?php echo e(formatNumber($cashplan->requireamount, 1, 0, 0), false); ?></th>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </tr>

                                        <tr>
                                            <?php $__currentLoopData = $listcashplan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cashplan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <th style="text-align: left; background: #dddddd;vertical-align: center;font-weight: 500;color: #10aa25;" class="text-nowrap">Kế hoạch: <?php echo e(formatNumber(($cashplan->planage-$cashplan->currentage), 1, 0, 0), false); ?> năm</th>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </tr>

                                        <!-- <tr>
                                            <th></th>
                                            <th></th>
                                            <th><font color='#ff0000'>Thực tế</font></th>
                                            <th><font color='#ff0000'>Thực tế</font></th>
                                            <th><font color='#ff0000'>Thực tế</font></th>
                                            <th><font color='#ff0000'>Thực tế</font></th>
                                            <th><font color='#ff0000'>Thực tế</font></th>
                                            <th><font color='#ff0000'>Thực tế</font></th>
                                            <th><font color='#ff0000'>Thực tế</font></th>
                                            <th><font color='#ff0000'>Thực tế</font></th>
                                            <th><font color='#ff0000'>Thực tế</font></th>
                                            <th><font color='#ff0000'>Thực tế</font></th>
                                            <th><font color='#ff0000'>Thực tế</font></th>
                                            <th><font color='#ff0000'>Thực tế</font></th>
                                            <th></th>
                                        </tr>
 -->                                    </thead>
                                    <tbody>
                                        <?php
                                            $stt = 1;
                                        ?>                              
                                        <?php $__currentLoopData = $monthArray; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if($yearArray[$i] == $value): ?>
                                            <tr>
                                                <td style="text-align: center; vertical-align: middle;" class="text-nowrap"><?php echo e($stt++, false); ?></td>
                                                <td style="text-align: center; vertical-align: middle;" class="text-nowrap"><?php echo e(str_replace('_', '/', $key), false); ?></td>
                                                <td style="text-align: right;" class="text-nowrap"><?php echo formatNumberColorCustom($dataArray[$key]["income"], 1, 0, 0, 0); ?></td>
                                                <td style="text-align: right;" class="text-nowrap"><?php echo formatNumberColorCustom($dataArray[$key]["expense"], 1, 0, 0, 1); ?></td>
                                                <td style="text-align: right;" class="text-nowrap"><?php echo formatNumberColorCustom($dataArray[$key]["bank"], 1, 0, 0, 1); ?></td>
                    
                                                <?php $__currentLoopData = $listcashplan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cashplan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <td style="text-align: right;" class="text-nowrap"><?php echo formatNumberColorCustom($dataArray[$key][$cashplan->id . "_realamount"], 1, 0, 0, 1); ?></td>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                                                        
                    
                                                <?php
                                                    $color = "#000000";
                                                    if ($dataArray[$key]["process_planamount"] < 0){
                                                        $color = "#ff0000";
                                                    }
                                                ?> 
                                                <td style="text-align: right;color: <?php echo e($color, false); ?>;" class="text-nowrap"><?php echo formatNumber($dataArray[$key]["process_realamount"], 1, 0, 0); ?></td>
                                            </tr>
                                            <?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                            
                                    </tbody>

                                    <?php if(($i+1) == count($yearArray)): ?>
                                    <tfoot>
                                        <tr>
                                            <th style="text-align: left;" class="text-nowrap" colspan='2'>Tổng cộng</th>
                                            <th style="text-align: right;" class="text-nowrap"><?php echo formatNumberColorCustom($sumArray["income"], 1, 0, 0, 0); ?></th>
                                            <th style="text-align: right;" class="text-nowrap"><?php echo formatNumberColorCustom($sumArray["expense"], 1, 0, 0, 1); ?></th>
                                            <th style="text-align: right;" class="text-nowrap"><?php echo formatNumberColorCustom($sumArray["bank"], 1, 0, 0, 1); ?></th>
                
                                            <?php $__currentLoopData = $listcashplan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cashplan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <th style="text-align: right;" class="text-nowrap"><?php echo formatNumberColorCustom($sumArray[$cashplan->id . "_realamount"], 1, 0, 0, 1); ?></th>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                                                        
                
                                            <?php
                                                $color = "#000000";
                                                if ($sumArray["process_realamount"] < 0){
                                                    $color = "#ff0000";
                                                }
                                            ?> 
                                            <th style="text-align: right;color: <?php echo e($color, false); ?>" class="text-nowrap"><?php echo formatNumber($sumArray["process_realamount"], 1, 0, 0); ?></th>
                                        </tr>
                                    </tfoot>
                                    <?php endif; ?>
                                </table>
                            </div>
                            <?php endfor; ?>
                        </div>
                     </div>
                 </div>
             </div>
            <!-- /Dong tien thuc te -->

            <p style="margin-left:1px;font-size:14pt;font-weight:bold;color:#312f90;"><b>ĐÁNH GIÁ KHẢ NĂNG THỰC HIỆN MỤC TIÊU TÀI CHÍNH</b></p>

            <div class="ability-assessment-wrap">
                <table class="table table-hover" id="ability-assessment">
                    <thead>
                        <tr>
                            <th class="text-nowrap text-center" width="5%"><b><font size="3">STT</font></b></th>
                            <th class="text-nowrap text-center"><b><font size="3">Mục Tiêu</font></b></th>
                            <th class="text-nowrap text-center"><b><font size="3">Tên Mục Tiêu</font></b></th>
                            <th class="text-nowrap text-center"><b><font size="3">Kế hoạch</font></b></th>
                            <th class="text-nowrap text-center"><b><font size="3">Số tiền đã thực hiện</font></b></th>
                            <!-- <th class="text-nowrap text-center" width="10%"><b><font size="3">Tình Trạng</font></b></th>
                            <th class="text-nowrap text-center" width="26%"><b><font size="3">Tiến Độ</font></b></th> -->
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $icash = 1;
                            $total_requireamount = 0;
                            $total_realamount = 0;
                            $checkTotalPlan = '';
                            $checkTotalText = '';
                            $percentTotalProcess = 0;
                            $percentProcess = 0;
                        ?>
                        <?php $__currentLoopData = $listcashplan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cashplan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php
                                $checkAmountPlan = $sumArray[$cashplan->id . "_realamount"]-$sumArray[$cashplan->id . "_planamount"];
                                $checkPlan = ($checkAmountPlan > 0 ? "label label-success" : "label label-danger");
                                
                                $checkText = ($checkAmountPlan > 0 ? "Đang thực hiện tốt" : "Đang thiếu hụt ");
                                
                                $percentProcess = round(($sumArray[$cashplan->id . "_realamount"]/$cashplan->requireamount)*100, 0); 
                                if ($percentProcess >= 100){
                                	$percentProcess = 100;
                                }

                                //tong cong ke hoach, da thuc hien 
                                $total_requireamount += $cashplan->requireamount;
                                $total_realamount += $sumArray[$cashplan->id . "_realamount"];

                                $checkTotalAmountPlan = $total_realamount-$total_requireamount;
                                $checkTotalPlan = ($checkTotalAmountPlan > 0 ? "label label-success" : "label label-danger");
                                
                                $checkTotalText = ($checkTotalAmountPlan > 0 ? "Đang thực hiện tốt" : "Đang thiếu hụt ");
                                
                                $percentTotalProcess = round(($total_realamount/$total_requireamount)*100, 0); 
                                if ($percentTotalProcess >= 100){
                                    $percentTotalProcess = 100;
                                }
                            ?>

                            <tr>
                                <td class="text-nowrap text-center"><?php echo e($icash, false); ?></td>
                                <td class="text-nowrap">Mục tiêu <?php echo e($icash++, false); ?></td>
                                <td class="text-nowrap"><b><?php echo e($cashplan->planname, false); ?></b> <br> <?php echo e($cashplan->description, false); ?> <br>Ngày lập: <?php echo e($cashplan->plandate == null ? "" : ConvertSQLDate($cashplan->plandate), false); ?></td>
                                <td class="text-nowrap text-right"><?php echo formatNumberColorCustom($cashplan->requireamount, 1, 0, 0, 0); ?></td>
                                <td class="text-nowrap text-right"><?php echo formatNumberColorCustom($sumArray[$cashplan->id . "_realamount"], 1, 0, 0, 0); ?></td>
                                <!-- <td class="text-nowrap text-center"><span class="<?php echo e($checkPlan, false); ?>" style="font-size: 100%;"><?php echo e($checkText, false); ?></span></td>
                                <td class="text-nowrap text-left">

                                    <div class="progress" style="margin-bottom: 20px;">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="<?php echo e(formatNumber($percentProcess, 1, 2, 1), false); ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo e(formatNumber($percentProcess, 1, 2, 1), false); ?>%">
                                            <?php echo e(formatNumber($percentProcess, 1, 0, 1), false); ?>%
                                        </div>
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="<?php echo e(formatNumber(100-$percentProcess, 1, 2, 1), false); ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo e(formatNumber(100-$percentProcess, 1, 2, 1), false); ?>%">
                                            <?php echo e(formatNumber(100-$percentProcess, 1, 0, 1), false); ?>%
                                        </div>
                                    </div>
                                    <p style="margin-bottom: 5px; display: inline-block; margin-right: 20px;"><span class="square success"></span>Đã thực hiện: <?php echo e(formatNumber($percentProcess, 1, 0, 1), false); ?>%</p>
                                    <p style="margin-bottom: 0; display: inline-block;"><span class="square danger"></span>Chưa thực hiện: <?php echo e(formatNumber(100-$percentProcess, 1, 0, 1), false); ?>%</p>
                                </td> -->
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                                                        

                    </tbody>
                    <?php if($checkTotalText != ''): ?>
                    <tbody>
                        <tr>
                            <td class="text-nowrap" colspan="3"><b>Tổng cộng</b></td>
                            <td class="text-nowrap text-right"><font style="color:#1eb40f; font-weight: bold;"><?php echo formatNumberColorCustom($total_requireamount, 1, 0, 0, 0); ?></font></td>
                            <td class="text-nowrap text-right"><font style="color:#1eb40f; font-weight: bold;"><?php echo formatNumberColorCustom($total_realamount, 1, 0, 0, 0); ?></font></td>
                            <!-- <td class="text-nowrap text-center"><span class="<?php echo e($checkTotalPlan, false); ?>" style="font-size: 100%;"><?php echo e($checkTotalText, false); ?></span></td>
                            <td class="text-nowrap text-left">
                                <div class="progress" style="margin-bottom: 20px;">
                                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="<?php echo e(formatNumber($percentTotalProcess, 1, 2, 1), false); ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo e(formatNumber($percentProcess, 1, 2, 1), false); ?>%">
                                        <?php echo e(formatNumber($percentTotalProcess, 1, 0, 1), false); ?>%
                                    </div>
                                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="<?php echo e(formatNumber(100-$percentTotalProcess, 1, 2, 1), false); ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo e(formatNumber(100-$percentProcess, 1, 2, 1), false); ?>%">
                                        <?php echo e(formatNumber(100-$percentTotalProcess, 1, 0, 1), false); ?>%
                                    </div>
                                </div>
                                <p style="margin-bottom: 5px; display: inline-block; margin-right: 20px;"><span class="square success"></span>Đã thực hiện: <?php echo e(formatNumber($percentTotalProcess, 1, 0, 1), false); ?>%</p>
                                <p style="margin-bottom: 0; display: inline-block;"><span class="square danger"></span>Chưa thực hiện: <?php echo e(formatNumber(100-$percentTotalProcess, 1, 0, 1), false); ?>%</p>
                            </td> -->
                        </tr>
                    </tbody>
                    <?php endif; ?>                    
                </table>
            </div>
            <br>
        </div>
        <!-- /.box -->
    </div>
</div>

</form>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
<?php echo $__env->make('product-manage.cash.partials.script_process', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>