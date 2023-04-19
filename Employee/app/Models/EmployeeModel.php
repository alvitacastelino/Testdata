<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeModel extends Model 
{

        use HasFactory;
       
        
         protected $table = 'employee';
         
        protected $fillable = [
            'username',
            'email',
            'phone',
            'gender',
            'created_at',
            'updated_at',
           
          
            
        ];

      
    }
     