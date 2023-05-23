<?php

use App\Models\Department;
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
        Schema::create('subjects', function (Blueprint $table) {
            $table->id();
            // $table->foreignIdFor(Department::class);
            // $table->foreignId('department_id');
            $table->unsignedBigInteger("department_id");

            $table->string("name");
            $table->string("code");
            $table->unsignedBigInteger("pre_requisite")->nullable(true);
            $table->json("files")->nullable(true);
            $table->json("students")->nullable(true);
            $table->unsignedBigInteger('doctor_id');
            $table->timestamps();

            $table->foreign("pre_requisite")->references("id")->on("subjects");
            $table->foreign("doctor_id")->references("id")->on("subjects");
            $table->foreign("department_id")->references("id")->on("departments");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subjects');
    }
};
