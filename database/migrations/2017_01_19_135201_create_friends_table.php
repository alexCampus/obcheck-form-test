<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFriendsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('be_friend_with', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id_1')->unsigned();
            $table->foreign('user_id_1')
                  ->references('id')
                  ->on('users');
            $table->integer('user_id_2')->unsigned();
            $table->foreign('user_id_2')
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
        Schema::table('be_friend_with',function(Blueprint $table) {
            $table->dropForeign('be_friend_with_user_id_1_foreign');
            $table->dropForeign('be_friend_with_user_id_2_foreign');

        });
        
        Schema::drop('be_friend_with');
    }
}
