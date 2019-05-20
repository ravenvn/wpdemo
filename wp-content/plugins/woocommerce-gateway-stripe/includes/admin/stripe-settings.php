<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

return apply_filters(
	'wc_stripe_settings',
	array(
		'enabled'                       => array(
			'title'       => __( 'Enable/Disable', 'woocommerce-gateway-stripe' ),
			'label'       => __( 'Enable Stripe', 'woocommerce-gateway-stripe' ),
			'type'        => 'checkbox',
			'description' => '',
			'default'     => 'no',
		),
		'title'                         => array(
			'title'       => __( 'Title', 'woocommerce-gateway-stripe' ),
			'type'        => 'text',
			'description' => __( 'This controls the title which the user sees during checkout.', 'woocommerce-gateway-stripe' ),
			'default'     => __( 'Credit Card (Stripe)', 'woocommerce-gateway-stripe' ),
			'desc_tip'    => true,
		),
		'description'                   => array(
			'title'       => __( 'Description', 'woocommerce-gateway-stripe' ),
			'type'        => 'text',
			'description' => __( 'This controls the description which the user sees during checkout.', 'woocommerce-gateway-stripe' ),
			'default'     => __( 'Pay with your credit card via Stripe.', 'woocommerce-gateway-stripe' ),
			'desc_tip'    => true,
		),
		'webhook'                       => array(
			'title'       => __( 'Webhook Endpoints', 'woocommerce-gateway-stripe' ),
			'type'        => 'title',
			/* translators: webhook URL */
			'description' => $this->display_admin_settings_webhook_description(),
		),
		'testmode'                      => array(
			'title'       => __( 'Test mode', 'woocommerce-gateway-stripe' ),
			'label'       => __( 'Enable Test Mode', 'woocommerce-gateway-stripe' ),
			'type'        => 'checkbox',
			'description' => __( 'Place the payment gateway in test mode using test API keys.', 'woocommerce-gateway-stripe' ),
			'default'     => 'yes',
			'desc_tip'    => true,
		),
		'test_publishable_key'          => array(
			'title'       => __( 'Test Publishable Key', 'woocommerce-gateway-stripe' ),
			'type'        => 'password',
			'description' => __( 'Get your API keys from your stripe account.', 'woocommerce-gateway-stripe' ),
			'default'     => '',
			'desc_tip'    => true,
		),
		'test_secret_key'               => array(
			'title'       => __( 'Test Secret Key', 'woocommerce-gateway-stripe' ),
			'type'        => 'password',
			'description' => __( 'Get your API keys from your stripe account.', 'woocommerce-gateway-stripe' ),
			'default'     => '',
			'desc_tip'    => true,
		),
		'publishable_key'               => array(
			'title'       => __( 'Live Publishable Key', 'woocommerce-gateway-stripe' ),
			'type'        => 'password',
			'description' => __( 'Get your API keys from your stripe account.', 'woocommerce-gateway-stripe' ),
			'default'     => '',
			'desc_tip'    => true,
		),
		'secret_key'                    => array(
			'title'       => __( 'Live Secret Key', 'woocommerce-gateway-stripe' ),
			'type'        => 'password',
			'description' => __( 'Get your API keys from your stripe account.', 'woocommerce-gateway-stripe' ),
			'default'     => '',
			'desc_tip'    => true,
		),
		'inline_cc_form'                => array(
			'title'       => __( 'Inline Credit Card Form', 'woocommerce-gateway-stripe' ),
			'type'        => 'checkbox',
			'description' => __( 'Choose the style you want to show for your credit card form. When unchecked, the credit card form will display separate credit card number field, expiry date field and cvc field.', 'woocommerce-gateway-stripe' ),
			'default'     => 'no',
			'desc_tip'    => true,
		),
		'statement_descriptor'          => array(
			'title'       => __( 'Statement Descriptor', 'woocommerce-gateway-stripe' ),
			'type'        => 'text',
			'description' => __( 'Statement descriptors are limited to 22 characters, cannot use the special characters >, <, ", \, \', *, and must not consist solely of numbers. This will appear on your customer\'s statement in capital letters.', 'woocommerce-gateway-stripe' ),
			'default'     => '',
			'desc_tip'    => true,
		),
		'capture'                       => array(
			'title'       => __( 'Capture', 'woocommerce-gateway-stripe' ),
			'label'       => __( 'Capture charge immediately', 'woocommerce-gateway-stripe' ),
			'type'        => 'checkbox',
			'description' => __( 'Whether or not to immediately capture the charge. When unchecked, the charge issues an authorization and will need to be captured later. Uncaptured charges expire in 7 days.', 'woocommerce-gateway-stripe' ),
			'default'     => 'yes',
			'desc_tip'    => true,
		),
		'three_d_secure'                => array(
			'title'       => __( '3D Secure', 'woocommerce-gateway-stripe' ),
			'label'       => __( 'Require 3D Secure when applicable', 'woocommerce-gateway-stripe' ),
			'type'        => 'checkbox',
			'description' => __( 'Some payment methods have 3D Secure feature. This is an extra security layer for your store. Choose how to handle payments when 3D Secure is recommended. Enabling would require customers to use 3D Secure when recommended.', 'woocommerce-gateway-stripe' ),
			'default'     => 'yes',
			'desc_tip'    => true,
		),
		'stripe_checkout'               => array(
			'title'       => __( 'Stripe Modal Checkout', 'woocommerce-gateway-stripe' ),
			'label'       => __( 'Enable Stripe Checkout', 'woocommerce-gateway-stripe' ),
			'type'        => 'checkbox',
			'description' => __( 'If enabled, this option shows a "pay" button and modal credit card form on the checkout, instead of credit card fields directly on the page. We recommend you leave this disabled and use the embedded form as that is the preferred method.', 'woocommerce-gateway-stripe' ),
			'default'     => 'no',
			'desc_tip'    => true,
		),
		'stripe_checkout_image'         => array(
			'title'       => __( 'Stripe Checkout Image', 'woocommerce-gateway-stripe' ),
			'description' => __( 'Optionally enter the URL to a 128x128px image of your brand or product. e.g. <code>https://yoursite.com/wp-content/uploads/2013/09/yourimage.jpg</code>', 'woocommerce-gateway-stripe' ),
			'type'        => 'text',
			'default'     => '',
			'desc_tip'    => true,
		),
		'stripe_checkout_description'   => array(
			'title'       => __( 'Stripe Checkout Description', 'woocommerce-gateway-stripe' ),
			'type'        => 'text',
			'description' => __( 'Shows a description of your store on Stripe Modal Checkout.', 'woocommerce-gateway-stripe' ),
			'default'     => '',
			'desc_tip'    => true,
		),
		'payment_request'               => array(
			'title'       => __( 'Payment Request Buttons', 'woocommerce-gateway-stripe' ),
			/* translators: 1) br tag 2) opening anchor tag 3) closing anchor tag */
			'label'       => sprintf( __( 'Enable Payment Request Buttons. (Apple Pay/Chrome Payment Request API) %1$sBy using Apple Pay, you agree to %2$s and %3$s\'s terms of service.', 'woocommerce-gateway-stripe' ), '<br />', '<a href="https://stripe.com/apple-pay/legal" target="_blank">Stripe</a>', '<a href="https://developer.apple.com/apple-pay/acceptable-use-guidelines-for-websites/" target="_blank">Apple</a>' ),
			'type'        => 'checkbox',
			'description' => __( 'If enabled, users will be able to pay using Apple Pay or Chrome Payment Request if supported by the browser.', 'woocommerce-gateway-stripe' ),
			'default'     => 'yes',
			'desc_tip'    => true,
		),
		'payment_request_button_type'   => array(
			'title'       => __( 'Payment Request Button Type', 'woocommerce-gateway-stripe' ),
			'label'       => __( 'Button Type', 'woocommerce-gateway-stripe' ),
			'type'        => 'select',
			'description' => __( 'Select the button type you would like to show.', 'woocommerce-gateway-stripe' ),
			'default'     => 'buy',
			'desc_tip'    => true,
			'options'     => array(
				'default' => __( 'Default', 'woocommerce-gateway-stripe' ),
				'buy'     => __( 'Buy', 'woocommerce-gateway-stripe' ),
				'donate'  => __( 'Donate', 'woocommerce-gateway-stripe' ),
			),
		),
		'payment_request_button_theme'  => array(
			'title'       => __( 'Payment Request Button Theme', 'woocommerce-gateway-stripe' ),
			'label'       => __( 'Button Theme', 'woocommerce-gateway-stripe' ),
			'type'        => 'select',
			'description' => __( 'Select the button theme you would like to show.', 'woocommerce-gateway-stripe' ),
			'default'     => 'dark',
			'desc_tip'    => true,
			'options'     => array(
				'dark'          => __( 'Dark', 'woocommerce-gateway-stripe' ),
				'light'         => __( 'Light', 'woocommerce-gateway-stripe' ),
				'light-outline' => __( 'Light-Outline', 'woocommerce-gateway-stripe' ),
			),
		),
		'payment_request_button_height' => array(
			'title'       => __( 'Payment Request Button Height', 'woocommerce-gateway-stripe' ),
			'label'       => __( 'Button Height', 'woocommerce-gateway-stripe' ),
			'type'        => 'text',
			'description' => __( 'Enter the height you would like the button to be in pixels. Width will always be 100%.', 'woocommerce-gateway-stripe' ),
			'default'     => '44',
			'desc_tip'    => true,
		),
		'saved_cards'                   => array(
			'title'       => __( 'Saved Cards', 'woocommerce-gateway-stripe' ),
			'label'       => __( 'Enable Payment via Saved Cards', 'woocommerce-gateway-stripe' ),
			'type'        => 'checkbox',
			'description' => __( 'If enabled, users will be able to pay with a saved card during checkout. Card details are saved on Stripe servers, not on your store.', 'woocommerce-gateway-stripe' ),
			'default'     => 'yes',
			'desc_tip'    => true,
		),
		'logging'                       => array(
			'title'       => __( 'Logging', 'woocommerce-gateway-stripe' ),
			'label'       => __( 'Log debug messages', 'woocommerce-gateway-stripe' ),
			'type'        => 'checkbox',
			'description' => __( 'Save debug messages to the WooCommerce System Status log.', 'woocommerce-gateway-stripe' ),
			'default'     => 'no',
			'desc_tip'    => true,
		),
	)
);