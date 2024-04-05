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
            $table->integer('price');
            $table->string('location');
            $table->integer('quantity');
            $table->unsignedBigInteger('category_id');
            $table->text('description');
            $table->string('image_url');

            $table->foreign('category_id')->references('id')->on('categories');
            $table->timestamps();

            // protected $fillable = ['name', 'price','location','quantity', 'category_id', 'description', 'image_url'];
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
