<?php

class Library
{
   private $model;

   function __construct()
   {
      $this->model = new LibraryModel();
   }

   public function index()
   {
      $data['listBuku'] = $this->model->getLibrary();
      return $this->render('daftarbuku', $data);
   }

   private function render($view, $data = [])
   {
      if ($data) {
         foreach ($data as $key => $value) {
            $$key = $value;
         }
      }

      require_once __DIR__ . '/../view/' . $view . '.php';
   }
}

?>