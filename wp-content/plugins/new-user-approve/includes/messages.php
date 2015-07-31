<?php

/**
 * The default email message that will be sent to users as they are approved.
 *
 * @return string
 */
function nua_default_approve_user_message() {
	$message = __( 'Seu acesso ao site {sitename} foi aprovado', 'new-user-approve' ) . "\r\n\r\n";
	$message .= "{username}\r\n";
	$message .= "{password}\r\n\r\n";
	$message .= "{login_url}";

	$message = apply_filters( 'new_user_approve_approve_user_message_default', $message );

	return $message;
}

/**
 * The default email message that will be sent to users as they are denied.
 *
 * @return string
 */
function nua_default_deny_user_message() {
	$message = __( 'Seu acesso ao site {sitename} foi negado.', 'new-user-approve' );

	$message = apply_filters( 'new_user_approve_deny_user_message_default', $message );

	return $message;
}

/**
 * The default message that will be shown to the user after registration has completed.
 *
 * @return string
 */
function nua_default_registration_complete_message() {
	$message = sprintf( __( 'Um email foi enviado ao administrador do site. O administrador irá verificar as informações fornecidas e então aprovar ou negar seu cadastro.', 'new-user-approve' ) );
	$message .= ' ';
	$message .= sprintf( __( 'Você receberá um email com instruções do que fazer em seguida.', 'new-user-approve' ) );

	$message = apply_filters( 'new_user_approve_pending_message_default', $message );

	return $message;
}

/**
 * The default welcome message that is shown to all users on the login page.
 *
 * @return string
 */
function nua_default_welcome_message() {
	$welcome = sprintf( __( 'A Área Restrita do BESM só é acessível para os usuários cadastrados.', 'new-user-approve' ), get_option( 'blogname' ) );

	$welcome = apply_filters( 'new_user_approve_welcome_message_default', $welcome );

	return $welcome;
}

/**
 * The default notification message that is sent to site admin when requesting approval.
 *
 * @return string
 */
function nua_default_notification_message() {
	$message = __( '{username} ({user_email}) fez o pedido de cadastro no {sitename}', 'new-user-approve' ) . "\n\n";
	$message .= "{site_url}\n\n";
	$message .= __( 'Para aprovar ou negar o acesso ao {sitename} vá para', 'new-user-approve' ) . "\n\n";
	$message .= "{admin_approve_url}\n\n";

	$message = apply_filters( 'new_user_approve_notification_message_default', $message );

	return $message;
}

/**
 * The default message that is shown to the user on the registration page before any action
 * has been taken.
 *
 * @return string
 */
function nua_default_registration_message() {
	$message = __( 'Após o seu registro, o seu pedido será enviado ao administrador para aprovação. Você receberá um email com as instruções do que fazer em seguida.', 'new-user-approve' );

	$message = apply_filters( 'new_user_approve_registration_message_default', $message );

	return $message;
}
