<div {{ $attributes->merge(['class' => 'alert alert-danger']) }}>
    @foreach ($errors->all() as $error)
        <div>{{ $error }}</div>
    @endforeach
</div>