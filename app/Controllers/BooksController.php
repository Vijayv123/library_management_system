<?php

namespace App\Controllers;
use App\Models\BooksModel;

class BooksController extends BaseController
{
    public function index(): string
    {
        return view('books/books.php');
    }
    
// .......... Add Book ..................

    public function add(){
        $model = new BooksModel();
        $books_info = [
            'title'=>$this->request->getPost('book_name'),
            'author'=>$this->request->getPost('book_author'),
            'edition'=>$this->request->getPost('book_edition'),
            'category'=>$this->request->getPost('category'),
            'subject'=>$this->request->getPost('book_subject'),
            'source'=>$this->request->getPost('book_source'),
            'callNo'=>$this->request->getPost('call_no'),
            'publisher'=>$this->request->getPost('book_publisher'),
            'publisherPeriod'=>$this->request->getPost('book_publisher_period'),
            'publisherPlace'=>$this->request->getPost('book_publisher_place'),
            'date'=>$this->request->getPost('book_publisher_date'),
            'billNo'=>$this->request->getPost('book_bill_no'),
            'billDate'=>$this->request->getPost('book_bill_date'),
            'price'=>$this->request->getPost('book_price'),
            'remarks'=>$this->request->getPost('remarks'),
        ];
        $books = [
            'qty'=>$this->request->getPost('quantity'),
            'binding'=>$this->request->getPost('binding'),
        ];

        if($model->inset_data($books_info, $books)){
            $data = "Book inserted successfully";
            echo $data;
        }
        else{
            $data = "Error";
            echo $data;
        }
    }
}
