<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PartnerController extends Controller
{
    public function index()
    {
        $data = Http::get('http://lab.vntu.org/webusers/api-server/lab8.php', [
            'user' => 'student',
            'pass' => 'p@ssw0rd',
        ])->json();

        abort_if((@$data['status'] == 'auth_fail'), 403);

        return view('partners.index', ['groupedPartners' => $data]);
    }
}
