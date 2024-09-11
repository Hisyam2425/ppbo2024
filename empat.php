<?php

require_once 'Publisher.php';
require_once 'Author.php';
require_once 'Book.php';

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

