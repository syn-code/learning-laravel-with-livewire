<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255)->nullable(false);
            $table->unsignedBigInteger('product_type_id')->nullable(false);
            $table->integer('quantity_in_stock')->default(0);
            $table->timestamps();

            $table->foreign('product_type_id', 'product_type_fk')
                ->references('id')
                ->on('product_types')
            ;
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        if (Schema::hasTable('products')) {
            Schema::table('products', function (Blueprint $table) {
                $table->dropForeign('product_type_fk');
            });

            Schema::dropIfExists('products');
        }
    }
};
