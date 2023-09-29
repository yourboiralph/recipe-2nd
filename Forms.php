<div class="h-screen m-10">
<h1 class="md:flex md:text-7xl font-primary text-center md:justify-center md:items-center
        2sm:hidden">Message us!</h1>

<div class="2sm:mt-10 
md:flex md:space-x-5 md:items-center md:justify-center">
    <div class="text-center
    md:w-1/2">
        <h1 class="text-7xl font-primary md:hidden">Message us!</h1>
        <img class="w-full" src="images/gojo-bg.png" alt="">
        <div class="bg-primary">
        <div class="flex justify-center text-center">
        <h2 class="text-5xl font-primary px-4">The Gojo Team!</h2>
        </div>
        </div>
    </div>
    <div class="mt-10
    md:w-1/2 md:mt-0">
        <form class="flex flex-col">
            <label>Name</label>
            <input class=" rounded-md border-2 border-primary h-10 px-3" type="text" require>
            <label>Email</label>
            <input class=" rounded-md border-2 border-primary h-10 px-3" type="email" require>
            <label>Message</label>
            <textarea class="rounded-md border-2 border-primary resize-none h-32 py-3 px-3 
            md:h-44"></textarea>
            <button class="btn-1 p-4 mt-4 bg-primary hover:bg-primaryclicked shadow-2xl">Submit</button>
        </form>
    </div>
</div>
<div class="hidden mt-10 bg-primary rounded-2xl
md:flex md:items-center md:justify-center">
<img class="w-64" src="images/gojo-2x2.png" alt="">
    <h1 class="text-7xl font-primary">Thanks for Messaging!</h1>
</div>
</div>

<style>
    .btn-1:hover{
        transition: 0.2s all ease-in-out;
        font-size: 15px;
    }
</style>