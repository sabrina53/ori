<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->increments('id');
            $table->string('project_name');
            $table->string('project_descrip',255);
            $table->date('estimated_due_date');
            $table->string('id_quote');
            $table->string('id_contract');
            $table->string('id_invoice');
            $table->string('client_id');
            $table->string('completion_status');
            $table->string('payment_status');
            $table->string('hrsWorked');
            $table->date('start_date');
            $table->date('end_date');
            $table->decimal('discount',2,2);
            $table->decimal('total',6,2);
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
        Schema::dropIfExists('projects');
    }
}
