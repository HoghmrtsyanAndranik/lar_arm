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
// INSERT INTO `users` (`id`, `name`, `surname`, `email`, `age`, `password`, `active`, `link`, `type`) VALUES
// `id` int(11) NOT NULL,
//   `name` varchar(50) DEFAULT NULL,
//   `surname` varchar(60) DEFAULT NULL,
//   `email` varchar(50) NOT NULL,
//   `age` int(12) DEFAULT NULL,
//   `password` varchar(255) DEFAULT NULL,
//   `active` int(11) NOT NULL DEFAULT '0',
//   `link` varchar(255) NOT NULL DEFAULT '0',
//   `type` varchar(255) NOT NULL DEFAULT 'user'

    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name',50)->nullable();
            $table->string('surname',60)->nullable();
            $table->string('email')->unique();
            $table->tinyInteger('age')->nullable();
            $table->string('password')->nullable();
            $table->tinyInteger('active')->default(0);
            $table->string('link')->default('0');
            $table->string('role')->default('user');;
            //$table->rememberToken();
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
        Schema::dropIfExists('cart');
        Schema::dropIfExists('wishlist');
        Schema::dropIfExists('users');
    }
}
