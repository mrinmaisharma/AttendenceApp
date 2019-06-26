<?php $__env->startSection('title', 'Trainers'); ?>


<?php $__env->startSection('content'); ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <?php echo $__env->make('includes.form_alert', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </div>
        <div class="col-md-12">
            <a href="/master/student/add" class="btn mb-1 btn-rounded btn-outline-info">
                <i class="fa fa-plus"></i> Add Student
            </a>
            <br>
            <br>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Student Details</h4>
                    <div class="table-responsive"> 
                        <?php if(count($students)): ?>
                        <div class="table-responsive">
                            <table id="myDataTable" class="table table-hover table-bordered zero-configuration table-striped verticle-middle">
                                <thead>
                                    <tr>
                                        <th scope="col">Full Name</th>
                                        <th scope="col">Phone No.</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Batch Alloted</th>
                                        <th scope="col">Details</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($student['name']); ?></td>
                                        <td><?php echo e($student['phn_number']); ?></td>
                                        <td><?php echo e($student['email']); ?></td>
                                        <td><?php echo e($student['batch']['name']); ?></td>
                                        <td>
                                            <button type="button" class="btn mb-1 btn-rounded btn-primary" data-toggle="modal" data-target="#view-student<?php echo e($student['id']); ?>">
                                                View Details
                                            </button>
                                            <div class="modal fade" id="view-student<?php echo e($student['id']); ?>" tabindex="-1" role="dialog" style="display: none;" aria-hidden="true">
                                                <div class="modal-dialog modal-md">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" style="color:inherit;"><strong><?php echo e($student['name']); ?></strong></h5>
                                                            <button type="button" class="close" data-dismiss="modal"><span>×</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body row">
                                                            <div class="col-11">
                                                                <table class="table" style="background-color: transparent;">
                                                                    <tbody>
                                                                        <tr>
                                                                            <td><strong>Full Name</strong></td>
                                                                            <td><?php echo e($student['name']); ?></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><strong>Username</strong></td>
                                                                            <td><?php echo e($student['username']); ?></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><strong>Batch</strong></td>
                                                                            <td><?php echo e($student['batch']->name); ?></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><strong>Phone Number</strong></td>
                                                                            <td><?php echo e($student['phn_number']); ?></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><strong>WhatsApp Number</strong></td>
                                                                            <td><?php echo e(($student['whatsapp_number'] == null) ? '--' : $student['whatsapp_number']); ?></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><strong>Email</strong></td>
                                                                            <td><?php echo e($student['email']); ?></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><strong>Insititue</strong></td>
                                                                            <td><?php echo e($student['institute']); ?></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><strong>Address</strong></td>
                                                                            <td><?php echo e(($student['address'] == null) ? '--' : $student['address']); ?></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><strong>City</strong></td>
                                                                            <td><?php echo e(($student['city'] == null) ? '--' : $student['city']); ?></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><strong>State</strong></td>
                                                                            <td><?php echo e(($student['state'] == null) ? '--' : $student['state']); ?></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><strong>Pincode</strong></td>
                                                                            <td><?php echo e(($student['pincode'] == null) ? '--' : $student['pincode']); ?></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                        
                                </tbody>
                            </table>
                        </div>
                        <?php else: ?>
                        <h5 class="text-center">No Records found</h5>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('app.layout.base', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>