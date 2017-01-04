<html>
	<head>
		<title><?php echo $curpage; ?></title>
		<?php $this->load->view('common/css_files'); ?>
	</head>
	<body>

		<?php
			$this->load->view('common/navtop_login');

			switch($curpage){
				case 'Home':
					echo $content;
					break;
				case 'About us':
					echo $content;
					break;
				case 'Blog':
					echo $content;
					break;
				case 'Editorial':
					echo $content;
					break;
				case 'Staff':
					echo $content;
					break;
				case 'News':
					echo $content;
					break;
			}

			$this->load->view('common/footer');
		?>

		<?php $this->load->view('common/js_files'); ?>
	</body>
</html>