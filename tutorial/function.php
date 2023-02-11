<?php $title = "Function and Filter || PHP Tutorial"; ?>
<?php include('./header.php'); ?>
<?php
    $books = [
        [
            'name' => 'Book 1', 
            'author' => 'Author 1',
            'price' => 200,
            'link' => "https://www.linkedin.com/in/uttamkpal-dev/",
        ],
        [
            'name' => 'Book 2', 
            'author' => 'Author 2',
            'price' => 300,
            'link' => "https://www.linkedin.com/in/uttamkpal-dev/",
        ],
        [
            'name' => 'Book 3', 
            'author' => 'Author 3',
            'price' => 100,
            'link' => "https://www.linkedin.com/in/uttamkpal-dev/",
        ],
        [
            'name' => 'Book 4', 
            'author' => 'Author 3',
            'price' => 400,
            'link' => "https://www.linkedin.com/in/uttamkpal-dev/",
        ],
        [
            'name' => 'Book 5', 
            'author' => 'Author 1',
            'price' => 300,
            'link' => "https://www.linkedin.com/in/uttamkpal-dev/",
        ],
    ];
    function filterByAuthor($books, $author){
        $filterBookList = [];
        foreach($books as $book){
            if($book['author'] === $author){
                $filterBookList[] = $book;
            }
        }
        
        return $filterBookList;
    }
    function filter($items, $fn){
        $filterItems = [];

        foreach($items as $item){
            if($fn($item)){
                $filterItems[] = $item;
            }
        }
        return $filterItems;
    }
    $filterBooks = filter($books, function($book){
        return $book['price'] >=300;
    });
?>

<div class="w-3/4 ml-auto mr-auto shadow-lg p-12">
    <div >
    <h1 class="text-2xl font-bold">Book List </h1>
    <ol>
        <?php foreach(filterByAuthor($books, 'Author 1') as $book):?>
            <a class="text-blue-500 hover:text-blue-800 " href="<?= $book['link'] ?>">
        <li><?= "{$book['name']} ( {$book['price']} tk )"?></li>
        </a>
        <?php endforeach;?>
    </ol>
    </div>
    <div>
    <h1 class="text-2xl font-bold">Book List -- lamda function </h1>
    <ol>
        <?php foreach($filterBooks as $book):?>
            <a class="text-blue-500 hover:text-blue-800 " href="<?= $book['link'] ?>">
        <li><?= "{$book['name']} ( {$book['price']} tk )"?></li>
        </a>
        <?php endforeach;?>
    </ol>
    </div>
    <div>
    <h2 class="text-2xl font-bold">Book List -- Build in  function </h2>
    <ol>
        <?php foreach(array_filter($books, function($book){ return $book['price']<=200; }) as $book):?>
            <a class="text-blue-500 hover:text-blue-800 " href="<?= $book['link'] ?>">
        <li><?= "{$book['name']} ( {$book['price']} tk )"?></li>
        </a>
        <?php endforeach;?>
    </ol>
    </div>
    
    
    
</div>