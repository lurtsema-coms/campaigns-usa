import './bootstrap';
import { Livewire, Alpine } from '../../vendor/livewire/livewire/dist/livewire.esm';
 
Alpine.directive('clipboard', (el, { expression }) => {
    const text = expression;
 
    el.addEventListener('click', () => {
        navigator.clipboard.writeText(text)
    })
})
 
Livewire.start()