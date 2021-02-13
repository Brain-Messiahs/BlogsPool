<?php $__env->startSection('body'); ?>
                               <div class="row" style="margin-top: -6%">
                                <div class="col-md-4 col-md-offset-4">
                                    <div class="box-part">
                                        <h4>Student Login</h4>
                                       
                    <form method="POST" action="<?php echo e(route('login')); ?>">
                        <?php echo csrf_field(); ?>

                        <div class="form-group ">
                            <label for="student_username" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Username')); ?></label>

                           
                                <input id="student_username" type="text" class="form-control<?php echo e($errors->has('student_username') ? ' is-invalid' : ''); ?>" name="student_username" value="<?php echo e(old('student_username')); ?>" required autofocus>

                                <?php if($errors->has('student_username')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('student_username')); ?></strong>
                                    </span>
                                <?php endif; ?>
                        </div>

                        <div class="form-group ">
                            <label for="student_password" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Password')); ?></label>

                            
                                <input id="student_password" type="password" class="form-control<?php echo e($errors->has('student_password') ? ' is-invalid' : ''); ?>" name="student_password" required>

                                <?php if($errors->has('student_password')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('student_password')); ?></strong>
                                    </span>
                                <?php endif; ?>
                           
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>>

                                    <label class="form-check-label" for="remember">
                                        <?php echo e(__('Remember Me')); ?>

                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    <?php echo e(__('Login')); ?>

                                </button>

                                <?php if(Route::has('password.request')): ?>
                                    <a class="btn btn-link" href="<?php echo e(route('password.request')); ?>">
                                        <?php echo e(__('Forgot Your Password?')); ?>

                                    </a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </form>
                </div>

                                    </div>
                                </div>
                               <?php $__env->stopSection(); ?> 
<?php echo $__env->make('../layout/main', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>