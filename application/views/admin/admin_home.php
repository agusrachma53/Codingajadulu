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

            <table id="example">
              <thead>
                <tr>
                  <td>Title</td>
                  <td>Image</td>
                  <td>Content</td>
                  <td>Author</td>
                  <td>Category</td>
                  <td>Date</td>
                </tr>
              </thead>
            </table>

          </div>
        </div>
          <!-- end content -->

        <script type="text/javascript">
        $(document).ready(function() {
          $('#example').DataTable();
        } );
        </script>
<?php $this->load->view('admin/admin_footer.php') ?>
