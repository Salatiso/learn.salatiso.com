<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCurriculaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('curricula', function (Blueprint $table) {
            $table->id();
            $table->string('curriculum_name');
             $table->text('description')->nullable();
            $table->timestamps(); // created_at and updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('curricula');
    }
}
```

**Key Points**

* **`up()` Method:**
    * Creates the `curricula` table.
    * `id()`: Auto-incrementing primary key.
    * `curriculum_name`: The name of the curriculum (e.g., "CAPS", "Cambridge").
    * `description`: An optional text field to describe the curriculum.
    * `timestamps()`: Automatically creates `created_at` and `updated_at` columns.
* **`down()` Method:**
    * Drops the `curricula` table when the migration is reversed.

This migration will create the `curricula` table in your database, which will store information about the different educational curricula supported by your platfo
