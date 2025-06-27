<?php if(! defined('BASEPATH')) exit('No direct script acess allowed');?>
<div class="content-wrapper">
  <section class="content-header">
    <h1>
      <i class="fa fa-plus" style="color:green"> </i>  <?= $title_web;?>
    </h1>
    <ol class="breadcrumb">
			<li><a href="<?php echo base_url('dashboard');?>"><i class="fa fa-dashboard"></i>&nbsp; Dashboard</a></li>
			<li class="active"><i class="fa fa-plus"></i>&nbsp;  <?= $title_web;?></li>
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
                    <form action="<?php echo base_url('data/prosesbuku');?>" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-sm-6">
								<div class="form-group">
									<label>Category</label>
									<select class="form-control select2" required="required"  name="kategori">
										<option disabled selected value> -- Select Category -- </option>
										<?php foreach($kats as $isi){?>
											<option value="<?= $isi['id_kategori'];?>"><?= $isi['nama_kategori'];?></option>
										<?php }?>
									</select>
								</div>
                                <div class="form-group">
                                    <label>Shelf / Location</label>
                                    <select name="rak" class="form-control select2" required="required">
										<option disabled selected value> -- Select Shelf / Location -- </option>
										<?php foreach($rakbuku as $isi){?>
											<option value="<?= $isi['id_rak'];?>"><?= $isi['nama_rak'];?></option>
										<?php }?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>ISBN</label>
                                    <input type="text" class="form-control" name="isbn"  placeholder="Contoh ISBN : 978-602-8123-35-8">
                                </div>
                                <div class="form-group">
                                    <label>Book title</label>
                                    <input type="text" class="form-control" name="title" placeholder="Contoh : Cara Cepat Belajar Pemrograman Web">
                                </div>
                                <div class="form-group">
                                    <label>Author Name</label>
                                    <input type="text" class="form-control" name="pengarang" placeholder="Nama Pengarang">
                                </div>
                                <div class="form-group">
                                    <label>Publisher</label>
                                    <input type="text" class="form-control" name="penerbit" placeholder="Nama Penerbit">
                                </div>
                                <div class="form-group">
                                    <label>Fiscal year</label>
                                    <input type="number" class="form-control" name="thn" placeholder="Tahun Buku : 2019">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Number of Books</label>
                                    <input type="number" class="form-control" name="jml" placeholder="Jumlah buku : 12">
                                </div>
								
                                <div class="form-group">
                                    <label>Cover <small style="color:green">(image) * optional</small></label>
                                    <input type="file" accept="image/*" name="gambar">
                                </div>
                                <div class="form-group">
                                    <label>Book Attachments <small style="color:green">(pdf) *optional</small></label>
                                    <input type="file" accept="application/pdf" name="lampiran">
                                </div>
                                <div class="form-group">
                                    <label>Other Information</label>
                                    <textarea class="form-control" name="ket" id="summernotehal" style="height:120px"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="pull-right">
							<input type="hidden" name="tambah" value="tambah">
                            <button type="submit" class="btn btn-primary btn-md">Submit</button> 
                    </form>
                            <a href="<?= base_url('data');?>" class="btn btn-danger btn-md">Return</a>
                        </div>
		        </div>
	        </div>
	    </div>
    </div>
</section>
</div>
