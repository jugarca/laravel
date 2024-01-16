<!--Se modifica el x-auth-session-status  que es un componente del auth por uno cuyo nombre no 
                    refleje lo del auth.-->
<x-session-status class="mb-4" :status="session('status')" />
<form action="{{route('posts.store')}}" method="post">
    @csrf
    <div class="mt-4">
        <x-input-label for="body" :value="__('Body')" />
        <x-textarea class="block mt-1 w-full" name="body" required />
        <x-input-error class="mt-2" :messages="$errors->get('body')" />
    </div>
    <div class="flex justify-end mt-4">
        <x-primary-button>
            {{ __('Save') }}
        </x-primary-button>
    </div>
</form>