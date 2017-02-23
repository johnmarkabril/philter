<html>
	<head>
		<title><?php echo $curpage; ?></title>
		<?php $this->load->view('common/css_files'); ?>
	</head>
	<body>

		<?php
			$this->load->view('common/navtop_admin');
		?>
		<div class="container">
			<div class="padding-top">
				<div class="ibox-content padding-five bg-nav_log">
					<h3 class="no-margin nav-log-color" style="padding-left: 15px;"><?php echo $curpage; ?></h3>
				</div>
			</div>
			<?php
				switch($curpage){
					case 'About us':
						echo $content;
						break;
					case 'Blog':
						echo $content;
						break;
					case 'Dashboard':
						echo $content;
						break;
					case 'Editorial':
						echo $content;
						break;
					case 'Entertainment':
						echo $content;
						break;
					case 'Feature':
						echo $content;
						break;
					case 'News':
						echo $content;
						break;
					case 'Staff':
						echo $content;
						break;
					case 'Videos':
						echo $content;
						break;
					case 'User Management':
						echo $content;
						break;
				}

			?>
		</div>
		
		<?php $this->load->view('common/js_files'); ?>
	</body>
</html>