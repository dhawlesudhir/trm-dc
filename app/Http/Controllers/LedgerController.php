<?php

namespace App\Http\Controllers;

use App\Models\Ledger;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class LedgerController extends Controller
{

    public function getStatement()
    {
        try {
            $statement = Ledger::with('user')->get();
            $status = 'success';
            $message = '';
            $statusCode = '200';
        } catch (\Throwable $th) {
            Log::error(__CLASS__ . __FUNCTION__ . $th);
            $statement = [];
            $status = 'failed';
            $message = 'try again later';
            $statusCode = '400';
        }
        return response()->json(['statement' => $statement, $status, $message], $statusCode);
    }
}
