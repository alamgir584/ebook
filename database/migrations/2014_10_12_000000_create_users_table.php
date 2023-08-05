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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('userName',100)->unique()->nullable();
            $table->string('name',150);
            $table->string('mobile',20)->nullable();
            $table->date('dob')->nullable();
            $table->string('password');
            $table->string('gender')->nullable();
            $table->string('email',100)->unique();
            $table->string('pin',100)->unique()->nullable();
            $table->string('nid',30)->unique()->nullable();
            $table->string('xrank',30)->nullable();
            $table->string('xcategory',35)->nullable();
            $table->string('teamA',20)->nullable();
            $table->double('teamApoint',8,2)->nullable();
            $table->string('teamB',20)->nullable();
            $table->double('teamBpoint',8,2)->nullable();
            $table->integer('dailyMatchingCap')->nullable();
            $table->string('sponsorId',20)->nullable();
            $table->string('status',10)->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
