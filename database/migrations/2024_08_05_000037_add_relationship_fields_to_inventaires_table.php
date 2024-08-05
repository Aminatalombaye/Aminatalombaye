<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToInventairesTable extends Migration
{
    public function up()
    {
        Schema::table('inventaires', function (Blueprint $table) {
            $table->unsignedBigInteger('reference_id')->nullable();
            $table->foreign('reference_id', 'reference_fk_9996082')->references('id')->on('assets');
        });
    }
}
