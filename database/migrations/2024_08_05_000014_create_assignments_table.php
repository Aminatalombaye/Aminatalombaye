<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssignmentsTable extends Migration
{
    public function up()
    {
        Schema::create('assignments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('type_attribution')->nullable();
            $table->string('asset')->nullable();
            $table->string('quantity')->nullable();
            $table->string('user')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
