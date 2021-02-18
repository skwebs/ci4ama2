<?= $this->extend('template/_layouts/base_layout'); ?>
<!-- page-css -->
<?= $this->section('page-css'); ?>
<link href="<?=base_url();?>/assets/static/css/form/bs5-md-form.css?<?=time();?>" rel="stylesheet" type="text/css" />
<link href="<?=base_url();?>/assets/static/vendor/smartwizard/css/smart_wizard_all.css?<?=time()?>" rel="stylesheet" type="text/css" />
<link href="<?=base_url();?>/assets/static/css/shadow.css?0" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
<style type="text/css">
</style>
<?= $this->endSection(); ?>
<?= $this->section('page-js-lib'); ?>
<!-- page-js-lib  -->

<?= $this->endSection(); ?>
<?= $this->section('main-content'); ?>
<!-- content -->

<?= $this->endSection(); ?>
<?= $this->section('page-js'); ?>

<?= $this->endSection(); ?>