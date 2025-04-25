<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('technicians', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('phone');
            
            // Modified service_id with cascade on delete
            $table->foreignId('service_id')
                  ->constrained()
                  ->onDelete('cascade'); // This will delete technicians when their service is deleted
                  
            // Also consider adding cascade for location_id if appropriate
            $table->foreignId('location_id')
                  ->constrained()
                  ->onDelete('cascade');
                  
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('technicians');
    }
};