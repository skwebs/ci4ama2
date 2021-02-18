<?= $this->extend('template/_layouts/base_layout'); ?>
<!-- page-css -->
<?= $this->section('page-css'); ?>
<link href="<?=base_url();?>/assets/static/vendor/smartwizard/css/smart_wizard_all.css?<?=time()?>" rel="stylesheet" type="text/css" />
<link href="<?=base_url();?>/assets/static/vendor/daterangepicker/daterangepicker.css" rel="stylesheet" type="text/css" />
<link href="<?=base_url();?>/assets/static/css/form/bs5-md-form.css?<?=time();?>" rel="stylesheet" type="text/css" />
<link href="<?=base_url();?>/assets/static/css/shadow.css?0" rel="stylesheet" type="text/css" />
<link href="<?=base_url();?>/assets/static/css/student/stu-reg.css?<?=time()?>" rel="stylesheet" type="text/css" />
<?= $this->endSection(); ?>
<?= $this->section('page-js-lib'); ?>
<?=script_tag(base_url("assets/static/vendor/smartwizard/js/jquery.smartWizard.min.js?".time()));?>
<?=script_tag(base_url("assets/static/vendor/moment/2.29.1/moment.min.js?".time()));?>
<?=script_tag(base_url("assets/static/vendor/daterangepicker/daterangepicker.min.js?".time()));?>
<?= $this->endSection(); ?>
<!-- content -->
<?= $this->section('main-content'); ?>
<!-- content -->
<div id="reg-page" ></div>
<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
-->
<?= $this->endSection(); ?>
<?= $this->section('page-js'); ?>
<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
-->
<?=script_tag(base_url("assets/static/js/student/stu_reg_ajax.js?".time()));?>
<?=script_tag(base_url("assets/static/js/student/stu_reg_page.js?".time()));?>
<?= $this->endSection(); ?>
