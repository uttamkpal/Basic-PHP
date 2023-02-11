<?php $title = "Home Page || PHP Tutorial"; ?>
<?php include('./header.php'); ?>
<?php
// $variableName = "Uttam Kumar";
//     // echo "Hello ". $variableName;
//     echo "Hello $variableName";
$bookName = "Dark Matter";
$read = true;
if ($read) {
    $message = "You read This Book!";
} else {
    $message = "You are not read this book!";
}
// Array 
$books = [
    "book 1",
    "book 2",
    "book 3",
    "book 4",
];

// Accosiative Arrays 
$assoBooks = [
    [
        'name' => "Book 1",
        'author' => "Author",
        'price' => 300,
        'link' => 'http://www.google.com',
    ],
    [
        'name' => "Book 2",
        'author' => "Author",
        'price' => 300,
        'link' => 'http://www.google.com',
    ],
    [
        'name' => "Book 3",
        'author' => "Author",
        'price' => 300,
        'link' => 'http://www.google.com',
    ],
];
?>
<div class="w-3/4 ml-auto mr-auto shadow-lg p-12">
    <h1 class="text-xl font-bold pt-3">PHP Variable</h1>
    <ul>
        <li>String "" or ''</li>
        <li>Boolean true or false</li>
    </ul>
    <h1 class="text-xl font-bold pt-3">Book Name <?= $bookName ?></h1>
    <p>Message <?= $message ?></p>
    <div class="book-list">
        <h2 class="text-xl font-bold pt-3">Book list --- for loop</h2>
        <ol>
            <?php for ($i = 0; $i < count($books); $i++) : ?>
                <li><?= $books[$i] ?></li>
            <?php endfor ?>
        </ol>
        <h2 class="text-xl font-bold pt-3">Book list --- foreach loop</h2>
        <ol>
            <?php foreach ($books as $book) : ?>
                <li><?= $book ?></li>
                <!-- <li><? //echo  "{$book} <sup>TM</sup>"; 
                            ?></li> -->
            <?php endforeach ?>
        </ol>
        <h2 class="text-xl font-bold pt-3">Book list --- Associative Array</h2>
        <ol>
            <?php foreach ($assoBooks as $book) : ?>
                <li><a class="text-blue-500 hover:text-blue-900 hover:underline" href="<?= $book['link'] ?>"><?= "{$book['name']} ( {$book['price']} tk )" ?></a></li>

            <?php endforeach ?>
        </ol>
    </div>
</div>
<?php include('footer.php') ?>