<button wire:click="addToCart" wire:loading.attr="disabled" class="cursor-pointer py-4">
    <span class="text-white" wire:loading.remove>Add to Cart</span>
    <span class="text-white" wire:loading>Adding..</span>
</button>