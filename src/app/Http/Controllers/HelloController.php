<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index () {
        return <<<EOF
<html>
<head>
<title>Hello</title>
</head>
<body>
    <h1>indexページです</h1>
</body>
</html>
EOF;
    }
}
