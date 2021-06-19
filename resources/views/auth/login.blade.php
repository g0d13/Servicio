<x-guest-layout>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4">
                <div class="login-form shadow mt-4 p-4">
                    <form action="{{ route('login') }}" method="POST" class="row g-3">
                        @csrf
                        <h4 class="col-12">Bienvenido</h4>
                        <div class="col-12">
                            <label for="email">Correo</label>
                            <input id="email" type="email" name="email" class="form-control" placeholder="Correo" required>
                        </div>
                        <div class="col-12 mt-2">
                            <label for="password">Contraseña</label>
                            <input id="password" type="password" name="password" class="form-control" placeholder="Contraseña" required>
                        </div>
                        <div class="col-12 mt-3">
                            <button type="submit" class="btn btn-primary float-right">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
