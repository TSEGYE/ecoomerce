<?php 
 
 namespace App\Models;
 
 use Illuminate\Database\Eloquent\Factories\HasFactory;
 use Illuminate\Database\Eloquent\Model;
 
 class products extends Model
{ 
     use HasFactory;
     protected $fillable = [
         'id',
         'name',
         'unit',
         'price',
         'quantity'
         ];
         public function Catagoryies() 
         {
             return $this->belongTo(Catagory1::class);
         }
        
} 
