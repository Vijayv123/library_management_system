<?php

namespace App\Models;

use CodeIgniter\Model;

class BooksModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'books_info';
    protected $primaryKey       = 'book_id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'book_id', 'title', 'author','create', 'edition', 'publisher', 'publisherPeriod', 'publisherPlace', 'date', 'noPage', 'subject', 'source', 'category', 'billNo', 'billDate', 'price', 'cllNo', 'isbNo', 'remarks', 'qty'
    ];
    public function inset_data($books_info, $books){
        $this->db->table('books_info')->insert($books_info);
        $books['bookId'] = $this->db->insertID();
        $id = $books['bookId'];
        $data= [
            'bookId' => $id,
            'binding'=> $books['binding'],
        ];
        $qty = $books['qty'];
        for($i=1; $i<= $qty; $i++)
        {
           $this->db->table('books')->insert( $data);
        }
        return true;
    }
    // public function getBooks(){
    //         $builder = $this->select('author, title, qty, category, book_id',)->findAll();
    //         return $builder;
    // }      

    // public function get_edit_data($id){
    //     $builder=$this->where(['book_id'=>$id])->first();
    //     return $builder;
    // }

    // public function get_book($id){
    //     $builder = $this->table('books_info');
    //     $builder->select('*');
    //     $builder->join('books', 'books.bookId = books_info.book_id');
    //     $builder->where('books_info.book_id', $id);
    //     return $builder->findAll();
    // }
   
    // public function deleteBook($id){
    //     $builder = $this->table('books_info');
    //     $builder->where('book_id',$id);
    //     $builder->delete($id);
    //     if($builder){
    //         $builder1 = $this->db->table('books');
    //         $builder1->where('bookId',$id);
    //         $builder1->delete();
    //         if($builder1){
    //             return true;
    //         }
    //         else{
    //             return false;
    //         }
    //     }
    //     else{
    //         return false;
    //     }
    // }
    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];
}
