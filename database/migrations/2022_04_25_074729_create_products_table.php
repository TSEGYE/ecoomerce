
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
        Schema::create('products', function (Blueprint $table) {
            $table->string('id')->notnullable();
            $table->string('name');
            $table->string('unit'); 
            $table->String('price'); 
            $table->string('quantity');
            $table->timestamps(); 
            $table->unsignedBigInteger('Catagory1_id')->foreign('Catagory1_id')->reference('id')->on('Catagories')->onDelete('Cascade');
            
           
           
           
        }); 
    } 

 /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};
