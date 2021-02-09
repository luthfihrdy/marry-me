<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvitationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invitations', function (Blueprint $table) {
            $table->id();
            $table->integer('users_id');
            $table->string('groom_name');
            $table->string('groom_profile');
            $table->string('bride_name');
            $table->string('bride_profile');
            $table->string('groom_nickname');
            $table->string('bride_nickname');
            $table->string('father_groom');
            $table->string('mother_groom');
            $table->string('father_bride');
            $table->string('mother_bride');
            $table->string('groom_ig');
            $table->string('bride_ig');
            $table->date('marriage_date');
            $table->date('reception_date');
            $table->string('marriage_time');
            $table->string('reception_time');
            $table->string('reception_time_end');
            $table->string('marriage_place');
            $table->string('reception_place');
            $table->string('video');
            $table->string('music');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('invitations');
    }
}
