<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->unique();
            $table->string('first_name');
            $table->string('surname');
            $table->string('patronymic');
            $table->dateTime('birth_date')->nullable();
            $table->unsignedSmallInteger('age')->nullable();
            $table->string('city')->nullable();
            $table->string('education')->nullable();
            $table->string('specialization')->nullable();
            $table->text('skills')->nullable();
            $table->string('phone')->nullable();
            $table->string('address')->nullable();
            $table->timestamps();

            $table->softDeletes();

            $table->index('user_id', 'profile_user_idx');

            $table->foreign('user_id', 'profile_user_fk')->on('users')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profiles');
    }
};
