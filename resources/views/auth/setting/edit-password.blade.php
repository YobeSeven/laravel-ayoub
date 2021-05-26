<section class="w-full mt-10 max-w-sm p-6 m-auto bg-gray-100 rounded-md shadow-md">
    <h3 class="text-3xl font-semibold text-center text-gray-700">
        Change Password
    </h3>
    <form action="{{route('setting-profile.updateProfile')}}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="current_password" class="mt-2">
                Actual Password
            </label>
            <input type="password" id="current_password" name="current_password"
            class="w-full px-4 py-2 mt-2 border rounded-md">
            @error('current_password')
            <span class="text-red">
                <strong>{{$message}}</strong>
            </span>
            @enderror
        </div>    
        <div>
            <label for="password" class="mt-2">
                New Password
            </label>
            <input type="password" id="password" name="password"
            class="w-full px-4 py-2 mt-2 border rounded-md">
            @error('password')
            <span class="text-red">
                <strong>{{$message}}</strong>
            </span>
            @enderror
        </div>  
        <div>
            <label for="password_confirmation" class="mt-2">
                Confirm new Password
            </label>
            <input type="password" id="password_confirmation" name="password_confirmation"
            class="w-full px-4 py-2 mt-2 border rounded-md">
            @error('password_confirmation')
            <span class="text-red">
                <strong>{{$message}}</strong>
            </span>
            @enderror
        </div>  
        <button type="submit"
        class="w-full px-4 py-2 mt-2 tracking-wide text-white bg-gray-700 rounded-md hover:bg-gray-600">
            Save changes
        </button>
    </form>
</section>
