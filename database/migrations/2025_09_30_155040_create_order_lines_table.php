<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('order_lines', function (Blueprint $table) {
            $table->id();
            $table->float('unitPrice');
            $table->float('amountVat');
            $table->string('quantity');
            $table->foreignIdFor(\App\Models\Order::class)->constrained();
            $table->foreignIdfor(\App\Models\Product::class)->constrained();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('order_lines');
    }
};
