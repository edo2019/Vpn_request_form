<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('vpn_requests', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->string('department');
            $table->string('personal_file_number');
            $table->string('job_title');
            $table->string('email');
            $table->string('telephone');
            $table->text('address');
            $table->string('employee_type');
            $table->text('vpn_reason');
            $table->string('status')->default('pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vpn_requests');
    }
};
