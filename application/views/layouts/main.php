<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Carwash</title>
	<!-- Tell the browser to be responsive to screen width -->
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<!-- Bootstrap 3.3.6 -->
	<link rel="stylesheet" href="<?php echo site_url('resources/css/bootstrap.min.css');?>">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="<?php echo site_url('resources/css/font-awesome.min.css');?>">
	<!-- Datetimepicker -->
	<link rel="stylesheet" href="<?php echo site_url('resources/css/bootstrap-datetimepicker.min.css');?>">
	<!-- Theme style -->
	<link rel="stylesheet" href="<?php echo site_url('resources/css/AdminLTE.min.css');?>">
	<!-- AdminLTE Skins. Choose a skin from the css/skins
             folder instead of downloading all of them to reduce the load. -->
	<link rel="stylesheet" href="<?php echo site_url('resources/css/_all-skins.min.css');?>">
	<link rel="stylesheet" href="<?php echo site_url('resources/css/chosen.css');?>">
	<link rel="stylesheet" href="<?php echo site_url('resources/css/material.min.css');?>">
	<link rel="stylesheet" href="<?php echo site_url('resources/css/dataTables.material.min.css');?>">
</head>

<body class="hold-transition skin-blue sidebar-mini">
	<div class="wrapper">
		<header class="main-header">
			<!-- Logo -->
			<a href="" class="logo">
				<!-- mini logo for sidebar mini 50x50 pixels -->
				<span class="logo-mini">CARWASH</span>
				<!-- logo for regular state and mobile devices -->
				<span class="logo-lg">CARWASH</span>
			</a>
			<!-- Header Navbar: style can be found in header.less -->
			<nav class="navbar navbar-static-top">
				<!-- Sidebar toggle button-->
				<a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>

				<div class="navbar-custom-menu">
					<ul class="nav navbar-nav">
						<!-- User Account: style can be found in dropdown.less -->
						<li class="dropdown user user-menu">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<img src="<?php echo site_url('resources/img/user.png');?>" class="user-image"
									alt="User Image">
								<span class="hidden-xs"><?php echo $this->session->userdata('nama'); ?></span>
							</a>
							<ul class="dropdown-menu">
								<!-- User image -->
								<li class="user-header">
									<img src="<?php echo site_url('resources/img/user.png');?>" class="img-circle"
										alt="User Image">

									<p>
										<?php echo $this->session->userdata('nama'); ?>
										<small>Since May. 2020</small>
									</p>
								</li>
								<!-- Menu Footer-->
								<li class="user-footer">
									<div class="pull-left">
										<?php if ($this->session->userdata('sebagai') == "admin") { ?>
										<a href="<?php echo site_url('admin/edit/1'); ?>"
											class="btn btn-default btn-flat">Profile</a>
										<?php } else { ?>
										<a href="#" class="btn btn-default btn-flat">Profile</a><?php } ?>
									</div>
									<div class="pull-right">
										<a href="<?php echo site_url('login/logout') ?>"
											class="btn btn-default btn-flat">Sign out</a>
									</div>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</nav>
		</header>
		<!-- Left side column. contains the logo and sidebar -->
		<aside class="main-sidebar">
			<!-- sidebar: style can be found in sidebar.less -->
			<section class="sidebar">
				<!-- Sidebar user panel -->
				<div class="user-panel">
					<div class="pull-left image">
						<img src="<?php echo site_url('resources/img/user.png');?>" class="img-circle" alt="User Image">
					</div>
					<div class="pull-left info">
						<p><?php echo $this->session->userdata('nama'); ?></p>
						<a href="#"><i class="fa fa-circle text-success"></i> Online</a>
					</div>
				</div>
				<!-- sidebar menu: : style can be found in sidebar.less -->
				<ul class="sidebar-menu">
					<li class="header">MAIN NAVIGATION</li>
					<?php
							if($this->session->userdata('level') == 1){
						?>
					<li>
						<a href="<?php echo site_url('dashboard/index');?>">
							<i class="fa fa-dashboard"></i> <span>Dashboard</span>
						</a>
					</li>
					<li>
						<a href="<?php echo site_url('pencuci/index');?>">
							<i class="fa fa-users"></i> <span>Pencuci</span>
						</a>
					</li>
					<li>
						<a href="<?php echo site_url('paket/index');?>">
							<i class="fa fa-user"></i> <span>Paket</span>
						</a>
					</li>
					<li>
						<a href="<?php echo site_url('antrian/index');?>">
							<i class="fa fa-star"></i> <span>Antrian</span>
						</a>
					</li>
					<li>
						<a href="<?php echo site_url('pembayaran/index');?>">
							<i class="fa fa-star"></i> <span>Pembayaran</span>
						</a>
					</li>
					<li>
						<a href="<?php echo site_url('outbox/index');?>">
							<i class="fa fa-arrow-up"></i> <span>Outbox</span>
						</a>
					</li>
					<li>
						<a href="<?php echo site_url('kas/index');?>">
							<i class="fa fa-circle"></i> <span>Kas</span>
						</a>
					</li>
					<li>
						<a href="<?php echo site_url('pembayaran/pendapatan');?>">
							<i class="fa fa-file"></i> <span>Pendapatan</span>
						</a>
					</li>
					<li>
						<a href="<?php echo site_url('pengeluaran/index');?>">
							<i class="fa fa-file"></i> <span>Pengeluaran</span>
						</a>
					</li>
					<li class="treeview">
						<a href="#">
							<i class="fa fa-files-o"></i>
							<span>Laporan</span>
							<span class="pull-right-container">
								<i class="fa fa-angle-left pull-right"></i>
							</span>
						</a>
						<ul class="treeview-menu">
							<li><a href="<?php echo site_url('laporan/antrian');?>"><i class="fa fa-circle-o"></i> Antrian</a></li>
							<li><a href="<?php echo site_url('laporan/pendapatan');?>"><i class="fa fa-circle-o"></i> Pendapatan</a></li>
							<li><a href="<?php echo site_url('laporan/pengeluaran');?>"><i class="fa fa-circle-o"></i> Pengeluaran</a></li>
						</ul>
					</li>
					<li>
						<a href="<?php echo site_url('admin/index');?>">
							<i class="fa fa-user"></i> <span>Admin</span>
						</a>
					</li>
					<?php } else { ?>
					<li>
						<a href="<?php echo site_url('dashboard/index');?>">
							<i class="fa fa-dashboard"></i> <span>Dashboard</span>
						</a>
					</li>
					<li>
						<a href="<?php echo site_url('antrian/index');?>">
							<i class="fa fa-star"></i> <span>Antrian</span>
						</a>
					</li>
					<li>
						<a href="<?php echo site_url('outbox/index');?>">
							<i class="fa fa-arrow-up"></i> <span>Outbox</span>
						</a>
					</li>
					<li>
						<a href="<?php echo site_url('kas/index');?>">
							<i class="fa fa-circle"></i> <span>Kas</span>
						</a>
					</li>
					<li>
						<a href="<?php echo site_url('pembayaran/pendapatan');?>">
							<i class="fa fa-file"></i> <span>Pendapatan</span>
						</a>
					</li>
					<li>
						<a href="<?php echo site_url('pengeluaran/index');?>">
							<i class="fa fa-file"></i> <span>Pengeluaran</span>
						</a>
					</li>
					<?php } ?>
				</ul>
			</section>
			<!-- /.sidebar -->
		</aside>

		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
			<!-- Main content -->
			<section class="content">
				<?php                    
                    if(isset($_view) && $_view)
                        $this->load->view($_view);
                    ?>
			</section>
			<!-- /.content -->
		</div>
		<!-- /.content-wrapper -->
		<footer class="main-footer">
			<strong>Carwash</strong>
		</footer>

		<!-- Control Sidebar -->
		<aside class="control-sidebar control-sidebar-dark">
			<!-- Create the tabs -->
			<ul class="nav nav-tabs nav-justified control-sidebar-tabs">

			</ul>
			<!-- Tab panes -->
			<div class="tab-content">
				<!-- Home tab content -->
				<div class="tab-pane" id="control-sidebar-home-tab">

				</div>
				<!-- /.tab-pane -->
				<!-- Stats tab content -->
				<div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
				<!-- /.tab-pane -->

			</div>
		</aside>
		<!-- /.control-sidebar -->
		<!-- Add the sidebar's background. This div must be placed
            immediately after the control sidebar -->
		<div class="control-sidebar-bg"></div>
	</div>
	<!-- ./wrapper -->

	<!-- jQuery 2.2.3 -->
	<script src="<?php echo site_url('resources/js/jquery-2.2.3.min.js');?>"></script>
	<!-- Bootstrap 3.3.6 -->
	<script src="<?php echo site_url('resources/js/bootstrap.min.js');?>"></script>
	<!-- FastClick -->
	<script src="<?php echo site_url('resources/js/fastclick.js');?>"></script>
	<!-- ChartJS -->
	<script src="<?php echo site_url('resources/js/Chart.js');?>"></script>
	<!-- AdminLTE App -->
	<script src="<?php echo site_url('resources/js/app.min.js');?>"></script>
	<!-- AdminLTE for demo purposes -->
	<script src="<?php echo site_url('resources/js/demo.js');?>"></script>
	<!-- DatePicker -->
	<script src="<?php echo site_url('resources/js/moment.js');?>"></script>
	<script src="<?php echo site_url('resources/js/bootstrap-datetimepicker.min.js');?>"></script>
	<script src="<?php echo site_url('resources/js/global.js');?>"></script>
	<script src="<?php echo site_url('resources/js/chosen.jquery.js');?>"></script>
	<script src="<?php echo site_url('resources/js/jquery.dataTables.min.js');?>"></script>
	<script src="<?php echo site_url('resources/js/dataTables.material.min.js');?>"></script>
	<script type="text/javascript">
		$('document').ready(function () {
			$('#myTable').DataTable({
				columnDefs: [{
					targets: [0, 1, 2],
					className: 'mdl-data-table__cell--non-numeric'
				}]
			});
		});

		function printContent(el) {
			var restorepage = document.body.innerHTML;
			var printcontent = document.getElementById(el).innerHTML;
			document.body.innerHTML = printcontent;
			window.print();
			document.body.innerHTML = restorepage;
		}

		$(document).ready(function(){
                $('#id_antrian').change(function(){
                    var kode_antrian= $(this).val();
                    $.ajax({
                        url : "<?php echo site_url('pembayaran/get_pembayaran');?>",
                        method : "POST",
                        data : {kode_antrian: kode_antrian},
                        async : false,
						cache : false,
                        dataType : 'json',
                        success: function(data){
							$.each(data,function(kode_antrian, nama, plat, harga){
								$('[name="nama"]').val(data.nama);
								$('[name="plat"]').val(data.plat);
								$('[name="harga"]').val(data.harga);
							});
                        }
                    });
                });
            });

	</script>
</body>

</html>
