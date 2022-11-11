<x-layouts.app>
    @auth
        <div class="container">
            <div class="row">
                <div class="col-8 mx-auto">
                    <div class="card border-0 bg-light">
                        <status-form />
                    </div>
                </div>
            </div>
        </div>
    @endauth
</x-layouts.app>
