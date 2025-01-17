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
        // Cập nhật lại bảng `users`
        Schema::create('users', function (Blueprint $table) {
            $table->id('ID'); // Chỉ định khóa chính là `ID`
            $table->string('FullName'); // Tên đầy đủ
            $table->string('Position')->nullable(); // Vị trí, có thể null
            $table->enum('Role', ['Admin', 'Principal', 'Viceprincipal', 'Secretary', 'Head_department', 'Staff']); // Chỉ định các vai trò
            $table->string('DepartmentID');
            $table->string('username');
            $table->string('password');
           // $table->foreignId('DepartmentID')->nullable()->constrained('departments')->onDelete('set null')->unsigned(); // Đảm bảo kiểu unsigned và ràng buộc khóa ngoại
            //$table->timestamps(); // Thêm các trường created_at và updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
