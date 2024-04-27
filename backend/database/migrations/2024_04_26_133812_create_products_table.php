<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use function PHPUnit\Framework\assertNotNull;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('qte')->nullable(FALSE)->default(0);
            $table->tinyInteger('status')->nullable(FALSE)->default(1);
            $table->float('price')->default(null);
            $table->foreignId('user_id')->constrained('users')->default(null);
            $table->binary('image')->default(null);
            $table->foreignId('categorie_id')->constrained('categorie_products')->default(null);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
