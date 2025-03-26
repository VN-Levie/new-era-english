<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('phone')->unique()->after('email');
            $table->string('email')->nullable()->change();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            //drop column phone
            $table->dropColumn('phone');
            //change email to not null
            $table->string('email')->nullable(false)->change();
            // //drop unique index on email
            // $table->dropUnique(['email']);
            // //add unique index on email
            // $table->unique('email');
        });
    }
};
