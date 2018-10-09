<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddIndexesToRepairsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('repairs', function (Blueprint $table) {
            $table->index('rminstzlb_id');
            $table->index('customer_id');
            $table->index('manufacturer_id');
            $table->index('model_id');
            $table->index('repair_type_id');
            $table->index('closing_reason_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('repairs', function (Blueprint $table) {
            $table->dropIndex('rminstzlb_id');
            $table->dropIndex('customer_id');
            $table->dropIndex('manufacturer_id');
            $table->dropIndex('model_id');
            $table->dropIndex('repair_type_id');
            $table->dropIndex('closing_reason_id');
        });
    }
}
