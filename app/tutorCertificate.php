<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tutorCertificate extends Model
{
    protected $table = 'tutor_certificates';

    protected $fillable = ['tutor_id', 'certificate', 'description', 'Issued by','from', 'to'];
}
