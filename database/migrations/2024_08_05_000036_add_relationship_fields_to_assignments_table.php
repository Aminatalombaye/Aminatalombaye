<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToAssignmentsTable extends Migration
{
    public function up()
    {
        Schema::table('assignments', function (Blueprint $table) {
            $table->unsignedBigInteger('attribution_id')->nullable();
            $table->foreign('attribution_id', 'attribution_fk_9996067')->references('id')->on('assignments');
        });
    }
}
