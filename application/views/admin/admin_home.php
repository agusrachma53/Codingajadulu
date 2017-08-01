<?php $this->load->view('admin/head'); ?>
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Gentelella Alela!</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>John Doe</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <?php $this->load->view('admin/admin_nav_sidebar'); ?>
          </div>
        </div>
        <!-- top navigation -->
        <?php $this->load->view('admin/admin_nav_top'); ?>
        <!-- /top navigation -->
        <!-- page content -->
        <div class="right_col" role="main">
          <!-- top tiles -->
            <?php $this->load->view('admin/admin_nav_top_tails'); ?>
          <!-- /top tiles -->

          <!-- content -->
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="row">
                <div class="col-md-12">
                  <ol class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li class="active">Input Product</li>
                  </ol>
                </div>
              </div>
              <div class="row">
                <div class="form-custom col-md-10 col-md-offset-1">
                  <form method="POST" action="<?php echo base_url('index.php/admin/insert_product'); ?>" enctype="multipart/form-data" class="col-md-6">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Name Product</label>
                      <input type="text" name="name_product" class="form-control" id="exampleInputEmail1" placeholder="Name Product">
                    </div>
                    <div class="form-group">
                      <div class="row">
                        <div class="col-md-8">
                          <label for="exampleInputPassword1">Category Product</label>
                          <select name="category" class="form-control">
                            <option class="dropdown-toggle" value="" selected>Select Category</option>
                            <?php foreach($category_brand as $rows){ ?>
                            <option value="<?php echo $rows->id; ?>"><?php echo $rows->category_name ?></option>
                            <?php } ?>
                          </select>
                        </div>
                        <div class="col-md-4">
                          <label for="exampleInputPassword1">Brand</label>
                          <select name="brand" class="form-control">
                            <option class="dropdown-toggle" value="" selected>Select Brand</option>
                            <?php foreach($category_brand as $rows){ ?>
                            <option value="<?php echo $rows->id; ?>"><?php echo $rows->brand_name ?></option>
                            <?php } ?>
                          </select>
                        </div>
                      </div>
                    </div>

                    <div class="form-group">
                      <div class="row">
                        <div class="col-md-4">
                          <label for="exampleInputPassword1">Quantity</label>
                          <input name="qty" type="text" class="form-control" id="exampleInputPassword1" placeholder="Quantity">
                        </div>
                        <div class="col-md-4">
                          <label for="exampleInputPassword1">Price</label>
                          <input name="price" type="text" class="form-control" id="exampleInputPassword1" placeholder="Price">
                        </div>
                        <div class="col-md-4">
                          <label for="exampleInputPassword1">Discount</label>
                          <input name="discount" type="text" class="form-control" id="exampleInputPassword1" placeholder="Discount">
                        </div>
                      </div>
                    </div>
                    <input type="file" id="uploadFile1" class="btn btn-default" name="userfile" value="Input Image">
                    <input type="submit" class="btn btn-success aksi" name="insert" value="Insert">
                  </form>
                  <div class="image-cover col-md-6">
                    <div id="imagePreview1" class="image-privew"><a id="reset_image" onclick="reset_image()"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a></div>
                    <div class="tiles">
                      <div id="imagePreview2" class="image-privew2"><a id="uploadFile2" href="javascript:"> <span id="uploadFile2" class="glyphicon glyphicon-ok" aria-hidden="true"></span></a></div>
                      <div id="imagePreview3" class="image-privew3"><a href="javascript:"> <span id="uploadFile2" class="glyphicon glyphicon-ok" aria-hidden="true"></span></a></div>
                      <div id="imagePreview4" class="image-privew4"><a href="javascript:"> <span id="uploadFile2" class="glyphicon glyphicon-ok" aria-hidden="true"></span></a></div>
                    </div>
                  </div>
                </div>
              </div>


            </div>
          </div>
        </div>
          <!-- end content -->
<?php $this->load->view('admin/admin_footer.php') ?>
