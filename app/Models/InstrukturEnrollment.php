<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class InstrukturEnrollment extends Model
{
    use HasFactory;

    protected $table = 'instruktur_enrollment';
    protected $guarded = ['id'];

    /**
     * Get the instruktur that owns the InstrukturEnrollment
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function instruktur(): BelongsTo
    {
        return $this->belongsTo(Instruktur::class);
    }

    /**
     * Get the materi that owns the InstrukturEnrollment
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function materi(): BelongsTo
    {
        return $this->belongsTo(Materi::class);
    }
}
