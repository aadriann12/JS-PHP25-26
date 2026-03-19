<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
  public function up(): void
{
    Schema::table('loans', function (Blueprint $table) {
        // Permitir pending sin fechas
        $table->date('loaned_at')->nullable()->change();
        $table->date('due_at')->nullable()->change();

        // Añado librarian + notes
        $table->foreignId('librarian_id')->nullable()->after('book_id')->constrained('users');
        $table->text('notes')->nullable()->after('returned_at');

        // Estados del enunciado
        $table->enum('status', ['pending','approved','rejected','returned'])
              ->default('pending')
              ->change();

        // Índice normal para book_id (para que el FK no dependa del UNIQUE)
        $table->index('book_id', 'loans_book_id_index');
    });

    Schema::table('loans', function (Blueprint $table) {
        // Ahora ya puedo borrar el UNIQUE sin romper el FK
        $table->dropUnique('loans_book_open_unique');
    });
}

    public function down(): void
    {
        Schema::table('loans', function (Blueprint $table) {
            $table->dropConstrainedForeignId('librarian_id');
            $table->dropColumn('notes');

            $table->string('status')->default('open')->change();

            $table->date('loaned_at')->nullable(false)->change();
            $table->date('due_at')->nullable(false)->change();

            $table->unique(['book_id', 'returned_at'], 'loans_book_open_unique');
        });
    }
};
