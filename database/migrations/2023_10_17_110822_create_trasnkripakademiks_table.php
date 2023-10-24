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
        Schema::create('transkripakademiks', function (Blueprint $table) {
            $table->id();
            $table->text('studentID'); // Use 'studentID' as the column name
            $table->decimal('Kode_matakuliah', 10, 2); // Adjust precision and scale as needed
            $table->text('Kode_term');
            $table->char('nilai', 2); // Adjust the length as needed
            $table->integer('sks'); // Assuming SKS is stored as an integer
            $table->decimal('gpa', 10, 2); // Adjust precision and scale as needed
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trasnkripakademiks');
    }
};
