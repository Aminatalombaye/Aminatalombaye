<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaintenanceRequestUserPivotTable extends Migration
{
    public function up()
    {
        Schema::create('maintenance_request_user', function (Blueprint $table) {
            $table->unsignedBigInteger('maintenance_request_id');
            $table->foreign('maintenance_request_id', 'maintenance_request_id_fk_9996165')->references('id')->on('maintenance_requests')->onDelete('cascade');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id', 'user_id_fk_9996165')->references('id')->on('users')->onDelete('cascade');
        });
    }
}
