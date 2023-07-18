<div class="w-96 flex flex-col">
    <form wire:submit.prevent="storeMessage">
        <div class=""></div>
        <div class="">
            <h1 class=" sm:text-2xl ">Leave a message</h1>
            <textarea wire:model.defer="message" class="p-2 rounded font-black text-black " placeholder="Leave a message" id="" cols="30" rows="3"></textarea>
        </div>
        <div>
            <button class="py-1 px-2 sm:py-2 sm:px-5 rounded-lg bg-blue-600" type="submit"> Send</button>
        </div>
    </form>
</div>
