<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTuitionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students_tuitions', function (Blueprint $table) {
            $table->id();
            $table->date('month');
            $table->decimal('amount', 8, 0);
            $table->foreignId('student_id')->constrained()->cascadeOnDelete();
            $table->foreignId('tuition_id')->constrained()->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students_tuitions');
    }
}
