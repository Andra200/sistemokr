<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeadlinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deadlines', function (Blueprint $table) {
            $table->id()->default(null);
            $table->foreignId('objective_id')->constrained('objectives')->onDelete(null)->nullable()->default(null);
            $table->foreignId('keyresult_id')->constrained('keyresults')->onDelete(null)->nullable()->default(null);
            $table->foreignId('task_id')->constrained('tasks')->onDelete(null)->nullable()->default(null);
            $table->dateTime('date')->default(null);
            $table->dateTime('until')->default(null);
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
        Schema::dropIfExists('deadlines');
    }
}
