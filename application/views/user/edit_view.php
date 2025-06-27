<?php if(! defined('BASEPATH')) exit('No direct script acess allowed');?>
<div class="content-wrapper">
  <section class="content-header">
    <h1>
      <i class="fa fa-edit" style="color:green"> </i>  Update User - <?= $user->nama;?>
  </h1>
  <ol class="breadcrumb">
     <li><a href="<?php echo base_url('dashboard');?>"><i class="fa fa-dashboard"></i>&nbsp; Dashboard</a></li>
     <li class="active"><i class="fa fa-edit"></i>&nbsp; Update User - <?= $user->nama;?></li>
 </ol>
</section>
<section class="content">
	<div class="row">
       <div class="col-md-12">	
         <?php if(!empty($this->session->flashdata())){ echo $this->session->flashdata('pesan');}?>

         <div class="box box-primary">
            <div class="box-header with-border">
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <form action="<?php echo base_url('user/upd');?>" method="POST" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Username</label>
                                <input type="text" class="form-control" value="<?= $user->nama;?>" name="nama" required="required" placeholder="Nama Pengguna">
                            </div>
                            <div class="form-group">

                                <?php if($this->session->userdata('level') == 'Petugas'){?>
                                    <label>Registration number</label>
                                    <input type="number" class="form-control" name="no" value="<?= $user->nomor_induk;?>" required="required" placeholder="Nomor Induk">
                                <?php }elseif($this->session->userdata('level') == 'Siswa'){?>
                                    <label>NISN</label>
                                    <input type="number" class="form-control" name="no" value="<?= $user->nomor_induk;?>" required="required" placeholder="NISN">
                                <?php }elseif($this->session->userdata('level') == 'Guru'){?>
                                    <label>NIP</label>
                                    <input type="number" class="form-control" name="no" value="<?= $user->nomor_induk;?>" required="required" placeholder="NIP">
                                <?php }?>

                            </div>
                            <div class="form-group">
                                <label>Place of birth</label>
                                <input type="text" class="form-control" name="lahir" value="<?= $user->tempat_lahir;?>" required="required" placeholder="Contoh : Bekasi">
                            </div>
                            <div class="form-group">
                                <label>Date of birth</label>
                                <input type="date" class="form-control" name="tgl_lahir" value="<?= $user->tgl_lahir;?>" required="required" placeholder="Contoh : 1999-05-18">
                            </div>
                            <div class="form-group">
                                <label>Username</label>
                                <input type="text" class="form-control" readonly value="<?= $user->user;?>"  name="user" required="required" placeholder="Username">
                            </div>
                            <div class="form-group">
                                <label>Password (opsional)</label>
                                <input type="password" class="form-control" name="pass" placeholder="Isi Password Jika di Perlukan Ganti">
                            </div>
                            <div class="form-group">
                                <label>Level</label>
                                <select name="level" class="form-control" required="required">
                                   <?php if($this->session->userdata('level') == 'Petugas'){?>
                                      <option <?php if($user->level == 'Petugas'){ echo 'selected';}?>>Officer</option>
                                      <option <?php if($user->level == 'Siswa'){ echo 'selected';}?>>Student</option>
                                      <option <?php if($user->level == 'Guru'){ echo 'selected';}?>>Teacher</option>
                                  <?php }elseif($this->session->userdata('level') == 'Siswa'||$this->session->userdata('level') == 'Guru'){?>
                                      <option <?php if($user->level == 'Siswa'){ echo 'selected';}?>>Student</option>
                                      <option <?php if($user->level == 'Guru'){ echo 'selected';}?>>Teacher</option>
                                  <?php }?>
                              </select>
                          </div>
                          <div class="form-group">
                            <label>Gender</label>
                            <br/>
                            <input type="radio" name="jenkel" <?php if($user->jenkel == 'Laki-Laki'){ echo 'checked';}?> value="Laki-Laki" required="required"> Male
                            <br/>
                            <input type="radio" name="jenkel" <?php if($user->jenkel == 'Perempuan'){ echo 'checked';}?> value="Perempuan" required="required"> Female
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Telephone</label>
                            <input id="uintTextBox" class="form-control" value="<?= $user->telepon;?>" name="telepon" required="required" placeholder="Contoh : 089618173609">
                        </div>
                        <div class="form-group">
                            <label>E-mail</label>
                            <input type="email"  value="<?= $user->email;?>" readonly class="form-control" name="email" required="required" placeholder="Contoh : suci1892@gmail.com">
                        </div>
                        <div class="form-group">
                            <label>Passport photo</label>
                            <input type="file" accept="image/*" name="gambar">

                            <br/>
                            <img src="<?= base_url('assets_style/image/'.$user->foto);?>" class="img-responsive" alt="#">
                        </div>
                        <div class="form-group">
                            <label>Address</label>
                            <textarea class="form-control" name="alamat"  required="required"><?= $user->alamat;?></textarea>
                            <input type="hidden" class="form-control" value="<?= $user->id_login;?>" name="id_login">
                            <input type="hidden" class="form-control" value="<?= $user->foto;?>" name="foto">
                        </div>
                    </div>
                </div>
                <div class="pull-right">
                    <button type="submit" class="btn btn-primary btn-md">Edit Data</button> 
                </form>
                <?php if($this->session->userdata('level') == 'Petugas'){?>
                 <a href="<?= base_url('user');?>" class="btn btn-danger btn-md">Return</a>
             <?php }elseif($this->session->userdata('level') == 'Siswa'||$this->session->userdata('level') == 'Guru'){?>
                 <a href="<?= base_url('transaksi');?>" class="btn btn-danger btn-md">Return</a>
             <?php }?>
         </div>
     </div>
 </div>
</div>
</div>
</section>
</div>
