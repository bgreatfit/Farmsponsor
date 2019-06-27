<?php

namespace App\Repositories;

use App\Models\SchoolClass;

class SampleRepository extends BaseRepository
{
	public function __construct( SampleClass $class ) {
		parent::__construct( $class );
	}
}
