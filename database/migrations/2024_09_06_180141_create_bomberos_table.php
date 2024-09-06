<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBomberosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bomberos', function (Blueprint $table) {
            $table->id();
            $table->string("lp", 10)->unique();
            $table->string("apellido", 50);
            $table->string("nombre", 50);
            $table->unsignedBigInteger("jerarquia_id");

            $table->foreign("jerarquia_id")->references("id")->on("jerarquia");
            
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
        Schema::dropIfExists('bomberos');
    }
}
