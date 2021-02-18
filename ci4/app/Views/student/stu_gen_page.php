<!-- home -->
<?= $this->extend('template/_layouts/base_layout'); ?>
<!-- page-css -->
<?= $this->section('page-css'); ?>
<link rel="stylesheet" href="<?=base_url();?>/assets/static/vendor/slick/1.8.1/slick.min2.css" />
<link rel="stylesheet" href="<?=base_url();?>/assets/static/css/form/bs5a2-floating-label.css?v0" />
<link rel="stylesheet" href="<?=base_url();?>/assets/static/css/home-page.css?<?=time();?>" />
<link rel="stylesheet" href="<?=base_url();?>/assets/static/css/shadow.css" />
<!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.css" />
-->
<?= $this->endSection(); ?>
<?= $this->section('page-js-lib'); ?>
<?=script_tag(base_url("assets/static/vendor/smartwizard/js/jquery.smartWizard.min.js?".time()));?>
<?=script_tag(base_url("assets/static/vendor/moment/2.29.1/moment.min.js?".time()));?>
<?=script_tag(base_url("assets/static/vendor/daterangepicker/daterangepicker.min.js?".time()));?>
<?= $this->endSection(); ?>
<!-- content -->
<?= $this->section('main-content'); ?>

<?= $this->endSection(); ?>
<?= $this->section('page-js'); ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js" integrity="sha512-lbwH47l/tPXJYG9AcFNoJaTMhGvYWhVM9YI43CT+uteTRRaiLCui8snIgyAN8XWgNjNhCqlAUdzZptso6OCoFQ==" crossorigin="anonymous"></script>
<?= $this->endSection(); ?>