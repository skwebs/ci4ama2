<?= $this->extend('template/_layouts/base_layout'); ?>
<!-- page-css -->
<?= $this->section('page-css'); ?>
<link href="<?=base_url();?>/assets/static/css/form/bs5-md-form.css?<?=time();?>" rel="stylesheet" type="text/css" />
<link href="<?=base_url();?>/assets/static/vendor/smartwizard/css/smart_wizard_all.css?<?=time()?>" rel="stylesheet" type="text/css" />
<link href="<?=base_url();?>/assets/static/css/shadow.css?0" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
<link href="<?=base_url();?>/assets/static/css/student/stu-reg.css?0" rel="stylesheet" type="text/css" />
<style type="text/css">
 
</style>
<?= $this->endSection(); ?>
<?= $this->section('page-js-lib'); ?>
<?=script_tag(base_url("assets/static/vendor/smartwizard/js/jquery.smartWizard.min.js?".time()));?>
<?=script_tag(base_url("assets/static/vendor/moment/2.29.1/moment.min.js?".time()));?>
<?=script_tag(base_url("assets/static/vendor/daterangepicker/daterangepicker.min.js?".time()));?>
<?= $this->endSection(); ?>
<!-- content -->
<?= $this->section('main-content'); ?>
<!-- content -->
<!-- content -->
<div class="bg-darkblue  p-4">
  <img style="width:99%; max-width:500px;" src="<?=base_url("assets/static/img/ama/ama-txt-w.png")?>">
  <h1 class="d-none text-info">Anshu Memorial Academy <strong>Student Registration Form</strong>.</h1>
</div>
<div class="container-fluid">
  <p class="h3 my-4 text-secondary">Online Student Registration</p>
  <p class="mt-2 mb-0 text-muted" style="font-size:.75rem;">All [<span class="text-danger">*</span>] marked fields are mandatory fields. Must fill it.</p>
  <hr class="hr m-0">
</div>
<div class=" md-form md-form-outline px-3 py-4 rounded">
  <?php $attr = ['class'=>'remove-validation-icon','id'=>'regForm'];?>
  <?=form_open_multipart('student/register',$attr);?>
  <!--<form autocomplete="" class="remove-validation-icon" method="post" id="regForm" action="<?=site_url('student/register');?>" enctype="multipart/form-data">
          <!--<form method="post" id="editForm" action="<?=site_url('studentctrl/actionUpdate/');?>" enctype="multipart/form-data">-->
  <div id="smartwizard" class="p-0 m-0">
    <ul class="nav text-center p-0 m-0">
      <li>
        <a class="nav-link" href="#step-1">Student Details</a>
      </li>
      <li>
        <a class="nav-link" href="#step-2">Parents Details</a>
      </li>
      <li>
        <a class="nav-link" href="#step-3">About Parents</a>
      </li>
      <li>
        <a class="nav-link" href="#step-4">About Contact</a>
      </li>
    </ul>
    <div class="tab-content">
      <fieldset id="step-1" class="tab-pane form-step-0 px-3 py-2 mb-4 rounded" rolr="tabpanel">
        <p class="mb-3 py-3 h4">Student Details</p>
        <div class="row">
<!--<div class="col-md-12">
            <div class="form-group mb-3 ">
              <input id="student_name" type="text" onblur="validateInp(this)" class="form-control fields" value="<?=set_value('student_name')?>" name="student_name" placeholder=" " pattern="^([A-Za-z]{3,15}\s)*[A-Za-z]{3,15}$" required>
              <span class="md-item-underline"></span>
              <label for="student_name">Student Name</label>
            </div>
          </div>
          -->
          <!-- student name -->
          <div class="col-md-4">
            <div class="form-group mb-3 ">
              <input aria-label="First Name" id="firstname" type="text" onblur="validateInp(this)" class="form-control fields" name="first_name" placeholder=" " pattern="^([A-Za-z]{3,15}\s)*[A-Za-z]{3,15}$" required>
              <span class="md-item-underline"></span>
              <label for="firstname">First Name</label>
            </div>
          </div>
<div class="col-md-4">
            <div class="form-group mb-3 ">
              <input id="midname" type="text" onblur="validateInp(this)" class="form-control fields" name="mid_name" placeholder=" " pattern="^([A-Za-z]{3,15}\s)*[A-Za-z]{3,15}$" required>
              <span class="md-item-underline"></span>
              <label for="midname">Middle Name</label>
            </div>
          </div>
<div class="col-md-4">
            <div class="form-group mb-3 ">
              <input id="lastname" type="text" onblur="validateInp(this)" class="form-control fields" name="last_name" placeholder=" " pattern="^([A-Za-z]{3,15}\s)*[A-Za-z]{3,15}$" required>
              <span class="md-item-underline"></span>
              <label for="lastname">Last Name</label>
            </div>
          </div>
          
          <!-- gender -->
          <div class="col-md-6">
            <div class="form-group mb-3">
              <select id="gender" name="gender" onblur="validateInp(this)" class="form-select fields" required pattern="[^\0]">
                <option value=""></option>
                <option <?= set_select('gender','Male') ?> value="Male">Male</option>
                <option <?= set_select('gender','Female') ?> value="Female">Female</option>
                <option <?= set_select('gender','Transgender') ?> value="Transgender">Transgender</option>
              </select>
              <span class="md-item-underline"></span>
              <label for="gender">Gender</label>
            </div>
          </div>
          <!-- dob -->
          <div class="col-md-6">
            <div class="form-group mb-3">
              <input type="text" id="dob" onblur="validateInp(this)" class="drp form-control fields" value="<?=set_value('dob')?>" name="dob" placeholder=" " required pattern="(^(((0[1-9]|1[0-9]|2[0-8])[-](0[1-9]|1[012]))|((29|30|31)[-](0[13578]|1[02]))|((29|30)[-](0[4,6,9]|11)))[-](19|[2-9][0-9])\d\d$)|(^29[-]02[-](19|[2-9][0-9])(00|04|08|12|16|20|24|28|32|36|40|44|48|52|56|60|64|68|72|76|80|84|88|92|96)$)">
              <span class="md-item-underline"></span>
              <label for="dob">Date of Birth</label>
            </div>
          </div>
          <!-- aadhaar number -->
          <div class="col-md-6">
            <div class="form-group mb-3">
              <input id="aadhaar" type="number" onblur="validateInp(this)" onkeyup="(this.value=this.value.substr(0,12))" class="form-control fields" value="<?=set_value('aadhaar')?>" name="aadhaar" placeholder=" " min="1" max="999999999999">
              <span class="md-item-underline"></span>
              <label for="aadhaar">Aadhaar</label>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group mb-3">
              <input type="text" list="blood-group-list" class="form-control fields" value="" name="blood_group" onblur="validateInp(this)" id="blood-group" placeholder=" ">
              <datalist id="blood-group-list">
                <option <?= set_select('blood_group','O+') ?> value="O+">O+</option>
                <option <?= set_select('blood_group','O-') ?> value="O-">O-</option>
                <option <?= set_select('blood_group','A+') ?> value="A+">A+</option>
                <option <?= set_select('blood_group','A-') ?> value="A-">A-</option>
                <option <?= set_select('blood_group','B+') ?> value="B+">B+</option>
                <option <?= set_select('blood_group','B-') ?> value="B-">B-</option>
                <option <?= set_select('blood_group','AB+') ?> value="AB+">AB+</option>
                <option <?= set_select('blood_group','AB-') ?> value="AB-">AB-</option>
              </datalist>
              <span class="md-item-underline"></span>
              <label for="blood-group">Blood Group</label>
            </div>
          </div>
          <!-- blood group --
          <div class="col-md-6">
            <div class="form-group mb-3">
              <select value="" id="blood-group" oninput="(this.setAttribute('value', this.value))" onblur="validateInp(this)" class="form-select fields" name="blood_group" placeholder=" ">
                <option value=""></option>
                <option <?= set_select('blood_group','O+') ?> value="O+">O+</option>
                <option <?= set_select('blood_group','O-') ?> value="O-">O-</option>
                <option <?= set_select('blood_group','A+') ?> value="A+">A+</option>
                <option <?= set_select('blood_group','A-') ?> value="A-">A-</option>
                <option <?= set_select('blood_group','B+') ?> value="B+">B+</option>
                <option <?= set_select('blood_group','B-') ?> value="B-">B-</option>
                <option <?= set_select('blood_group','AB+') ?> value="AB+">AB+</option>
                <option <?= set_select('blood_group','AB-') ?> value="AB-">AB-</option>
              </select>
              <span class="md-item-underline"></span>
              <label for="blood-group">Blood Group</label>
            </div>
          </div>
          <!-- nationality & input file -->
          <!-- nationality --
			<div class="col-md-12" >
			 <div class="form-group mb-3">
               <select id="nationality" name="nationality" onblur="validateInp(this)" class="form-select fields" required pattern="[^\0]">
                 <option value=""></option>
                 <option <?=set_select('nationality','Indian')?>value="Indian">Indian</option>
               </select>
               <span class="md-item-underline"></span>
               <label for="nationality">Nationality</label>
             </div>
             </div>
             -->
          <!-- mobile -->
          <div class="col-md-6">
            <div class="form-group mb-3">
              <input id="mobile" type="tel" onblur="validateInp(this)" class="form-control fields" value="<?=set_value('mobile')?>" name="mobile" placeholder=" " maxlength="10" required="required" pattern="^[6-9][0-9]{9}$">
              <span class="md-item-underline"></span>
              <label for="mobile">Mobile Number</label>
            </div>
          </div>
          <!-- email -->
          <div class="col-md-6">
            <div class="form-group mb-3">
              <input id="email" type="email" required onblur="validateInp(this)" class="form-control fields" value="<?=set_value('email')?>" name="email" placeholder=" " pattern='^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$'>
              <span class="md-item-underline"></span>
              <label for="email">Email</label>
            </div>
          </div>
        </div><!-- //row -->
        
      </fieldset>
      <fieldset id="step-2" class="tab-pane form-step-1 px-3 py-2 mb-4 rounded" rolr="tabpanel">
        <p class="mb-3 py-3 h4">Parents Details</p>
        <div class="row">
          <!-- mother name -->
          <div class="col-md-6">
            <div class="form-group mb-3">
              <input id="mother_name" type="text" onblur="validateInp(this)" class="form-control fields" value="<?=set_value('mother_name')?>" name="mother_name" placeholder=" " required="required" pattern="^([A-Za-z]{3,15}\s)*[A-Za-z]{3,15}$">
              <span class="md-item-underline"></span>
              <label for="mother_name">Mother's Name</label>
            </div>
          </div>
          <!-- father name -->
          <div class="col-md-6">
            <div class="form-group mb-3">
              <input id="father_name" type="text" onblur="validateInp(this)" class="form-control fields" value="<?=set_value('father_name')?>" name="father_name" placeholder=" " required="required" pattern="^([A-Za-z]{3,15}\s)*[A-Za-z]{3,15}$">
              <span class="md-item-underline"></span>
              <label for="father_name">Father's Name</label>
            </div>
          </div>
          <!-- category -->
          <div class="col-md-6">
            <div class="form-group mb-3">
              <select id="category" onblur="validateInp(this)" class="form-select fields" name="category" placeholder=" " required>
                <option value=""></option>
                <option <?= set_select('category','General') ?> value="General">General</option>
                <option <?= set_select('category','OBC') ?> value="OBC">OBC</option>
                <option <?= set_select('category','ST/SC') ?> value="SC/ST">SC/ST</option>
                <option <?= set_select('category','Staff') ?> value="Staff">Staff</option>
              </select>
              <span class="md-item-underline"></span>
              <label for="category">Category</label>
            </div>
          </div>
          <!-- religion -->
          <div class="col-md-6">
            <div class="form-group mb-3">
              <select id="religion" name="religion" onblur="validateInp(this)" class="form-select fields" required pattern="[^\0]">
                <option value=""></option>
                <option <?= set_select('religion','Hindu') ?> value="Hindu">Hindu</option>
                <option <?= set_select('religion','Muslim') ?> value="Muslim">Muslim</option>
                <option <?= set_select('religion','Sikh') ?> value="Sikh">Sikh</option>
                <option <?= set_select('religion','Christian') ?> value="Christian">Christian</option>
                <option <?= set_select('religion','Buddhist') ?> value="Buddhist">Buddhist</option>
                <option <?= set_select('religion','Jainism') ?> value="Jainism">Jainism</option>
                <option <?= set_select('religion','Others') ?> value="Others">Others</option>
              </select>
              <span class="md-item-underline"></span>
              <label for="religion">Religion</label>
            </div>
          </div>
        </div>
      </fieldset>
      <fieldset id="step-3" class="tab-pane form-step-2 px-3 py-2 mb-4 rounded" rolr="tabpanel">
        <!-- ========= Parents Details ========= -->
        <p class="h4 my-4">About Parents</p>
        <div class="row">
          <div class="col-md-6">
            <p class="h6">About Mother</p>
            <!-- Mother's Occupation -->
            <div class="form-group mt-4">
              <input type="text" list="mother-occup-list" class="form-control fields" value="<?=set_value('mother_occup')?>" name="mother_occup" onblur="validateInp(this)" id="mother_occupation" placeholder=" " required>
              <datalist id="mother-occup-list">
                <option value=""></option>
                <option value="House Wife">House Wife</option>
                <option value="Self Employed">Self Employed</option>
                <option value="Doctor">Doctor</option>
                <option value="Farmer">Farmer</option>
                <option value="Govt. Job">Govt. Job</option>
                <option value="Teacher">Teacher</option>
              </datalist>
              <span class="md-item-underline"></span>
              <label for="mother_occupation">Mother's Occupation</label>
            </div>
            <!-- Mother's Qualification -->
            <div class="form-group mt-4">
              <input type="text" list="mother-qual-list" class="form-control fields" value="<?=set_value('mother_qual')?>" name="mother_qual" onblur="validateInp(this)" id="mother_qualification" placeholder=" " required>
              <datalist id="mother-qual-list">
                <option value=""></option>
                <option value="Post Graduation">Post Graduation</option>
                <option value="Graduation">Graduation</option>
                <option value="12th">12th</option>
                <option value="10th">10th</option>
                <option value="Under 10th">Under 10th</option>
                <option value="None">None</option>
              </datalist>
              <span class="md-item-underline"></span>
              <label for="mother_qualification">Mother's Qualification</label>
            </div>
            <!-- Mother's Contact -->
            <div class="form-group mt-4">
              <input type="tel" class="form-control fields" value="<?=set_value('mother_mob')?>" name="mother_mob" onblur="validateInp(this)" id="mother_mobile" placeholder=" " required pattern="^[6-9][0-9]{9}$" maxlength="10">
              <span class="md-item-underline"></span>
              <label for="mother_mobile" class="form-label">Mother's Contact No.</label>
            </div>
          </div>
          <div class="col-md-6">
            <!--========= Father Details -->
            <p class="h6 mt-5 mt-md-0">About Father</p>
            <!-- father's Occupation -->
            <div class="form-group mt-4">
              <input type="text" list="father-occup-list" class="form-control fields" value="<?=set_value('father_occup')?>" name="father_occup" onblur="validateInp(this)" id="father_occupation" placeholder=" " required>
              <datalist id="father-occup-list">
                <option value=""></option>
                <option value="Govt. Job">Govt. Job</option>
                <option value="Pvt. Job">Pvt. Job</option>
                <option value="Self Employed">Self Employed</option>
                <option value="Business">Business</option>
                <option value="Civil Servant">Civil Servant</option>
                <option value="Doctor">Doctor</option>
                <option value="Engineer">Engineer</option>
                <option value="Farmer">Farmer</option>
                <option value="Others">Others</option>
              </datalist>
              <span class="md-item-underline"></span>
              <label for="father_occupation">Father's Occupation</label>
            </div>
            <!-- father's Qualification -->
            <div class="form-group mt-4">
              <input type="text" list="father-qual-list" class="form-control fields" value="<?=set_value('father_qual')?>" name="father_qual" onblur="validateInp(this)" id="father_qualification" placeholder=" " required>
              <datalist id="father-qual-list">
                <option value=""></option>
                <option value="Post Graduation">Post Graduation</option>
                <option value="Graduation">Graduation</option>
                <option value="12th">12th</option>
                <option value="10th">10th</option>
                <option value="Under 10th">Under 10th</option>
                <option>None</option>
              </datalist>
              <span class="md-item-underline"></span>
              <label for="father_qualification">Father's Qualification</label>
            </div>
            <!-- Father's Contact -->
            <div class="form-group mt-4">
              <input type="tel" class="form-control fields" value="<?=set_value('father_mob')?>" name="father_mob" onblur="validateInp(this)" id="father-mobile" placeholder=" " required pattern="^[6-9][0-9]{9}$" maxlength="10">
              <span class="md-item-underline"></span>
              <label for="father-mobile" class="form-label">Father's Contact No.</label>
            </div>
          </div>
        </div>
        <p class="h6 mt-5">Financial Condition</p>
        <!-- Family income -->
        <div class="form-group mt-4">
          <input type="number" min="120000" class="form-control fields" onblur="validateInp(this)" id="income" value="<?=set_value('income')?>" name="income" placeholder=" " required>
          <span class="md-item-underline"></span>
          <label for="income" class="form-label">Gaurdian Annual Income</label>
        </div>
      </fieldset>
      <fieldset id="step-4" class="tab-pane form-step-3 px-3 py-2 mb-4 rounded" rolr="tabpanel">
        <p class="h4 mt-2">Communication</p>
        <div class="row">
          <div class="col-md-6">
            <!-- address1 -->
            <div class="form-group mt-2">
              <textarea class="form-control fields" name="address1" id="address1" onblur="validateInp(this)" placeholder=" " required><?=set_value('address1')?></textarea>
              <span class="md-item-underline"></span>
              <label for="address1" class="form-label">Present Address</label>
            </div>
            <!-- address is same checkbox -->
            <div class="px-3 mt-2">
              <div class="form-check text-muted">
                <input <?= set_checkbox('addr', 'same') ?> name="addr" class="form-check-input fields" type="checkbox" value="same" id="addIsSame">
                <label class="form-check-label" for="addIsSame">
                  Both addresses are the same.
                </label>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <!-- address2 -->
            <div class="form-group mt-2">
              <textarea class="form-control  fields" name="address2" onblur="validateInp(this)" id="address2" placeholder=" " required><?=set_value('address1')?></textarea>
              <span class="md-item-underline"></span>
              <label for="address2" class="form-label">Permanent Address</label>
            </div>
          </div>
          <div class="text-muted">
            <!-- contact person radio button -->
            <p class="h6 mt-4">Contact Person <span class="text-danger">*</span></p>
            <input type="radio" value="Parents" class="btn-check  fields" <?= set_radio('contact_person', 'Parents') ?> name="contact_person" onblur="validateInp(this)" id="cp-parents" required autocomplete="off">
            <label class="btn btn-outline-primary" for="cp-parents">Parents (Mother &amp; Father)</label>
            or,
            <input type="radio" value="Other" class="btn-check" <?= set_radio('contact_person', 'Other') ?>name="contact_person" id="cp-other" autocomplete="off">
            <label class="btn btn-outline-primary" for="cp-other">Other</label>
          </div>
          <!-- contact person section -->
          <section class="collaps" id="contact_person_sec">
            <!-- contact person name -->
            <div class="form-group mt-4">
              <input disabled type="text" class="form-control fields" value="<?=set_value('cp_name')?>" name="cp_name" onblur="validateInp(this)" id="contact_person" placeholder=" " pattern="^([A-Za-z]{3,15}\s)*[A-Za-z]{3,15}$">
              <span class="md-item-underline"></span>
              <label for="contact_person" class="form-label">Contact Person</label>
            </div>
            <!-- contact person relation -->
            <div class="form-group mt-4">
              <input disabled type="text" class="form-control fields" value="<?=set_value('cp_rel')?>" name="cp_rel" onblur="validateInp(this)" id="contact_person_rel" placeholder=" " pattern="^([A-Za-z]{3,15}\s)*[A-Za-z]{3,15}$">
              <span class="md-item-underline"></span>
              <label for="contact_person_rel" class="form-label">Contact Person Relation</label>
            </div>
            </section>
            
<div class="col-9">
            <!-- input file -->
            <div class="form-group">
              <input class="form-control" type="file" name="student_image" id="img" accept="image/*" required>
            </div>
          </div>
          <!-- image preview -->
          <div class="col-3 mb-3">
            <label for="img" class="mt-1 mt-md-0 me-auto">
              <div class="img-preview border">
                <img height="100" width="75">
              </div>
            </label>
          </div>
          
          
        </div>
      </fieldset>
    </div>
  </div>
  <div class="col-auto d-flex justify-content-end">
    <input class="d-none btn btn-primary mb-3 " type="submit" value="Register">
    <input class="d-none btn btn-outline-secondary mb-3 ms-4" type="reset" value="Reset">
  </div>
  </form>
</div>
<?= $this->endSection(); ?>
<?= $this->section('page-js'); ?>
<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
-->
<?=script_tag(base_url("assets/static/js/student/stu_reg_page.js?".time()));?>
<?=script_tag(base_url("assets/static/js/student/stu_reg_ajax.js?".time()));?>
<?= $this->endSection(); ?>