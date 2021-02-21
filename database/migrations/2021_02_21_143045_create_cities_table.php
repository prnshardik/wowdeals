<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cities', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->bigInteger('state_id')->nullable()->unsigned();
            $table->enum('status', ['active', 'inactive'])->default('inactive');
            $table->timestamps();
            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable();

            $table->foreign('state_id')->references('id')->on('states')->onDelete('cascade')->onUpdate('cascade');
        });

        DB::table('cities')->insert(['name' => 'Ahmedabad', 'state_id' => 1, 'status' => 'active', 'created_at' => date('Y-m-d H:s:i'), 'created_by' => 1, 'updated_at' => date('Y-m-d H:s:i'), 'updated_by' => 1]);
        DB::table('cities')->insert(['name' => 'Kadi', 'state_id' => 1, 'status' => 'active', 'created_at' => date('Y-m-d H:s:i'), 'created_by' => 1, 'updated_at' => date('Y-m-d H:s:i'), 'updated_by' => 1]);
        DB::table('cities')->insert(['name' => 'Rajkot', 'state_id' => 1, 'status' => 'active', 'created_at' => date('Y-m-d H:s:i'), 'created_by' => 1, 'updated_at' => date('Y-m-d H:s:i'), 'updated_by' => 1]);
        DB::table('cities')->insert(['name' => 'Kalol', 'state_id' => 1, 'status' => 'active', 'created_at' => date('Y-m-d H:s:i'), 'created_by' => 1, 'updated_at' => date('Y-m-d H:s:i'), 'updated_by' => 1]);
        DB::table('cities')->insert(['name' => 'Mumbai', 'state_id' => 2, 'status' => 'active', 'created_at' => date('Y-m-d H:s:i'), 'created_by' => 1, 'updated_at' => date('Y-m-d H:s:i'), 'updated_by' => 1]);
        DB::table('cities')->insert(['name' => 'Pune', 'state_id' => 2, 'status' => 'active', 'created_at' => date('Y-m-d H:s:i'), 'created_by' => 1, 'updated_at' => date('Y-m-d H:s:i'), 'updated_by' => 1]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cities');
    }
}
