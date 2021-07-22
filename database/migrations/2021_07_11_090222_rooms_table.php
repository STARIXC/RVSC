<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rooms', function (Blueprint $table) {
        $table->id()->uniqid();
        $table->string('room_type');
        $table->string('room_name');
        $table->string('max_adult');
        $table->string('max_child');
        $table->string('room_desc');
        $table->enum('pests_allowed', ['0', '1']);
        $table->enum('breakfast', ['0', '1']);
        $table->enum('featured_room', ['0', '1']);
        $table->string('slug');
        $table->string('no_of_beds');
        $table->string('room_image');
        $table->string('room_facilities');
        $table->timestamp('created_at')->nullable();
        $table->timestamp('updated_at')->nullable();
        // $table->softDeletes();
    });
        //
       }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rooms');
    }
}
