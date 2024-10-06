<?php

namespace App\Console\Commands;

use App\Models\Product;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;

class exchange extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:exchange';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        try {

            $response = Http::get('http://api.navasan.tech/latest/?api_key=free5tperGsNhQqin4ZLr73ZVIRvgu3Z');
            if ($response->ok()) {
                $products = Product::all();
                foreach ($products as $product) {
                    if ($product->dollar == 0) continue;
                    $product->price = ($product->dollar * intval($response->json('harat_naghdi_sell')['value']));
                    $product->save();
                }
            }

            echo "success exchange money :)";

        } catch (\Exception $e) {
            response_log('error', 'error in exchenage mony !', $e->getMessage());
            echo "error in exchenage mony :/";
        }
    }
}
