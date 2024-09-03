<?php

// Kelas Publisher
class Publisher {
    public $name;
    public $address;
    public $font;

    public function __construct($name, $address, $font) {
        $this->name = $name;
        $this->address = $address;
        $this->font = $font;
    }
}

// Kelas Author
class Author {
    public $name;
    public $description;

    public function __construct($name, $description) {
        $this->name = $name;
        $this->description = $description;
    }
}

// Kelas Book
class Book {
    public $ISBN;
    public $title;
    public $description;
    public $category;
    public $language;
    public $numberOfPage;
    public $author;
    public $publisher;

    public function __construct($ISBN, $title, $description, $category, $language, $numberOfPage, Author $author, Publisher $publisher) {
        $this->ISBN = $ISBN;
        $this->title = $title;
        $this->description = $description;
        $this->category = $category;
        $this->language = $language;
        $this->numberOfPage = $numberOfPage;
        $this->author = $author;
        $this->publisher = $publisher;
    }
}

// Contoh penggunaan
$publisher = new Publisher("Penerbit ABC", "Jl. Contoh No. 123, Jakarta", "Arial");
$author = new Author("John Doe", "Penulis buku terkenal");

$book = new Book(
    "978-3-16-148410-0",
    "Judul Buku",
    "Deskripsi buku",
    "Kategori Buku",
    "Bahasa Buku",
    200,
    $author,
    $publisher
);

echo "ISBN: " . $book->ISBN . "\n";
echo "Title: " . $book->title . "\n";
echo "Description: " . $book->description . "\n";
echo "Category: " . $book->category . "\n";
echo "Language: " . $book->language . "\n";
echo "Number of Pages: " . $book->numberOfPage . "\n";
echo "Author Name: " . $book->author->name . "\n";
echo "Publisher Name: " . $book->publisher->name . "\n";

