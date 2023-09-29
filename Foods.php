<?php 
$foods = [
    ['name' => 'Arb\'s Special Yowoi Mo', 'details' => 'Arb\'s Special Yowoi Mo is a delectable fusion dish that combines the rich flavors of Asian and Mediterranean cuisines to create a unique and unforgettable culinary experience.', 'picture' => 'images/food-1.png', 'file' => 'arbs.php'],
    ['name' => 'Shean\'s Datekimi Soup', 'details' => 'Shean\'s Datekimi Soup is a heartwarming and comforting soup that\'s a beloved specialty in Gojo\'s kitchen, known for its unique blend of flavors and wholesome ingredients.', 'picture' => 'images/food-2.png', 'file' => 'shean.php'],
    ['name' => 'Rochel\'s Daijoubo Chicken', 'details' => 'Rochel\'s Daijoubo Chicken is a delightful and comforting dish that\'s become a signature in Gojo\'s culinary repertoire.', 'picture' => 'images/food-3.png', 'file' => 'rochel.php'],
    ['name' => 'Suizo\'s Ramyeon Imnida', 'details' => 'Suizo\'s Ramyeon Imnida is a delightful Korean-inspired noodle dish that combines the rich and bold flavors of ramyeon (Korean-style ramen) with a unique twist, resulting in a memorable culinary experience.', 'picture' => 'images/food-4.png', 'file' => 'suizo.php'],
    ['name' => 'Rey\'s Normal Food', 'details' => 'Rey\'s Normal Food is a high-quality and nutritious pet food brand that is dedicated to providing the best nourishment for our beloved canine companions.', 'picture' => 'images/food-5.png', 'file' => 'rey.php'],
]
?>

<div class="flex flex-col justify-center space-y-4 mt-10">
    <div class="text-center">
        <h1 class="text-7xl font-primary">Top 5 Menus</h1>
        <div class="bg-primary">
            <h2 class="text-3xl">Gojo's Favourite!</h2>
        </div>
    </div>

    <div class="sm: flex flex-wrap justify-center md:hidden">
        <?php 
        $count = 0;
        foreach ($foods as $food) { 
            if ($count % 2 == 0) {
                echo '<div class="flex justify-center items-center space-x-1 mt-4">';
            }
        ?>
            <div class="food space-y-4 p-4 rounded-3xl border-2 border-primary shadow-2xl w-1/2 h-full">
                <a href="Specific-<?php echo $food['file']; ?>">
                    <div>
                        <img class="bg-none" src="<?php echo $food['picture']; ?>" alt="">
                    </div>
                    <div class="text-center">
                        <h1 class="text-lg font-primary"><?php echo $food['name']; ?></h1>
                        <h2 class="text-xs"><?php echo $food['details']; ?></h2>
                    </div>
                </a>
            </div>
        <?php 
            if ($count % 2 == 1 || $count == count($foods) - 1) {
                echo '</div>';
            }
            $count++;
        } ?>
    </div>

    <div class="2sm:hidden sm:hidden md:block">
        <div class="flex space-x-4">
        <div class="left mr-10 w-1/2">
        <a class="" href="Specific-arbs.php">
            <div class="food border-2 border-primary shadow-2xl rounded-3xl p-4 space-x-4 h-full">
                <div class="">
                    <h1 class="font-primary text-3xl justify-center items-center flex">FEATURED! 
                        <span>
                        <img class="w-6" src="images/star-1.webp" alt="">
                    </span></h1>
                    <div class="flex items-center justify-center">
                    <img class="w-3/5 md:w-full lg:w-3/5" src="images/food-1.png" alt="">
                    </div>
                    
                </div>
                <div class="text-center mt-10">
                    <h1 class="text-4xl font-primary">Arb's Special Yowoi Mo</h1>
                    <h2 class="text-lg">Arb's Special Yowoi Mo is a delectable fusion dish that combines the rich flavors of Asian and Mediterranean cuisines to create a unique and unforgettable culinary experience.</h2>
                </div>
            </div>
        </a>
        </div>
        <div class="right w-1/2 space-y-4 flex flex-col items-center justify-center">
        <div class="flex space-x-4" href="">
            <a class="w-1/2" href="Specific-shean.php">
            <div class="food border-2 border-primary shadow-2xl rounded-3xl p-4 space-x-4 h-full">
                <div class="flex items-center justify-center">
                    <img class="w-[150px]" src="images/food-2.png" alt="">
                </div>
                <div class="text-center">
                    <h1 class="text-lg font-primary">Shean's Datekimi Soup</h1>
                    <h2 class="text-xs">Shean's Datekimi Soup" is a heartwarming and comforting soup that's a beloved specialty in Gojo's kitchen, known for its unique blend of flavors and wholesome ingredients.</h2>
                </div>
            </div>
            </a>
            <a class="w-1/2" href="Specific-rochel.php">
            <div class="food border-2 border-primary shadow-2xl rounded-3xl p-4 space-x-4 h-full">
                <div class="flex items-center justify-center">
                    <img class="w-[150px]" src="images/food-3.png" alt="">
                </div>
                <div class="text-center">
                    <h1 class="text-lg font-primary">Rochel's Daijoubo Chicken</h1>
                    <h2 class="text-xs">Rochel's Daijoubo Chicken is a delightful and comforting dish that's become a signature in Rochel's culinary repertoire.</h2>
                </div>
            </div>
            </a>
        </div>
        <div class="flex space-x-4" href="">
            <a class="w-1/2" href="Specific-suizo.php">
            <div class="food border-2 border-primary shadow-2xl rounded-3xl p-4 space-x-4 h-full">
                <div class="flex items-center justify-center">
                    <img class="w-[150px]" src="images/food-4.png" alt="">
                </div>
                <div class="text-center">
                    <h1 class="text-lg font-primary">Suizo's Ramyeon Imnida</h1>
                    <h2 class="text-xs">Suizo's Ramyeon Imnida is a delightful Korean-inspired noodle dish that combines the rich and bold flavors of ramyeon (Korean-style ramen) with a unique twist, resulting in a memorable culinary experience.</h2>
                </div>
            </div>
            </a>
            <a class="w-1/2" href="Specific-rey.php">
            <div class="food border-2 border-primary shadow-2xl rounded-3xl p-4 space-x-4 h-full">
                <div class="flex items-center justify-center">
                    <img class="w-[160px]" src="images/food-5.png" alt="">
                </div>
                <div class="text-center">
                    <h1 class="text-lg font-primary">Rey's Normal Food</h1>
                    <h2 class="text-xs">Rey's Normal Food is a high-quality and nutritious pet food brand that is dedicated to providing the best nourishment for our beloved canine companions.</h2>
                </div>
            </div>
            </a>
        </div>
        </div>
        </div>
        </div>
    </div>
</div>


    
    <!-- <div class="food space-y-4 p-4 rounded-3xl border-2 border-primary shadow-2xl w-1/2">
        <div>
            <img class="bg-none" src="images/food-1.png" alt="">
        </div>
        <div class="text-center">
            <h1 class="text-3xl font-primary">Arb's Special Yowoi Mo</h1>
            <h2>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quam modi vero id eum. Dolor, eaque.</h2>
        </div>
    </div>

    <div class="food space-y-4 p-4 rounded-3xl border-2 border-primary shadow-2xl w-1/2">
        <div>
            <img class="bg-none" src="images/food-2.png" alt="">
        </div>
        <div class="text-center">
            <h1 class="text-3xl font-primary">Shean's Datekimi Soup</h1>
            <h2>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quam modi vero id eum. Dolor, eaque.</h2>
        </div>
    </div>
</div>
<div class="flex space-x-3">
    <div class="food space-y-4 p-4 rounded-3xl border-2 border-primary shadow-2xl w-1/2">
        <div>
            <img class="bg-none" src="images/food-3.png" alt="">
        </div>
        <div class="text-center">
            <h1 class="text-3xl font-primary">Rochel's Daijoubo Chicken</h1>
            <h2>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quam modi vero id eum. Dolor, eaque.</h2>
        </div>
    </div>

    <div class="food space-y-4 p-4 rounded-3xl border-2 border-primary shadow-2xl w-1/2">
        <div>
            <img class="bg-none" src="images/food-4.png" alt="">
        </div>
        <div class="text-center">
            <h1 class="text-3xl font-primary">Suizo's Ramyeon Imnida</h1>
            <h2>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quam modi vero id eum. Dolor, eaque.</h2>
        </div>
    </div>
</div>
<div class="flex space-x-3 items-center justify-center">
    <div class="food space-y-4 p-4 rounded-3xl border-2 border-primary shadow-2xl w-1/2">
        <div>
            <img class="bg-none" src="images/food-5.png" alt="">
        </div>
        <div class="text-center">
            <h1 class="text-3xl font-primary">Rey's Normal Food</h1>
            <h2>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quam modi vero id eum. Dolor, eaque.</h2>
        </div>
    </div>
</div> -->


<style>
    .food:hover{
        transition: .4s all ease-in-out;
        background-color: #a7cfe9;
    }
</style>