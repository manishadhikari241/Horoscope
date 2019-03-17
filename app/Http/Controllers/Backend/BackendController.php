<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BackendController extends Controller
{
    protected $backendPath = 'backend.';
    protected $backendPagePath = 'null';

    public function __construct()
    {
        $this->data('title', $this->setTitle('admin'));
        $this->backendPagePath = $this->backendPath . '/' . 'pages.';

    }
}
