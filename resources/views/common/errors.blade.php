<!-- resources/views/common/errors.blade.php -->

@if (count($errors) > 0)
        <!-- Form Error List -->
<ul class="alert alert-danger">
    <strong>The following error(s) occurred:</strong>
        @foreach ($errors->all() as $error)

            <ul>{{ $error }}</ul>

        @endforeach
</ul>
@endif