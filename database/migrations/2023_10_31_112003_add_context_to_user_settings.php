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
        Schema::table('user_settings', function (Blueprint $table) {
            //
            $table->string('context_type', 100)->nullable()->after('user_id');
            $table->integer('context_id')->nullable()->after('context_type');
            $table->string('setting_name', 100)->change();

            $table->index(['user_id', 'context_type', 'context_id', 'setting_name']);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('user_settings', function (Blueprint $table) {
            //
            $table->dropIndex(['user_id', 'context_type', 'context_id', 'setting_name']);
            $table->dropColumn('context_type');
            $table->dropColumn('context_id');

        });
    }
};
