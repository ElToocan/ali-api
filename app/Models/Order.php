<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'reference',
        'creationDate',
        'customer_id',
        'amountET',
        'amountVAT',

    ];


    public function customer() : BelongsTo
    {
        return $this->belongsTo(Customer::class);
    }

    public function orderLines() : HasMany
    {
        return $this->hasMany(OrderLines::class);
    }

    protected function casts(): array
    {
        return [
            'creationDate' => 'datetime',
        ];
    }


}
