<?php

/* @var $this yii\web\View */

$this->title = 'Dashboard';
?>
<div class="row">
    <!-- user online-->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">User Online</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $users ?></div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-users fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- CPU Usage-->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-danger shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">CPU Usage</div>
                        <div class="row no-gutters align-items-center">
                            <div class="col-auto">
                                <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?= $cpu->error === null ? $cpu->percent . '%' : '0%' ?></div>
                            </div>
                            <div class="col">
                                <div class="progress progress-sm mr-2">
                                    <div class="progress-bar <?= $cpu->error !== null ? null : ($cpu->percent <= 50 ? 'bg-info' : 'bg-danger') ?>" role="progressbar" style="width: <?= $cpu->error === null ? $cpu->percent : '0' ?>%" aria-valuenow="<?= $cpu->error === null ? $cpu->percent : '0' ?>" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-server fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Memory usage -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-info shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Memory Usage
                        </div>
                        <div class="row no-gutters align-items-center">
                            <div class="col-auto">
                                <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?= $memory->error === null ? $memory->percent . '%' : '0%' ?></div>
                            </div>
                            <div class="col">
                                <div class="progress progress-sm mr-2">
                                    <div class="progress-bar <?= $memory->error !== null ? null : ($memory->percent <= 50 ? 'bg-info' : 'bg-danger') ?>" role="progressbar" style="width: <?= $memory->error === null ? $memory->percent : '0' ?>%" aria-valuenow="<?= $memory->error === null ? $memory->percent : '0' ?>" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-memory fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Disk Usage -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-warning shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Disk Usage</div>
                        <div class="row no-gutters align-items-center">
                            <div class="col-auto">
                                <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?= $disk->error === null ? $disk->percent . '%' : '0%' ?></div>
                            </div>
                            <div class="col">
                                <div class="progress progress-sm mr-2">
                                    <div class="progress-bar <?= $disk->error !== null ? null : ($disk->percent <= 50 ? 'bg-info' : 'bg-danger') ?>" role="progressbar" style="width: <?= $disk->error === null ? $disk->percent : '0' ?>%" aria-valuenow="<?= $disk->error === null ? $disk->percent : '0' ?>" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-database fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <!-- CPU info-->
    <div class="col-xl-6 col-lg-6">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">System detail</h6>
            </div>
            <div class="card-body">
                <?php
                if ($cpu->error != null) {
                    echo 'Error get CPU info';
                } else {
                    echo "<pre>";
                    foreach ($cpu->output as $value) {
                        echo $value . "<br>";
                    }
                    echo "</pre>";
                }
                ?>
            </div>
        </div>
    </div>

    <!-- DISK Detail -->
    <div class="col-xl-6 col-lg-6">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Disk detail</h6>
            </div>
            <div class="card-body">
                <?php
                if ($disk->error != null) {
                    echo "Error get DISK info";
                } else {
                    echo "<pre>";
                    foreach ($disk->output as $value) {
                        echo $value . "<br>";
                    }
                }
                echo "</pre>"
                ?>
            </div>
        </div>
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Memory detail</h6>
            </div>
            <div class="card-body">
                <?php
                if ($memory->error != null) {
                    echo "Error get Memory info";
                } else {
                    echo "<pre>";
                    foreach ($memory->output as $value) {
                        echo $value . "<br>";
                    }
                }
                echo "</pre>"
                ?>
            </div>
        </div>
    </div>
</div>