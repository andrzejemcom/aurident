<?php

namespace WebpConverter\Conversion\Endpoint;

use WebpConverter\Service\NonceManager;

/**
 * Abstract class for class that supports image conversion method.
 */
abstract class EndpointAbstract implements EndpointInterface {

	/**
	 * {@inheritdoc}
	 */
	public function get_url_lifetime(): int {
		return ( 24 * 60 * 60 );
	}

	/**
	 * {@inheritdoc}
	 */
	public function get_route_args(): array {
		return [];
	}

	/**
	 * {@inheritdoc}
	 */
	public function get_route_url(): string {
		$nonce_value = ( new NonceManager( $this->get_url_lifetime(), false ) )
			->generate_nonce( sprintf( EndpointIntegration::ROUTE_NONCE_ACTION, $this->get_route_name() ) );

		return get_rest_url(
			null,
			sprintf(
				'%1$s/%2$s?%3$s=%4$s',
				EndpointIntegration::ROUTE_NAMESPACE,
				$this->get_route_name(),
				EndpointIntegration::ROUTE_NONCE_PARAM,
				$nonce_value
			)
		);
	}
}
