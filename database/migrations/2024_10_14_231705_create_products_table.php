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
            $table->string('name');
            $table->text('description');
            $table->string('imagen');
            $table->decimal('regular_price', 8, 2);
            $table->decimal('last_to_price', 8, 2);
            $table->unsignedInteger('stock')->default(0);
            $table->foreignId('category_id')->constrained('id')->on('categories')->onDelete('cascade');
            $table->foreignId('brand_id')->constrained('id')->on('brands')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
{
    Schema::table('products', function (Blueprint $table) {
        $table->dropColumn(['name', 'description', 'imagen', 'regular_price', 'last_to_price', 'stock', 'categoria_id', 'brand_id']);
    });
}
};
