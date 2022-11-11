<x-layouts.app>
    @auth
        <div class="container">
            <div class="row">
                <div class="col-8 mx-auto">
                    <div class="card border-0 bg-light">
                        <form action="{{ route('statuses.store') }}" method="post">
                            @csrf
                            <div class="card-body">
                                <textarea name="body" class="form-control border-0 bg-light" placeholder="Whats app Jorge?"></textarea>
                            </div>
                            <div class="card-footer">
                                <button class="btn btn-primary" id="create-status">Publish</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endauth
</x-layouts.app>
