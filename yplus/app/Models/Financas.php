<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Financas extends Model
{
    use HasFactory;

    protected $table = 'financial_transactions';
    protected $fillable = [ 'id',
        'id_user',
        'id_resource',
        'url',
        'cnpj_cpf',
        'organization_name',
        'address',
        'issue_date',
        'amount',
        'status_revision',
        'barcode',
        'additional_info',
        'financial_transactionscol'
    ];
}
