<?php

namespace ImageOptimizer\Modules\Optimization\Classes;

use ImageOptimizer\Classes\Route;
use WP_REST_Request;

class Route_Base extends Route {
	protected $auth = true;
	protected string $path = '';

	public function get_methods(): array {
		return [];
	}

	public function get_endpoint(): string {
		return 'optimize/' . $this->get_path();
	}

	public function get_path(): string {
		return $this->path;
	}

	public function get_name(): string {
		return '';
	}

	public function get_permission_callback( WP_REST_Request $request ): bool {
		$valid = $this->permission_callback( $request );

		return $valid && user_can( $this->current_user_id, 'manage_options' );
	}
}
