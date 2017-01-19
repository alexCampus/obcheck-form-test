<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReceiverTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('receiver',function(Blueprint $table) {
            $table->increments('id');
            $table->integer('messages_id')->unsigned();
            $table->foreign('messages_id')
                  ->references('id')
                  ->on('messages')
                  ->onDelete('restrict')
                  ->onUpdate('restrict');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')
                  ->references('id')
                  ->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('receiver',function(Blueprint $table) {
            $table->dropForeign('receiver_messages_id_foreign');
            $table->dropForeign('receiver_user_id_foreign');

        });
        
        Schema::drop('receiver');
    }
}
