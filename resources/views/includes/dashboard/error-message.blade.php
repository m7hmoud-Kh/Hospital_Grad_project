@if ($errors->any())
        <ul class="list-unstyled">
            @foreach ($errors->all() as $error)
                <li>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ $error }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </li>
            @endforeach
        </ul>
@endif
