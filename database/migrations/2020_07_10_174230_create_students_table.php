<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255);
            $table->string('lastname', 255);
            $table->string('email', 255)->unique();
            $table->enum('state', ['Paid', 'Pending'])->default('Pending');
            $table->boolean('peruvian')->default(false);
            $table->boolean('attendance')->default(false);
            $table->string('phone', 15);
            $table->foreignId('company_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alumnos');
    }
}
