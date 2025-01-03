<?php

use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;
use App\Models\Mail as MailModel;
use App\Mail\ContactFormSubmitted;
use Livewire\Volt\Component;
use Illuminate\Support\Facades\Mail;



new
#[Layout('layouts.frontend.app')] 
#[Title('Campaigns USA | Contact')] 
class extends Component {
    
	public $first_name = '';
	public $last_name = '';
	public $email = '';
	public $message = '';

	public function submitMail()
	{
		$this->validate();

		$inputs = [
			'first_name' => $this->first_name,
			'last_name' => $this->last_name,
			'email' => $this->email,
			'message' => $this->message,
		];
		// dd($inputs);

		
		try {
			$contact_form = MailModel::create($inputs);
			Mail::to(env('MAIL_TO_ADDRESS'))->send(new ContactFormSubmitted($inputs));
			$this->reset(['first_name', 'last_name', 'email', 'message']);
			$this->dispatch('mail-created');
		} catch (\Throwable $e) {
			$this->dispatch('mail-error');
		}
		

	}

	public function rules()
	{
		return [
			'first_name' => 'required|string|max:255',
			'last_name' => 'required|string|max:255',
			'email' => 'required|email',
			'message' => 'required|string|max:255',
		];
	}
}; ?>

<div>
    <div class="relative isolate">
        <!-- Header -->
        <div class="relative pb-32 bg-gray-800">
            <div class="absolute inset-0">
            <img class="object-cover size-full" src="https://images.unsplash.com/photo-1525130413817-d45c1d127c42?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1920&q=60&&sat=-100" alt="">
            <div class="absolute inset-0 bg-gray-800 mix-blend-multiply" aria-hidden="true"></div>
            </div>
            <div class="relative px-5 py-24 mx-auto max-w-7xl sm:py-32" data-aos="zoom-in-up" wire:ignore>
              <h1 class="text-4xl font-bold tracking-tight text-white md:text-5xl lg:text-6xl">Support</h1>
              <p class="max-w-3xl mt-6 text-xl text-gray-300">Varius facilisi mauris sed sit. Non sed et duis dui leo, vulputate id malesuada non. Cras aliquet purus dui laoreet diam sed lacus, fames. Dui, amet, nec sit pulvinar.</p>
            </div>
        </div>
        
        <!-- Overlapping cards -->
        <section class="relative z-10 px-5 pb-32 mx-auto -mt-32 max-w-7xl" aria-labelledby="contact-heading">
            <h2 class="sr-only" id="contact-heading">Contact us</h2>
            <div class="grid grid-cols-1 gap-y-20 lg:grid-cols-3 lg:gap-x-8 lg:gap-y-0">
            <div class="flex flex-col bg-white shadow-xl rounded-2xl">
                <div class="relative flex-1 px-5 pt-16 pb-8 md:px-8">
                <div class="absolute top-0 inline-block p-5 transform -translate-y-1/2 shadow-lg bg-slate-600 rounded-xl">
                    <svg class="text-white size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z" />
                    </svg>
                </div>
                <h3 class="text-xl font-medium text-gray-900">Lorem.</h3>
                <p class="mt-4 text-base text-gray-500">Varius facilisi mauris sed sit. Non sed et duis dui leo, vulputate id malesuada non. Cras aliquet purus dui laoreet diam sed lacus, fames.</p>
                </div>
            </div>
            <div class="flex flex-col bg-white shadow-xl rounded-2xl">
                <div class="relative flex-1 px-5 pt-16 pb-8 md:px-8">
                <div class="absolute top-0 inline-block p-5 transform -translate-y-1/2 shadow-lg bg-slate-600 rounded-xl">
                    <svg class="text-white size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M16.712 4.33a9.027 9.027 0 0 1 1.652 1.306c.51.51.944 1.064 1.306 1.652M16.712 4.33l-3.448 4.138m3.448-4.138a9.014 9.014 0 0 0-9.424 0M19.67 7.288l-4.138 3.448m4.138-3.448a9.014 9.014 0 0 1 0 9.424m-4.138-5.976a3.736 3.736 0 0 0-.88-1.388 3.737 3.737 0 0 0-1.388-.88m2.268 2.268a3.765 3.765 0 0 1 0 2.528m-2.268-4.796a3.765 3.765 0 0 0-2.528 0m4.796 4.796c-.181.506-.475.982-.88 1.388a3.736 3.736 0 0 1-1.388.88m2.268-2.268 4.138 3.448m0 0a9.027 9.027 0 0 1-1.306 1.652c-.51.51-1.064.944-1.652 1.306m0 0-3.448-4.138m3.448 4.138a9.014 9.014 0 0 1-9.424 0m5.976-4.138a3.765 3.765 0 0 1-2.528 0m0 0a3.736 3.736 0 0 1-1.388-.88 3.737 3.737 0 0 1-.88-1.388m2.268 2.268L7.288 19.67m0 0a9.024 9.024 0 0 1-1.652-1.306 9.027 9.027 0 0 1-1.306-1.652m0 0 4.138-3.448M4.33 16.712a9.014 9.014 0 0 1 0-9.424m4.138 5.976a3.765 3.765 0 0 1 0-2.528m0 0c.181-.506.475-.982.88-1.388a3.736 3.736 0 0 1 1.388-.88m-2.268 2.268L4.33 7.288m6.406 1.18L7.288 4.33m0 0a9.024 9.024 0 0 0-1.652 1.306A9.025 9.025 0 0 0 4.33 7.288" />
                    </svg>
                </div>
                <h3 class="text-xl font-medium text-gray-900">Lorem, ipsum.</h3>
                <p class="mt-4 text-base text-gray-500">Varius facilisi mauris sed sit. Non sed et duis dui leo, vulputate id malesuada non. Cras aliquet purus dui laoreet diam sed lacus, fames.</p>
                </div>
            </div>
            <div class="flex flex-col bg-white shadow-xl rounded-2xl">
                <div class="relative flex-1 px-5 pt-16 pb-8 md:px-8">
                <div class="absolute top-0 inline-block p-5 transform -translate-y-1/2 shadow-lg bg-slate-600 rounded-xl">
                    <svg class="text-white size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 0 1-2.25 2.25M16.5 7.5V18a2.25 2.25 0 0 0 2.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 0 0 2.25 2.25h13.5M6 7.5h3v3H6v-3Z" />
                    </svg>
                </div>
                <h3 class="text-xl font-medium text-gray-900">Lorem, ipsum dolor.</h3>
                <p class="mt-4 text-base text-gray-500">Varius facilisi mauris sed sit. Non sed et duis dui leo, vulputate id malesuada non. Cras aliquet purus dui laoreet diam sed lacus, fames.</p>
                </div>
            </div>
            </div>
        </section>
          
		<div class="grid grid-cols-1 mx-auto mb-32 max-w-7xl lg:grid-cols-2">
			<div class="relative px-5">
				<div class="max-w-xl mx-auto lg:mx-0 lg:max-w-lg">
				<h2 class="text-4xl font-semibold tracking-tight text-gray-900 text-pretty sm:text-5xl">Get in touch</h2>
				<p class="mt-6 text-gray-600 text-lg/8">Proin volutpat consequat porttitor cras nullam gravida at. Orci molestie a eu arcu. Sed ut tincidunt integer elementum id sem. Arcu sed malesuada et magna.</p>
				<dl class="mt-10 space-y-4 text-gray-600 text-base/7">
					<div class="flex gap-x-4">
					<dt class="flex-none">
						<span class="sr-only">Address</span>
						<svg class="w-6 text-gray-400 h-7" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
						<path stroke-linecap="round" stroke-linejoin="round" d="M2.25 21h19.5m-18-18v18m10.5-18v18m6-13.5V21M6.75 6.75h.75m-.75 3h.75m-.75 3h.75m3-6h.75m-.75 3h.75m-.75 3h.75M6.75 21v-3.375c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21M3 3h12m-.75 4.5H21m-3.75 3.75h.008v.008h-.008v-.008Zm0 3h.008v.008h-.008v-.008Zm0 3h.008v.008h-.008v-.008Z" />
						</svg>
					</dt>
					<dd>545 Mavis Island<br>Chicago, IL 99191</dd>
					</div>
					<div class="flex gap-x-4">
					<dt class="flex-none">
						<span class="sr-only">Telephone</span>
						<svg class="w-6 text-gray-400 h-7" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
						<path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z" />
						</svg>
					</dt>
					<dd><a class="hover:text-gray-900" href="tel:+1 (555) 234-5678">+1 (555) 234-5678</a></dd>
					</div>
					<div class="flex gap-x-4">
					<dt class="flex-none">
						<span class="sr-only">Email</span>
						<svg class="w-6 text-gray-400 h-7" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
						<path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
						</svg>
					</dt>
					<dd><a class="hover:text-gray-900" href="mailto:hello@example.com">hello@example.com</a></dd>
					</div>
				</dl>
				</div>
			</div>
			<form wire:submit="submitMail" class="px-5">
				<div class="max-w-xl pt-16 mx-auto lg:pt-0 lg:mr-0 lg:max-w-lg">
					<div class="grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-2">
						<div>
							<label for="first-name" class="block font-semibold text-gray-900 text-sm/6">First name</label>
							<div class="mt-2.5">
								<input type="text" wire:model="first_name" id="first-name" autocomplete="given-name" class="block w-full rounded-md bg-white px-3.5 py-2 text-base text-gray-900 placeholder:text-gray-400 focus:ring-0 border border-gray-300">
							</div>
							@error('first_name')<div class="mt-2.5 text-sm/6 text-red-400">{{ $message }}</div>@enderror
						</div>
						<div>
							<label for="last-name" class="block font-semibold text-gray-900 text-sm/6">Last name</label>
							<div class="mt-2.5">
								<input type="text" wire:model="last_name" id="last-name" autocomplete="family-name" class="block w-full rounded-md bg-white px-3.5 py-2 text-base text-gray-900 placeholder:text-gray-400 focus:ring-0 border border-gray-300">
							</div>
							@error('last_name')<div class="mt-2.5 text-sm/6 text-red-400">{{ $message }}</div>@enderror
						</div>
						<div class="sm:col-span-2">
							<label for="email" class="block font-semibold text-gray-900 text-sm/6">Email</label>
							<div class="mt-2.5">
								<input type="email" wire:model="email" id="email" autocomplete="email" class="block w-full rounded-md bg-white px-3.5 py-2 text-base text-gray-900 placeholder:text-gray-400 focus:ring-0 border border-gray-300">
							</div>
							@error('email')<div class="mt-2.5 text-sm/6 text-red-400">{{ $message }}</div>@enderror
						</div>
						<div class="sm:col-span-2">
							<label for="message" class="block font-semibold text-gray-900 text-sm/6">Message</label>
							<div class="mt-2.5">
								<textarea wire:model="message" id="message" rows="4" class="block w-full rounded-md bg-white px-3.5 py-2 text-base text-gray-900 placeholder:text-gray-400 focus:ring-0 border border-gray-300"></textarea>
							</div>
							@error('message')<div class="mt-2.5 text-sm/6 text-red-400">{{ $message }}</div>@enderror
						</div>
					</div>
					<div class="flex justify-end mt-8">
						<button type="submit" class="rounded-md bg-slate-600 px-3.5 py-2.5 text-center text-sm font-semibold text-white shadow-sm hover:bg-slate-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-slate-600">Send message</button>
					</div>
					<div 
						x-data="{ show: false }" 
						x-on:mail-created.window="show = true; setTimeout(() => show = false, 10000)" 
						x-show="show" 
						x-cloak
						class="flex justify-end mt-4 text-green-600"
					>
						Your message has been successfully sent.
					</div>
					<div 
						x-data="{ show: false }" 
						x-on:mail-error.window="show = true; setTimeout(() => show = false, 10000)" 
						x-show="show" 
						x-cloak
						class="flex justify-end mt-4 text-red-600"
					>
						Emailed Failed, Please try again later.
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
