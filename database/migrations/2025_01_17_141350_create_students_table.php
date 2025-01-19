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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->char('sbd')->index();
            $table->float('toan')->nullable()->index();
            $table->float('ngu_van')->nullable()->index();
            $table->float('ngoai_ngu')->nullable()->index();
            $table->float('vat_li')->nullable()->index();
            $table->float('hoa_hoc')->nullable()->index();
            $table->float('sinh_hoc')->nullable()->index();
            $table->float('lich_su')->nullable()->index();
            $table->float('dia_li')->nullable()->index();
            $table->float('gdcd')->nullable();
            $table->char('ma_ngoai_ngu', 5)->nullable()->index();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
