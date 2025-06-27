<?php if(! defined('BASEPATH')) exit('No direct script acess allowed');?>
<div class="content-wrapper">
  <section class="content-header">
    <h1>
      <i class="fa fa-plus" style="color:green"> </i>  Add User
  </h1>
  <ol class="breadcrumb">
   <li><a href="<?php echo base_url('dashboard');?>"><i class="fa fa-dashboard"></i>&nbsp; Dashboard</a></li>
   <li class="active"><i class="fa fa-plus"></i>&nbsp; Add User</li>
</ol>
</section>
<section class="content">
	<div class="row">
     <div class="col-md-12">
         <div class="box box-primary">
            <div class="box-header with-border">
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <form action="<?php echo base_url('user/add');?>" method="POST" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Username</label>
                                <input type="text" class="form-control" name="nama" required="required" placeholder="Nama Pengguna">
                            </div>
                            <div class="form-group">

                                <label>National Identity Number (NISN/NIP)</label>
                                <input type="number" class="form-control" name="no" required="required" placeholder="Nomor Induk">
                            </div>
                            <div class="form-group">
                                <label>Place of birth</label>
                                <input type="text" class="form-control" name="lahir" required="required" placeholder="Contoh : Bekasi">
                            </div>
                            <div class="form-group">
                                <label>Date of birth</label>
                                <input type="date" class="form-control" name="tgl_lahir" required="required" placeholder="Contoh : 1999-05-18">
                            </div>
                            <div class="form-group">
                                <label>Username</label>
                                <input type="text" class="form-control" name="user" required="required" placeholder="Username">
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control" name="pass" required="required" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <label>Level</label>
                                <select name="level" class="form-control" required="required">
                                    <option>Officer</option>
                                    <option>Student</option>
                                    <option>Teacher</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Gender</label>
                                <br/>
                                <input type="radio" name="jenkel" value="Laki-Laki" required="required"> Male
                                <br/>
                                <input type="radio" name="jenkel" value="Perempuan" required="required"> Famale
                            </div>
                            <div class="form-group">
                                <label>Telephone</label>
                                <input id="uintTextBox" class="form-control" name="telepon" required="required" placeholder="Contoh : 089618173609">
                            </div>
                            <div class="form-group">
                                <label>E-mail</label>
                                <input type="email" class="form-control" name="email" required="required" placeholder="Contoh : suci1892@gmail.com">
                            </div>
                            <div class="form-group">
                                <label>Photo</label>
                                <input type="file" accept="image/*" name="gambar" required="required">
                            </div>
                            <div class="form-group">
                                <label>Address</label>
                                <textarea class="form-control" name="alamat" required="required"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="pull-right">
                        <button type="submit" class="btn btn-primary btn-md">Submit</button> 
                    </form>
                    <a href="<?= base_url('user');?>" class="btn btn-danger btn-md">Return</a>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
</div>
