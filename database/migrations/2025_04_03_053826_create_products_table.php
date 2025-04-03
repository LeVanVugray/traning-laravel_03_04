<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('manu_id'); // ID nhà sản xuất
            $table->unsignedBigInteger('type_id'); // ID loại sản phẩm
            $table->decimal('price', 10, 2);
            $table->string('image')->nullable(); // Tên file ảnh
            $table->text('description')->nullable();
            $table->boolean('feature')->default(false); // Sản phẩm nổi bật
            $table->integer('Quantity')->default(0); // Số lượng trong kho
            $table->boolean('BestSellingProducts')->default(false); // Sản phẩm bán chạy
            $table->decimal('PriceDiscount', 10, 2)->nullable(); // Giá giảm giá
            $table->integer('ALL')->default(0); // Có thể là tổng số lượng?
            $table->integer('Quantilyshop')->default(0); // Số lượng trong giỏ hàng
            $table->decimal('Total', 12, 2)->nullable(); // Tổng giá trị
            $table->boolean('heart')->default(false); // Sản phẩm yêu thích
            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('products');
    }
};


