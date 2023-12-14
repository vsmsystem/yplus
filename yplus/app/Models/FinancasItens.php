<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FinancasItens extends Model
{
    use HasFactory;

    protected $table = 'financial_transactions_items';
    protected $fillable = [ 
        'id',
        'id_financial_transaction', 
        'id_user', 
        'name', 
        'code',
        'amount', 
        'additional_info',
        'quantity', 
        'quantity_type', 
        'unit_value', 
        'created_at',
        'updated_at',
        'deleted_at',
    ];
}
