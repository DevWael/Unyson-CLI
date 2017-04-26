<?php
if ( defined( 'WP_CLI' ) && class_exists( 'WP_CLI', false ) ) {
	WP_CLI::add_command( 'unyson', 'Unyson\Commands\Unyson' );
	WP_CLI::add_command( 'unyson core', 'Unyson\Commands\Core' );
	WP_CLI::add_command( 'unyson exts', 'Unyson\Commands\Extensions' );
	WP_CLI::add_command( 'unyson ext', 'Unyson\Commands\Extension' );
}