<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelHome extends Model
{
  protected $table = 'profil'; // Sesuaikan dengan nama tabel yang Anda gunakan
  protected $allowedFields = ['nama', 'about']; // Kolom yang diizinkan untuk diambil




  public function getName()
  {
    return $this->select('nama')
      ->first();
  }

  public function getAbout()
  {
    return $this->select('about')
      ->first();
  }

  public function getIntroduction()
  {
    return $this->asArray()
      ->where(['id' => 1])
      ->first();
  }
}
