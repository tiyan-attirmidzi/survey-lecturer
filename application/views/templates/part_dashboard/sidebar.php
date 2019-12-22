<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?php echo base_url('assets/template/dist/img/user2-160x160.jpg'); ?>" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p><?php echo $this->session->userdata("full_name"); ?></p>
                <a href="#"><i class="fa fa-circle text-success"></i> <?php echo $this->session->userdata("email"); ?></a>
            </div>
        </div>
        <!-- search form -->
        <!-- <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                    <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
                </span>
            </div>
        </form> -->
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">Menu Utama</li>
            <li class="<?php if($this->uri->segment(2)==''){echo "active";}?>">
                <a href="<?php echo base_url('dashboard'); ?>">
                    <i class="fa fa-dashboard"></i> <span>Beranda</span>
                </a>
            </li>
            <li class="<?php if($this->uri->segment(2)=='alternative'){echo "active";}?>">
                <a href="<?php echo base_url('dashboard/alternative'); ?>">
                    <i class="fa fa-user"></i> <span>Alternatif</span>
                </a>
            </li>
            <li class="<?php if($this->uri->segment(2)=='criteria'){echo "active";}?>">
                <a href="<?php echo base_url('dashboard/criteria'); ?>">
                    <i class="fa fa-users"></i> <span>Kriteria</span>
                </a>
            </li>
            <li class="<?php if($this->uri->segment(2)=='respondent'){echo "active";}?>">
                <a href="<?php echo base_url('dashboard/respondent'); ?>">
                    <i class="fa fa-list"></i> <span>Responden</span>
                </a>
            </li>
            <li class="header">Metode</li>
            <li class="<?php if($this->uri->segment(2)=='wp'){echo "active";}?>">
                <a href="<?php echo base_url('dashboard/wp'); ?>">
                    <i class="fa fa-circle-o text-red"></i> <span>Weighted Product (WP)</span>
                </a>
            </li>
            <li class="<?php if($this->uri->segment(2)=='topsis'){echo "active";}?>">
                <a href="<?php echo base_url('dashboard/topsis'); ?>">
                    <i class="fa fa-circle-o text-yellow"></i> <span>TOPSIS</span>
                </a>
                </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
