<?php $__env->startSection('title'); ?> <?php echo e($title); ?> :: ##parent-placeholder-3c6de1b7dd91465d437ef415f94f36afc1fbc8a8## <?php $__env->stopSection(); ?>


<?php $__env->startSection('styles'); ?>

<link href="<?php echo e(asset('assets/globals/plugins/x-editables/css/bootstrap-editable.css')); ?>" rel="stylesheet"/>

<link href="<?php echo e(asset('assets/admin/css/plugins/bootstrap-wysihtml5-0.0.3.css')); ?>" rel="stylesheet"/>


<?php $__env->stopSection(); ?>


<?php $__env->startSection('main'); ?>

<h1>Welcome to the Edit template page.</h1>
<form action="<?php echo e(url('admin/savetemplate')); ?>" method="post" data-parsley-validate="true" name="form-wizard">
  <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>"> 
  <p></p>
  <input type="hidden" name="id" value="<?php echo e($template->id); ?>">
  <textarea id="bodyField" name="content"><?php echo $template->text; ?></textarea>
  <input type="submit" value="submit">
</form>

<?=app(JeroenNoten\LaravelCkEditor\CkEditor::class)->editor('bodyField');?>;

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?> ##parent-placeholder-16728d18790deb58b3b8c1df74f06e536b532695##
      <script src="<?php echo e(asset('assets/admin/js/welcome-settings-editable.js')); ?>"></script>
    <?php $__env->stopSection(); ?> 
<!-- <script type="text/javascript">
      window.onload = function () {
          
              var edt = CKEDITOR.replace('bodyField', { toolbar: 'Basic' });
CKFinder.setupCKEditor(edt, '/ckfinder/');

              var t = <%="how to set the data" %>;
              CKEDITOR.instances.editor1.setData(t);
              
}
<script type="text/javascript">

  CKEDITOR.instances['bodyField'].setData("how to start the email template");

</script> -->
<?php echo $__env->make('app.admin.layouts.default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>