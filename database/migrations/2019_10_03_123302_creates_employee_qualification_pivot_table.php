<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatesEmployeeQualificationPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_qualification', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('qualification_id');
            $table->unsignedBigInteger('employee_id');
            $table->date('aquired')->nullable();
            $table->string('grade')->nullable();
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
        Schema::dropIfExists('employee_qualification');
    }
}
