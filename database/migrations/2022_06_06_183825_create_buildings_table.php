<?php

use App\Models\Landlord;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBuildingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buildings', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Landlord::class, 'landlord_id')->references('id')->on('landlords');
            $table->string('name');
            $table->string('code')->nullable();
            $table->integer('floor_count')->nullable();
            $table->string('size')->nullable();
            $table->string('makani')->nullable();
            $table->string('permises')->nullable();
            $table->string('condition')->nullable();
            $table->text('address')->nullable();
            $table->string('emirate');
            $table->string('description')->nullable();
            $table->index('makani');
            $table->index('permises');
            $table->index('code');
            $table->index('name');
            $table->index('emirate');
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
        Schema::dropIfExists('buildings');
    }
}
