@props([
    'checkSession' => true,
    'checkErrors' => true,
])

<div
    x-data="{
        show: false,
        message: '',
        type: 'success',
        init() {
            @if ($checkSession && session('success'))
                this.showAlert(@js(session('success')), 'success');
            @endif
            @if ($checkErrors && $errors->any())
                this.showAlert(@js(implode(' ', $errors->all())), 'error');
            @endif
        },
        showAlert(msg, alertType) {
            this.message = msg;
            this.type = alertType;
            this.show = true;
            setTimeout(() => {
                this.dismiss();
            }, 5000);
        },
        dismiss() {
            this.show = false;
            setTimeout(() => {
                this.message = '';
            }, 300);
        }
    }"
    class="fixed top-4 right-4 z-50 max-w-md w-full"
    x-show="show"
    x-transition:enter="transition ease-out duration-300"
    x-transition:enter-start="opacity-0 transform translate-x-full"
    x-transition:enter-end="opacity-100 transform translate-x-0"
    x-transition:leave="transition ease-in duration-200"
    x-transition:leave-start="opacity-100 transform translate-x-0"
    x-transition:leave-end="opacity-0 transform translate-x-full"
    style="display: none;"
>
    <div
        :class="type === 'error' ? 'bg-red-600 border-red-700' : 'bg-green-600 border-green-700'"
        class="border text-white px-4 py-3 rounded-lg shadow-lg flex items-start justify-between gap-3"
        role="alert"
    >
        <div class="flex-1">
            <p class="font-medium" x-text="message"></p>
        </div>
        <button
            @click="dismiss()"
            class="shrink-0 text-white hover:text-white/80 transition-colors focus:outline-none focus:ring-2 focus:ring-white/50 rounded p-1"
            aria-label="Dismiss"
        >
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
    </div>
</div>
