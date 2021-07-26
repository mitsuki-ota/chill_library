<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
          $table->integer('zip'); // 郵便番号
          $table->string('address'); // 住所
          $table->integer('phone_number'); // 電話番号
          $table->date('birthday'); //誕生日
          $table->softDeletes(); //退会年月日
          $table->boolean('administrator'); //管理者フラグ
        });
      }
      
      /**
       * Reverse the migrations.
       *
       * @return void
       */
      public function down()
      {
        Schema::table('users', function (Blueprint $table) {
          $table->dropColumn('zip'); // 郵便番号
          $table->dropColumn('address'); // 住所
          $table->dropColumn('phone_number'); // 電話番号
          $table->dropColumn('birthday'); //誕生日
          $table->dropSoftDeletes(); //退会年月日
          $table->dropColumn('administrator'); //管理者フラグ
        });
      }
}
