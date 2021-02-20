<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Hash;

class CreateAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('firstname', 255);
            $table->string('lastname', 255);
            $table->string('email')->unique();
            $table->string('password', 255);
            $table->enum('status', ['active', 'inactive'])->default('inactive');
            $table->rememberToken();
            $table->timestamps();
            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable();
        });

        DB::table('admins')->insert(
            [
                'firstname' => 'Super',
                'lastname' => 'Admin',
                'email' => 'superadmin@wowdeals.com',
                'password' => Hash::make('Admin@123'),
                'status' => 'active',
                'created_by' => 1,
                'updated_by' => 1,
            ]
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admins');
    }
}
