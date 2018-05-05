<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('username')->unique();
            $table->string('email')->unique();
            $table->string('password');
            $table->text('address')->nullable();
            $table->string('contact');
            $table->rememberToken();
            $table->integer('department_id')->nullable();
            $table->integer('role_id');
            $table->timestamps();
        });

        DB::table('users')->insert(
            array(
                'name' => 'EDWIN MELENDEZ',
                'username' => 'devdesign',
                'email' => 'dez@gmail.com',
                'password' => '$2y$10$JwJWSHxCxefgGd1tsmsaqeNZkvTiB4kvN0uPJ0c18eCRNzuPcZlqu',
                'address' => 'BONUAN GUESET, DAGUPAN CITY',
                'contact' => '09356329584',
                'role_id' => '1'
            )
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
