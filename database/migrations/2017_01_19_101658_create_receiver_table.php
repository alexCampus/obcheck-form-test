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
            $table->integer('id_message')->unsigned();
            $table->foreign('id_message')
                  ->references('id')
                  ->on('messages')
                  ->onDelete('restrict')
                  ->onUpdate('restrict');
            $table->integer('id_user')->unsigned();
            $table->foreign('id_user')
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
            $table->dropForeign('receiver_id_message_foreign');
            $table->dropForeign('receiver_id_user_foreign');

        });
        
        Schema::drop('receiver');
    }
}
