<?php

/*use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;

class RenameIdDishToIdV2 extends Migration
{
    public function up()
    {
        // Añadir una nueva columna "id" con las mismas propiedades
        Schema::table('dishes', function (Blueprint $table) {
            $table->bigIncrements('id_temp');
        });

        // Copiar los datos de la columna "id_dish" a la nueva columna "id"
        DB::statement('UPDATE dishes SET id_temp = id_dish');

        // Eliminar la columna "id_dish"
        Schema::table('dishes', function (Blueprint $table) {
            $table->dropColumn('id_dish');
        });

        // Renombrar la columna "id_temp" a "id"
        Schema::table('dishes', function (Blueprint $table) {
            $table->renameColumn('id_temp', 'id');
        });
    }

    public function down()
    {
        // Revertir el cambio
        Schema::table('dishes', function (Blueprint $table) {
            $table->renameColumn('id', 'id_temp');
        });

        // Agregar la columna original "id_dish" nuevamente
        Schema::table('dishes', function (Blueprint $table) {
            $table->bigIncrements('id_dish');
        });

        // Copiar los datos de la columna "id_temp" a la columna "id_dish"
        DB::statement('UPDATE dishes SET id_dish = id_temp');

        // Eliminar la columna "id_temp"
        Schema::table('dishes', function (Blueprint $table) {
            $table->dropColumn('id_temp');
        });
    }
}
*/