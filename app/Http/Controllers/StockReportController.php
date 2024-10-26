<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use App\Models\Product;
use App\Models\Transaction;

class StockReportController extends Controller {
    public function index() {
        // Summary statistics
        $totalStock     = Product::sum('stock');
        $totalSales     = Transaction::where('type', 'sell')->sum('amount');
        $totalPurchases = Transaction::where('type', 'purchase')->sum('amount');

        // Stock trends
        $transactions = Transaction::selectRaw('type, SUM(quantity) as total_quantity, DATE(created_at) as date')
            ->groupBy('type', 'date')
            ->get();

            $purchaseTrends = Transaction::select(
                DB::raw('DATE(created_at) as date'),
                DB::raw('SUM(quantity) as total_quantity')
            )
            ->where('type', 'purchase')
            ->groupBy('date')
            ->orderBy('date')
            ->get();

            $returnTrends = Transaction::select(
                DB::raw('DATE(created_at) as date'),
                DB::raw('SUM(quantity) as total_quantity')
            )
            ->whereIn('type', ['sell_return', 'purchase_return'])
            ->groupBy('date')
            ->orderBy('date')
            ->get();

        // Transaction history
        $transactionHistory = Transaction::with('product')
        ->select('product_id', 'type', 'quantity', 'amount', 'created_at')
        ->limit(20) // Apply limit here before get()
        ->get();

        return view('stock-report', compact('totalStock', 'returnTrends','purchaseTrends','totalSales', 'totalPurchases', 'transactions', 'transactionHistory'));
    }
}
