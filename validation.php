<?php
class D_Comment_Validation
{
	public function __construct()
	{
		add_action( 'wp_enqueue_scripts', array( $this, 'enqueue' ) );
	}

	public function enqueue()
	{
		wp_enqueue_script( 'jquery-validate', DCV_URL . 'assets/js/jquery.validate.min.js', array( 'jquery' ), null, false );
		wp_enqueue_script( 'validate-js', DCV_URL . 'assets/js/validate.js', null, '1.0', false );

		wp_enqueue_style( 'validate-css', DCV_URL . 'assets/css/style.css', null, '1.0', false );
	}
}

new D_Comment_Validation;