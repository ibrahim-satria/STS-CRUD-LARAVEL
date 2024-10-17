<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Sale;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // Menghitung total penjualan
        $totalSales = Sale::sum('total_amount');

        // Menghitung total produk
        $totalProducts = Product::count();

        // Mengambil produk dengan stok rendah
        $lowStockProducts = Product::where('quantity', '<', 5)->get();

        // Mengambil 5 produk terlaris berdasarkan jumlah penjualan
        $topProducts = Sale::select('products.name', Sale::raw('SUM(sales.quantity) as total_sold'))
                          ->join('products', 'sales.product_id', '=', 'products.id') // Join dengan tabel products
                          ->groupBy('products.name')
                          ->orderBy('total_sold', 'desc')
                          ->take(5)
                          ->get();

        // Gunakan dd() untuk debug

        return view('dashboard.index', compact('totalSales', 'totalProducts', 'lowStockProducts', 'topProducts'));
    }
}
    