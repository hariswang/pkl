<?php

function cek_login(){

	$cek = get_instance();
	if (!$cek->session->userdata('email')) {
		redirect('auth');
	}
}